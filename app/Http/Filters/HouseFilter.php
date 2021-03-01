<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class HouseFilter extends QueryFilter
{


    public function name($value) {
        $this->builder->where('name', 'like', "%{$value}%");
    }


    public function price($value) {
        $this->builder->where('price', $value);
    }

    public function bedrooms($value) {
        $this->builder->where('bedrooms', $value);
    }

    public function bathrooms($value) {
        $this->builder->where('bathrooms', $value);
    }

    public function storeys($value) {
        $this->builder->where('storeys', $value);
    }

    public function garages($value) {
        $this->builder->where('garages', $value);
    }

}
