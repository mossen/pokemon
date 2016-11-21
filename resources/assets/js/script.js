

$( document ).ready(function() {

    //Showing selected pokemon with details
    $(".pokemons").on("click", "#thumbnail", function () {



        //Send Ajax Request
        var url = $(".pokemon-details").attr("data-url") + "/" + $(this).find(".id").text();

        $.ajax({
            url: url
        }).done(function(response) {

            result = jQuery.parseJSON(response);
            console.log( result );
            $(".pokemon-details #img").attr("src", $(".pokemon-details #img").attr("data-src") + "/" + result["id"] + result["ename"] + ".png");
            $(".pokemon-details #sprite").attr("src", $(".pokemon-details #sprite").attr("data-src") + "/" + result["id"] + "MS.png");
        });


    });

});





