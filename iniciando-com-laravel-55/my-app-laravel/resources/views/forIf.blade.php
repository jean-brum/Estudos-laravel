<h1>For If</h1>

@if($value > 100)
    <p>Valor maior que 100</p>
@else
    <p>Valor menor que 100</p>
@endif

@for($i = 0; $i < $value; $i++)
    - {{$i+1}}
@endfor

@php
$i = 0;
@endphp
<br/>
@while($i < $value)
    - {{$i+1}}
    @php
      $i++;
    @endphp
@endwhile
<br/>
@foreach($myArray as $index => $value)
    <p>{{$loop->index}} - {{$index}} - {{$value}}</p>
@endforeach
<br/>
@forelse([] as $index => $value)
    <p>{{$loop->index}} - {{$index}} - {{$value}}</p>
@empty
    <p>Nenhum registro encontrado.</p>
@endforelse