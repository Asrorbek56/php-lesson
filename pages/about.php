<!doctype html>
<html lang="uz">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About — Your Site</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <div class="container nav-wrap">
      <a class="logo" href="index.html">YourLogo</a>
      <button class="nav-toggle" aria-label="menu">☰</button>
      <nav class="nav">
        <a href="index.html">Home</a>
        <a href="about.html" class="active">About</a>
        <a href="index.html#contact">Contact</a>
      </nav>
    </div>
  </header>

  <main class="container about-main">
    <section class="about-hero">
      <h1>Biz haqimizda</h1>
      <p>Biz kichik jamoamiz — oddiy, lekin samarali yechimlar yaratamiz.</p>
    </section>

    <section class="team">
      <h2>Jamoa</h2>
      <div class="team-grid">
        <div class="member">
          <div class="avatar">R</div>
          <h3>Rubi</h3>
          <p>Frontend developer</p>
        </div>
        <div class="member">
          <div class="avatar">A</div>
          <h3>Azamat</h3>
          <p>Designer</p>
        </div>
        <div class="member">
          <div class="avatar">M</div>
          <h3>Mehmon</h3>
          <p>Project manager</p>
        </div>
      </div>
    </section>

    <section class="mission">
      <h2>Bizning maqsadimiz</h2>
      <p>Foydalanuvchilar uchun oddiy va tez interfeyslar yaratish.</p>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">© 2025 YourSite. Barcha huquqlar himoyalangan.</div>
  </footer>

  <script>
    const btn2 = document.querySelector('.nav-toggle');
    const nav2 = document.querySelector('.nav');
    btn2.addEventListener('click', () => nav2.classList.toggle('open'));
  </script>
</body>
</html>
