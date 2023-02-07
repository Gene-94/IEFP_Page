
    <label for="{{$nome}}">{{$nome}}</label>
    <br>
    <select id="{{$nome}}" name="option_id">
        <!--<option value="" selected hidden disabled>-----------</option>-->
        @if($tabela->isEmpty())
            <option value="">sem opçoes</option>
        @endif
        
        @foreach($tabela as $tipo)
            <option value="{{$tipo->id}}">
                {{$tipo->nome}}
            </option>
        @endforeach
    </select>
