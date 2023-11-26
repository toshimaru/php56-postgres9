from php:5.6-alpine

WORKDIR /app

RUN apk update && apk add --no-cache \
    postgresql-client \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql
