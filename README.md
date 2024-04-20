# Aca se encuentran los ejercicios 5, 6 ,7

una vez clonado las dependencias ejecute 

composer install

para instalar dependencias y para correr el proyecto puede ejecutar

php spark serve

para iniciar el proyecto 

# Ejercicio 5
La ruta es [localhost:8080/usuario](http://localhost:8080/usuario)

donde se puede ver el listado de cuentas y donde puede eliminar las cuentas

# Ejercicio 6

la ruta es [localhost:8080/](http://localhost:8080/iniciarsesion)

# Ejercicio 7

Al momento de iniciar sesion como administrador le dirige directamente al ejercicio No.7
puede usar el correo leonelchauca0@gmail.com para entrar como administrador

Utilize la misma bd del ejercicio1;

debe tener conexion a internet para boostrap


Asegurese que al momento de ejecutar php spark serve este corriendo en el puerto adecuado

# NOTA

verifique que la bd este corriendo en el mismo puerto, para poder cambiar de puerto puede ir a app/config/database.php




- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
