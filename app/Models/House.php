<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = 'houses';

    protected $fillable = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];


    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        $filter->apply( $builder );
    }
}
