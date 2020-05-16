<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// MVC - Model - View - Controller

// O helper view() recebe o nome de um arquivo e retorna o seu html - por padrão está em resources/views
Route::get('/', function () {
    return view('welcome'); // helper - em laravel, é uma função
});

Route::get('/for-if/{value}', function ($value){
   return view('forIf')
    ->with('value', $value)
    ->with("myArray", [
       "chave1" => "valor1",
       "chave2" => "valor2",
       "chave3" => "valor3",
    ])
    ->with("myArray2", []);
});

Route::get('/cliente/cadastrar', function () {
    $nome = 'Jean';
    return view('cliente.cadastrar', compact('nome'));
        // [
        //'nome' => $nome
        //];
    // O helper view recebe um segundo parâmetro com todos os valores que podem ser usadas pelo view.
    // E para usar na view, apenas usar a variável com o nome do valor.
});

Route::get('/blade', function () {
    $nome = 'Jean';
    $variavel1 = 'valor1';
    return view('test', compact('nome', 'variavel1'));
});

//Route::get('/cliente', function () {
//    // CSRF - Token
//    // Temos que enviar também, o Token
//    $csrfToken = csrf_token();
//
//    // É necessário criar um campo hidden com o name: _token e o value: csrf_token();
//    $html = <<<HTML
//<html>
//    <body>
//    <h1>Cliente</h1>
//        <form action="/cliente/cadastrar" method="post">
//            <input type="hidden" name="_token" value="$csrfToken" >
//            <input type="text" name="name" id="name">
//            <button type="submit">Enviar</button>
//        </form>
//    </body>
//</html>
//HTML;
//    return $html;
//});

// Deve-se passar um $request do tipo Request como parâmetro para pegar as requisições.
// Após isto, é necessário usar o método get() com o name da requisição.
//Route::post('/cliente/cadastrar', function (\Illuminate\Http\Request $request) {
//   echo "Cliente " . $request->get('name'); // Com este get(), é possível pegar tanto POST como GET.
//    // Ou
//   echo "Cliente " . $request->name;
//});

//Route::get('/admin/cliente', function () {
//    return "Admin - Hello World!";
//});
//
//Route::get('/cliente-echo', function () {
//    echo "Texto com echo";
//});
//
//// Passando parâmetros para a rota
//// Neste exemplo, o nome do produto deve ser informado na rota
//// Deve-se passar o parâmetro da rota como parâmetro na função também
//Route::get('/produto/{name}/{id}', function ($name, $id) {
//    return "Produto: $name - Id: $id";
//});
//
//// Passando parâmetros opcionais para a rota
//// Deve-se colocar um "?" após o parâmetro da rota, como no caso do "{id?}"
//// Depois disso também deve-se passar um valor padrão para o parâmetro na function. Ex: $id = "Sem Id"
//Route::get('/fornecedor/{name}/{id?}', function ($name, $id = "Sem Id") {
//        return "Produto: $name - Id: $id";
//});
