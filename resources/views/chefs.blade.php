<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <form action=""></form>
            <div class="row">
                @foreach ($data2 as $data2)
                        <div class="col-lg-4">
                            <div class="chef-item">
                                <div class="thumb">
                                    <div class="overlay"></div>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <img height="200" width="200" src="chefimages/{{$data2->image}}" alt="Chef's image">
                                </div>
                                <div class="down-content">
                                    <h4>{{$data2->name}}</h4>
                                    <span>{{$data2->description}}</span>
                                </div>
                            </div>
                        </div>
            @endforeach

            </div>
        </div>
    </section>
    
    
</body>
</html>
