<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait PartFilter
{
    public function scopeFilter(Builder $query)
    {
        $query

            // brand 
            ->when(request()->has('brand_id'), function ($q) {
                $q->whereHas('car.series.brand', function ($query) {
                    $query->where('id', request()->get('brand_id'));
                });
            })

            // series 
            ->when(request()->has('series_id'), function ($q) {
                $q->whereHas('car.series', function ($query) {
                    $query->where('id', request()->get('series_id'));
                });
            })

            // category 
            ->when(request()->has('category_id'), function ($q) {
                $q->where('category_id', request()->get('category_id'));
            })

            // code
            ->when(request()->has('code'), function ($q) {
                if (!empty(request()->get('code'))) {
                    $q->where('code', 'like', '%' . request()->get('code') . '%');
                }
            })

            // name
            ->when(request()->has('part_name'), function ($q) {
                if (!empty(request()->get('part_name'))) {
                    $q->where('name', 'like', '%' . request()->get('part_name') . '%');
                }
            })

            // Min
            ->when(request()->has('min'), function ($q) {
                $min = request()->get('min');
                $q->where('price', '>=', $min);
            })
            // Max
            ->when(request()->has('max'), function ($q) {
                $max = request()->get('max');
                $q->where('price', '<=', $max);
            })
            ->latest();
    }
}
