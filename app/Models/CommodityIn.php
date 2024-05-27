<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityIn extends Model
{
    use HasFactory;

    protected $table = 'commodity_in';

    protected $fillable = [
        'commodity_id',
        'quantity',
        'received_date',
        'warehouse_id'
    ];

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
