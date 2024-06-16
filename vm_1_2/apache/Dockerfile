# Usando a imagem oficial do Apache HTTPD em uma versão leve do Alpine Linux
FROM httpd:2.4.33-alpine

# Atualiza os pacotes existentes
RUN apk update && apk upgrade

# Copia o arquivo de configuração customizado do Apache para dentro do contêiner
COPY apache_php.conf /usr/local/apache2/conf/apache_php.conf

# Adiciona uma linha ao httpd.conf para incluir o arquivo de configuração customizado
RUN echo "Include /usr/local/apache2/conf/apache_php.conf" \
    >> /usr/local/apache2/conf/httpd.conf

# Define o diretório de trabalho padrão
WORKDIR /usr/local/apache2/htdocs

# Expõe a porta 80, que é a porta padrão do Apache
EXPOSE 80
