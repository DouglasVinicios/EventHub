#!/bin/bash

CONTAINER="eventhub-app-1"

# Verifica se o contêiner está em execução
if [ "$(docker inspect -f '{{.State.Running}}' "$CONTAINER" 2>/dev/null)" = "true" ]; then

    echo "Contêiner está em execução, executando composer install dentro do contêiner..."

    # Executa o comando npm install dentro do contêiner
    docker exec "$CONTAINER" sh -c 'cd /var/www/html && composer install'

    echo "composer install concluído."

    echo "Reiniciando o container "$CONTAINER""

    docker restart $CONTAINER

    echo "Container "$CONTAINER" reiniciado"
else
    echo "Erro: Contêiner "$CONTAINER" não está em execução."
fi
