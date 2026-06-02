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
      height: 62vh;
      overflow: hidden;
    }

    .slider__ img {
      width: 42%;
      margin-top: 20px;
    }

    .__video-container__ video,
    .__video-container__ iframe {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 177.78%;
      height: 300%;
      min-width: 177.78%;
      /* min-height: 100%; */
      border: 0;
      pointer-events: none;
      opacity: 0.85;
      max-width: none;
      max-height: none;
    }

    .__video-container__::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75));
      pointer-events: none;
      z-index: 1;
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
      z-index: 1;
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
    <iframe
      src=""
      data-src="https://www.youtube.com/embed/n1G3qcwI6UQ?autoplay=1&mute=1&controls=0&rel=0&modestbranding=1&disablekb=1&iv_load_policy=3&loop=1&playlist=n1G3qcwI6UQ&playsinline=1&fs=0&autohide=1"
      allow="autoplay; fullscreen; picture-in-picture"
      allowfullscreen></iframe>
    <div class="__inner-container__">
      <h1>Prime Location</h1>
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
    function loadBackgroundVideo() {
      const videoFrame = document.querySelector('.__video-container__ iframe');
      if (!videoFrame || videoFrame.dataset.loaded) return;
      videoFrame.src = videoFrame.dataset.src;
      videoFrame.dataset.loaded = 'true';
    }

    document.addEventListener('DOMContentLoaded', function() {
      const videoSection = document.querySelector('.__video-container__');
      if (videoSection && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function(entries, obs) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              loadBackgroundVideo();
              obs.unobserve(videoSection);
            }
          });
        }, {
          threshold: 0.25
        });
        observer.observe(videoSection);
      } else {
        loadBackgroundVideo();
      }

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