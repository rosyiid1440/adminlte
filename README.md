# Laravel AdminLTE 3

include :
1. AdminLTE 3
2. fontawesome
3. jquery

install this

    composer require rosyiid1440/adminlte


add provider to config/app.php

    Rosyiid1440\Adminlte\Adminlte::class,
    

publish view

    php artisan vendor:publish --provider="Rosyiid1440\Adminlte\Adminlte"


File example.blade.php in template/sbadmin/layouts for your main content
