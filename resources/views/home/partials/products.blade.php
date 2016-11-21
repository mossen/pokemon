@if(isset($products))
    <div class="col-lg-12 products" >
        <hr>
        <h3>Products:</h3>
        @foreach($products as $product)
            <div class="col-sm-4 text-center product">
                <div class="panel panel-default">
                    <img src="{{ $product->imageURL }}" alt="">
                    <p class="title">Product ID:</p>
                    <p>{{ $product->productID }}</p>
                    <p class="title">Name:</p>
                    <p class="name">{{ $product->name }}</p>
                    <p class="title">Price:</p>
                    <p>{{ $product->currency }}{{ $product->price }}</p>
                    <p class="title">Category:</p>

                    @foreach($product->categories as $category)
                        <p>{{ $category->category }}</p>
                    @endforeach

                    <p class="title">Description:</p>
                    <p class="description">{{ $product->description }}</p>

                    <a class="btn btn-default border" target="_blank" href="{{ $product->productURL }}">View More</a>
                </div>
            </div>
        @endforeach
    </div>

@else

    <div class="col-lg-12 products" ng-show="products.length" ng-cloak="">
        <hr>
        <h3>Products:</h3>
            <div class="col-sm-4 text-center product" ng-repeat="product in products">
                <div class="panel panel-default">
                    <img ng-src="@{{ product.imageURL }}">
                    <p class="title">Product ID:</p>
                    <p>@{{ product.productID }}</p>
                    <p class="title">Name:</p>
                    <p class="name">@{{ product.name }}</p>
                    <p class="title">Price:</p>
                    <p>@{{ product.currency }}@{{ product.price }}</p>
                    <p class="title">Category:</p>

                    <p>@{{ product.categories.category }}</p>

                    <p class="title">Description:</p>
                    <p class="description">@{{ product.description }}</p>

                    <a class="btn btn-default border" target="_blank" href="@{{ product.productURL }}">View More</a>
                </div>
            </div>
    </div>


@endif