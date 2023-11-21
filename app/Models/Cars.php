<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
   /**
     * The table associated with the model.
     */
    protected ?string $table = 'cars';

    /**
     * slots that will be filled in by the system
     */
    protected array $fillable = [
        'type',
        'plate',
        'model',
        'colour',
        'check_in',
        'check_out',
        'is_monthly'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

}
