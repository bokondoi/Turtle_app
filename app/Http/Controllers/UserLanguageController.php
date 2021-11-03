<?php

namespace App\Http\Controllers;
use App\Models\user_language;

use Illuminate\Http\Request;

class UserLanguageController extends Controller
{
  public function index(){
      return user_language::all();
  }

  public function addLanguage(){
    return user_language::create([
        'name'=>request('name'),
        'user_id'=>request('user_id')
    ]);
  }

  public function updateLanguage(user_language $user_language){
    $user_language-> update([
        'name'=>request('name'),
        'user_id'=>request('user_id')
    ]);
}

    public function deleteLanguage(user_language $user_language){
        $user_language->delete();
    }

    public function getLanguage(user_language $user_language){

        return $user_language;
        
       

        
      }
  
}
