# Tutorial Instructions


### 1.config you db

#### Terminal 
    create a model with factory, migration and controller
    ```bash
    php artisan make:model Channel -fmc 
    ```
    then watch migration and factory file and
    ```bash
    php artisan migrate
    ```
### Let's play with db
```bash
php artisan tinker
```
```php
factory(\App\Channel::class, 20)->create();
```




     