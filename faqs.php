<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Paragon Heights Gwadar</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        :root {
            --faq-bg: #07172f;
            --faq-accent: #feb700;
            --faq-surface: rgba(255, 255, 255, 0.88);
            --faq-text: #0d1c2e;
            --faq-muted: #5f6c7f;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            background: #f8f9ff;
            font-family: 'Inter', sans-serif;
            color: var(--faq-text);
        }

        .page-container {
            width: min(100%, 1280px);
            margin: 0 auto;
            padding: 0 24px;
        }

        .faq-hero {
            position: relative;
            min-height: 72vh;
            display: flex;
            align-items: center;
            padding: 90px 0;
            overflow: hidden;
        }

        .hero-bg,
        .hero-gradient {
            position: absolute;
            inset: 0;
        }

        .hero-bg {
            background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDfOTq9nfAS_Fj1M9M9GxqK6AcJtArHGSAl8reqKoMX34z07G8vmDPxSWD_4w0fjy9zt3hficQLD2JnHIXSeXsGTB5eUWtmEC0-W9I4KCvMScLLCt0CTdDQ5D__PpegZfUHZb4b6E7r6BjFYEmqIu-j1wNTHEMx1va1-nr_wqcD1KgNq3m0B_fEdVgklBWDzsZALs7kJC-IVypPwq80xTpLc2zG4WCC6iA31oNmIdzNFeKgsm0pUkUMLQHvaGse4L_tQTY3gLFdwhUv') center/cover no-repeat;
            filter: brightness(0.7);
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(0, 25, 54, 0.8) 0%, rgba(0, 25, 54, 0.38) 45%, rgba(255, 255, 255, 0.04) 100%);
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 760px;
        }

        .hero-pretitle {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
            color: var(--faq-accent);
            font-size: 0.84rem;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            font-weight: 700;
        }

        .hero-heading {
            margin: 0 0 1.25rem;
            font-size: clamp(2.8rem, 6vw, 4.6rem);
            line-height: 1.02;
            letter-spacing: -0.03em;
            font-weight: 800;
            max-width: 12ch;
        }

        .hero-copy {
            margin: 0;
            font-size: 1.05rem;
            line-height: 1.85;
            color: rgba(255, 255, 255, 0.92);
            max-width: 46rem;
        }

        .section {
            width: 100%;
            padding: 3.5rem 0;
        }

        .section-content {
            width: min(100%, 1200px);
            margin: 0 auto;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 1024px) {
            .faq-grid {
                grid-template-columns: 280px minmax(0, 1fr);
            }
        }

        .faq-sidebar {
            width: 100%;
        }

        .faq-sidebar-inner {
            position: sticky;
            top: 120px;
            align-self: start;
        }

        .faq-sidebar h3 {
            margin: 0 0 1.5rem;
        }

        .faq-sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .faq-sidebar li {
            margin-bottom: 1rem;
        }

        .faq-sidebar a {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.75);
            border-radius: 24px;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease;
            opacity: 0;
        }

        .accordion-item.active .accordion-content {
            max-height: 800px;
            opacity: 1;
        }

        .accordion-item.active .icon-rotate {
            transform: rotate(180deg);
        }

        .nav-underline {
            position: relative;
        }

        .nav-underline::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--faq-accent);
            transition: width 0.3s ease;
        }

        .nav-underline:hover::after {
            width: 100%;
        }

        .cta-panel {
            position: relative;
            overflow: hidden;
        }

        .cta-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.45), transparent 35%), linear-gradient(180deg, rgba(248, 249, 255, 0.96), rgba(248, 249, 255, 0.88));
            pointer-events: none;
        }

        .cta-inner {
            position: relative;
            z-index: 1;
            display: grid;
            gap: 1.5rem;
            text-align: center;
        }

        .cta-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .cta-btn,
        .cta-btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem 1.8rem;
            border-radius: 999px;
            font-weight: 700;
            transition: all 0.25s ease;
        }

        .cta-btn {
            background: var(--faq-accent);
            color: #102040;
            border: 2px solid transparent;
        }

        .cta-btn-secondary {
            background: transparent;
            color: var(--faq-text);
            border: 2px solid var(--faq-text);
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 40px rgba(16, 32, 64, 0.12);
        }

        .cta-btn-secondary:hover {
            background: var(--faq-text);
            color: #fff;
        }

        @media (max-width: 1023px) {
            .faq-hero {
                min-height: auto;
                padding: 70px 0 50px;
            }

            .hero-inner {
                text-align: center;
                margin: 0 auto;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }

            .faq-sidebar-inner {
                position: static;
            }
        }

        @media (max-width: 767px) {
            .page-container {
                padding: 0 16px;
            }

            .hero-heading {
                font-size: 2.6rem;
            }

            .hero-copy {
                font-size: 1rem;
            }

            .faq-hero {
                padding: 56px 0 40px;
            }

            .section {
                padding: 2rem 0;
            }

            .accordion-item {
                padding: 1.6rem;
            }

            .cta-actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <?php include_once './pages/social-icons.php'; ?>
    <?php include_once './pages/navbar.php'; ?>

    <main>
        <section class="faq-hero">
            <div class="hero-bg" aria-hidden="true"></div>
            <div class="hero-gradient" aria-hidden="true"></div>
            <div class="page-container hero-inner">
                <span class="hero-pretitle">Investor Support Center</span>
                <h1 class="hero-heading">Frequently Asked Questions</h1>
                <p class="hero-copy">
                    Discover clarity at every step. Our FAQ hub delivers precise information for global investors, combining strong visual hierarchy with a clean modern presentation.
                </p>
            </div>
        </section>

        <section class="section">
            <div class="section-content faq-grid">
                <aside class="faq-sidebar">
                    <div class="faq-sidebar-inner">
                        <h3 class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-6 tracking-widest">Categories</h3>
                        <ul class="space-y-4">
                            <li><a class="flex items-center gap-3 font-body-md text-secondary font-bold nav-underline" href="#overview"><span class="w-1.5 h-1.5 bg-secondary rounded-full"></span> Project Overview</a></li>
                            <li><a class="flex items-center gap-3 font-body-md text-on-surface hover:text-secondary transition-colors nav-underline" href="#investment"><span class="w-1.5 h-1.5 bg-transparent rounded-full"></span> Investment & Legal</a></li>
                            <li><a class="flex items-center gap-3 font-body-md text-on-surface hover:text-secondary transition-colors nav-underline" href="#location"><span class="w-1.5 h-1.5 bg-transparent rounded-full"></span> Location & Connectivity</a></li>
                            <li><a class="flex items-center gap-3 font-body-md text-on-surface hover:text-secondary transition-colors nav-underline" href="#status"><span class="w-1.5 h-1.5 bg-transparent rounded-full"></span> Development Status</a></li>
                        </ul>
                    </div>
                </aside>

                <div class="space-y-20">
                    <div class="space-y-8" id="overview">
                        <h2 class="font-headline-lg text-headline-lg text-primary border-l-4 border-secondary-container pl-6">Project Overview</h2>
                        <div class="space-y-2">
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer active" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">What is the vision behind Paragon Heights?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        Paragon Heights is designed to be the architectural crown jewel of Gwadar. Our vision is to create a vertical city that combines luxury residential spaces with high-end commercial hubs, setting a new standard for urban development in the Smart Port City. We prioritize sustainability, security, and prestige for every investor.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">What types of plots are available?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        We offer a range of high-rise commercial and residential plots, including our flagship Diamond and Gold Commercial Blocks. These are meticulously planned to support high-density development while maintaining architectural integrity and aesthetic flow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8" id="investment">
                        <h2 class="font-headline-lg text-headline-lg text-primary border-l-4 border-secondary-container pl-6">Investment & Legal</h2>
                        <div class="space-y-2">
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">Is Paragon Heights GDA approved?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        Yes, Paragon Heights is fully approved by the Gwadar Development Authority (GDA), ensuring a secure and transparent investment environment. All NOCs and regulatory clearances are in place for investor peace of mind and long-term capital appreciation.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">What are the payment plan options for overseas investors?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        We offer flexible 3 to 5-year installment plans tailored for international investors. Payments can be made via secure wire transfer, and our digital portal allows you to track your investment and project milestones in real-time from anywhere in the world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8" id="location">
                        <h2 class="font-headline-lg text-headline-lg text-primary border-l-4 border-secondary-container pl-6">Location & Connectivity</h2>
                        <div class="space-y-2">
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">How close is the project to the airport?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        Strategically located adjacent to the New Gwadar Greenfield International Airport, offering unparalleled global connectivity. Residents and business owners can enjoy direct access to international travel hubs within a 5-minute drive.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8" id="status">
                        <h2 class="font-headline-lg text-headline-lg text-primary border-l-4 border-secondary-container pl-6">Development Status</h2>
                        <div class="space-y-2">
                            <div class="accordion-item glass-card p-6 shadow-[0_10px_30px_rgba(0,33,71,0.03)] cursor-pointer" onclick="toggleAccordion(this)">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-headline-md text-[20px] text-on-surface">What is the current construction milestone?</h4>
                                    <span class="material-symbols-outlined text-secondary icon-rotate transition-transform duration-300">expand_more</span>
                                </div>
                                <div class="accordion-content">
                                    <p class="pt-6 font-body-md text-on-surface-variant leading-relaxed">
                                        Construction is progressing in phases with site readiness completed and groundwork underway. Our team is focused on delivering utilities, roads, and core infrastructure ahead of vertical development for commercial and residential towers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-panel">
            <div class="section-content cta-inner text-center">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-6">Still have questions?</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">
                    Our dedicated portfolio advisors are available for personalized consultations. Let us help you curate your investment strategy in the heart of Gwadar.
                </p>
                <div class="cta-actions">
                    <a class="cta-btn" href="#">
                        Contact Our Advisors
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a class="cta-btn-secondary" href="#">
                        Download Brochure
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include_once './pages/footer.php'; ?>
    <?php include_once './pages/contactform.php'; ?>

    <script>
        function toggleAccordion(element) {
            const items = document.querySelectorAll('.accordion-item');
            const isActive = element.classList.contains('active');

            items.forEach(item => {
                item.classList.remove('active');
            });

            if (!isActive) {
                element.classList.add('active');
            }
        }

        document.querySelectorAll('aside a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                document.querySelectorAll('aside a').forEach(a => {
                    a.classList.remove('text-secondary', 'font-bold');
                    a.classList.add('text-on-surface');
                    const span = a.querySelector('span');
                    if (span) span.classList.replace('bg-secondary', 'bg-transparent');
                });
                this.classList.add('text-secondary', 'font-bold');
                const span = this.querySelector('span');
                if (span) span.classList.replace('bg-transparent', 'bg-secondary');

                window.scrollTo({
                    top: targetElement.offsetTop - 120,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>