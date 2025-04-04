echo "EXECUTE THIS SCRIPT ONLY ONCE AFTER CLONING THIS REPOSITORY";
echo "BUILDING THE IMAGES...";

cp .env.example .env 
docker compose build;

echo "ADJUSTING VOL PERMISSIONS";
#not the best approach on prod tho keep that in mind...

docker compose up -d

chown -R ${UID} ./backend/storage
chown -R ${UID} ./backend/bootstrap
chmod -R 777 ./backend/storage;
chmod -R 777 ./backend/bootstrap;

#vendor
mkdir ./backend/vendor
chmod -R 777 ./backend/vendor;

#install all the composer dependencies
docker exec -it kai-space composer install;

cd ./frontend && npm install
cd ..

echo "BUILDING THE CONTAINERS AGAIN..."

./docker-build.sh

chmod 666 ./backend/.env

#clear the laravel's routes and config cache and set a APP key for .env
docker exec -it kai-space php artisan route:cache;
docker exec -it kai-space php artisan config:cache;
docker exec -it kai-space php artisan key:generate

echo "MIGRATING THE DATABASE";
docker exec -it kai-space php artisan migrate;

echo "CONGRATULATIONS: Your app is ready to go:";
echo "frontend: http://localhost:3000"
echo "api endpoint: http://localhost:8080"

