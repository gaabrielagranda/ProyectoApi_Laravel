<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre Este Proyecto

Este proyecto es una aplicación web construida utilizando el framework Laravel. Proporciona una API backend robusta para gestionar varios recursos. El frontend para este proyecto se puede encontrar [aquí](https://github.com/gaabrielagranda/Frontend-apiProyecto?tab=readme-ov-file).

## Comenzando

Para comenzar con este proyecto, sigue los pasos a continuación:

### Requisitos Previos

- PHP >= 7.3
- Composer
- MySQL u otra base de datos compatible

### Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/yourusername/ProyectoApi.git
    cd ProyectoApi
    ```

2. Instala las dependencias:
    ```bash
    composer install
    ```

3. Copia el archivo `.env.example` a `.env` y configura tus variables de entorno:
    ```bash
    cp .env.example .env
    ```

4. Genera una clave de aplicación:
    ```bash
    php artisan key:generate
    ```

5. Ejecuta las migraciones de la base de datos:
    ```bash
    php artisan migrate
    ```

6. Pobla la base de datos con datos iniciales (opcional):
    ```bash
    php artisan db:seed
    ```

7. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Usando la API

Una vez que el servidor esté en funcionamiento, puedes acceder a la API en `http://localhost:8000`. Consulta la documentación de la API para obtener información sobre los endpoints disponibles y las instrucciones de uso.

## Frontend

El frontend para este proyecto está construido utilizando un repositorio separado. Puedes encontrarlo [aquí](https://github.com/gaabrielagranda/Frontend-apiProyecto?tab=readme-ov-file). Sigue las instrucciones en el repositorio del frontend para configurarlo y conectarlo a esta API backend.

## Contribuyendo

¡Gracias por considerar contribuir a este proyecto! Por favor, lee la [guía de contribución](https://laravel.com/docs/contributions) para obtener detalles sobre cómo contribuir.