
![Logo](https://i.imgur.com/EcpUqsj.png)

    
# Instagram para Mascotas

Ejercicio de empresa _fake_ desarrollada que presenta una propuesta de Red Social para mascotas en la cual los duseños de las mascotas como perros, gatos, etc puedan compartir
imagenes de sus adorados, interactuar con otros usuarios y recibir donaciones para su mascota.




## Installation

### Installing Dependencies

To create a standalone enviroment for Laravel you can use `Dockerimage` present in this project

To create image run command
```bash
$ git clone https://github.com/alejogtz/fake-instagram-for-pets Project
$ cd Project

$ docker build -t alekhius/laravel-env:1.0 .

// Run  instance and interact with shell
docker run -it \
    --rm \
    --name pets \
    --network $NETWORK_NAME --ip 172.19.0.3 \
    -p 8080:8000 \
    -v $PWD:/app alekhius/laravel-env:1.0 sh
```

Una vez creado el ambiente instala las dependencias

    root# $ composer install

> Si te impide instalar, intenta borrar composer.lock

**Genera una API Key**

    php artisan key:generate

****

## Prepara Base de datos

### Restaura la base de datos

**Using docker**
```bash
$ export MYSQL_SECRET_PASS=q1w2e3r4
$ export CONTAINER_NAME=mysql

$ docker run --name $CONTAINER_NAME -e MYSQL_ROOT_PASSWORD=$MYSQL_SECRET_PASS -p 3306:3306 -d mysql:5.7

# docker run --network fake-network --ip 172.19.0.4 --alias  --name my_mysql -e MYSQL_ROOT_PASSWORD=q1w2e3r4 -p 3307:3306 -d mysql:5.7

$ docker exec $CONTAINER_NAME sh -c 'mysql -u root -p $MYSQL_SECRET_PASS -e "CREATE database LaravelSample"'
```

```diff
-   DB_CONNECTION=
+   DB_CONNECTION=mysql  #mysql, postgres, etc.
    DB_HOST=${MYSQL_HOST} 
    DB_HOST=$(docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' mysql)
    DB_PORT=${MYSQL_PORT} # tipically 3306
    DB_DATABASE=laravel 
    DB_USERNAME=root
    DB_PASSWORD=
```

```diff
root@2bbf61113940:/# cat /etc/mysql/mysql.conf.d/mysqld.cnf 
...
[mysqld]
pid-file        = /var/run/mysqld/mysqld.pid
socket          = /var/run/mysqld/mysqld.sock
datadir         = /var/lib/mysql
#log-error      = /var/log/mysql/error.log
# By default we only accept connections from localhost
- # bind-address    = 127.0.0.1
+ bind-address    = 0.0.0.0
# Disabling symbolic-links is recommended to prevent assorted security risks
symbolic-links=0

```

### Comunicar instancia de `Mysql` con instancia de `Laravel`

```bash
$ docker network create --subnet=172.19.0.0/16 fake-network
9f4232047b7682b074c162915fe6cf3b47e3b2b37dd7b2f305e723ed836352b5

$ export CONTAINER_NAME=mysql
$ export NETWORK_NAME=fake-network
$ docker network connect $NETWORK_NAME $CONTAINER_NAME
$ docker network connect --alias mysql --ip 172.19.0.2 $NETWORK_NAME $CONTAINER_NAME

$ docker network disconnect $NETWORK_NAME $CONTAINER_NAME
```

Once into container, You can check that you can ping mysql container instance

```bash
root/app$ ping mysql
PING mysql (172.19.0.2): 56 data bytes
64 bytes from 172.19.0.2: seq=0 ttl=64 time=0.123 ms
64 bytes from 172.19.0.2: seq=1 ttl=64 time=0.129 ms
64 bytes from 172.19.0.2: seq=2 ttl=64 time=0.096 ms
64 bytes from 172.19.0.2: seq=3 ttl=64 time=0.095 ms
64 bytes from 172.19.0.2: seq=4 ttl=64 time=0.093 ms
^C
--- mysql ping statistics ---
5 packets transmitted, 5 packets received, 0% packet loss
round-trip min/avg/max = 0.093/0.107/0.129 ms
```



### Create Laravel Key
```bash
 /app $ php artisan migrate

Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (0.03 seconds)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (0.02 seconds)
Migrating: 2019_11_10_012709_create_social_facebook_accounts_table
Migrated:  2019_11_10_012709_create_social_facebook_accounts_table (0 seconds)
Migrating: 2019_11_11_011251_create_post_table
Migrated:  2019_11_11_011251_create_post_table (0.03 seconds)
Migrating: 2019_11_11_013242_create_like_table
Migrated:  2019_11_11_013242_create_like_table (0.05 seconds)
Migrating: 2019_11_11_013447_create__comentario_table
Migrated:  2019_11_11_013447_create__comentario_table (0.06 seconds)
Migrating: 2019_11_16_040725_create_follows_table
Migrated:  2019_11_16_040725_create_follows_table (0.07 seconds)
Migrating: 2019_11_16_040725_create_social_accounts_table
Migrated:  2019_11_16_040725_create_social_accounts_table (0.03 seconds)
Migrating: 2019_11_16_040726_create_companies_table
Migrated:  2019_11_16_040726_create_companies_table (0.05 seconds)
Migrating: 2019_11_16_040726_create_pets_table
Migrated:  2019_11_16_040726_create_pets_table (0.05 seconds)
```

Run command 

```bash
  php artisan key:generate

  php artisan migrate

  php artisan serve --host 0.0.0.0 --port 80
```


# Screenshots

**Inicio de sesion**

![](https://i.imgur.com/Sr4RIlR.png)

**Home**

![](https://i.imgur.com/HdiEfSX.png)