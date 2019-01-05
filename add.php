<!DOCTYPE html>
<html>
    <?php
        include "nav.inc";
        include "config.ini";
        
   if (isset($_GET['los'])){
      $text = "I Say YES! to " . $_GET['phrase1'] . " " .  $_GET['phrase2'] . " " . $_GET['phrase3'];
      $db_query = "INSERT INTO `phrases` (`ID`, `text`, `insertdate`) 
     VALUES (NULL, '" . $text . "', NOW())";
    $result = $link->query($db_query);
   }
    ?>
    <head>
    <title>formular</title>
    </head>
    
    <body>
        
       
        <h1>Formular</h1>
        <form method="get" action="index.php">
        Begrüßung<br>
            <select name="begruessung">
            <option value="Nichts"></option>
            <option value="Guten Morgen">Guten Morgen</option>
            <option value="Mahlzeit">Mahlzeit</option>
            <option value="Guten Abend">Guten Abend</option>
            <option value="Gute Nacht">Gute Nacht</option>
            </select><br>
            <div id="Name">
        Vorname<br>
            <input type ="text" name="vorname"><br>
        Nachname<br>
            <input type ="text" name="nachname"><br>
            </div>
        <br>
            <h1>I Say YES! to ...</h1>
            <select name= "unfug0">
                <option value="Unfug 0">Unfug 0</option>
                <option value="Blaue">Blaue</option>
                <option value="Gelbe">Gelbe</option>
                <option value="Rote">Rote</option>
            </select>
            <select name= "unfug1">
                <option value="Unfug 1">Unfug 1</option>
                <option value="Gänse">Gänse</option>
                <option value="Hühner">Hühner</option>
                <option value="Enten">Enten</option>
            </select>
            <select name= "unfug2">
                <option value="Unfug 2">Unfug 2</option>
                <option value="laufen">laufen</option>
                <option value="fliegen">fliegen</option>
                <option value="schwimmen">schwimmen</option>
            </select>
            Satzende
            <input type = "text" name = "satzende">
        <br>
        <br>
            <input type="submit" name = "los" value="Los">
                    
        </form>
        
        
        
   
    
    </body>

</html>