<!-- product-list.blade.php -->

@foreach ($results as $product)
    <div class="col-lg-4 col-md-6 col-12">
        <div class="single-product">
            <div class="product-image">
                @php
                    $images = $product->image;
                    $images = explode(",", $images);
                @endphp
                <img src="{{ asset("storage/".$images[0]) }}" alt="Product Image">
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
                <span class="category">{{ $product->category->name }}</span>
                <h4 class="title">
                    <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                </h4>
                <ul class="review">
                    <span>{{ $product->rate }}</span>
                    <li><i class="lni lni-star-filled"></i></li>
                    <span>Stars</span>
                </ul>
                <div class="price">
                    <span>AED {{ $product->price }}</span>
                    @if($product->old_price)
                        <span class="discount-price">AED {{ $product->old_price }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
