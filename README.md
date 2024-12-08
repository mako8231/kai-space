# kai-space

**About the Project:** 📔🖌️

This project aims to be a forum engine which focus on building art communities, bringing a mix of *imageboards* or categorized threads.

#### Setup: 
System requirements:
- Docker;
- npm (preferrably `>=10.2.4`);
- node (`>=20`)

Some notes:
- .env.example refers to the `backend` enviroment variable
- .env.example.frontend refers to the `frontend` enviroment variable


**Clone this repository**

```
#cloning 
git clone https://github.com/mako8231/kai-space.git
```

**After the cloning, go into the repository locally:**

```
cd kai-space
```

**You need to install the local NPM packages for the frontend enviroment**

```
cd frontend && npm install && cd ..
```

**And then, execute the `first-setup.sh` script, which will give you the necessary steps to get the application working:**

```
./first-setup.sh
```

**If everything works you can access the following services:**
- Frontend Application: http://localhost:3000;
- Backend Application: http://localhost:8080

**Troubleshooting**

Q: Laravel asking me the application key, how do I get it? 
R: Acess the running docker enviroment related to backend with `./run-docker-env` or type `docker exec -it kai-space bash`, then type `php artisan key:generate`  

Q: when I create a new endpoint route on laravel, it didn't take changes;
R: Probably the issue is related on how Laravel handles the internal route cache, just do the same steps to log into the `backend` docker and then type `php artisan route:cache`, it will clear the old routes caches, recognizing the newer ones.


### PT-BR

**Sobre o Projeto:** 📔🖌️

O projeto se trata de uma *engine* de forums, com foco na construção de comunidades artísticas, trazendo uma mescla de *imageboards* ou threads categorizadas.

### EN
