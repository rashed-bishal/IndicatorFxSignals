<div class="col-md-12 col-lg-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i>
        @include('includes.plans_pricing.icons.dice-'.$pack)
    </span>
    <h6 class="text-uppercase text-center text-muted" style="text-align: center;">{{$title}}</h6>
    <h4 class="display-6 fw-bold text-center" data-aos="zoom-in" data-aos-once="true" style="text-align: left;">${{$price}}</h4>
    <hr>
    <ul class="list-unstyled">
        @include('includes.plans_pricing.packages.'.$pack.'keys')
    </ul>
    <div style="margin-bottom: 20%;"><a class="btn btn-sm animated-button victoria-one" href="{{$href}}" style="border-color: #ff6600;width: 200px;">Discover</a></div>
</div>
