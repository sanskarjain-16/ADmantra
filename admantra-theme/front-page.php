<?php
/**
 * The template for displaying the front page.
 *
 * If the page is edited with Elementor or has content, it renders the content.
 * Otherwise, it falls back to the complete high-converting Admantra Media landing page.
 *
 * @package Admantra
 */

get_header();

// Check if this page has content edited via Elementor or standard editor
$has_custom_content = false;
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        if ( ! empty( get_the_content() ) ) {
            $has_custom_content = true;
            the_content();
        }
    }
}

// Fallback: If no Elementor/page content is saved yet, render the full landing page
if ( ! $has_custom_content ) :
?>
<main class="w-full">
  <section id="hero" class="relative w-full overflow-hidden py-20 lg:py-28 min-h-[680px] flex items-center justify-center bg-inverse-surface">
    <!-- Subtle Architectural Background Grids and Soft Light Accent -->
    <div class="absolute inset-0 z-0">
      <img alt="Admantra Executive Digital Intelligence Nexus & Command Center" class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none opacity-60" src="https://lh3.googleusercontent.com/aida/ALJJyrAJgJU8RiURHzJ5Wp86dYctiGvth2_2Xoaoan7WF0rtQJQINV4ZlKYwlsDBBNmj6DrVVTXMjg_lyZQnKZerSEUUZlIfyWiZYkkDisRnYyUFDJrS4aN-JCVS-ej07eDQ5FZ0gpTyMuGxkdENUI_JKPooBrlZKuU01bp5PQCWZq6Kb0eyP1c0PVK3pa--ifQs0wWl7k6Kg8LIS1lxwkeE3zguEHfJwomEhrlTizVey5UN5w">
      <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/50 to-black/75 pointer-events-none"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-black/50 pointer-events-none"></div>
    </div>

    <!-- Editorial Hero Container -->
    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full py-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        <!-- Left Column: Editorial Headline & Actions -->
        <div class="lg:col-span-7 flex flex-col items-start space-y-6 w-full max-w-2xl">
          <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-sm">
            <span class="relative flex h-2.5 w-2.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-400"></span>
            </span>
            <span class="text-xs font-bold uppercase tracking-widest text-blue-200">We Build Brands That Move Business Forward</span>
          </div>

          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight tracking-tight pb-2 overflow-visible">
            <span class="inline-block pb-1">Your Brand Deserves More Than Just </span>
            <span class="shimmer-text bg-gradient-to-r from-blue-400 via-indigo-200 to-sky-300 bg-clip-text text-transparent inline-block drop-shadow-[0_0_20px_rgba(56,189,248,0.6)] pb-2 pt-1">Digital Presence.</span>
          </h1>

          <p class="text-base sm:text-lg text-white/85 leading-relaxed max-w-2xl">
            We turn ambitious brands into authoritative category leaders through strategic performance and AI-driven growth.
          </p>

          <div class="flex flex-wrap items-center gap-4 pt-2">
            <a class="cta-glow inline-flex items-center gap-2.5 bg-gradient-to-r from-primary via-primary-container to-secondary text-white px-7 py-3.5 rounded-xl font-extrabold text-sm hover:-translate-y-0.5 active:scale-95 transition-all group border border-cyan-400 shadow-[0_0_25px_rgba(18,66,255,0.6)]" href="#contact">
              <span class="tracking-wide">Let's Grow Together</span>
              <span class="material-symbols-outlined text-[18px] text-cyan-300 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)] group-hover:translate-x-1 transition-transform">trending_up</span>
            </a>
            <a class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur-md text-cyan-300 px-6 py-3.5 rounded-xl font-bold text-sm border border-blue-400/60 shadow-[0_0_15px_rgba(56,189,248,0.2)] hover:shadow-[0_0_20px_rgba(56,189,248,0.4)] hover:border-cyan-400 hover:-translate-y-0.5 active:scale-95 transition-all group" href="#specializations">
              <span class="drop-shadow-[0_0_6px_rgba(34,211,238,0.5)]">Explore Our Expertise</span>
              <span class="material-symbols-outlined text-[18px] text-cyan-400 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)] group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
          </div>
        </div>

        <!-- Right Column: Minimalist Strategy Session Form Card -->
        <div class="lg:col-span-5">
          <div class="w-full max-w-xl lg:max-w-none mx-auto border border-white/20 rounded-3xl p-7 sm:p-9 pb-8 sm:pb-12 shadow-2xl relative space-y-6 shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300 hover:border-blue-300 hover:shadow-2xl bg-black/30 backdrop-blur-xl">
            <div class="space-y-2 pb-1">
              <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-blue-200 text-xs font-bold uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span class="leading-normal">Fast-Track Growth</span>
              </div>
              <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight leading-snug pb-1 pt-1">Schedule a Strategy Session</h3>
              <p class="text-xs sm:text-sm text-white/85 leading-relaxed pb-1">Connect directly with our senior growth architects within 24 hours.</p>
            </div>
            <form class="space-y-4" onsubmit="alert('Thank you! Our growth architects will contact you shortly.'); return false;">
              <div class="space-y-1.5">
                <label class="flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider text-cyan-300 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)]">
                  <span class="material-symbols-outlined text-[14px] text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.6)]">person</span>
                  <span>Full Name</span>
                </label>
                <input class="w-full border rounded-xl px-4 py-3 text-sm text-white font-medium placeholder:text-white/60 outline-none focus:ring-2 focus:ring-primary transition-all bg-black/40 border-white/30" placeholder="e.g. Alexander Vance" required="" type="text">
              </div>
              <div class="space-y-1.5">
                <label class="flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider text-cyan-300 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)]">
                  <span class="material-symbols-outlined text-[14px] text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.6)]">call</span>
                  <span>Direct Phone Number</span>
                </label>
                <input class="w-full border rounded-xl px-4 py-3 text-sm text-white font-medium placeholder:text-white/60 outline-none focus:ring-2 focus:ring-primary transition-all bg-black/40 border-white/30" placeholder="+1 (555) 019-2834" type="tel">
              </div>
              <div class="space-y-1.5">
                <label class="flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider text-cyan-300 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)]">
                  <span class="material-symbols-outlined text-[14px] text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.6)]">tune</span>
                  <span>Growth Objective</span>
                </label>
                <select class="w-full bg-black/40 border border-white/30 rounded-xl px-4 py-3 text-sm text-white font-medium outline-none focus:ring-2 focus:ring-primary transition-all">
                  <option class="bg-inverse-surface text-white/80" value="">Select Growth Objective</option>
                  <option class="bg-inverse-surface text-white" value="branding">Personal Branding &amp; Authority</option>
                  <option class="bg-inverse-surface text-white" value="performance">Performance Marketing &amp; Demand</option>
                  <option class="bg-inverse-surface text-white" value="ai">AI Visibility &amp; GEO</option>
                  <option class="bg-inverse-surface text-white" value="enterprise">Comprehensive Enterprise Retainer</option>
                </select>
              </div>
              <button class="cta-glow w-full inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-primary via-primary-container to-secondary text-cyan-300 py-3.5 px-6 rounded-xl font-black text-sm hover:-translate-y-0.5 active:scale-95 transition-all group border border-cyan-400 mt-2 shadow-[0_0_25px_rgba(18,66,255,0.6)]" type="submit">
                <span class="leading-normal drop-shadow-[0_0_8px_rgba(34,211,238,0.6)] font-extrabold tracking-wide">Request Diagnostic Call</span>
                <span class="material-symbols-outlined text-[18px] text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.6)] group-hover:translate-x-1.5 transition-transform">east</span>
              </button>
            </form>
            <p class="text-[11px] text-white/75 text-center flex items-center justify-center gap-1.5 pt-2 pb-1 leading-normal">
              <span class="material-symbols-outlined text-[14px] text-blue-300">lock</span>
              <span>Zero obligation · NDA-backed · Direct partner response</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 3. PRACTICE AREAS                                                         -->
  <!-- ========================================================================= -->
  <section class="w-full py-20 relative overflow-hidden bg-gradient-to-b from-surface-container-low via-surface-container/60 to-surface-container-low border-y border-outline-variant/30" id="specializations">
    <div class="absolute inset-0 bg-gradient-to-tr from-primary/5 via-transparent to-secondary-container/5 pointer-events-none"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 space-y-10">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-outline-variant/30 pb-6">
        <div class="max-w-2xl space-y-2">
          <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white border border-outline-variant/30 shadow-sm text-primary text-xs font-bold uppercase tracking-wider">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span>Practice Areas</span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-on-surface tracking-tight">Engineered for Compounded Growth</h2>
          <p class="text-base text-on-surface-variant">High-leverage drivers built to compound enterprise value.</p>
        </div>
        <a class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-secondary group transition-colors" href="#contact">
          <span>View all specialized methodologies</span>
          <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1.5 transition-transform">arrow_forward</span>
        </a>
      </div>

      <div class="space-y-8 pb-4">
        <!-- Card 1: Personal Branding & Authority -->
        <div class="group relative rounded-3xl overflow-hidden border border-white/20 bg-inverse-surface shadow-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-0.5 min-h-[240px]">
          <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=3840&q=95" alt="Personal Branding &amp; Authority Thought Leader" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105 opacity-65">
            <div class="absolute inset-0 bg-gradient-to-r from-[#060814]/90 via-[#060814]/65 to-transparent pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-transparent to-black/25 pointer-events-none"></div>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10 p-7 sm:p-9 pb-8 sm:pb-10">
            <div class="lg:col-span-5 space-y-3">
              <div class="flex items-center gap-3 pb-1">
                <span class="text-sm font-black text-white px-3 py-1 rounded-lg bg-white/10 backdrop-blur-md border border-white/20 shadow-sm">01</span>
                <span class="material-symbols-outlined text-blue-300 text-[26px]">stars</span>
              </div>
              <h3 class="text-2xl sm:text-3xl font-bold text-white group-hover:text-blue-200 transition-colors tracking-tight leading-snug pb-1">Personal Branding &amp; Authority</h3>
              <p class="text-xs uppercase tracking-wider font-bold text-blue-300 leading-normal pb-0.5">"Become the Brand People Remember"</p>
              <p class="text-sm text-white/80 leading-relaxed font-normal pb-1">Position leadership as the authoritative voices in your sector through curated narrative PR, executive ghostwriting, and high-impact distribution.</p>
            </div>
            <div class="lg:col-span-4 bg-white/10 backdrop-blur-xl rounded-2xl p-6 pb-7 border border-white/20 shadow-lg">
              <ul class="space-y-3.5 text-xs text-white/90 font-medium">
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">Signature Narrative Architecture</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">Executive Ghostwriting &amp; PR</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">Keynote &amp; Tier-1 Media Placement</span></li>
              </ul>
            </div>
            <div class="lg:col-span-3 flex lg:justify-end">
              <a class="cta-glow w-full lg:w-auto px-6 py-3.5 rounded-xl bg-gradient-to-r from-primary to-secondary text-white text-xs font-bold flex items-center justify-center gap-2 shadow-xl hover:-translate-y-0.5 active:scale-95 transition-all duration-200 border border-white/20 group-hover:scale-105" href="#contact">
                <span class="tracking-wide leading-normal">Explore Authority Stack</span>
                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Performance Marketing & Demand -->
        <div class="group relative rounded-3xl overflow-hidden border border-white/20 bg-inverse-surface shadow-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-0.5 min-h-[240px]">
          <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=3840&q=95" alt="Algorithmic Demand and Performance Marketing" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105 opacity-65">
            <div class="absolute inset-0 bg-gradient-to-r from-[#060814]/90 via-[#060814]/65 to-transparent pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-transparent to-black/25 pointer-events-none"></div>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10 p-7 sm:p-9 pb-8 sm:pb-10">
            <div class="lg:col-span-5 space-y-3">
              <div class="flex items-center gap-3 pb-1">
                <span class="text-sm font-black text-white px-3 py-1 rounded-lg bg-white/10 backdrop-blur-md border border-white/20 shadow-sm">02</span>
                <span class="material-symbols-outlined text-secondary-fixed text-[26px]">rocket_launch</span>
              </div>
              <h3 class="text-2xl sm:text-3xl font-bold text-white group-hover:text-secondary-fixed transition-colors tracking-tight leading-snug pb-1">Performance Marketing &amp; Demand</h3>
              <p class="text-xs uppercase tracking-wider font-bold text-secondary-fixed leading-normal pb-0.5">"Turn Attention Into Business Opportunities"</p>
              <p class="text-sm text-white/80 leading-relaxed font-normal pb-1">Data-driven multi-channel acquisition engineered for scale, maximizing blended ROAS, creative velocity, and full-journey conversion funnels.</p>
            </div>
            <div class="lg:col-span-4 bg-white/10 backdrop-blur-xl rounded-2xl p-6 pb-7 border border-white/20 shadow-lg">
              <ul class="space-y-3.5 text-xs text-white/90 font-medium">
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span><span class="leading-normal">Predictive CAC &amp; Blended ROAS</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span><span class="leading-normal">High-Conversion Funnel Labs</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span><span class="leading-normal">Algorithmic Dynamic Retargeting</span></li>
              </ul>
            </div>
            <div class="lg:col-span-3 flex lg:justify-end">
              <a class="cta-glow w-full lg:w-auto px-6 py-3.5 rounded-xl bg-gradient-to-r from-secondary to-primary-container text-white text-xs font-bold flex items-center justify-center gap-2 shadow-xl hover:-translate-y-0.5 active:scale-95 transition-all duration-200 border border-white/20 group-hover:scale-105" href="#contact">
                <span class="tracking-wide leading-normal">Explore Acquisition Stack</span>
                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: AI Visibility & ChatGPT Solutions -->
        <div class="group relative rounded-3xl overflow-hidden border border-white/20 bg-inverse-surface shadow-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-0.5 min-h-[240px]">
          <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=3840&q=95" alt="AI Semantic Search and LLM Neural Network" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105 opacity-65">
            <div class="absolute inset-0 bg-gradient-to-r from-[#060814]/90 via-[#060814]/65 to-transparent pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-transparent to-black/25 pointer-events-none"></div>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10 p-7 sm:p-9 pb-8 sm:pb-10">
            <div class="lg:col-span-5 space-y-3">
              <div class="flex items-center gap-3 pb-1">
                <span class="text-sm font-black text-white px-3 py-1 rounded-lg bg-white/10 backdrop-blur-md border border-white/20 shadow-sm">03</span>
                <span class="material-symbols-outlined text-blue-300 text-[26px]">hub</span>
              </div>
              <h3 class="text-2xl sm:text-3xl font-bold text-white group-hover:text-blue-200 transition-colors tracking-tight leading-snug pb-1">AI Visibility &amp; ChatGPT Solutions</h3>
              <p class="text-xs uppercase tracking-wider font-bold text-blue-300 leading-normal pb-0.5">"Make Your Business Ready for the AI Era"</p>
              <p class="text-sm text-white/80 leading-relaxed font-normal pb-1">Pioneer Generative Engine Optimization (GEO). We structure your digital entity so LLMs proactively cite and recommend your brand when buyers query.</p>
            </div>
            <div class="lg:col-span-4 bg-white/10 backdrop-blur-xl rounded-2xl p-6 pb-7 border border-white/20 shadow-lg">
              <ul class="space-y-3.5 text-xs text-white/90 font-medium">
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">LLM Recommendation &amp; GEO Auditing</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">Vector Graph Semantic Ingestion</span></li>
                <li class="flex items-center gap-2.5"><span class="material-symbols-outlined text-blue-300 text-[18px]">check_circle</span><span class="leading-normal">Conversational AI Customer Funnels</span></li>
              </ul>
            </div>
            <div class="lg:col-span-3 flex lg:justify-end">
              <a class="cta-glow w-full lg:w-auto px-6 py-3.5 rounded-xl bg-gradient-to-r from-primary to-secondary text-white text-xs font-bold flex items-center justify-center gap-2 shadow-xl hover:-translate-y-0.5 active:scale-95 transition-all duration-200 border border-white/20 group-hover:scale-105" href="#contact">
                <span class="tracking-wide leading-normal">Explore AI Readiness</span>
                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 4. WHY ADMANTRA: 6-CARD BENEFIT GRID                                      -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 4. WHY ADMANTRA: KINETIC HOLOGRAPHIC NEXUS (ZERO CARD INTERFACE)           -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 4. WHY ADMANTRA: KINETIC HOLOGRAPHIC NEXUS                                 -->
  <!-- ========================================================================= -->
  <section class="w-full relative overflow-hidden bg-[#050816] text-white py-24 lg:py-32 border-y border-cyan-500/20" id="why-admantra">
    
    <!-- Dynamic Interactive Starfield / Particle Canvas -->
    <canvas id="nexus-particle-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-0 opacity-70"></canvas>

    <!-- Glowing Cyber Grid Background -->
    <div class="absolute inset-0 pointer-events-none z-0">
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(18,66,255,0.18)_0%,rgba(5,8,22,0.98)_75%)]"></div>
      <div class="absolute -top-32 left-1/3 w-[600px] h-[600px] bg-cyan-500/15 rounded-full blur-[140px] pointer-events-none animate-pulse"></div>
      <div class="absolute -bottom-32 right-1/3 w-[600px] h-[600px] bg-purple-600/15 rounded-full blur-[140px] pointer-events-none animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- DUAL HIGH-SPEED KINETIC TYPOGRAPHY STREAMS -->
    <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 pointer-events-none overflow-hidden z-0 select-none opacity-20 space-y-6">
      <div class="kinetic-stream-1 whitespace-nowrap text-5xl sm:text-7xl lg:text-8xl font-black uppercase tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500">
        <span class="px-6">✦ SPECIALIZED THINKING</span>
        <span class="px-6">✦ AI-READY GROWTH</span>
        <span class="px-6">✦ CREATIVE × PERFORMANCE</span>
        <span class="px-6">✦ STRATEGY FIRST</span>
        <span class="px-6">✦ ELITE PARTNER NETWORK</span>
        <span class="px-6">✦ BUSINESS IMPACT</span>
        <span class="px-6">✦ SPECIALIZED THINKING</span>
        <span class="px-6">✦ AI-READY GROWTH</span>
        <span class="px-6">✦ CREATIVE × PERFORMANCE</span>
        <span class="px-6">✦ STRATEGY FIRST</span>
        <span class="px-6">✦ ELITE PARTNER NETWORK</span>
        <span class="px-6">✦ BUSINESS IMPACT</span>
      </div>
      <div class="kinetic-stream-2 whitespace-nowrap text-5xl sm:text-7xl lg:text-8xl font-black uppercase tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-500 to-cyan-400">
        <span class="px-6">★ BEYOND CAMPAIGNS</span>
        <span class="px-6">★ NET MARGIN ROI</span>
        <span class="px-6">★ 10X ATTRIBUTION</span>
        <span class="px-6">★ ZERO COOKIE-CUTTER</span>
        <span class="px-6">★ LLM CITATIONS</span>
        <span class="px-6">★ UNIT ECONOMICS</span>
        <span class="px-6">★ BEYOND CAMPAIGNS</span>
        <span class="px-6">★ NET MARGIN ROI</span>
        <span class="px-6">★ 10X ATTRIBUTION</span>
        <span class="px-6">★ ZERO COOKIE-CUTTER</span>
        <span class="px-6">★ LLM CITATIONS</span>
        <span class="px-6">★ UNIT ECONOMICS</span>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 space-y-14">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/70 border border-cyan-400/30 text-cyan-300 text-xs font-mono font-bold tracking-widest uppercase shadow-[0_0_20px_rgba(56,189,248,0.25)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
          <span>THE ADMANTRA FORMULA // 0.0</span>
        </div>
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
          We Think <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 drop-shadow-[0_0_35px_rgba(56,189,248,0.4)]">Beyond Campaigns.</span>
        </h2>
        <p class="text-sm sm:text-base text-cyan-200/60 max-w-xl mx-auto font-medium">
          Zero cookie-cutter fluff. 6 non-negotiable vectors of market dominance.
        </p>
      </div>

      <!-- THE HOLOGRAPHIC NEXUS STAGE -->
      <div id="nexus-stage" class="relative min-h-[580px] lg:min-h-[640px] flex items-center justify-center" style="perspective: 1200px;">
        
        <!-- Animated Connecting Fiber Lines (SVG Background) -->
        <svg class="absolute inset-0 w-full h-full pointer-events-none z-0 hidden md:block" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="laserGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.8" />
              <stop offset="100%" stop-color="#a855f7" stop-opacity="0.8" />
            </linearGradient>
          </defs>
          <line x1="50%" y1="50%" x2="20%" y2="20%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" />
          <line x1="50%" y1="50%" x2="20%" y2="50%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" style="animation-delay: -1.2s;" />
          <line x1="50%" y1="50%" x2="20%" y2="80%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" style="animation-delay: -2.4s;" />
          <line x1="50%" y1="50%" x2="80%" y2="20%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" style="animation-delay: -0.6s;" />
          <line x1="50%" y1="50%" x2="80%" y2="50%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" style="animation-delay: -1.8s;" />
          <line x1="50%" y1="50%" x2="80%" y2="80%" stroke="url(#laserGrad1)" stroke-width="1.5" class="laser-line-anim" style="animation-delay: -3s;" />
        </svg>

        <!-- CENTER 3D GYROSCOPE CORE -->
        <div class="relative z-10 flex flex-col items-center justify-center p-8 gyro-container select-none">
          <div class="gyro-ring gyro-ring-1 flex items-center justify-center"></div>
          <div class="gyro-ring gyro-ring-2 flex items-center justify-center"></div>
          <div class="gyro-ring gyro-ring-3 flex items-center justify-center"></div>
          
          <!-- Radar Sweep Beam -->
          <div class="absolute w-[360px] h-[360px] pointer-events-none rounded-full overflow-hidden opacity-30">
            <div class="radar-sweep-beam w-full h-full bg-[conic-gradient(from_0deg,transparent_0deg,transparent_270deg,rgba(56,189,248,0.4)_360deg)] rounded-full"></div>
          </div>

          <!-- Central Pulsating Orb -->
          <div class="relative w-28 h-28 sm:w-36 sm:h-36 rounded-full bg-gradient-to-tr from-cyan-600 via-blue-600 to-purple-600 p-[2px] shadow-[0_0_60px_rgba(56,189,248,0.6)] animate-pulse flex items-center justify-center cursor-pointer group">
            <div class="w-full h-full rounded-full bg-[#070b1f] flex flex-col items-center justify-center text-center p-3 backdrop-blur-md group-hover:scale-105 transition-transform duration-300">
              <span class="material-symbols-outlined text-3xl sm:text-4xl text-cyan-300 group-hover:rotate-180 transition-transform duration-700">all_inclusive</span>
              <span class="text-[11px] sm:text-xs font-black tracking-widest text-white uppercase mt-1">ADMANTRA</span>
              <span class="text-[8px] font-mono tracking-wider text-cyan-400">APEX ENGINE</span>
            </div>
          </div>
        </div>

        <!-- 6 FLOATING KINETIC ENERGY NODES -->
        <div class="absolute inset-0 flex flex-col justify-between p-4 md:block pointer-events-none">
          
          <!-- Node 01: Top Left -->
          <div class="md:absolute md:top-[8%] md:left-[5%] lg:left-[10%] pointer-events-auto node-float-1 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-cyan-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(56,189,248,0.2)] cursor-pointer group">
              <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 flex items-center justify-center group-hover:bg-cyan-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">psychology_alt</span>
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-mono text-cyan-400 font-bold">01 //</span>
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-cyan-300 transition-colors">Specialized Thinking</h4>
                </div>
                <div class="text-[10px] font-mono text-cyan-200/50 uppercase tracking-wider">Custom Playbooks</div>
              </div>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 group-hover:animate-ping ml-1"></span>
            </div>
          </div>

          <!-- Node 02: Middle Left -->
          <div class="md:absolute md:top-[44%] md:left-[2%] lg:left-[6%] pointer-events-auto node-float-2 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-purple-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(168,85,247,0.2)] cursor-pointer group">
              <div class="w-9 h-9 rounded-full bg-purple-500/20 text-purple-300 border border-purple-400/40 flex items-center justify-center group-hover:bg-purple-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">palette</span>
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-mono text-purple-400 font-bold">02 //</span>
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-purple-300 transition-colors">Creative × Performance</h4>
                </div>
                <div class="text-[10px] font-mono text-purple-200/50 uppercase tracking-wider">Art Meets Math</div>
              </div>
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400 group-hover:animate-ping ml-1"></span>
            </div>
          </div>

          <!-- Node 03: Bottom Left -->
          <div class="md:absolute md:bottom-[8%] md:left-[5%] lg:left-[10%] pointer-events-auto node-float-3 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-cyan-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(56,189,248,0.2)] cursor-pointer group">
              <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 flex items-center justify-center group-hover:bg-cyan-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">diversity_3</span>
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-[10px] font-mono text-cyan-400 font-bold">03 //</span>
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-cyan-300 transition-colors">Elite Expert Network</h4>
                </div>
                <div class="text-[10px] font-mono text-cyan-200/50 uppercase tracking-wider">Senior Partners Only</div>
              </div>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 group-hover:animate-ping ml-1"></span>
            </div>
          </div>

          <!-- Node 04: Top Right -->
          <div class="md:absolute md:top-[8%] md:right-[5%] lg:right-[10%] pointer-events-auto node-float-4 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-cyan-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(56,189,248,0.2)] cursor-pointer group">
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 group-hover:animate-ping mr-1"></span>
              <div>
                <div class="flex items-center gap-2">
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-cyan-300 transition-colors">Strategy First</h4>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold">// 04</span>
                </div>
                <div class="text-[10px] font-mono text-cyan-200/50 uppercase tracking-wider text-right">Airtight Unit Economics</div>
              </div>
              <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 flex items-center justify-center group-hover:bg-cyan-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">chess</span>
              </div>
            </div>
          </div>

          <!-- Node 05: Middle Right -->
          <div class="md:absolute md:top-[44%] md:right-[2%] lg:right-[6%] pointer-events-auto node-float-5 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-purple-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(168,85,247,0.2)] cursor-pointer group">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400 group-hover:animate-ping mr-1"></span>
              <div>
                <div class="flex items-center gap-2">
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-purple-300 transition-colors">AI-Ready Approach</h4>
                  <span class="text-[10px] font-mono text-purple-400 font-bold">// 05</span>
                </div>
                <div class="text-[10px] font-mono text-purple-200/50 uppercase tracking-wider text-right">LLM Ingestion & Citations</div>
              </div>
              <div class="w-9 h-9 rounded-full bg-purple-500/20 text-purple-300 border border-purple-400/40 flex items-center justify-center group-hover:bg-purple-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">smart_toy</span>
              </div>
            </div>
          </div>

          <!-- Node 06: Bottom Right -->
          <div class="md:absolute md:bottom-[8%] md:right-[5%] lg:right-[10%] pointer-events-auto node-float-6 z-20">
            <div class="kinetic-node flex items-center gap-3.5 px-5 py-3.5 rounded-full bg-[#0a0f2b]/85 border border-cyan-400/30 backdrop-blur-xl shadow-[0_10px_30px_rgba(0,0,0,0.5),0_0_20px_rgba(56,189,248,0.2)] cursor-pointer group">
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 group-hover:animate-ping mr-1"></span>
              <div>
                <div class="flex items-center gap-2">
                  <h4 class="text-sm font-extrabold text-white tracking-wide group-hover:text-cyan-300 transition-colors">Business Impact</h4>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold">// 06</span>
                </div>
                <div class="text-[10px] font-mono text-cyan-200/50 uppercase tracking-wider text-right">Net Margin & Valuation</div>
              </div>
              <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 flex items-center justify-center group-hover:bg-cyan-400 group-hover:text-black group-hover:rotate-12 transition-all">
                <span class="material-symbols-outlined text-[20px]">monetization_on</span>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Bottom Interactive Pill Status -->
      <div class="text-center pt-2">
        <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs font-mono backdrop-blur-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
          <span>INTERACTIVE PHYSICS ENGAGED</span>
          <span class="text-white/20">|</span>
          <span class="text-cyan-300">HOVER TO ENERGIZE</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 5. CLIENT SEGMENTS: WHO WE EMPOWER                                        -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 5. CLIENT SEGMENTS: WHO WE EMPOWER (INTERACTIVE ANIMATED MATRIX)           -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 5. CLIENT SEGMENTS: WHO WE EMPOWER (CINEMATIC EXPANDING ACCORDION)         -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 5. CLIENT SEGMENTS: WHO WE EMPOWER                                        -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 5. CLIENT SEGMENTS: WHO WE EMPOWER (CINEMATIC EXPANDING ACCORDION)         -->
  <!-- ========================================================================= -->
  <section id="who-we-empower" class="w-full bg-[#050816] py-24 border-t border-white/10 relative overflow-hidden text-white">
    <!-- Ambient Cinematic Lighting -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[500px] bg-gradient-to-b from-primary/20 via-cyan-500/10 to-transparent rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-[500px] h-[300px] bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 space-y-12 relative z-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/70 border border-cyan-400/30 text-cyan-300 text-xs font-mono font-bold uppercase tracking-widest shadow-[0_0_15px_rgba(56,189,248,0.2)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
          <span>WHO WE EMPOWER // SECTOR MATRIX</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
          Ambitious Brands. <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 drop-shadow-[0_0_30px_rgba(56,189,248,0.35)]">Visionary Leaders.</span>
        </h2>
        <p class="text-sm sm:text-base text-cyan-200/60 max-w-xl mx-auto">
          Hover over each sector to inspect tailored penetration strategies and market authority outcomes.
        </p>
      </div>

      <!-- THE CINEMATIC EXPANDING ACCORDION TRACK -->
      <div class="empower-accordion-track" id="empower-accordion">
        <!-- Accordion Panel 01: Founders & Visionary Leaders -->
        <div class="accordion-panel active group" data-panel-index="0">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcEk-A2Y3k29pTGzaqVcv57-8PrneEC2OUfnlC7tTrZgvmZsu4CUSq1zEtegSO2NlbKEQk-bFizqVUvMjfuMG1cEK48JuGoAkX4NTA-4gDG4uBHBJcZrWa1MRDNTW5Gn5XJuXdsheKX6A7qzVvN1zr9RvkXHkf3qL3tLCTK99STAzujnp1Xnm8FAldcypsK5NyQkOLRaO_W10WPCsrulfuV9uaz3HGsMHyriC0Y3UK" alt="Founders Workspace" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">person_celebrate</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                01 // Founders &amp; Visionaries
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">person_celebrate</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">01 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Category Sovereign</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  Founders &amp; Visionary Leaders
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  Personal authority architectures &amp; category-defining prestige for enterprise leaders.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>+240% Authority Reach</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Panel 02: Real Estate & Development -->
        <div class="accordion-panel group" data-panel-index="1">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCT3Gy55NZPL0KjACkxKKcndX06f1JgR8Eb_WSwazAoHlbPAoyEg_U3zTF5IoZHVv6_sjjECir4fhyxlYu6vFbWeaH9_RohFPPCCm1QwqQCZP0V1IfJYEcNk4YtyZyAtUrJ83OSWKEw69LOv8HTfJNYZ7CpqhYFzVlNUcbSpR9SCOEVIDj4ThtppIxWAFKDWcBaloybDNhdBzYHO3jlFmJdL324f8-SMPe82URvUTZm" alt="Real Estate High-Rise" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">apartment</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                02 // Real Estate &amp; Luxury Assets
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">apartment</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">02 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Investor Ready</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  Real Estate &amp; Development
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  High-ticket investor ingestion &amp; global ultra-luxury asset acquisition funnels.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>$85M+ Ingested Pipeline</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Panel 03: Coaching & High-End Education -->
        <div class="accordion-panel group" data-panel-index="2">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHlp2MQfTENdZ_XKVTU6MIywKnftJcYIAF9ZLi7gc4B1Df_h3QTIuJJqMq61EtkA9eJGFbvEhc1AvfisV_8vBsUZU1ffMH6z24WmAUQy_VFk6MkF41shuQt3IgTGDZGKODScxB5ppW-4LUGJcyNSh4TW9TGU3koYcawgkNc44lGVIMakoWU6vo6y4S0hHyx2VyY3xr-ejLGRuXakvpkeOpP1eB5sr_cDHudWnETEg3" alt="Keynote Auditorium" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">school</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                03 // Education &amp; Masterminds
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">school</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">03 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Prestige Funnels</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  Coaching &amp; High-End Education
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  High-ticket advisory funnels, masterclass syndication, and high-trust conversion pipelines.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>4.8x High-Ticket ROAS</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Panel 04: Healthcare & Wellness Practices -->
        <div class="accordion-panel group" data-panel-index="3">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIdt5-Snn5u4RoCA3iOpIjBGsWamTWFHupDpJoLVuRW4VJTsYwqKnR9jGCk4gCy6zVo6_SnIW7-NRUODbqKvHSi2TEuXGWHe8hDroZ_THiu_uBBpqK5UWAuljMa_KOFP4dLDH15o16FlR_eEGn0e8Xgqq0MY0KiFVKezf0rcQUQnUdgjHxdanmGZYQNCfALsUALLIL_4LzalVkGSJ4sMTpuPmrrtU1StxqXqXror3z" alt="Wellness Clinic" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">medical_services</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                04 // Clinical &amp; Healthcare
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">medical_services</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">04 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Trust Engineered</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  Healthcare &amp; Wellness Practices
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  Predictable private-patient booking pipelines and medical authority positioning.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>-38% Acquisition CAC</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Panel 05: High-Velocity Tech Startups -->
        <div class="accordion-panel group" data-panel-index="4">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAh93TYX5mT5QUolxjtWYry6GqjRPh_vJFcc4J_sG2077xYrPumKtiv3lc4YvgBRjHBDkXif_RwE6dtclGNXb5rpJoFLn3_eFpeKdwFc7WrczhbaeZwM90Cs-XIn2eDEwNeJ94B-fJeLuri0mTOEZslG0friZ_gjn7qxjxnFlSQ7UvbKDM2n-8Mf0-G-8zOW_QNGQYkx5JpxDLn7zZXCSqobjpaivjg5JlonIb6l1Ky" alt="Startup Command Room" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">speed</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                05 // Tech Startups &amp; Scaleups
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">speed</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">05 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Series A Scale</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  High-Velocity Tech Startups
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  Full-funnel growth hacking, blended unit economics optimization, and rapid Series A traction.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>14-Day Rapid Traction</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Panel 06: Hospitality & Boutique Lifestyle -->
        <div class="accordion-panel group" data-panel-index="5">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdpA8XVBdbonC0ATXs-eySdk71oUCKa0T0YgFiStM58g4mPAMf7-ZiZ0C10yk7Nd0Lz_cdLO6tJf0p-rtLiUNhwFkbq3EQI1v-Eq6m7zte-BT4OroPFJ3ZBjNeTjqw7WgnS5tBtDfSFT5jtqtRLDlCtMlJ8FHdUBjbsFwg0DPomBWz2dieGPO6gopTdySapF5ENSSW5WcQY3DhxNqmOOpe8Jrptd91b9LPce1rqTEb" alt="Hospitality Lounge" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 pointer-events-none">
          <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/60 to-black/35 pointer-events-none"></div>
          <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-cyan-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

          <div class="panel-collapsed-view absolute inset-0 z-10 flex flex-col justify-between items-center p-6 pointer-events-none">
            <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-cyan-300 shadow-md">
              <span class="material-symbols-outlined text-[20px]">hotel</span>
            </div>
            <div class="flex-1 flex items-center justify-center py-6">
              <span class="vertical-title text-xs font-mono font-bold tracking-widest uppercase text-white/80 whitespace-nowrap">
                06 // Luxury Hospitality
              </span>
            </div>
            <div class="w-2 h-2 rounded-full bg-cyan-400/60"></div>
          </div>

          <div class="panel-expanded-view relative z-20 flex flex-col justify-between h-full p-6 sm:p-8">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl bg-primary text-white border border-white/20 flex items-center justify-center shadow-lg shadow-primary/40">
                  <span class="material-symbols-outlined text-[22px]">hotel</span>
                </div>
                <div>
                  <span class="text-[10px] font-mono text-cyan-400 font-bold uppercase tracking-widest">06 // VECTOR SECTOR</span>
                  <div class="text-[11px] font-mono text-white/60 uppercase">Prestige Retention</div>
                </div>
              </div>
              <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-semibold">
                <span>Active Spec</span>
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
              </div>
            </div>

            <div class="space-y-4 pt-10">
              <div>
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-snug drop-shadow-sm">
                  Hospitality &amp; Boutique Lifestyle
                </h3>
                <p class="text-xs sm:text-sm text-white/80 leading-relaxed font-normal pt-1 max-w-md">
                  Aesthetic desirability modeling, premium brand equity, and direct reservation dominance.
                </p>
              </div>

              <div class="pt-3 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-400/10 border border-cyan-400/30 text-cyan-300 font-mono text-xs font-bold">
                  <span class="material-symbols-outlined text-[16px] text-cyan-400">trending_up</span>
                  <span>9.2x Desirability Index</span>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-primary px-4 py-2.5 rounded-xl border border-white/25 shadow-lg shadow-primary/30 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:scale-95 transition-all duration-300 group/btn">
                  <span>Contact Us for More</span>
                  <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform">east</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Hint Status Bar -->
      <div class="text-center pt-2">
        <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-white/5 border border-white/10 text-white/50 text-xs font-mono backdrop-blur-sm">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
          <span>INTERACTIVE SECTOR EXPANSION</span>
          <span class="text-white/20">|</span>
          <span class="text-cyan-300">HOVER OR CLICK TO EXPAND</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 6. CORE PHILOSOPHY & FORMULA EQUATION                                      -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 6. CORE PHILOSOPHY & THE ADMANTRA FORMULA (MINIMAL ELEGANT ANIMATION)      -->
  <!-- ========================================================================= -->
  <section class="relative w-full overflow-hidden bg-gradient-to-b from-white via-surface-container-low/40 to-white py-24 lg:py-28 border-y border-outline-variant/30 text-on-surface shadow-xs" id="philosophy">
    <!-- Ambient Subtle Glows -->
    <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
      <div class="absolute -top-32 -left-20 w-[550px] h-[550px] bg-gradient-to-br from-primary/8 via-primary-container/4 to-transparent rounded-full blur-[130px]"></div>
      <div class="absolute -bottom-32 -right-20 w-[550px] h-[550px] bg-gradient-to-tr from-secondary-container/8 via-primary/4 to-transparent rounded-full blur-[130px]"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-primary/4 rounded-full blur-[120px]"></div>
      <svg class="absolute inset-0 w-full h-full stroke-primary/10 [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)]" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="formula-blueprint-light-grid" width="60" height="60" patternUnits="userSpaceOnUse">
            <path d="M 60 0 L 0 0 0 60" fill="none" stroke="rgba(18, 66, 255, 0.04)" stroke-width="1"></path>
            <circle cx="60" cy="0" r="1.5" fill="rgba(18, 66, 255, 0.12)"></circle>
            <circle cx="0" cy="60" r="1.5" fill="rgba(18, 66, 255, 0.12)"></circle>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#formula-blueprint-light-grid)"></rect>
      </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        
        <!-- Left Column: Core Philosophy -->
        <div class="lg:col-span-5 flex flex-col justify-between space-y-8">
          <div class="space-y-6">
            <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-surface-container-low border border-outline-variant/30 shadow-xs">
              <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
              </span>
              <span class="text-xs font-bold uppercase tracking-widest text-primary font-mono">Core Philosophy</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-on-surface tracking-tight leading-snug">
              <span class="block text-on-surface/90 font-extrabold pb-2">“We don't believe in <span class="text-on-surface-variant font-semibold">marketing for the sake of marketing.</span></span>
              <span class="block pt-1">We believe in <span class="text-shimmer-subtle font-black inline-block">marketing with direction.”</span></span>
            </h2>

            <p class="text-base text-on-surface-variant leading-relaxed font-normal">
              Most agencies chase ephemeral vanity metrics and transient algorithms. Admantra re-engineers acquisition pipelines through rigorous unit economics, authoritative category dominance, and generative intelligence.
            </p>
          </div>

          <!-- Execution Metric Readout Card with Subtle Elevation -->
          <div class="bg-white/90 backdrop-blur-xl border border-outline-variant/30 rounded-2xl p-6 shadow-sm hover:border-primary/40 hover:shadow-md transition-all duration-300 flex items-center justify-between gap-4 group">
            <div class="space-y-1">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px] group-hover:scale-110 transition-transform duration-300">verified</span>
                <span class="text-xs font-bold uppercase tracking-wider text-primary font-mono">Execution Metric</span>
              </div>
              <span class="text-sm font-bold text-on-surface block group-hover:text-primary transition-colors">Outcome-Tied Attribution</span>
            </div>
            <div class="text-right">
              <span class="text-3xl lg:text-4xl font-black text-primary tracking-tight">100%</span>
              <span class="block text-[10px] uppercase font-bold text-on-surface-variant tracking-wider font-mono">Guaranteed Audit</span>
            </div>
          </div>
        </div>

        <!-- Right Column: System Architecture & The Admantra Formula Equation -->
        <div class="lg:col-span-7">
          <div class="bg-white/95 backdrop-blur-2xl border border-outline-variant/30 rounded-3xl p-6 sm:p-8 lg:p-9 pb-8 sm:pb-10 shadow-lg space-y-6 relative hover:border-primary/30 transition-all duration-300">
            
            <!-- Top Header & Live Formula Status -->
            <div class="flex items-center justify-between flex-wrap gap-3 pb-5 border-b border-outline-variant/20">
              <div>
                <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-primary pb-1 font-mono">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                  <span class="text-emerald-700 font-bold">SYSTEM ACTIVE</span>
                  <span class="text-outline-variant">|</span>
                  <span>SYSTEM ARCHITECTURE</span>
                </div>
                <h3 class="text-2xl font-black text-on-surface tracking-tight leading-snug mt-1">The Admantra Formula</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">The proprietary equation behind compounded market dominance.</p>
              </div>
              <span class="px-3 py-1.5 rounded-full bg-primary/5 text-primary border border-primary/20 text-xs font-bold uppercase tracking-wider font-mono shadow-xs">
                PROPRIETARY FLOW
              </span>
            </div>

            <!-- Mathematical Equation Container: [Card 1] + [Card 2] + [Card 3] -->
            <div class="relative pt-1">
              
              <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 relative z-10">
                
                <!-- Input Step 01: Creative Thinking -->
                <div class="formula-step-card bg-surface-container-low/50 hover:bg-white border border-outline-variant/30 hover:border-blue-400/60 rounded-2xl p-5 pb-6 shadow-xs hover:shadow-md flex flex-col justify-between space-y-4 group cursor-pointer">
                  <div class="flex items-center justify-between pb-1">
                    <div class="w-9 h-9 rounded-xl bg-blue-500/10 text-primary flex items-center justify-center border border-primary/20 shadow-xs group-hover:bg-primary group-hover:text-white group-hover:rotate-6 transition-all duration-300">
                      <span class="material-symbols-outlined text-[20px]">psychology</span>
                    </div>
                    <span class="text-[10px] font-black uppercase px-2 py-0.5 rounded-full bg-white text-primary tracking-wider border border-outline-variant/30 font-mono shadow-xs">
                      01
                    </span>
                  </div>
                  <div>
                    <div class="text-sm font-bold text-on-surface group-hover:text-primary transition-colors leading-snug pb-1">Creative Thinking</div>
                    <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">Disruptive narrative hooks &amp; retention engines</p>
                  </div>
                </div>

                <!-- Input Step 02: Marketing Intel -->
                <div class="formula-step-card bg-surface-container-low/50 hover:bg-white border border-outline-variant/30 hover:border-purple-400/60 rounded-2xl p-5 pb-6 shadow-xs hover:shadow-md flex flex-col justify-between space-y-4 group cursor-pointer">
                  <div class="flex items-center justify-between pb-1">
                    <div class="w-9 h-9 rounded-xl bg-purple-500/10 text-secondary-container flex items-center justify-center border border-secondary-container/20 shadow-xs group-hover:bg-secondary-container group-hover:text-white group-hover:rotate-6 transition-all duration-300">
                      <span class="material-symbols-outlined text-[20px]">analytics</span>
                    </div>
                    <span class="text-[10px] font-black uppercase px-2 py-0.5 rounded-full bg-white text-secondary-container tracking-wider border border-outline-variant/30 font-mono shadow-xs">
                      02
                    </span>
                  </div>
                  <div>
                    <div class="text-sm font-bold text-on-surface group-hover:text-secondary-container transition-colors leading-snug pb-1">Marketing Intel</div>
                    <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">CAC &amp; LTV calibration, precision modeling</p>
                  </div>
                </div>

                <!-- Input Step 03: Emerging Tech -->
                <div class="formula-step-card bg-surface-container-low/50 hover:bg-white border border-outline-variant/30 hover:border-cyan-400/60 rounded-2xl p-5 pb-6 shadow-xs hover:shadow-md flex flex-col justify-between space-y-4 group cursor-pointer">
                  <div class="flex items-center justify-between pb-1">
                    <div class="w-9 h-9 rounded-xl bg-cyan-500/10 text-cyan-700 flex items-center justify-center border border-cyan-400/30 shadow-xs group-hover:bg-cyan-600 group-hover:text-white group-hover:rotate-6 transition-all duration-300">
                      <span class="material-symbols-outlined text-[20px]">smart_toy</span>
                    </div>
                    <span class="text-[10px] font-black uppercase px-2 py-0.5 rounded-full bg-white text-cyan-800 tracking-wider border border-outline-variant/30 font-mono shadow-xs">
                      03
                    </span>
                  </div>
                  <div>
                    <div class="text-sm font-bold text-on-surface group-hover:text-cyan-700 transition-colors leading-snug pb-1">Emerging Tech</div>
                    <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">AI search, LLM ingestion &amp; GEO dominance</p>
                  </div>
                </div>

              </div>
            </div>

            <!-- Minimal Equation Connector with Subtle Animated Flow -->
            <div class="relative py-1 flex items-center justify-center">
              <svg class="absolute inset-0 w-full h-8 pointer-events-none hidden sm:block" xmlns="http://www.w3.org/2000/svg">
                <line x1="16%" y1="50%" x2="50%" y2="50%" stroke="rgba(18, 66, 255, 0.25)" stroke-width="1.5" class="formula-beam" />
                <line x1="84%" y1="50%" x2="50%" y2="50%" stroke="rgba(18, 66, 255, 0.25)" stroke-width="1.5" class="formula-beam" />
              </svg>
              <div class="relative z-10 flex items-center gap-2">
                <div class="h-px w-20 sm:w-28 bg-gradient-to-r from-transparent to-primary/30"></div>
                <div class="w-8 h-8 rounded-full bg-white border border-primary/30 flex items-center justify-center text-primary font-mono font-black text-sm shadow-xs transition-transform duration-300 hover:scale-110">
                  =
                </div>
                <div class="h-px w-20 sm:w-28 bg-gradient-to-l from-transparent to-primary/30"></div>
              </div>
            </div>

            <!-- Outcome Result: Category Leadership with Calm Ambient Gradient Shift -->
            <div class="formula-outcome-card w-full bg-gradient-to-r from-primary via-[#2a4dff] to-secondary text-white rounded-2xl p-5 sm:p-7 pb-6 sm:pb-7 shadow-lg border border-white/20 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative overflow-hidden group">
              <!-- Subtle Light Shimmer Reflection -->
              <div class="absolute -top-12 -right-12 w-48 h-48 bg-white/10 rounded-full blur-[50px] pointer-events-none group-hover:scale-125 transition-transform duration-700"></div>

              <div class="flex items-center gap-4 relative z-10">
                <div class="w-12 h-12 rounded-xl bg-white/15 backdrop-blur-md flex items-center justify-center text-white border border-white/25 shadow-md shrink-0 group-hover:bg-white group-hover:text-primary transition-all duration-300">
                  <span class="material-symbols-outlined text-[26px]">workspace_premium</span>
                </div>
                <div>
                  <div class="flex items-center gap-2 pb-0.5">
                    <span class="text-lg font-black text-white tracking-tight leading-snug">Category Leadership</span>
                    <span class="text-[10px] font-black uppercase px-2 py-0.5 rounded-full bg-white text-primary tracking-wider shadow-xs font-mono">Result</span>
                  </div>
                  <p class="text-xs sm:text-sm text-white/85 font-medium mt-0.5 leading-relaxed">Compounded authority, enterprise valuation &amp; market capture</p>
                </div>
              </div>

              <a class="inline-flex items-center gap-2 bg-white hover:bg-surface-container-low text-primary px-5 py-3 rounded-xl font-bold text-xs shadow-md hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all group/btn shrink-0 relative z-10" href="#specializations">
                <span class="tracking-wide">Explore Our Expertise</span>
                <span class="material-symbols-outlined text-[16px] group-hover/btn:translate-x-1 transition-transform duration-300">east</span>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 7. 5-STEP GROWTH ENGINE PROTOCOL                                          -->
  <!-- ========================================================================= -->
    <!-- ========================================================================= -->
  <!-- 7. 5-STEP GROWTH ENGINE PROTOCOL (INTERACTIVE MOVING ENGINE)               -->
  <!-- ========================================================================= -->
  <section class="w-full relative overflow-hidden py-24 lg:py-28 bg-gradient-to-b from-[#050816] via-[#090e28] to-[#050816] text-white border-y border-cyan-500/20" id="protocol">
    
    <!-- Ambient Energy Backing & Floating Star Canvas -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
      <div class="absolute -top-32 left-1/4 w-[550px] h-[550px] bg-gradient-to-br from-blue-600/20 via-cyan-500/10 to-transparent rounded-full blur-[140px] animate-pulse"></div>
      <div class="absolute -bottom-32 right-1/4 w-[550px] h-[550px] bg-gradient-to-tr from-purple-600/20 via-primary/10 to-transparent rounded-full blur-[140px] animate-pulse" style="animation-delay: 2s;"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-[350px] bg-blue-500/10 rounded-full blur-[130px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 space-y-14">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-4">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-cyan-950/70 border border-cyan-400/30 text-cyan-300 text-xs font-mono font-bold uppercase tracking-widest shadow-[0_0_20px_rgba(56,189,248,0.25)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
          <span>THE PROTOCOL // SEQUENTIAL ENGINE</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
          Our 5–Step <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 drop-shadow-[0_0_30px_rgba(56,189,248,0.5)]">Growth Engine</span>
        </h2>
        <p class="text-sm sm:text-base text-cyan-200/70 leading-relaxed font-normal max-w-xl mx-auto">
          A structured, iterative methodology that eliminates guesswork and scales predictable demand.
        </p>
      </div>

      <!-- Moving Pipeline Track -->
      <div class="relative pt-6 pb-2" id="protocol-engine">
        
        <!-- Animated Connecting Rail with Moving Comet Beam -->
        <div class="hidden md:block absolute top-[52px] left-[7%] right-[7%] h-1.5 bg-[#0e1738] rounded-full overflow-hidden z-0 border border-white/10">
          <!-- Active Progress Line -->
          <div id="protocol-progress-bar" class="absolute top-0 left-0 h-full bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 transition-all duration-700 ease-out" style="width: 20%;"></div>
          <!-- Continuous Traveling Laser Comet -->
          <div class="laser-comet-stream"></div>
        </div>

        <!-- 5 Interactive Step Columns -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-5 relative z-10">
          
          <!-- Step 1: Discover -->
          <div class="flex flex-col items-center text-center space-y-5 cursor-pointer protocol-step-col" data-step="1">
            <div class="step-node-bubble active-node relative w-16 h-16 rounded-2xl bg-gradient-to-br from-primary via-primary-container to-secondary text-white flex items-center justify-center shadow-[0_0_30px_rgba(56,189,248,0.7)] border border-cyan-400 group-hover:scale-110">
              <span class="text-lg font-black tracking-tight relative z-10 font-mono">01</span>
              <div class="node-status-badge absolute -top-3 px-2 py-0.5 rounded-full bg-cyan-400 text-black text-[9px] font-black tracking-wider uppercase z-10 shadow-[0_0_10px_#38bdf8]">
                ACTIVE
              </div>
            </div>
            
            <div class="protocol-step-card active-step w-full bg-[#0a0f2b]/85 backdrop-blur-xl p-5 pb-6 rounded-2xl border border-white/15 shadow-xl flex flex-col justify-between min-h-[140px]">
              <div class="space-y-1.5">
                <div class="flex items-center justify-center gap-1.5 text-cyan-300 text-[11px] font-mono font-bold uppercase pb-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                  <span>Stage 01</span>
                </div>
                <h3 class="text-base font-bold text-white tracking-tight leading-snug">Discover</h3>
                <p class="text-xs text-cyan-200/60 leading-relaxed font-normal">Audit &amp; Positioning</p>
              </div>
              <div class="pt-2 text-[10px] font-mono text-cyan-300/80 border-t border-white/10 mt-2">
                Unit Economics Matrix
              </div>
            </div>
          </div>

          <!-- Step 2: Strategize -->
          <div class="flex flex-col items-center text-center space-y-5 cursor-pointer protocol-step-col" data-step="2">
            <div class="step-node-bubble relative w-16 h-16 rounded-2xl bg-[#0b102e] text-blue-200 border border-white/20 flex items-center justify-center shadow-md">
              <span class="text-lg font-black tracking-tight relative z-10 font-mono">02</span>
              <div class="node-status-badge hidden absolute -top-3 px-2 py-0.5 rounded-full bg-cyan-400 text-black text-[9px] font-black tracking-wider uppercase z-10 shadow-[0_0_10px_#38bdf8]">
                ACTIVE
              </div>
            </div>
            
            <div class="protocol-step-card w-full bg-[#0a0f2b]/85 backdrop-blur-xl p-5 pb-6 rounded-2xl border border-white/15 shadow-xl flex flex-col justify-between min-h-[140px]">
              <div class="space-y-1.5">
                <div class="flex items-center justify-center gap-1.5 text-white/50 text-[11px] font-mono font-semibold uppercase pb-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
                  <span>Stage 02</span>
                </div>
                <h3 class="text-base font-bold text-white tracking-tight leading-snug">Strategize</h3>
                <p class="text-xs text-cyan-200/60 leading-relaxed font-normal">CAC/LTV Blueprint</p>
              </div>
              <div class="pt-2 text-[10px] font-mono text-cyan-300/80 border-t border-white/10 mt-2">
                Precision Acquisition Funnel
              </div>
            </div>
          </div>

          <!-- Step 3: Create -->
          <div class="flex flex-col items-center text-center space-y-5 cursor-pointer protocol-step-col" data-step="3">
            <div class="step-node-bubble relative w-16 h-16 rounded-2xl bg-[#0b102e] text-purple-300 border border-white/20 flex items-center justify-center shadow-md">
              <span class="text-lg font-black tracking-tight relative z-10 font-mono">03</span>
              <div class="node-status-badge hidden absolute -top-3 px-2 py-0.5 rounded-full bg-cyan-400 text-black text-[9px] font-black tracking-wider uppercase z-10 shadow-[0_0_10px_#38bdf8]">
                ACTIVE
              </div>
            </div>
            
            <div class="protocol-step-card w-full bg-[#0a0f2b]/85 backdrop-blur-xl p-5 pb-6 rounded-2xl border border-white/15 shadow-xl flex flex-col justify-between min-h-[140px]">
              <div class="space-y-1.5">
                <div class="flex items-center justify-center gap-1.5 text-white/50 text-[11px] font-mono font-semibold uppercase pb-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
                  <span>Stage 03</span>
                </div>
                <h3 class="text-base font-bold text-white tracking-tight leading-snug">Create</h3>
                <p class="text-xs text-cyan-200/60 leading-relaxed font-normal">High-Hook Assets</p>
              </div>
              <div class="pt-2 text-[10px] font-mono text-purple-300/80 border-t border-white/10 mt-2">
                Artistic Math Synthesis
              </div>
            </div>
          </div>

          <!-- Step 4: Execute -->
          <div class="flex flex-col items-center text-center space-y-5 cursor-pointer protocol-step-col" data-step="4">
            <div class="step-node-bubble relative w-16 h-16 rounded-2xl bg-[#0b102e] text-purple-300 border border-white/20 flex items-center justify-center shadow-md">
              <span class="text-lg font-black tracking-tight relative z-10 font-mono">04</span>
              <div class="node-status-badge hidden absolute -top-3 px-2 py-0.5 rounded-full bg-cyan-400 text-black text-[9px] font-black tracking-wider uppercase z-10 shadow-[0_0_10px_#38bdf8]">
                ACTIVE
              </div>
            </div>
            
            <div class="protocol-step-card w-full bg-[#0a0f2b]/85 backdrop-blur-xl p-5 pb-6 rounded-2xl border border-white/15 shadow-xl flex flex-col justify-between min-h-[140px]">
              <div class="space-y-1.5">
                <div class="flex items-center justify-center gap-1.5 text-white/50 text-[11px] font-mono font-semibold uppercase pb-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
                  <span>Stage 04</span>
                </div>
                <h3 class="text-base font-bold text-white tracking-tight leading-snug">Execute</h3>
                <p class="text-xs text-cyan-200/60 leading-relaxed font-normal">Omnichannel Scale</p>
              </div>
              <div class="pt-2 text-[10px] font-mono text-purple-300/80 border-t border-white/10 mt-2">
                Aggressive Media Placement
              </div>
            </div>
          </div>

          <!-- Step 5: Optimize -->
          <div class="flex flex-col items-center text-center space-y-5 cursor-pointer protocol-step-col" data-step="5">
            <div class="step-node-bubble relative w-16 h-16 rounded-2xl bg-[#0b102e] text-cyan-300 border border-white/20 flex items-center justify-center shadow-md">
              <span class="text-lg font-black tracking-tight relative z-10 font-mono">05</span>
              <div class="node-status-badge hidden absolute -top-3 px-2 py-0.5 rounded-full bg-cyan-400 text-black text-[9px] font-black tracking-wider uppercase z-10 shadow-[0_0_10px_#38bdf8]">
                ACTIVE
              </div>
            </div>
            
            <div class="protocol-step-card w-full bg-[#0a0f2b]/85 backdrop-blur-xl p-5 pb-6 rounded-2xl border border-white/15 shadow-xl flex flex-col justify-between min-h-[140px]">
              <div class="space-y-1.5">
                <div class="flex items-center justify-center gap-1.5 text-white/50 text-[11px] font-mono font-semibold uppercase pb-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>
                  <span>Stage 05</span>
                </div>
                <h3 class="text-base font-bold text-white tracking-tight leading-snug">Optimize</h3>
                <p class="text-xs text-cyan-200/60 leading-relaxed font-normal">Attribution Tuning</p>
              </div>
              <div class="pt-2 text-[10px] font-mono text-cyan-300/80 border-t border-white/10 mt-2">
                Compounded Equity Growth
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Moving Live Telemetry Terminal Readout -->
      <div class="text-center pt-2">
        <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full bg-[#090e29] border border-cyan-400/30 text-white text-xs font-mono backdrop-blur-md shadow-[0_0_25px_rgba(56,189,248,0.2)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
          <span class="text-cyan-300 font-bold" id="protocol-live-hud">PROTOCOL ENGINE ACTIVE // STAGE 01: AUDIT &amp; POSITIONING</span>
          <span class="text-white/20 hidden sm:inline">|</span>
          <span class="text-white/50 hidden sm:inline">HOVER STAGES TO INSPECT</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 8. MARKET DYNAMICS: COMPARATIVE SHIFTS                                    -->
  <!-- ========================================================================= -->
  <section class="w-full bg-surface-container-low/60 py-20 border-b border-outline-variant/20" id="market-dynamics">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
        <div class="lg:col-span-5 space-y-5 lg:sticky lg:top-28">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-outline-variant/30 text-primary text-xs font-bold uppercase tracking-wider">
            Market Dynamics
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-on-surface leading-tight">
            Marketing Is Changing.<br>Evolve Your Growth.
          </h2>
          <p class="text-base text-on-surface-variant leading-relaxed">
            Legacy tactics are losing ground. Leading your category demands structural precision, narrative weight, and algorithmic calibration.
          </p>
          <div class="p-5 rounded-2xl bg-white border border-outline-variant/30 shadow-sm space-y-2">
            <span class="text-xs uppercase tracking-wider text-primary font-bold">Category Evolution</span>
            <p class="text-sm text-on-surface-variant">The traditional playbooks no longer generate outsized returns. Growth requires integrated narrative engineering, unit economics, and AI-led reach.</p>
          </div>
        </div>

        <div class="lg:col-span-7 space-y-5 pb-4">
          <!-- Row 1 -->
          <div class="p-6 sm:p-7 pb-8 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-outline-variant/20 hover:border-blue-300 transition-all group flex flex-col sm:flex-row sm:items-center justify-between gap-5">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface-container text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[26px]">hourglass_top</span>
              </div>
              <div>
                <h3 class="text-lg font-bold text-on-surface group-hover:text-primary transition-colors leading-snug pb-1">Attention Is Harder to Earn</h3>
                <p class="text-sm text-on-surface-variant mt-1 leading-relaxed pb-1">Feeds are saturated. Passive ads fail; authority and high-hook narratives convert.</p>
              </div>
            </div>
            <div class="shrink-0 flex items-center gap-2 text-primary text-sm font-bold">
              <span class="leading-normal">High-Fidelity Narrative</span>
              <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="p-6 sm:p-7 pb-8 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-outline-variant/20 hover:border-secondary-container transition-all group flex flex-col sm:flex-row sm:items-center justify-between gap-5">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface-container text-secondary-container flex items-center justify-center shrink-0 group-hover:bg-secondary-container group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[26px]">grouped_bar_chart</span>
              </div>
              <div>
                <h3 class="text-lg font-bold text-on-surface group-hover:text-secondary-container transition-colors leading-snug pb-1">Competition Is Increasing</h3>
                <p class="text-sm text-on-surface-variant mt-1 leading-relaxed pb-1">Rising CAC demands razor-sharp unit economics and precision attribution.</p>
              </div>
            </div>
            <div class="shrink-0 flex items-center gap-2 text-secondary-container text-sm font-bold">
              <span class="leading-normal">Unit Economic Modeling</span>
              <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="p-6 sm:p-7 pb-8 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-outline-variant/20 hover:border-tertiary-container transition-all group flex flex-col sm:flex-row sm:items-center justify-between gap-5">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-surface-container text-tertiary-container flex items-center justify-center shrink-0 group-hover:bg-tertiary-container group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[26px]">smart_toy</span>
              </div>
              <div>
                <h3 class="text-lg font-bold text-on-surface group-hover:text-tertiary-container transition-colors leading-snug pb-1">AI Is Transforming Discovery</h3>
                <p class="text-sm text-on-surface-variant mt-1 leading-relaxed pb-1">AI search and LLMs replace traditional search. Be indexed or disappear.</p>
              </div>
            </div>
            <div class="shrink-0 flex items-center gap-2 text-tertiary-container text-sm font-bold">
              <span class="leading-normal">Generative Engine (GEO)</span>
              <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">east</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================= -->
  <!-- 9. READY TO BUILD CTA SECTION                                             -->
  <!-- ========================================================================= -->
  <section class="w-full max-w-7xl mx-auto px-6 lg:px-12 py-20" id="contact">
    <div class="relative rounded-3xl bg-gradient-to-br from-inverse-surface via-[#1b2234] to-inverse-surface text-white p-8 sm:p-12 lg:p-16 pb-12 sm:pb-16 shadow-2xl overflow-hidden border border-white/10">
      <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=3840&q=95" alt="Executive Leadership Background" class="w-full h-full object-cover object-right opacity-25">
        <div class="absolute inset-0 bg-gradient-to-r from-inverse-surface via-inverse-surface/90 to-transparent"></div>
      </div>
      <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-primary/25 blur-[90px] pointer-events-none"></div>
      <div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-secondary-container/20 blur-[90px] pointer-events-none"></div>

      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 text-blue-200 text-xs font-bold uppercase tracking-wider border border-white/15">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span class="leading-normal">Ready For Next-Level Scale?</span>
          </div>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black leading-snug tracking-tight text-white pb-2">
            Ready to Build Your Category-Defining Growth Engine?
          </h2>
          <p class="text-base text-white/80 leading-relaxed max-w-xl pb-1">
            Schedule a private 30-minute growth diagnostic session with our leadership team. We'll audit your positioning, review your acquisition metrics, and identify immediate high-leverage growth opportunities.
          </p>
          <div class="pt-2 pb-1 flex flex-wrap items-center gap-5 text-xs text-white/75">
            <div class="flex items-center gap-1.5">
              <span class="material-symbols-outlined text-[16px] text-blue-400">verified_user</span>
              <span class="leading-normal">Zero obligation or sales pressure</span>
            </div>
            <div class="flex items-center gap-1.5">
              <span class="material-symbols-outlined text-[16px] text-blue-400">speed</span>
              <span class="leading-normal">Direct partner response within 24 hours</span>
            </div>
          </div>
        </div>

        <div class="lg:col-span-5 border border-white/20 rounded-2xl p-6 sm:p-7 pb-8 sm:pb-9 space-y-5 shadow-xl shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300 hover:border-blue-300 hover:shadow-2xl bg-black/30 backdrop-blur-md">
          <div class="pb-1">
            <span class="text-xs uppercase tracking-wider text-cyan-300 drop-shadow-[0_0_6px_rgba(34,211,238,0.5)] font-bold block pb-1">Fast-Track Consultation</span>
            <h3 class="text-xl font-bold text-white mt-1 leading-snug pb-1">Direct Growth Channel</h3>
          </div>
          <div class="space-y-3 pt-2 pb-1">
            <a class="cta-glow w-full inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-primary via-primary-container to-secondary text-cyan-300 px-6 py-3.5 rounded-xl text-sm font-black active:scale-95 transition-all border border-cyan-400 shadow-[0_0_25px_rgba(18,66,255,0.6)] hover:-translate-y-0.5" href="tel:+15550192834">
              <span class="leading-normal drop-shadow-[0_0_8px_rgba(34,211,238,0.6)] font-extrabold tracking-wide">Book Growth Diagnostic</span>
              <span class="material-symbols-outlined text-[18px] text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.6)]">calendar_today</span>
            </a>
            <a class="w-full inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white px-6 py-3.5 rounded-xl text-sm font-bold border border-white/20 active:scale-95 transition-all" href="#">
              <span class="leading-normal">Request Media Deck</span>
              <span class="material-symbols-outlined text-[18px]">download</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
endif;

get_footer();
