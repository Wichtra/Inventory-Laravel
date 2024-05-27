<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityOut extends Model
{
    use HasFactory;

    protected $table = 'commodity_out';

    protected $fillable = [
        'commodity_id',
        'quantity',
        'issued_date',
        'warehouse_id',
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
