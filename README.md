# EventHub - O gerenciador de eventos
![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge)

# Executando a aplicação

`docker-compose build`

Após completar o build

`docker-compose up -d`

Existe um alias do sail se preferir, como a [documentação sugere aqui](https://laravel.com/docs/11.x/sail#configuring-a-shell-alias)

# Instalando as dependências

Após levantar criar o container, será necessário realizar a instalação das dependências

`composer install` e `npm install -y --legacy-peer-deps`

Se preferir execute os scripts prontos

`sh ./docker/scripts/composer-install.sh && ./docker/scripts/npm-install.sh`