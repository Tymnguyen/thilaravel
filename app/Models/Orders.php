<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model 
{
    protected $table = 'orders';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable =[
        'name',
        'datecreation',
        'status',
        'payments',
        'customerid'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerid');
    }
}





?>