<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('user.static.head')
<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('user.static.header')


    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ $brand->name }}</h2>
                        <p>{{ $brand->description }}</p>
                        <h5 class="text-center mt-5">Total Products: {{ $products->total() }}</p>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; flex-wrap: wrap;">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12" style="display: flex; flex-direction: column; margin-bottom: 20px;">
                    <!-- Start Single Product -->
                        <div class="single-product" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
                        <div class="product-image">
                        @php
                            $images = $product->image;
                            $images = explode(",", $images);
                        @endphp
                            <img src="{{ asset("storage/".$images[0])}}" alt="Product Image">
                            @if($product->old_price)
                                <span class="sale-tag">
                                    @php
                                        $discountPercentage = 100 - (($product->price / $product->old_price) * 100);
                                        echo number_format($discountPercentage, 2).'%';
                                    @endphp
                                </span>
                            @endif
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$product->category->name}}</span>
                            <h4 class="title">
                                <a href="/product/{{$product->id}}" >{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                                <span>{{$product->rate}}</span>
                                <li><i class="lni lni-star-filled"></i></li>
                                <span>Stars</span>
                            </ul>
                            <div class="price">
                                <span>AED {{$product->price}}</span>
                                @if($product->old_price)
                                    <span class="discount-price">AED {{$product->old_price}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            @endforeach
            </div>
        </div>
    </section>


    <!-- End Trending Product Area -->

        <div class="d-flex justify-content-center mb-4 mt-4">
                <ul class="d-flex justify-content-center">
                    <!-- First Page Link -->
                    <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $products->url(1) }}" aria-label="First">
                            <span aria-hidden="true">&laquo;&laquo;</span>
                            <span class="sr-only">First</span>
                        </a>
                    </li>

                    <!-- Previous Page Link -->
                    <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <!-- Pagination Links -->
                    @php
                    $totalPages = $products->lastPage();
                    $currentPage = $products->currentPage();
                    $visiblePages = 5; // Number of visible pages (adjust as needed)
                    $halfVisible = floor($visiblePages / 2);
                    $startPage = max(min($currentPage - $halfVisible, $totalPages - $visiblePages + 1), 1);
                    $endPage = min($startPage + $visiblePages - 1, $totalPages);
                    @endphp

                    @for ($page = $startPage; $page <= $endPage; $page++)
                        <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $products->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    <!-- Next Page Link -->
                    <li class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>

                    <!-- Last Page Link -->
                    <li class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $products->url($products->lastPage()) }}" aria-label="Last">
                            <span aria-hidden="true">&raquo;&raquo;</span>
                            <span class="sr-only">Last</span>
                        </a>
                    </li>
                </ul>
        </div>

    <!-- Page x of y -->
    <div class="d-flex justify-content-center mb-4 mt-4">
        <p>Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</p>
    </div>

    @include('user.static.footer')

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/user//js/bootstrap.min.js"></script>
    <script src="/assets/user//js/tiny-slider.js"></script>
    <script src="/assets/user//js/glightbox.min.js"></script>
    <script src="/assets/user//js/main.js"></script>


</body>

</html>
