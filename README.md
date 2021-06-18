# Question 2
```
SELECT count(*) as number_of_orders, CASE
    WHEN orders_table.sales_type = "Normal"
        THEN sum(normal_price)
    WHEN orders_table.sales_type = "Promotion"
        THEN sum(promotion_price)
    END AS total_sales_amount
FROM orders_table INNER JOIN orders_products_table ON orders_table.order_id = orders_products_table.order_id GROUP BY orders_products_table.order_id;
```

# Question 1

## Steps to setup

## Install composer dependency in project folder and copy env file
```
composer install
cp .env.example .env
```

## Generate app key using this command 
```
php artisan key:generate
```

Change database credentials in DB_DATABASE field inside .env file. 

## Run database migration and seed wtih dummy data using this command
```
php artisan migrate 
php artisan db:seed 
```

## Serve the website
```
php artisan serve
```

## Links: 

Gst calculator link 
Location: app/Http/Controller/GstCalculator.php 
- [Gst Calculator](http://127.0.0.1:8000/gst-calculator) 

Order submission:  
Location: app/Http/Controller/OrderController.php 

- [Complete order](http://127.0.0.1:8000/complete-order/1) 

Fetch Users Reward info
- [Fetch reward info](http://127.0.0.1:8000/rewards)
