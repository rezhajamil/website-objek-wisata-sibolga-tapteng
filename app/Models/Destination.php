<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'region',
        'description',
        'address',
        'maps_url',
    ];

    public function destType()
    {
        return $this->belongsTo(DestinationType::class, 'type');
    }
}
