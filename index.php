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




<!DOCTYPEhtml>
<html>

    
    <head>
    <title>begruessung</title>
    </head>
    <body>
        
        <?php echo $_GET["begruessung"]; ?>
        <?php echo $_GET["vorname"]; ?>
        <?php echo $_GET["nachname"]; ?><br><br>
        <table class="table-striped table">
        <th>ID</th>
        <th>Phrase</th>
        <?php
        $link = mysqli_connect("localhost", "root", "", "erstedatenbank");
        $stmt = "SELECT * FROM `phrases`";
        $result = $link->query($stmt);

        if ($result->num_rows > 0){
            while ($row = mysqli_fetch_row($result)){
            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>";
            }
        }
        else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }
        ?>
    </table>
    </body>

</html>