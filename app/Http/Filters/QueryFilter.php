<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class QueryFilter
{
    protected $data;
    protected $builder;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->data as $field => $value) {
            $method = Str::camel($field);
            if (method_exists($this, $method)) {
                call_user_func_array([$this, $method], (array)$value);
            }
        }
    }
}
