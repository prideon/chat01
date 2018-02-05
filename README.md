# Realtime laravel chat using Vue.js and Pusher.

![Screenshot1](https://image.ibb.co/gi8Nvc/img01.png)
![Screenshot1](https://image.ibb.co/bKR9ac/img2.png)



## Начало

Клонируем или скачиваем репозиторий


```bash
git clone https://github.com/prideon/chat01.git
```

После установки запускаем 

```bash
composer install
```

Заполняем наш .env файл - вводим хост, название и пароль нашей базы данных.

После этого запускаем команду:

```bash
php artisan key:generate
```

### Установка Pusher'a


Данные пушера уже присутствуют в .env файле.

Для того, чтоб привязать свое приложение нужно зарегистрироваться на сайте [https://pusher.com/signup](https://pusher.com/signup) после этого вводим данные нашего приложение в .env файл.

Заполним свойство `BROADCAST_DRIVER` в нашем `.env` файле to **pusher**:

```txt
BROADCAST_DRIVER=pusher
```

После этого заполним данные о нащем приложении в `.env` файле:

```txt
PUSHER_APP_ID=xxxxxx
PUSHER_APP_KEY=xxxxxxxxxxxxxxxxxxxx
PUSHER_APP_SECRET=xxxxxxxxxxxxxxxxxxxx
PUSHER_APP_CLUSTER=
```

### Работа с базой данных

Добавьте данные о вашей базе данных в `.env` файл. После этого запустите команду:

```bash
php artisan migrate
```

По желанию:

```bash
php artisan serve
```
открываем[http://localhost:8000/](http://localhost:8000/) в браузере
