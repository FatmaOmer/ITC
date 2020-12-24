<?php

namespace App\Http\Controllers\First;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __Constructor()
    {
       // $this->middleware('auth')->except("showstring1");
    }

    public function showstring0()
    {
        return "basme allah";
    }
    public function showstring1()
    {
        return "alhamed  allah";
    }
    public function showstring2()
    {
        return "la elah al  allah";
    }
    public function showstring3()
    {
        return "basme allah wa allah akaber";
    }
    public function getindex()
    {
      /*  $data =[];
        $data['id']=5;
        $data['name'] =' fatma omer ';*/
        $obj=new\stdClass();
        $obj->name = 'ahmed';
        $obj->id=5;
        $obj->gender='male';
          $data=['fatma','omer'];
        return view('welcome',compact('data'));

    }
}
