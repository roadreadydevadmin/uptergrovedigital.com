<?php
$services = [
    [
        'title' => 'Search Engine Optimization',
        'label' => 'Organic growth',
        'icon' => 'bi-search',
        'body' => 'Technical SEO, content plans, and local search improvements that help the right customers find you first.',
        'theme' => 'light',
    ],
    [
        'title' => 'Conversion-Focused Websites',
        'label' => 'Web design',
        'icon' => 'bi-window-sidebar',
        'body' => 'Fast, clear pages built around trust, speed, and the actions that move a visitor into your pipeline.',
        'theme' => 'blue',
    ],
    [
        'title' => 'Paid Media Campaigns',
        'label' => 'Ads',
        'icon' => 'bi-megaphone',
        'body' => 'Search, social, and retargeting campaigns shaped around clean offers, better landing pages, and measured ROI.',
        'theme' => 'navy',
    ],
    [
        'title' => 'Local Service Growth',
        'label' => 'Local leads',
        'icon' => 'bi-geo-alt',
        'body' => 'Google Business Profile, review strategy, and local landing pages for companies that win by being nearby.',
        'theme' => 'light',
    ],
    [
        'title' => 'Email and Automations',
        'label' => 'Retention',
        'icon' => 'bi-envelope-paper',
        'body' => 'Follow-up sequences, list cleanup, and simple automations that keep good leads from slipping away.',
        'theme' => 'blue',
    ],
    [
        'title' => 'Analytics and Reporting',
        'label' => 'Insights',
        'icon' => 'bi-bar-chart-line',
        'body' => 'Dashboards and monthly readouts that separate busy metrics from the signals that deserve action.',
        'theme' => 'navy',
    ],
];

$caseStudies = [
    [
        'title' => 'Local service visibility',
        'body' => 'Restructured service pages and Google profile content to improve map-pack presence and quote requests.',
    ],
    [
        'title' => 'Cleaner paid search funnel',
        'body' => 'Paired tighter keyword groups with dedicated landing pages so spend tracked directly to qualified leads.',
    ],
    [
        'title' => 'Website trust rebuild',
        'body' => 'Refreshed copy, speed, service hierarchy, and proof points to make the first visit feel credible.',
    ],
];

$process = [
    [
        'step' => '01',
        'title' => 'Discovery and audit',
        'body' => 'We review your goals, competitors, analytics, website, and current marketing channels to find the highest-leverage opportunities.',
    ],
    [
        'step' => '02',
        'title' => 'Strategy map',
        'body' => 'You get a practical plan with channel priorities, messaging direction, landing page needs, and measurable targets.',
    ],
    [
        'step' => '03',
        'title' => 'Build and launch',
        'body' => 'We create the pages, campaigns, content, automations, and tracking needed to launch with clean execution.',
    ],
    [
        'step' => '04',
        'title' => 'Optimize and report',
        'body' => 'Performance is reviewed regularly so we can improve spend, search visibility, conversion rate, and next-step clarity.',
    ],
];

