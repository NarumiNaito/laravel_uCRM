<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
use App\Models\Item;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'status',
        ];

        public function customer()
        {
            return $this->belongsTo(Customers::class);
        }

        public function items(){
        return $this->belongsToMany(Item::class)
        ->withPivot('quantity'); }

}
