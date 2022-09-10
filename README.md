# Gym System


## Table of Contents

-   [Gym System](#gym-app)
    -   [Description](#description)
    -   [Demo](#demo)
    -   [Roles And Permissions](#roles-and-permissions)
    -   [Installation](#installation)
    -   [Usage](#usage)
    -   [Libraries Used](#libraries-used)
    -   [Contributors](#contributors)

## Description

A GYM System App that has 5 roles (Admin, City Manager, Gym Manager, Coach, User). Each one of them is granted to specific permissions.


## Demo

https://user-images.githubusercontent.com/97922599/189485798-f3b83661-5dfa-44dd-834a-4a29de393d11.mp4



## Roles And Permissions

1- `Admin` :  
&nbsp; &nbsp; &nbsp; &nbsp; Admin will have access to everything in the system,he can see any links or make any action Gym Manager  
&nbsp; &nbsp; &nbsp; &nbsp; and City Manager can do with these extra functionalities.

2- `City Manager` :  
&nbsp; &nbsp; &nbsp; &nbsp; City Manager can do what Gym Manager do with extra functionalities … like he can see all gyms in his city and  
&nbsp; &nbsp; &nbsp; &nbsp; make CRUD on any gym or gym manager in his city.

3- `Gym Managers` :  
&nbsp; &nbsp; &nbsp; &nbsp; Gym Manager can CRUD training sessions and assign coaches to these sessions, also he can buy training  
&nbsp; &nbsp; &nbsp; &nbsp; package for a user through stripe.

4- `coach` :  
&nbsp; &nbsp; &nbsp; &nbsp; Can only see the sessions in which he trains.

5- `User` (API) :  
&nbsp; &nbsp; &nbsp; &nbsp; Cann't access the system because it is for the administration only, but there is an endpoint (API) for the user.

## ERD

https://user-images.githubusercontent.com/97922599/189486177-266a227d-414b-4c0c-914a-20bc40b1e7e5.jpeg


## Installation

```bash
git clone https://github.com/MElghrbawy/Gym-System.git
cd Gym-System
composer install
```

> Create Database

```bash
mysql -u root -p
create Database gym_system
```

> Update .env Database with your credentials

```bash
DB_DATABASE=gym_system
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

> Run Migration

```bash
php artisan migrate
```

## Usage

> Run server

```bash
php artisan serve
```

> Open The Browser and go to

```

http://127.0.0.1:8000

```

## Libraries Used

-   [Laravel](https://laravel.com/)
-   [Admin LTE](https://adminlte.io/)
-   [Laravel Sanctum](https://github.com/laravel/sanctum/)
-   [Laravel Ban](https://github.com/cybercog/laravel-ban/)
-   [Laravel Permissions](https://github.com/spatie/laravel-permission/)
-   [Laravel UI](https://github.com/laravel/ui)

## Contributors

<table>
  <tr>
    <td>
      <img src="https://avatars.githubusercontent.com/u/33490779?v=4" />
    </td>
    <td>
      <img src="https://avatars.githubusercontent.com/u/97922599?v=4" />
    </td>
    <td>
      <img src="https://avatars.githubusercontent.com/u/97697512?v=4" />
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/MohamedShehata15">Mohamed Shehata</a>
    </td>
      <td>
      <a href="https://github.com/MElghrbawy">Mohamed Elghrbawy</a>
    </td>
     <td>
      <a href="https://github.com/nadareffat98">Nada Reffat</a>
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://avatars.githubusercontent.com/u/83234154?v=4" />
    </td>
    <td>
      <img src="https://avatars.githubusercontent.com/u/97697351?v=4" />
    </td>
    <td>
      <img src="https://avatars.githubusercontent.com/u/97316532?v=4" />
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/khloud44">Khloud Elsaid</a>
    </td>
      <td>
      <a href="https://github.com/shoroukalkalla">Shorouk Alkalla</a>
    </td>
     <td>
      <a href="https://github.com/YaraMohammed98">Yara Mohammed</a>
    </td>
  </tr>
</table>
