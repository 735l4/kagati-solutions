# Steps to setup

## install composer dependency in project folder 
```
    composer install
    copy .env.example file to .env
    cp .env.example .env
```

generate app key using this command 
```
    php artisan key:generate
```

change database credentials in DB_DATABASE field inside .env file. \

run database migration and seed wtih dummy data using this command
```
 php artisan migrate 
 php artisan db:seed 
```


Links: \

Gst calculator link \ 
Location: app/Http/Controller/GstCalculator.php \
- **[Gst Calculator](http://127.0.0.1:8000/gst-calculator) \

Order submission:  
Location: app/Http/Controller/OrderController.php \

- **[Complete order](http://127.0.0.1:8000/complete-order/1) \

Fetch Reward info
- **[Fetch reward info](http://127.0.0.1:8000/rewards) \
