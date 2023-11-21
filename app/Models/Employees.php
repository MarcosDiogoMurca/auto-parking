<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
     /**
     * The table associated with the model.
     */
    protected ?string $table = 'employees';

    /**
     * slots that will be filled in by the system
     */
    protected array $fillable = [
        'name',
        'cpf',
        'pis_nis',
        'gender',
        'role',
        'salary',
        'admission_date'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

}
