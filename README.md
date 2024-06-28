Brand management

1- première façon de déployer
avoir xamp ou wanp installé dans sa machine php 8.1.2

cloner le projet 
git clone git@github.com:adjimi-lionelle/brandManagement.git

Accéder au dossier backend. Étant à la racine du projet brandManagement tapez:
cd backend

créer le fichier .env en tapant la commande suivante: 
cp .env.example .env


une dans le dossier backend installation des vendor:
composer install

Mettre à jour le fichier .env avec vos information pour la base de données

créer les migrations pour la base de données
php artisan migrate : choisir oui pour créer la base de données

créer un utilisateur et 10 marques
php artisan db:seed

email de l'utilisateur créé : admin@gmail.com
mot de passe de l'utilisateur créé : admin@24

lancer le serveur pour accéder au backend 
php artisan serve

le backend est alors accessive dans le navigateur via le lien : 127.0.0.1:800O
le lien 127.0.0.1:800O n'est pas standart car après avoir taper la commande php artisan serve vous
le lien permettant d'accéder au backend

lancer un serveur pour accéder au frontend :
php -S 127.0.0.1:8001 : vous choisissez le port que vous voulez



2- deuxième façon

cloner le projet 
git clone git@github.com:adjimi-lionelle/brandManagement.git

accédez au dossier du projet
véribien bien que les fichiers dockerfile, docker-compose.yaml et apache sont à la racine du projet

S'assurez que les information de connexion à la base de données sont les même dans le fichier docker-compose.yaml

Créer l'image 
docker build brand-management .

Lancer les container
docker-compose up -d

démarrer  au container du backend
docker exec -it brandApp bash

créer les migrations pour la base de données
php artisan migrate

créer un utilisateur
php artisan db:seed

le backend est alors accessive dans le navigateur via le lien : localhost:800O/backend
le backend est alors accessive dans le navigateur via le lien : localhost:8001

Pour arrêter les container 
docker-compose stop 

pour arrêter et supprimer 
docker-compose down



