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
<div id="side-drawer-backdrop" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300" onclick="toggleDrawer(false)"></div>

<aside id="side-drawer" class="fixed top-0 bottom-0 left-0 w-80 max-w-[85vw] bg-white z-50 shadow-2xl flex flex-col justify-between -translate-x-full transition-transform duration-300 ease-in-out border-r border-outline-variant/30" aria-label="Side Navigation Drawer">
  <!-- Drawer Header -->
  <div class="h-20 px-6 border-b border-outline-variant/20 flex items-center justify-between">
    <div class="flex items-center gap-2">
      <img alt="Admantra Media Logo" class="h-8 w-auto object-contain rounded-lg" src="https://lh3.googleusercontent.com/aida/ALJJyrCVUomFv_jacykc_UGthxOHTDebQcLE--cnO9u-i-HhUFt-uVQAXMaEOFeiGkxXT7b7ug4gBcdUGUOTJOFnjuUQ9qbrNIENklUCABe6z6FpGc9t36YwdQ7vYOTwy6Ws_EsvYXbehqIRvcpE6WNOVyQXh6TNf4-B0kS2HaBsZShjia4-UCnZztlIb0ginHbOccBO6al14lgqVtPRLRprznkcGaK4F4jvKDbbIpqFr77A">
      <span class="text-lg font-extrabold tracking-tight text-on-surface">ADMANTRA</span>
      <span class="text-[10px] font-bold uppercase bg-gradient-to-r from-primary-container to-secondary-container text-white px-2 py-0.5 rounded-full tracking-wider">MEDIA</span>
    </div>
    <button onclick="toggleDrawer(false)" class="p-2 rounded-xl text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" aria-label="Close menu">
      <span class="material-symbols-outlined text-[24px]">close</span>
    </button>
  </div>

  <!-- Drawer Links -->
  <nav class="flex-1 overflow-y-auto px-6 py-6 space-y-1.5 text-sm font-semibold">
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-primary bg-primary-fixed/30 font-bold transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">home</span>
        Home
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#specializations' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">hub</span>
        Specializations
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#philosophy' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">psychology</span>
        Philosophy &amp; Formula
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#why-admantra' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">verified</span>
        Why Admantra
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#protocol' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">rocket_launch</span>
        5-Step Protocol
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#market-dynamics' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">query_stats</span>
        Market Dynamics
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="flex items-center justify-between px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all">
      <span class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[20px]">mail</span>
        Contact Us
      </span>
      <span class="material-symbols-outlined text-[16px]">chevron_right</span>
    </a>
  </nav>

  <!-- Drawer Footer -->
  <div class="p-6 border-t border-outline-variant/20 bg-surface-container-low/50 space-y-3">
    <div class="flex items-center gap-2 text-xs font-semibold text-on-surface-variant">
      <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
      <span>Growth Active • 2026</span>
    </div>
    <a onclick="toggleDrawer(false)" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="flex items-center justify-center gap-2 w-full py-3 px-4 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-primary to-secondary shadow-md hover:shadow-lg transition-all">
      <span>Let's Grow Together</span>
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
