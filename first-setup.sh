echo "EXECUTE THIS SCRIPT ONLY IF YOU ALREADY CLONED THIS REPOSITORY";
echo "BUILDING THE IMAGES...";

cp .env.example .env 
docker compose build;

echo "ADJUSTING VOL PERMISSIONS";
#not the best approach on prod tho keep that in mind...

chown -R ${UID} ./backend/storage
chown -R ${UID} ./backend/bootstrap
chmod -R 777 ./backend/storage;
chmod -R 777 ./backend/bootstrap;
chmod -R 777 ./backend/vendor;


#install all the composer dependencies
docker exec -it kai-space composer install;

#clear the laravel's routes and config cache and set a APP key for .env
docker exec -it kai-space php artisan route:cache;
docker exec -it kai-space php artisan config:cache;
docker exec -it kai-space php artisan key:generate

echo "MIGRATING THE DATABASE";
docker exec -it kai-space php artisan migrate;

echo "BUILDING THE CONTAINERS AGAIN..."

./docker-build.sh


