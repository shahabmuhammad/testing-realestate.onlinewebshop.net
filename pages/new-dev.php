<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Slick Carousel CSS -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <style>
    /* General Styles */
    body,
    html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow-x: hidden;
    }

    /* Video Container */
    .__video-container__ {
      position: relative;
      width: 100%;
      height: 52vh;
      overflow: hidden;
    }

    .slider__ img {
      width: 42%;
      margin-top: 20px;
    }

    .__video-container__ video {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
    }

    /* Inner Content */
    .__inner-container__ {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      max-width: 1200px;
      text-align: center;
    }

    .__inner-container__ h1 {
      color: white;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    /* Carousel */
    .__carousel__ .item img {
      max-width: 100px;
      margin: 0 auto;
      transition: transform 0.3s ease-in-out;
    }

    .__carousel__ .item img:hover {
      transform: scale(1.1);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .__inner-container__ {
        width: 90%;
      }

      .__carousel__ .item img {
        max-width: 80px;
      }
    }
  </style>
</head>

<body>
  <div class="__video-container__">
    <video autoplay muted loop>
      <source
        src="https://res.cloudinary.com/luxuryp/videos/f_webm,vc_vp9,q_auto/suyejxdtvocnw6zhzjk1/bandw-palm-trees.webm"
        type="video/webm" />
      Your browser does not support the video tag.
    </video>
    <div class="__inner-container__">
      <h1>Upcoming Development </h1>
      <div class="slider__">
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 1" />
        </div>
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/lkdbxh4ornahqnrbygc4"
            alt="Slide 2" />
        </div>
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 3" />
        </div>
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/lkdbxh4ornahqnrbygc4"
            alt="Slide 4" />
        </div>
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 3" />
        </div>

        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/lkdbxh4ornahqnrbygc4"
            alt="Slide 4" />
        </div>

        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 3" />
        </div>
        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 3" />
        </div>

        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/lkdbxh4ornahqnrbygc4"
            alt="Slide 4" />
        </div>

        <div>
          <img
            src="https://media-production.lp-cdn.com/cdn-cgi/image/format=auto,quality=85,fit=scale-down,width=320/https://media-production.lp-cdn.com/media/pkdh38lovcybl0k62qnh"
            alt="Slide 3" />
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (Required for Slick Carousel) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Slick Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".slider__").slick({
        autoplay: true, // Auto-play slides
        autoplaySpeed: 0, // No delay, continuous scrolling
        speed: 3000, // Speed of scrolling
        arrows: false, // Hide next/prev arrows
        dots: false, // Hide dots
        infinite: true, // Infinite loop
        slidesToShow: 3, // Show 3 slides at a time
        slidesToScroll: 1, // Scroll one slide at a time
        cssEase: "linear", // Smooth scrolling effect
        pauseOnHover: false, // Keep scrolling even on hover
        variableWidth: true, // Makes the slides flow seamlessly
      });
    });
  </script>
</body>

</html>