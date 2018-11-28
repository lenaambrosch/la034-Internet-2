<?php
    include ("config.ini")
?>
<?php
        include "nav.inc"
        ?>
<?php 
            if(empty($_GET["satzende"])){
                    die("Bitte letztes Feld ausfüllen");
                        }
        ?>

<?php
    $text = $_REQUEST["unfug0"]." ". $_REQUEST["unfug1"]." ". $_REQUEST["unfug2"]."\n";
    file_put_contents($filename, $text, FILE_APPEND)
        ?>


<!DOCTYPEhtml>
<html>

    
    <head>
    <title>begruessung</title>
    </head>
    <body>
        
        <?php echo $_GET["begruessung"]; ?>
        <?php echo $_GET["vorname"]; ?>
        <?php echo $_GET["nachname"]; ?><br><br>
        <?php $MyText = file($filename, FILE_IGNORE_NEW_LINES); 
        foreach ($MyText as $value)
        { echo "<p>" . $value . "</p>";}
        ?>
        
    </body>

</html>