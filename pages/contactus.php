<section class="contact-hero">
    <div class="contact-hero__wrapper">
        <span class="contact-eyebrow">Concierge & Partnerships</span>
        <h1>Get in touch</h1>
        <p>Contact our portfolio advisors to discuss plot sales, B2B opportunities, and joint venture collaborations. Experience architectural excellence in the heart of Gwadar.</p>
    </div>
</section>

<main class="contact-layout">
    <aside class="contact-panel">
        <div class="panel-heading">
            <h2>Communication Channels</h2>
        </div>
        <div class="contact-list">
            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <div>
                    <p class="contact-label">Direct Line</p>
                    <p class="contact-value">0332-7272448</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">💬</div>
                <div>
                    <p class="contact-label">WhatsApp Portfolio Advisor</p>
                    <p class="contact-value">0332-7272448</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <div>
                    <p class="contact-label">Electronic Correspondence</p>
                    <p class="contact-value"><a href="mailto:sultan@paragonheights-gwadar.com">sultan@paragonheights-gwadar.com</a></p>
                </div>
            </div>
        </div>

        <div class="contact-share">
            <h3>Digital Ecosystem</h3>
            <div class="contact-socials">
                <a href="#" aria-label="Website">🌐</a>
                <a href="#" aria-label="Share">🔗</a>
                <a href="#" aria-label="Campaign">📣</a>
            </div>
        </div>
    </aside>

    <section class="contact-form-card">
        <div class="form-heading">
            <h2>Inquiry Form</h2>
            <p>Submit your request and one of our advisors will contact you shortly.</p>
        </div>
        <form id="contactPageForm" class="contact-page-form" method="post">
            <div class="form-row">
                <label for="contactName">Full Name</label>
                <input id="contactName" name="name" type="text" class="field-input" placeholder="Full Name" required>
            </div>
            <div class="form-row">
                <label for="contactEmail">Email Address</label>
                <input id="contactEmail" name="email" type="email" class="field-input" placeholder="Email Address" required>
            </div>
            <div class="form-row">
                <label for="contactPhone">Contact Number</label>
                <input id="contactPhone" name="phone" type="tel" class="field-input" placeholder="Contact Number" required>
            </div>
            <div class="form-row">
                <label for="contactMessage">Message</label>
                <textarea id="contactMessage" name="message" class="field-input field-textarea" placeholder="Please contact us to discuss plot sales, B2B opportunities, and joint venture collaborations." rows="5" required></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="form-button">Submit Inquiry</button>
            </div>
            <div id="contactPageResponse" class="form-response"></div>
        </form>
    </section>
</main>

<section class="contact-map-section">
    <div class="contact-map-layout">
        <div class="location-summary">
            <h3>The Command Center</h3>
            <p>Our regional headquarters provides a centralized hub for investors and partners looking to shape the future of Gwadar.</p>
            <div class="location-row">
                <span class="location-icon">📍</span>
                <div>
                    <p class="location-label">Gwadar Site Office</p>
                    <p>Airport Road, Gwadar, Balochistan, Pakistan</p>
                </div>
            </div>
            <div class="location-row">
                <span class="location-icon">⏱️</span>
                <div>
                    <p class="location-label">Operational Hours</p>
                    <p>Monday — Saturday: 09:00 - 18:00 PKT</p>
                </div>
            </div>
        </div>

        <div class="map-panel">
            <div class="map-frame">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOGhFCCcQZn9DPHPrCuoCjb08TMOfKC9ng0YTEeqTV8t-hPJreX9AODw2DKJc8YBFAH3LyGK7_vW_YyaToXey6J9JJu9VMRf-BJcl89edwNQrqYVrRS2j0IjhMCnh-WwwkM2Wln72jIJe8HnI_UQcTE6pndFkh5whtJKcCg7R_MpUtjb5lRpi8xFPwi7MclzMu-tA7Ug5b6nFBq8uUnSGcjKkJZC25_bz_5o6oQ7bW3V0Ksu-FX08cyk62CvYgCp9Zp3KFIakt78eR" alt="Location Map" class="map-image">
                <div class="map-chip">
                    <h4>Prime Development Zone</h4>
                    <p>Strategically located within the Port Authority's vision for 2030 development.</p>
                </div>
                <div class="map-marker">
                    <div class="map-marker-icon">📍</div>
                    <span>PARAGON HEIGHTS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const contactPageForm = document.getElementById('contactPageForm');
    const contactPageResponse = document.getElementById('contactPageResponse');

    if (contactPageForm) {
        contactPageForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('pages/process_contact_form.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    contactPageResponse.textContent = data.message || 'Form submitted successfully.';
                    contactPageResponse.style.color = data.status === 'success' ? '#0f663a' : '#ba1a1a';
                    if (data.status === 'success') {
                        contactPageForm.reset();
                    }
                })
                .catch(() => {
                    contactPageResponse.textContent = 'An error occurred. Please try again.';
                    contactPageResponse.style.color = '#ba1a1a';
                });
        });
    }
</script>