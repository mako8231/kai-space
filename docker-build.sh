#copy the .env files 
cp .env.example ./backend/.env 
cp .env.frontend.example ./frontend/.env

#take down the containers
docker compose down 

#build the images
docker compose build 

#take up the containers 
docker compose up -d 

docker exec -it kai-space php artisan config:clear
docker exec -it kai-space php artisan key:generate
docker exec -it kai-space php artisan config:cache

