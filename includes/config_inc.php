<?php
function getFooter(): void {
?>
<footer id="footer" class="footer light-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
                <a href="index.php" class="logo d-flex align-items-center">
                    <span class="sitename">PrintMaster</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>123 Print Lane, Industrial Area</p>
                    <p>Mumbai, Maharashtra, India</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+91 98765 43210</span></p>
                    <p><strong>Email:</strong> <span>contact@printmaster.in</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#about">About Us</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="index.php#terms">Terms of Service</a></li>
                    <li><a href="index.php#privacy">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="index.php#services">Flex Printing</a></li>
                    <li><a href="index.php#services">Mug Printing</a></li>
                    <li><a href="index.php#services">T-Shirt Printing</a></li>
                    <li><a href="index.php#services">Eco Printing</a></li>
                    <li><a href="index.php#services">Digital Printing</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>Get Latest News regarding PrintMaster</p>
                <div class="newsletter-form">
                    <input type="email" name="newsletter" placeholder="Your email">
                    <button type="submit" style="background-color: #3FBBC0; color: #ffffff;">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-start">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Vikas Advertising</strong>. <span>All Rights
                        Reserved</span></p>
                <div class="credits">
                    Designed by <a href="#">Vikas Advertising Team</a> with ❤️
                </div>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="skype"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    </div>
</footer>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<?php
}
?>