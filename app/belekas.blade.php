<?php namespace App\Providers;

use Illuminate\Database\Eloquent\Model;

class belekas extends Model {

    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'uzsakymai';
    protected $fillable = array(
        'name',
      'suname',
       // 'email',
   	 'date',
  	 'time',
  	 'tel_nr',
   	 'adresas',
     'user_message'
 );

    public $timestamps = false;

}