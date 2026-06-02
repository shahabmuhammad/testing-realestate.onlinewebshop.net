<main class="ph-master-plan">
    <section class="ph-hero">
        <div class="page-container">
            <div class="hero-copy">
                <span class="hero-label">Strategic Vision</span>
                <h1>The Master Plan: Architectural Integrity approved by GDA</h1>
                <p>Paragon Heights is more than a residential development; it is a meticulously engineered ecosystem. Our master plan, officially sanctioned by the Gwadar Development Authority, balances high-density commercial hubs with serene residential enclaves, all connected by a sophisticated infrastructure grid designed for the next century of global trade.</p>
                <div class="hero-badges">
                    <div class="badge">
                        <i class="fa fa-check-circle"></i>
                        <span>GDA Approved #GH-2024-001</span>
                    </div>
                    <div class="badge">
                        <i class="fa fa-road"></i>
                        <span>120ft Wide Main Boulevard</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ph-map-section">
        <div class="page-container">
            <div class="map-card">
                <div class="map-actions">
                    <button type="button" aria-label="Zoom Map"><i class="fa fa-search-plus"></i></button>
                    <button type="button" aria-label="Fullscreen"><i class="fa fa-expand"></i></button>
                    <button type="button" aria-label="Download"><i class="fa fa-download"></i></button>
                </div>
                <div class="map-preview">
                    <div class="map-image">
                        <img alt="Paragon Heights Master Plan" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMzI8A64UBcM1UX20oRyplB-QUfrFGpveCR-ct9cWPoiyc9hlBtac_KIl1jlAN7qlzOWlp-N3Ol-KF2kkrrPjKUkjpqwyh6_bsUkev-O8APksIbuKfs1De6ApKCumMUOkhsaccoTfDJvluI9KRojhmYocGzre19wkvJS5v3ms2RWg1xZzkUrrwokEu4qz2pSKRuec8_Cgfj_VXdP6NNRsXCyvkOk1u4evUpb6waT8RForA1UdpYc8MBWqTuhqIFVTwHYwoQVbgDjGT" />
                    </div>
                    <div class="map-legend">
                        <div class="legend-block">
                            <h3>Zoning Classification</h3>
                            <ul>
                                <li><span class="legend-dot legend-primary"></span>Premium Commercial Frontage</li>
                                <li><span class="legend-dot legend-secondary"></span>Executive Residential Blocks</li>
                                <li><span class="legend-dot legend-green"></span>Botanical Parks & Open Spaces</li>
                            </ul>
                        </div>
                        <div class="legend-block">
                            <h3>Infrastructure Features</h3>
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Underground Electrification</li>
                                <li><i class="fa fa-check-circle"></i>Smart Waste Management</li>
                                <li><i class="fa fa-check-circle"></i>Dual Water Supply Grid</li>
                            </ul>
                        </div>
                        <div class="legend-block">
                            <h3>Key Distances</h3>
                            <ul class="distance-list">
                                <li><span>Marine Drive</span><strong>05 Mins</strong></li>
                                <li><span>New Gwadar Airport</span><strong>15 Mins</strong></li>
                                <li><span>Deep Sea Port</span><strong>10 Mins</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ph-highlights">
        <div class="page-container">
            <div class="highlights-grid">
                <article class="highlight-large">
                    <div class="highlight-symbol"><i class="fa fa-city"></i></div>
                    <span class="hero-label">The Flagship</span>
                    <h2>Sultan Boulevard</h2>
                    <p>The central commercial artery of Paragon Heights. Featuring 120ft wide roads, integrated luxury retail, and high-rise corporate towers designed for multinational presence.</p>
                </article>
                <article class="highlight-card">
                    <span class="hero-label">Residential</span>
                    <h3>Emerald Enclave</h3>
                    <p>Low-density luxury residential plots with private park access.</p>
                    <div class="highlight-icon"><i class="fa fa-park"></i></div>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><i class="fa fa-school"></i></div>
                    <h3>Education</h3>
                    <p>International School Hub</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><i class="fa fa-hospital"></i></div>
                    <h3>Healthcare</h3>
                    <p>Tertiary Care Hospital</p>
                </article>
            </div>
        </div>
    </section>

    <section class="ph-cta">
        <div class="page-container cta-panel">
            <div>
                <h2>Ready to secure your place in the future?</h2>
                <p>The Master Plan is more than a map—it's your roadmap to exponential growth in the heart of Gwadar. Consult with our investment specialists today.</p>
            </div>
            <div class="cta-buttons">
                <a class="button button-primary" href="#">Book a Consultation</a>
                <a class="button button-secondary" href="#">Download Brochure</a>
            </div>
        </div>
    </section>

    <section class="ph-footer-note">
        <p>Paragon Heights Gwadar — Architectural Prestige &amp; Global Trust</p>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.ph-master-plan section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.12
        });

        sections.forEach(section => {
            section.classList.add('fade-up');
            observer.observe(section);
        });

        const mapImage = document.querySelector('.map-image img');
        const mapContainer = document.querySelector('.map-image');
        if (mapContainer && mapImage) {
            mapContainer.addEventListener('mousemove', (event) => {
                const rect = mapContainer.getBoundingClientRect();
                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;
                mapImage.style.transformOrigin = `${x}% ${y}%`;
            });
            mapContainer.addEventListener('mouseleave', () => {
                mapImage.style.transformOrigin = 'center center';
            });
        }
    });
</script>