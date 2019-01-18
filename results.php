<link rel="stylesheet" href="./style.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<body>
    
<?php
    include "classes.php";
    $nrOfApor = $_POST['apor'];
    $giraffer = $_POST['giraffer'];
    $tigrar = $_POST['tigrar'];
    $koko = $_POST['kokos'];

    for($i = 0; $i < $nrOfApor; $i++){
        $apa = new Apa("Herbert");
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
    $apaSound = $apa->makeSound();
    $tigerSound = $tiger->makeSound();
    $giraffSound = $giraff->makeSound();
    $kokoSound = $kokos->makeSound();
    

    
?>
<script type="text/javascript">
    $(document).ready(function(){
        var apa = <?php echo json_encode($apaSound);?>;
        var tiger = <?php echo json_encode($tigerSound);?>;
        var giraff = <?php echo json_encode($giraffSound);?>;
        var kokos = <?php echo json_encode($kokoSound);?>;

    
    $(".apa").on("click", function(){ monkeySound(); });

    function monkeySound(){
        alert(apa);
    }

    $(".tiger").on("click", function(){ tigerSound(); });

    function tigerSound(){
        alert(tiger);
    }

    $(".giraff").on("click", function(){ giraffSound(); });

    function giraffSound(){
        alert(giraff);
    }

    $(".coco").on("click", function(){ kokoSound(); });

    function kokoSound(){
        alert(kokos);
    }

});
</script>
</body>