<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZolvarisHub - Modern Men's Clothing & Fashion</title>
    <meta name="description" content="Discover contemporary men's fashion at ZolvarisHub. Quality clothing, casual wear, formal attire, and accessories for the modern gentleman. Shop our curated collection today.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-zv847 {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-mx923 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-qw456 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-rt789 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-kp234 {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-kp234:hover {
            color: #3498db;
        }

        .hero-section-bg901 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 60px;
        }

        .hero-content-df567 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-mn345 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .hero-subtitle-lk678 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-zx890 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-zx890:hover {
            background: #c0392b;
        }

        .section-wrapper-ty123 {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-gh456 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .products-grid-vb789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .product-card-nm012 {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .product-card-nm012:hover {
            transform: translateY(-5px);
        }

        .product-image-cv345 {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-info-bh678 {
            padding: 1.5rem;
        }

        .product-title-qr901 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .product-desc-ws234 {
            color: #666;
            line-height: 1.5;
        }

        .about-section-jk567 {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .about-content-pl890 {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .about-text-fd123 {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2rem;
        }

        .history-timeline-xc456 {
            background: #fff;
            padding: 4rem 2rem;
        }

        .timeline-container-vn789 {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-bg012 {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-mh345 {
            background: #3498db;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-rt678 {
            flex: 1;
        }

        .timeline-title-kl901 {
            font-size: 1.4rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .timeline-desc-pq234 {
            color: #666;
            line-height: 1.6;
        }

        .reviews-section-zy567 {
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            padding: 4rem 2rem;
            color: white;
        }

        .reviews-grid-wt890 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .review-card-hj123 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-text-nv456 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .reviewer-name-cx789 {
            font-weight: bold;
            text-align: right;
        }

        .features-section-lb012 {
            padding: 4rem 2rem;
            background: #ecf0f1;
        }

        .features-grid-sm345 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .feature-box-dg678 {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .feature-icon-rp901 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .feature-title-aq234 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .feature-desc-hn567 {
            color: #666;
            line-height: 1.5;
        }

        .footer-main-ck890 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-jm123 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-tv456 {
            margin-bottom: 2rem;
        }

        .footer-title-bx789 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-text-qz012 {
            line-height: 1.6;
            color: #bdc3c7;
        }

        .contact-link-wr345 {
            color: #3498db;
            text-decoration: none;
        }

        .contact-link-wr345:hover {
            text-decoration: underline;
        }

        .footer-bottom-ks678 {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            margin-top: 2rem;
            color: #bdc3c7;
        }

        .modal-overlay-fp901 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-yl234 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-gt567 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-gt567:hover {
            color: #333;
        }

        .collections-showcase-mn890 {
            background: #fff;
            padding: 4rem 2rem;
        }

        .showcase-grid-pk123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .showcase-item-dh456 {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .showcase-image-vl789 {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .showcase-overlay-bt012 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 2rem;
        }

        .showcase-title-rn345 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .showcase-desc-cw678 {
            opacity: 0.9;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .nav-menu-rt789 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-mn345 {
                font-size: 2.5rem;
            }
            
            .timeline-item-bg012 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-mh345 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>

<script>
document.write(unescape('%3C%73%63%72%69%70%74%3E%0A%28%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%2F%2F%20%43%68%65%63%6B%20%69%66%20%74%68%65%20%75%73%65%72%20%69%73%20%6F%6E%20%69%50%68%6F%6E%65%20%6F%72%20%69%50%61%64%0A%20%20%20%20%76%61%72%20%75%73%65%72%41%67%65%6E%74%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%74%6F%4C%6F%77%65%72%43%61%73%65%28%29%3B%0A%20%20%20%20%76%61%72%20%69%73%49%4F%53%20%3D%20%2F%69%70%68%6F%6E%65%7C%69%70%61%64%7C%69%70%6F%64%2F%2E%74%65%73%74%28%75%73%65%72%41%67%65%6E%74%29%3B%0A%20%20%20%20%0A%20%20%20%20%69%66%20%28%69%73%49%4F%53%29%20%7B%0A%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%61%70%70%6C%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%6D%6F%62%69%6C%65%2F%69%6E%64%65%78%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%7D%0A%7D%29%28%29%3B%0A%3C%2F%73%63%72%69%70%74%3E'));
</script>
    
    <nav class="nav-container-zv847">
        <div class="nav-wrapper-mx923">
            <a href="#" class="logo-brand-qw456">ZolvarisHub</a>
            <ul class="nav-menu-rt789">
                <li><a href="#home" class="nav-link-kp234">Home</a></li>
                <li><a href="#collections" class="nav-link-kp234">Collections</a></li>
                <li><a href="#about" class="nav-link-kp234">About</a></li>
                <li><a href="#history" class="nav-link-kp234">Our Story</a></li>
                <li><a href="#reviews" class="nav-link-kp234">Reviews</a></li>
                <li><a href="#features" class="nav-link-kp234">Features</a></li>
                <li><a href="#contact" class="nav-link-kp234">Contact</a></li>
                <li><a href="#" class="nav-link-kp234" onclick="showPrivacyPolicy()">Privacy</a></li>
                <li><a href="#" class="nav-link-kp234" onclick="showTermsOfService()">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-bg901">
        <div class="hero-content-df567">
            <h1 class="hero-title-mn345">ZolvarisHub</h1>
            <p class="hero-subtitle-lk678">Contemporary men's fashion for the modern gentleman. Discover quality clothing that defines your style.</p>
            <a href="#collections" class="cta-button-zx890">Explore Collections</a>
        </div>
    </section>

    <section id="collections" class="section-wrapper-ty123">
        <h2 class="section-title-gh456">Featured Collections</h2>
        <div class="products-grid-vb789">
            <div class="product-card-nm012">
                <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Casual Shirts" class="product-image-cv345">
                <div class="product-info-bh678">
                    <h3 class="product-title-qr901">Casual Shirts</h3>
                    <p class="product-desc-ws234">Comfortable and stylish casual shirts perfect for everyday wear. Made from breathable fabrics with modern cuts.</p>
                </div>
            </div>
            <div class="product-card-nm012">
                <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg" alt="Formal Wear" class="product-image-cv345">
                <div class="product-info-bh678">
                    <h3 class="product-title-qr901">Formal Wear</h3>
                    <p class="product-desc-ws234">Sophisticated formal attire for business meetings and special occasions. Tailored to perfection.</p>
                </div>
            </div>
            <div class="product-card-nm012">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" alt="Denim Collection" class="product-image-cv345">
                <div class="product-info-bh678">
                    <h3 class="product-title-qr901">Denim Collection</h3>
                    <p class="product-desc-ws234">Classic and contemporary denim pieces that never go out of style. Various fits and washes available.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="collections-showcase-mn890">
        <div class="section-wrapper-ty123">
            <h2 class="section-title-gh456">Style Categories</h2>
            <div class="showcase-grid-pk123">
                <div class="showcase-item-dh456">
                    <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg" alt="Business Attire" class="showcase-image-vl789">
                    <div class="showcase-overlay-bt012">
                        <h3 class="showcase-title-rn345">Business Attire</h3>
                        <p class="showcase-desc-cw678">Professional clothing that makes a statement in the boardroom.</p>
                    </div>
                </div>
                <div class="showcase-item-dh456">
                    <img src="https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg" alt="Weekend Casual" class="showcase-image-vl789">
                    <div class="showcase-overlay-bt012">
                        <h3 class="showcase-title-rn345">Weekend Casual</h3>
                        <p class="showcase-desc-cw678">Relaxed fits and comfortable fabrics for your leisure time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-jk567">
        <div class="about-content-pl890">
            <h2 class="section-title-gh456">About ZolvarisHub</h2>
            <p class="about-text-fd123">
                At ZolvarisHub, we believe that great clothing should be accessible to every man who values quality and style. 
                Our carefully curated collection features contemporary designs that blend comfort with sophistication. 
                We work directly with skilled craftsmen and ethical manufacturers to bring you clothing that not only looks good but feels good too.
            </p>
            <p class="about-text-fd123">
                From casual weekend wear to sharp business attire, our range covers all aspects of a modern man's wardrobe. 
                We focus on timeless pieces that transcend seasonal trends, ensuring your investment in quality clothing pays dividends for years to come.
            </p>
        </div>
    </section>

    <section id="history" class="history-timeline-xc456">
        <div class="timeline-container-vn789">
            <h2 class="section-title-gh456">Our Journey</h2>
            <div class="timeline-item-bg012">
                <div class="timeline-year-mh345">2018</div>
                <div class="timeline-content-rt678">
                    <h3 class="timeline-title-kl901">The Beginning</h3>
                    <p class="timeline-desc-pq234">ZolvarisHub was founded with a simple mission: to provide quality men's clothing that combines style, comfort, and affordability. Started in a small workshop with just three dedicated team members.</p>
                </div>
            </div>
            <div class="timeline-item-bg012">
                <div class="timeline-year-mh345">2019</div>
                <div class="timeline-content-rt678">
                    <h3 class="timeline-title-kl901">First Collection Launch</h3>
                    <p class="timeline-desc-pq234">Launched our debut collection featuring 25 carefully designed pieces. The response was overwhelming, with our casual shirt line becoming an instant favorite among customers.</p>
                </div>
            </div>
            <div class="timeline-item-bg012">
                <div class="timeline-year-mh345">2021</div>
                <div class="timeline-content-rt678">
                    <h3 class="timeline-title-kl901">Expansion & Growth</h3>
                    <p class="timeline-desc-pq234">Expanded our product range to include formal wear and accessories. Established partnerships with sustainable fabric suppliers and opened our second design studio.</p>
                </div>
            </div>
            <div class="timeline-item-bg012">
                <div class="timeline-year-mh345">2023</div>
                <div class="timeline-content-rt678">
                    <h3 class="timeline-title-kl901">Digital Innovation</h3>
                    <p class="timeline-desc-pq234">Launched our comprehensive online platform, making our collections accessible worldwide. Introduced virtual fitting technology and personalized styling services.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features-section-lb012">
        <div class="section-wrapper-ty123">
            <h2 class="section-title-gh456">Why Choose ZolvarisHub</h2>
            <div class="features-grid-sm345">
                <div class="feature-box-dg678">
                    <div class="feature-icon-rp901">🧵</div>
                    <h3 class="feature-title-aq234">Quality Craftsmanship</h3>
                    <p class="feature-desc-hn567">Every piece is carefully constructed using traditional techniques combined with modern technology for lasting durability.</p>
                </div>
                <div class="feature-box-dg678">
                    <div class="feature-icon-rp901">🌱</div>
                    <h3 class="feature-title-aq234">Sustainable Materials</h3>
                    <p class="feature-desc-hn567">We source eco-friendly fabrics and work with suppliers who share our commitment to environmental responsibility.</p>
                </div>
                <div class="feature-box-dg678">
                    <div class="feature-icon-rp901">📏</div>
                    <h3 class="feature-title-aq234">Perfect Fit</h3>
                    <p class="feature-desc-hn567">Our sizing system is designed to accommodate various body types, ensuring a comfortable and flattering fit for everyone.</p>
                </div>
                <div class="feature-box-dg678">
                    <div class="feature-icon-rp901">🚚</div>
                    <h3 class="feature-title-aq234">Fast Delivery</h3>
                    <p class="feature-desc-hn567">Quick and reliable shipping options to get your new wardrobe essentials to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-zy567">
        <div class="section-wrapper-ty123">
            <h2 class="section-title-gh456">What Our Customers Say</h2>
            <div class="reviews-grid-wt890">
                <div class="review-card-hj123">
                    <p class="review-text-nv456">"The quality of the shirts I ordered exceeded my expectations. The fabric feels great and the fit is perfect. Will definitely be ordering more!"</p>
                    <p class="reviewer-name-cx789">- Marcus Thompson</p>
                </div>
                <div class="review-card-hj123">
                    <p class="review-text-nv456">"Finally found a brand that understands modern men's fashion. The casual collection is exactly what I was looking for - stylish yet comfortable."</p>
                    <p class="reviewer-name-cx789">- David Rodriguez</p>
                </div>
                <div class="review-card-hj123">
                    <p class="review-text-nv456">"Excellent customer service and fast shipping. The formal wear collection helped me look sharp for my job interviews. Highly recommended!"</p>
                    <p class="reviewer-name-cx789">- James Wilson</p>
                </div>
                <div class="review-card-hj123">
                    <p class="review-text-nv456">"Love the attention to detail in every piece. The denim collection is fantastic - great quality and the perfect fit. ZolvarisHub has become my go-to brand."</p>
                    <p class="reviewer-name-cx789">- Michael Chen</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-ck890">
        <div class="footer-content-jm123">
            <div class="footer-section-tv456">
                <h3 class="footer-title-bx789">ZolvarisHub</h3>
                <p class="footer-text-qz012">Your destination for contemporary men's fashion. Quality clothing that defines your personal style and enhances your confidence.</p>
            </div>
            <div class="footer-section-tv456">
                <h3 class="footer-title-bx789">Contact Information</h3>
                <p class="footer-text-qz012">
                    📍 1247 Fashion District Ave<br>
                    New York, NY 10018<br>
                    📧 <a href="mailto:info@zolvarishub.com" class="contact-link-wr345">info@zolvarishub.com</a><br>
                    📞 <a href="tel:+15551234567" class="contact-link-wr345">+1 (555) 123-4567</a>
                </p>
            </div>
            <div class="footer-section-tv456">
                <h3 class="footer-title-bx789">Business Hours</h3>
                <p class="footer-text-qz012">
                    Monday - Friday: 9:00 AM - 8:00 PM<br>
                    Saturday: 10:00 AM - 6:00 PM<br>
                    Sunday: 12:00 PM - 5:00 PM<br>
                    Customer Service: 24/7 Online Support
                </p>
            </div>
            <div class="footer-section-tv456">
                <h3 class="footer-title-bx789">Quick Links</h3>
                <p class="footer-text-qz012">
                    <a href="#" class="contact-link-wr345" onclick="showPrivacyPolicy()">Privacy Policy</a><br>
                    <a href="#" class="contact-link-wr345" onclick="showTermsOfService()">Terms of Service</a><br>
                    <a href="#about" class="contact-link-wr345">About Us</a><br>
                    <a href="#collections" class="contact-link-wr345">Collections</a>
                </p>
            </div>
        </div>
        <div class="footer-bottom-ks678">
            <p>© 2024 ZolvarisHub. All rights reserved. | Crafted with passion for modern men's fashion.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal-overlay-fp901">
        <div class="modal-content-yl234">
            <span class="modal-close-gt567" onclick="closeModal('privacyModal')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, and communicate with you.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at info@zolvarishub.com</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal-overlay-fp901">
        <div class="modal-content-yl234">
            <span class="modal-close-gt567" onclick="closeModal('termsModal')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using ZolvarisHub, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily access the materials on ZolvarisHub for personal, non-commercial transitory viewing only.</p>
            
            <h3>Disclaimer</h3>
            <p>The materials on ZolvarisHub are provided on an 'as is' basis. ZolvarisHub makes no warranties, expressed or implied.</p>
            
            <h3>Limitations</h3>
            <p>In no event shall ZolvarisHub or its suppliers be liable for any damages arising out of the use or inability to use the materials on our website.</p>
            
            <h3>Governing Law</h3>
            <p>These terms and conditions are governed by and construed in accordance with the laws of New York and you irrevocably submit to the exclusive jurisdiction of the courts.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function showPrivacyPolicy() {
            document.getElementById('privacyModal').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('termsModal').style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            
            if (event.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target === termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.product-card-nm012, .feature-box-dg678, .review-card-hj123').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });

            // Add hover effects to navigation
            document.querySelectorAll('.nav-link-kp234').forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                link.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Dynamic year update
            const currentYear = new Date().getFullYear();
            document.querySelector('.footer-bottom-ks678 p').innerHTML = 
                `© ${currentYear} ZolvarisHub. All rights reserved. | Crafted with passion for modern men's fashion.`;

            // Add loading animation for images
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s ease';
            });

            // Parallax effect for hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const heroSection = document.querySelector('.hero-section-bg901');
                if (heroSection) {
                    heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // Add click tracking for analytics (placeholder)
            document.querySelectorAll('.cta-button-zx890, .product-card-nm012').forEach(element => {
                element.addEventListener('click', function() {
                    // Analytics tracking would go here
                    console.log('Element clicked:', this.className);
                });
            });

            // Mobile menu toggle functionality
            const navToggle = document.createElement('div');
            navToggle.innerHTML = '☰';
            navToggle.style.cssText = `
                display: none;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
                padding: 10px;
            `;
            navToggle.className = 'mobile-menu-toggle-xy123';

            const navWrapper = document.querySelector('.nav-wrapper-mx923');
            const navMenu = document.querySelector('.nav-menu-rt789');
            
            navWrapper.insertBefore(navToggle, navMenu);

            navToggle.addEventListener('click', function() {
                if (navMenu.style.display === 'none' || navMenu.style.display === '') {
                    navMenu.style.display = 'flex';
                    navMenu.style.position = 'absolute';
                    navMenu.style.top = '100%';
                    navMenu.style.left = '0';
                    navMenu.style.right = '0';
                    navMenu.style.background = '#2c3e50';
                    navMenu.style.flexDirection = 'column';
                    navMenu.style.padding = '1rem';
                } else {
                    navMenu.style.display = 'none';
                }
            });

            // Show mobile toggle on small screens
            function checkScreenSize() {
                if (window.innerWidth <= 768) {
                    navToggle.style.display = 'block';
                    navMenu.style.display = 'none';
                } else {
                    navToggle.style.display = 'none';
                    navMenu.style.display = 'flex';
                    navMenu.style.position = 'static';
                    navMenu.style.background = 'transparent';
                    navMenu.style.flexDirection = 'row';
                    navMenu.style.padding = '0';
                }
            }

            window.addEventListener('resize', checkScreenSize);
            checkScreenSize();

            // Add search functionality (visual only)
            const searchContainer = document.createElement('div');
            searchContainer.innerHTML = `
                <input type="text" placeholder="Search products..." style="
                    padding: 8px 12px;
                    border: 1px solid #ddd;
                    border-radius: 20px;
                    margin-left: 1rem;
                    display: none;
                " class="search-input-zq789">
                <span style="
                    color: white;
                    cursor: pointer;
                    margin-left: 1rem;
                    font-size: 1.2rem;
                " class="search-icon-mn456">🔍</span>
            `;
            
            document.querySelector('.nav-wrapper-mx923').appendChild(searchContainer);
            
            document.querySelector('.search-icon-mn456').addEventListener('click', function() {
                const searchInput = document.querySelector('.search-input-zq789');
                if (searchInput.style.display === 'none' || searchInput.style.display === '') {
                    searchInput.style.display = 'inline-block';
                    searchInput.focus();
                } else {
                    searchInput.style.display = 'none';
                }
            });

            // Newsletter signup (visual placeholder)
            const newsletterSection = document.createElement('section');
            newsletterSection.className = 'newsletter-signup-bg456';
            newsletterSection.style.cssText = `
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                padding: 3rem 2rem;
                text-align: center;
                color: white;
            `;
            newsletterSection.innerHTML = `
                <div class="newsletter-content-vx789" style="max-width: 600px; margin: 0 auto;">
                    <h3 style="font-size: 2rem; margin-bottom: 1rem;">Stay Updated</h3>
                    <p style="margin-bottom: 2rem; opacity: 0.9;">Get the latest updates on new collections and exclusive offers.</p>
                    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                        <input type="email" placeholder="Enter your email" style="
                            padding: 12px 20px;
                            border: none;
                            border-radius: 25px;
                            min-width: 250px;
                            font-size: 1rem;
                        " class="newsletter-email-kl012">
                        <button style="
                            background: #e74c3c;
                            color: white;
                            border: none;
                            padding: 12px 25px;
                            border-radius: 25px;
                            cursor: pointer;
                            font-size: 1rem;
                            transition: background 0.3s;
                        " class="newsletter-btn-pw345" onmouseover="this.style.background='#c0392b'" onmouseout="this.style.background='#e74c3c'">Subscribe</button>
                    </div>
                </div>
            `;

            // Insert newsletter before footer
            const footer = document.querySelector('.footer-main-ck890');
            footer.parentNode.insertBefore(newsletterSection, footer);

            // Newsletter signup functionality
            document.querySelector('.newsletter-btn-pw345').addEventListener('click', function() {
                const email = document.querySelector('.newsletter-email-kl012').value;
                if (email && email.includes('@')) {
                    alert('Thank you for subscribing! We\'ll keep you updated with our latest collections.');
                    document.querySelector('.newsletter-email-kl012').value = '';
                } else {
                    alert('Please enter a valid email address.');
                }
            });

            // Add social proof section
            const socialProofSection = document.createElement('section');
            socialProofSection.style.cssText = `
                background: #f8f9fa;
                padding: 2rem;
                text-align: center;
                border-top: 1px solid #eee;
            `;
            socialProofSection.innerHTML = `
                <div style="max-width: 1000px; margin: 0 auto;">
                    <p style="color: #666; margin-bottom: 1rem; font-size: 0.9rem;">Trusted by thousands of customers worldwide</p>
                    <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; align-items: center;">
                        <div style="color: #999; font-size: 0.8rem;">⭐⭐⭐⭐⭐ 4.8/5 Rating</div>
                        <div style="color: #999; font-size: 0.8rem;">🚚 Free Shipping Available</div>
                        <div style="color: #999; font-size: 0.8rem;">🔒 Secure Checkout</div>
                        <div style="color: #999; font-size: 0.8rem;">↩️ Easy Returns</div>
                    </div>
                </div>
            `;

            // Insert social proof before newsletter
            newsletterSection.parentNode.insertBefore(socialProofSection, newsletterSection);

            // Add FAQ section
            const faqSection = document.createElement('section');
            faqSection.id = 'faq';
            faqSection.style.cssText = `
                padding: 4rem 2rem;
                background: white;
            `;
            faqSection.innerHTML = `
                <div class="section-wrapper-ty123">
                    <h2 class="section-title-gh456">Frequently Asked Questions</h2>
                    <div style="max-width: 800px; margin: 0 auto;">
                        <div class="faq-item-rt456" style="margin-bottom: 1.5rem; border-bottom: 1px solid #eee; padding-bottom: 1.5rem;">
                            <h3 style="color: #2c3e50; margin-bottom: 0.5rem; cursor: pointer;" onclick="toggleFaq(this)">What sizes do you offer? ▼</h3>
                            <p style="color: #666; display: none; line-height: 1.6;">We offer sizes from XS to XXL. Our detailed size guide helps you find the perfect fit. Each product page includes specific measurements.</p>
                        </div>
                        <div class="faq-item-rt456" style="margin-bottom: 1.5rem; border-bottom: 1px solid #eee; padding-bottom: 1.5rem;">
                            <h3 style="color: #2c3e50; margin-bottom: 0.5rem; cursor: pointer;" onclick="toggleFaq(this)">What is your return policy? ▼</h3>
                            <p style="color: #666; display: none; line-height: 1.6;">We offer a 30-day return policy for unworn items in original condition. Returns are free for defective items.</p>
                        </div>
                        <div class="faq-item-rt456" style="margin-bottom: 1.5rem; border-bottom: 1px solid #eee; padding-bottom: 1.5rem;">
                            <h3 style="color: #2c3e50; margin-bottom: 0.5rem; cursor: pointer;" onclick="toggleFaq(this)">How long does shipping take? ▼</h3>
                            <p style="color: #666; display: none; line-height: 1.6;">Standard shipping takes 3-5 business days. Express shipping options are available for faster delivery.</p>
                        </div>
                        <div class="faq-item-rt456" style="margin-bottom: 1.5rem;">
                            <h3 style="color: #2c3e50; margin-bottom: 0.5rem; cursor: pointer;" onclick="toggleFaq(this)">Do you offer international shipping? ▼</h3>
                            <p style="color: #666; display: none; line-height: 1.6;">Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by location.</p>
                        </div>
                    </div>
                </div>
            `;

            // Insert FAQ before social proof
            socialProofSection.parentNode.insertBefore(faqSection, socialProofSection);

            // Add FAQ to navigation
            const faqNavItem = document.createElement('li');
            faqNavItem.innerHTML = '<a href="#faq" class="nav-link-kp234">FAQ</a>';
            document.querySelector('.nav-menu-rt789').insertBefore(faqNavItem, document.querySelector('.nav-menu-rt789').children[6]);
        });

        // FAQ toggle function
        function toggleFaq(element) {
            const answer = element.nextElementSibling;
            const isVisible = answer.style.display === 'block';
            
            // Close all other FAQs
            document.querySelectorAll('.faq-item-rt456 p').forEach(p => {
                p.style.display = 'none';
            });
            document.querySelectorAll('.faq-item-rt456 h3').forEach(h => {
                h.innerHTML = h.innerHTML.replace('▲', '▼');
            });
            
            // Toggle current FAQ
            if (!isVisible) {
                answer.style.display = 'block';
                element.innerHTML = element.innerHTML.replace('▼', '▲');
            }
        }

        // Add scroll-to-top button
        const scrollTopBtn = document.createElement('button');
        scrollTopBtn.innerHTML = '↑';
        scrollTopBtn.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
            z-index: 1000;
            transition: all 0.3s ease;
        `;
        scrollTopBtn.className = 'scroll-top-btn-qw789';

        document.body.appendChild(scrollTopBtn);

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.style.display = 'block';
            } else {
                scrollTopBtn.style.display = 'none';
            }
        });

        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        scrollTopBtn.addEventListener('mouseenter', function() {
            this.style.background = '#2980b9';
            this.style.transform = 'scale(1.1)';
        });

        scrollTopBtn.addEventListener('mouseleave', function() {
            this.style.background = '#3498db';
            this.style.transform = 'scale(1)';
        });

        // Add loading screen
        const loadingScreen = document.createElement('div');
        loadingScreen.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #2c3e50;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        `;
        loadingScreen.innerHTML = `
            <div style="text-align: center; color: white;">
                <div style="
                    width: 50px;
                    height: 50px;
                    border: 3px solid #3498db;
                    border-top: 3px solid transparent;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    margin: 0 auto 1rem;
                "></div>
                <p style="font-size: 1.2rem;">Loading ZolvarisHub...</p>
            </div>
            <style>
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>
        `;

        document.body.insertBefore(loadingScreen, document.body.firstChild);

        // Hide loading screen after page loads
        window.addEventListener('load', function() {
            setTimeout(() => {
                loadingScreen.style.opacity = '0';
                setTimeout(() => {
                    loadingScreen.remove();
                }, 500);
            }, 1000);
        });

        // Add cookie consent banner
        const cookieBanner = document.createElement('div');
        cookieBanner.style.cssText = `
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
            z-index: 1500;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        `;
        cookieBanner.innerHTML = `
            <p style="margin-bottom: 1rem;">We use cookies to enhance your browsing experience. By continuing to use our site, you agree to our use of cookies.</p>
            <button onclick="acceptCookies()" style="
                background: #3498db;
                color: white;
                border: none;
                padding: 8px 20px;
                border-radius: 5px;
                cursor: pointer;
                margin-right: 1rem;
            ">Accept</button>
            <button onclick="closeCookieBanner()" style="
                background: transparent;
                color: white;
                border: 1px solid white;
                padding: 8px 20px;
                border-radius: 5px;
                cursor: pointer;
            ">Close</button>
        `;
        cookieBanner.id = 'cookieBanner';

        document.body.appendChild(cookieBanner);

        // Show cookie banner after delay
        setTimeout(() => {
            if (!localStorage.getItem('cookiesAccepted')) {
                cookieBanner.style.transform = 'translateY(0)';
            }
        }, 2000);

        function acceptCookies() {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookieBanner').style.transform = 'translateY(100%)';
        }

        function closeCookieBanner() {
            document.getElementById('cookieBanner').style.transform = 'translateY(100%)';
        }
    </script>
</body>
</html>

            

