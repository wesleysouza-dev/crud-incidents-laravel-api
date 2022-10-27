## Incidentes - CRUD API com Laravel
API criada para fins de teste, contendo todas as operações de CRUD. A API é consumida por um dashboard em React, disponível [AQUI](https://github.com/wesleysouza-dev/crud-incidents-react-redux) para clone/download.

### Pré Requisitos:

- Docker Compose ([saiba mais](https://docs.docker.com/compose/install/));
- Docker ([saiba mais](https://docs.docker.com/))
  - Windows
    - Docker Desktop com WSL2 ([veja aqui](https://github.com/codeedu/wsl2-docker-quickstart))


### Passo a passo
Clone Repositório
```sh
git clone https://github.com/wesleysouza-dev/crud-incidents-laravel-api.git api-incidents 
```

Navegue até o diretório do projeto
```sh
cd api-incidents
```

Crie o arquivo .env (No caso uma cópia do .env.example)
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env (caso necessário)
```dosini
APP_NAME=Incidents
APP_URL=http://localhost:8180

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=incidents
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Criar a tabela e campos do Banco de Dados
```sh
php artisan migrate
```


Acesse o projeto em [http://localhost:8989](http://localhost:8989)

### Endpoints disponíveis
```sh
GET localhost:8989/api/incidents
GET localhost:8989/api/incidents/[id]
POST localhost:8989/api/incidents
PUT localhost:8989/api/incidents/[id]
DEL localhost:8989/api/incidents/[id]
```

Até a próxima :smiley:!!

[![Logo Wesley Souza - Desenvolvedor Web](logo-wrs.png)](https://wesleysouza.dev)
