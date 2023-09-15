<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="kontener">
        <div id="góra">
            <h1>Portal dla wędkarzy</h1>
            
        </div>
        <div id="lewe">
            <div id="lewo1">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <li>Skrypt</li>
                    <li>Skrypt</li>
    
                </ol>
            </div>
            <div id="lewo2">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th> <th>Gatunek</th> <th>Występowanie</th>
                    </tr>
                    <tr>
                        <td>Skrypt</td>Skrypt<td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td>
                    </tr>
                   
                </table>
            </div>
        </div>
        <div id="prawy">
            <img src="ryba1.jpg" alt="Sum">
            <br>
            <a href="kwerendy.txt">Pobierz kweredyny</a>
        </div>
        <div id="dół">
            <p>Stronę wykonał Maks Kłos</p>
        </div>
    </div>
    <?php 
        $db=mysqli_connect("localhost", "root",
"", "Wedkowanie");
mysqli_close ($db);
    ?>


</body>
</html>