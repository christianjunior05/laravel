FROM php:8.2-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    cron git ca-certificates curl gnupg \
    libpng-dev libonig-dev libxml2-dev libzip-dev \
    libpq-dev zip unzip libgmp-dev sudo aptitude \
    supervisor

# Install NodeJs
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
RUN apt install nodejs -y
RUN aptitude install npm -y
RUN npm install -g npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo  pdo_pgsql mbstring exif pcntl bcmath gd sockets zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
RUN adduser $user sudo

# Set working directory
WORKDIR /var/www

# PHP configuration
COPY php/php.ini /usr/local/etc/php/conf.d/php.ini


USER $user



# ENTRYPOINT ["/docker-entrypoint.sh"]
# CMD ["php-fpm", "-F"]
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]