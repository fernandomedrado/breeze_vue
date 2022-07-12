<?php

namespace App\Http\Controllers\Stilingue;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Mensagem;

class MensagemController extends Controller
{
    /**
     * Show the detail message
     *
     * @return \Illuminate\View\View
     */
    public function show(Mensagem $objMensagem)
    {
        $mensagem = 'Message Empty.';
        $arrObjMensagem = $objMensagem->find(1);
        $mensagem = $arrObjMensagem->texto;
        return view('stilingue.mensagem', compact('mensagem'));
    }
}
