<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_word;

class UserWordController extends Controller
{
    public function index(){
        return user_word::all();
    }
  
    public function store(){
      return user_word::create([
          'word'=>request('word'),
          'meaning'=>request('meaning'),
          'user_id'=>request('user_id'),
          'language_id'=>request('language_id')
      ]);
    }
  
    public function update(user_word $user_word){
      $user_word-> update([
        'word'=>request('word'),
        'meaning'=>request('meaning'),
        'user_id'=>request('user_id'),
        'language_id'=>request('language_id')
      ]);
  }
  
      public function delete(user_word $user_word){
          $user_word->delete();
      }

      public function getWords($user_word){
        //   $language_id=$user_word->language_id;

        $words = user_word::where('language_id', $user_word)->get(); 
        
        return $words;
      }
}
