<?php
/**
 * Header template for Admantra Media
 *
 * @package Admantra
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-surface text-on-surface font-sans antialiased selection:bg-primary-container selection:text-on-primary' ); ?>>
<?php wp_body_open(); ?>

<!-- Navigation Header (3-Part Minimal Layout with Slide-Out Drawer) -->
<header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
  <div class="h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex items-center justify-between">
    <!-- Left: Menu Button -->
    <div class="flex items-center justify-start flex-1">
      <button id="menu-toggle-btn" onclick="toggleDrawer(true)" class="flex items-center gap-2 px-3 sm:px-4 py-2 rounded-xl text-white bg-white/10 hover:bg-white/20 border border-white/15 backdrop-blur-md transition-all duration-200 active:scale-95 focus:outline-none" aria-label="Open Navigation Menu">
        <span class="material-symbols-outlined text-[20px] sm:text-[22px]">menu</span>
        <span class="text-xs sm:text-sm font-semibold tracking-wide hidden sm:inline">Menu</span>
      </button>
    </div>

    <!-- Center: Brand Logo -->
    <div class="flex items-center justify-center shrink-0">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a class="flex items-center gap-2 sm:gap-2.5 group transition-transform duration-300 hover:scale-105" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img alt="Admantra Media Logo" class="h-8 sm:h-9 md:h-10 w-auto object-contain rounded-xl transition-transform duration-300 shadow-sm" src="https://lh3.googleusercontent.com/aida/ALJJyrCVUomFv_jacykc_UGthxOHTDebQcLE--cnO9u-i-HhUFt-uVQAXMaEOFeiGkxXT7b7ug4gBcdUGUOTJOFnjuUQ9qbrNIENklUCABe6z6FpGc9t36YwdQ7vYOTwy6Ws_EsvYXbehqIRvcpE6WNOVyQXh6TNf4-B0kS2HaBsZShjia4-UCnZztlIb0ginHbOccBO6al14lgqVtPRLRprznkcGaK4F4jvKDbbIpqFr77A">
          <span id="nav-brand-text" class="text-base sm:text-xl font-extrabold tracking-tight text-white transition-colors duration-300">ADMANTRA</span>
          <span class="text-[9px] sm:text-[11px] font-bold uppercase bg-gradient-to-r from-primary-container to-secondary-container text-white px-1.5 sm:px-2.5 py-0.5 rounded-full tracking-wider shadow-sm">MEDIA</span>
        </a>
      <?php endif; ?>
    </div>

    <!-- Right: CTA Button -->
    <div class="flex items-center justify-end flex-1">
      <a class="inline-flex items-center gap-1.5 sm:gap-2 bg-gradient-to-r from-primary to-secondary text-white px-3 sm:px-5 py-2 sm:py-2.5 rounded-xl font-semibold text-xs sm:text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all group shrink-0" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
        <span>Let's Grow Together</span>
        <span class="material-symbols-outlined text-[15px] sm:text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
      </a>
    </div>
  </div>
</header>

<!-- Slide-Out Side Navigation Drawer & Backdrop Overlay -->
<div id="side-drawer-backdrop" class="fixed inset-0 bg-black/75 backdrop-blur-sm z-[100] opacity-0 pointer-events-none transition-opacity duration-300" onclick="toggleDrawer(false)"></div>

<aside id="side-drawer" class="fixed top-0 bottom-0 left-0 w-80 sm:w-96 max-w-[88vw] bg-[#070b1e] border-r border-white/10 text-white z-[110] shadow-2xl flex flex-col justify-between -translate-x-full transition-transform duration-300 ease-in-out" aria-label="Side Navigation Drawer">
  <!-- Drawer Header -->
  <div class="h-20 px-6 border-b border-white/10 flex items-center justify-between shrink-0 bg-[#050816]/50">
    <div class="flex items-center gap-2.5">
      <img alt="Admantra Media Logo" class="h-8 w-auto object-contain rounded-xl shadow-sm" src="https://lh3.googleusercontent.com/aida/ALJJyrCVUomFv_jacykc_UGthxOHTDebQcLE--cnO9u-i-HhUFt-uVQAXMaEOFeiGkxXT7b7ug4gBcdUGUOTJOFnjuUQ9qbrNIENklUCABe6z6FpGc9t36YwdQ7vYOTwy6Ws_EsvYXbehqIRvcpE6WNOVyQXh6TNf4-B0kS2HaBsZShjia4-UCnZztlIb0ginHbOccBO6al14lgqVtPRLRprznkcGaK4F4jvKDbbIpqFr77A">
      <span class="text-base font-extrabold tracking-tight text-white">ADMANTRA</span>
      <span class="text-[9px] font-bold uppercase bg-gradient-to-r from-primary-container to-secondary-container text-white px-2 py-0.5 rounded-full tracking-wider shadow-sm">MEDIA</span>
    </div>
    <button onclick="toggleDrawer(false)" class="p-2 rounded-xl text-slate-400 hover:text-white hover:bg-white/10 transition-colors focus:outline-none" aria-label="Close menu">
      <span class="material-symbols-outlined text-[24px]">close</span>
    </button>
  </div>

  <!-- Drawer Links -->
  <nav class="flex-1 overflow-y-auto px-5 py-5 space-y-2 text-sm font-semibold custom-scrollbar">
    <!-- 1. Home -->
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-white hover:text-cyan-400 hover:bg-white/5 transition-all group">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px] text-cyan-400">home</span>
        <span>Home</span>
      </span>
      <span class="material-symbols-outlined text-[16px] text-white/30 group-hover:text-cyan-400 group-hover:translate-x-0.5 transition-all">chevron_right</span>
    </a>

    <!-- 2. Expertise (Expandable / Grouped Section) -->
    <div class="rounded-xl overflow-hidden bg-white/[0.02] border border-white/5">
      <button type="button" onclick="toggleExpertiseSubmenu()" class="w-full flex items-center justify-between px-4 py-3 text-white hover:text-cyan-400 hover:bg-white/5 transition-all group focus:outline-none" aria-expanded="true">
        <span class="flex items-center gap-3">
          <span class="material-symbols-outlined text-[20px] text-cyan-400">bolt</span>
          <span>Expertise</span>
        </span>
        <span id="expertise-chevron" class="material-symbols-outlined text-[18px] text-white/50 group-hover:text-cyan-400 transition-transform duration-300 rotate-180">expand_more</span>
      </button>

      <div id="expertise-submenu" class="px-3 pb-3 pt-1 space-y-4 border-t border-white/5 text-xs transition-all duration-300">
        <!-- Core Specializations -->
        <div>
          <div class="px-2 pb-1.5 pt-1 text-[10px] font-mono uppercase tracking-wider text-cyan-400 font-bold flex items-center gap-1.5">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            <span>Core Specializations</span>
          </div>
          <div class="space-y-0.5">
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>Personal Branding &amp; Authority</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>Performance Marketing &amp; Customer Acquisition</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>AI Visibility &amp; ChatGPT Solutions</span>
            </a>
          </div>
        </div>

        <!-- Extended Capabilities -->
        <div>
          <div class="px-2 pb-1.5 pt-1 text-[10px] font-mono uppercase tracking-wider text-purple-400 font-bold flex items-center gap-1.5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span>Extended Capabilities</span>
          </div>
          <div class="space-y-0.5">
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>Video Production &amp; Content Creation</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>SEO &amp; Organic Growth</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>Website &amp; Landing Page Development</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>Creative &amp; Brand Communication</span>
            </a>
            <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-all">
              <span class="w-1 h-1 rounded-full bg-slate-500"></span>
              <span>AI Automation &amp; Business Systems</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. Work (Our Work / Case Studies) -->
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#who-we-empower' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-white hover:text-cyan-400 hover:bg-white/5 transition-all group">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px] text-cyan-400">cases</span>
        <span>Work</span>
      </span>
      <span class="text-[10px] font-mono text-slate-400 group-hover:text-cyan-400 transition-colors">Case Studies</span>
    </a>

    <!-- 4. About -->
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#philosophy' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-white hover:text-cyan-400 hover:bg-white/5 transition-all group">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px] text-cyan-400">info</span>
        <span>About</span>
      </span>
      <span class="material-symbols-outlined text-[16px] text-white/30 group-hover:text-cyan-400 group-hover:translate-x-0.5 transition-all">chevron_right</span>
    </a>

    <!-- 5. Insights -->
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#market-dynamics' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-white hover:text-cyan-400 hover:bg-white/5 transition-all group">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px] text-cyan-400">lightbulb</span>
        <span>Insights</span>
      </span>
      <span class="text-[10px] font-mono text-slate-400 group-hover:text-cyan-400 transition-colors">Knowledge</span>
    </a>
  </nav>

  <!-- 6. Contact / Let's Grow Together (Primary CTA Link) -->
  <div class="p-5 border-t border-white/10 bg-[#050816]/80 space-y-3 shrink-0">
    <div class="flex items-center justify-between text-xs text-slate-400 font-mono">
      <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>Partner Ingestion Open</span>
      <span class="text-cyan-400 font-semibold">2026</span>
    </div>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 shadow-lg shadow-blue-500/25 active:scale-[0.98] transition-all">
      <span>Contact / Let's Grow Together</span>
      <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
    </a>
  </div>
</aside>

<script>
  function toggleDrawer(open) {
    const drawer = document.getElementById('side-drawer');
    const backdrop = document.getElementById('side-drawer-backdrop');
    if (!drawer || !backdrop) return;
    if (open) {
      drawer.classList.remove('-translate-x-full');
      drawer.classList.add('translate-x-0');
      backdrop.classList.remove('opacity-0', 'pointer-events-none');
      backdrop.classList.add('opacity-100', 'pointer-events-auto');
      document.body.classList.add('overflow-hidden');
    } else {
      drawer.classList.add('-translate-x-full');
      drawer.classList.remove('translate-x-0');
      backdrop.classList.add('opacity-0', 'pointer-events-none');
      backdrop.classList.remove('opacity-100', 'pointer-events-auto');
      document.body.classList.remove('overflow-hidden');
    }
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') toggleDrawer(false);
  });

  function toggleExpertiseSubmenu() {
    const submenu = document.getElementById('expertise-submenu');
    const chevron = document.getElementById('expertise-chevron');
    if (!submenu || !chevron) return;
    const isHidden = submenu.classList.contains('hidden');
    if (isHidden) {
      submenu.classList.remove('hidden');
      chevron.classList.add('rotate-180');
    } else {
      submenu.classList.add('hidden');
      chevron.classList.remove('rotate-180');
    }
  }


  function handleNavScroll() {
    const header = document.getElementById('main-header');
    const brandText = document.getElementById('nav-brand-text');
    const menuBtn = document.getElementById('menu-toggle-btn');
    if (!header) return;

    if (window.scrollY > 30) {
      header.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-outline-variant/30');
      header.classList.remove('bg-transparent', 'border-transparent');
      if (brandText) {
        brandText.classList.remove('text-white');
        brandText.classList.add('text-on-surface');
      }
      if (menuBtn) {
        menuBtn.classList.remove('text-white', 'bg-white/10', 'border-white/15');
        menuBtn.classList.add('text-on-surface', 'bg-surface-container-low', 'border-outline-variant/30', 'hover:bg-surface-container');
      }
    } else {
      header.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-outline-variant/30');
      header.classList.add('bg-transparent', 'border-transparent');
      if (brandText) {
        brandText.classList.add('text-white');
        brandText.classList.remove('text-on-surface');
      }
      if (menuBtn) {
        menuBtn.classList.add('text-white', 'bg-white/10', 'border-white/15');
        menuBtn.classList.remove('text-on-surface', 'bg-surface-container-low', 'border-outline-variant/30', 'hover:bg-surface-container');
      }
    }
  }
  window.addEventListener('scroll', handleNavScroll, { passive: true });
  window.addEventListener('DOMContentLoaded', handleNavScroll);
  handleNavScroll();
</script>
