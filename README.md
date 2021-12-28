## Sistema de gestion de facturas

Sistema de gestion de facturas con roles de usuarios, desarrollado en Laravel + Blade. Puede gestionar productos, clientes, compras pendientes y facturas.

Gestionar roles de usuarios:
- Admin
- Cliente

#### Admin
Se encarga de gestionar las facturas de compras emitidas por cada cliente.

#### Cliente
se encarga de realizar de realizar compras de cada producto.

### Instalación
Ejecutar los siguientes comandos en orden

```cmd
cd sistema-prestamos
```
```cmd
composer install
```
Seguidamente recuerda que por seguridad el archivo <b>"<em>.env</em>"</b> no se copia, para ello dispones del mismo pero con el nombre
<b>"<em>.env.example</em>"</b> el cual deberás renombrar a <b>"<em>.env</em>"</b> solamente.

Recuerda también ingresar en el archivo <b>"<em>.env</b>"</em> los datos de conexión a la base de datos que deberas haber creado previamente, esto es importante para poder continuar con el siguiente paso y generar el <b>"<em>key</b>"</em>.
```cmd
php artisan key:generate
```
```cmd
php artisan migrate:install
```
```cmd
php artisan migrate
```
```cmd
php artisan db:seed
```
```
php artisan migrate:fresh --seed

php artisan serve
```

### Usurios
Luego de correr con exito la migracion y los seeders, el sistema crea varios usuarios para comenzar a probar

__Rol__: `admin`
__User__:`admin@admin.com`
__Contraseña__:`12345678`


__Rol__: `Cliente`
__User__:`Nancy@gmail.com`
__Contraseña__:`12345678`


__Rol__: `Cliente`
__User__:`Richar@gmail.com`
__Contraseña__:`12345678`