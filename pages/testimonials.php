<style>
  /* Testimonials Section */
  .testimonials_section {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
  }

  .testimonials_container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
  }

  .testimonials_title {
    font-size: 24px;
    letter-spacing: 2px;
    font-weight: 500;
    margin-bottom: 40px;
    text-transform: uppercase;
  }

  .testimonials_items {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
  }

  .testimonials_item {
    flex: 1 1 27%;
    padding: 20px;
    background-color: transparent;
    border: none;
    font-style: italic;
  }

  .testimonials_quote-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 190px;
    margin-bottom: 20px;
  }

  .testimonials_quote-icon img {
    display: block;
    width: 100%;
    max-width: 260px;
    height: 160px;
    object-fit: contain;
  }

  .testimonials_text {
    font-size: 16px;
    color: #333;
    margin-bottom: 20px;
  }

  .testimonials_author {
    font-size: 14px;
    font-weight: bold;
    color: #000;
  }

  /* Read More Button */
  .testimonials_button {
    display: inline-block;
    margin-top: 30px;
    padding: 10px 30px;
    font-size: 14px;
    border: 2px solid #000;
    color: #000;
    background-color: transparent;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .testimonials_button:hover {
    background-color: #000;
    color: #fff;
  }

  /* Responsive Styles */
  @media (max-width: 1024px) {
    .testimonials_items {
      flex-wrap: wrap;
      gap: 20px;
    }

    .testimonials_item {
      flex: 1 1 27%;
    }
  }

  @media (max-width: 768px) {
    .testimonials_item {
      flex: 1 1 100%;
      text-align: center;
    }

    .testimonials_quote-icon {
      min-height: 150px;
    }

    .testimonials_quote-icon img {
      max-width: 220px;
      height: 130px;
    }
  }
</style>

<section class="testimonials_section">
  <div class="testimonials_container">
    <h2 class="testimonials_title">FROM OUR CLIENTELE</h2>
    <div class="testimonials_items">
      <div class="testimonials_item">
        <div class="testimonials_quote-icon"><img src="assets/img/airport.png" alt="Logo"></div>
        <p class="testimonials_text">
          Paragon Heights Gwadar is strategically located adjacent to the New Gwadar Greenfield International Airport, offering unparalleled accessibility and connectivity. This proximity positions the society as a prime investment destination for businesses and residents alike, ensuring seamless travel and enhanced commercial potential. The airport’s development further boosts Gwadar’s significance as a global trade hub, making Paragon Heights an unmatched opportunity.
        </p>
        <h4 class="testimonials_author">- Next to the New Gwadar Greenfield International Airport</h4>
      </div>
      <div class="testimonials_item">
        <div class="testimonials_quote-icon"><img src="assets/img/corridore.png" alt="Logo"></div>
        <p class="testimonials_text">
          The Ecological Corridor, situated next to Paragon Heights Gwadar, enhances the value of the society by creating a harmonious balance between development and nature. Its strategic location boosts land desirability, ensures better infrastructure planning, and adds long-term appeal for investors, making Paragon Heights an attractive choice for sustainable urban and commercial growth.
        </p>
        <h4 class="testimonials_author">- Adjacent to the Ecological Corridor</h4>
      </div>
      <div class="testimonials_item">
        <div class="testimonials_quote-icon"><img src="assets/img/loc.png" alt="Logo"></div>
        <p class="testimonials_text">
          Paragon Heights Gwadar is ideally situated at the intersection of 500 and 600-feet broadways within the Traffic & Utilities Buffer Land (TB) zone. This prime location ensures seamless connectivity for businesses and residents, enhancing transportation and logistics efficiency. Its accessibility to major expressways makes it a strategic choice for investors seeking growth in a well-connected urban environment.
        </p>
        <h4 class="testimonials_author">- Situated at the intersection of the New Highways from the Airport</h4>
      </div>
    </div>
    <a href="./prime-location.php" class="testimonials_button">READ MORE</a>
  </div>
</section>