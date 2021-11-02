<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/bootstrap.min.css">
    <link href="<?php echo ROOT_DIR; ?>css/europa-156337870.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/course-landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/style.css">

    <title>Metropolitan School of Business Management London, UK - MSBM UK</title>
</head>
<style>
    .navbar-toggler-icon,
    .toggler-icon {
        margin-left: 10px;
    }

    .saved_item {
        background-color: #000;
        position: relative;
    }

    .btn-red-o {
        color: rgba(173, 0, 0);
    }

    .btn-darken-o {
        background-color: rgba(0, 0, 0, 0.1);
        color: #000;
    }

    .btn-darken-o:hover {
        background-color: #343a40;
        color: #fff;
    }

    .btn-border-o {
        border: 1px solid #ad0000
    }

    .lt-sp {
        letter-spacing: 0.2rem;
        text-transform: uppercase;
        font-size: 11px;
    }

    .count-pos-ab {
        position: absolute;
        top: 5px;
        height: 22px;
        width: 22px;
        border-radius: 50px;
        font-weight: 400;
        padding: 0;
        padding-top: 5px;
        font-size: 12px;
    }

    .badge-red {
        background-color: #ad0000;
    }

    .make-bold {
        font-weight: 700;
    }

    .img-wishlist-error {
        width: 150px;
    }

    .img-testify {
        width: 80px !important;
        object-fit: contain;
        object-position: center center;
        height: 80px;
        width: 100px;
        border: 1px solid #ccc;
    }

    .navbar-nav li.sign_in {
        margin-left: 8px !important;
    }

    .register_now {
        background-color: #000;
    }

    .count-wish {
        height: 20px;
        width: 20px;
        border-radius: 50px;
        background: red;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 12px;
        font-weight: 700;
        position: absolute;
        top: 0;
        left: 30px;
    }

    .add-relative {
        position: relative;
    }

    .pad-lr{
        padding-left:1rem;
        padding-right: 1rem;
    }

    .login-sug-sect .find .card{
       background-color: transparent
    }

    .bg-lighter{
       background-color: #f1f1f1;
    }

   .login-sect-display .main-content{
      margin-bottom: 0px !important;
      margin-top: 0px !important;
   }

   .d-login-pos{
      display:flex;
      flex-direction:column;
      justify-content: center;
      height:100%
   }

   .ft-3{
      font-size:3rem
   }

   .sub-btn{
        font-size: 1.2rem;
        line-height: 1.4;
        font-weight: 700;
        color: rgba(0,0,0,0.6);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: left;
        min-height: 56px;
        height: auto;
        width: auto;
        float: left;
        background-color: rgba(0,0,0,0.08);
        -webkit-box-shadow: none;
        box-shadow: none;
        padding: 8px 20px;
        margin-bottom: 12px;
        margin-right:10px;
   }

   .table-no-white-space{
     white-space: nowrap;
   }

   .sub-btn:hover{
        background-color: rgba(0,0,0,0.2);
        box-shadow: none;
        cursor: pointer;
       color: rgba(0,0,0,0.6);
    }

    .bord-3{
      border: 3px solid #ccc
    }

    .overlay-text-slider {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        color: #fff;
        padding-left:15px;
        padding-right:15px;
        z-index:10;
        width:700px
    }

    .overlay-text-slider h1{
       font-weight: 700;
       font-size: 3rem
    }

   .overlay-text-slider p{
       font-size: 1.4rem
    }

    #carouselMainIndicators .carousel-item {
        position: relative;
        height: 400px;
        min-height: 150px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: top center;
        box-shadow: inset 0 0 500px #000000;
    }

    .background-gradient {
        background: linear-gradient(90deg,#000,rgba(39,16,102,0) 85%,rgba(39,16,102,0) 0,#000);
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 2;
    }

    .form-control,.custom-select{
        border:1px solid #000;
        border-radius:0px;

    }

    .cart-image-view {
        height: 100px;
        width: 100px;
        position: relative;
        overflow: hidden;
    }

    .card-image-set {
        object-fit: cover;
        object-position: center center;
        height: 100%;
        width: 100%;
    }

    .cart-view-sect:nth-child(odd) {
        background-color: #eee;
    }

    .cart-view-sect {
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .cart-view-sect .input-group-prepend,
    .cart-view-sect .input-group-append {
        cursor: pointer;
    }

    .coupon-apply-sect{
        display: none;
    }

    .pos-sticky-top{
        position: sticky;
        top: 85px;
    }

    .in-cart-image-view{
        height: 40px;
        width: 40px;
        position: relative;
        overflow: hidden;
    }

    .in-cart-text{
       font-size: 8px;
    }

    .in-cart-view-sect{
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
    }

   .in-cart-view-sect:hover{
      background-color: #eee
    }

   .add-relative {
        position: relative;
    }
    .rmv-rpadding {
        padding-right: 0;
    }

    .border-dark, .payment-summary {
        border: 1px solid;
    }

    .btn-darker{
      background-color: #2c2e2f;
      color: #fff;
    }

    .summary-list-view .list-group-item{
       background-color: transparent !important;
    }

    @media screen and (min-width: 991px){
        .pad-100{
            padding-top:100px;
            padding-bottom:100px;
        }
    }
    @media screen and (max-width: 768px){
       .sub-btn{
          float:none;
          font-size:0.9rem;
          margin-right:0;
       }
        .pad-100-sm{
          padding:50px 0;
        }
        .white-space-sm{
           white-space:nowrap;
        }
        .overlay-text-slider{
           width: auto;
        }
        .overlay-text-slider h1 {
           font-size: 2rem
        }
       .overlay-text-slider p{
           font-size: .8rem
        }
        .cart-image-view {
            height: 70px;
            width: 70px;
            position: relative;
            overflow: hidden;
        }
        .sign-btn {
            padding-bottom: 0px !important;
        }
    }

    @media screen and (min-width:991px){
       .pad-100-sm{
          padding:100px 0;
        }

       .cart-dropdown{
           width: 300px
        }

        .container-fluid{
            padding-left:66px;
            padding-right:66px;
        }
    }

@media screen and (max-width:320px){
    .navbar-brand img{
      width: 45px !important;
    }

   .cart-image-view {
        height: 60px;
        width: 60px;
        position: relative;
        overflow: hidden;
    }
}


/****New Navbar****/
@media screen and (max-width:768px){
    .pro-sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}

.box-shad{
    box-shadow:0px 2px 4px rgba(0,0,0,0.05), 0px 4px 12px rgba(0,0,0,0.05)
}

/*.find .card-body {
    background-color: #fff;
    transition: all 0.5s;
    display: flex;
    flex-direction: column;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}

 .find .card-img-wrap {
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}

.find .card-ahref-flex {
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow:0px 2px 4px rgba(0,0,0,0.05), 0px 4px 12px rgba(0,0,0,0.05)
} */

.card-ahref-flex{
   position: relative
}

.bg-white{
   background-color:#fff
}

.navigator .navbar-nav .nav-link {
    color: rgb(11 11 11);
    font-weight: 600;
}

.navigator .navbar-nav .nav-link:focus, .navigator .navbar-nav .nav-link:hover {
    color: #000 !important;
}

.navigator .navbar-nav .nav-link.text-white:focus, .navigator .navbar-nav .nav-link.text-white:hover {
    color: #fff !important;
}

.btn-transparent{
   background-color:transparent;
}

.btn-transparent:hover{
   background-color:transparent !important;
   color:#000 !important;
}

.box-shad{
    box-shadow:0px 2px 4px rgba(0,0,0,0.05), 0px 4px 12px rgba(0,0,0,0.05)
}

.arrow-nav{
   filter: invert(1)
}

.text-white{
   color: white !important;
}

.location{
   background-color: #f4f4f4 !important;
}

.font-xs{
    font-size:15px
}

.find .heading-find {
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.btn-normal{
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
    font-weight: 400;
}

.font-w-400{
    font-weight:400;
}

.strike-item{
  text-decoration:line-through;
}

.pad-50 {
    padding-top: 50px;
    padding-bottom: 50px;
}

</style>

<body>
    <?php include "main-navbar.incc.php"; ?>