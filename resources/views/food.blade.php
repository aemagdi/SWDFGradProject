<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our </h6>
                        <h2>Our selection of meals with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                @foreach ($data as $data)
                <form action="{{url('/addtocart', $data->id)}}" method="POST">
                    @csrf
                <div class="item">
                                    <div style="background-image: url('/foodimages/{{$data->image}}');" class='card'>
                                        <div class="price"><h6>${{$data->price}}</h6></div>
                                        <div class='info'>
                                        <h1 class='title'>{{$data->title}}</h1>
                                        <p class='description'>{{$data->description}}</p>
                                        <div class="main-text-button">
                                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                        </div>
                                        </div>
                                     </div>
                                     <div style="display: flex">
                                        <input type="number" name="quantity" max="30" min="1" value="1" class="form-control" style="border:#fb5849 2px solid;border-radius:8px;width:130px;margin-right:10px"> 
                                        <input type="submit" value="Add to cart" style="background-color:white;border:2px solid #fb5849; color:#fb5849;font-weight:bold; font-size:14px; width:100px; height:40px;border-radius:8px;">
                                     </div>
                                     
                </div>
                </form>
                @endforeach

    
                   
    
                      </div>
            </div>
        </div>
    </section>
    
    
</body>
</html>
