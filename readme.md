# Larticles Vue/Laravel App

> Laravel 5.5 API that uses the API resources with a Vue.js frontend

## Quick Start

``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Articles
php artisan db:seed

# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate

# Install JS dependencies
npm install

# Watch/compile 
npm run watch
```

## Endpoints

### List all articles with links and meta
``` bash
GET api/articles
```
### Get single article
``` bash
GET api/article/{id}
```

### Delete article
``` bash
DELETE api/article/{id}
```

### Add article
``` bash
POST api/article
title/body
```

### Update article
``` bash
PUT api/article
article_id/title/body
```


```

## App Info

### Author

Brad Traversy
[Traversy Media](http://www.traversymedia.com)

### Version

1.0.0

### License

This project is licensed under the MIT License
