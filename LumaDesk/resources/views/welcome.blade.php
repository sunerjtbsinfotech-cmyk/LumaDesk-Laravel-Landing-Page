<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LumaDesk - A modern study and productivity space.">
    <title>LumaDesk | Focus Better. Create More.</title>

    {{-- Laravel Blade asset helpers --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- ==================== NAVIGATION ==================== -->
    <header class="site-header">
        <div class="container navbar">
            <a href="#home" class="logo" aria-label="LumaDesk home">
                <span class="logo-mark">L</span>
                <span>LumaDesk</span>
            </a>

            <button class="menu-toggle"
                    type="button"
                    aria-label="Open navigation menu"
                    aria-expanded="false">
                ☰
            </button>

            <nav aria-label="Main navigation">
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#spaces">Spaces</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a class="nav-cta" href="#contact">Book a Space</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <!-- ==================== HERO ==================== -->
        <section class="hero" id="home">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Modern Study & Productivity Space</span>
                    <h1>
                        Your space to
                        <span class="gradient-text">focus, create,</span>
                        and achieve.
                    </h1>

                    <p>
                        LumaDesk gives students, freelancers, and young professionals
                        a comfortable environment where ideas can grow and distractions
                        stay outside.
                    </p>

                    <div class="hero-actions">
                        <a class="btn btn-primary" href="#spaces">Explore Spaces →</a>
                        <a class="btn btn-outline" href="#about">Learn More</a>
                    </div>
                </div>

                <div class="hero-card-wrap">
                    <div class="workspace-card">
                        <div class="workspace-top">
                            <strong>My LumaDesk</strong>
                            <div class="dots" aria-hidden="true">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <div class="workspace-screen">
                            <div class="room-panel">
                                <div>
                                    <div class="mini-room">Focus</div>
                                    <div class="mini-room">Creative</div>
                                    <div class="mini-room">Meeting</div>
                                </div>
                                <small>3 workspace zones</small>
                            </div>

                            <div class="desk-panel">
                                <div class="desk" aria-label="Illustration of a modern workspace"></div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-badge">⚡ High-Speed Wi-Fi</div>
                </div>
            </div>
        </section>

        <!-- ==================== STATS ==================== -->
        <section class="stats">
            <div class="container stats-grid">
                <div class="stat">
                    <strong>24/7</strong>
                    <span>Productivity mindset</span>
                </div>
                <div class="stat">
                    <strong>100%</strong>
                    <span>Focus-friendly environment</span>
                </div>
                <div class="stat">
                    <strong>∞</strong>
                    <span>Ideas worth creating</span>
                </div>
            </div>
        </section>

        <!-- ==================== ABOUT ==================== -->
        <section class="section" id="about">
            <div class="container about-grid reveal">
                <div class="about-visual">
                    <div class="about-illustration" aria-hidden="true">💡</div>
                </div>

                <div class="about-copy">
                    <span class="eyebrow">About LumaDesk</span>
                    <h2>A better environment for better ideas.</h2>
                    <p>
                        LumaDesk is designed for people who want to study, work,
                        brainstorm, or simply spend time building something meaningful.
                        Every area is planned around comfort, focus, and productivity.
                    </p>

                    <ul class="check-list">
                        <li>Quiet and comfortable study areas</li>
                        <li>Reliable high-speed internet</li>
                        <li>Convenient charging stations</li>
                        <li>Spaces for individual and group work</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ==================== SPACES ==================== -->
        <section class="section spaces" id="spaces">
            <div class="container">
                <div class="section-heading reveal">
                    <span class="eyebrow">Choose Your Space</span>
                    <h2>Designed for the way you work.</h2>
                    <p>
                        Whether you need silence, collaboration, or privacy,
                        there is a LumaDesk space for you.
                    </p>
                </div>

                <div class="space-grid">

                    <article class="space-card reveal">
                        <div class="space-icon">📚</div>
                        <h3>Focus Zone</h3>
                        <p>
                            Individual desks made for studying, reading,
                            coding, and deep concentration.
                        </p>
                        <button class="space-link btn-reset"
                                type="button"
                                data-space="Focus Zone">
                            Select space →
                        </button>
                    </article>

                    <article class="space-card reveal">
                        <div class="space-icon">💻</div>
                        <h3>Creative Zone</h3>
                        <p>
                            Open collaborative tables for projects,
                            brainstorming, and team activities.
                        </p>
                        <button class="space-link btn-reset"
                                type="button"
                                data-space="Creative Zone">
                            Select space →
                        </button>
                    </article>

                    <article class="space-card reveal">
                        <div class="space-icon">🎯</div>
                        <h3>Meeting Pods</h3>
                        <p>
                            Private spaces for presentations, discussions,
                            interviews, and small meetings.
                        </p>
                        <button class="space-link btn-reset"
                                type="button"
                                data-space="Meeting Pods">
                            Select space →
                        </button>
                    </article>

                </div>
            </div>
        </section>

        <!-- ==================== FEATURES ==================== -->
        <section class="section" id="features">
            <div class="container">
                <div class="section-heading reveal">
                    <span class="eyebrow">Everything You Need</span>
                    <h2>Small details. Big productivity.</h2>
                    <p>
                        LumaDesk combines practical amenities with a comfortable
                        environment to help you stay focused.
                    </p>
                </div>

                <div class="features-grid">

                    <div class="feature reveal">
                        <div class="feature-icon">⚡</div>
                        <h3>Fast Wi-Fi</h3>
                        <p>Stay connected while researching, studying, or working online.</p>
                    </div>

                    <div class="feature reveal">
                        <div class="feature-icon">🔌</div>
                        <h3>Charging Stations</h3>
                        <p>Convenient power access keeps your devices ready for work.</p>
                    </div>

                    <div class="feature reveal">
                        <div class="feature-icon">📚</div>
                        <h3>Quiet Areas</h3>
                        <p>Dedicated zones help minimize distractions during deep work.</p>
                    </div>

                    <div class="feature reveal">
                        <div class="feature-icon">☕</div>
                        <h3>Refreshment Corner</h3>
                        <p>Take a quick break and recharge before getting back to work.</p>
                    </div>

                    <div class="feature reveal">
                        <div class="feature-icon">💡</div>
                        <h3>Bright Workspaces</h3>
                        <p>Well-lit desks create a welcoming and productive atmosphere.</p>
                    </div>

                    <div class="feature reveal">
                        <div class="feature-icon">🪑</div>
                        <h3>Comfortable Seating</h3>
                        <p>Thoughtfully arranged seating supports longer productive sessions.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== CTA ==================== -->
        <section class="cta">
            <div class="container">
                <div class="cta-box reveal">
                    <h2>Ready to get things done?</h2>
                    <p>
                        Find your focus, bring your ideas, and make your next productive
                        session count at LumaDesk.
                    </p>
                    <a class="btn" href="#contact">Book Your Space →</a>
                </div>
            </div>
        </section>

        <!-- ==================== CONTACT ==================== -->
        <section class="section contact" id="contact">
            <div class="container contact-grid">

                <div class="contact-info reveal">
                    <span class="eyebrow">Get In Touch</span>
                    <h2>Let's create a productive day.</h2>
                    <p>
                        Have a question about LumaDesk? Send us a message.
                        This form is a front-end demonstration for the activity.
                    </p>

                    <div class="contact-details">
                        <div class="contact-item">📍 <span>123 Focus Avenue, Manila</span></div>
                        <div class="contact-item">✉️ <span>hello@lumadesk.test</span></div>
                        <div class="contact-item">🕐 <span>Monday – Sunday</span></div>
                    </div>
                </div>

                <form class="contact-form reveal" id="contactForm" novalidate>
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name"
                                   placeholder="Your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email"
                                   placeholder="you@example.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message"
                                  placeholder="Tell us how we can help..." required></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Send Message
                    </button>

                    <p class="form-message" id="formMessage" aria-live="polite"></p>
                </form>

            </div>
        </section>

    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer class="footer">
        <div class="container footer-grid">
            <a href="#home" class="logo">
                <span class="logo-mark">L</span>
                <span>LumaDesk</span>
            </a>

            <p>© {{ date('Y') }} LumaDesk. Created for a Laravel web development activity.</p>

            <div class="socials" aria-label="Social media links">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="Instagram">◎</a>
                <a href="#" aria-label="LinkedIn">in</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
