<nav class="navbar navbar-expand-lg" style="background-color: black";>
<div class="container">
                    <a class="navbar-brand" href="/"><strong style='color:orange';style>DCS</strong><strong style='color:white';style>Sports</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-4 ">
                    <li class="nav-item">                    
                         <a class="nav-link {{Request :: path() == '/home'?'active' : '';}} " aria-current="page" href="/" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{Request :: path() == 'shop'?'active' : '';}}" href="/shop"  style="color: white;">Shop</a>
                     </li>
                    <li class="nav-item">
                     <a class="nav-link {{Request :: path() == 'contact'?'active' : '';}}" href="/contact"  style="color: white;">contact us</a>
                     </li>
                     
                     </ul>
                     <div class="d-flex gap-4 align-items-center">
                   <a href="admin"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login </button></a>
                    <div class="notif">
                    <a href="/transaksi" class="fs-5 nav-link {{ Request::path() == 'transaksi' ? 'active' : '' }}">
                    <i class="fa-solid icon-nav fa-bag-shopping"></i>
                    <div class="circle">10</div>
                    </a>
                            <div class="circle"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="notif">
                        <a href="/checkout" class="fs-5 nav-link {{ Request::path() == 'checkOut' ? 'active' : '' }}">
                            <i class="fa fa-cash-register" style="color:orange"></i>
                        </a>
                    </div>
                </li>
                 </div>
          </div>
    </div>
 </nav>
 <script>
    $(".text-links").click(function(e) {
        e.preventDefault();
        var $linksLogin = $("#links-login");
        if ($linksLogin.hasClass("activeLogin")) {
            $linksLogin.removeClass("activeLogin");
        } else {
            $linksLogin.addClass("activeLogin");
        }
    });
</script>
 </nav>