$team = [
    [
        'name' => 'Strategy Lead',
        'role' => 'Growth planning',
        'body' => 'Aligns offers, audience, content, and channel priorities so the work has a clear commercial purpose.',
        'initials' => 'UD',
    ],
    [
        'name' => 'Web Specialist',
        'role' => 'Site experience',
        'body' => 'Turns positioning into fast, polished pages that are easy to scan and easy to act on.',
        'initials' => 'UX',
    ],
    [
        'name' => 'Campaign Manager',
        'role' => 'Traffic and reporting',
        'body' => 'Manages paid and organic campaigns with clean tracking, testing, and concise performance readouts.',
        'initials' => 'PM',
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uptergrove Digital | Digital Marketing, Websites, SEO, and Paid Media</title>
    <meta name="description" content="Uptergrove Digital builds conversion-focused websites, SEO systems, paid campaigns, and reporting for growing businesses.">
    <link rel="icon" href="assets/img/uptergrove-mark.png">
    <script>document.documentElement.classList.add('js');</script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg site-nav sticky-top" aria-label="Primary navigation">
        <div class="container">
            <a class="navbar-brand" href="#top" aria-label="Uptergrove Digital home">
                <img src="assets/img/uptergrove-digital-logo.png" alt="Uptergrove Digital" class="brand-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="siteNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">Use Cases</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-outline-navy" href="#contact">Request a proposal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="hero-section">
            <img src="assets/img/uptergrove-mark.png" alt="" class="hero-mark" aria-hidden="true">
            <div class="container position-relative">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-7 hero-copy">
                        <p class="eyebrow">Digital marketing studio</p>
                        <h1><span>Uptergrove</span><span>Digital</span></h1>
                        <p class="hero-lead">
                            Digital marketing, websites, SEO, and campaign systems for businesses that want sharper visibility and steadier lead flow.
                        </p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary-blue btn-lg">
                                <i class="bi bi-send"></i>
                                Get your free proposal
                            </a>
                            <a href="#services" class="btn btn-outline-navy btn-lg">
                                <i class="bi bi-grid"></i>
                                View services
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 hero-visual">
                        <div class="growth-console" aria-label="Marketing performance preview">
                            <div class="console-top">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="console-title">
                                <strong>Growth Snapshot</strong>
                                <span>Live strategy view</span>
                            </div>
                            <div class="metric-row">
                                <div>
                                    <span class="metric-label">Qualified leads</span>
                                    <strong>+38%</strong>
                                </div>
                                <div class="metric-bar"><span style="width: 78%"></span></div>
                            </div>
                            <div class="metric-row">
                                <div>
                                    <span class="metric-label">Organic traffic</span>
                                    <strong>+52%</strong>
                                </div>
                                <div class="metric-bar"><span style="width: 86%"></span></div>
                            </div>
                            <div class="metric-row">
                                <div>
                                    <span class="metric-label">Conversion lift</span>
                                    <strong>+24%</strong>
                                </div>
                                <div class="metric-bar"><span style="width: 66%"></span></div>
                            </div>
                            <div class="console-footer">
                                <i class="bi bi-check-circle-fill"></i>
                                Campaigns, content, and web systems aligned.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="capability-strip" aria-label="Core capabilities">
                    <span>SEO</span>
                    <span>Websites</span>
                    <span>Paid Media</span>
                    <span>Local Search</span>
                    <span>Automation</span>
                    <span>Analytics</span>
                </div>
            </div>
        </section>

        <section class="section-block" id="services">
            <div class="container">
                <div class="section-heading reveal">
                    <h2><span>Services</span></h2>
                    <p>Focused digital marketing services designed to help your business get found, trusted, and contacted.</p>
                </div>

                <div class="row g-4">
                    <?php foreach ($services as $index => $service): ?>
                        <div class="col-md-6">
                            <article class="service-card service-<?php echo htmlspecialchars($service['theme']); ?> reveal" style="--reveal-delay: <?php echo ($index % 2) * 90; ?>ms">
                                <div class="service-copy">
                                    <p class="service-label"><?php echo htmlspecialchars($service['label']); ?></p>
                                    <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($service['body']); ?></p>
                                    <a href="#contact" class="service-link">
                                        <span><i class="bi bi-arrow-up-right"></i></span>
                                        Learn more
                                    </a>
                                </div>
                                <div class="service-icon" aria-hidden="true">
                                    <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"></i>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-block" id="work">
            <div class="container">
                <div class="section-heading reveal">
                    <h2><span>Use Cases</span></h2>
                    <p>Examples of where a tighter digital system can quickly make the business easier to find and easier to choose.</p>
                </div>

                <div class="case-panel reveal">
                    <div class="row g-0">
                        <?php foreach ($caseStudies as $index => $case): ?>
                            <div class="col-lg-4">
                                <article class="case-item <?php echo $index < count($caseStudies) - 1 ? 'case-border' : ''; ?>">
                                    <h3><?php echo htmlspecialchars($case['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($case['body']); ?></p>
                                    <a href="#contact">Start a project <i class="bi bi-arrow-up-right"></i></a>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block process-section" id="process">
            <div class="container">
                <div class="section-heading reveal">
                    <h2><span>Process</span></h2>
                    <p>A straightforward path from audit to launch, with reporting that keeps the work anchored to results.</p>
                </div>

                <div class="accordion ud-accordion" id="processAccordion">
                    <?php foreach ($process as $index => $item): ?>
                        <?php $isOpen = $index === 0; ?>
                        <div class="accordion-item reveal" style="--reveal-delay: <?php echo $index * 80; ?>ms">
                            <h3 class="accordion-header">
                                <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#process-<?php echo $index; ?>" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>" aria-controls="process-<?php echo $index; ?>">
                                    <span><?php echo htmlspecialchars($item['step']); ?></span>
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </button>
                            </h3>
                            <div id="process-<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#processAccordion">
                                <div class="accordion-body">
                                    <?php echo htmlspecialchars($item['body']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-block" id="team">
            <div class="container">
                <div class="section-heading reveal">
                    <h2><span>Team</span></h2>
                    <p>Strategy, web, and campaign execution working together instead of operating in disconnected lanes.</p>
                </div>

                <div class="row g-4">
                    <?php foreach ($team as $index => $member): ?>
                        <div class="col-md-4">
                            <article class="team-card reveal" style="--reveal-delay: <?php echo $index * 90; ?>ms">
                                <div class="team-top">
                                    <div class="team-avatar"><?php echo htmlspecialchars($member['initials']); ?></div>
                                    <i class="bi bi-linkedin"></i>
                                </div>
                                <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                                <p class="team-role"><?php echo htmlspecialchars($member['role']); ?></p>
                                <p><?php echo htmlspecialchars($member['body']); ?></p>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-block testimonials-section" aria-labelledby="testimonials-title">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 id="testimonials-title"><span>Testimonials</span></h2>
                    <p>Clear strategy, cleaner execution, and digital work that is easy to understand after launch.</p>
                </div>

                <div class="testimonial-panel reveal">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <blockquote>
                                "Uptergrove Digital helped us understand what was working, fix what was slowing leads down, and launch a site that felt much more credible."
                            </blockquote>
                            <p>Service business owner</p>
                        </div>
                        <div class="col-lg-6">
                            <blockquote>
                                "The reporting finally connected our website, ads, and search traffic into one clear picture. We knew what to improve next."
                            </blockquote>
                            <p>Operations director</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block contact-section" id="contact">
            <div class="container">
                <div class="contact-panel reveal">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <p class="eyebrow">Let's make things happen</p>
                            <h2>Start with a focused digital growth review.</h2>
                            <p>
                                Share what you are trying to improve and we will outline the highest-impact next steps for your website, search, and campaigns.
                            </p>
                            <a class="contact-email" href="mailto:hello@uptergrovedigital.com">
                                <i class="bi bi-envelope"></i>
                                hello@uptergrovedigital.com
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <form class="proposal-form" action="mailto:hello@uptergrovedigital.com" method="post" enctype="text/plain">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="service" class="form-label">Primary goal</label>
                                        <select class="form-select" id="service" name="goal">
                                            <option>More qualified leads</option>
                                            <option>Better website conversion</option>
                                            <option>More local visibility</option>
                                            <option>Paid media performance</option>
                                            <option>Analytics and reporting</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us what you want to improve."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary-blue btn-lg w-100" type="submit">
                                            <i class="bi bi-send"></i>
                                            Request a proposal
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <a href="#top" aria-label="Uptergrove Digital home">
                    <img src="assets/img/uptergrove-digital-logo.png" alt="Uptergrove Digital" class="footer-logo">
                </a>
                <div class="footer-links">
                    <a href="#services">Services</a>
                    <a href="#work">Use Cases</a>
                    <a href="#process">Process</a>
                    <a href="#contact">Contact</a>
                </div>
                <p>&copy; <?php echo date('Y'); ?> Uptergrove Digital. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/site.js"></script>
</body>
</html>
