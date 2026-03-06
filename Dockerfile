FROM php:8.3-apache

# Instala extensões comuns
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia os arquivos do projeto
COPY src/ /var/www/html/

# Permissões
RUN chown -R www-data:www-data /var/www/html