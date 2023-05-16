<?php
$file = fopen("file.csv", "r"); 
$places = array();

while(!feof($file)) {
   $content = fgets($file);
   if (($content != "\n") && ($content != ""))
      $places[] = explode(";",$content);
}

//print_r($places);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Informacion</title>
	<link rel="icon" type="image/x-icon" href="images/1683022998.ico">
    <style>
		body {
      background-color: white;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		h1 {
			font-family: "Times New Roman", Times, serif;
			color: rgb(0, 0, 0);
			background-color: rgb(255, 255, 255);
			text-align: center;
			padding: 20px;
			margin: 0;
		}
		button {
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
		}
		button:hover {
			color: white;
			background-color: black;
		}
        .image-container {
           display: flex;
           justify-content: center;
   }
       a{
		color: black;
		text-decoration: none;
		margin-top: 20px;
		font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
	   }
	   a.das:hover{
		width: 240px;
		height: 30px;
		background-color: black;
		color: white;
	   }
       
  table thead th {
    background-color: #000000;
    color: white;
    font-size: 18px;
    padding: 10px;
    text-align: center;
  }
  
  
  table tbody td {
    background-color: #ffffff;
    color: #444444;
    font-size: 16px;
    padding: 10px;
    text-align: center;
  }
  
 
  table tbody td img {
    
    max-width: 80px;
  }
  
 
  table tbody tr:nth-child(even) {
    background-color: #f8f8f8;
  }
  table{
    margin: auto;
  }
  .okb{
           font-size: 35px;
           font-family: 'Times New Roman', Times, serif;
           text-align: center;
           color:black;
        }
	</style>
  
</head>
<body>
  
  <a href="index.html"><h1>Descubriendo Gran Canaria</h1></a>
	<div style="display: flex; justify-content: center;">
		<a class="das" href="./nuevolugar.html">Nuevo Lugar que visitar</a>
		<a class="das" href="#test.php">Lugares que no me puedo perder</a>
	</div>
  <form class="nu" action="images/maps.png">
    <table border ="1">
      <thead>
          <tr>
              <th>Visitado</th>
              <th>Nombre del lugar</th>
              <th>Descripción</th>
              <th>Municipio</th>
              <th>URL con más información</th>
              <th>URL de Google Maps</th>
              <th>Imagen</th>
          </tr>
      </thead>
      <tbody>

          <?php

          //echo "<br>The size of the array is...".sizeof($places);


             foreach ($places as $place) {
                  
                  echo "<tr>";
                  echo "<td><input type='checkbox' checked='checked'></td>";
                  echo "<td>$place[0]</td>";
                  echo "<td>$place[1]</td>";
                  echo "<td>$place[2]</td>";
                  echo "<td><a href='$place[3]'>$place[3]</a></td>";
                  echo "<td><a href='$place[4]'>$place[4]</a></td>";
                  echo "<td><img src='upload/".$place[5]."' width='200px'></td>";
                  echo "</tr>";

              }

          ?>
      
      </tbody>
  </table>
    </form>
      <div class="okb">
      <input type="submit" value="Submit" class="noo"></div>
    
</body>
</html>

