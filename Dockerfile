# Stage 1: Build Node assets
FROM node:20 AS node_builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: Build PHP app
FROM php:8.3-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . .

# Copy built assets from node_builder
COPY --from=node_builder /app/public/build ./public/build

# Change DocumentRoot to public folder
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database and seed it
RUN touch database/database.sqlite \
    && APP_KEY=base64:Rou0y1ujvstnT3dWPCGMJExAlR+0CdRCMx+/4qyuJqE= DB_CONNECTION=sqlite DB_DATABASE=/var/www/html/database/database.sqlite php artisan migrate:fresh --seed --force

# Optimize Laravel and Clear Cache
RUN php artisan optimize:clear \
    && php artisan view:cache \
    && php artisan event:cache

# Set Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/database \
    && chmod 666 /var/www/html/database/database.sqlite

# Port configuration
EXPOSE 80

CMD ["apache2-foreground"]
