<php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTINA PEDRALBES</title>
<style>
    h1 {

        text-align: center;
        font-size: 50px;
        font: verdana;
    }
    h2{
        text-align: center;
        font-size: 24px;
    }
    b{
        color: blue;
    }
    
    #logotipo {

        background-color: white;
    }

    button{ 
        padding: 10px;
        font-weight: 600;
        margin: 100px;
        font-size: 48px;
        background-color: white;
        margin-top: 50px;
    }

    .botones{
        text-align: center;
    }

    #fotos{
        text-align: center;
        margin-top: 50px;
    }

    #contacte {
        background-color: rgb(180, 245, 239);
    }

</style>
</head>
<body>


    <div id="logotipo">
        <img src="imagenes/logo.jpg" width="270" height="80">
    </div>

    <div>

        <h1>CANTINA PEDRALBES</h1>
    </div>

    <div id="fotos">
        <img src="imagenes/cantina2.jpg" width="600" height="400">
        <img src="imagenes/cantina1.jpg" width="600" height="400">
        <img src="imagenes/cantina3.jpg" width="600" height="400">
    </div>
    <div class="botones">
        <button onclick="window.location.href='E:/2nDaw/PROJECTE/comprar.js'">FER COMANDA</button>
        <button onclick="window.location.href='E:/2nDaw/PROJECTE/admin.html'">ADMIN</button>
    </div>
    <div id="contacte">
        <h2><b>TELÈFON:</b>932033332<b>CORREU:</b> inspedralbes@xtec.cat<b>HORARI:</b> 08:00h / 15:00h<b>ADREÇA:</b>Av. d'Esplugues, 36, 42, 08034 Barcelona</h2>
    </div>
</body>
</html>
