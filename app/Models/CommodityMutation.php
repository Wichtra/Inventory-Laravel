<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityMutation extends Model
{
    use HasFactory;

    protected $table = 'commodity_mutation';

    protected $fillable = [
        'commodity_id',
        'from_warehouse_id',
        'to_warehouse_id',
        'quantity',
        'mutation_date',
    ];

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function fromWarehouse()
    {
        return $this->belongsTo(Warehouse::class, 'from_warehouse_id');
    }

    public function toWarehouse()
    {
        return $this->belongsTo(Warehouse::class, 'to_warehouse_id');
    }
}
