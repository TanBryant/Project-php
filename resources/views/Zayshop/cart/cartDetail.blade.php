@extends('Zayshop.layout.master') 
 
@section('content')
<style>


.shopping-cart {
     padding-top: 80px;
     padding-bottom: 60px;
 }
 
 .cart-table {
     margin-bottom: 40px;
 }
 
 .cart-table table {
     width: 100%;
     min-width: 480px;
     border: 1px solid #c3abab;
 }
 
 .cart-table table tr th {
     font-size: 16px;
     color: #252525;
     font-weight: 700;
     border-bottom: 1px solid #ebebeb;
     text-align: center;
     padding: 18px 0 19px;
     text-transform: uppercase;
 }
 
 .cart-table table tr th.p-name {
     text-align: left;
 }
 
 .cart-table table tr td {
     text-align: center;
     padding-bottom: 34px;
 }
 
 .cart-table table tr td.first-row {
     padding-top: 30px;
 }
 
 .cart-table table tr td.cart-pic {
     width: 21%;
 }
 
 .cart-table table tr td.cart-title {
     text-align: left;
 }
 
 .cart-table table tr td.cart-title h5 {
     color: #252525;
 }
 
 .cart-table table tr td.p-price {
     width: 16%;
 }
 
 .cart-table table tr td.p-price,
 .cart-table table tr td.total-price {
     color: #e7ab3c;
     font-size: 16px;
     font-weight: 700;
 }
 
 .cart-table table tr td.qua-col {
     width: 16%;
 }
 
 .cart-table table tr td.qua-col .quantity {
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
     -ms-flex-pack: center;
     justify-content: center;
 }
 
 .cart-table table tr td.qua-col .pro-qty {
     width: 123px;
     height: 46px;
     border: 2px solid #ebebeb;
     padding: 0 15px;
     float: left;
 }
 
 .cart-table table tr td.qua-col .pro-qty .qtybtn {
     font-size: 24px;
     color: #b2b2b2;
     float: left;
     line-height: 38px;
     cursor: pointer;
     width: 18px;
 }
 
 .cart-table table tr td.qua-col .pro-qty .qtybtn.dec {
     font-size: 30px;
 }
 
 .cart-table table tr td.qua-col .pro-qty input {
     text-align: center;
     width: 52px;
     font-size: 14px;
     font-weight: 700;
     border: none;
     color: #4c4c4c;
     line-height: 40px;
     float: left;
 }
 
 .cart-table table tr td.total-price {
     width: 12%;
 }
 
 .cart-table table tr td.close-td {
     font-size: 16px;
     color: #252525;
     width: 8%;
 }
 
 .cart-table table tr td.close-td i {
     cursor: pointer;
 }
 
 .cart-buttons {
     margin-bottom: 34px;
 }
 
 .cart-buttons .continue-shop {
     color: #b2b2b2;
     border: 2px solid #ebebeb;
     background: #ffffff;
     margin-right: 8px;
     padding: 12px 20px 12px 20px;
     margin-bottom: 10px;
 }
 
 .cart-buttons .up-cart {
     color: #252525;
     background: #f3f3f3;
     border: 2px solid #ebebeb;
     padding: 12px 20px 12px 20px;
 }
 
 .discount-coupon {
     margin-bottom: 30px;
 }
 
 .discount-coupon h6 {
     color: #232530;
     font-weight: 700;
     text-transform: uppercase;
     margin-bottom: 16px;
 }
 
 .discount-coupon .coupon-form {
     position: relative;
 }
 
 .discount-coupon .coupon-form input {
     width: 100%;
     height: 46px;
     border: 2px solid #ebebeb;
     color: #b2b2b2;
     font-size: 14px;
     padding-left: 20px;
 }
 
 .discount-coupon .coupon-form .coupon-btn {
     position: absolute;
     right: 0;
     top: 0;
     color: #252525;
     background: transparent;
     border: 1px solid transparent;
     padding: 13px 25px 10px 35px;
 }
 
 .proceed-checkout ul {
    border: 2px solid #c5c5c5;
    background: #d5f1d5;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 16px;
    padding-bottom: 20px;
 }
 
 .proceed-checkout ul li {
     list-style: none;
     font-size: 16px;
     font-weight: 700;
     color: #252525;
     text-transform: uppercase;
     overflow: hidden;
 }
 
 .proceed-checkout ul li.subtotal {
     font-weight: 400;
     text-transform: capitalize;
     border-bottom: 1px solid #ffffff;
     padding-bottom: 14px;
 }
 
 .proceed-checkout ul li.subtotal span {
     font-weight: 700;
 }
 
 .proceed-checkout ul li.cart-total {
     padding-top: 10px;
 }
 
 .proceed-checkout ul li.cart-total span {
     color: #e7ab3c;
 }
 
 .proceed-checkout ul li span {
     float: right;
 }
 
 .proceed-checkout .proceed-btn {
    color: #ffffff;
    background: #00af15;
    text-transform: uppercase;
    padding: 15px 25px 14px 25px;
    display: block;
    text-align: center;
    text-decoration: none;
 }
 /*---------------------
  Check Out
-----------------------*/
 
 .checkout-section {
     padding-top: 80px;
     padding-bottom: 80px;
 }
 
 .checkout-content {
     margin-bottom: 50px;
 }
 
 .checkout-content .content-btn,
 .checkout-content input {
     color: #252525;
     font-size: 16px;
     border: 2px solid #ebebeb;
     padding: 14px 20px;
     background: #f3f3f3;
     text-align: center;
     display: block;
 }
 
 .checkout-content input {
     height: 56px !important;
 }
 
 .checkout-form h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 30px;
 }
 
 .checkout-form label {
     color: #252525;
     font-size: 16px;
     margin-bottom: 5px;
 }
 
 .checkout-form label span {
     color: #d85d5c;
 }
 
 .checkout-form input {
     width: 100%;
     height: 46px;
     border: 2px solid #ebebeb;
     margin-bottom: 25px;
     padding-left: 15px;
 }
 
 .checkout-form input.street-first {
     margin-bottom: 20px;
 }
 
 .checkout-form .create-item {
     padding-top: 15px;
 }
 
 .checkout-form .create-item label {
     position: relative;
     cursor: pointer;
     padding-left: 32px;
     margin-bottom: 0;
     font-size: 14px;
     color: #252525;
 }
 
 .checkout-form .create-item label input {
     position: absolute;
     visibility: hidden;
 }
 
 .checkout-form .create-item label input:checked~span {
     background: #e7ab3c;
     border-color: #e7ab3c;
 }
 
 .checkout-form .create-item label .checkmark {
     position: absolute;
     left: 0;
     top: 3px;
     height: 13px;
     width: 13px;
     border: 2px solid #B2B2B2;
     border-radius: 2px;
 }
 
 .checkout-form .create-item label .checkmark:after {
     left: 0;
     top: 0;
     width: 9px;
     height: 6px;
     border: solid #ffffff;
     border-width: 2px 2px 0px 0px;
     -webkit-transform: rotate(127deg);
     -ms-transform: rotate(127deg);
     transform: rotate(127deg);
 }
 
 .checkout-form .place-order .order-total {
     border: 2px solid #ebebeb;
     padding-left: 40px;
     padding-right: 40px;
     padding-top: 22px;
     padding-bottom: 35px;
 }
 
 .checkout-form .place-order .order-total .order-table {
     margin-bottom: 64px;
 }
 
 .checkout-form .place-order .order-total .order-table li {
     list-style: none;
     color: #252525;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     border-bottom: 1px solid #e5e5e5;
     padding-bottom: 5px;
     padding-top: 30px;
 }
 
 .checkout-form .place-order .order-total .order-table li:first-child {
     border-bottom: 1px solid #e5e5e5;
     padding-bottom: 20px;
     padding-top: 0;
 }
 
 .checkout-form .place-order .order-total .order-table li.fw-normal {
     font-weight: 400;
     text-transform: capitalize;
 }
 
 .checkout-form .place-order .order-total .order-table li.fw-normal span {
     font-weight: 700;
 }
 
 .checkout-form .place-order .order-total .order-table li.total-price span {
     color: #e7ab3c;
 }
 
 .checkout-form .place-order .order-total .order-table li span {
     float: right;
 }
 
 .checkout-form .place-order .order-total .payment-check {
     margin-bottom: 50px;
 }
 
 .checkout-form .place-order .order-total .payment-check .pc-item label {
     position: relative;
     cursor: pointer;
     padding-left: 32px;
     margin-bottom: 0;
     font-size: 14px;
     color: #252525;
 }
 
 .checkout-form .place-order .order-total .payment-check .pc-item label input {
     position: absolute;
     visibility: hidden;
 }
 
 .checkout-form .place-order .order-total .payment-check .pc-item label input:checked~span {
     background: #e7ab3c;
     border-color: #e7ab3c;
 }
 
 .checkout-form .place-order .order-total .payment-check .pc-item label .checkmark {
     position: absolute;
     left: 0;
     top: 3px;
     height: 13px;
     width: 13px;
     border: 2px solid #B2B2B2;
     border-radius: 2px;
 }
 
 .checkout-form .place-order .order-total .payment-check .pc-item label .checkmark:after {
     left: 0;
     top: 0;
     width: 9px;
     height: 6px;
     border: solid #ffffff;
     border-width: 2px 2px 0px 0px;
     -webkit-transform: rotate(127deg);
     -ms-transform: rotate(127deg);
     transform: rotate(127deg);
 }
 
 .checkout-form .place-order .order-total .order-btn {
     text-align: center;
 }
 
 .checkout-form .place-order .order-total .order-btn .place-btn {
     padding: 13px 40px 11px;
     background: #000000;
     border-color: #000000;
 }
 /*---------------------
  Blog Section
-----------------------*/
 
 .blog-section {
     padding-top: 80px;
     padding-bottom: 80px;
 }
 
 .blog-section .loading-more {
     padding-top: 0;
 }
 
 .blog-sidebar .search-form {
     margin-bottom: 55px;
 }
 
 .blog-sidebar .search-form h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 12px;
 }
 
 .blog-sidebar .search-form form {
     position: relative;
 }
 
 .blog-sidebar .search-form form input {
     height: 46px;
     width: 100%;
     border: 2px solid #ECECEC;
     padding-left: 20px;
     font-size: 18px;
     color: #b2b2b2;
 }
 
 .blog-sidebar .search-form form button {
     position: absolute;
     right: 0;
     top: 0;
     color: #ffffff;
     background: #252525;
     border: 1px solid #252525;
     height: 46px;
     padding: 0 15px;
     cursor: pointer;
 }
 
 .blog-sidebar .blog-catagory {
     margin-bottom: 41px;
 }
 
 .blog-sidebar .blog-catagory h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 14px;
 }
 
 .blog-sidebar .blog-catagory ul li {
     list-style: none;
 }
 
 .blog-sidebar .blog-catagory ul li a {
     font-size: 16px;
     color: #636363;
     line-height: 39px;
 }
 
 .blog-sidebar .recent-post {
     margin-bottom: 55px;
 }
 
 .blog-sidebar .recent-post h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 28px;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item {
     overflow: hidden;
     margin-bottom: 30px;
     display: block;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-pic {
     float: left;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-pic img {
     height: 80px;
     width: 80px;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-text {
     display: table;
     padding-left: 16px;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-text h6 {
     color: #252525;
     line-height: 24px;
     font-weight: 700;
     margin-bottom: 10px;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-text p {
     margin-bottom: 0;
     font-size: 12px;
     font-weight: 700;
     text-transform: uppercase;
     color: #e7ab3c;
     letter-spacing: 2px;
     line-height: 20px;
 }
 
 .blog-sidebar .recent-post .recent-blog .rb-item .rb-text p span {
     color: #b2b2b2;
     font-weight: 400;
     text-transform: capitalize;
     letter-spacing: 0;
 }
 
 .blog-sidebar .blog-tags h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 20px;
 }
 
 .blog-sidebar .blog-tags .tag-item a {
     display: inline-block;
     font-size: 16px;
     color: #636363;
     padding: 5px 15px;
     border: 1px solid #ebebeb;
     margin-right: 5px;
     margin-bottom: 9px;
     border-radius: 2px;
 }
 
 .blog-item {
     margin-bottom: 42px;
 }
 
 .blog-item .bi-pic img {
     min-width: 100%;
 }
 
 .blog-item .bi-text {
     padding-top: 24px;
 }
 
 .blog-item .bi-text h4 {
     color: #252525;
     font-weight: 700;
     line-height: 30px;
     margin-bottom: 16px;
 }
 
 .blog-item .bi-text p {
     margin-bottom: 0;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     color: #e7ab3c;
     letter-spacing: 2px;
     line-height: 20px;
 }
 
 .blog-item .bi-text p span {
     color: #b2b2b2;
     font-weight: 400;
     text-transform: capitalize;
     letter-spacing: 0;
 }
 /*---------------------
  Blog Details
-----------------------*/
 
 .blog-details {
     padding-top: 72px;
     padding-bottom: 80px;
 }
 
 .blog-details-inner .blog-detail-title {
     text-align: center;
     margin-bottom: 25px;
 }
 
 .blog-details-inner .blog-detail-title h2 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 15px;
 }
 
 .blog-details-inner .blog-detail-title p {
     margin-bottom: 0;
     font-size: 12px;
     font-weight: 700;
     text-transform: uppercase;
     color: #e7ab3c;
     letter-spacing: 2px;
     line-height: 20px;
     display: inline-block;
     position: relative;
 }
 
 .blog-details-inner .blog-detail-title p:before {
     position: absolute;
     left: -175px;
     top: 8px;
     height: 1px;
     width: 125px;
     background: #ebebeb;
     content: "";
 }
 
 .blog-details-inner .blog-detail-title p:after {
     position: absolute;
     right: -175px;
     top: 7px;
     height: 1px;
     width: 125px;
     background: #ebebeb;
     content: "";
 }
 
 .blog-details-inner .blog-detail-title p span {
     color: #b2b2b2;
     font-size: 14px;
     font-weight: 400;
     text-transform: capitalize;
     letter-spacing: 0;
 }
 
 .blog-details-inner .blog-large-pic img {
     min-width: 100%;
 }
 
 .blog-details-inner .blog-detail-desc {
     margin-top: 22px;
     margin-bottom: 32px;
 }
 
 .blog-details-inner .blog-detail-desc p {
     font-size: 18px;
     line-height: 30px;
 }
 
 .blog-details-inner .blog-detail-desc p:first-of-type:first-letter {
     float: left;
     font-size: 60px;
     text-transform: uppercase;
     color: #252525;
     margin-top: 14px;
     margin-right: 10px;
 }
 
 .blog-details-inner .blog-quote {
     margin-bottom: 65px;
 }
 
 .blog-details-inner .blog-quote p {
     position: relative;
     color: #252525;
     font-size: 20px;
     font-weight: 700;
     line-height: 30px;
     padding-left: 32px;
 }
 
 .blog-details-inner .blog-quote p span {
     color: #161715;
     font-size: 14px;
     text-transform: uppercase;
     letter-spacing: 2px;
 }
 
 .blog-details-inner .blog-quote p:before {
     position: absolute;
     left: 0;
     top: 0;
     height: 88px;
     width: 3px;
     background: #e7ab3c;
     content: "";
 }
 
 .blog-details-inner .blog-more {
     margin-bottom: 32px;
 }
 
 .blog-details-inner .blog-more img {
     min-width: 100%;
 }
 
 .blog-details-inner p {
     font-size: 18px;
     line-height: 30px;
 }
 
 .blog-details-inner .tag-share {
     overflow: hidden;
     border-bottom: 1px solid #ebebeb;
     padding-bottom: 54px;
     margin-top: 46px;
 }
 
 .blog-details-inner .tag-share .details-tag {
     float: left;
 }
 
 .blog-details-inner .tag-share .details-tag ul li {
     list-style: none;
     display: inline-block;
     color: #171717;
     font-size: 12px;
     font-weight: 700;
     text-transform: uppercase;
     margin-right: 16px;
 }
 
 .blog-details-inner .tag-share .details-tag ul li i {
     font-size: 18px;
     color: #e7ab3c;
 }
 
 .blog-details-inner .tag-share .blog-share {
     float: right;
 }
 
 .blog-details-inner .tag-share .blog-share .social-links {
     display: inline-block;
 }
 
 .blog-details-inner .tag-share .blog-share .social-links a {
     display: inline-block;
     color: #171717;
     margin-left: 25px;
 }
 
 .blog-details-inner .tag-share .blog-share span {
     font-size: 16px;
     color: #2d292f;
 }
 
 .blog-details-inner .blog-post {
     padding-top: 72px;
     margin-bottom: 58px;
 }
 
 .blog-details-inner .blog-post .prev-blog {
     display: block;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-pic {
     float: left;
     position: relative;
     margin-top: 7px;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-pic i {
     position: absolute;
     left: -32px;
     top: 35%;
     font-size: 18px;
     color: #b2b2b2;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-pic img {
     height: 70px;
     width: 70px;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-text {
     display: table;
     padding-left: 20px;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-text span {
     font-size: 14px;
     color: #b2b2b2;
     letter-spacing: 2px;
 }
 
 .blog-details-inner .blog-post .prev-blog .pb-text h5 {
     font-size: 20px;
     color: #252525;
     line-height: 26px;
     font-weight: 700;
     margin-top: 10px;
 }
 
 .blog-details-inner .blog-post .next-blog {
     display: block;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-pic {
     float: right;
     position: relative;
     margin-top: 7px;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-pic i {
     position: absolute;
     right: -28px;
     top: 35%;
     font-size: 18px;
     color: #b2b2b2;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-pic img {
     height: 70px;
     width: 70px;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-text {
     display: table;
     padding-right: 20px;
     text-align: right;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-text span {
     font-size: 14px;
     color: #b2b2b2;
     letter-spacing: 2px;
 }
 
 .blog-details-inner .blog-post .next-blog .nb-text h5 {
     font-size: 20px;
     color: #252525;
     line-height: 26px;
     font-weight: 700;
     margin-top: 10px;
 }
 
 .blog-details-inner .posted-by {
     border: 1px solid #ebebeb;
     border-radius: 5px;
     padding: 40px 65px;
 }
 
 .blog-details-inner .posted-by .pb-pic {
     float: left;
 }
 
 .blog-details-inner .posted-by .pb-text {
     padding-left: 22px;
     display: table;
 }
 
 .blog-details-inner .posted-by .pb-text a {
     display: block;
 }
 
 .blog-details-inner .posted-by .pb-text a h5 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 13px;
 }
 
 .blog-details-inner .posted-by .pb-text p {
     line-height: 30px;
     margin-bottom: 0;
 }
 
 .blog-details-inner .leave-comment {
     padding-top: 55px;
 }
 
 .blog-details-inner .leave-comment h4 {
     color: #292f3b;
     font-weight: 700;
     margin-bottom: 35px;
 }
 
 .blog-details-inner .leave-comment .comment-form input {
     width: 100%;
     font-size: 16px;
     color: #636363;
     height: 50px;
     border: 1px solid #ebebeb;
     border-radius: 5px;
     padding-left: 20px;
     margin-bottom: 30px;
 }
 
 .blog-details-inner .leave-comment .comment-form textarea {
     width: 100%;
     resize: none;
     font-size: 16px;
     color: #636363;
     height: 116px;
     border: 1px solid #ebebeb;
     border-radius: 5px;
     padding-left: 20px;
     padding-top: 10px;
     margin-bottom: 45px;
 }
 /*---------------------
  Map
-----------------------*/
 
 .map {
     padding-top: 80px;
     padding-bottom: 0;
 }
 
 .map-inner {
     height: 610px;
     position: relative;
 }
 
 .map-inner iframe {
     width: 100%;
 }
 
 .map-inner .icon {
     position: absolute;
     left: 50%;
     top: 50%;
     -webkit-transform: translate(-14px, -21px);
     -ms-transform: translate(-14px, -21px);
     transform: translate(-14px, -21px);
 }
 
 .map-inner .icon i {
     font-size: 48px;
     color: #e7ab3c;
 }
 /*---------------------
  Contact Section
-----------------------*/
 
 .contact-section {
     padding-top: 75px;
     padding-bottom: 80px;
 }
 
 .contact-title {
     margin-bottom: 30px;
 }
 
 .contact-title h4 {
     color: #252525;
     font-weight: 700;
     margin-bottom: 16px;
 }
 
 .contact-widget .cw-item {
     background: #ffffff;
     margin-bottom: 11px;
     -webkit-box-shadow: 0px 8px 35px 10px #E8E8E8;
     box-shadow: 0px 8px 35px 10px #E8E8E8;
     padding-left: 25px;
     padding-top: 15px;
     padding-bottom: 15px;
     border-radius: 10px;
 }
 
 .contact-widget .cw-item .ci-icon {
     float: left;
     margin-top: 12px;
 }
 
 .contact-widget .cw-item .ci-icon i {
     font-size: 30px;
     color: #b2b2b2;
 }
 
 .contact-widget .cw-item .ci-text {
     display: table;
     padding-left: 30px;
 }
 
 .contact-widget .cw-item .ci-text span {
     color: #b2b2b2;
     font-size: 16px;
 }
 
 .contact-widget .cw-item .ci-text p {
     font-size: 18px;
     color: #252525;
     margin-bottom: 0;
 }
 
 .contact-form .leave-comment h4 {
     color: #292f3b;
     font-weight: 700;
     margin-bottom: 20px;
 }
 
 .contact-form .leave-comment p {
     margin-bottom: 38px;
 }
 
 .contact-form .leave-comment .comment-form input {
     width: 100%;
     font-size: 16px;
     color: #636363;
     height: 50px;
     border: 1px solid #ebebeb;
     border-radius: 5px;
     padding-left: 20px;
     margin-bottom: 30px;
 }
 
 .contact-form .leave-comment .comment-form textarea {
     width: 100%;
     resize: none;
     font-size: 16px;
     color: #636363;
     height: 150px;
     border: 1px solid #ebebeb;
     border-radius: 5px;
     padding-left: 20px;
     padding-top: 10px;
     margin-bottom: 35px;
 }
 
 .contact-form .leave-comment .comment-form .site-btn {
     padding: 13px 35px 11px;
 }
 /*---------------------
  Faq Section
-----------------------*/
 
 .faq-section {
     padding-top: 80px;
     padding-bottom: 54px;
 }
 
 .faq-accordin .card {
     border: none;
     margin-bottom: 22px;
 }
 
 .faq-accordin .card .card-heading {
     font-size: 22px;
     color: #252525;
     font-weight: 700;
     cursor: pointer;
 }
 
 .faq-accordin .card .card-heading a {
     padding-left: 42px;
     display: block;
 }
 
 .faq-accordin .card .card-body {
     padding: 0;
     padding-top: 13px;
     padding-bottom: 10px;
 }
 
 .faq-accordin .card .card-body p {
     margin-bottom: 0;
 }
 
 .faq-accordin .card-heading a:after,
 .faq-accordin .card-heading>a.active[aria-expanded=false]:after {
     content: "";
     font-family: "FontAwesome";
     font-size: 14px;
     color: #404040;
     height: 25px;
     width: 25px;
     text-align: center;
     line-height: 25px;
     background: #EFEFF0;
     margin-top: 3px;
     position: absolute;
     left: 0;
     top: 0;
 }
 
 .faq-accordin .card-heading a[aria-expanded=true]:after,
 .faq-accordin .card-heading>a.active:after {
     content: "";
     font-family: "FontAwesome";
     float: left;
     font-size: 13px;
     color: #ffffff;
     background: #e7ab3c;
 }
 
</style>
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Delete</th>
									<th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img style="width: 100px;"
                                     src="https://product.hstatic.net/1000003969/product/den_jnath008_1_408cfa80e4a2493a89f98283b27aec26_grande.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Pure Pineapple</h5>
                                    </td>
                                    <td class="p-price first-row">$60.00</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <button style=' '>-</button>
                                                <input type="text"  name="quantity" value="1">
                                                <button style=' '>+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$60.00</td>
                                    <td class="close-td first-row">
                                        <img src="{{@asset('/assets/img/remove.png')}}" alt="">
                                    </td>
									<td class="close-td first-row">
                                    <img src="{{@asset('/assets/img/edit.png')}}" alt="">
                                     </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$240.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection