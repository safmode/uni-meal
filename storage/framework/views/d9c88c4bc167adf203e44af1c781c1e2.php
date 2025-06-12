<!-- resources/views/checkout/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniMeal Checkout</title>
    <!-- Custom Pink UniMeal Theme -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/unimeal.css">
</head>
<body>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="checkout-section spad">
        <div class="container">
            <form action="<?php echo e(route('checkout.process')); ?>" method="POST" class="checkout-form">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Shipping Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="name">Full Name <span>*</span></label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" name="phone" id="phone" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="address">Address <span>*</span></label>
                                <textarea name="address" id="address" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h4>Delivery Option</h4>
                        <div class="form-group">
                            <label><input type="radio" name="delivery_option" value="Pickup" checked> Pickup</label><br>
                            <label><input type="radio" name="delivery_option" value="15–20 min (RM3)"> 15–20 min (RM3)</label><br>
                            <label><input type="radio" name="delivery_option" value="Now (RM5)"> Now (RM5)</label>
                        </div>

                        <div class="order-btn mt-4">
                            <button type="submit" class="site-btn place-btn">Continue to Payment</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\unimeal\resources\views/checkout/form.blade.php ENDPATH**/ ?>