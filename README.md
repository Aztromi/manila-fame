<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Manila FAME — Multi-step Registration (Laravel + Vue + Vite)

**Project:** Multi-step registration + landing page for Manila FAME  
**Stack:** Laravel (PHP), MySQL, Vue 3 (Vite), Tailwind / Bootstrap (UI), Axios

## What’s included
- Laravel API endpoints (`/api/countries`, `/api/register`)
- Vue 3 frontend (Vite) mounted via Blade for `/` (landing) and `/register`
- Country seeder (`CountrySeeder`) with countries list
- File upload handling (company brochure) — stored in `storage/app/public`
- Example `.env.example` and migration/seeder files

## 🎨 Color Palette & Typography

### Color Palette

| Purpose               | Color              | Hex / Notes                                              |
|-----------------------|------------------|---------------------------------------------------------|
| Primary / Accent      | Deep Green        | `#1F3D2B` – CTA buttons, highlights, navigation, headers |
| Secondary / Accent    | Olive / Beige     | `#7B8C68` – hover states, secondary buttons, subtle highlights |
| Neutral / Background  | Light Beige       | `#FFFDF7` – page backgrounds, form fields, sections |
| Complementary Accent  | Warm Brown        | `#6B4E2E` – decorative elements, dividers, icons |
| Vibrant Accent        | Coral / Orange    | `#C47C48` – subtle highlights or callouts |
| Text Primary          | Dark Gray / Charcoal | `#1F1F1F` – main body text |
| Text Secondary        | Gray              | `#7B8C68` – secondary text, captions, descriptions |

> This palette blends earthy tones (beiges, browns, deep greens) with vibrant accents representing Filipino craftsmanship.

### Typography

| Element              | Font                  | Notes / Usage                                      |
|----------------------|---------------------|---------------------------------------------------|
| Headlines / Hero     | Elegant Serif / Display | *Playfair Display*, *Merriweather*, or *Cormorant Garamond*; bold, large for hero and section headings |
| Body Text / Paragraphs | Clean Sans-Serif      | *Inter*, *Roboto*, or *Lato*; readable, modern, neutral |
| Buttons / CTAs       | Sans-Serif Bold       | Match body font, use uppercase or bold for emphasis |
| Captions / Small Text | Sans-Serif Light / Medium | Slightly lighter weight for secondary info like dates, locations, or small labels |

---

## Prerequisites (local dev)
- PHP 8.1+ (or required version in `composer.json`)
- Composer
- Node.js 16+ and npm (or yarn)
- MySQL (or compatible DB)
- Git
- Figma Design: https://www.figma.com/design/l3PwssiszVIjPHMr2AWHj9/Untitled?node-id=0-1&t=jViV5n57tWNqzmaI-1
---

## Quick setup (development)

1. **Clone (HTTPS)**  
   ```bash
   git clone https://github.com/<your-username>/<repo-name>.git
   cd <repo-name>
   or SSH:
   git clone git@github.com:<your-username>/<repo-name>.git
   
2. **Install PHP dependencies**
 ```bash
composer install
```
3. **Install JS dependencies**
 ```bash
npm install
```
4. **Create the database**
 ```SQL
CREATE DATABASE IF NOT EXISTS manila_fame_db;
```
5. **Environment file**
- Copy .env.example to .env:
 ```bash
cp .env.example .env
```
 - Edit .env and set your local values:
 ```env
APP_NAME="ManilaFame"
APP_URL=http://127.0.0.1:8000
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manila_fame_db
DB_USERNAME=root
DB_PASSWORD=your_db_password
```
 - Important: Do not commit .env to the repo.

6. **Generate Laravel app key**
 ```bash
php artisan key:generate
```

7. **Run migrations & seeders**
 ```bash
php artisan migrate
php artisan db:seed --class=CountrySeeder
```
 - If migrations fail, ensure DB exists and .env DB credentials are correct.

8. **Storage link (for public uploads)**
```bash
php artisan storage:link
```
9. **Run dev servers**
 - This will start both Laravel and Vite servers
```bash
npm run serve
```
 - Note: When using @vite('resources/js/app.js') in Blade, Vite dev server will serve compiled assets.

10. **Visit locally**
 - Landing page: http://127.0.0.1:8000/
 - Registration SPA: http://127.0.0.1:8000/register
 - API countries endpoint: http://127.0.0.1:8000/api/countries
