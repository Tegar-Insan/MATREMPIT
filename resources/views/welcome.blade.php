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
    <style>
        :root {
            --ink: #2b2c2d;
            --muted: #6b7280;
            --navy: #1f3a5f;
            --teal: #28666f;
            --soft-teal: #4f7c82;
            --off-white: #f3f4f5;
            --surface: #f4f6f8;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: #fff;
            color: var(--ink);
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; text-decoration: none; }
        img { display: block; }
        button, input, textarea { font: inherit; }
        .shell { width: min(1200px, calc(100% - 48px)); margin-inline: auto; }
        .display { font-family: 'Outfit', sans-serif; }

        .topbar { height: 41px; background: var(--surface); }
        .topbar__inner { height: 100%; position: relative; display: flex; align-items: center; }
        .brand { font-size: 14px; line-height: 24px; }
        .nav { position: absolute; left: 50%; display: flex; gap: 32px; transform: translateX(-50%); white-space: nowrap; }
        .nav a { font-size: 14px; line-height: 24px; transition: color .2s ease; }
        .nav a:hover, .nav a:focus-visible { color: var(--soft-teal); }

        .hero { min-height: 495px; overflow: hidden; background: #000; color: #fff; }
        .hero__inner { position: relative; min-height: 495px; }
        .hero__copy { position: absolute; z-index: 4; top: 50%; left: 0; width: 543px; transform: translateY(-50%); }
        .hero h1 { max-width: 529px; margin: 0; font-size: 55px; line-height: 1.13; font-weight: 700; letter-spacing: -.02em; }
        .hero p { max-width: 531px; margin: 25px 0 0; color: var(--off-white); font-size: 16px; font-weight: 600; line-height: 25px; }
        .button { display: inline-flex; min-height: 47px; align-items: center; justify-content: center; border: 1px solid #cfd1d9; border-radius: 76px; background: #fff; color: #374a8d; font-family: 'Outfit', sans-serif; font-size: 14px; font-weight: 600; line-height: 17px; text-transform: uppercase; transition: transform .2s ease, box-shadow .2s ease; }
        .button:hover, .button:focus-visible { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.18); }
        .hero .button { width: 198px; margin-top: 24px; }
        .hero__art { position: absolute; inset: 0; pointer-events: none; }
        .hero__display { position: absolute; top: 32px; left: 587px; width: 551px; height: 434px; object-fit: contain; }
        .hero__devices { position: absolute; top: 196px; left: 882px; width: 295px; height: 223px; object-fit: contain; }
        .hero__phone { position: absolute; top: 252px; left: 1093px; width: 112px; height: 205px; object-fit: contain; }

        .benefit-strip { height: 63px; background: #6b7280; color: #fff; }
        .benefit-strip__inner { width: min(788px, calc(100% - 48px)); height: 100%; margin-inline: auto; display: flex; align-items: center; justify-content: space-between; }
        .benefit { display: flex; align-items: center; gap: 8px; font-size: 16px; font-weight: 600; line-height: 21px; white-space: nowrap; }
        .benefit img { width: 35px; height: 35px; object-fit: contain; }

        .section-heading { margin: 0; text-align: center; font-size: 40px; font-weight: 600; line-height: 42px; }
        .section-copy { width: min(468px, 100%); margin: 19px auto 0; color: var(--muted); font-size: 16px; font-weight: 500; line-height: 26px; text-align: center; }

        .products { padding-top: 64px; }
        .product-grid { width: calc(100% + 49px); min-height: 610px; margin-top: 55px; margin-left: -25px; display: grid; grid-template-columns: 36.1% 37.7% 26.2%; overflow: hidden; border-radius: 20px; background: #000; color: #fff; }
        .product-card { position: relative; min-width: 0; overflow: hidden; padding: 49px 38px; }
        .product-card--mobile { background: var(--soft-teal); }
        .product-card--mobile::after { content: ''; position: absolute; inset: 0; background: url('/images/figma/phones-bg.png') center/cover no-repeat; opacity: .15; }
        .product-card--laptop { padding-inline: 52px 38px; background: #000; }
        .product-card--consumer { background: var(--navy); }
        .product-card__content { position: relative; z-index: 2; }
        .product-card h3 { min-height: 100px; margin: 0; font-size: 40px; font-weight: 600; line-height: 50px; }
        .product-card p { margin: 25px 0 0; color: var(--off-white); font-size: 14px; font-weight: 500; line-height: 24px; }
        .check-list { margin: 25px 0 0; padding: 0; display: grid; gap: 7px; list-style: none; }
        .check-list li { display: flex; gap: 6px; align-items: center; color: var(--off-white); font-size: 15px; font-weight: 500; line-height: 26px; }
        .check-list img { width: 17px; height: 17px; flex: 0 0 17px; }
        .product-card--consumer { padding-inline: 42px 25px; }
        .product-laptop { position: absolute; z-index: 1; right: -112px; bottom: -210px; width: 575px; height: auto; pointer-events: none; }

        .solution { padding-top: 110px; }
        .solution-grid { margin-top: 56px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 17px; }
        .solution-card { min-height: 293px; border-radius: 20px; color: #fff; padding: 40px 24px; }
        .solution-card--navy { background: var(--navy); }
        .solution-card--teal { background: var(--teal); }
        .solution-card--black { background: #000; }
        .solution-card__icon { width: 35px; height: 35px; object-fit: contain; }
        .solution-card__icon--large { width: 38px; height: 38px; }
        .solution-card h3 { max-width: 260px; margin: 11px 0 0; font-size: 27px; line-height: 33px; font-weight: 600; }
        .solution-card p { margin: 10px 0 0; color: var(--off-white); font-size: 15px; font-weight: 500; line-height: 26px; }
        .solution-grid__bottom { grid-column: 1 / -1; display: grid; grid-template-columns: 387px minmax(0, 1fr); gap: 16px; }
        .solution-grid__bottom .solution-card { min-height: 377px; padding: 35px 24px; }
        .logistics-card { position: relative; min-height: 377px; overflow: hidden; border-radius: 20px; color: #fff; }
        .logistics-card::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,.84), rgba(0,0,0,.4) 57%, transparent), url('/images/figma/warehouse.png') center/cover no-repeat; }
        .logistics-card__content { position: relative; z-index: 1; width: 66%; padding: 47px 34px; }
        .logistics-card h3 { margin: 0; font-size: 27px; font-weight: 600; line-height: 33px; }
        .logistics-card p { margin: 15px 0 0; color: var(--off-white); font-size: 15px; font-weight: 500; line-height: 26px; }
        .logistics-card .check-list { margin-top: 7px; }
        .logistics-card .button { width: 187px; margin-top: 15px; border: 0; }

        .why { padding-top: 110px; }
        .why-grid { margin-top: 77px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 17px; }
        .why-card { min-height: 243px; padding: 52px 26px 30px; border-radius: 20px; color: var(--off-white); }
        .why-card:nth-child(1) { background: var(--teal); }
        .why-card:nth-child(2) { background: var(--navy); }
        .why-card:nth-child(3) { background: #6b7280; }
        .why-card:nth-child(4) { background: #000; }
        .why-card img { width: 35px; height: 35px; object-fit: contain; }
        .why-card p { margin: 20px 5px 0; font-size: 15px; font-weight: 500; line-height: 26px; }

        .contact { padding-top: 28px; }
        .contact-layout { margin-top: 48px; display: grid; grid-template-columns: minmax(0, 788px) 394px; gap: 12px; }
        .contact-photo { min-height: 431px; overflow: hidden; border-radius: 20px; background: linear-gradient(180deg, rgba(102,102,102,.09), rgba(0,0,0,.66)), url('/images/figma/contact-yard.png') center/cover no-repeat; }
        .contact-form { min-height: 431px; padding: 35px 27px; border: 1px solid #212c55; border-radius: 20px; background: var(--navy); color: #fff; }
        .contact-form h3 { margin: 0 0 18px; color: var(--off-white); font-size: 24px; font-weight: 600; line-height: 30px; }
        .contact-form__row { display: grid; grid-template-columns: 1fr 1fr; gap: 9px; }
        .field { width: 100%; height: 42px; margin-bottom: 10px; padding: 0 13px; border: 1px solid rgba(247,247,248,.2); border-radius: 10px; outline: none; background: rgba(255,255,255,.1); color: #fff; font-size: 13px; transition: border-color .2s ease, background .2s ease; }
        textarea.field { height: 75px; padding-top: 12px; resize: none; }
        .field::placeholder { color: #fff; opacity: 1; }
        .field:focus { border-color: rgba(255,255,255,.7); background: rgba(255,255,255,.16); }
        .contact-form .button { width: 100%; height: 42px; min-height: 42px; border: 0; cursor: pointer; }
        .form-status { min-height: 16px; margin: 7px 0 0; color: #d8e3ff; font-size: 12px; text-align: center; }

        .footer { margin-top: 107px; color: var(--off-white); }
        .footer__accent { height: 23px; background: var(--soft-teal); }
        .footer__body { min-height: 381px; background: var(--navy); }
        .footer__inner { position: relative; min-height: 381px; padding-top: 61px; }
        .footer__links { display: grid; grid-template-columns: 208px 170px 245px; gap: 124px; }
        .footer h4 { margin: 0 0 16px; color: #8e9dd3; font-size: 16px; font-weight: 500; line-height: 24px; }
        .footer ul { margin: 0; padding: 0; display: grid; gap: 11px; list-style: none; }
        .footer li, .footer a { font-size: 14px; line-height: 24px; }
        .footer a:hover, .footer a:focus-visible { color: #8e9dd3; }
        .footer__logo { position: absolute; top: 76px; right: 55px; margin: 0; font-size: 48px; font-weight: 700; line-height: 1; }
        .footer__copyright { position: absolute; top: 149px; right: 55px; margin: 0; font-size: 14px; line-height: 16px; }
        .footer__rule { position: absolute; left: 0; right: 0; bottom: 59px; height: 1px; background: rgba(255,255,255,.42); }

        @media (max-width: 1100px) {
            .hero__display { left: 55%; }
            .hero__devices { left: 72%; }
            .hero__phone { left: 89%; }
            .product-grid { width: 100%; margin-left: 0; grid-template-columns: 1fr 1fr; }
            .product-card--consumer { grid-column: 1 / -1; }
            .product-card--consumer h3 { min-height: auto; }
            .product-card--consumer .product-card__content { max-width: 520px; }
            .contact-layout { grid-template-columns: 1.5fr 1fr; }
            .footer__links { gap: 60px; }
        }

        @media (max-width: 800px) {
            .shell { width: min(100% - 32px, 640px); }
            .topbar { height: auto; min-height: 58px; }
            .topbar__inner { padding: 16px 0; justify-content: space-between; }
            .nav { position: static; max-width: calc(100% - 70px); gap: 18px; overflow-x: auto; transform: none; scrollbar-width: none; }
            .nav::-webkit-scrollbar { display: none; }
            .nav a { font-size: 12px; }
            .hero { min-height: 720px; }
            .hero__inner { min-height: 720px; }
            .hero__copy { top: 56px; width: 100%; transform: none; }
            .hero h1 { max-width: 510px; font-size: clamp(42px, 10vw, 55px); }
            .hero p { max-width: 550px; }
            .hero__art { top: 310px; left: 50%; width: 560px; height: 390px; transform: translateX(-50%) scale(.75); transform-origin: top center; }
            .hero__display { top: 20px; left: 0; }
            .hero__devices { top: 185px; left: 280px; }
            .hero__phone { top: 240px; left: 475px; }
            .benefit-strip { height: auto; }
            .benefit-strip__inner { width: calc(100% - 32px); padding: 18px 0; gap: 18px; flex-wrap: wrap; }
            .benefit { font-size: 14px; }
            .section-heading { font-size: 34px; line-height: 40px; }
            .products, .solution, .why { padding-top: 80px; }
            .product-grid { grid-template-columns: 1fr; margin-top: 42px; }
            .product-card, .product-card--laptop, .product-card--consumer { grid-column: auto; min-height: 500px; padding: 40px 30px; }
            .product-card h3 { min-height: auto; font-size: 34px; line-height: 42px; }
            .product-laptop { right: -140px; bottom: -220px; }
            .solution-grid { grid-template-columns: 1fr; margin-top: 42px; }
            .solution-grid__bottom { grid-column: auto; grid-template-columns: 1fr; }
            .solution-card, .solution-grid__bottom .solution-card { min-height: 290px; }
            .logistics-card__content { width: 88%; }
            .why-grid { grid-template-columns: 1fr 1fr; margin-top: 42px; }
            .contact { padding-top: 80px; }
            .contact-layout { grid-template-columns: 1fr; }
            .contact-photo { min-height: 360px; }
            .footer { margin-top: 80px; }
            .footer__inner { padding-block: 50px 70px; }
            .footer__links { grid-template-columns: repeat(3, 1fr); gap: 24px; }
            .footer__logo { position: static; margin-top: 50px; font-size: 40px; }
            .footer__copyright { position: static; margin-top: 16px; }
            .footer__rule { bottom: 36px; }
        }

        @media (max-width: 520px) {
            .hero { min-height: 760px; }
            .hero__inner { min-height: 760px; }
            .hero__copy { top: 48px; }
            .hero__art { top: 390px; transform: translateX(-50%) scale(.58); }
            .benefit-strip__inner { align-items: flex-start; flex-direction: column; }
            .product-card { min-height: 540px; }
            .why-grid { grid-template-columns: 1fr; }
            .why-card { min-height: 210px; }
            .contact-form__row { grid-template-columns: 1fr; gap: 0; }
            .footer__links { grid-template-columns: 1fr 1fr; row-gap: 40px; }
        }
    </style>
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
                <div class="contact-photo" role="img" aria-label="A busy international shipping yard"></div>
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
