#Setting up the base image
FROM php:8.1.2-fpm

RUN mkdir -p /app

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer 

# Copy the existing application directory contents to the working directory
COPY ./backend /var/www

# Copy the existing application directory permissions to the working directory
COPY --chown=www-data:www-data ./backend /var/www

# adjusting the permissions
RUN chown -R www-data:www-data /var/www/storage && \
    chmod -R 775 /var/www/storage && \
    chown -R www-data:www-data /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/bootstrap/cache && \
    chown -R www-data:www-data /app && \
    chmod -R 775 /app 
# Change current user to www


USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]