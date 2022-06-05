<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="/Zayshop">
            Zay
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Zayshop') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Zayshop/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Zayshop/shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Zayshop/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <div class="cart-icon">
                    <a class="nav-icon position-relative text-decoration-none " href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1 "></i>
                    
                        <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span> -->
                    </a>
                    <div class="cart-hover">
                        <div class="select-items">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                    <td class="si-text">
                                    <div class="product-selected">
                                        <p>₫60.00 x 1</p>
                                        <h6>Kabino Bedside Table</h6>
                                    </div>
                                    </td>
                                    <td class="si-close">
                                        <i class="ti-close"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                    <td class="si-text">
                                        <div class="product-selected">
                                            <p>₫60.00 x 1</p>
                                            <h6>Kabino Bedside Table</h6>                
                                        </div>              
                                    </td>
                                    <td class="si-close">
                                        <i class="ti-close"></i>
                                    </td>
                                </tr>
                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>₫120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card" style="color:green; text-decoration:none; "> <b>VIEW CARD</b> </a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                    </div>
                </div>

                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span> -->
                </a>
               
            </div>
        </div>

    </div>
</nav>
<style>
 
.cart-icon:hover .cart-hover {
	opacity: 1;
	visibility: visible;
	top: 100px;
}
 

.cart-icon {
	color: #252525;
	position: relative;
	display: inline-block;
}
.cart-hover {
	position: absolute;
	right: -70px;
	top: 100px;
	width: 350px;
	background: #ffffff;
	z-index: 99;
	text-align: left;
	padding: 30px;
	opacity: 0;
	visibility: hidden;
	-webkit-box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
	box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.cart-hover .select-items table {
	width: 100%;
}

.cart-hover .select-items table tr td {
	padding-bottom: 20px;
}

.cart-hover .select-items table tr td.si-pic img {
	border: 1px solid #ebebeb;
}

.cart-hover .select-items table tr td.si-text {
	padding-left: 18px;
}

.cart-hover .select-items table tr td.si-text .product-selected p {
	color: #e7ab3c;
	line-height: 30px;
	margin-bottom: 7px;
}

.cart-hover .select-items table tr td.si-text .product-selected h6 {
	color: #232530;
}

.cart-hover .select-items table tr td.si-close {
	color: #252525;
	font-size: 16px;
	cursor: pointer;
}

.cart-hover .select-total {
	overflow: hidden;
	border-top: 1px solid #e5e5e5;
	padding-top: 26px;
	margin-bottom: 30px;
}

.cart-hover .select-total span {
	font-size: 14px;
	color: #e7ab3c;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	float: left;
}

.cart-hover .select-total h5 {
	color: #e7ab3c;
	float: right;
}

.view-card {
	font-size: 12px;
	letter-spacing: 2px;
	display: block;
	text-align: center;
	background: #191919;
	color: #ffffff;
	padding: 15px 30px 12px;
	margin-bottom: 10px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-button .checkout-btn {
	font-size: 12px;
	letter-spacing: 2px;
	display: block;
	text-align: center;
	color: #ffffff;
	padding: 15px 30px 12px;
}

.inner-header .nav-right li.cart-price {
	font-size: 18px;
	font-weight: 700;
	color: #252525;
}
</style>