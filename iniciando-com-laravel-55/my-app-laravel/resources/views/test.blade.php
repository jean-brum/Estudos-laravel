Hello World!
<br/>
{{ $nome }}
<br/>
{{ $variavel1 . $nome}}
<br/>
{{ 1 + 1 }}
<br/>
{{ 2 + 2 == 4 ? 4 : 0 }}
<br/>
<-- OPERAÇÃO TERNÁRIA PHP 7 -->
<br/>
{{ $test??"Outro valor" }}
<br/>
<br/>
{{ "<h1>School Of Net</h1>" }}
<br/>
<br/>
<-- PARA COLOCAR HTML NO BLADE -->
{!! "<h1>School Of Net</h1>" !!}