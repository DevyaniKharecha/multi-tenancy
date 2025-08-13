=> Instructions : 
- Clone the Repository
- git clone https://github.com/yourusername/multi-tenant-laravel.git
- cd multi-tenant-laravel
- composer install
- cp .env.example .env
- configure db name in .env
- php artisan:key generate
- php artisan migrate
- php artisan db:seed --class=TenantSeeder


=> Set hosts:
- Mac/Linux: edit hosts
    - sudo nano /etc/hosts
    - 127.0.0.1 tenant1.test
    - 127.0.0.1 tenant2.test

=> php artisan serve --host=127.0.0.1 --port=8000

=>Visit:
    - http://tenant1.test:8000/api/users
    - http://tenant2.test:8000/api/users


