<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64b74efe4a.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sandra Estética - Contacto</title>
    <link rel="icon" href="../img/logo.png">

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/socialBar.css">
    <link rel="stylesheet" href="../css/scrolltop.css">
    <link rel="stylesheet" href="../css/clickwp.css">
    <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>

<?php 
include "header.php";
include "socialBar.php";
?>

<div class="container contenedor">
    <?php 
    //Reasignar variables para mejorar el manejo de los datos.
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $tratamiento = $_POST['tratamiento'];
    $consulta = $_POST['consulta']; 

        //Configurar la funcion mail()
        $destinatario = "ramiroariel_carp@hotmail.com";
        $asunto = "Nuevo mensaje desde el sitio Sandra Estética.";
    $mensaje = "Nombre: ".$nombre."<br>"."Email: ".$email."<br>"."Numero: ".$tel."<br>"."Tratamiento: ".$tratamiento."<br>"."Mensaje: ".$consulta;
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    //Envio 
    $envio = mail($destinatario,$asunto,$mensaje,$cabeceras);
    if($envio == true){
        echo "Gracias ".$nombre." por contactarnos!";
        echo "<br>";
        echo "Te responderemos a la brevedad.";
    }else{
        echo "Hubo un error en el envío.";
        echo "<br>";
        echo "Por favor, escribinos a ".$destinatario;
    }
    //Aprovechamos los datos que llegan por POST, para mandarlos a una database MySQL
    //Conexion MySQL -> mysqli_connect("ip del sv","usuario de MySQL","pass de usuario de database","nombre de la database")
    $host = "localhost";
    $user = "id14710361_utn2020";              /*"root";*/
    $pass = "PassNueva8jaja!";                 /*"";*/
    $database = "id14710361_sandraestetica";   /*"sandraestetica";*/
    @$conexion = mysqli_connect($host,$user,$pass,$database) or die("<br>Error de conexión al servidor.");
    
    
    if($nombre=="" and $email=="" and $consulta=="" and $tel==""){
        echo "<br> Los datos están vacíos, no se cargarán en la base de datos.";
    }else{
        //Consulta MySQL
        $query1 = "INSERT INTO datosform VALUES (2,'pepardo','mail@mail.com','1137982666','facial','hola jaj')";
        $query2 = "INSERT INTO datosform VALUES (0, '$nombre', '$email', '$tel', '$tratamiento', '$consulta')";
    
        $consultasql = mysqli_query($conexion,$query2);
        //Verificar que los datos fueron subidos
        if($consultasql == true){
            echo "<br>También te guardamos en la base de datos! :)";
        }else{
            echo "<br>No pudimos guardarlo en la base de datos :(";
        }
    }
    
    ?>
</div>
<?php 
    include "scrolltop.php";
    include "clickwp.php";
    include "footer.php";
?>

<script src="../js/scrolltop.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

