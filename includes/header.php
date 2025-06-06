<!-- Font Awesome & Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<header class="bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark container px-3 px-lg-0">
    <a class="navbar-brand fw-bold fs-4" href="index.php">
      <i class="fas fa-coins me-2" style="color: #f0b90b;"></i>CryptoEdu
    </a>

    <!-- Mobile toggle -->
    <button class="navbar-toggler border-0 py-2 px-3" type="button" id="customToggler">
      <i class="fas fa-bars" id="toggler-icon"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-lg-end" id="cryptoNavbar">
      <ul class="navbar-nav mt-3 mt-lg-0">
        <!-- Example Nav Items -->
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="beginner-guide.php">Beginner Guide</a></li>
        <li class="nav-item"><a class="nav-link" href="wallet-types.php">Wallets</a></li>
        <li class="nav-item"><a class="nav-link" href="security-tips.php">Security</a></li>
        <li class="nav-item"><a class="nav-link" href="market-overview.php">Markets</a></li>
        <li class="nav-item"><a class="nav-link" href="glossary.php">Glossary</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script for icon toggle + close on outside click -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.getElementById('customToggler');
    const icon = document.getElementById('toggler-icon');
    const collapseEl = document.getElementById('cryptoNavbar');
    let bsCollapse = new bootstrap.Collapse(collapseEl, { toggle: false });

    toggler.addEventListener('click', function () {
      if (collapseEl.classList.contains('show')) {
        bsCollapse.hide();
      } else {
        bsCollapse.show();
      }
    });

    collapseEl.addEventListener('shown.bs.collapse', () => {
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-times');
    });

    collapseEl.addEventListener('hidden.bs.collapse', () => {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    });

    // Close navbar if clicking outside
    document.addEventListener('click', function (e) {
      const isClickInsideNavbar = collapseEl.contains(e.target) || toggler.contains(e.target);
      if (!isClickInsideNavbar && collapseEl.classList.contains('show')) {
        bsCollapse.hide();
      }
    });
  });
</script>
