<html>
    <body>
        <h1>Receiving data from the form</h1>
        <?php

        //Recibimos los datos enviados a traves del formulario
        $namePlace = $_POST ["nombre-lugar"];
        $descriptionPlace = $_POST["descripcion"];   
        $municipio = $_POST ["municipio"];
        $urlConMasInformation = $_POST["url-info"];
        $urlConEnlaceAgooglemaps = $_POST["url-maps"];
        $imagen = $_POST["imagen"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Mostramos los diferentes campos
        echo "<br>The name of the place is ...$namePlace";
        echo "<br>The description of the place is ...$descriptionPlace";
        echo "<br>The municipio of the place is ...$municipio";
        echo "<br>The url con mas information of the place is ...$urlConMasInformation";
        echo "<br>The url con enlace A Google Maps of the place is ...$urlConEnlaceAgooglemaps";
        echo "<br>The imagen of the place is ...$imagen";

}
        ?>

        </body>
        </html>
      
        
