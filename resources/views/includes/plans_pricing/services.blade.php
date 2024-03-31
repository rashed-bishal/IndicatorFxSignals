<section id="services" style="padding-bottom: 0px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="font-size: 35px;font-family: Montserrat, sans-serif;">Plan &amp; Pricing</h2>
                <p class="text-center" style="font-size: 20px;">Get 1 month Free at Sign Up</p>
            </div>
        </div>
        <div class="row text-center">
            <x-plans_pricing.package :pack='"pack1"' :title='"premium 1 month"' :price='"40.00"' :href='"#"' />
            <x-plans_pricing.package :pack='"pack2"' :title='"premium 3 months"' :price='"90.00"' :href='"#"'/>
            <x-plans_pricing.package :pack='"pack3"' :title='"premium 6 months"' :price='"150.00"' :href='"#"'/>
        </div>
    </div>
</section>
