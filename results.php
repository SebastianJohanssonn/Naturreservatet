<link rel="stylesheet" href="./style.css">
<body>
    
<?php
    include "classes.php";
    $nrOfApor = $_POST['apor'];
    $giraffer = $_POST['giraffer'];
    $tigrar = $_POST['tigrar'];
    $koko = $_POST['kokos'];

    for($i = 0; $i < $nrOfApor; $i++){
        $apa = new Apa("Herbert", "monkey");
        echo $apa->image;
            
    }
    for($i = 0; $i < $tigrar; $i++){
        $tiger = new Tiger("Herbert");
        echo $tiger->image;
            
    }
    for($i = 0; $i < $giraffer; $i++){
        $giraff = new Giraff("Herbert");
        echo $giraff->image;
            
    }
    for($i = 0; $i < $koko; $i++){
        $kokos = new Coconut("Herbert");
        echo $kokos->image;
            
    }
?>
</body>