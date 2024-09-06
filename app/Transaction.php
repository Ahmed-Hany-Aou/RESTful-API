<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];
    public function buyer()
    {
        return $this->belongsTO(Buyer::class);
        }
        public function product()
        {
            return $this->belongsTO(Product::class);
            }
}
