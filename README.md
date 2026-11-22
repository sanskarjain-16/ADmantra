# ADmantra Media — Digital Growth & Performance Marketing

A modern, high-performance digital marketing agency landing page and production-ready WordPress theme built with pure vanilla JavaScript, Tailwind CSS, Google Material Symbols, and hardware-accelerated CSS animations.

---

## 🚀 Key Highlights & Interactive Features

- **Apex 3D Kinetic Nexus (`#why-admantra`)**:
  - Interactive Canvas particle network and starfield.
  - Multi-tier 3D gyroscopic rotating rings with perspective depth.
  - Dual high-speed continuous kinetic typography ribbons (`✦ SPECIALIZED THINKING...` & `★ BEYOND CAMPAIGNS...`).
  - Interactive radar sweep and pulsing laser nodes.

- **Cinematic Accordion Sector Grid (`#who-we-empower`)**:
  - 6 sector panels (Founders, Real Estate, Coaching/Education, Healthcare, Tech Startups, Hospitality).
  - Smooth spring flex physics (`cubic-bezier(0.25, 1, 0.5, 1)`) with zero layout jitter.
  - Interactive "Contact Us for More →" CTAs on every expanded sector.

- **5-Step Growth Engine Protocol (`#protocol`)**:
  - Interactive step-by-step progress engine (Discover, Strategize, Create, Execute, Optimize) with live HUD metric readouts.

- **Practice Areas & Service Vectors (`#services`)**:
  - 6 core capability cards with interactive 3D perspective tilt and radial cursor spotlight glow.

- **Full WordPress & Elementor Compatibility**:
  - Ready-to-install custom WordPress theme bundle (`admantra-theme.zip`).
  - Elementor import template (`admantra-elementor-template.json`).
  - Complete Hostinger deployment documentation (`HOSTINGER-ELEMENTOR-GUIDE.md`).

---

## 📁 Repository Structure

```text
ADmantra/
├── index.html                        # Standalone modern HTML5 landing page
├── admantra-elementor-template.json  # Elementor JSON template for drag-and-drop import
├── admantra-theme.zip                # Compressed WordPress theme ready for upload
├── HOSTINGER-ELEMENTOR-GUIDE.md      # Step-by-step Hostinger & WordPress deployment guide
└── admantra-theme/                   # Full WordPress theme source files
    ├── style.css                     # Theme stylesheet & animation definitions
    ├── functions.php                 # Theme setup & script enqueues
    ├── header.php                    # Header & slide-out navigation drawer
    ├── front-page.php                # Complete homepage template
    ├── footer.php                    # Footer & interactive animation scripts
    ├── index.php                     # Fallback template
    ├── page.php                      # Default page template
    └── template-elementor-fullwidth.php # Elementor canvas/full-width template
```

---

## 🛠️ Local Development

To run locally using any static web server:

```bash
# Using Python
python -m http.server 8000

# Using Node.js live-server
npx live-server --port=8080
```

Open `http://localhost:8000/` or `http://127.0.0.1:8080/` in your browser.

---

## 🌐 Deploying to Hostinger WordPress

1. Log in to your **Hostinger hPanel** → **WordPress Dashboard**.
2. Navigate to **Appearance** → **Themes** → **Add New** → **Upload Theme**.
3. Choose `admantra-theme.zip` and click **Install Now** → **Activate**.
4. In **Settings** → **Reading**, set **Your homepage displays** to **A static page** and select your homepage.
5. Refer to [HOSTINGER-ELEMENTOR-GUIDE.md](HOSTINGER-ELEMENTOR-GUIDE.md) for full setup instructions.
