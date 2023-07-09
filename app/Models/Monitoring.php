<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'tx_id',
        'frequensi',
        'mode',
        'fwd_power',
        'vswr',
        'line_in',
        'mod_depth',
        'offset',
        'step'
    ];
    public function tx()
    {
        return $this->hasOne(Tx::class, 'id');
    }
}
