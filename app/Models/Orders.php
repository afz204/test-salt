<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'userId',
        'orderNo',
        'vat_type',
        'vat',
        'vat_value',
        'total',
        'states',
        'paidAt',
    ];

    public function details()
    {
        return $this->hasMany('App\Models\OrderDetails', 'orderId', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
