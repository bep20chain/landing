<footer style="
  background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
  color: #ffffff;
  padding: 4rem 0 2rem;
  margin-top: 5rem;
  position: relative;
  overflow: hidden;
">
  <!-- Decorative elements -->
  <div style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1639762681057-408e52192e55?q=80&w=1000&auto=format&fit=crop') center/cover;
    opacity: 0.05;
    z-index: 0;
  "></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <!-- Footer columns -->
    <div style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      margin-bottom: 3rem;
      text-align: left;
    ">
      <div>
        <h3 style="
          font-size: 1.5rem;
          font-weight: 700;
          margin-bottom: 1.5rem;
          color: #f0b90b;
          display: flex;
          align-items: center;
        ">
          <i class="fas fa-coins me-2"></i>CryptoEdu
        </h3>
        <p style="opacity: 0.8; line-height: 1.6;">
          Your trusted guide to blockchain technology and cryptocurrency education since <?= date('Y')-2 ?>.
        </p>
      </div>
      
      <div>
        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem;">Quick Links</h4>
        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 0.8rem;">
            <a href="beginner-guide.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Beginner's Guide
            </a>
          </li>
          <li style="margin-bottom: 0.8rem;">
            <a href="wallet-types.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Wallet Types
            </a>
          </li>
          <li style="margin-bottom: 0.8rem;">
            <a href="market-overview.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Market Overview
            </a>
          </li>
        </ul>
      </div>
      
      <div>
        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem;">Legal</h4>
        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 0.8rem;">
            <a href="disclaimer.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Disclaimer
            </a>
          </li>
          <li style="margin-bottom: 0.8rem;">
            <a href="terms.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Terms & Conditions
            </a>
          </li>
          <li style="margin-bottom: 0.8rem;">
            <a href="privacy.php" style="
              color: #ffffff;
              text-decoration: none;
              opacity: 0.8;
              transition: all 0.3s ease;
              display: flex;
              align-items: center;
            " onmouseover="this.style.opacity='1'; this.style.transform='translateX(5px)'" 
            onmouseout="this.style.opacity='0.8'; this.style.transform='translateX(0)'">
              <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i> Privacy Policy
            </a>
          </li>
        </ul>
      </div>
      
      <div>
        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem;">Connect With Us</h4>
        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
          <a href="#" style="
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.background='#1da1f2'; this.style.transform='translateY(-3px)'" 
          onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" style="
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.background='#3b5998'; this.style.transform='translateY(-3px)'" 
          onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" style="
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.background='#0077b5'; this.style.transform='translateY(-3px)'" 
          onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" style="
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.background='#e1306c'; this.style.transform='translateY(-3px)'" 
          onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <a href="contact.php" style="
          display: inline-flex;
          align-items: center;
          color: #f0b90b;
          text-decoration: none;
          font-weight: 600;
          transition: all 0.3s ease;
        " onmouseover="this.style.color='#ffffff'" 
        onmouseout="this.style.color='#f0b90b'">
          <i class="fas fa-envelope me-2"></i> Contact Us
        </a>
      </div>
    </div>
    
    <!-- Copyright section -->
    <div style="
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 2rem;
      margin-top: 2rem;
      text-align: center;
    ">
      <p style="opacity: 0.7; margin-bottom: 1rem;">
        &copy; <?= date('Y') ?> CryptoEdu. All rights reserved.
      </p>
      <p style="opacity: 0.6; font-size: 0.9rem; line-height: 1.6;">
        <strong>Disclaimer:</strong> This website provides educational content about cryptocurrency and blockchain technology only. 
        It does not constitute financial advice, nor does it recommend any specific investments.
      </p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>