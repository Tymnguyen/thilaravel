<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{
    protected $table = 'customer';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable =[
        'name',
        'address',
        'birthday',
        'phone'
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'customerid');
    }
}





?>