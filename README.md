appModule-PHP
=============

Ejemplo de APP modulado.

La aplicación está modulado mediante MVC (model-view-controller).

    Model (modelo)--> Contiene un simulacro de la base de datos. En cuanto haya una base de datos, tendrá un Schema para obtener los datos JSON.
    View (vista)--> Es la parte del cliente en PHP, y que se visualizarán la lista de películas.
    Controller (controlador)--> Es un intermediario entre el modelo y la vista. Obtiene las películas como objeto para mostrar cada campo del dicho objeto en la vista.

    Contiene también una carpeta llamada "library" para utilizar la librería externa de RottenTomatoes. Así podremos utilizar la API y mostrar las películas con los métodos que contiene dicha librería.

Tutorial in PHP: 

http://php-html.net/tutorials/model-view-controller-in-php/

Documentación de la API en PHP: 

http://developer.rottentomatoes.com/docs/read/json/v10/examples

Ejemplo de uso de la API:

https://github.com/richardhoppes/rottentomatoes-php-api
