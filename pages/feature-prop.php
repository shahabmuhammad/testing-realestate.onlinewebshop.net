<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
            .fp-outer-div {
    padding: 80px 20px;
    background: #000;
    color: #fff;
}
            .testimonials_section {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}
      .contain {
        margin: 0 auto;
        max-width: 1200px;
        width: 100%;
      }

      .item {
        align-items: center;
        /* background-color: tomato; */
        color: white;
        display: flex;
        min-height: 500px;
        justify-content: center;
      }

      .listing-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 800px;
        margin: 20px auto;
              width:566px;
      }

      .listing-image-container {
        width: 100%;
        max-width: 800px;
        overflow: hidden;
      }

      .listing-image-container img {
        width: 100%;
        height: auto;
      }

      .listing-details-container {
        text-align: center;
        padding: 40px 40px;
        background-color: #f0f0f0;
        border-radius: 0 0 5px 5px;
        color: #000;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 15px;
    min-height: 258px;
     width: 100%;
      }

      .listing-title {
        margin-top: 0;
      }

      .listing-address,
      .listing-specs {
        margin: 5px 0;
      }

      .fp-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .fp-img {
        vertical-align: top;
        width: 100%;
        height: 315px;
        background-color: gray;
      }

      .listing-price {
        font-size: 16px;
      }

      .featured-properties-header {
        margin-left: 10px;
      }

      .featured-properties-header h2 {
        margin: 0 0 18px;
        font-size: 43px;
        font-weight: 500;
        text-transform: uppercase;
      }
            .fp-outer-div .owl-nav button.owl-prev:first-child:after {
    content: '';
    width: 1px;
    border: 1px solid #fff;
    margin: 0 10px 0 10px;
}
          .fp-outer-div .owl-nav button {
    font-weight: 700;
    line-height: 1;
    position: relative;
    text-decoration: none;
    transition: .2s;
    white-space: nowrap;
    background: unset;
    border: unset;
    margin: unset !important;
}
            .fp-outer-div .owl-nav button:hover {
    background: unset !important;
                        cursor: pointer;
}

            .fp-outer-div .owl-nav {
    position: absolute;
    top: -4rem;
    right: 1rem;
}
            .featured-prop-link {
    display: flex;
    justify-content: center;
    align-items: center;
}
            a.fp-link {
    padding: 10px 30px;
    font-size: 14px;
    border: 2px solid #ffffff;
    color: #ffffff;
    background-color: transparent;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.3s ease;
}
            a.fp-link:hover {
    background-color: #fff;
    color: #000;
}
      /* Responsive layout for smaller screens */
      @media screen and (max-width: 768px) {
        .listing-container {
          flex-direction: column-reverse;
          /* Switch order on smaller screens */
        }
      }
    </style>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
  </head>

  <body>
<div class="fp-outer-div">

  <div class="contain">
    <div class="featured-properties-header">
      <h2>Featured Properties</h2>
    </div>

    <div id="owl-carousel-fp" class="owl-carousel owl-theme">
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Diamond Commercial Block</h2>
              <p class="listing-address">
                <Strong>6 Plots</Strong>: Exclusive for hotel development.
              </p>
              <p class="listing-specs"><Strong>41 Meters</Strong>: G+5 building height allowed.</p>
              <p class="listing-price"><Strong>500 & 600 Feet</Strong>: Located on major broadways.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Gold Crest Commercial Block</h2>
              <p class="listing-address">
                <Strong>19 Plots</Strong>: 600 sq. yards each, G+5 buildings.
              </p>
              <p class="listing-specs"><Strong>500 Feet Road</Strong>: Prime location in TB zone.</p>
              <p class="listing-price"><Strong>100% Commercial</Strong>: Hotels, offices, markets.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Garden Facing Premier Commercial and Residential Block 1</h2>
              <p class="listing-address">
                <Strong>17 Plots</Strong>: 33% commercial, 67% residential.
              </p>
              <p class="listing-specs"><Strong>G+5</Strong>: Penthouses with panoramic views.</p>
              <p class="listing-price"><Strong>Mixed Used</Strong>: Flexible spaces for living and business.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Garden Facing Premier Commercial and Residential Block 2 </h2>
              <p class="listing-address">
                <Strong>7 Plots</Strong>: : 16% commercial, 84% residential.
              </p>
              <p class="listing-specs"><Strong>G+5</Strong>: Includes penthouses with views.</p>
              <p class="listing-price"><Strong>Mixed Used</Strong>: Perfect for markets and homes.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Garden Facing Premier Residential Block 1 </h2>
              <p class="listing-address">
                <Strong>9 Plots</Strong>: 100% residential
              </p>
              <p class="listing-specs"><Strong>G+5</Strong>: Towers with refined residences.</p>
              <p class="listing-price"><Strong>Exclusive Units</Strong>: Spacious designs with views overlooking
                gardens.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="#">
          <div class="listing-container">
            <div class="listing-image-container">
              <div class="fp-img">
                <img
                  src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=1920/https://media-production.lp-cdn.com/media/a75e4ae1-880e-4697-83cc-e15cc7dd92aa"
                  alt="Listing Image" />
              </div>
            </div>

            <div class="listing-details-container">
              <h2 class="listing-title">Premier Residential Block 2</h2>
              <p class="listing-address">
                <Strong>17 Plots</Strong>: 100% residential
              </p>
              <p class="listing-specs"><Strong>G+5</Strong>: Towers offering comfort and style.</p>
              <p class="listing-price"><Strong>Apartments</Strong>: Designed for modern living.</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="featured-prop-link">
        <a href="properties-listing.php" class="fp-link">View All Property Blocks</a>
      </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script>
      $("#owl-carousel-fp").owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        items: 2,
        navText: ["<button class='fp-prev'>Prev</button>", "<button class='fp-nex'>Next</button>"],
      });
    </script>
  </body>
</html>
