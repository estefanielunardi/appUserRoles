![](public/image/role.png)

# ROLE APP

Una aplicación para crear, editar y eliminar Roles. Una vez te has logeado, empieza a crear roles que luego puedes asignarte a ti mismo. ¿Quieres ser Premium? en esta app lo puedes lograr!! 

# Autor

- Estefanie Garcia L

# Requisitos técnicos

-   Laravel 8
-   PHP 7.4
-   composer 1.10.15
-   Docker

# Instalación

## Paso Uno: Clonar el repositorio 


## Paso Dos: Running app (Docker)

`docker-compose up --build`

## Paso Tres: Seeder

`php artisan migrate:refresh --seed`

## Paso Cuatro: Running Tests

`php artisan test`

## Metodología de trabajo

-   TDD
-   CI/CD

### Docker link

http://localhost/


### Usuario NO Registrado

-  Estos usuarios llegan a una pagina inicial donde pueden ver una tabla con todos los usuarios y sus respectivos roles.
-  No pueden crear, eliminar o asignar roles.

### Usuarios Registrados

-   En la aplicación los usuarios pueden ver tanto los roles que han creado ellos mismos como los roles que han creado otros usuarios.
-   Pueden asignarse roles creados por ellos mismos.
-   Pueden asignarse roles creados por otros usuarios.
-   Pueden editar o eliminar roles creados por ellos mismos o por otro usuario.
-   Pueden acceder a una tabla donde observar todos los roles que tienen todos los usuarios del registrados en la app.
-   Solo pueden eliminar roles asignados a si mismo como usuario.
-   No pueden añadir,


## Aprendizajes

-   Crear Docker compose.
-   Trabajar con CI/CD.
-   Implementar GitHub Actions.

## Siguientes pasos

- [ ] Incluir Mailtrap para enviar email a usuarios registrados.
- [ ] Incorporar feature donde los usuarios puedan asignar roles a otros usuarios.
- [ ] Añadir tabla de permisos para asignar acciones o autorizaciones que dependan de un rol especifico.
- [ ] Implementar componentes con React.
- [ ] Crear las vistas por componentes.
- [ ] Desacoplar backend y frontend en distintos servidores. 
- [ ] Aplicar una Api.
