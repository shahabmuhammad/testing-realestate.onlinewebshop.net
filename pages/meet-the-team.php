<style>
          .team-section {
        /* width: 100%;
        padding: 50px 20px; */
        background-color: #000; /* Black background for the section */
        display: flex;
        justify-content: center;
        align-items: center;
                      padding: 96px;
    color: #fff;
    line-height: 1.7;
      }

      .team-container {
        max-width: 1400px; /* Section width capped at 1400px */
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        /* flex-wrap: wrap;  */
        gap: 20px; /* Space between elements */
      }
        @media screen and (max-width:1000px){
    .team-section{
        padding:70px 0px;
    }
}

      /* Logo Section */
      .team-logo {
        flex: 1 1 40%;
        text-align: center;
      }

      .team-logo span {
        font-size: 120px;
        color: #ccc; /* Grey color for the logo */
        font-weight: bold;
      }
      .team-logo img {
        width: 100%;
      }

      /* Content Section */
      .team-content {
        flex: 1 1 60%;
        padding: 0 20px;
      }

      .team-content h2 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #fff;
      }

      .team-content p {
        font-size: 16px;
        margin-bottom: 20px;
      }

      .team-content .learn-more-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: transparent;
        border: 2px solid #fff;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .team-content .learn-more-btn:hover {
        background-color: #fff;
        color: #000;
      }

      /* Responsive Design */
      @media (max-width: 1024px) {
        .team-logo span {
          font-size: 100px;
        }

        .team-content h2 {
          font-size: 24px;
        }

        .team-content p {
          font-size: 14px;
        }
      }

      @media (max-width: 768px) {
        .team-container {
          flex-direction: column;
          text-align: center;
          padding: 10px 20px;
        }

        .team-content {
          padding: 0;
        }

        .team-content h2 {
          font-size: 20px;
        }

        .team-content p {
          font-size: 14px;
        }
      }

      @media (max-width: 480px) {
        .team-logo span {
          font-size: 80px;
        }

        .team-content h2 {
          font-size: 18px;
        }

        .team-content p {
          font-size: 12px;
        }

        .team-content .learn-more-btn {
          font-size: 12px;
          padding: 6px 12px;
        }
      }
</style>

<section class="team-section">
      <div class="team-container">
        <div class="team-logo">
          <img
            src="https://media-production.lp-cdn.com/media/f9d19d18-c28c-4618-8689-33a2bd5fdea5"
            alt="main"
            class="main-image"
            loading="lazy"
            data-uw-rm-alt-original="main"
            data-uw-rm-alt="ALT"
          />
        </div>
        <div class="team-content">
          <h2>ONE VISION, SHARED AMBITION</h2>
          <p>
            Paragon Heights Gwadar, developed by Sultan & Sultan Private Ltd., is a landmark project in Pakistan’s emerging real estate hub. Strategically located near the New Gwadar Greenfield International Airport, it spans over several acres and offers a blend of commercial and residential investment opportunities. With spaces designed for high-rise developments and luxury hotels, the project is built to meet the demands of large-scale investors seeking growth in a rapidly expanding market.
          </p>
          <p>
            We invite visionary investors to explore how Paragon Heights can align with their strategic goals. Positioned at the forefront of Gwadar’s development, this project offers unmatched potential for those ready to shape the future of a global investment destination.
          </p>
          <a href="./prime-location.php" class="learn-more-btn">Learn More</a>
        </div>
      </div>
    </section>