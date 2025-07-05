<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home() {
        // echo '<h1> home </h1>';
        return view('SiteOne.home');
    }
 function services() {
        return view('SiteOne.services');
    }

    function portfolio() {
        return view('SiteOne.portfolio');
    }

    function about() {
        // echo '<h1> about </h1>';
    return view('SiteOne.about');

    }

    function contact() {
        // echo '<h1> contact </h1>';
     return view('SiteOne.contact');

    }

    function msg($id){
        // return $id;
        // return view('SiteOne.msg')->with('id',$id);
         //توجه الاكشن على  الكنترولر

         //     $data = [1,2,3];
    //     //key , value
    //     $dataone=[
    //         '0'=>5,
    //         '1'=>4
    // ];
        //  return view ('SiteOne.msg',[
        //     'id'=>$id
        //  ]);

         return view('SiteOne.msg',compact('id'));
         }

          function postcontact(Request $requset) {
            // return 'hello';
            dd($requset);
            dd($requset->all());
    }
}
