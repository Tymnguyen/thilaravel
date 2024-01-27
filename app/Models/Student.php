<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
    protected $table = 'student';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable =[
        'full_name',
        'address',
        'gender',
        'dob',
        'score',
        
    ];
}





?>