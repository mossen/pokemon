

$( document ).ready(function() {

    //Showing selected pokemon with details
    $(".pokemons").on("click", "#thumbnail", function () {

        $(".pokemon-details .loading").removeClass("hidden");

        //Send Ajax Request
        var url = $(".pokemon-details").attr("data-url") + "/" + $(this).find(".id").text();

        $.ajax({
            url: url
        }).done(function(response) {

            result = jQuery.parseJSON(response);
            $(".pokemon-details #img").attr("src", $(".pokemon-details #img").attr("data-src") + "/" + result["id"] + result["ename"] + ".png");
            $(".pokemon-details #sprite").attr("src", $(".pokemon-details #sprite").attr("data-src") + "/" + result["id"] + "MS.png");

            $(".pokemon-details #attack").text(result["base"]["Attack"]);
            $(".pokemon-details #defense").text(result["base"]["Defense"]);
            $(".pokemon-details #hp").text(result["base"]["HP"]);
            $(".pokemon-details #sp-atk").text(result["base"]["Sp.Atk"]);
            $(".pokemon-details #sp-def").text(result["base"]["Sp.Def"]);
            $(".pokemon-details #speed").text(result["base"]["Speed"]);

            $(".pokemon-details .panel").removeClass("hidden");
            $(".no-pokemon").addClass("hidden");
            $(".pokemon-details .loading").addClass("hidden");
        });

    });




    $('#pokemon-panel').jplist({
        itemsBox: '.pokemons'
        ,itemPath: '.pokemon'
        ,panelPath: '.jplist-panel'
    });


});





