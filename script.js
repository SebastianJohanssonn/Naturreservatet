$(document).ready(function(){
    
    $("#submit").on("click", function(){ sendForm(); });

    function sendForm(){
        $.ajax(
            {
                url: "./results.php",
                method: "POST",
                success: function(data){
                    console.log(data);
                }
            }
        )
    }
});