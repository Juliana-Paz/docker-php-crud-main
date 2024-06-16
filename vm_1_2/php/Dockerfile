# Usando a imagem oficial do PHP com FPM (FastCGI Process Manager)
FROM php:7.2.7-fpm-alpine3.7

# Atualiza os pacotes existentes
RUN apk update && apk upgrade

# Instala a extensão mysqli para comunicação com o MySQL
RUN docker-php-ext-install mysqli

# Define o diretório de trabalho padrão
WORKDIR /var/www/html

# Expõe a porta 9000, que é a porta padrão do PHP-FPM
EXPOSE 9000
