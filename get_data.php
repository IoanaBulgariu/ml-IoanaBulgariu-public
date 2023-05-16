<html>
<body>
<h1>data</h1>

<?php

$error = false;

if($_POST["fname"] == ""){
    echo "<br>ERROR: the field is empty";
    $error = true;
}
else{

    if((strlen($_POST["fname"])>20))
    {
        echo "<br>ERROR: no!no! what?";
        $error = true;
    }
    

}

if($_POST["Description"] == ""){
    echo "<br>ERROR: the field is empty";
    $error = true;
}
else{
    if((strlen($_POST["Description"])>100)){
        echo "<br>ERROR: dont write too much, i dont like to read";
    }
}

if($_POST["Municipio"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Municipio"])>40)){
        echo "<br>ERROR: the lenght is too big";
    }
   
}

if($_POST["Url"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Url"])>100)){
        echo "<br>ERROR: are you sure?isnt ur adress";
    }
    
}


if($_POST["maps"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["maps"])>100)){
        echo "<br>ERROR: use short url, you lil monkey";
    }
    
}


if($_FILES["filename"]["name"] == null){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_FILES["filename"]["name"])>100)){
        echo "<br>ERROR: the format isnt good, what are you trying to send me??";
    }
     
}

if ($error == false) {
    echo "<br>The data is correct";
    echo "<br>The name of the place is ".$_POST["fname"];
    echo "<br>The description of the place is ".$_POST["Description"];
    echo "<br>The municipio is ".$_POST["Municipio"];
    echo "<br>The official site of the place is ".$_POST["Url"];
    echo "<br>The location on google maps of the place is ".$_POST["maps"];
    echo "<br>Attached file: ".$_FILES["filename"]["name"];
    $fileUploadDir = "./upload";

    if (!(move_uploaded_file($_FILES["filename"]["tmp_name"], $fileUploadDir."/".$_FILES["filename"]["name"])))
        echo "<br>Error al subir el fichero";
        
    $myfile = fopen("file.csv", "a") or die("Unable to open file!");
    $txt = "";
    fwrite($myfile, "\n".$_POST["fname"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Description"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Municipio"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Url"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["maps"]);
    fwrite($myfile,";");
    fwrite($myfile, $_FILES["filename"]["name"]);
    fclose($myfile);
}
?>
<footer>
<br><a href="nuevolugar.html">try again</a>
</footer>
</body>    
</html>
