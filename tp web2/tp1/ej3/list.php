<?php
    $allList = 200; //hardcodeado!!!!!!!!!!! :DDDDD
    $size = isset($_GET['size']) ? $_GET['size'] : '0';

    switch($size){
        case '5':
        case '20':
        case '100':
            $tamañoLista = $size;
            break;
        case 'all':
            $tamañoLista = $allList;
            break;
        default:
            $tamañoLista = 1;
            break;
    }            
?>
<ul>
    <?php
        for($i = 1; $i <= $tamañoLista; $i++): ?>
            <li><?php echo ($i) ?> </li>
        <?php endfor ?>
</ul>
