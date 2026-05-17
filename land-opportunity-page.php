<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Opportunities - Paragon Heights Gwadar</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            background: #f6f8fa;
        }

        .land-opportunity-hero {
            position: relative;
            min-height: 48vh;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 110px 20px 50px;
            background-image: linear-gradient(rgba(7, 22, 35, 0.55), rgba(7, 22, 35, 0.65)), url('./assets/properties-imgs/similar-slide-img');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            text-align: center;
        }

        .land-opportunity-hero h1 {
            margin: 0;
            font-size: 44px;
            font-weight: 700;
            letter-spacing: 0.4px;
        }

        .land-opportunity-hero p {
            margin: 12px auto 0;
            max-width: 760px;
            line-height: 1.7;
            font-size: 16px;
        }

        .land-opportunity-wrapper {
            max-width: 1240px;
            margin: 70px auto;
            padding: 0 20px;
        }

        .land-opportunity-item {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 36px;
            align-items: center;
            background: #ffffff;
            margin-bottom: 28px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 50px rgba(0, 0, 0, 0.08);
        }

        .land-opportunity-text {
            padding: 36px;
        }

        .land-opportunity-text h2 {
            margin: 0 0 14px;
            font-size: 28px;
            color: #0c2d48;
        }

        .land-opportunity-text p {
            margin: 0;
            color: #303841;
            line-height: 1.8;
            font-size: 16px;
        }

        .land-opportunity-images {
            height: 100%;
            min-height: 320px;
            display: grid;
            grid-template-rows: 1fr 1fr;
            gap: 12px;
            padding: 12px 12px 12px 0;
        }

        .land-opportunity-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 12px;
        }

        .land-opportunity-cta {
            text-align: center;
            margin-top: 38px;
        }

        .land-opportunity-cta a {
            display: inline-block;
            padding: 12px 26px;
            border: 1px solid #0f2f4a;
            color: #0f2f4a;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .land-opportunity-cta a:hover {
            background: #0f2f4a;
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .land-opportunity-item {
                grid-template-columns: 1fr;
            }

            .land-opportunity-images {
                min-height: 420px;
                padding: 0 18px 18px;
            }

            .land-opportunity-hero h1 {
                font-size: 34px;
            }

            .land-opportunity-text {
                padding: 28px;
            }
        }
    </style>
</head>

<body>
    <?php include_once './pages/social-icons.php'; ?>

    <section class="land-opportunity-hero">
        <?php include_once './pages/navbar.php'; ?>
        <div>
            <h1>Paragon Heights Society Land Usage Details</h1>
            <p>
                Land usage focus for premium hospitality development in Gwadar.
            </p>
        </div>
    </section>

    <main class="land-opportunity-wrapper">
        <article class="land-opportunity-item">
            <div class="land-opportunity-text">
                <h2>1. High-End Five-Star Hotels</h2>
                <p>
                     Paragon Heights Gwadar is set to elevate the hospitality landscape with the construction of high-end five-star hotels. These luxury establishments will offer world-class accommodations, exquisite dining options, spa and wellness centers, and state-of-the-art conference facilities. Designed to meet international standards, the five-star hotels will cater to affluent travellers, business executives, and tourists seeking premium experiences. The strategic location within the ecological corridor ensures a unique blend of luxury and natural beauty, making these hotels highly attractive for both short-term and long-term investments.
                </p>
            </div>
            <div class="land-opportunity-images">
                <img src="./assets/img/land-usage-hotel-1.jpg" alt="Five-star hotel lobby at Paragon Heights">
                <img src="./assets/img/land-usage-hotel-2.jpg" alt="Luxury hotel suite at Paragon Heights">
            </div>
        </article>

        <article class="land-opportunity-item">
            <div class="land-opportunity-text">
                <h2>2. Modern Restaurants</h2>
                <p>
                     The culinary landscape at Paragon Heights Gwadar is set to flourish with the establishment of modern restaurants that offer diverse and high-quality dining experiences. These restaurants will feature a range of international cuisines, trendy dining environments, and innovative culinary concepts, catering to both residents and visitors. Located within vibrant commercial areas, these dining establishments are poised to become popular hotspots, providing investors with excellent opportunities for steady returns and brand establishment.
                </p>
            </div>
            <div class="land-opportunity-images">
                <img src="./assets/img/land-usage-restaurant-1.jpg" alt="Modern restaurant interior at Paragon Heights">
                <img src="./assets/img/land-usage-restaurant-2.jpg" alt="Professional culinary kitchen at Paragon Heights">
            </div>
        </article>

        <article class="land-opportunity-item">
            <div class="land-opportunity-text">
                <h2>3. Condominium Buildings</h2>
                <p>
                     Paragon Heights Gwadar introduces high-end condominium buildings that redefine luxury living. These condominiums offer premium amenities, including private balconies with scenic views, state-of-the-art fitness centers, and exclusive concierge services. Designed with modern aesthetics and sustainable materials, these residences cater to discerning buyers seeking both comfort and elegance. The strategic location next to ecological corridor ensures a tranquil and healthy living environment, making these condominiums highly attractive for investment and residency.
                </p>
            </div>
            <div class="land-opportunity-images">
                <img src="./assets/img/land-usage-condo-1.jpg" alt="Luxury condominium building at Paragon Heights">
                <img src="./assets/img/land-usage-condo-2.jpg" alt="Modern residential architecture at Paragon Heights">
            </div>
        </article>
    </main>

    <?php include_once './pages/work-with-us.php'; ?>
    <?php include_once './pages/footer.php'; ?>
    <?php include_once './pages/contactform.php'; ?>

    <script src="./js/index.js"></script>
</body>

</html>
