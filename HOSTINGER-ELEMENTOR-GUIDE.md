# Admantra Media — Hostinger & WordPress Deployment Guide

This repository contains everything you need to run, deploy, and edit the **Admantra Media** desktop & mobile responsive landing page on **Hostinger with WordPress & Elementor**.

---

## 📦 What Has Been Generated For You

1. **`index.html`**
   - Pure, standalone HTML5 + Tailwind CSS file.
   - Double-click to open in any web browser (Chrome, Edge, Safari) for instant desktop preview with full high-tech animations, glowing CTAs, and responsive layout.

2. **`admantra-theme/` & `admantra-theme.zip`**
   - Ready-to-install WordPress custom theme.
   - Includes full Elementor compatibility (`template-elementor-fullwidth.php`, automatic Tailwind enqueuing, custom logo support, responsive navigation, and smart fallback front page).

3. **`admantra-elementor-template.json`**
   - Native Elementor Page Template containing all 8 modular sections:
     - Section 0: Global Styling, Typography & Pulse Animations
     - Section 1: Hero Section & Strategy Session Diagnostic Form
     - Section 2: Core Philosophy & The Admantra Formula
     - Section 3: Practice Areas (Personal Branding, Performance Marketing, AI Visibility)
     - Section 4: Why Admantra Media (6 Core Pillars)
     - Section 5: Client Segments (Who We Empower)
     - Section 6: 5-Step Growth Engine Protocol
     - Section 7: Market Dynamics Comparison
     - Section 8: Growth Diagnostic Call To Action

---

## 🚀 How to Deploy on Hostinger (Step-by-Step)

When you are ready to deploy to Hostinger, follow these quick steps:

### Step 1: Install WordPress on Hostinger
1. Log in to your **Hostinger hPanel** (`hpanel.hostinger.com`).
2. Go to **Websites** and click **Add Website** (or select your existing domain).
3. Choose **WordPress** as your platform.
4. Enter an **Administrator Email** and **Password** (remember these to log in to WP Admin).
5. Complete the setup wizard in under 2 minutes.

---

### Step 2: Install the Free Elementor Plugin
1. Log in to your WordPress dashboard (e.g., `https://yourdomain.com/wp-admin`).
2. In the left menu, navigate to **Plugins** → **Add New Plugin**.
3. Search for **Elementor Website Builder**.
4. Click **Install Now**, then click **Activate**.

---

### Step 3: Install the Admantra WordPress Theme
1. In your WordPress dashboard, go to **Appearance** → **Themes**.
2. Click **Add New Theme** at the top, then click **Upload Theme**.
3. Choose the file **`admantra-theme.zip`** from your computer.
4. Click **Install Now**, and once installed, click **Activate**.

> **Note:** The theme comes with all fonts (Plus Jakarta Sans, Material Symbols), Tailwind styling, and responsive CSS pre-configured.

---

## 🎨 How to Edit the Website with Elementor

You have two simple options to edit with Elementor:

### Method A: Import the Pre-Built Elementor Template (Recommended)
1. In your WordPress dashboard, go to **Templates** → **Saved Templates**.
2. Click the **Import Templates** button at the top.
3. Select **`admantra-elementor-template.json`** and click **Import Now**.
4. Go to **Pages** → **Add New Page**:
   - Title: `Home`
   - Under **Page Attributes** (right sidebar), set **Template** to `Elementor Full Width`.
   - Click **Publish**.
5. Click **Edit with Elementor**:
   - In the Elementor editor, click the **Folder Icon (Add Template)** in the middle of the canvas.
   - Go to **My Templates**.
   - Find **Admantra Media - Landing Page Template** and click **Insert** (choose "Don't apply" if prompted about document settings).
6. **All 8 sections will load directly into Elementor!**
   - Open the **Navigator** panel (bottom-left or hotkey `Ctrl + I`).
   - Click on any section to edit copy, links, headlines, or images.
   - Click the green **Update** button to save changes.

### Method B: Set as Your Homepage
1. Go to **Settings** → **Reading** in WordPress.
2. Under **Your homepage displays**, select **A static page**.
3. Select the `Home` page you just created.
4. Click **Save Changes**.

---

## ✏️ Modifying Content in Elementor

- **Updating Text & Copy:** Click directly on any text widget or HTML block in Elementor and update words, titles, and metrics.
- **Form Submissions:** The strategy form is configured with standard HTML fields. You can connect it to WordPress form plugins like **WPForms**, **Fluent Forms**, or Elementor Pro forms by pasting their shortcode into the form card.
- **Images & Logos:** Replace any image URL (`src="..."`) with images uploaded to your **WordPress Media Library**.
