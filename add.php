<!DOCTYPE html>
<html>
    <head>
    <title>formular</title>
    </head>
    
    <body>
        <h1>Formular</h1>
        <form action="index.php" method="get">
        Begrüßung<br>
            <select name="begruessung">
            <option value="Nichts"></option>
            <option value="Guten Morgen">Guten Morgen</option>
            <option value="Mahlzeit">Mahlzeit</option>
            <option value="Guten Abend">Guten Abend</option>
            <option value="Gute Nacht">Gute Nacht</option>
            </select><br>
        Vorname<br>
            <input type ="text" name="vorname"><br>
        Nachname<br>
            <input type ="text" name="nachname"><br>
        <br>
            <h1>I Say YES! to ...</h1>
            <select name= "unfug0">
                <option value="Unfug0">Unfug 0</option>  
            </select>
            <select name= "unfug1">
                <option value="Unfug1">Unfug 1</option>  
            </select>
            <select name= "unfug2">
                <option value="Unfug2">Unfug 2</option>
            </select>
        <br>
        <br>
            <input type="submit" value="Los Geht's">  
        </form>
        
        
   
    
    </body>

</html>