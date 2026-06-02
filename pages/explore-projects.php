<style>
  /*************************************** Projects section ************************************/
  .__container__ {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 80px 20px;
    max-width: 1400px;
    margin: auto;
  }

  .__item__ {
    position: relative;
    overflow: hidden;
    height: 100%;
    border: 1px solid #0000001a;
  }

  .__item__ img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .__item__:hover img {
    transform: scale(1.1);
  }

  .__item__ .__overlay__ {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .__item__:hover .__overlay__ {
    opacity: 1;
  }

  .__item__ .__overlay__ h3 {
    color: #fff;
    font-size: 1.5rem;
    text-transform: uppercase;
  }

  .__item__ h3 {
    position: absolute;
    z-index: 2;
    top: 44%;
    left: 50%;
    color: #fff;
    font-size: 1.5rem;
    text-transform: uppercase;
    text-align: center;
    transform: translate(-50%, -50%);
  }

  .__item__:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 112vh;
    background-color: transparent;
    background-image: linear-gradient(to bottom,
        rgba(0, 0, 0, 0) 67.6%,
        #000000);
    opacity: 0.6;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
    z-index: 1;
  }

  .__item__:hover::before {
    /* z-index: 1; */
  }

  .land-opportunity a {
    /* display: inline-block; */
    padding: 10px 20px;
    font-size: 16px;
    /* color: #fff; */
    background-color: transparent;
    border: 2px solid #020202;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .land-opportunity {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 80px;
  }

  .land-opportunity a:hover {
    background-color: #000;
    color: #fff;
  }

  .__item__:after {
    content: "";
    width: 0;
    padding-top: 121.5%;
  }

  @media (max-width: 1024px) {
    .__container__ {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .__container__ {
      grid-template-columns: 1fr;
    }

    .__item__ .__overlay__ h3 {
      font-size: 1.2rem;
    }
  }
</style>

<!---------------------------------- Explore our projects ---------------------------------->
<div class="__container__">
  <a href="prop-detail-page.php?property=high-end-five-star-hotels">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/y1iqxwt0r5py0q0xg70k/krisztina-papp-sgxr_tzqgpi-unsplash"
        alt="New York City" />
      <div class="__overlay__"></div>
      <h3>High End Five Star Hotels</h3>
    </div>
  </a>

  <a href="prop-detail-page.php?property=modern-restaurants">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/mgxtmrbvq4f5jvjaq7ym/shutterstock_1804409353-1"
        alt="The Hamptons" />
      <div class="__overlay__"></div>
      <h3>Modern Restaurants</h3>
    </div>
  </a>

  <a href="prop-detail-page.php?property=luxurious-residential-apartments">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/aqilhnbu0vrdahbl9rz1/-1853738951"
        alt="Miami" />
      <div class="__overlay__"></div>
      <h3>Luxurious Residential Apartments</h3>
    </div>
  </a>

  <a href="prop-detail-page.php?property=state-of-art-office-complexes">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/mgxtmrbvq4f5jvjaq7ym/shutterstock_1804409353-1"
        alt="Los Angeles" />
      <div class="__overlay__"></div>
      <h3>State-of-art Office Complexes</h3>
    </div>
  </a>

  <a href="prop-detail-page.php?property=large-scale-shopping-centers-and-hypermarkets">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/aqilhnbu0vrdahbl9rz1/-1853738951"
        alt="San Francisco" />
      <div class="__overlay__"></div>
      <h3>Large-scale Shopping Centers and Hypermarkets</h3>
    </div>
  </a>

  <a href="prop-detail-page.php?property=educational-institutions-and-facilities">
    <div class="__item__">
      <img
        src="https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/y1iqxwt0r5py0q0xg70k/krisztina-papp-sgxr_tzqgpi-unsplash"
        alt="Chicago" />
      <div class="__overlay__"></div>
      <h3>Educational Institutions and Facilities</h3>
    </div>
  </a>
</div>
<!---------------------------------- Explore our projects ends ---------------------------------->
<div class="land-opportunity">
  <a href="land-opportunity.php" class="team-content learn-more-btn">View All Land Opportunity</a>
</div>