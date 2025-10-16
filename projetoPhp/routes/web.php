<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    // Retorna o formulário (view)
    return view('voz');
});


Route::get('/voz', function (Request $request) {
    $text = trim($request->input('voz', ''));
    if (!$text) {
        return back()->with('erro', 'Digite um texto antes!');
    }

    $apiKey = '2c19e0b6eb6342a996086d23ba949598';
    $url = 'https://api.voicerss.org/';
    $params = [
        'key' => $apiKey,
        'hl' => 'pt-br',
        'src' => $text,
        'r' => '0',
        'c' => 'mp3',
        'f' => '44khz_16bit_stereo'
    ];

    $query = http_build_query($params);
    $response = file_get_contents($url . '?' . $query);

    if (strpos($response, 'ERROR') === 0) {
        return 'Erro da API VoiceRSS: ' . $response;
    }

    // salva o áudio em storage/app/public/
    $audioPath = storage_path('app/public/voz.mp3');
    file_put_contents($audioPath, $response);

    // gera a URL pública
    $audioUrl = asset('storage/voz.mp3');

    return view('voz', ['audioUrl' => $audioUrl, 'texto' => $text]);
});

