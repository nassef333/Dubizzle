<div class="col-xl-4 col-lg-4 m-b30">
    <aside class="side-bar sticky-top left">
        <div class="section-head">
            <h4 class="title">ADVANCED SEARCH</h4>
            <div class="dlab-separator style-1 text-primary mb-0"></div>
        </div>
        <div>
            <div class="widget widget_search">
                {{-- Brand --}}
                <div class="form-group m-b20">
                    <select class="form-control" x-model="filters.brand_id">
                        <option>Choose Brand</option>
                        <template x-for="brand in brands">
                            <option :value="brand.id" x-text="brand.name" :selected="brand.id == filters.brand_id">
                            </option>
                        </template>
                    </select>
                </div>
                {{-- End Brand --}}

                {{-- Series --}}
                <div class="form-group">
                    <select class="form-control" x-model="filters.series_id">
                        <option>Choose Series</option>
                        <template x-for="serie in series">
                            <option :value="serie.id" x-text="serie.name"
                                :selected="serie.id == filters.series_id"></option>
                        </template>
                    </select>
                </div>
                {{-- End Series --}}

                {{-- Class --}}
                <div class="form-group">
                    <select class="form-control" x-model="filters.class" style="margin: 1rem auto">
                        <option>Choose Class</option>
                        @for ($i = 2024; $i > 1900; $i--)
                            <option value="{{ $i }}" :selected="{{ $i }} == filters.class">
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>
                {{-- End Class --}}
            </div>

            {{-- Price --}}
            <div class="widget widget_price_range">
                <h5>Price range</h5>
                <div class="input-group">
                    <div>
                        <label for="min">Min</label>
                        <input type="number" name="min" value="0" id="min" class="form-control"
                            x-model.debounce.1000ms="filters.min">
                    </div>

                    <div>
                        <label for="max">Max</label>
                        <input type="number" name="max" value="0" id="max" class="form-control"
                            x-model.debounce.1000ms="filters.max">
                    </div>
                </div>
            </div>
            {{-- End Price --}}


            <div class="widget">
                {{-- Fuel Type --}}
                <div class="form-group m-b20">
                    <h5>Fuel Type</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="gasoline" x-model="filters.fuel_type"
                            id="gasoline">
                        <label class="form-check-label" for="gasoline">
                            gasoline
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="electric" x-model="filters.fuel_type"
                            id="electric">
                        <label class="form-check-label" for="electric">
                            electric
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="diesel" x-model="filters.fuel_type"
                            id="diesel">
                        <label class="form-check-label" for="diesel">
                            diesel
                        </label>
                    </div>
                </div>
                {{-- End Fuel Type --}}

                {{-- Gear Box --}}
                <div class="form-group m-b20">
                    <h5>Gear Box</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="automatic" x-model="filters.gear_box"
                            id="automatic">
                        <label class="form-check-label" for="automatic">
                            automatic
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="manual" x-model="filters.gear_box"
                            id="manual">
                        <label class="form-check-label" for="manual">
                            manual
                        </label>
                    </div>
                </div>
                {{-- End Gear Box --}}

                {{-- Gear Box --}}
                <div class="form-group m-b20">
                    <h5>Car Status</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="new" x-model="filters.status"
                            id="new">
                        <label class="form-check-label" for="new">
                            new
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="used" x-model="filters.status"
                            id="used">
                        <label class="form-check-label" for="used">
                            used
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="zero" x-model="filters.status"
                            id="zero">
                        <label class="form-check-label" for="zero">
                            zero
                        </label>
                    </div>
                </div>
                {{-- End Gear Box --}}
            </div>
        </div>
    </aside>
</div>
