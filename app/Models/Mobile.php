<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model 
{
    protected $table = 'mobile';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable =[
        'name',
        'price',
        'quantity',
        'status',
        'photo',
        'created',
        'description'
    ];
}





?>