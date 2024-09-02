<?php
/**
 * Archivo php para simular una colección de noticias como si salieran de una base de datos.
 * 
 * Este archivo se comparte con las otras pàginas para que puedan acceder al arreglo indexado $noticias.
 */
function getNoticias(){
    $n1 = new stdClass();
    $n1->titulo = "La NASA denunció que China planea poner un supermercado en la luna.";
    $n1->contenido = "Según la agencia espacial norteamericana, en las últimas semanas se interceptaron 3 cohetes chinos con mercadería y un cuarto, tripulado por personas de origen peruano entrenados para hacer reabastesimiento de mercadería en gravedad 0.";
    $n1->imagen = "https://www.nasa.gov/wp-content/uploads/2023/03/jsc2013e087950.jpg";

    $n2 = new stdClass();
    $n2->titulo = "Crean software para detectar gente pelotudeando en el trabajo.";
    $n2->contenido = "El Software, promete disparar la productividad de empresas y comercios, al eliminar tiempos muertos de empleados asignandoles diferentes roles. Varios sindicatos ya se declararon en contra del uso de esta tecnología.";
    $n2->imagen = "https://1.bp.blogspot.com/-f1w3f4ePS3s/W1jVAAlT6RI/AAAAAAAAGuE/jAD5isAy2Ws5MNlrbViteOkzs3TTAr5nACLcBGAs/s640/SW_DRONE.jpg";

    $n3 = new stdClass();
    $n3->titulo = "Quien es Tito Musk, el primo argentino de Elon Musk que se presentó en lo de Guido Kaczka.";
    $n3->contenido = "Tito Musk vive en Bernal y desde chico se destacó por inventar pelotudeces. En 1986 intentó mandar un conejo a la Luna pero revento como el Challenger. También dice que habla seguido con su primo, Elon.";
    $n3->imagen = "https://files.merca20.com/uploads/2022/05/Elon-Musk-tatuaje-e1651875137289.jpeg";

    $n4 = new stdClass();
    $n4->titulo = "Starbucks se va del país y hay preocupación entre hipsters: -'no sabemos donde iremos a mostrar que tenemos una macbook.'-";
    $n4->contenido = "Según el comunicado oficial 'debido a la crisis global que vive el sector, y la cantidad de pelotudos que ocupan mesas durante 8 horas con un café y dos mediaslunas solamente para darse corte que tienen una MacBook, se hace inviables la continidad de las operaciones en Argentina.";
    $n4->imagen = "https://1.bp.blogspot.com/-HiD_vBlSbg0/X2PjR8udR5I/AAAAAAAAIvw/E3EWAortz7A3ZHIdTrOGHa7YGsf17ZUiQCLcBGAsYHQ/w640-h444/starbucks.jpg";

    $n5 = new stdClass();
    $n5->titulo = "Nueva noticia";
    $n5->contenido = "Ut nec faucibus neque. Praesent dignissim ac ligula laoreet sollicitudin. Aliquam congue justo quis ligula porttitor pulvinar. Curabitur vel laoreet lectus. Maecenas egestas suscipit sem id ornare.";
    $n5->imagen = "https://1.bp.blogspot.com/-HiD_vBlSbg0/X2PjR8udR5I/AAAAAAAAIvw/E3EWAortz7A3ZHIdTrOGHa7YGsf17ZUiQCLcBGAsYHQ/w640-h444/starbucks.jpg";

    // declaro el arreglo de noticias
    $noticias = [$n1, $n2, $n3, $n4, $n5]; 
    return $noticias;
}

function getNoticiaById($id){
    $noticias = getNoticias();
    $noticia = $noticias[$id]; 
    return $noticia;
}