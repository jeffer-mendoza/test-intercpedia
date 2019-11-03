# Intercpedia Test

_Miniproject that implements the requirements of the Intercpedia technical test_

## Demo

[Live Demo](http://159.65.252.88)

- Username: admin@admin.com
- Password: password

## How to start? 🚀

_These instructions will allow you to obtain a copy of the project in operation on your local machine for development and testing purposes._


### Pre-requisitos 📋

The project was developed with the following technologies:

- Docker v19.03.2
- Docker-compose v1.24.1
- PHP v7.2
- Mysql v8.0.0

Docker is used for the development and deployment of the project, all you have to install on the host is docker and docker-compose


- Install **docker** for linux, according to [official documentation](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
- Install **docker-composer** for linux, according to [official documentation](https://docs.docker.com/install/linux/docker-ce/ubuntu/)

Check docker and docker-compose versions
```
docker version
docker-compose version
```

### Installation 🔧

Execute the following instructions to lift the containers and install the necessary dependencies for the project

#### Clone and start containers
```
git clone https://github.com/jeffer-mendoza/test-intercpedia.git
cd test-intercpedia
docker up
```

#### Dependency Installation
```
docker exec -ti app /bin/bash
composer install 
cp .env.example .env
php artisan key:generate
```

#### Permissions
```
mkdir storage
mkdir storage/framework
mkdir storage/framework/{views,cache,sessions}
mkdir storage/app/public
chown www-data:www-data storage/ -R
php artisan config:cache
php artisan storage:link
```

#### Database migrations and seeds
```
php artisan migrate
php artisan db:seed
```

Verify system execution in your browser by entering [localhost](http://localhost)

_**Important:** You should ensure that services on ports 80 and 3600 are not active, because they may cause conflict with the configuration of docker containers_

## Test 

_The tests are not within the scope of this project_


## Deployment 📦

_Agrega notas adicionales sobre como hacer deploy_

## Built with 🛠️

Technologies and tools used in the development of the project:

* [Laravel](https://laravel.com/) - The Web Framework
* [Mysql](https://www.mysql.com/) - Database
* [Composer](https://getcomposer.org/) - Dependecy Management
* [AdminLTE](https://adminlte.io/) - The UI Framework 
* [FontAwesome](https://fontawesome.com/) - The UI Icons 


## Authors ✒️


* **Jefferson Mendoza** - *Fullstack Developer* - [jeffer-mendoza](https://github.com/jeffer-mendoza/)

see **contributors**

## License 📄

This project is under license [LICENSE](LICENSE) 


## Contributors

[<img alt="alobaton" src="https://avatars2.githubusercontent.com/u/9276557?s=280&v=4">](https://github.com/jeffer-mendoza/)

---

