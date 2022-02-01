### Features

- PhpUnit.
- Composer.
- Scalable.

# Link del proyecto 
[TodoApp](https://phplisttodo.herokuapp.com/index.php "TodoApp")
Hosteado en Heroku.com 
# Estructura de carpetas

![](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=Composer&logoColor=white) ![](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

**src/** : Clases y autocarga.
**Vendor/**: Librerias, etc de composer.
**test/**: Testing de clases, exceptuando la clase edit todas se pueden testear, la clase edit en especial no es posible testearla de momento, 1 febrero 2022.
**includes/** : componentes de tipo HTML, basicamente encuentras el header, footer, etc.

# Base de datos

La base de datos fue algo complicado hostearla o encontrar un proveedor gratuito,
de momento esta en un servidor oracle gratuito, los parametros de la clase **connectDb**, contienen valores para inicializar una base de datos local, ya que obviamente no puedo colocar la base de datos real del proyecto.

# Mejoras a futuro 

Gestionar toda la conexion con un nuevo metodo llamado **PDO Mysqli.**, ademas de crear archivo **.Htaccess** para prohibir accesso de ciertos archivos en el servidor.

# Aprendizaje 
**
MYSQLI.
MYSQL.
SQL.
ORACLEDB.
HTACCESS.
PHP7.
COMPOSER.**

Lo que mas amo de este proyecto son las pruebas unitarias y su facilidad de uso
[1]: https://phplisttodo.herokuapp.com/index.php "TODOAPP.COM"
