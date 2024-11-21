# Instrucciones para ejecutar el proyecto / Project Setup Instructions

## Castellano / English

### Requisitos previos / Prerequisites
Asegúrate de tener instalados los siguientes componentes en tu sistema antes de continuar: / Make sure you have the following components installed on your system before proceeding:
1. **PHP**  
   Verifica que PHP esté instalado y configurado en tu sistema. / Verify that PHP is installed and configured on your system.

2. **Composer**  
   El gestor de dependencias de PHP. / The dependency manager for PHP.

3. **Node.js** y **NPM**  
   Node.js como entorno de ejecución de JavaScript, y NPM como su gestor de paquetes. / Node.js as the JavaScript runtime environment, and NPM as its package manager.


### Primeros pasos / First steps
1. **Clonar el repositorio / Clone the repository**  
   Clona el proyecto en tu máquina local. / Clone the project to your local machine.

2. **Abrir una terminal / Open a terminal**  
   Navega al directorio raíz del proyecto en tu terminal. / Navigate to the root directory of the project in your terminal.

3. **Instalar dependencias de Laravel / Install Laravel dependencies**  
   Ejecuta el siguiente comando para instalar las dependencias de PHP requeridas: / Run the following command to install the required PHP dependencies: 
   ```bash
   composer install
   ```

4. **Configurar las variables de entorno / Configure environment variables**  
   ```bash
   cp .env.example .env
   ```

5. **Generar una clave de aplicación / Generate an application key**  
   Para generar la clave de aplicación e incluirla directamente en la variable de entorno APP_KEY del fichero .env, ejecuta el comando: / To generate the application key and add it directly to the APP_KEY environment variable in the .env file, run the following command:
   ```bash
   php artisan key:generate
   ```

6. **Crear las tablas de la base de datos / Create the database tables**  
   Ejecuta el siguiente comando para ejecutar las migraciones y crear las tablas en la base de datos (Durante este proceso, es posible que te pida confirmar la creación del archivo database.sqlite. Escribe yes para continuar.):  
   Run the following command to run the migrations and create the database tables (During this process, you may be asked to confirm the creation of the database.sqlite file. Type yes to continue.):
   ```bash
   php artisan migrate
   ```

7. **Instalar dependencias de JavaScript / Install JavaScript dependencies**  
   Ejecuta el siguiente comando para instalar las dependencias: / Run the following command to install the dependencies:
   ```bash
   npm install
   ```

8. **(Opcional) Poblar la base de datos con datos de prueba / (Optional) Seed the database with sample data**  
   Si deseas incluir datos de prueba, ejecuta el siguiente comando: / If you want to include sample data, run the following command:
   ```bash
   php artisan migrate:fresh --seed
   ```


### Ejecutar el proyecto / Run the project

1. **Iniciar el servidor de desarrollo de Vite / Start the Vite development server**  
   Este comando compila y sirve los recursos del frontend: / This command compiles and serves the frontend resources:
   ```bash
   npm run dev
   ```

1. **Iniciar el servidor de Laravel / Start the Laravel server**  
   Ejecuta el siguiente comando para levantar el backend de Laravel: / Run the following command to start the Laravel backend:
   ```bash
   php artisan serve
   ```


### Acceder a la aplicación / Access the application
Abre tu navegador y accede a la siguiente URL local para interactuar con el proyecto: / Open your browser and go to the following local URL to interact with the project:  
http://localhost:8000


### Notas adicionales / Additional notes
- Asegúrate de que los puertos utilizados por Laravel y Vite estén disponibles en tu sistema / Make sure the ports used by Laravel and Vite are available on your system.
- Si encuentras errores relacionados con dependencias o permisos, revisa la documentación oficial de [Laravel](https://laravel.com/docs/11.x) y [Vite](https://vite.dev/). / If you encounter errors related to dependencies or permissions, check the official documentation of [Laravel](https://laravel.com/docs/11.x) and [Vite](https://vite.dev/).
