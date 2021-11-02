<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="main-content">
    <div class="cart-sect">
        <div class="container-fluid">
            <h4 class="make-bold mb-4">Cart (3 Items)</h4>
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <div class="cart-view-sect">
                        <div class="row">
                            <div class="col-lg-7 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="cart-image-view">
                                            <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-image-set" />
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h6 class="ml-3">Professional Certificate in Organizational Value Creation through Leadership
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                 <h6 class="make-bold">NGN 10,000,000.00</h6>
                            </div>
                            <!-- <div class="col-lg-2 mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                         <button type="button" class="quantity-left-minus btn btn-secondary btn-number"  data-type="minus" data-field="">
                                           <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="10" min="1" max="100">
                                    <div class="input-group-append">
                                        <button type="button" class="quantity-right-plus btn btn-secondary btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-2 mb-3">
                                <button class="btn btn-danger btn-block"><i class="fa fa-times"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-view-sect">
                        <div class="row">
                            <div class="col-lg-7 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="cart-image-view">
                                            <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-image-set" />
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h6 class="ml-3">
                                            Advanced Professional Certificate Course in Business Management
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                 <h6 class="make-bold">NGN 10,000,000.00</h6>
                            </div>
                            <!-- <div class="col-lg-2 mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                         <button type="button" class="quantity-left-minus btn btn-secondary btn-number"  data-type="minus" data-field="">
                                           <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="10" min="1" max="100">
                                    <div class="input-group-append">
                                        <button type="button" class="quantity-right-plus btn btn-secondary btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-2 mb-3">
                                <button class="btn btn-danger btn-block"><i class="fa fa-times"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-view-sect">
                        <div class="row">
                            <div class="col-lg-7 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="cart-image-view">
                                           <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-image-set" />
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h6 class="ml-3">
                                            Advanced Professional Certificate Course in Business Management
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <h6 class="make-bold">NGN 10,000,000.00</h6>
                            </div>
                            <!-- <div class="col-lg-2 mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                         <button type="button" class="quantity-left-minus btn btn-secondary btn-number"  data-type="minus" data-field="">
                                           <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center"" value="10" min="1" max="100">
                                    <div class="input-group-append">
                                        <button type="button" class="quantity-right-plus btn btn-secondary btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-2 mb-3">
                                <button class="btn btn-danger btn-block"><i class="fa fa-times"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="checkout-card-view-sect">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="card-total-view d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-0 make-bold">Total</p>
                                    </div>
                                    <div>
                                        <p class="mb-0 make-bold">NGN 10,000,000.00</p>
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/payment-logos.svg" class="img-fluid" />
                                </div>
                                <hr />
                                <div class="discount-sect mb-3">
                                    <button class="btn btn-outline-info btn-block" id="btnDiscount">I have a discount code</button>
                                    <div class="mt-4 coupon-apply-sect">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-lg-9">
                                                     <input type="text" class="form-control" placeholder="Enter your coupon code..." />
                                                </div>
                                                <div class="form-group col-lg-3">
                                                     <button class="btn btn-dark btn-block">Apply</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="discount-sect mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>checkout-3.php" class="btn btn-danger btn-block"><i class="fa fa-lock"></i> Secure
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mx-auto">
                     <h3 class="make-bold text-center mb-4">Your Cart is empty</h3>
                     <a href="" class="btn btn-danger btn-block">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>

<script>

$(document).ready(function(){
     $("#btnDiscount").click(function(){
        $(".coupon-apply-sect").slideToggle()
    })
})


</script>