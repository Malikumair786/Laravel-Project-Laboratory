<div id="Services" class="gallery-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Services</h2>
                    <p>Comprehensive testing solutions for all your laboratory needs</p>
                </div>
            </div>
        </div>

        <div class="popup-gallery row clearfix">

            @foreach ($service as $services)
            <div class="col-md-3 col-sm-6">
                <div class="box-gallery">
                    <img style="height: 200px" src="serviceImage/{{$services->image}}" alt="">
                    <div class="box-content">
                        <h5 class="title">{{$services->TestName}} -- Rs. {{$services->price}}</h5>
                        <ul class="icon">
                            <li><a href="serviceImage/{{$services->image}}"><i class="fa fa-picture-o"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
