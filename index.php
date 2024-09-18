<?php include 'header.php'?>
<div class="header-notice">
    <div class="notice-container">
        <p>15% off on Saturday, any selected tea selections. Use code: <span class="bold">SAT15OFF</span> for internet orders.</p>
    </div>
</div>

<div class="homepage-image">
    <div class="image-text-container">
        <span class="bold">Chollerton is proud to provide excellent services.</span>
    </div>
</div>

<div class="main-container">
    <section class="sections about-section">
        <div class="section-heading">
            <span class="section-description">who we are</span>
            <h2 class="section-title bold">our story</h2>
        </div>
        <div class="about-story-card">
            <div class="story-img-wrapper">
                <img class="story-img" src="img/about-story-img.jpg" alt="one of chollerton tearoom">
            </div>
            <div class="story-content">
                <h3>We are a group of dedicated people with unrivalled passion in providing excellence.</h3>
                <p>Chollerton Tearooms are a group of companies that offer a unique and authentic British experience with a mix of root values. Our facilities include a tearoom, bed & breakfast accommodations, a village shop with a post office, and a craft shop.</p>
                <a class="primary-button" href="#">Learn more about us</a>
            </div>
        </div>
    </section>

    <section class="sections facilities-section">
        <div class="section-heading">
            <span class="section-description">what we provide</span>
            <h3 class="section-title">our facilities</h3>
        </div>
        <div class="facilities-grid-wrapper">
            <div class="facilities-item">
                <img class="facilities-img" src="img/tea.jpg" alt="cup filled with tea">
                <div class="facilities-content-wrapper">
                    <h2 class="facilities-title">Tearooms</h2>
                    <p class="facilities-description">A charming and cozy spot to enjoy a cup of tea or coffee and a delicious homemade cake</p>
                    <a class="facilities-button" href="/our-facilities.php#teaRoom">Read More</a>
                </div>
            </div>
            <div class="facilities-item">
                <img class="facilities-img" src="img/bnb.jpg" alt="beds">
                <div class="facilities-content-wrapper">
                    <h2 class="facilities-title">Bed & Breakfast</h2>
                    <p class="facilities-description">Beautifully decorated and furnished with antiques, creating a warm and welcoming atmosphere, full English breakfast included!</p>
                    <a class="facilities-button" href="/our-facilities.php#bedBreakfast">Read More</a>
                </div>
            </div>
            <div class="facilities-item">
                <img class="facilities-img" src="img/craft-shop.jpg" alt="craft shop shelf">
                <div class="facilities-content-wrapper">
                    <h2 class="facilities-title">Craft Shop</h2>
                    <p class="facilities-description">Offers a range of locally made items, including pottery, jewelry, textiles, and art, making it the perfect place to find unique and one-of-a-kind gifts</p>
                    <a class="facilities-button" href="/our-facilities.php#craftShop">Read More</a>
                </div>
            </div>
            <div class="facilities-item">
                <img class="facilities-img" src="img/village-shop.jpg" alt="village store front">
                <div class="facilities-content-wrapper">
                    <h2 class="facilities-title">Village Shop</h2>
                    <p class="facilities-description">Offers a range of groceries, snacks, and household items, as well as locally sourced produce and gifts, post office inside the shop!</p>
                    <a class="facilities-button" href="/our-facilities.php#villageShop">Read More</a>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="subscription-section">
    <div class="main-container">
        <div class="text-wrapper">
            <h2 class="subscription-title">Be the first to hear from us!</h2>
            <p class="subscription-description">Subscribe to our email newsletter to be the first one to know about our exlcusive offers, discounts, events, workshops and many more. You can opt out from our newsletter at any time. </p>
        </div>
        <div class="subscription-form-wrapper">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['firstname'];
                $email = $_REQUEST['email'];
            }
            ?>
            <form id="newsletter-form" name="newsletter-form" method="post" action="#newsletter-form">
<!--                <label for="firstname">Firstname:</label>-->
                <input type="text" id="firstname" name="firstname" maxlength="25" aria-label="firstname" placeholder="Enter your first name..." required>
<!--                <label for="email">Email Address:</label>-->
                <input type="email" id="email" name="email" aria-label="email" placeholder="Enter your email address..." required>
                <button class="submit-button" type="submit">Subscribe to our newsletter</button>
            </form>
            <?php
            if (!empty($name) and !empty($email)) {
                echo "<p class='subscribed-msg'>You're in, <span class='bold'>$name</span>, thanks for subscribing.<br>You can also <a href='/find-out-more.php'>express your interest here!</a></p>\n";
            }
            ?>
        </div>
    </div>
</section>
<div class="main-container">
    <section class="sections news-section">
        <div class="section-heading">
            <span class="section-description">what's happening</span>
            <h2 class="section-title">latest news</h2>
        </div>
        <div class="news-grid-wrapper">
            <div class="news-item">
                <div class="news-img-wrapper">
                    <img class="news-img" src="img/summer-house.jpg" alt="summer house with coconut tree">
                </div>
                <div class="news-content-wrapper">
                    <span class="timestamp">17th April 2023</span>
                    <a class="news-title" href="#"><h3>Summer is coming, here’s why you should stay with Charllote BnB.</h3></a>
                    <a class="news-link" href="#">Read More -></a>
                </div>
            </div>
            <div class="news-item">
                <div class="news-img-wrapper">
                    <img class="news-img" src="img/tea-session.jpg" alt="tea with paper and flowers">
                </div>
                <div class="news-content-wrapper">
                    <span class="timestamp">17th April 2023</span>
                    <a class="news-title" href="#"><h3>Most demanded Burmese tea “Laphat yae” available now!</h3></a>
                    <a class="news-link" href="#">Read More -></a>
                </div>
            </div>
            <div class="news-item">
                <img class="news-img" src="img/postbox.jpg" alt="a red letterbox">
                <div class="news-content-wrapper">
                    <span class="timestamp">17th April 2023</span>
                    <a class="news-title" href="#"><h3>We’re having a post office in our village store!</h3></a>
                    <a class="news-link" href="#">Read More -></a>
                </div>
            </div>
            <div class="news-item">
                <img class="news-img" src="img/craft-lesson.jpg" alt="crafting workshop">
                <div class="news-content-wrapper">
                    <span class="timestamp">17th April 2023</span>
                    <a class="news-title" href="#"><h3>Free workshop: Learn to Craft 101. Register now to save your spot! adsf asdf sf as assad f</h3></a>
                    <a class="news-link" href="#">Read More -></a>
                </div>
            </div>
        </div>
        <a class="primary-button" href="#">Read all news</a>
    </section>

    <section class="sections interest-section">
        <h2 class="interest-title">Thinking about expressing your interest?</h2>
        <a class="primary-button" href="/find-out-more.php">Find out more</a>
    </section>
</div>
<?php include 'footer.php'?>

