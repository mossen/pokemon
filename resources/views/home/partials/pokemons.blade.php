@if(isset($pokemons))
    <div class="col-lg-8 col-md-9 pokemons" >
        @foreach($pokemons as $pokemon)
            <div class="col-sm-2 text-center pokemon">
                <div class="panel panel-default" id="thumbnail">

                    <img class="img-pokemon" src="{{ URL("img/thm/$pokemon->id" . preg_replace('/[^-,;a-zA-Z0-9_]/', "", $pokemon->ename)) .".png" }}" alt="">
                    <p class="name">{{ $pokemon->ename }}</p>
                    <p class="id">{{ $pokemon->id }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-lg-4 col-md-3 pokemon-details" data-url="{{ url("/podex/pokemon/") }}">

        <img src="{{ url("img/loading1.svg") }}" alt="" class="loading hidden">
        
        <div class="panel panel-default no-pokemon">
            <p>Select your pokemon</p>
        </div>
        <div class="panel panel-default hidden">
            <img id="img" class="pokemon" src="" data-src="{{ URL("img/img/") }}">
            <img id="sprite" class="pokemon" src="" data-src="{{ URL("img/spr/") }}">
            <p class="name"></p>
            <p class="id"></p>
            <p class="type">
                    <span class="init-type"></span>
            </p>
            <table class="table">
                <tr class="first-tr">
                    <td>Attack</td>
                    <td id="attack"></td>
                </tr>
                <tr>
                    <td>Defense</td>
                    <td id="defense"></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td id="hp"></td>
                </tr>
                <tr>
                    <td>Sp.Atk</td>
                    <td id="sp-atk"></td>
                </tr>
                <tr>
                    <td>Sp.Def</td>
                    <td id="sp-def"></td>
                </tr>
                <tr>
                    <td>Speed</td>
                    <td id="speed"></td>
                </tr>

            </table>


        </div>
    </div>

@else


@endif