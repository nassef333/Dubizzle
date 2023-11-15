<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait CarFilter
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

            // class 
            ->when(request()->has('class'), function ($q) {
                $q->whereHas('car.series', function ($query) {
                    $query->where('class', request()->get('class'));
                });
            })

            // fuel_type
            ->when(request()->has('fuel_type'), function ($q) {
                if (!empty(request()->get('fuel_type'))) {
                    $q->whereIn('fuel_type', explode(',', request()->get('fuel_type')));
                }
            })
            // gearbox
            ->when(request()->has('gear_box'), function ($q) {
                if (!empty(request()->get('gear_box'))) {
                    $q->whereIn('gearbox', explode(',', request()->get('gear_box')));
                }
            })
            // status
            ->when(request()->has('status'), function ($q) {

                if (!empty(request()->get('status'))) {
                    $status = explode(',', request()->get('status'));
                    $q->whereIn('status', $status);
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
