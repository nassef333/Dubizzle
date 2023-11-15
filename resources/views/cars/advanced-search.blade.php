<x-main-layout>
    <div x-data="search">

        {{--  Banner  --}}
        <div class="dlab-bnr-inr style-1 overlay-black-middle"
            style="background-image: url(/assets/images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Search </h1>
                    <div class="dlab-separator"></div>
                </div>
            </div>
        </div>
        {{-- End Banner  --}}

        <section class="content-inner-2">
            <div class="container">

                <div class="row">
                    {{--  Filters --}}
                    <x-cars.filter />
                    {{-- End Filters --}}

                    <div class="col-xl-8 col-lg-8">

                        <x-cars.sort />

                        {{-- Results --}}
                        <div class="row lightgallery">
                            {{-- Car Card --}}
                            <template x-for="car in cars">
                                <div class="col-12 m-b30">
                                    <div class="car-list-box list-view">
                                        <div class="media-box">
                                            <img :src="car.media[0].original_url" alt=""
                                                x-show="car.media.length > 0" style="object-fit: cover">

                                            <img x-show="car.media.length == 0"
                                                src="/assets/images/product/grid/pic1.jpg" alt="">
                                        </div>
                                        <div class="list-info">
                                            <h4 class="title mb-0"><a :href="'/cars/' + car.id + '/details'"
                                                    x-text="car.car_name"></a>
                                            </h4>
                                            <div class="car-type" style="text-transform: uppercase;"
                                                x-text="car.car_type">
                                            </div>
                                            <span class="badge m-b30" x-text="'$' + car.price"> </span>
                                            <div class="feature-list">
                                                <div>
                                                    <label>Gear Box</label>
                                                    <p class="value" x-text="car.gearbox"> </p>
                                                </div>
                                                <div>
                                                    <label>Fuel</label>
                                                    <p class="value" x-text="car.fuel_type"> </p>
                                                </div>
                                                <div>
                                                    <label>Passenger</label>
                                                    <p class="value" x-text="car.no_passengers"> Person</p>
                                                </div>

                                                <div x-show="car.status == 'used' || car.status == 'zero'">
                                                    <label>Mileage</label>
                                                    <p class="value" x-text="car.mileage"> </p>
                                                </div>
                                                <div x-show="car.status == 'new'">
                                                    <label style="color: blue;">New</label>
                                                </div>
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
                        {{-- End Pagination --}}

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
                    </div>

                </div>
            </div>
        </section>
    </div>
</x-main-layout>
