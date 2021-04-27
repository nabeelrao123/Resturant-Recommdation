<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resturant extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $fillable = ['resturname','category','location'];
 
 //$resturant = resturant::create([
  //  'resturname' => '',
    //'catergory'=>'',
  //  'location'=>''
//]);
}
