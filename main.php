<html>
<head>
    <title>TASK</title>
    <link rel="stylesheet" type="text/css" href="css/task5.css">
    </head>
    <body>
        <div class="container">
            <h1 class="title">TASK 3-5</h1>
            <p class="description">Simulation of random dice rolls:</p>
            <?php
                include 'dado.php';

                $dado = new Dado(0, 12);

                for($i = 0; $i <= 12; $i++){
                    echo '<p> Triada '.$i.' => '.$dado->tirarDado().'</p>';
                }
            ?>
            <footer>
                <p>Miriam Molina Sorroche, 2nd year Web Applications Development, 
                    CesurFormacion Academy</p>
            </footer>
        </div>
    </body>
</html>