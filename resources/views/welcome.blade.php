<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A global sourcing and distribution partner for high-demand consumer electronics.">
    <title>Global Supply Partner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="topbar">
        <div class="topbar__inner shell">
            <a class="brand" href="#top" aria-label="Home">LOGO</a>
            <nav class="nav" aria-label="Main navigation">
                <a href="#products">Product</a>
                <a href="#solution">What We Do</a>
                <a href="#why-us">Why Us</a>
                <a href="#solution">How It Works</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main id="top">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero__inner shell">
                <div class="hero__copy">
                    <h1 id="hero-title" class="display">Your Trusted Global Supply Partner</h1>
                    <p>We are a specialist sourcing and distribution partner supplying high-demand consumer electronics from Asia to distributors, wholesalers, and online merchants across Europe.</p>
                    <a class="button" href="#contact">Contact us</a>
                </div>
                <div class="hero__art" aria-hidden="true">
                    <img class="hero__display" src="{{ asset('images/figma/hero-display.png') }}" alt="">
                    <img class="hero__devices" src="{{ asset('images/figma/hero-devices.png') }}" alt="">
                    <img class="hero__phone" src="{{ asset('images/figma/hero-phone.png') }}" alt="">
                </div>
            </div>
        </section>

        <div class="benefit-strip" aria-label="Service highlights">
            <div class="benefit-strip__inner">
                <div class="benefit"><img src="{{ asset('images/figma/logistics.png') }}" alt=""><span>Flexible Logistics</span></div>
                <div class="benefit"><img src="{{ asset('images/figma/package.svg') }}" alt=""><span>Strategic Sourcing</span></div>
                <div class="benefit"><img src="{{ asset('images/figma/experience.svg') }}" alt=""><span>Proven experience</span></div>
            </div>
        </div>

        <section class="products shell" id="products" aria-labelledby="products-title">
            <h2 class="section-heading display" id="products-title">Our Product Categories</h2>
            <div class="product-grid">
                <article class="product-card product-card--mobile">
                    <div class="product-card__content">
                        <h3 class="display">Mobile Devices &amp; Tablets</h3>
                        <p>We supply a broad range of smartphones and tablets, including both new and professionally refurbished units. Our focus is on reliable, high-demand stock suitable for resale across European markets.</p>
                        <ul class="check-list">
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">New and refurbished smartphones</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Tablets across major global brands</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Graded stock with quality control</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Consistent supply of fast-moving models</li>
                        </ul>
                    </div>
                </article>
                <article class="product-card product-card--laptop">
                    <div class="product-card__content">
                        <h3 class="display">Laptops &amp; Premium Computing</h3>
                        <p>We supply high-demand laptops from Tier 1 global manufacturers, including both new and refurbished units. Our focus is on commercially viable models with strong resale value.</p>
                        <ul class="check-list">
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Apple MacBook and other Tier 1 laptop brands</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Drones and smart devices</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Cooling appliances</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">High-demand products</li>
                        </ul>
                    </div>
                    <img class="product-laptop" src="{{ asset('images/figma/laptop.png') }}" alt="" aria-hidden="true">
                </article>
                <article class="product-card product-card--consumer">
                    <div class="product-card__content">
                        <h3 class="display">Consumer Electronics</h3>
                        <p>We offer a range of fast-moving consumer electronics aligned with current market demand, suitable for both retail and e-commerce channels.</p>
                        <ul class="check-list">
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Robotic vacuum cleaners</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Drones and smart devices</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Cooling appliances</li>
                            <li><img src="{{ asset('images/figma/check.svg') }}" alt="">High-demand products</li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>

        <section class="solution shell" id="solution" aria-labelledby="solution-title">
            <h2 class="section-heading display" id="solution-title">A Complete End-to-End Solution</h2>
            <p class="section-copy">We operate as a one-stop shop, managing the full sourcing and supply process from origin to final delivery.</p>
            <div class="solution-grid">
                <article class="solution-card solution-card--navy">
                    <img class="solution-card__icon" src="{{ asset('images/figma/customs.svg') }}" alt="">
                    <h3 class="display">Customs &amp; Compliance</h3>
                    <p>We manage customs clearance and regulatory requirements, ensuring efficient and compliant entry into European markets.</p>
                </article>
                <article class="solution-card solution-card--teal">
                    <img class="solution-card__icon" src="{{ asset('images/figma/cart.svg') }}" alt="">
                    <h3 class="display">Sourcing &amp; Procurement</h3>
                    <p>Clients can purchase directly from our available inventory or submit specific sourcing requests. We leverage our supplier network across Asia to secure the required products efficiently.</p>
                </article>
                <div class="solution-grid__bottom">
                    <article class="solution-card solution-card--black">
                        <img class="solution-card__icon solution-card__icon--large" src="{{ asset('images/figma/delivery.svg') }}" alt="">
                        <h3 class="display">Fulfillment Support</h3>
                        <p>For e-commerce businesses, we can connect clients with established fulfillment partners across Europe, supporting storage, order processing, and last-mile delivery.</p>
                    </article>
                    <article class="logistics-card">
                        <img src="{{ asset('images/figma/warehouse.png') }}" alt="" aria-hidden="true" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;">
                        <div aria-hidden="true" style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0, 0, 0, .84), rgba(0, 0, 0, .4) 57%, transparent);"></div>
                        <div class="logistics-card__content">
                            <h3 class="display">Flexible Logistics</h3>
                            <p>We provide delivery solutions tailored to your operational setup:</p>
                            <ul class="check-list">
                                <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Delivery to your nominated forwarder in Asia</li>
                                <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Direct shipment to Europe</li>
                                <li><img src="{{ asset('images/figma/check.svg') }}" alt="">Consolidation and freight coordination</li>
                            </ul>
                            <a class="button" href="#contact">Contact us</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="why shell" id="why-us" aria-labelledby="why-title">
            <h2 class="section-heading display" id="why-title">Why Work With Us</h2>
            <div class="why-grid">
                <article class="why-card"><img src="{{ asset('images/figma/why-star.svg') }}" alt=""><p>Proven experience in global sourcing and logistics.</p></article>
                <article class="why-card"><img src="{{ asset('images/figma/why-map.svg') }}" alt=""><p>Established supplier network across Asia.</p></article>
                <article class="why-card"><img src="{{ asset('images/figma/why-user.svg') }}" alt=""><p>End-to-end operational capability.</p></article>
                <article class="why-card"><img src="{{ asset('images/figma/why-bag.svg') }}" alt=""><p>Scalable solutions for growing and established businesses.</p></article>
            </div>
        </section>

        <section class="contact shell" id="contact" aria-labelledby="contact-title">
            <h2 class="section-heading display" id="contact-title">Contact</h2>
            <p class="section-copy">To request inventory, discuss sourcing requirements, or explore partnership opportunities, contact our team.</p>
            <div class="contact-layout">
                <div class="contact-photo" role="img" aria-label="A busy international shipping yard">
                    <img src="{{ asset('images/figma/contact-yard.png') }}" alt="" aria-hidden="true" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <form class="contact-form" id="contact-form">
                    <h3 class="display">Let's Connect.</h3>
                    <div class="contact-form__row">
                        <input class="field" type="text" name="name" placeholder="Name" aria-label="Name" required>
                        <input class="field" type="email" name="email" placeholder="Email" aria-label="Email" required>
                    </div>
                    <input class="field" type="tel" name="phone" placeholder="Phone number" aria-label="Phone number">
                    <input class="field" type="text" name="location" placeholder="Location" aria-label="Location">
                    <textarea class="field" name="comments" placeholder="Comments" aria-label="Comments"></textarea>
                    <button class="button" type="submit">Send</button>
                    <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__accent"></div>
        <div class="footer__body">
            <div class="footer__inner shell">
                <div class="footer__links">
                    <div>
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#top">About Us</a></li>
                            <li><a href="#why-us">Why Work With Us</a></li>
                            <li><a href="#why-us">Our Network</a></li>
                            <li><a href="#contact">Our Clients</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Quick links</h4>
                        <ul>
                            <li><a href="#products">Product Categories</a></li>
                            <li><a href="#solution">What We Do</a></li>
                            <li><a href="#solution">End-to-End Solution</a></li>
                            <li><a href="#why-us">Our Approach</a></li>
                            <li><a href="#solution">How It Works</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Let's Connect</h4>
                        <ul><li><a href="#contact">Contact</a></li></ul>
                    </div>
                </div>
                <p class="footer__logo display">LOGO</p>
                <p class="footer__copyright">© Copyright 2026. All rights reserved</p>
                <div class="footer__rule"></div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault();
            document.getElementById('form-status').textContent = 'Thanks — your message is ready to be sent.';
        });
    </script>
</body>
</html>
