# EliteSalesLab — Premium Enterprise IT & Software Solutions Website

[![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3-06B6D4?style=flat&logo=tailwindcss)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php)](https://php.net)

A world-class enterprise IT company website built with Laravel 11 + TailwindCSS. Premium design with glassmorphism, smooth animations, dark mode, and a complete set of enterprise-grade pages.

## Features

- **Modern Dark Design** — Glassmorphism, gradient text, premium animations
- **Fully Responsive** — Mobile-first, works perfectly on all screen sizes
- **Dark/Light Mode** — Toggle with localStorage persistence
- **SEO Optimised** — Meta tags, OG tags, XML sitemap, robots.txt
- **15+ Pages** — Home, About, 6 Service pages, Portfolio, Case Studies, Blog, Careers, Contact, Privacy, Terms
- **Working Forms** — Contact form, Career application with PDF upload, Newsletter subscription (AJAX)
- **WhatsApp Float Button** — Direct link configured via .env
- **Sticky Navbar** — With mega-menu for Services
- **Scroll Animations** — AOS library integration
- **Testimonials Slider** — Swiper.js auto-carousel
- **Portfolio Filter** — Client-side category filtering
- **Counter Animations** — Animated stats on scroll
- **Typed Hero Text** — Rotating text animation
- **Page Loader** — Premium loading screen

## Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/deepakkuyadav/elitesalelab.git
cd elitesalelab

# 2. Install PHP dependencies
composer install

# 3. Copy environment file
cp .env.example .env
php artisan key:generate

# 4. Configure your .env (DB, Mail, etc.)

# 5. Run database migrations
php artisan migrate

# 6. Install frontend dependencies
npm install
npm run build

# 7. Start the server
php artisan serve
```

## Project Structure

```
elitesaleslab/
├── app/Http/Controllers/
│   ├── PageController.php       # Home, About, Services, Case Studies
│   ├── ContactController.php    # Contact form + Newsletter
│   ├── BlogController.php       # Blog listing + single post
│   ├── PortfolioController.php  # Portfolio with category filter
│   └── CareerController.php     # Job listings + apply form
├── resources/views/
│   ├── layouts/app.blade.php    # Master layout with all CDN libraries
│   ├── components/
│   │   ├── navbar.blade.php     # Sticky navbar with mega-menu
│   │   ├── drawer.blade.php     # Mobile slide-in drawer
│   │   └── footer.blade.php     # Footer with newsletter
│   └── pages/                   # All page views
├── routes/web.php               # All application routes
└── database/migrations/         # Contacts, subscribers, applications
```

## Pages

| Route | Description |
|-------|-------------|
| `/` | Home — Hero, Stats, Services, AI Showcase, Testimonials, FAQ, CTA |
| `/about` | About — Team, Milestones, Values |
| `/services` | Services overview |
| `/services/ai-solutions` | AI & ML Services |
| `/services/erp-solutions` | ERP Solutions |
| `/services/web-development` | Web Development |
| `/services/mobile-development` | Mobile Development |
| `/services/cloud-solutions` | Cloud & DevOps |
| `/portfolio` | Portfolio with category filter |
| `/case-studies` | Client success stories |
| `/blog` | Blog listing |
| `/careers` | Job listings |
| `/contact` | Contact form with Google Maps placeholder |
| `/privacy-policy` | Privacy Policy |
| `/terms-conditions` | Terms & Conditions |
| `/sitemap.xml` | XML Sitemap |

## Environment Variables

Key variables to configure in `.env`:

```env
APP_URL=https://www.elitesaleslab.com
DB_CONNECTION=mysql
DB_DATABASE=elitesaleslab
MAIL_MAILER=smtp
MAIL_FROM_ADDRESS=hello@elitesaleslab.com
WHATSAPP_NUMBER=919876543210
CONTACT_NOTIFY_EMAIL=info@elitesaleslab.com
```

## Tech Stack

- **Framework:** Laravel 11 (PHP 8.2+)
- **Frontend:** Blade Templates + TailwindCSS 3 (CDN for preview, Vite for production)
- **Animations:** AOS.js + custom CSS
- **Slider:** Swiper.js
- **Database:** MySQL (SQLite for development)
- **Deployment:** Any PHP 8.2+ hosting (Forge, Vapor, shared hosting)

## Design System

- **Primary Colours:** `#3B7BFF` (Blue), `#8B5CF6` (Violet), `#22D3EE` (Cyan)
- **Background:** `#06091A` → `#0B1028` → `#101530`
- **Typography:** Syne (headings) + DM Sans (body)
- **Border Radius:** 12px (cards), 999px (pills)
- **Card Style:** Glassmorphism with `rgba(20,26,56,0.72)` + blur

## License

MIT — Built by [EliteSalesLab](https://elitesaleslab.com)
