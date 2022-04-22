<!doctype html>
<html">
    <head>
        <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrap0">
            @foreach($digimonArray as $digimon)
            <div class="column wrap1">
                <div class="wrap2 pad">
                    <div class="list-group">

                        <h3 class="column_title coupon_title">
                            {{ $digimon['name'] }}
                        </h3>
                        <img src="{{ $digimon['img'] }}" alt="paco">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>




<!--
    <div class="wrap0">
            @foreach($digimonArray as $digimon)
            <div class="column wrap1">
                <div class="wrap2 pad">
                    <div class="list-group">

                        <h3 class="column_title coupon_title">
                            {{ $digimon['name'] }}
                        </h3>
                        
                        <img src="{{ $digimon['img'] }}" alt="paco">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
 -->

