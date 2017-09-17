<?php namespace  App\Http\Controllers;



use Illuminate\Database\Eloquent\Model;
use App\Providers\belekas;


class NaujasKlientas extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     *
     */
public function index (){

    $user = new belekas;
    $user-> name = $_POST['name'];
    $user-> surname = $_POST['surname'];
    // $user-> email = 'email';
    $user-> date = $_POST['date'];
    $user-> time = $_POST['time'];
    $user-> tel_nr= $_POST['tel_nr'];
    $user-> adresas= $_POST['adresas'];
    $user-> user_message= $_POST['user_message'];
    $user->save();
	}


}