<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tx extends Model
{
    use HasFactory;
    protected $fillable = [
        'code'
    ];
    public function monitoring()
    {
        return $this->hasOne(Monitoring::class, 'id');
    }
}
