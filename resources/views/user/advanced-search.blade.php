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

    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <form action="{{ route('products.advanced_search') }}" method="GET">
                    <div class="product-sidebar">
                        <div class="single-widget search search-style-5">
                            <h3>Search Product</h3>
                            <div class="search-input">
                                <input class="form-control" type="text" name="name" placeholder="Search Here..." value="{{ request()->input('name')}}">

                            </div>
                        </div>
                        <div class="single-widget">
                            <h3>All Categories</h3>
                            <ul class="list">
                                <li>
                                    <input class="form-check-input" type="radio" name="category_id" value="" >
                                    <a href="#">All Categories</a><span></span>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <input class="form-check-input" type="radio" value="{{ $category->id }}" name="category_id" id="category_{{ $category->id }}" {{ in_array($category->id, (array)request()->input('category_id', [])) ? 'checked' : '' }}>
                                        <a href="/category/{{ $category->id }}">{{ $category->name }}</a><span>({{ $category->getProductCount() }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-widget search">
                            <h3 class="d-flex">Filter by Price</h3>
                                <input class="form-control" type="text" name="min_price" placeholder="Min Price" value="{{ request()->input('min_price') }}">
                                <input class="form-control" type="text" name="max_price" placeholder="Max Price" value="{{ request()->input('max_price') }}">
                        </div>
                        <div class="single-widget">
                            <h3>All Brands</h3>
                            <ul class="list">
                                <li>
                                    <input class="form-check-input" type="radio" name="brand_id" value="" >
                                    <a href="#">All Brands</a><span></span>
                                </li>
                                @foreach ($brands as $brand)
                                    <li>
                                        <input class="form-check-input" type="radio" value="{{ $brand->id }}" name="brand_id" id="brand_{{ $brand->id }}" {{ in_array($brand->id, (array)request()->input('brand_id', [])) ? 'checked' : '' }}>
                                        <a href="/brand/{{ $brand->id }}">{{ $brand->name }}</a><span>({{ $brand->getProductCount() }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                            <button class="brn btn-primary p-2" type="submit">Search</button>
                    </div>
                </form>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="product-grids-head">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                                <div class="row">
                                    @foreach ($results as $product)
                                        <div class="col-lg-4 col-md-6 col-12" style="display: flex; flex-direction: column; margin-bottom: 20px;">
                                            <!-- Start Single Product -->
                                            <div class="single-product p-0 m-0 mt-0 pt-0" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
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
                        </div>
                    </div>
                </div>
            </div>

                    <div class="d-flex justify-content-center mb-4 mt-4">
                <ul class="d-flex justify-content-center">
                    <!-- First Page Link -->
                    <li class="page-item {{ $results->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $results->url(1) }}" aria-label="First">
                            <span aria-hidden="true">&laquo;&laquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>

                    <!-- Previous Page Link -->
                    <li class="page-item {{ $results->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $results->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>

                    <!-- Pagination Links -->
                    @php
                    $totalPages = $results->lastPage();
                    $currentPage = $results->currentPage();
                    $visiblePages = 5; // Number of visible pages (adjust as needed)
                    $halfVisible = floor($visiblePages / 2);
                    $startPage = max(min($currentPage - $halfVisible, $totalPages - $visiblePages + 1), 1);
                    $endPage = min($startPage + $visiblePages - 1, $totalPages);
                    @endphp

                    @for ($page = $startPage; $page <= $endPage; $page++)
                        <li class="page-item {{ $page == $results->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $results->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    <!-- Next Page Link -->
                    <li class="page-item {{ $results->currentPage() == $results->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $results->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>

                    <!-- Last Page Link -->
                    <li class="page-item {{ $results->currentPage() == $results->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $results->url($results->lastPage()) }}" aria-label="Last">
                            <span aria-hidden="true">&raquo;&raquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>
                </ul>
        </div>

    <!-- Page x of y -->
    <div class="d-flex justify-content-center mb-4 mt-4">
        <p>Page {{ $results->currentPage() }} of {{ $results->lastPage() }}</p>
    </div>
        </div>
    </section>



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
