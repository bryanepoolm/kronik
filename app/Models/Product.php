<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_key',
        'name',
        'description',
        'credit_type',
        'interest_rate',
        'min_term',
        'max_term',
        'min_amount',
        'max_amount',
        'special_conditions',
        'is_active',
    ];

    /**
     * Cast attributes to native types.
     *
     * @var array
     */
    protected $casts = [
        'interest_rate' => 'float',
        'min_term' => 'integer',
        'max_term' => 'integer',
        'min_amount' => 'float',
        'max_amount' => 'float',
        'is_active' => 'boolean',
    ];

    /**
     * Scope for active products.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
