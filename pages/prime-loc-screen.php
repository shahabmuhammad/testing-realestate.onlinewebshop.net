<style>
    .prime-hero {
        position: relative;
        padding: 100px 20px 80px;
        background: linear-gradient(180deg, #0d2b5e 0%, #102f68 65%, #081a39 100%);
        color: #ffffff;
        overflow: hidden;
    }

    .prime-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at top center, rgba(255, 255, 255, 0.08), transparent 40%);
        pointer-events: none;
    }

    .prime-hero-inner {
        position: relative;
        max-width: 1240px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 40px;
        align-items: center;
        z-index: 1;
    }

    .prime-hero-copy {
        max-width: 640px;
    }

    .prime-hero-label {
        display: inline-block;
        margin-bottom: 20px;
        font-size: 0.85rem;
        letter-spacing: 0.24em;
        text-transform: uppercase;
        color: #ffdeac;
        font-weight: 700;
    }

    .prime-hero-title {
        font-size: clamp(2.8rem, 5vw, 4.4rem);
        line-height: 1.04;
        margin: 0 0 24px;
        letter-spacing: -0.04em;
        max-width: 12ch;
    }

    .prime-hero-text {
        color: #d6e3ff;
        max-width: 620px;
        line-height: 1.8;
        margin-bottom: 32px;
        font-size: 1rem;
    }

    .prime-action-list {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
    }

    .prime-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 16px 32px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 0.95rem;
        letter-spacing: 0.08em;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, background-color 0.2s ease, color 0.2s ease;
    }

    .prime-button:hover {
        transform: translateY(-2px);
    }

    .prime-button.primary {
        background: #ffdeac;
        color: #0d2b5e;
    }

    .prime-button.secondary {
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.24);
    }

    .prime-hero-visual {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .prime-hero-visual img {
        width: 100%;
        max-width: 540px;
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.28);
        object-fit: cover;
    }

    .prime-section {
        padding: 80px 20px;
    }

    .prime-content {
        max-width: 1240px;
        margin: 0 auto;
    }

    .prime-section-title {
        font-size: clamp(2rem, 3.5vw, 3rem);
        margin-bottom: 16px;
        color: #0d2b5e;
        line-height: 1.1;
    }

    .prime-section-text {
        max-width: 780px;
        line-height: 1.8;
        color: #434750;
        margin-bottom: 40px;
        font-size: 1rem;
    }

    .prime-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 24px;
    }

    .prime-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 32px;
        box-shadow: 0 18px 48px rgba(26, 74, 138, 0.12);
        border: 1px solid rgba(195, 198, 210, 0.32);
        color: #1a1c1c;
    }

    .prime-card-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 9999px;
        background: #d6e3ff;
        color: #00336b;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .prime-card-title {
        font-size: 1.2rem;
        margin-bottom: 16px;
        color: #00336b;
    }

    .prime-card-copy {
        line-height: 1.8;
        color: #434750;
        font-size: 0.96rem;
    }

    .prime-highlight {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        align-items: stretch;
    }

    .prime-highlight-panel {
        background: #081a39;
        border-radius: 24px;
        padding: 36px;
        color: #ffffff;
        box-shadow: 0 24px 60px rgba(8, 26, 57, 0.26);
    }

    .prime-highlight-panel h3 {
        margin-top: 0;
        font-size: 1.8rem;
        line-height: 1.2;
    }

    .prime-list {
        list-style: none;
        padding: 0;
        margin: 24px 0 0;
        display: grid;
        gap: 18px;
    }

    .prime-list li {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        color: #d6e3ff;
        line-height: 1.7;
    }

    .prime-list li::before {
        content: "";
        width: 10px;
        height: 10px;
        margin-top: 0.6rem;
        border-radius: 50%;
        background: #ffdeac;
        flex-shrink: 0;
    }

    .prime-map-block {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 28px;
        align-items: center;
    }

    .prime-map-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 30px;
        color: #1a1c1c;
        box-shadow: 0 18px 48px rgba(26, 74, 138, 0.08);
        border: 1px solid rgba(195, 198, 210, 0.28);
    }

    .prime-map-card h3 {
        margin-top: 0;
        color: #00336b;
        font-size: 1.5rem;
    }

    .prime-map-card p {
        line-height: 1.8;
        color: #434750;
        font-size: 0.98rem;
    }

    .prime-map-image {
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        min-height: 360px;
        background: linear-gradient(180deg, #0d2b5e 0%, #0f3a78 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .prime-map-image img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .prime-cta {
        margin-top: 60px;
        padding: 48px 32px;
        border-radius: 24px;
        background: #0d2b5e;
        color: #ffffff;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 24px;
        align-items: center;
    }

    .prime-cta h2 {
        margin: 0;
        font-size: 2rem;
        line-height: 1.2;
    }

    .prime-cta-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: flex-end;
    }

    @media (max-width: 980px) {

        .prime-hero-inner,
        .prime-highlight,
        .prime-map-block,
        .prime-cta {
            grid-template-columns: 1fr;
        }

        .prime-hero {
            padding-top: 80px;
        }

        .prime-hero-visual {
            order: -1;
        }
    }

    @media (max-width: 680px) {
        .prime-hero {
            padding: 72px 16px 56px;
        }

        .prime-hero-title {
            font-size: 2.6rem;
        }

        .prime-hero-text,
        .prime-section-text,
        .prime-card-copy,
        .prime-map-card p {
            font-size: 0.98rem;
        }

        .prime-action-list {
            flex-direction: column;
            align-items: stretch;
        }

        .prime-button {
            width: 100%;
        }
    }
