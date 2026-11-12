<?php require_once __DIR__ . '/feedback.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f2f5fa">
  <meta name="description" content="Project portfolio of John Marl Abogado, featuring community, campus, and student service systems.">
  <title>John Marl Abogado — Project Portfolio</title>
  
  
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="wrap header">
    <a class="wordmark" href="#top" aria-label="John Marl Abogado home"><span class="monogram">JMA</span>John Marl Abogado</a>
    <nav class="nav" aria-label="Main navigation"><a href="#work">Projects</a><a href="#about">About</a><a class="nav-cta" href="#work">Rate a project</a></nav>
  </header>
  <main id="top">
    <section class="wrap hero">
      <div>
        <div class="eyebrow">Project portfolio</div>
        <h1>Systems for the way people <span>work and connect.</span></h1>
        <p class="hero-copy">I’m John Marl Abogado. I’m learning to build practical web systems, from student services to tools that help a community keep requests moving.</p>
        <div class="hero-actions"><a class="btn" href="#work">Explore the projects <span aria-hidden="true">↓</span></a><a class="quiet-link" href="#about">A little about me <span aria-hidden="true">↗</span></a></div>
      </div>
      <aside class="hero-board" aria-label="Three featured systems">
        <div class="board-top"><span>Selected work</span><span>Portfolio / 01—03</span></div>
        <div class="board-count">03</div><div class="board-label">systems shaped around everyday tasks</div>
        <div class="board-list"><div class="board-row"><span><i class="status-dot"></i>Community services</span><small>Barangay portal</small></div><div class="board-row"><span><i class="status-dot" style="background:#f1b95e"></i>Campus experience</span><small>Canteen site</small></div><div class="board-row"><span><i class="status-dot" style="background:#6ec5d0"></i>Student services</span><small>Enrollment system</small></div></div>
      </aside>
    </section>
    <div class="wrap intro-strip"><span><b>Based on:</b> practical service workflows</span><span><b>Interests:</b> web development · useful systems</span><span><b>Focus:</b> clear, approachable interfaces</span></div>

    <section class="wrap section" id="work">
      <div class="section-head"><div><div class="eyebrow">Selected projects</div><h2 class="section-title">Three systems, three different needs.</h2></div><p class="section-summary">Each project looks at a familiar task and gives it a clearer path, whether that’s requesting a local service, browsing a menu, or following an enrollment application.</p></div>
      <article class="feature">
        <div class="feature-art" aria-hidden="true"><div class="portal"><div class="portal-bar"><span class="portal-brand">ESTANZA SERVICES</span><span class="portal-user">Resident</span></div><div class="portal-content"><div class="portal-greet">YOUR COMMUNITY DASHBOARD</div><div class="portal-title">Good morning, Maria</div><div class="portal-stats"><div class="portal-stat"><b>02</b><span>MY REQUESTS</span></div><div class="portal-stat"><b>01</b><span>IN PROGRESS</span></div><div class="portal-stat"><b>03</b><span>UPDATES</span></div></div><div class="portal-request"><span>Certificate of Residency</span><span class="portal-pill">In review</span></div><div class="portal-request"><span>Streetlight concern · Zone 2</span><span class="portal-pill">Assigned</span></div></div></div></div>
        <div class="feature-info"><div class="project-number">01 · COMMUNITY SERVICES</div><h3>Barangay Estanza Community Services Portal</h3><p>A portal concept for residents to request certificates, report local concerns, and follow updates. Staff review the submissions, while an administrator verifies new resident accounts.</p><div class="tags"><span class="tag">Laravel 12</span><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">Blade</span><span class="tag">Tailwind CSS</span></div><ul class="feature-points"><li>Resident, staff, and administrator workspaces</li><li>Certificate and report status history</li><li>Account verification before resident services</li></ul><?php render_feedback('barangay', 'John Marl Abogado'); ?></div>
      </article>
      <div class="project-grid">
        <article class="project-card"><div class="card-art canteen-art" aria-hidden="true"><div class="menu-board"><div class="menu-board-top">CCDI campus canteen</div><div class="menu-board-title">Today’s favorites</div><div class="menu-line"><span>Siomai meal</span><b>Menu</b></div><div class="menu-line"><span>Drinks &amp; sweets</span><b>Menu</b></div><div class="menu-line"><span>Hot drinks</span><b>Menu</b></div></div></div><div class="card-copy"><div class="project-number">02 · CAMPUS EXPERIENCE</div><h3>CCDI Campus Canteen</h3><p>A multi-page canteen website that organizes meals, drinks, sweets, and hot drinks into easy-to-browse sections. The order and confirmation screens are front-end demonstrations, not a live checkout system.</p><div class="tags"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">Multi-page site</span></div><?php render_feedback('canteen', 'John Marl Abogado'); ?></div></article>
        <article class="project-card"><div class="card-art enroll-art" aria-hidden="true"><div class="enroll-window"><div class="enroll-top">BLUEWAVE ACADEMY · ENROLLMENT</div><div class="enroll-body"><div class="enroll-head">Application overview</div><div class="enroll-colheads"><span>Applicant</span><span>Program</span><span>Status</span></div><div class="enroll-row"><span>Student profile</span><span>Grade 11</span><span class="enroll-status">Pending</span></div><div class="enroll-row"><span>Student profile</span><span>Grade 12</span><span class="enroll-status">Accepted</span></div></div></div></div><div class="card-copy"><div class="project-number">03 · STUDENT SERVICES</div><h3>Student Enrollment Portal</h3><p>A PHP and MySQL enrollment workflow where students submit application details and follow their status. Staff can review applications and mark them accepted or declined. Stronger validation and database handling would be important before real student data is used.</p><div class="tags"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">HTML</span><span class="tag">CSS</span></div><?php render_feedback('enrollment', 'John Marl Abogado'); ?></div></article>
      </div>
    </section>

    <section class="about section" id="about"><div class="wrap about-grid"><div><div class="eyebrow">About</div><h2>Thoughtful work starts with understanding the people who use it.</h2></div><div class="about-copy"><p>I’m John Marl Abogado. I enjoy working on web systems that make everyday processes easier to understand and follow.</p><p>These projects gave me experience with different kinds of work: organizing a service workflow, shaping a campus browsing experience, and connecting enrollment steps with status updates. I’m continuing to learn and improve with every project.</p><div class="tags"><span class="tag">Web development</span><span class="tag">User workflows</span><span class="tag">PHP &amp; MySQL</span><span class="tag">Laravel</span><span class="tag">HTML &amp; CSS</span></div></div></div></section>
    <section class="wrap closing"><div class="eyebrow">Thank you for visiting</div><p>Thanks for taking the time to explore my work.</p></section>
  </main>
  <footer class="footer"><div class="wrap footer-inner"><span>John Marl Abogado · Project Portfolio</span><span>Built with HTML, CSS, and JavaScript</span></div></footer>
    <script src="script.js" defer></script>
</body>
</html>


