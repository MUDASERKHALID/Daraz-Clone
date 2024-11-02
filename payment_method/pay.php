<?php
require('config.php');
?>

<html>
<body>

<h2>Payment method</h2>
<form action="submit.php" method="post">    


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="product-image">
                <img src="moringa-capsules-90.png" alt="Product Image" class="zoomable-image" id="main-image">
            </div>
        </div>

        
            <div class="col-md-6">
                <div class="product-info">
                    <div class="product-title">
                        <h2>Moringa Capsules 90 in Bottle - Organic Moringa Pills Capsules , Weight Loose ,مورنگا کیپسول</h2>
                        <div class="product-rating">
                            ★★★★★ <span> 5 Ratings | 1 Answered Questions</span>
                        </div>

                        <div class="product-actions">
                            <span class="share-icon">Share</span>
                            <span class="heart-icon">Add to Favorites</span>
                        </div>

                        <p class="brand-name">
                            Brand: <a href="https://www.daraz.pk/mdl-mart-124492260/?spm=a2a0e.pdp.0.0.5c903083K9PV1o">MDL Mart</a>  |  <a href="https://www.daraz.pk/beverages/mdl-mart-124492260/?spm=a2a0e.pdp.0.0.5c903083K9PV1o">More Beverages from MDL Mart</a>
                        </p>
                        <hr>
                        <p class="discounted-price">Rs. 799</p>
                        <p class="original-price">Rs. 1500 <span class="discount">-47%</span></p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publishableKey?>"
        data-amount="79999"
        data-name="Pay with Stripe"
        data-description="Pay now with stripe. Secure Payments"
        data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReJFjuFNE1NN7Mc091TP9MYFWjC_8aNlbPOBHDcqiX6g&s"
        data-currency="pkr"
        data-email="azeemalikk125@gmail.com"
    >
    </script>
</form>

</html>
</body>