<?php
$envContent = <<<'EOD'
APP_NAME="Web GIS Desa Senenan"
APP_ENV=local
APP_KEY=base64:CopZ9eNEqB647DjiqRISvNM/ll0c2QrEhVKqeLS0paQ=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gis_senenan
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
EOD;

file_put_contents('.env', $envContent);
echo ".env file created/updated successfully\n";
