FROM php:8.2-apache

# Instala extensões PHP e dependências
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable pdo pdo_mysql

# Copia os arquivos do seu projeto para o diretório do Apache
COPY . /var/www/html/

# Configura o diretório raiz do Apache para o seu projeto
RUN chown -R www-data:www-data /var/www/html