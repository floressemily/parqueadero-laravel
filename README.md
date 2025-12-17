ParkingExpress – CRUD Laravel
Proyecto

ParkingExpress es un sistema web desarrollado con Laravel que permite gestionar el ingreso y salida de vehículos en un parqueadero. El sistema reemplaza el registro manual en papel por un control digital sencillo, permitiendo registrar, listar, editar y eliminar vehículos.

Datos del estudiante

Estudiante: Emily Flores

Asignatura: Desarrollo en Plataformas

Paralelo: #2

Fecha: 16/12/2025

Objetivo del proyecto

Desarrollar un CRUD completo utilizando el framework Laravel, aplicando el patrón MVC, que permita administrar los vehículos que ingresan a un parqueadero, con una interfaz usable tanto en computadora como en dispositivos móviles.

Decisiones de diseño
Tabla principal

Nombre de la tabla:
vehicles

Campos de la tabla:

Campo	Tipo	Obligatorio
id	bigint (PK)	Sí
plate	varchar(10)	Sí
type	varchar(20)	Sí
owner	varchar(100)	No
observations	text	No
created_at	timestamp	Sí
updated_at	timestamp	Sí
Tipos de vehículo

Automóvil

Motocicleta

Camioneta

Estos tipos se seleccionan desde un campo desplegable para evitar errores de ingreso.

Eliminación de registros

¿Se pueden eliminar registros?
Sí.

Razón:
Se permite eliminar registros para mantener actualizada la información del parqueadero y evitar mostrar vehículos que ya no se encuentran en las instalaciones.

Funcionalidades implementadas

Registro de vehículos con placa, tipo, propietario y observaciones

Fecha y hora de ingreso automática

Listado de vehículos registrados

Edición de información

Eliminación de vehículos

Interfaz adaptable a dispositivos móviles

Tecnologías utilizadas

Laravel 12

PHP 8.3

PostgreSQL

Bootstrap 5

Git y GitHub

Evidencias

El proyecto cuenta con las siguientes capturas de pantalla:

Listado de vehículos

Formulario de registro

Vista móvil del sistema


Repositorio

https://github.com/floressemily/parqueadero-laravel