</style>

<section class="prime-hero">
    <div class="prime-hero-inner">
        <div class="prime-hero-copy">
            <span class="prime-hero-label">Prime Location</span>
            <h1 class="prime-hero-title">Paragon Heights Gwadar sits at the center of the region’s next investment wave.</h1>
            <p class="prime-hero-text">A strategic address framed by the port corridor, airport access, and high-growth infrastructure. This location is designed for global buyers seeking security, connectivity and strong long-term value.</p>
            <div class="prime-action-list">
                <a href="properties-listing.php" class="prime-button primary">View Properties</a>
                <a href="#" class="prime-button secondary openModal">Request Details</a>
            </div>
        </div>
        <div class="prime-hero-visual">
            <img src="./assets/img/loc.png" alt="Prime location illustration">
        </div>
    </div>
</section>

<section class="prime-section">
    <div class="prime-content">
        <div class="section-intro">
            <h2 class="prime-section-title">Why this location matters</h2>
            <p class="prime-section-text">Paragon Heights is intentionally placed to deliver rare investment advantages: direct port access, regional transport corridors, airport proximity and strong planning controls that protect future value.</p>
        </div>

        <div class="prime-grid">
            <article class="prime-card">
                <div class="prime-card-number">01</div>
                <h3 class="prime-card-title">Gateway to Gwadar Port</h3>
                <p class="prime-card-copy">A short drive from the port means faster logistics, stronger demand and a truly strategic location for residential and commercial growth.</p>
            </article>
            <article class="prime-card">
                <div class="prime-card-number">02</div>
                <h3 class="prime-card-title">Integrated Corridor Access</h3>
                <p class="prime-card-copy">Direct connectivity to the Makran Coastal Highway and planned freight routes creates exceptional linkages across the region.</p>
            </article>
            <article class="prime-card">
                <div class="prime-card-number">03</div>
                <h3 class="prime-card-title">Airport & economic links</h3>
                <p class="prime-card-copy">Close proximity to Gwadar International Airport and business zones supports both travelers and future commercial demand.</p>
            </article>
            <article class="prime-card">
                <div class="prime-card-number">04</div>
                <h3 class="prime-card-title">Future-ready growth</h3>
                <p class="prime-card-copy">The site benefits from planned infrastructure, zoning stability and an address that attracts both local and overseas buyers.</p>
            </article>
        </div>
    </div>
</section>

<section class="prime-section" style="background: #081a39; color: #fff;">
    <div class="prime-content">
        <div class="prime-highlight">
            <div class="prime-highlight-panel">
                <h3>Designed for prestige and long-term return</h3>
                <p style="color: #d6e3ff; line-height: 1.8; font-size: 1rem; margin-top: 16px;">Every part of this location has been selected to support a premium lifestyle and a strong investment outlook. The arrival of new infrastructure will continue to raise the profile of this district.</p>
                <ul class="prime-list">
                    <li>Rapid access to Gwadar Port and future logistics hubs</li>
                    <li>Near the airport with a clear travel and tourism narrative</li>
                    <li>Premium residential setting with low-density planning</li>
                    <li>Strong corridor visibility for commercial and hospitality demand</li>
                </ul>
            </div>
            <div class="prime-map-card">
                <h3>Location in context</h3>
                <p>Paragon Heights is set inside Gwadar’s developing growth belt. This location connects to the economic zone and the coastal highway while keeping a quiet, elevated residential character.</p>
                <div class="prime-map-image">
                    <img src="./assets/img/airport.png" alt="Gwadar connectivity illustration">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="prime-section">
    <div class="prime-content">
        <h2 class="prime-section-title">Built around real value drivers</h2>
        <div class="prime-grid">
            <div class="prime-card">
                <div class="prime-card-number">A</div>
                <h3 class="prime-card-title">Core transport access</h3>
                <p class="prime-card-copy">Gateway routes connect the site to major highways, ports and the airport, making it easy for investors, residents and visitors to reach the development.</p>
            </div>
            <div class="prime-card">
                <div class="prime-card-number">B</div>
                <h3 class="prime-card-title">Premium residential setting</h3>
                <p class="prime-card-copy">The development is positioned for quality living with generous open space, controlled density and a strong sense of place.</p>
            </div>
            <div class="prime-card">
                <div class="prime-card-number">C</div>
                <h3 class="prime-card-title">Strong investment context</h3>
                <p class="prime-card-copy">Supported by long-term infrastructure plans and regional demand, this location is ideal for value appreciation and resale appeal.</p>
            </div>
            <div class="prime-card">
                <div class="prime-card-number">D</div>
                <h3 class="prime-card-title">Community & convenience</h3>
                <p class="prime-card-copy">A growing neighborhood with access to schools, retail and future amenities makes this location desirable for families and global buyers.</p>
            </div>
        </div>
    </div>
</section>

<section class="prime-section" style="background: #0d2b5e; color: #fff;">
    <div class="prime-content">
        <div class="prime-cta">
            <div>
                <h2>Ready to explore the prime location?</h2>
                <p style="color: rgba(255,255,255,0.78); margin: 16px 0 0; max-width: 620px; line-height: 1.8;">Learn more about available lots, planned precincts and the strategic factors that make Paragon Heights Gwadar a standout destination.</p>
            </div>
            <div class="prime-cta-actions">
                <a href="properties-listing.php" class="prime-button primary">Explore Properties</a>
                <a href="#" class="prime-button secondary openModal">Contact Sales</a>
            </div>
        </div>
    </div>
</section>