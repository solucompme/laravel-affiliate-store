<div class="col-md-12 text-center">
    <h1 style="margin: 15px 0;">Products</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($products as $product)
                <div class="card col-md-3 col-sm-4 text-center product" style="margin-bottom: 20px;">
                    <a href="variable-product-page.html">
                        <img src="{{asset('images/products/'.$product->main_image)}}" alt="product image" style="width:100%"/>
                    </a>
                    <section>
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text" style="margin:0;">{{$product->price}}</p>
                        <a href="{{$product->link}}" style="color:#606060;"><i class="fa fa-shopping-cart"></i> Shop Now</a>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="clearfix"></div>