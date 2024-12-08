# kai-space

### EN

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

Q: when I create a new endpoint route on laravel, it just give me a 404;

R: Probably the issue is related on how Laravel handles the internal route cache, just do the same steps to log into the `backend` docker and then type `php artisan route:cache`, it will clear the old routes caches, recognizing the newer ones.


### PT-BR

**Sobre o Projeto:** 📔🖌️

O projeto se trata de uma *engine* de forums, com foco na construção de comunidades artísticas, trazendo uma mescla de *imageboards* ou threads categorizadas.

#### Configuração: 
Requisitos:
- Docker;
- npm (preferência as versões `>=10.2.4`);
- node (`>=20`)

Alguns pontos a considerar:
- .env.example refere-se às variáveis de ambiente do `backend`;
- .env.example.frontend refere-se as variáveis de ambiente do `frontend`


**Clone esse repositório**

```
git clone https://github.com/mako8231/kai-space.git
```

**Acesse o repositório clonado:**

```
cd kai-space
```

**Você precisa instalar os pacotes node para o ambiente frontend**

```
cd frontend && npm install && cd ..
```

**Então, execute o script `first-setup.sh`, que realizará toda a configuração necessária para o ambiente de desenvolvimento funcionar:**

```
./first-setup.sh
```

**Se tudo funcionar, você pode acessar localmente pelos seguintes links:**
- Frontend Application: http://localhost:3000;
- Backend Application: http://localhost:8080

**Troubleshooting**

Q: Laravel me pede uma "Application Key", como eu gero? 

R: Você pode acessar o ambiente dockerizado da aplicação backend pelo script `./run-docker-env` ou digitar `docker exec -it kai-space bash`, então, digite no terminal docker: `php artisan key:generate`  

Q: Quando crio uma nova rota da API, o laravel não reconhece, dando 404.;

R: Provavelmente se trata de um problema do cache interno do roteamento do Laravel, apenas realize os mesmos passos para acessar o `backend` e então digite: `php artisan route:cache`, esse comando limpará os cachês antigos, substituindo por novos.



