# Question 2
```
SELECT orders_table.order_id, count(*) as number_of_orders, CASE
    WHEN orders_table.sales_type = "Normal"
        THEN sum(normal_price)
    WHEN orders_table.sales_type = "Promotion"
        THEN sum(promotion_price)
    END AS total_sales_amount
FROM orders_table INNER JOIN orders_products_table ON orders_table.order_id = orders_products_table.order_id GROUP BY orders_products_table.order_id;
```

# Question 1
[Flowchart diagram on the reward system](https://drive.google.com/file/d/1dpm3jUAGTZq7PR3hFPcXw-Fc1wQCFQSe/view?usp=sharing)

[MySQL database schema for this reward system](https://drive.google.com/file/d/1jkKT02gUCnNXFooDtkEm23jkCGhRE4d9/view?usp=sharing)

## Steps to setup

Either follow the installation guide from laravel docs
[Laravel installation docs](https://laravel.com/docs/8.x/installation)

OR

First get composer installed in your system 
[composer](https://getcomposer.org)

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
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=root
DB_PASSWORD=YOUR_DB_PASSWORD
```

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
