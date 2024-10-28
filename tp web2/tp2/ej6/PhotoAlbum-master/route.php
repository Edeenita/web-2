<html>
<head></head>
<body>
<?php
    $objects = [
        "flower" => [ "images" => ["flower_0.jpg","flower_1.jpg","flower_2.jpg","flower_3.jpg","flower_4.jpg"], "name" => "Flores"],
        "tree" => [ "images" => ["tree_0.jpg","tree_1.jpg","tree_2.jpg","tree_3.jpg","tree_4.jpg"], "name" => "Arboles"],
        "duck" => [ "images" => ["duck_0.jpg","duck_1.jpg","duck_2.jpg","duck_3.jpg","duck_4.jpg"], "name" => "Patos"]
    ];

    if(isset($_GET['object']) && isset($objects[$_GET['object']]) )
    {
        $selected_object = $objects[$_GET['object']];
        echo "<h1>".$selected_object["name"]."</h1>";
        foreach ($selected_object["images"] as $image )
            echo "<img src='img/$image'/><br>";
    }
    else
    {
        echo "<p>Seleccione un objecto:</p><br>";
        foreach ($objects as $object => $data )
            echo "<a href='$object'>" . $data["name"] . "</a><br>";
    }
?>
</body>
</html>