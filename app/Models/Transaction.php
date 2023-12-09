<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'address',
        'shipping_price',
        'total_price',
        'payment',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function items(){
        return $this->hasMany(TransactionItem::class, 'transactions_id', 'id');}
}
