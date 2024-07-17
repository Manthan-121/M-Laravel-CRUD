<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function pgShow(){
        $sel = DB::table('_users_')->get();
        return view('welcome',['data'=>$sel]);
    }

    public function pgAdd(){
        return view('insert');
    }
    
    public function pgEdit(string $id = NULL){
        if($id != NULL){
            $sel = DB::table('_users_')->where('id','=',$id)->get();
            return view('edit',['data'=>$sel]);
        }else{
            return redirect()->route('home');
        }
    }

    public function infoAdd(Request $data){
        $ins = DB::table('_users_')->insert([
            'name' => $data->txtName,
            'email' => $data->txtEmail,
            'mobile_no' => $data->txtMobile,
            'city' => $data->txtCity,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('home');
    }

    public function infoUpdate(Request $data){
        $ins = DB::table('_users_')
                    ->where('id',$data->hdnId)
                    ->update([
            'name' => $data->txtName,
            'email' => $data->txtEmail,
            'mobile_no' => $data->txtMobile,
            'city' => $data->txtCity,
            'updated_at' => now()
        ]);
        return redirect()->route('home');
    }
    
    public function infoDelete(string $id = NULL){
        if($id != NULL){
            $sel = DB::table('_users_')->where('id','=',$id)->delete();
            return redirect()->route('home');
        }else{
            return redirect()->route('home');
        }
    }
}
