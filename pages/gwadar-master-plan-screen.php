<main class="gwadar-page">
    <section class="gwadar-hero">
        <div class="page-container">
            <div class="hero-copy">
                <span class="hero-label">Strategic Vision 2050</span>
                <h1>Gwadar: The Architect of Global Maritime Prosperity</h1>
                <p>Envisioned as a high-tech Smart Port City, Gwadar's Master Plan integrates sophisticated urban infrastructure with international trade corridors, creating a blueprint for the world's next premier investment destination.</p>
            </div>
        </div>
    </section>

    <section class="gwadar-map-section">
        <div class="page-container">
            <div class="gwadar-map-card">
                <div class="map-actions">
                    <button type="button" aria-label="Zoom in"><i class="fa fa-search-plus"></i></button>
                    <button type="button" aria-label="Zoom out"><i class="fa fa-search-minus"></i></button>
                    <button type="button" aria-label="Fullscreen"><i class="fa fa-expand"></i></button>
                </div>
                <div class="gwadar-map-preview">
                    <div class="gwadar-map-image">
                        <img alt="Gwadar Master Plan" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwStApPjDwLS29T8O-HBHNj0jJaOphOtSM3Laxg0QitWkpn4BpuiGfjuTyY_qEVr-lPA6n2Pjict0CpSxw137n5QiaNp1hS6D1m0plFiPxGwrgS8bEnpXAdms850EwO7RTpQGE1gXSRRyxyDcUQQIOXiCXXwajOMEsIyYWJYJVOMKIRkpSDF327Sf0jGTBQScPOyi4lgJ5__xCYg57cdGfP7I8ot2-GTmlBES2RsaXR45eCRqw_bhG-1kKE-s5ikxprkjoEaT98U6f" />
                        <div class="map-info-panel">
                            <strong>Master Plan Phase 1</strong>
                            <span>Infrastructure & Connectivity</span>
                            <p>Detailed logistics for the Free Zone, East Bay Expressway, and residential blocks adjacent to the marine drive.</p>
                            <div class="metric-row">
                                <div>
                                    <strong>80k+</strong>
                                    <small>Hectares Planned</small>
                                </div>
                                <div>
                                    <strong>$5B+</strong>
                                    <small>Infrastructure Value</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gwadar-map-details">
                        <div class="detail-card">
                            <h3>Industrial Free Zone</h3>
                            <p>Tax-exempt zones for global manufacturing and logistics hubs.</p>
                        </div>
                        <div class="detail-card detail-highlight">
                            <h3>Central Business District</h3>
                            <p>Skyscrapers, finance towers and luxury hospitality streets.</p>
                        </div>
                        <div class="detail-card">
                            <h3>Eco-Residential Parks</h3>
                            <p>Sustainable luxury living with green, walkable communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gwadar-cta-band">
        <div class="page-container">
            <div class="cta-panel">
                <div>
                    <h2>Ready to Secure Your Future?</h2>
                    <p>Our investment consultants are ready to walk you through the precise land opportunities available within the Master Plan.</p>
                </div>
                <div class="cta-actions">
                    <a class="button button-primary" href="#">Download Brochure</a>
                    <a class="button button-secondary" href="#">Contact Consultant</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mapCard = document.querySelector('.gwadar-map-image img');
        const mapContainer = document.querySelector('.gwadar-map-image');
        if (mapCard && mapContainer) {
            mapContainer.addEventListener('mousemove', function(event) {
                const rect = mapContainer.getBoundingClientRect();
                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;
                mapCard.style.transformOrigin = `${x}% ${y}%`;
            });
            mapContainer.addEventListener('mouseleave', function() {
                mapCard.style.transformOrigin = 'center center';
            });
        }
    });
</script>