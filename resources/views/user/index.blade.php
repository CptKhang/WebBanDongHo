@extends ('layouts.user')
@section ('Content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    @foreach($categories as $cate)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               
                                <h4 class="panel-title"><a href="">{{$cate->name}}</a></h4>
                                
                            </div>
                        </div>
                    @endforeach
                    </div><!--/category-products-->
                
                    <div class="brands_products"><!--brands_products-->
                        <h2>Products</h2>
                        @foreach($products as $prod)
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right"></span>{{$prod->name}}</a></li>
                               
                            </ul>
                        </div>
                        @endforeach
                    </div><!--/brands_products-->
                    
                   
                    
                  
                </div>
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    @foreach ($products as $prod)

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                     <div class="single-products"> 
                       
                                    <div class="productinfo text-center">
                                        <img src="{{Vite::asset('public/product/images/'.$prod->image)}}" alt="" />
                                        <h2>{{$prod->price}}</h2>
                                        <p>{{$prod->name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$prod->price}}</h2>
                                            <p>{{$prod->name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    
                            </div>
                           
                            
                        </div>  
                    </div>
                    @endforeach 
                </div><!--features_items-->
               
                
              
            </div>
        </div>
    </div>
</section>
@endsection
