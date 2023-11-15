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

                {{-- Categories --}}
                <div class="form-group" style="margin: 1rem auto">
                    <select class="form-control" x-model="filters.category_id">
                        <option>Choose Category</option>
                        <template x-for="category in categories">
                            <option :value="category.id" x-text="category.name"></option>
                        </template>
                    </select>
                </div>
                {{-- End Categories --}}
            </div>

            <div class="widget widget_price_range">
                {{-- Code & Name  --}}
                <h5>Search By</h5>
                <div class="input-group">
                    <div>
                        <label for="code">Part Number</label>
                        <input type="text" name="code" id="code" class="form-control"
                            x-model.debounce.1000ms="filters.code">
                    </div>
                    <div>
                        <label for="part_name">Name</label>
                        <input type="text" name="part_name" id="part_name" class="form-control"
                            x-model.debounce.1000ms="filters.part_name">
                    </div>
                </div>
                {{-- End Code & Name --}}
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
        </div>
    </aside>
</div>
