<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top" style="font-family: Amiko, sans-serif;color: #ff6600;">INDICATORFXSIGNALS</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #ff6600;"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link {{request()->route()->getName()=="home" ? 'active' : ''}}" data-bss-hover-animate="flash" href="">home</a></li>
                <li class="nav-item"><a class="nav-link {{request()->route()->getName()=="plans" ? "active" : ''}}" data-bss-hover-animate="flash" href="">Plans &amp; pricing</a></li>
                <li class="nav-item"><a class="nav-link {{request()->route()->getName()=="faq" ? 'active' : ''}}" data-bss-hover-animate="flash" href="">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="flash" href="">telegram&nbsp;<i class="fab fa-telegram-plane"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="flash" href="">login</a></li>
            </ul>
        </div>
    </div>
</nav>
