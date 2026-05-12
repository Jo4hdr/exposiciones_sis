# Sistema de Gestion de Sesiones en PHP

Este repositorio contiene una implementacion practica sobre el manejo de persistencia de datos y gestion de estados en el lado del servidor utilizando el lenguaje PHP.

## Descripcion del Proyecto
El proyecto demuestra la capacidad de PHP para mantener informacion del usuario a traves de multiples peticiones, superando la limitacion stateless del protocolo HTTP. Se incluyen tres casos de uso fundamentales:

1. Contador de Visitas: Implementacion de persistencia de datos numericos.
2. Carrito de Compras: Gestion de colecciones de datos (arrays) en memoria de sesion.
3. Autenticacion de Usuarios: Control de acceso a areas restringidas y manejo de seguridad basica.

## Requisitos de Ejecucion
Para desplegar este proyecto, se requiere el siguiente entorno:
* Servidor Web Apache (configurado via XAMPP, WAMP o similares).
* Motor de PHP version 7.4 o superior.
* Directorio de ejecucion dentro de la ruta htdocs del servidor.

## Estructura de la Aplicacion
* contador.php: Script para el seguimiento de interacciones del usuario.
* carrito.php: Interfaz de gestion de productos mediante sesiones.
* login.php: Modulo de validacion de identidad y creacion de estado.
* dashboard.php: Pagina privada con verificacion de privilegios de acceso.
* borrar.php: Controlador para el cierre de sesion y limpieza de variables.

## Implementacion Tecnica

### Inicio de Sesion
Se utiliza la funcion session_start() de forma mandatoria al inicio de los scripts para inicializar el motor de sesiones y recuperar el ID de sesion (PHPSESSID) almacenado en las cookies del cliente.

### Gestion de Datos
Se emplea el array superglobal $_SESSION para el almacenamiento de informacion. Al residir en el servidor, este metodo ofrece una capa de seguridad superior a las cookies locales, impidiendo la manipulacion directa por parte del usuario final.

### Finalizacion
Se implementa session_destroy() y session_unset() para garantizar la eliminacion de datos residuales en el servidor al momento de cerrar la sesion del usuario.

## Instalacion y Configuracion
1. Copiar los archivos en una carpeta dentro del directorio /htdocs/.
2. Iniciar el panel de control del servidor local (Apache).
3. Acceder mediante el navegador a la direccion local: http://localhost/nombre_carpeta/login.php

## Seguridad en Sesiones
Para entornos de produccion, se recomienda la aplicacion de las siguientes practicas:
* Uso de session_regenerate_id() para prevenir el secuestro de sesion.
* Configuracion de cookies con banderas HttpOnly y Secure.
* Implementacion de tiempos de expiracion por inactividad.

---
Documentacion tecnica de soporte para exposicion de Programacion Backend.