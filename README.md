# PORTAL BMU

## Yang harus disiapkan setelah clone project

1. Update composer

```javascript
composer update
```

2. Copy file `env` dan ganti menjadi `.env` atau salin code dibawah ini

```javascript
cp env .env
```

3. Buka file `.env` hilangkan # *#CI_ENVIRONMENT = development*, *CI_ENVIRONMENT = development*

4. Buka file `.env` hilangkan # *#app.baseURL = 'http://localhost:8080/'*, *app.baseURL = 'http://localhost:8080/'*

5. Buka file `.env` hilangkan # 
    - *#database.default.hostname = localhost*
    - *#database.default.database = portal*
    - *#database.default.username = root*
    - *#database.default.password =*
    - *#database.default.DBDriver = MySQLi*

6. Copy code dibawah ini buka command line tools **Migration DB**
```javascript
php spark migrate
```

7. Copy code dibawah ini buka command line tools **Seeding DB**
```javascript
php spark db:seed allseeder
```

8. Copy code dibawah ini buka command line tools **Running App**
```javascript
php spark serve
```


## Refresh database

1. Copy code dibawah ini buka command line tools **Migration Refresh DB**
```javascript
php spark migrate:refresh
```

2. Copy code dibawah ini buka command line tools **Seeding DB**
```javascript
php spark db:seed allseeder
```

3. Copy code dibawah ini buka command line tools **Running App**
```javascript
php spark serve
```
