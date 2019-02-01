<link rel="stylesheet" href="./style.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<body> 
<?php
    include "classes.php";
    $nrOfApor = $_POST['apor'];
    $giraffer = $_POST['giraffer'];
    $tigrar = $_POST['tigrar'];
    $koko = $_POST['kokos'];

    
    function randomNames(){
        $names = array("Agda", "Kasper", "Herbert", "Borat", "Gunnhild", "Boris", "Yolanda", "Gunnar", 
        "Pedro", "Juan");

        return $names[rand(0, count($names) -1)];
    }
    
    for($i = 0; $i < $nrOfApor; $i++){
        $apa = new Apa(randomNames());
        echo $apa->image;
    
    }
    for($i = 0; $i < $tigrar; $i++){
        $tiger = new Tiger(randomNames());
        echo $tiger->image;
            
    }
    for($i = 0; $i < $giraffer; $i++){
        $giraff = new Giraff(randomNames());
        echo $giraff->image;
            
    }
    for($i = 0; $i < $koko; $i++){
        $kokos = new Coconut(randomNames());
        echo $kokos->image;
            
    }
    
?>
<script type="text/javascript">
    $(document).ready(function(){
        var apa = <?php echo json_encode($apa->makeSound());?>;
        var tiger = <?php echo json_encode($tiger->makeSound());?>;
        var giraff = <?php echo json_encode($giraff->makeSound());?>;
        var kokos = <?php echo json_encode($kokos->makeSound());?>;
    
    $(".apa").on("click", function(){ monkeySound(); });

    function monkeySound(){
        alert(apa + <?php echo json_encode($apa->name);?>);
    }

    $(".tiger").on("click", function(){ tigerSound(); });

    function tigerSound(){
        alert(tiger + <?php echo json_encode($tiger->name);?>);
    }

    $(".giraff").on("click", function(){ giraffSound(); });

    function giraffSound(){
        alert(giraff + <?php echo json_encode($giraff->name);?>);
    }

    $(".coco").on("click", function(){ kokoSound(); });

    function kokoSound(){
        alert(kokos + <?php echo json_encode($kokos->name);?>);
    }

});
</script>
</body>