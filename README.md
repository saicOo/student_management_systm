# Student Management System Laravel Project
![Untitled-1](https://user-images.githubusercontent.com/83503164/158608253-60525252-cd60-4e5c-892a-39baf37c6397.jpg)
# Getting started
## Installation

Clone the repository
```
git clone https://github.com/saicOo/laravel_student_management_systm.git
```
Switch to the repo folder
```
cd laravel_student_management_systm
```
Install all the dependencies using composer
```
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate --seed
```
Start the local development server
```
php artisan serve
```

