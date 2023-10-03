<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait CarFilter
{
    public function scopeFilter(Builder $query)
    {
        $query

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
