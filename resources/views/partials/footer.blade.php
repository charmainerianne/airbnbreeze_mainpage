<footer class="footer">
  <div class="footer-links">
    <a href="#">About Us</a>
    <a href="#">Browse</a>
    <a href="#">AirBnB Your Home</a>
  </div>
  <div class="social-icons">
    <i data-lucide="globe"></i>
    <i data-lucide="facebook"></i>
    <i data-lucide="twitter"></i>
    <i data-lucide="instagram"></i>
  </div>
</footer>

<script>
  const heroBg = document.querySelector('.hero-bg');
  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const fadeStart = 0;
    const fadeEnd = 300;
    let opacity = 1;
    if (scrollTop > fadeStart) {
      opacity = 1 - (scrollTop - fadeStart) / (fadeEnd - fadeStart);
      opacity = Math.max(opacity, 0);
    }
    if (heroBg) {
      heroBg.style.setProperty('--hero-opacity', opacity);
    }
  });
</script>

<script>
  lucide.createIcons();
</script>