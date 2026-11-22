<?php
/**
 * Footer template for Admantra Media
 *
 * @package Admantra
 */
?>
<footer class="w-full bg-surface-container-low border-t border-outline-variant/30 text-on-surface-variant">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 pt-16 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-outline-variant/20">
      <div class="lg:col-span-4 space-y-4">
        <div class="flex items-center gap-3">
          <img alt="Admantra Media Logo" class="h-7 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ALJJyrBLBkh5uf6OWybhyHeKXBljkSefM1r_ZCZU5KhU6cd0zD1za9hICWR_u-c140FUhxJKh6EMIWMpUuf5DsI4XNeLF776274aRIM65ZdrlNW4qw-ObDIIP1Eh-V8SD5xD655p9C1BJZPu-D4ZO8VOpBqSE-y2ai2Q6HNOg0RBXd2H4WOrXtWYUmCH8YRRYm-M6FbDh4yxZTIhWOn_qYhUg8vTpKgn0MEiSRsMYdBM5jvAWQ">
          <span class="text-lg font-extrabold tracking-tight text-on-surface">ADMANTRA</span>
          <span class="text-[10px] font-bold uppercase bg-primary text-white px-2 py-0.5 rounded-full">MEDIA</span>
        </div>
        <p class="text-sm font-bold text-on-surface">Build Authority. Drive Growth. Stay Ahead.</p>
        <p class="text-xs text-on-surface-variant leading-relaxed max-w-sm">Specialized growth intelligence, algorithmic media execution, and strategic narrative design engineered for venture-backed innovators and high-velocity enterprises.</p>
        <div class="flex items-center gap-2 pt-2">
          <a aria-label="Instagram" class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all shadow-sm" href="#"><span class="material-symbols-outlined text-[18px]">photo_camera</span></a>
          <a aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all shadow-sm" href="#"><span class="material-symbols-outlined text-[18px]">work</span></a>
          <a aria-label="Facebook" class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all shadow-sm" href="#"><span class="material-symbols-outlined text-[18px]">public</span></a>
          <a aria-label="YouTube" class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all shadow-sm" href="#"><span class="material-symbols-outlined text-[18px]">smart_display</span></a>
        </div>
      </div>

      <div class="lg:col-span-2 space-y-3">
        <p class="text-xs font-bold uppercase tracking-wider text-on-surface">Navigation</p>
        <ul class="space-y-2 text-xs">
          <li><a class="text-primary font-bold hover:underline" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Specializations</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#philosophy' ) ); ?>">Philosophy</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#why-admantra' ) ); ?>">Why Admantra</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#protocol' ) ); ?>">Protocol</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a></li>
        </ul>
      </div>

      <div class="lg:col-span-2 space-y-3">
        <p class="text-xs font-bold uppercase tracking-wider text-on-surface">Capabilities</p>
        <ul class="space-y-2 text-xs">
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Paid Performance Media</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Omnichannel CAC Modeling</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Brand Narrative &amp; Creative</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Market Intelligence</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>">Algorithmic Retargeting</a></li>
        </ul>
      </div>

      <div class="lg:col-span-4 space-y-3">
        <p class="text-xs font-bold uppercase tracking-wider text-on-surface">Growth Dispatch</p>
        <p class="text-xs text-on-surface-variant">Receive our bi-weekly breakdown of media performance dynamics, attribution algorithms, and scaling metrics.</p>
        <form class="flex flex-col sm:flex-row gap-2 pt-1" onsubmit="alert('Thank you for subscribing to Growth Dispatch!'); return false;">
          <input class="flex-1 h-10 px-3 rounded-lg bg-white border border-outline-variant/40 text-on-surface placeholder:text-outline text-xs outline-none focus:ring-2 focus:ring-primary" placeholder="Enter executive email" type="email" required>
          <button class="h-10 px-5 rounded-lg bg-primary text-white text-xs font-bold hover:bg-secondary transition-all shrink-0 shadow-sm" type="submit">Subscribe</button>
        </form>
        <p class="text-[10px] text-outline">Zero spam. High-signal growth analysis only.</p>
      </div>
    </div>

    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-outline">
      <p>© <?php echo date( 'Y' ); ?> Admantra Media. All Rights Reserved.</p>
      <div class="flex items-center gap-5">
        <a class="hover:text-on-surface transition-colors" href="#">Privacy Policy</a>
        <a class="hover:text-on-surface transition-colors" href="#">Terms of Service</a>
        <a class="hover:text-on-surface transition-colors" href="#">Security &amp; Compliance</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
        <!-- Interaction Scripts (Unrestricted Continuous Loops) -->
  <script>
    (function initNexusCanvas() {
      const canvas = document.getElementById('nexus-particle-canvas');
      const stage = document.getElementById('why-admantra');
      if (!canvas || !stage) return;
      const ctx = canvas.getContext('2d');
      let particles = [];
      let w, h;
      let mouse = { x: -1000, y: -1000, active: false };

      function resize() {
        w = canvas.width = canvas.parentElement.offsetWidth;
        h = canvas.height = canvas.parentElement.offsetHeight;
      }
      resize();
      window.addEventListener('resize', resize);

      for (let i = 0; i < 45; i++) {
        particles.push({
          x: Math.random() * (w || 1000),
          y: Math.random() * (h || 600),
          vx: (Math.random() - 0.5) * 0.8,
          vy: (Math.random() - 0.5) * 0.8,
          radius: Math.random() * 2 + 1,
          color: Math.random() > 0.5 ? 'rgba(56, 189, 248,' : 'rgba(168, 85, 247,'
        });
      }

      stage.addEventListener('mousemove', (e) => {
        const rect = stage.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
        mouse.active = true;

        const stageEl = document.getElementById('nexus-stage');
        if (stageEl) {
          const cx = rect.width / 2;
          const cy = rect.height / 2;
          const rotX = ((mouse.y - cy) / cy) * -6;
          const rotY = ((mouse.x - cx) / cx) * 6;
          stageEl.style.transform = `rotateX(${rotX}deg) rotateY(${rotY}deg)`;
        }
      });

      stage.addEventListener('mouseleave', () => {
        mouse.active = false;
        const stageEl = document.getElementById('nexus-stage');
        if (stageEl) stageEl.style.transform = 'rotateX(0deg) rotateY(0deg)';
      });

      function draw() {
        ctx.clearRect(0, 0, w, h);
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 110) {
              ctx.strokeStyle = `rgba(56, 189, 248, ${0.2 * (1 - dist / 110)})`;
              ctx.lineWidth = 0.8;
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.stroke();
            }
          }
        }
        particles.forEach(p => {
          p.x += p.vx;
          p.y += p.vy;
          if (p.x < 0 || p.x > w) p.vx *= -1;
          if (p.y < 0 || p.y > h) p.vy *= -1;

          if (mouse.active) {
            const mdx = p.x - mouse.x;
            const mdy = p.y - mouse.y;
            const mdist = Math.sqrt(mdx * mdx + mdy * mdy);
            if (mdist < 140) {
              p.x += (mdx / mdist) * 2;
              p.y += (mdy / mdist) * 2;
            }
          }

          ctx.fillStyle = p.color + '0.8)';
          ctx.beginPath();
          ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(draw);
      }
      draw();
    })();

        (function initAccordion() {
      const track = document.getElementById('empower-accordion');
      if (!track) return;
      const panels = track.querySelectorAll('.accordion-panel');

      let rAF = null;
      function activatePanel(targetPanel) {
        if (!targetPanel || targetPanel.classList.contains('active')) return;
        if (rAF) cancelAnimationFrame(rAF);
        rAF = requestAnimationFrame(() => {
          panels.forEach(p => {
            if (p === targetPanel) {
              p.classList.add('active');
            } else {
              p.classList.remove('active');
            }
          });
        });
      }

      panels.forEach(panel => {
        panel.addEventListener('mouseenter', () => activatePanel(panel));
        panel.addEventListener('click', () => activatePanel(panel));
      });
    })();

    (function initProtocolEngine() {
      const container = document.getElementById('protocol-engine');
      if (!container) return;
      
      const cols = container.querySelectorAll('.protocol-step-col');
      const progressBar = document.getElementById('protocol-progress-bar');
      const liveHud = document.getElementById('protocol-live-hud');
      
      const hudMessages = [
        'STAGE 01: DISCOVER // UNIT ECONOMICS AUDIT & MARKET POSITIONING',
        'STAGE 02: STRATEGIZE // CAC/LTV CALIBRATION & HIGH-TICKET BLUEPRINT',
        'STAGE 03: CREATE // HIGH-HOOK ASSETS & DISRUPTIVE RETENTION ENGINES',
        'STAGE 04: EXECUTE // OMNICHANNEL DEPLOYMENT & AGGRESSIVE AD BUDGET PACING',
        'STAGE 05: OPTIMIZE // ATTRIBUTION TUNING, LLM CITATIONS & VALUATION GROWTH'
      ];

      let currentStep = 1;
      let autoTimer = null;
      let isPaused = false;

      function setActiveStep(stepNum) {
        currentStep = stepNum;
        if (progressBar) {
          const pct = ((stepNum - 1) / (cols.length - 1)) * 100;
          progressBar.style.width = `${Math.max(15, pct)}%`;
        }

        cols.forEach((col, idx) => {
          const node = col.querySelector('.step-node-bubble');
          const card = col.querySelector('.protocol-step-card');
          const badge = col.querySelector('.node-status-badge');
          const stepIndex = idx + 1;

          if (stepIndex === stepNum) {
            node.classList.add('active-node');
            card.classList.add('active-step');
            if (badge) badge.classList.remove('hidden');
          } else {
            node.classList.remove('active-node');
            card.classList.remove('active-step');
            if (badge) badge.classList.add('hidden');
          }
        });

        if (liveHud && hudMessages[stepNum - 1]) {
          liveHud.innerHTML = `<span class="text-cyan-400 font-bold">PROTOCOL ENGINE:</span> ${hudMessages[stepNum - 1]}`;
        }
      }

      function startAutoCycle() {
        if (autoTimer) clearInterval(autoTimer);
        autoTimer = setInterval(() => {
          if (!isPaused) {
            let next = currentStep + 1;
            if (next > 5) next = 1;
            setActiveStep(next);
          }
        }, 3200);
      }

      cols.forEach(col => {
        col.addEventListener('mouseenter', () => {
          isPaused = true;
          const s = parseInt(col.getAttribute('data-step'), 10);
          if (s) setActiveStep(s);
        });
        col.addEventListener('mouseleave', () => {
          isPaused = false;
        });
        col.addEventListener('click', () => {
          const s = parseInt(col.getAttribute('data-step'), 10);
          if (s) setActiveStep(s);
        });
      });

      startAutoCycle();
    })();
  </script>
</body>
</html>
