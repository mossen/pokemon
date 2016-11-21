@if(isset($pokemons))
    <div class="col-lg-8 pokemons" >
        @foreach($pokemons as $pokemon)
            <div class="col-sm-2 text-center pokemon">
                <div class="panel panel-default" id="thumbnail">

                    <img class="pokemon" src="{{ URL("img/thm/$pokemon->id" . "$pokemon->ename.png") }}" alt="">
                    <p class="name">{{ $pokemon->ename }}</p>
                    <p class="id">{{ $pokemon->id }}</p>
                    <p class="type">
                        @foreach($pokemon->type as $type)
                            <span>{{ $type }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-lg-4 pokemon-details" data-url="{{ url("/podex/pokemon/") }}">
        <div class="panel panel-default no-pokemon">
            <p>Select your pokemon</p>
        </div>
        <div class="panel panel-default hidden">
            <img id="img" class="pokemon" src="" data-src="{{ URL("img/img/") }}">
            <img id="sprite" class="pokemon" src="" data-src="{{ URL("img/spr/") }}">
            <p class="name">{{ $pokemons[0]->ename }}</p>
            <p class="id">{{ $pokemons[0]->id }}</p>
            <p class="type">
                @foreach($pokemons[0]->type as $type)
                    <span>{{ $type }}</span>
                @endforeach
            </p>
        </div>
    </div>

@else


@endif