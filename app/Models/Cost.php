<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Cost extends Model
{
    protected $fillable = ['product_id', 'cost_value', 'date'];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
?>
