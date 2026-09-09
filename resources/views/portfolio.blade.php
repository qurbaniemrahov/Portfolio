<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Qurbani Əmrahov — Laravel Back-End Developer building dependable APIs, e-commerce systems and database-driven products.">
    <meta name="theme-color" content="#111511">
    <title>Qurbani Əmrahov — Back-End Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <div class="noise" aria-hidden="true"></div>

    <header class="site-header" id="top">
        <a class="brand" href="#top" aria-label="Qurbani Əmrahov home">
            <span class="brand-mark">QƏ</span>
            <span class="brand-text">Qurbani<br>Əmrahov</span>
        </a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="#about">About</a><a href="#experience">Experience</a><a href="#stack">Stack</a><a href="#contact">Contact</a>
        </nav>
        <div class="header-actions">
            <button class="icon-button theme-toggle" type="button" aria-label="Switch color theme">
                <svg class="sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.42-1.42M17.66 6.34l1.41-1.41"/></svg>
                <svg class="moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"/></svg>
            </button>
            <button class="menu-button" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span></button>
        </div>
    </header>

    <div class="mobile-menu" aria-hidden="true">
        <a href="#about">About</a><a href="#experience">Experience</a><a href="#stack">Stack</a><a href="#contact">Contact</a>
    </div>

    <main id="main">
        <section class="hero section-shell">
            <div class="hero-copy reveal">
                <div class="availability"><span></span> Available for new opportunities</div>
                <p class="eyebrow">Laravel · PHP · MySQL</p>
                <h1>I build the logic<br>behind <em>useful</em><br>digital products.</h1>
                <p class="hero-intro">Back-End Developer focused on dependable Laravel applications, clean APIs and scalable e-commerce systems.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#contact">Let's work together <span>↗</span></a>
                    <a class="text-link" href="https://github.com/qurbaniemrahov" target="_blank" rel="noreferrer">View GitHub <span>↗</span></a>
                </div>
            </div>
            <div class="hero-visual reveal reveal-delay">
                <div class="portrait-wrap">
                    <div class="portrait-frame"><img src="{{ asset('assets/images/qurbani-emrahov.png') }}" alt="Portrait of Qurbani Əmrahov"></div>
                    <div class="orbit-label"><span>BACK-END DEVELOPER · LARAVEL · </span></div>
                </div>
            </div>
            <div class="hero-index">01 / 05</div>
        </section>

        <section class="marquee" aria-label="Core expertise"><div class="marquee-track"><span>Laravel</span><i>✦</i><span>REST APIs</span><i>✦</i><span>MySQL</span><i>✦</i><span>E-commerce</span><i>✦</i><span>Clean code</span><i>✦</i><span>Laravel</span><i>✦</i><span>REST APIs</span><i>✦</i><span>MySQL</span><i>✦</i></div></section>

        <section class="about section-shell" id="about">
            <div class="section-kicker reveal"><span>02</span> Profile</div>
            <div class="about-grid">
                <h2 class="reveal">Backend systems<br>that stay <em>solid</em><br>as they grow.</h2>
                <div class="about-copy reveal">
                    <p class="lead">I turn business requirements into reliable server-side applications.</p>
                    <p>My work spans Laravel architecture, RESTful APIs, relational database design and e-commerce workflows. I care about clear separation of concerns, maintainable code and software that keeps performing beyond launch day.</p>
                    <div class="stats">
                        <div><strong data-count="3">3+</strong><span>Years of<br>experience</span></div>
                        <div><strong data-count="2">2</strong><span>Production<br>companies</span></div>
                        <div><strong>∞</strong><span>Drive to<br>improve</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience section-shell" id="experience">
            <div class="section-kicker reveal"><span>03</span> Experience</div>
            <div class="section-heading reveal"><h2>Where I've made<br>an <em>impact.</em></h2><p>Building, maintaining and improving backend products across e-commerce, IT solutions and education.</p></div>
            <div class="timeline">
                <article class="job reveal">
                    <div class="job-date">SEP 2023 — PRESENT</div>
                    <div class="job-main"><span class="job-number">01</span><h3>Back-End Developer</h3><a href="https://www.toolino.com" target="_blank" rel="noreferrer">Toolino LLC ↗</a></div>
                    <div class="job-details"><p>Developing and maintaining the server-side layer of the Toolino e-commerce platform with Laravel and MVC architecture.</p><ul><li>RESTful APIs & integrations</li><li>MySQL design & optimization</li><li>E-commerce business logic</li><li>Reliability & code quality</li></ul></div>
                </article>
                <article class="job reveal">
                    <div class="job-date">JAN 2023 — AUG 2023</div>
                    <div class="job-main"><span class="job-number">02</span><h3>Back-End Developer</h3><span>Proton.az MMC</span></div>
                    <div class="job-details"><p>Built backend functionality for web applications using PHP, Laravel and structured MVC patterns.</p><ul><li>Application backend</li><li>API development</li><li>MySQL integration</li><li>Git collaboration</li></ul></div>
                </article>
                <article class="job reveal">
                    <div class="job-date">SEP 2022 — DEC 2022</div>
                    <div class="job-main"><span class="job-number">03</span><h3>Programming Instructor</h3><span>İmpuls Tədris Mərkəzi</span></div>
                    <div class="job-details"><p>Taught core programming concepts through practical tasks, structured materials and hands-on problem solving.</p></div>
                </article>
            </div>
        </section>

        <section class="stack section-shell" id="stack">
            <div class="section-kicker reveal"><span>04</span> Technical stack</div>
            <div class="stack-layout">
                <div class="stack-title reveal"><h2>Tools I use to<br><em>ship well.</em></h2><p>A practical toolkit for building robust server-side products from data model to API.</p></div>
                <div class="skill-groups">
                    <article class="skill-group reveal"><span>01</span><div><h3>Backend</h3><p>PHP · Laravel · Core PHP · RESTful API · MVC</p></div></article>
                    <article class="skill-group reveal"><span>02</span><div><h3>Data</h3><p>MySQL · Relational modeling · Queries · Optimization</p></div></article>
                    <article class="skill-group reveal"><span>03</span><div><h3>Frontend</h3><p>HTML · CSS · JavaScript · Bootstrap</p></div></article>
                    <article class="skill-group reveal"><span>04</span><div><h3>Workflow</h3><p>Git · GitHub · Composer · VS Code</p></div></article>
                </div>
            </div>
            <div class="education reveal"><span>Education</span><strong>Azerbaijan Technology University</strong><p>Logistics & Management of Enterprises · 2012—2017</p></div>
        </section>

        <section class="contact section-shell" id="contact">
            <div class="section-kicker reveal"><span>05</span> Contact</div>
            <div class="contact-grid">
                <div class="contact-copy reveal"><p class="eyebrow">Have a project in mind?</p><h2>Let's build<br>something <em>solid.</em></h2><p>I'm open to backend opportunities, Laravel projects and conversations about useful software.</p></div>
                <div class="contact-links reveal">
                    <a href="mailto:qurbaniemrahov777@gmail.com"><span>Email</span><strong>qurbaniemrahov777@gmail.com</strong><i>↗</i></a>
                    <a href="tel:+994502777114"><span>Phone</span><strong>+994 50 277 71 14</strong><i>↗</i></a>
                    <a href="https://github.com/qurbaniemrahov" target="_blank" rel="noreferrer"><span>GitHub</span><strong>github.com/qurbaniemrahov</strong><i>↗</i></a>
                </div>
            </div>
        </section>
    </main>

    <footer><a href="#top" class="brand"><span class="brand-mark">QƏ</span></a><p>Designed for clarity. Built for the web.</p><span>© {{ date('Y') }} Qurbani Əmrahov</span></footer>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>
</html>

