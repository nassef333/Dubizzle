<x-main-layout>
    <div x-data="search">

        {{--  Banner  --}}
        <div class="dlab-bnr-inr style-1 overlay-black-middle"
            style="background-image: url(/assets/images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Car Search Result</h1>
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
                                            <img src="/assets/images/product/grid/pic1.jpg" alt="">
                                            <div class="overlay-bx">
                                                <span data-exthumbimage="/assets/images/product/grid/pic1.jpg"
                                                    data-src="/assets/images/product/grid/pic1.jpg"
                                                    class="view-btn lightimg">
                                                    <svg width="75" height="74" viewBox="0 0 75 74"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z"
                                                            fill="white" fill-opacity="0.66" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-info">
                                            <h4 class="title mb-0"><a href="{{ route('cars.car_details') }}"
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
                        <div class="pagination mt-2 mb-2 d-flex flex-wrap justify-content-center align-items-center">
                            <template x-for="(link, index) in links" :key="index">
                                <template x-if="index !== 0 && index !== links.length -1">
                                    <a x-text="link.label" class="p-2 px-4 mb-2 border text-success"
                                        :class="{ 'alert-success': page == link.label, '': page != link.label }"
                                        style="cursor: pointer" @click.prevent="getPage(link.url)">
                                    </a>
                                </template>
                            </template>
                        </div>
                        {{-- End Pagination --}}

                    </div>

                </div>
            </div>
        </section>
    </div>
</x-main-layout>
