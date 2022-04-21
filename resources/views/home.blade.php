<!doctype html>
<html">
<head>
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
</head>
<body>
    @foreach($digimonArray as $digimon)
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item-name">
                    {{ $digimon['name'] }}
                </li>
                <li class="list-group-item">
                    <img src="{{ $digimon['img'] }}" alt="paco"> 
                </li>
            </ul>
        </div>
    @endforeach
</body>
</html>