<style>
    /* Investment Guide Page Styles */

    /* Hero Section */
    .invest-hero {
        position: relative;
        min-height: 921px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .invest-hero-background {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .invest-hero-bg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(20%);
    }

    .invest-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 51, 107, 0.9), rgba(0, 51, 107, 0.4), transparent);
    }

    .invest-hero-content {
        position: relative;
        z-index: 10;
        padding: 64px 20px;
        max-width: 1280px;
        margin: 0 auto;
        width: 100%;
    }

    .invest-hero-inner {
        max-width: 600px;
        color: #ffffff;
    }

    .invest-hero-label {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #ffdeac;
        margin-bottom: 16px;
        display: block;
        text-transform: uppercase;
        text-align: left;
    }

    .invest-hero-title {
        font-family: 'EB Garamond', serif;
        font-size: 48px;
        line-height: 1.2;
        letter-spacing: -0.02em;
        font-weight: 500;
        margin-bottom: 24px;
    }

    .invest-hero-description {
        font-size: 16px;
        line-height: 1.6;
        color: #d6e3ff;
        margin-bottom: 40px;
    }

    .invest-hero-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
    }

    .invest-btn-primary {
        background-color: #7d570a;
        color: #ffffff;
        padding: 16px 40px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
    }

    .invest-btn-primary:hover {
        background-color: rgba(125, 87, 10, 0.9);
    }

    .invest-btn-secondary {
        border: 1px solid #ffffff;
        color: #ffffff;
        background-color: transparent;
        padding: 16px 40px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
    }

    .invest-btn-secondary:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Strategic Advantage Section */
    .invest-advantage-section {
        padding: 96px 20px;
        background-color: #f9f9f9;
    }

    .invest-advantage-container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .invest-advantage-header {
        display: flex;
        flex-direction: column;
        gap: 24px;
        align-items: flex-end;
        margin-bottom: 80px;
    }

    .invest-advantage-title-block {
        flex: 1;
    }

    .invest-advantage-title {
        font-family: 'EB Garamond', serif;
        font-size: 32px;
        line-height: 1.3;
        font-weight: 500;
        color: #00336b;
        margin-bottom: 24px;
    }

    .invest-advantage-subtitle {
        color: #434750;
        font-size: 16px;
        line-height: 1.6;
        max-width: 500px;
    }

    .invest-advantage-divider-block {
        padding-bottom: 8px;
    }

    .invest-advantage-divider {
        height: 1px;
        width: 128px;
        background-color: #7d570a;
        margin-bottom: 16px;
    }

    .invest-cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .invest-card {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 12px;
        border: 1px solid rgba(195, 198, 210, 0.3);
        box-shadow: 0 4px 24px rgba(26, 74, 138, 0.12);
        transition: transform 0.5s ease;
    }

    .invest-card:hover {
        transform: translateY(-8px);
    }

    .invest-card-icon {
        width: 64px;
        height: 64px;
        border-radius: 9999px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 32px;
        font-size: 32px;
    }

    .invest-card-icon-primary {
        background-color: #d6e3ff;
        color: #00336b;
    }

    .invest-card-icon-secondary {
        background-color: #ffdeac;
        color: #7d570a;
    }

    .invest-card-title {
        font-family: 'EB Garamond', serif;
        font-size: 22px;
        line-height: 1.4;
        font-weight: 500;
        color: #00336b;
        margin-bottom: 16px;
    }

    .invest-card-label {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #7d570a;
        margin-bottom: 16px;
        text-transform: uppercase;
    }

    .invest-card-description {
        color: #434750;
        font-size: 16px;
        line-height: 1.6;
    }

    /* ROI Section */
    .invest-roi-section {
        padding: 96px 20px;
        background-color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .invest-roi-container {
        max-width: 1280px;
        margin: 0 auto;
        position: relative;
        z-index: 10;
    }

    .invest-roi-header {
        text-align: center;
        margin-bottom: 64px;
    }

    .invest-roi-title {
        font-family: 'EB Garamond', serif;
        font-size: 32px;
        line-height: 1.3;
        font-weight: 500;
        color: #00336b;
        margin-bottom: 16px;
    }

    .invest-roi-divider {
        height: 4px;
        width: 96px;
        background-color: #7d570a;
        margin: 0 auto;
    }

    .invest-roi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-template-rows: auto;
        gap: 24px;
        min-height: 600px;
    }

    .invest-roi-main {
        grid-column: 1 / -1;
        background: linear-gradient(135deg, #00336b 0%, #1a4a8a 100%);
        border-radius: 16px;
        padding: 40px;
        color: #ffffff;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        min-height: 320px;
    }

    .invest-roi-main-bg {
        position: absolute;
        inset: 0;
        object-fit: cover;
        opacity: 0.3;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 101%;
    }

    .invest-roi-main-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #00336b, rgba(0, 51, 107, 0.6), transparent);
    }

    .invest-roi-main-content {
        position: relative;
        z-index: 2;
    }

    .invest-roi-main-title {
        font-family: 'EB Garamond', serif;
        font-size: 22px;
        line-height: 1.4;
        color: #ffffff;
        margin-bottom: 16px;
    }

    .invest-roi-main-description {
        color: rgba(214, 227, 255, 0.8);
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    .invest-roi-main-yield {
        font-size: 48px;
        font-weight: 700;
        color: #ffdeac;
    }

    .invest-roi-main-yield-label {
        font-size: 16px;
        font-weight: 400;
    }

    @media (min-width: 768px) {
        .invest-roi-grid {
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 1fr);
        }

        .invest-roi-main {
            grid-column: 1 / 3;
            grid-row: 1 / 3;
        }
    }

    .invest-roi-card-light {
        background-color: #f3f3f4;
        border-radius: 16px;
        padding: 32px;
        border: 1px solid rgba(195, 198, 210, 0.2);
        display: flex;
        align-items: center;
        gap: 32px;
    }

    .invest-roi-card-light-content {
        flex: 1;
    }

    .invest-roi-card-light-title {
        font-family: 'EB Garamond', serif;
        font-size: 22px;
        line-height: 1.4;
        color: #00336b;
        margin-bottom: 8px;
    }

    .invest-roi-card-light-description {
        color: #434750;
        font-size: 14px;
        line-height: 1.6;
    }

    .invest-roi-card-light-icon {
        width: 80px;
        height: 80px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #7d570a;
        flex-shrink: 0;
    }

    .invest-roi-card-tinted {
        border-radius: 16px;
        padding: 32px;
        border: 1px solid;
        display: flex;
        flex-direction: column;
    }

    .invest-roi-card-primary-tint {
        background-color: rgba(214, 227, 255, 0.2);
        border-color: rgba(214, 227, 255, 0.5);
    }

    .invest-roi-card-secondary-tint {
        background-color: rgba(255, 222, 172, 0.2);
        border-color: rgba(255, 222, 172, 0.5);
    }

    .invest-roi-card-tinted-icon {
        font-size: 32px;
        margin-bottom: 16px;
    }

    .invest-roi-card-primary-tint .invest-roi-card-tinted-icon {
        color: #00336b;
    }

    .invest-roi-card-secondary-tint .invest-roi-card-tinted-icon {
        color: #7d570a;
    }

    .invest-roi-card-tinted-title {
        font-family: 'EB Garamond', serif;
        font-size: 22px;
        line-height: 1.4;
        color: #00336b;
        margin-bottom: 8px;
    }

    .invest-roi-card-tinted-description {
        color: #434750;
        font-size: 14px;
        line-height: 1.6;
    }

    /* Connectivity Section */
    .invest-connectivity-section {
        padding: 96px 20px;
        background-color: #00336b;
        color: #ffffff;
    }

    .invest-connectivity-container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .invest-connectivity-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .invest-connectivity-title {
        font-family: 'EB Garamond', serif;
        font-size: 32px;
        line-height: 1.3;
        font-weight: 500;
        margin-bottom: 16px;
    }

    .invest-connectivity-subtitle {
        color: #d6e3ff;
        font-size: 16px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .invest-connectivity-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 64px;
        align-items: center;
    }

    @media (min-width: 1024px) {
        .invest-connectivity-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .invest-map-container {
        position: relative;
        width: 100%;
        aspect-ratio: 1;
    }

    .invest-map-circle {
        width: 100%;
        height: 100%;
        background-color: #30497d;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 60px rgba(0, 0, 0, 0.3);
        position: relative;
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .invest-map-overlay {
        position: absolute;
        inset: 0;
        opacity: 0.2;
        border-radius: 50%;
    }

    .invest-map-center {
        position: relative;
        z-index: 10;
        text-align: center;
    }

    .invest-map-center-main {
        font-family: 'EB Garamond', serif;
        font-size: 48px;
        color: #ffdeac;
        line-height: 1;
        margin-bottom: 8px;
        font-weight: 500;
    }

    .invest-map-center-label {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #d6e3ff;
        text-transform: uppercase;
    }

    .invest-map-badge {
        position: absolute;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 12px 16px;
        border-radius: 8px;
        color: #00336b;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
        z-index: 20;
    }

    .invest-map-badge-top {
        top: 10%;
        left: 20%;
        animation: pulse 2s infinite;
    }

    .invest-map-badge-bottom {
        bottom: 20%;
        right: 10%;
    }

    .invest-map-badge-right {
        top: 50%;
        right: 0.75%;
        transform: translateY(-50%);
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    .invest-connectivity-features {
        display: flex;
        flex-direction: column;
        gap: 48px;
    }

    .invest-feature {
        display: flex;
        gap: 24px;
    }

    .invest-feature-icon {
        font-size: 32px;
        color: #ffdeac;
        flex-shrink: 0;
    }

    .invest-feature-content h3 {
        font-family: 'EB Garamond', serif;
        font-size: 22px;
        line-height: 1.4;
        color: #ffffff;
        margin-bottom: 8px;
        font-weight: 500;
    }

    .invest-feature-content p {
        color: rgba(214, 227, 255, 0.8);
        font-size: 16px;
        line-height: 1.6;
    }

    /* CTA Section */
    .invest-cta-section {
        padding: 96px 20px;
        background-color: #ffffff;
    }

    .invest-cta-container {
        max-width: 1280px;
        margin: 0 auto;
    }

    .invest-cta-box {
        background-color: #f3f3f4;
        border-radius: 32px;
        padding: 48px 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .invest-cta-box-decoration-1 {
        position: absolute;
        top: 0;
        right: 0;
        width: 256px;
        height: 256px;
        background: radial-gradient(circle, rgba(255, 222, 172, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        transform: translate(50%, -50%);
    }

    .invest-cta-box-decoration-2 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 384px;
        height: 384px;
        background: radial-gradient(circle, rgba(214, 227, 255, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        transform: translate(-50%, 50%);
    }

    .invest-cta-content {
        position: relative;
        z-index: 10;
    }

    .invest-cta-title {
        font-family: 'EB Garamond', serif;
        font-size: 48px;
        line-height: 1.2;
        letter-spacing: -0.02em;
        font-weight: 500;
        color: #00336b;
        margin-bottom: 24px;
    }

    .invest-cta-description {
        color: #434750;
        font-size: 16px;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto 40px;
    }

    .invest-cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 24px;
        justify-content: center;
    }

    @media (min-width: 768px) {
        .invest-cta-buttons {
            flex-direction: row;
        }
    }

    .invest-btn-cta {
        padding: 20px 48px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.05em;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        transition: all 0.3s ease;
        text-transform: uppercase;
    }

    .invest-btn-cta-primary {
        background-color: #00336b;
        color: #ffffff;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .invest-btn-cta-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
    }

    .invest-btn-cta-primary:active {
        transform: scale(0.95);
    }

    .invest-btn-cta-secondary {
        border: 2px solid #00336b;
        color: #00336b;
        background-color: transparent;
    }

    .invest-btn-cta-secondary:hover {
        background-color: #00336b;
        color: #ffffff;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .invest-hero {
            min-height: 600px;
        }

        .invest-hero-title {
            font-size: 36px;
        }

        .invest-hero-label {
            font-size: 12px;
        }

        .invest-hero-buttons {
            flex-direction: column;
        }

        .invest-btn-primary,
        .invest-btn-secondary {
            width: 100%;
            justify-content: center;
        }

        .invest-advantage-header {
            flex-direction: column-reverse;
            align-items: flex-start;
        }

        .invest-advantage-title {
            font-size: 28px;
        }

        .invest-cards-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .invest-roi-grid {
            grid-template-columns: 1fr;
            min-height: auto;
        }

        @media (max-width: 768px) {
            .invest-roi-main {
                grid-column: 1;
                grid-row: auto;
            }
        }

        .invest-connectivity-grid {
            gap: 32px;
        }

        .invest-cta-box {
            padding: 32px 24px;
        }

        .invest-cta-title {
            font-size: 32px;
        }

        .invest-cta-description {
            font-size: 14px;
        }

        .invest-cta-buttons {
            flex-direction: column;
        }

        .invest-btn-cta {
            width: 100%;
        }
    }

    /* Animations */
    .invest-section-fade-in {
        animation: fadeInUp 1s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Hero Section -->
<section class="invest-hero">
    <div class="invest-hero-background">
        <img class="invest-hero-bg-image"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuABPxA-Sh4x5Q8Jw66j_0AcLrWQraD7wQC8Xt_xdU7R9McBvLvGgLIQVAw-F2tZf5sYLwEK2VOBPVihGd_-mDtz_8Gt1-cx7_UQC8SNzau05VCALMym_2HU2NNh1YUD6FOyZK4zhQPmcKYaIN-zWvVzGvdvElv70SPb9L-0scbgWyA60EHivjALyeNLIKXfw1AniI63ld_sZ9HtCQ00qwr6yT6WreMnjkOl6Ce6afpbln9iBUs6q_cqAh_AEjIFrdTZ7b5igYe63ngH"
            alt="Strategic port city at dusk">
        <div class="invest-hero-overlay"></div>
    </div>
    <div class="invest-hero-content">
        <div class="invest-hero-inner">
            <span class="invest-hero-label">Gateway to Tomorrow</span>
            <h1 class="invest-hero-title">Strategic Opportunity at the Crossroads of the New Silk Road</h1>
            <p class="invest-hero-description">Gwadar is not just a port; it is the heartbeat of future global commerce. Discover why international investors are securing their legacy in the world's fastest-growing smart port city.</p>
            <div class="invest-hero-buttons">
                <button class="invest-btn-primary">
                    Investment Guide
                    <span class="material-icon">→</span>
                </button>
                <button class="invest-btn-secondary">View Masterplan</button>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Advantage Section -->
<section class="invest-advantage-section">
    <div class="invest-advantage-container">
        <div class="invest-advantage-header">
            <div class="invest-advantage-title-block">
                <h2 class="invest-advantage-title">The Strategic Advantage</h2>
                <p class="invest-advantage-subtitle">Engineering stability through regulatory excellence. Paragon Heights offers an unprecedented level of security for international stakeholders.</p>
            </div>
            <div class="invest-advantage-divider-block">
                <div class="invest-advantage-divider"></div>
            </div>
        </div>

        <div class="invest-cards-grid">
            <div class="invest-card">
                <div class="invest-card-icon invest-card-icon-primary">🏢</div>
                <h3 class="invest-card-title">100% High-Rise Zoning</h3>
                <p class="invest-card-description">Maximized vertical potential allows for premium developments that command superior market value and iconic skyline status.</p>
            </div>

            <div class="invest-card">
                <div class="invest-card-icon invest-card-icon-secondary">✓</div>
                <h3 class="invest-card-title">GDA Approved</h3>
                <p class="invest-card-label">NOC Certified Project</p>
                <p class="invest-card-description">Full legal compliance ensures a transparent investment path, fully recognized by the Gwadar Development Authority.</p>
            </div>

            <div class="invest-card">
                <div class="invest-card-icon invest-card-icon-primary">🏛️</div>
                <h3 class="invest-card-title">Global Standards</h3>
                <p class="invest-card-description">Designed by international architects to meet the aesthetic and functional demands of modern global investors.</p>
            </div>
        </div>
    </div>
</section>

<!-- ROI Potential Section -->
<section class="invest-roi-section">
    <div class="invest-roi-container">
        <div class="invest-roi-header">
            <h2 class="invest-roi-title">Institutional ROI Potential</h2>
            <div class="invest-roi-divider"></div>
        </div>

        <div class="invest-roi-grid">
            <div class="invest-roi-main">
                <img class="invest-roi-main-bg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrrZXzpg1EvfyWAP7C4PeVLK09WFKgxlquwdB9mGLb8EjfiKkvXjussNDLGwBBsy408v4__4tnkWg6DFT94u77zXscfNs_P6mM1UC5Jzu-nm40LrX2PViNF4YGqpyjn8AhfzNbn-vw2zLpCvyrX8PORMkxAfj5Sx9q00v1wWYCiDK2h-wX8LeYB1lUpUb9jiCQwZz1BaI2wA668nIVWOTPOX-TZN-WFECWABOSTaz9KMF6JVbG0Xzaf1Z2PB2y0n3gAN-PJtZ_ZOFo"
                    alt="Modern skyscraper">
                <div class="invest-roi-main-overlay"></div>
                <div class="invest-roi-main-content">
                    <h3 class="invest-roi-main-title">Exceptional Growth Forecast</h3>
                    <p class="invest-roi-main-description">Market analytics predict a 200% appreciation in the next decade as CPEC Phase II matures. Secure your equity at ground-floor valuations.</p>
                    <div class="invest-roi-main-yield">18-22% <span class="invest-roi-main-yield-label">Annual Est. Yield</span></div>
                </div>
            </div>

            <div class="invest-roi-card-light">
                <div class="invest-roi-card-light-content">
                    <h3 class="invest-roi-card-light-title">Remote Management</h3>
                    <p class="invest-roi-card-light-description">Real-time portfolio tracking and virtual property management for our international clientele.</p>
                </div>
                <div class="invest-roi-card-light-icon">💻</div>
            </div>

            <div class="invest-roi-card-tinted invest-roi-card-secondary-tint">
                <div class="invest-roi-card-tinted-icon">💱</div>
                <h3 class="invest-roi-card-tinted-title">Repatriation</h3>
                <p class="invest-roi-card-tinted-description">Clear guidance on capital movement and profit repatriation.</p>
            </div>

            <div class="invest-roi-card-tinted invest-roi-card-primary-tint">
                <div class="invest-roi-card-tinted-icon">⚖️</div>
                <h3 class="invest-roi-card-tinted-title">Legal Vault</h3>
                <p class="invest-roi-card-tinted-description">Comprehensive legal assistance and white-glove onboarding.</p>
            </div>
        </div>
    </div>
</section>

<!-- Connectivity Section -->
<section class="invest-connectivity-section">
    <div class="invest-connectivity-container">

        <div class="invest-connectivity-header">
            <h2 class="invest-connectivity-title">Hub of Global Connectivity</h2>
            <p class="invest-connectivity-subtitle">Strategically positioned to link the markets of Central Asia, China, and the Middle East.</p>
        </div>

        <div class="invest-connectivity-grid">
            <div class="invest-map-container">
                <div class="invest-map-circle">
                    <img class="invest-roi-main-bg"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjUwkppAePPr0vw5weZV25W_UqYjtpEQOJ5HbK_T6OShGmgkNcL1fj015f8ljmQzijixGCP3t6eZ9Wo0vDbKwkVAxWbr4eWudN-BUlB0lDrnlbcGF4GL7PebhtDBINqw4ORyOZ5ORaB0ec8eKcUIYcA86n9xcjwWazo7zmpNXZd9PmRLA-96Z6W4LZqijnQ_anF_IPyOWkZN27gAAmugG2sIrnSGcj9EzsAaovu0ldHth1AGJtxfQmlqXKuS5vPRPodj1OrSTwd8SW"
                        alt="Modern skyscraper">
                    <div class="invest-map-overlay"></div>
                    <div class="invest-map-center">
                        <div class="invest-map-center-main">GWADAR</div>
                        <div class="invest-map-center-label">The Center Point</div>
                    </div>
                    <div class="invest-map-badge invest-map-badge-top">Maritime Gateway</div>
                    <div class="invest-map-badge invest-map-badge-bottom">Free Trade Zone</div>
                    <div class="invest-map-badge invest-map-badge-right">Smart Infrastructure</div>
                </div>
            </div>

            <div class="invest-connectivity-features">
                <div class="invest-feature">
                    <div class="invest-feature-icon">⛵</div>
                    <div class="invest-feature-content">
                        <h3>Deep-Sea Maritime Access</h3>
                        <p>A 14.5m draft port capable of handling the world's largest container vessels, reducing trade times by up to 10 days.</p>
                    </div>
                </div>

                <div class="invest-feature">
                    <div class="invest-feature-icon">🔧</div>
                    <div class="invest-feature-content">
                        <h3>Smart City Framework</h3>
                        <p>Integrated digital infrastructure, 24/7 power via dedicated grids, and automated security systems.</p>
                    </div>
                </div>

                <div class="invest-feature">
                    <div class="invest-feature-icon">🌍</div>
                    <div class="invest-feature-content">
                        <h3>Economic Incentives</h3>
                        <p>40-year tax holidays for specific industries within the Gwadar Free Zone, attracting multi-national corporate headquarters.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="invest-cta-section">
    <div class="invest-cta-container">
        <div class="invest-cta-box">
            <div class="invest-cta-box-decoration-1"></div>
            <div class="invest-cta-box-decoration-2"></div>
            <div class="invest-cta-content">
                <h2 class="invest-cta-title">Ready to Secure Your Future?</h2>
                <p class="invest-cta-description">Download our detailed investment prospectus or schedule a one-on-one consultation with our portfolio managers.</p>
                <div class="invest-cta-buttons">
                    <button class="invest-btn-cta invest-btn-cta-primary">
                        <span>📅</span> Book a Consultation
                    </button>
                    <button class="invest-btn-cta invest-btn-cta-secondary">
                        <span>⬇️</span> Download Guide
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Fade-in animations on scroll
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('invest-section-fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.invest-advantage-section, .invest-roi-section, .invest-connectivity-section, .invest-cta-section').forEach(section => {
            observer.observe(section);
        });
    });
</script>