Brand management

I- First way to deploy
have xamp or wanp installed on your machine with php 8.1.2 required

1-Connect the project 
git clone git@github.com:adjimi-lionelle/brandManagement.git

2-Access the backend folder. At the root of the brandManagement project, type:
cd backend

3-Create the .env file by typing the following command: 
cp .env.example .env

4-Update the .env file with your database information

5-Install dependencies:
compose install

6-Create database migrations
php artisan migrate: choose yes to create database

7-Create a user
php artisan db:seed --class=UserSeeder

email of created user: admin@gmail.com
created user password: admin@24

8-Launch the server to access the backend 
php artisan serve

the backend is then accessible in the browser via the link: 127.0.0.1:800O
the link 127.0.0.1:800O is not standard, because after typing the php artisan serve command you'll get
the link to access the backend

Modify the brandMAnagement/frontend/app.js file to access the api
Dans mon cas http://127.0.0.1:8000/api/brands adapter en fonction du lien que vous aurez en tapant php artisan serve

launch a server to access the frontend:
php -S 127.0.0.1:8001: you choose the port you want

II- Second way with docker

1-Connect the project 
git clone git@github.com:adjimi-lionelle/brandManagement.git

2-Access the project folder
make sure the dockerfile, docker-compose.yaml and apache files are at the project root

Make sure the database connection information is the same in the docker-compose.yaml file.

3-Create a docker image
docker build brand-management .

4-Launch containers
docker-compose up -d

5-Start backend container
docker exec -it brandApp bash

6-Create database migrations
php artisan migrate

7-Create user
php artisan db:seed

Modify the brandMAnagement/frontend/app.js file to access the api
 http://localhost:8000/public/api/brands

the backend is then accessible in the browser via the link: localhost:800O/public
the backend is then accessible in the browser via the link: localhost:8001

8-Stop containers 
docker-compose stop 

9-To stop and delete containers
docker-compose down

if you encounter permission errors do this:
docker exec -it brandApp bash to access backend conatainer
chmod -R 777 * to give rights to all files and folders

