<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--<meta http-equiv="refresh" content="600">-->
        <title>FingerPrint PHP + Java + MySql</title>
        <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link href="Css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="mensaje">
            <img id="imageMessage" />
            <div class="messageStyle">
                <p id="txtMensaje"></p>
            </div>
        </div>

        <div>
            <div>
                <label>Documento:</label>
                <label id="documento"></label>
            </div>
            <div style="margin-top: 5px;">
                <label>Nombre Completo:</label>
                <label id="nombre"></label>
            </div>
            <!-- <a target="_self" href="home.php?token=<?php echo $_GET["token"]; ?>">Regresar</a> -->
        </div> 

       
        <div id="fingerPrint" style="border: solid 1px black;width: 18%;height: 290px;margin-top: 5px;">
            <div style="display: block">
                <img  src="images/finger.png" style="width: 80%;margin-left: 9%;"> 
            </div>
            <div style="display: block;padding-left: 3px;">
                <label   style="margin-left: 5px;">
                    Estado del sensor: Activo
                </label>
                
            </div>
        </div>

    </body>
    
     
</html>