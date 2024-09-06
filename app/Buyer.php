<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{
    //
    public fucnction Transactions()
    {
        return $this->hasMany(Transaction::class);
        }
    }
