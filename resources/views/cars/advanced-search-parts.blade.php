<x-main-layout>

    <div x-data="searchParts">

        {{--  Banner  --}}
        <div class="dlab-bnr-inr style-1 overlay-black-middle"
            style="background-image: url(/assets/images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Parts Search Result</h1>
                    <div class="dlab-separator"></div>
                </div>
            </div>
        </div>
        {{-- End Banner  --}}

        <section class="content-inner-2">
            <div class="container">

                <div class="alert alert-success col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" style="text-align: center"
                    x-show="success == true">
                    <p x-text="success_message"style="text-align: center"></p>
                </div>

                <div class="row">
                    {{--  Filters --}}
                    <x-cars.part-filter />
                    {{-- End Filters --}}

                    {{-- Results --}}
                    <div class="col-xl-8 col-lg-8" x-show="parts.length > 0">
                        <x-cars.sort />

                        {{-- Results --}}
                        <div class="row lightgallery">
                            {{-- Car Card --}}
                            <template x-for="part in parts">
                                <div class="col-12 m-b30">
                                    <div class="car-list-box list-view">
                                        <div class="media-box">
                                            <img :src="part.media.length > 0 ? part.media[0].original_url : ''"
                                                alt="" x-show="part.media.length > 0" style="object-fit: cover">

                                            <img x-show="part.media.length == 0"
                                                src="/assets/images/product/grid/pic1.jpg" alt="">

                                        </div>
                                        <div class="list-info">
                                            <h4 class="title mb-0"><a class="text-primary" :href="'/cars/parts/' + part.id + '/details'"
                                                    x-text="part.name"></a>
                                            </h4>
                                            <div class="car-type" style="text-transform: uppercase;"
                                                x-text="part.car_type">
                                            </div>
                                            <span class="badge m-b30" x-text="'$' + part.price"> </span>
                                            <div class="feature-list">
                                                <div>
                                                    <label>Warranty</label>
                                                    <p class="value" x-text="part.warranty"> </p>
                                                </div>
                                                <div>
                                                    <label>sale price</label>
                                                    <p class="value" x-text="part.sale_price"> </p>
                                                </div>
                                                <div>
                                                    <label>sale amount</label>
                                                    <p class="value" x-text="part.sale_amount"> Person</p>
                                                </div>
                                                <div>
                                                    <label>In Stock</label>
                                                    <p class="value" x-text="part.count"> Person</p>
                                                </div>

                                                {{-- <div x-show="part.status == 'used' || part.status == 'zero'">
                                                    <label>Mileage</label>
                                                    <p class="value" x-text="part.mileage"> </p>
                                                </div>
                                                <div x-show="part.status == 'new'">
                                                    <label style="color: blue;">New</label>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            {{-- End Car Card --}}

                        </div>
                        {{-- End Results --}}


                        {{-- Pagination --}}
                        <div class="pagination-container mt-2 mb-2 d-flex justify-content-center align-items-center">
                            <template x-for="(link, index) in links" :key="index">
                                <template x-if="index !== 0 && index !== links.length - 1">
                                    <a x-text="link.label" class="pagination-link p-2 px-4 mb-2 border"
                                        :class="{ 'active': page == link.label, 'inactive': page != link.label }"
                                        @click.prevent="getPage(link.url)">
                                    </a>
                                </template>
                            </template>
                        </div>
                        <style>
                            .pagination-container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                cursor: pointer;
                            }

                            .pagination-link {
                                text-decoration: none;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                margin-right: 5px;
                                color: #333;
                                transition: all 0.3s ease;
                            }

                            .pagination-link.active {
                                background-color: #0400ff;
                                color: #fff;
                                border-color: #0400ff;
                            }

                            .pagination-link:hover {
                                background-color: #f0f0f0;
                            }

                            .pagination-link.active:hover {
                                background-color: #0400ff;
                                color: #fff;
                            }

                        </style>
                        {{-- End Pagination --}}

                    </div>
                    {{-- End Results --}}

                    {{-- Request Form --}}
                    @if (auth()->check())
                        <form class="col-xl-8 col-lg-8" @submit.prevent="SubmitMissingPart" x-show="parts.length == 0"
                            x-clock>

                            <div class="section-head">
                                <h4 class="title">Opps!! We can't find this part, Request new part</h4>
                                <div class="dlab-separator style-1 text-primary mb-0"></div>
                            </div>

                            {{-- Name --}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    x-model="part_name">
                                <div class="text-danger" x-show="errors['name']">
                                    <p x-text="errors['name'][0]"></p>
                                </div>
                            </div>
                            {{-- End Name --}}

                            {{-- Message --}}
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" x-model="message"></textarea>
                                <div class="text-danger" x-show="errors['message']">
                                    <p x-text="errors['message'][0]"></p>
                                </div>
                            </div>
                            {{-- End Message --}}

                            {{-- Cover --}}
                            <div class="form-group">
                                <label for="cover">Image</label>
                                <input type="file" class="form-control" id="cover" name="cover" rows="3"
                                    @change="selectedPhoto">

                                <div class="text-danger" x-show="errors['cover']">
                                    <p x-text="errors['cover'][0]"></p>
                                </div>


                            </div>
                            {{-- End Cover --}}

                            <button class="btn btn-primary " style="margin-top: 1rem" type="submit">Submit</button>
                        </form>
                    @else
                        <div x-show="(parts.length == 0) && ({{ auth()->check() == false }})" class="col-xl-8 col-lg-8"
                            style="display: block; height:100%; margin:auto auto">
                            <a href="{{ route('login') }}" class="btn btn-primary "
                                style="display:block; margin:auto auto">Login pls to request
                                new
                                part</a>
                        </div>
                    @endif

                    {{-- End Request Form --}}

                </div>
            </div>
        </section>
    </div>
</x-main-layout>
