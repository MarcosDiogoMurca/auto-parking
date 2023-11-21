<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
      /**
     * The table associated with the model.
     */
    protected ?string $table = 'prices';

    /**
     * slots that will be filled in by the system
     */
    protected array $fillable = [
        'description',
        'prices'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

    public function cars(): BelongsTo
    {
        return $this->belongsTo(Cars::class, 'prices_id', 'id');
    }
}
