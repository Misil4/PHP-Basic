<?php
// 12. Dado el siguiente array de objetos.
    $products = array(

        'banana' => array(
           'code:' => "SKI-203",
           'name:' => "Banana",
           'price:' => 200,
           'qty:' => 31,
           'imported:' => true,
           'type:' => "Tropical"),
        
           'pomelo' => array(
            'code:'=> "SFI-233",
            'name: '=>"Pomelo",
            'price:'=> 55,
            'qty:'=>325,
            'imported:'=> false,
            'type:' =>"Tropical"),
        
            'Piña' => array(
            'code:' =>"JKI-453",
            'name:' =>"Piña",
            'price:'=> 70,
            'qty:'=> 125,
            'imported:'=> false,
            'type:'=> "Oceanic"),
            
            'Coco' => array(
            'code:' =>"CDC-113",
            'name:' =>"Coco",
            'price:'=> 120,
            'qty:'=> 25,
            'imported:'=> true,
            'type:'=> "Oceanic"),

            'Papaya' => array(
            'code:'=> "SWI-265",
            'name:'=> "Papaya",
            'price:'=> 200,
            'qty:'=> 725,
            'imported:'=> true,
            'type:'=> "Tropical"
            )
        );
    // Mostrar por consola todos los elementos ((Declarar una función para ello))
    
    print_r($products);
    ?>
    
    
    
    
    