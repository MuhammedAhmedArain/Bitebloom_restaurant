<?php session_start(); ?>
<?php include "header.php"; ?>

<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="images/restaurant_interior.jpg" alt="Restaurant Interior">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Bitebloom Restaurant</strong></h1>
                        <p class="m-b-40">A culinary haven where taste meets elegance.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#menu">Explore Menu</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left">
            <img src="images/authentic_food.jpg" alt="Authentic Food">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Authentic Cuisine Redefined</strong></h1>
                        <p class="m-b-40">An experience of flavors crafted with perfection.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#contact">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left">
            <img src="images/delicious_dish.jpg" alt="Delicious Dish">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Savor Every Bite</strong></h1>
                        <p class="m-b-40">Delight in our carefully curated signature dishes.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#review">Reviews</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>About <span>Bitebloom</span></h1>
                    <h4>Our Story</h4>
                    <p>Bitebloom is where culinary artistry meets exceptional hospitality. We blend timeless traditions with modern innovation to deliver a dining experience like no other.</p>
                    <p>Perfect for every occasion, Bitebloom offers an inviting ambiance and an unforgettable menu crafted to satisfy all palates.</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#contact">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/about_image.jpg" class="img-fluid" alt="About Us">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Menu -->
<div class="menu-box" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Gourmet Menu</h2>
                    <p>Explore dishes that redefine culinary excellence</p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-appetizers-tab" data-toggle="pill" href="#v-pills-appetizers" role="tab" aria-controls="v-pills-appetizers" aria-selected="false">Appetizers</a>
                    <a class="nav-link" id="v-pills-maincourse-tab" data-toggle="pill" href="#v-pills-maincourse" role="tab" aria-controls="v-pills-maincourse" aria-selected="false">Main Course</a>
                    <a class="nav-link" id="v-pills-desserts-tab" data-toggle="pill" href="#v-pills-desserts" role="tab" aria-controls="v-pills-desserts" aria-selected="false">Desserts</a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                        <div class="row">
                            <?php
                            include "connect.php";
                            $result = mysqli_query($con, "SELECT * FROM menu");
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="col-lg-4 col-md-6 special-grid">
                                    <div class="gallery-single fix">
                                        <img src="admin/<?php echo $row['image']; ?>" class="img-fluid" alt="Menu Item">
                                        <div class="why-text">
                                            <h4><?php echo $row['title']; ?></h4>
                                            <p><?php echo $row['description']; ?></p>
                                            <p>₹<?php echo $row['price']; ?></p>
                                            <a class="btn btn-sm btn-outline-dark" href="addcart.php?pid=<?php echo $row['id']; ?>">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Menu -->

<?php include "footer.php"; ?>
