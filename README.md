<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Historial de cambios por Ricardo
- Se modificó el login
- Se deshabilitó el registro de usuarios y el recordar password
- Se modificó el menú lateral para mostrar solo secciones terminadas
- Se modifico el footer de invitado
- Crud de sección de banners completamente terminado

## Historial de cambios por Pamela
- Todas secciones tienen funcionando/habilitado el botón de eliminar
- La sección About se modificaron sus vistas a: mostrar datos > editar y guardar.
- La sección About tiene funcionando/habilitado la actualización de datos.
- En la sección de Servicios > Tesorería, Inversión y Asesoria se modificaron sus vistas a: mostrar datos > editar y guardar, 
  estas mismas secciones ya actualizan textos.
- La sección Clientes tiene funcionando/habilitada la actualización de textos y solo una primera imagen.
- La sección Contacto se modificaron sus vistas a: mostrar datos > editar y guardar.

## Pendientes
- (Ayuda!) Crear tabla de iconos y su estatus de activo y relacionarla con la tabla servicios/asesoria
- (Ayuda!) Crear tabla de imagenes y relacionarla a la tabla clientes.

## Actualizar
Para mantener el proyecto en la última versión:

```
git pull origin main
```
Crear el enlace simbólico para ver la carpeta Storage directamente en Public
```
php artisan storage:link
```
Actualizar migraciones y poblar la base de datos
```
php artisan migrate:refresh --seed
```
