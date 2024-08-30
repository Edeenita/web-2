<?php

require_once "db_fake.php";
function showHome() {

    ?>
    <main>
        <ul>
            <?php
            $listas = [5, 10, 20];
            foreach ($listas as $lista) {
                echo "<li><a href=lista/". $lista.  ">Lista de $lista</a></li>";
                }
            ?>
        </ul>
    </main>
    <?php
}

function showListaById($id) {   

    ?>
    <h1>Tabla del <?php echo $id ?> </h1>
    <ul>
        <?php    
            for($i = 1; $i <= 10; $i++) {
                echo "<li> {$i} * {$id} = " . ($i * $id) . "</li>";
            }
        ?>
    </ul>
<?php
}
