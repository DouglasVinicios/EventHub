
#!/bin/bash

if [ "$AMBIENT" = "local" ] && [ -d "/var/www/html/node_modules" ]; then
    echo "Executando o laravel mix no ambiente $AMBIENT"
    npx mix watch -- --watch-options-poll=1000
fi