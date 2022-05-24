<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class MaintextController extends Controller
{
    public function getIndex(Maintext $maintext){
        return view('maintext', compact('maintext'));
    }
    public function postIndex(){
    $maintext = new Maintext;
    $maintext->name = 'Контакты';
    $maintext->body = 'Текст для контактов';
    $maintext->url = 'contacts';
    $maintext->lang = 'ru';
    $maintext->save();
    return response()->json($maintext);
    }
    public function getUrl($url) {
        $maintext = Maintext::where('url',$url)->first();
        return view('maintext', compact('maintext'));

    }
}
