<?php
    $title = "Credits";
    include "header.php";
?>

<div class="main-container">
    <section class="sections">
        <div class="section-heading">
            <h1 class="section-title">Credits</h1>
            <p class="section-description">Student information, references and further security considerations</p>
        </div>
        <div class="credits-content">
            <h2>Student Information</h2>
            <p>Name: Khant Thura</p>
            <p>Student ID: 22048419</p>
            <p>Email: khant.thura@northumbria.ac.uk</p>
            <h2>References to website content</h2>
            <ul>
                <li>Jesus, M. (April 28, 2022) A group of tables and chairs. Available at:
                    <a href="https://unsplash.com/photos/CzOa6rUbekA" target="_blank">https://unsplash.com/photos/CzOa6rUbekA</a></li>
                <li>Lee, N. (March 5, 2018) Brown wooden bunk beds. Available at: <a href="https://unsplash.com/photos/kT-ZyaiwBe0" target="_blank">https://unsplash.com/photos/kT-ZyaiwBe0</a></li>
                <li>Kraft, R. (January 27, 2017) Green leafed plant. Available at:
                    <a href="https://unsplash.com/photos/WOzVqzpScrk" target="_blank">https://unsplash.com/photos/WOzVqzpScrk</a></li>
                <li>Spratt, Annie (September 17, 2016) Colorful thread spools. Available at:
                    <a href="https://unsplash.com/photos/nWAlCB1tyvc" target="_blank">https://unsplash.com/photos/nWAlCB1tyvc</a></li>
                <li>Kim, B. (July 14, 2018) Post. Available at: <a href="https://unsplash.com/photoss/S-TcfjrYVKo" target="_blank">https://unsplash.com/photoss/S-TcfjrYVKo</a></li>
                <li>Kaunas, S. (March 13, 2020) Bungalow room in cozy boutique hotel in Thailand. Available at: <a href="https://unsplash.com/photos/7ZD_JIwl410" target="_blank">https://unsplash.com/photos/7ZD_JIwl410</a></li>
                <li>Hudson, D. (April 17, 2018) Tea cup beside flowers. Available at:
                    <a href="https://unsplash.com/photos/FO4gzqI2t84" target="_blank">https://unsplash.com/photos/FO4gzqI2t84</a></li>
                <li>Dumlao, N. (December 11, 2019) A cup of tea with tea bags. Available at:
                    <a href="https://unsplash.com/photos/8yBQQqH3q8Q" target="_blank">https://unsplash.com/photos/8yBQQqH3q8Q</a></li>
                <li>Legarreta, F. (October 8, 2017) Tea Time with Grandma. Available at:
                    <a href="https://unsplash.com/photos/92gDIK7yjfE" target="_blank">https://unsplash.com/photos/92gDIK7yjfE</a></li>
                <li>Tseng, D. (May 11, 2017) Kirin vending machine. Available at: <a href="https://unsplash.com/photos/W9kq9suABY4" target="_blank">https://unsplash.com/photos/W9kq9suABY4</a></li>
                <li>Lark, B. (May 3, 2017) Fruit salad on bowls. Available at: <a href="https://unsplash.com/photos/HlNcigvUi4Q" target="_blank">https://unsplash.com/photos/HlNcigvUi4Q</a></li>
                <li>Crew (May 6, 2016) Bartenders serving cocktail. Available at: <a href="https://unsplash.com/photos/szCvt1gP2d4" target="_blank">https://unsplash.com/photos/szCvt1gP2d4</a></li>
                <li>Tosolini, F. (June 10, 2019) Fruits on table. Available at: <a href="https://unsplash.com/photos/3LjBfGTbTJY" target="_blank">https://unsplash.com/photos/3LjBfGTbTJY</a></li>
                <li>Tapert, B. (May 3, 2019) Brown wooden shelf. Available at: <a href="https://unsplash.com/photos/A_L2xNKgENg" target="_blank">https://unsplash.com/photos/A_L2xNKgENg</a></li>
                <li>Kayden, R. (August 23, 2020) Mediterranean home feeling. Available at: <a href="https://unsplash.com/photos/gdpFdcrpMy0" target="_blank">https://unsplash.com/photos/gdpFdcrpMy0</a></li>
                <li>Tanner, E. (January 11, 2018) Powerscourt Townhouse Center. Available at
                    <a href="https://unsplash.com/photos/RifbETTbEh0" target="_blank">https://unsplash.com/photos/RifbETTbEh0</a></li>
                <li>Lotz, G. (November 9, 2017) Pink bicycle near house. Available at:
                    <a href="https://unsplash.com/photos/iKnUqjHfvUE" target="_blank">https://unsplash.com/photos/iKnUqjHfvUE</a></li>
                <li>Nouasria, H. (August 6, 2020) Wooden table indoors. Available at:
                    <a href="https://unsplash.com/photos/P2mIRmNIIPQ" target="_blank">https://unsplash.com/photos/P2mIRmNIIPQ</a></li>
                <li>Schreiber, J. (March 26, 2018) Blue and white thread. Available at:
                    <a href="https://unsplash.com/photos/JE4iHJE-knI" target="_blank">https://unsplash.com/photos/JE4iHJE-knI</a></li>
            </ul>
            <p>Parts of information about the fictional Chollerton Tearooms are generated using automated tools for placeholder purposes.</p>
            <h2>Security Considerations</h2>
            <h3>Current Implementations</h3>
            <ul>
                <li><a href="find-out-more.php">Form</a> is validated using both native validation (html attributes) and using additional php server-side validation. All inputs are retrived from $_REQUEST arrays, and are stored into individual variables. Before assigned, data are validated to reduce likeliness of a garbage-in-garbage-out result. However, View requests page should be restricted using an authentication method for more secure data access.
                </li>
            </ul>
            <h3>Further Considerations</h3>
            <ul>
                <li>A valid security certificate needed for website to enable secure protocols and to encrypt the connection between the client browser and servers. This could prevent anyone monitoring the session data from getting sensitive information requests and responses sent to and from the server to the browser. (Cloudflare, n.d.)</li>
                <li>Application of a Web Application Firewall may also provide extra protection to the servers against unwanted traffic including bots, which can be fatal to network security (Geer, 2005), and potential threats of database being hacked or accessed by unauthorized connection. Chollerton Tearooms could use a cloud WAF service such as Cloudflare, Amazon Web Services WAF to protect their servers. If they use a third-party hosting provider, WAF may be built in at the first place.</li>
                <li>Logging user access may help identify vulnerabilities if the website is accidentally broken by someone with internal access.  Sometimes, not all employees with access to the system of Chollerton know website security. When they happen to make a mistake, this could result a significant security issue. If not tracked properly, the issue may become an unidentified vulnerability. </li>
                <li>Even though the forms of Chollerton are valided by server-side scripting, it may not be safe enough from spamming issues. If there isn’t a mechanism for detecting and eliminating spam, the website may be risking being ranked lower and flagged as a spam website by Google and other major search engines (Google for Developers, n.d.) One solution is to integrate spam detection tools like CAPTCHA (I’m not a robot checkbox), and anti-spam plugins if they are using CMS like WordPress. </li>
                <li>To prevent the website from losing all of its data permanently in an unexpected attack, Chollerton could also use a back-up service to keep their website safe in a secondary storage. When it’s also an option to back up data in a physical server, it is now recommended to store back up data in cloud services where it’s safer and cheaper to store data. Data backups are considered one of the most important cyber security implementations for small business. (National Cyber Security Centre, n.d.)  </li>
                <li>To comply with rules and regulations of user privacy, Chollerton can follow UK General Data Protection Regulations (also known as GDPR). That includes developing a privacy policy for the website and prompting users for consent to use cookies to store session data for some functions like logins and form processing. Compliance to data protection rules can gain more customer trust and increased credibility for the business’s online presence (French, D., 2022).</li>
            </ul>
            <h3>References</h3>
            <ul>
                <li>Cloudflare (n.d.) Why is HTTP not secure? | HTTP vs. HTTPS. Cloudflare. Available at:
                    <a href="https://www.cloudflare.com/en-gb/learning/ssl/why-is-http-not-secure/" target="_blank">https://www.cloudflare.com/en-gb/learning/ssl/why-is-http-not-secure/</a></li>

                <li>Geer, D. (2005) “Malicious bots threaten network security,” Computer, 38(1), pp. 18–20.
                    doi:10.1109/mc.2005.26.</li>

                <li>Spam Policies for Google Web Search | Google Search Central | Documentation | Google for Developers
                    (no date) Google for Developers. Available at:
                    <a href="https://developers.google.com/search/docs/essentials/spam-policies." target="_blank">https://developers.google.com/search/docs/essentials/spam-policies.</a></li>

                <li>National Cyber Security Centre (no date) Step 1 - Backing up your data. Small Business Guide: Cyber
                    Security. Available at:
                    <a href="https://www.ncsc.gov.uk/collection/small-business-guide/backing-your-data#" target="_blank">https://www.ncsc.gov.uk/collection/small-business-guide/backing-your-data#</a></li>
                <li>French, D. (2022) How to make a website GDPR compliant. Tom’s Guide. Available at: <a href="https://www.tomsguide.com/how-to/how-to-make-a-website-gdpr-compliant" target="_blank">https://www.tomsguide.com/how-to/how-to-make-a-website-gdpr-compliant</a></li>
            </ul>

        </div>

    </section>
</div>

<?php include "footer.php"; ?>