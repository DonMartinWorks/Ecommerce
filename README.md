<a name="readme-top"></a>

# Sobre el Proyecto

_Este proyecto es un ecommerce._

<br />
<br />

## Creación de archivos necesarios

1. _Crea un archivo llamado <b>.env</b> tomando de ejemplo de archivo <b>.env.example</b> este archivo es necesario para el funcionamiento del proyecto._

<br />
<br />

## Creación de carpetas necesarias

<b>/uploads/avatars</b>

<br />

1. En la carpeta public crea una carpeta llamada uploads.\_

2. Dentro de uploads crea una carpeta llamada avatars.\_

3. Dentro de uploads crea una carpeta llamada banners.\_

4. Dentro de uploads crea una carpeta llamada brands.\_

<br />
<br />

### Levantar el servidor Local

<p>Levantar estos comandos en 2 consolas <b>CMD</b> al mismo tiempo</p>

1. Levantado de servidor local

    ```
    php artisan serve
    ```

2. Servidor de instancias de NPM

    ```
    npm run dev
    ```

<br />
<br />

### Servidores Locales necesarios

<p>Esta aplicación WEB puede tener problemas al buscar la imagen de thumbnail, para solucionar esto cambia `APP_URL` </p>

1. Si usaste el servidor local con artisa serve

    ```
    APP_URL=http://127.0.0.1:8000
    ```

2. Con el servidor local de Laragon

    ```
    APP_URL=http://FilamentBlog.test
    ```

<br />
<br />

# Instalación del proyecto

_Para la instalacion de este proyecto Laravel es necesario seguir los siguientes comandos_

1. Instalacion de los paquetes `Composer`.

    ```
    composer install
    ```

2. Instalacion de los paquetes `NODE`.

    ```
    npm install
    ```

3. Construcción de los paquetes `NODE`.

    ```
    npm run build
    ```

4. Generación de una llave de proyecto.

    ```
    php artisan key:generate
    ```

5. Construcción de la DB.

    ```
    php artisan migrate
    ```

6. Generación de seeds.

    ```
    php artisan db:seed
    ```

<br />
<br />

### Comandos SQL

```
php artisan migrate:rollback
```

<p>Regresa a la migracion anterior de la DB</p>

<br />

```
php artisan migrate:refresh
```

<p>Limpia la DB</p>

<br />

```
php artisan migrate:rollback --step=1
```

<p>Regresa a la migracion anterior de un paso de la DB</p>

<br />
<br />

### Reinicio de la Base de Datos

```
php artisan migrate:fresh --seed
```

<p>Reinicia desde cero la DB y crea los seeders</p>

<br />

```
php artisan migrate:refresh --seed
```

<p>Limpia la DB y crea los seeders</p>

<br />
<br />

## Otros Comandos

_Comandos que podrian ser necesarios_

1. Generación de seeds

    ```
    php artisan db:seed
    ```

2. Limpieza de caché (events/views/cache/route/config/compiled)

    ```
     php artisan optimize:clear
    ```

3. Creacion de los links de los archivos estaticos

    ```
    php artisan storage:link
    ```

4. Creacion de un modelo con controller tipo resource, con migration, factory y seeder para la DB.

    ```
    php artisan make:model Model -mcfs --resource
    ```

5. Actualización de la información del cargador automático de clases.

    ```
    composer dump-autoload
    ```

<br />
<br />
<br />
<br />

#### Paquetes Utilizados

<p align="left">
<a href="https://laravel.com/docs/9.x/starter-kits#laravel-breeze">Breeze</a>
<br />
<a href="https://publisher.laravel-lang.com/">Laravel Lang Publisher</a>
</p>

<br />
<br />

#### Programas necesarios

_Lista de programas utilizados en este proyecto_

<p align="left">
<a href="https://nodejs.org/">Node <b>LTS</b></a>
<br />
<a href="https://getcomposer.org/download/">Composer</a>
</p>

<br />
<br />

## Contacto

Mi Cuenta GitHub: [https://github.com/DonMartinWorks](https://github.com/DonMartinWorks)

<br />

Link ReadMe Opción N°2: [https://readme.so/es](https://readme.so/es)

<br />
<br />

<a href="#readme-top">Subir a las instrucciones</a>
