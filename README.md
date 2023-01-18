<h1>Ejecución de aplicación Laravel con UI Auth, MySQL, Mailtrap y usuario por defecto</h1>

<h2>Pasos</h2>

<ol>
  <li>Descarga o clona el repositorio de la aplicación en tu computadora.</li>
  <li>Accede a la carpeta de la aplicación mediante la línea de comandos.</li>
  <li>Ejecuta el comando <code>composer install</code> para instalar todas las dependencias necesarias.</li>
  <li>Crea una copia del archivo <code>.env.example</code> y renombralo a <code>.env</code>.</li>
  <li>Configura las credenciales de la base de datos en el archivo <code>.env</code>, especificando el host, nombre de usuario, contraseña y nombre de la base de datos.</li>
  <li>Ejecuta el comando <code>php artisan key:generate</code> para generar una nueva clave de aplicación.</li>
  <li>Ejecuta el comando <code>php artisan migrate</code> para crear las tablas necesarias en la base de datos.</li>
  <li>Configura las credenciales de Mailtrap en el archivo <code>.env</code>, especificando el host, puerto, nombre de usuario y contraseña.</li>
  <li>Ejecuta el comando para sembrar la base de datos: php artisan db:seed</li>
  <li>Ejecuta el comando <code>php artisan serve</code> para iniciar el servidor de desarrollo.</li>
  <li>Accede a la aplicación en tu navegador utilizando la URL http://127.0.0.1:8000</li>
  <li>Inicia sesión con el usuario por defecto o registrate con un usuario válido y verifica que el correo de verificación sea enviado correctamente.</li>
  <li>Accede a Mailtrap, para verificar que el correo se haya enviado correctamente.</li>
</ol>

<h3>Información de Usuario por defecto</h3>
<p>
Nombre de usuario: <b>default</b> <br>
Correo electrónico: <b>default@example.com</b> <br>
Contraseña: <b>password</b> <br>
Zona horaria: <b>America/Guayaquil</b> <br>
Fecha de verificación de correo: <b>Fecha actual en America/Guayaquil</b>
</p>