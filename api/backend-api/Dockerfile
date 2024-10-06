# Usar a imagem oficial do PHP com CLI
FROM php:8.1-cli

# Instalar extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar o código da aplicação
COPY . .

# Instalar as dependências do Composer
RUN composer install

# Expor a porta 8080
EXPOSE 8080

# Comando para iniciar o servidor embutido do PHP
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
