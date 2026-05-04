<?php
header('Content-Type: text/html; charset=UTF-8');
$phone       = '06 (70) 164-4000';
$phone_link  = 'tel:+36701644000';
$wa_link     = 'https://wa.me/36701644000?text=Szia!+%C3%89rdekl%C5%91dn%C3%A9k+a+v%C3%ADzszerel%C3%A9s+ir%C3%A1nt.';
$viber_link  = 'viber://chat?number=%2B36701644000';
$email       = 'providomuszkft@gmail.com';
$base        = 'https://www.vizvezetek-szerelo-korrekt-aron.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vízvezeték Szerelő Budapest – 0-24 Kiszállás 1-2 Órán Belül | Provi Domus Kft.</title>
<meta name="description" content="Megbízható vízvezeték szerelő Budapest területén 2011 óta. Csaptelep csere, WC tartály javítás, villanybojler csere, duguláselhárítás 0-24 – Budapest 1–23. kerület, 1–2 óra kiszállás, korrekt áron, garanciával.">
<meta name="keywords" content="vízvezeték szerelő budapest, csaptelep csere, wc tartály javítás, villanybojler csere, duguláselhárítás budapest, SOS vízszerelés, csőtörés javítás">
<meta name="author" content="Provi Domus Kft.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/">
<meta property="og:title" content="Vízvezeték Szerelő Budapest – 0-24 | Provi Domus Kft.">
<meta property="og:description" content="Csaptelep csere, WC tartály javítás, villanybojler csere, duguláselhárítás – Budapest 1–23. kerület, 1–2 óra kiszállás, 0-24.">
<meta property="og:image" content="<?= $base ?>/assets/img/og-image.jpg">
<meta property="og:locale" content="hu_HU">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Vízvezeték Szerelő Budapest – 0-24 | Provi Domus Kft.">
<meta name="twitter:description" content="Csaptelep csere, WC tartály javítás, villanybojler csere – 1-2 óra kiszállás, 0-24.">

<!-- Schema.org: LocalBusiness + Service + FAQ + Review -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Plumber",
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft.",
      "url": "<?= $base ?>/",
      "logo": "<?= $base ?>/assets/img/logo.png",
      "image": "<?= $base ?>/assets/img/og-image.jpg",
      "description": "Vízvezeték szerelő Budapest területén 2011 óta. Csaptelep csere, WC tartály javítás, villanybojler csere, duguláselhárítás, csőtörés elhárítás 0-24.",
      "telephone": "+36701644000",
      "email": "<?= $email ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 47.4381,
        "longitude": 19.1406
      },
      "areaServed": [
        {"@type": "City", "name": "Budapest"},
        {"@type": "AdministrativeArea", "name": "Pest megye"}
      ],
      "priceRange": "5000-50000 HUF",
      "currenciesAccepted": "HUF",
      "paymentAccepted": "Cash, Bank Transfer",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "foundingDate": "2011",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "127",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Kovács Márta"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Szombat este 9-kor megrepedt egy cső. Fél 11-re már megoldva. Korrekt ár, rendben hagyták a lakást.",
          "datePublished": "2025-03-14"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Németh Péter"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "A beépített Geberit tartályomat mások nem merték javítani. 45 perc alatt megoldva, 14.000 Ft.",
          "datePublished": "2025-02-08"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Takács Éva"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Villanybojler cserét vállaltak hétvégén is. A régit elvitték, mindent rendben hagytak.",
          "datePublished": "2025-04-21"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Vízszerelési Szolgáltatások",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Csaptelep csere"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "8000", "maxPrice": "18000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Sarokszelep csere"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "5000", "maxPrice": "10000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "WC tartály javítás"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "8000", "maxPrice": "20000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Villanybojler csere"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "15000", "maxPrice": "35000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Duguláselhárítás"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "12000", "maxPrice": "30000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Csőtörés elhárítás"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "15000", "maxPrice": "50000", "priceCurrency": "HUF"}}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mennyi idő alatt ér ki a vízvezeték szerelő Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sürgős esetben 1–2 órán belül kiszállunk Budapest összes kerületébe, 0-24-ben, hétvégén és ünnepnapon is. Normál esetben maximum 24 órán belül."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül a csaptelep csere Budapesten 2025-ben?",
          "acceptedAnswer": {"@type": "Answer", "text": "A csaptelep csere munkadíja 8.000–18.000 Ft, az anyagköltség külön értendő. Telefonon pontosabb árajánlatot adunk az elvégzendő munka alapján."}
        },
        {
          "@type": "Question",
          "name": "Mit tegyek, ha folyik a WC tartályom?",
          "acceptedAnswer": {"@type": "Answer", "text": "Zárja el a sarokszelepet a WC alatt, hogy megállítsa a vízveszteséget, majd hívjon minket. Geberit, Dömötör, Liv Laguna, Mofem és Grohe tartályokat javítunk, falbontás nélkül is."}
        },
        {
          "@type": "Question",
          "name": "Vállalnak villanybojler cserét Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Igen, Hajdu, Ariston, Bosch és Aquastic villanybojler cserét, bekötést és elszállítást is vállalunk Budapest minden kerületében."}
        },
        {
          "@type": "Question",
          "name": "Van garancia a vízvezeték szerelési munkákra?",
          "acceptedAnswer": {"@type": "Answer", "text": "Minden elvégzett munkánkra a Ptk. szerinti jótállást és szavatosságot biztosítjuk, számlás teljesítéssel, írásban."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül a duguláselhárítás Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Kézi duguláselhárítás 12.000–18.000 Ft, gépi duguláselhárítás 18.000–30.000 Ft, a dugulás típusától és mélységétől függően. Kamerás vizsgálat is elérhető."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"}]
    }
  ]
}
</script>

<style>
/* ========================================
   RESET & BASE
======================================== */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;font-size:16px}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;color:#1a2332;background:#fff;line-height:1.6;overflow-x:hidden}
img{max-width:100%;height:auto;display:block}
a{color:inherit;text-decoration:none}
ul{list-style:none}

/* ========================================
   CSS VARIABLES
======================================== */
:root{
  --blue:#0d47a1;
  --blue-dark:#0a3579;
  --blue-light:#1565c0;
  --orange:#f57c00;
  --orange-bright:#ff8f00;
  --green:#2e7d32;
  --red:#c62828;
  --gray-light:#f4f6fa;
  --gray:#e8ecf2;
  --gray-mid:#aab4c4;
  --text:#1a2332;
  --text-light:#4a5568;
  --white:#ffffff;
  --shadow-sm:0 2px 8px rgba(13,71,161,.10);
  --shadow-md:0 6px 24px rgba(13,71,161,.14);
  --shadow-lg:0 16px 48px rgba(13,71,161,.18);
  --radius:12px;
  --radius-sm:8px;
  --transition:all .22s ease;
}

/* ========================================
   TYPOGRAPHY
======================================== */
h1{font-size:clamp(1.75rem,4vw,2.8rem);font-weight:800;line-height:1.15;color:#fff}
h2{font-size:clamp(1.4rem,3vw,2.1rem);font-weight:700;line-height:1.25;color:var(--text)}
h3{font-size:clamp(1.1rem,2vw,1.35rem);font-weight:700;color:var(--text)}
h4{font-size:1rem;font-weight:600;color:var(--text)}
p{color:var(--text-light);line-height:1.7}

/* ========================================
   TOP URGENCY BAR
======================================== */
.urgency-bar{
  background:linear-gradient(90deg,var(--red) 0%,#e53935 100%);
  color:#fff;text-align:center;
  padding:.45rem 1rem;font-size:.85rem;font-weight:600;
  letter-spacing:.02em;
}
.urgency-bar a{color:#fff;text-decoration:underline}

/* ========================================
   HEADER
======================================== */
.site-header{
  position:sticky;top:0;z-index:1000;
  background:#fff;
  box-shadow:0 2px 12px rgba(0,0,0,.10);
}
.header-inner{
  max-width:1200px;margin:0 auto;
  display:flex;align-items:center;justify-content:space-between;
  padding:.75rem 1.5rem;gap:1rem;
}
.logo-block a{
  display:flex;align-items:center;gap:.6rem;
  font-size:1.15rem;font-weight:800;color:var(--blue);
  white-space:nowrap;
}
.logo-icon{
  width:40px;height:40px;background:var(--blue);
  border-radius:50%;display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.2rem;flex-shrink:0;
}
.logo-sub{font-size:.7rem;font-weight:400;color:var(--text-light);display:block;margin-top:1px}

.main-nav{display:flex;align-items:center;gap:.15rem;flex-wrap:wrap}
.main-nav a{
  padding:.4rem .65rem;border-radius:6px;font-size:.85rem;font-weight:500;
  color:var(--text);transition:var(--transition);white-space:nowrap;
}
.main-nav a:hover{background:var(--gray-light);color:var(--blue)}

.header-cta{
  display:flex;align-items:center;gap:.6rem;flex-shrink:0;
}
.btn-phone{
  background:var(--orange);color:#fff;
  padding:.55rem 1.1rem;border-radius:var(--radius-sm);
  font-weight:700;font-size:.9rem;
  transition:var(--transition);white-space:nowrap;
  box-shadow:0 3px 12px rgba(245,124,0,.35);
}
.btn-phone:hover{background:var(--orange-bright);transform:translateY(-1px)}
.btn-phone span{display:block;font-size:.65rem;font-weight:400;opacity:.85}

/* hamburger */
.nav-toggle{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:.4rem}
.nav-toggle span{width:24px;height:2px;background:var(--text);border-radius:2px;transition:var(--transition)}
#nav-check{display:none}

/* ========================================
   HERO
======================================== */
.hero{
  background:linear-gradient(135deg,var(--blue-dark) 0%,var(--blue) 55%,#1976d2 100%);
  position:relative;overflow:hidden;
  padding:4rem 1.5rem 3.5rem;
}
.hero::before{
  content:'';position:absolute;inset:0;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='rgba(255,255,255,0.04)' d='M0,128L48,138.7C96,149,192,171,288,176C384,181,480,171,576,144C672,117,768,75,864,74.7C960,75,1056,117,1152,133.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L0,320Z'/%3E%3C/svg%3E") bottom/cover no-repeat;
  pointer-events:none;
}
.hero-grid{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:1fr auto;gap:2rem;align-items:center;
  position:relative;z-index:1;
}
.hero-badge{
  display:inline-flex;align-items:center;gap:.5rem;
  background:rgba(255,255,255,.15);backdrop-filter:blur(4px);
  color:#fff;padding:.35rem .85rem;border-radius:20px;
  font-size:.8rem;font-weight:600;margin-bottom:1rem;
  border:1px solid rgba(255,255,255,.25);
}
.hero h1{margin-bottom:.8rem}
.hero-sub{
  color:rgba(255,255,255,.88);font-size:1.1rem;
  margin-bottom:1.5rem;max-width:600px;
}
.hero-pills{
  display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.75rem;
}
.hero-pill{
  background:rgba(255,255,255,.12);
  color:#fff;padding:.3rem .75rem;border-radius:20px;
  font-size:.8rem;font-weight:500;border:1px solid rgba(255,255,255,.2);
}
.hero-actions{display:flex;gap:.85rem;flex-wrap:wrap;margin-bottom:1.5rem}
.btn-hero-primary{
  background:var(--orange);color:#fff;
  padding:.85rem 1.75rem;border-radius:var(--radius-sm);
  font-weight:700;font-size:1.05rem;
  box-shadow:0 6px 20px rgba(245,124,0,.4);
  transition:var(--transition);display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-primary:hover{background:var(--orange-bright);transform:translateY(-2px);box-shadow:0 8px 28px rgba(245,124,0,.5)}
.btn-hero-secondary{
  background:rgba(255,255,255,.12);color:#fff;
  padding:.85rem 1.5rem;border-radius:var(--radius-sm);
  font-weight:600;font-size:1rem;
  border:2px solid rgba(255,255,255,.35);
  transition:var(--transition);display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-secondary:hover{background:rgba(255,255,255,.22);border-color:rgba(255,255,255,.6)}

.trust-bar{
  display:flex;flex-wrap:wrap;gap:1rem;
}
.trust-item{
  display:flex;align-items:center;gap:.4rem;
  color:rgba(255,255,255,.9);font-size:.82rem;font-weight:500;
}
.trust-item .t-icon{font-size:1rem}

/* hero sidebar */
.hero-sidebar{flex-shrink:0}
.emergency-card{
  background:#fff;border-radius:var(--radius);
  padding:1.5rem;width:240px;
  box-shadow:0 12px 40px rgba(0,0,0,.2);
  text-align:center;
}
.emergency-card .ec-label{
  font-size:.72rem;font-weight:700;color:var(--red);
  text-transform:uppercase;letter-spacing:.08em;margin-bottom:.5rem;
}
.emergency-card .ec-phone{
  font-size:1.35rem;font-weight:800;color:var(--blue);
  display:block;margin-bottom:.3rem;
}
.emergency-card .ec-hours{
  font-size:.78rem;color:var(--text-light);margin-bottom:1rem;
}
.btn-call-now{
  display:block;background:var(--orange);color:#fff;
  padding:.7rem;border-radius:var(--radius-sm);
  font-weight:700;font-size:.95rem;margin-bottom:.6rem;
  transition:var(--transition);
}
.btn-call-now:hover{background:var(--orange-bright)}
.btn-wa{
  display:block;background:#25d366;color:#fff;
  padding:.6rem;border-radius:var(--radius-sm);
  font-weight:600;font-size:.88rem;margin-bottom:.4rem;
  transition:var(--transition);
}
.btn-wa:hover{background:#22c35e}
.ec-note{font-size:.7rem;color:var(--gray-mid)}

/* ========================================
   SECTION COMMON
======================================== */
.section{padding:4rem 1.5rem}
.section-alt{background:var(--gray-light)}
.container{max-width:1200px;margin:0 auto}
.section-label{
  display:inline-block;
  color:var(--blue);font-size:.78rem;font-weight:700;
  text-transform:uppercase;letter-spacing:.1em;
  margin-bottom:.6rem;
  background:rgba(13,71,161,.08);
  padding:.25rem .75rem;border-radius:20px;
}
.section-title{margin-bottom:.6rem}
.section-sub{color:var(--text-light);font-size:1.05rem;max-width:640px;margin-bottom:2.5rem}

/* ========================================
   QUICK STATS
======================================== */
.stats-strip{
  background:var(--blue);padding:1.5rem;
}
.stats-grid{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;
}
.stat-item{text-align:center;padding:.5rem}
.stat-number{font-size:2rem;font-weight:800;color:#fff;display:block;line-height:1}
.stat-label{font-size:.78rem;color:rgba(255,255,255,.75);margin-top:.3rem}

/* ========================================
   SERVICES GRID
======================================== */
.services-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
  gap:1.25rem;
}
.service-card{
  background:#fff;border-radius:var(--radius);
  border:1px solid var(--gray);
  padding:1.5rem;
  transition:var(--transition);
  position:relative;overflow:hidden;
}
.service-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:3px;
  background:linear-gradient(90deg,var(--blue),var(--blue-light));
  transform:scaleX(0);transform-origin:left;transition:var(--transition);
}
.service-card:hover{
  transform:translateY(-4px);
  box-shadow:var(--shadow-md);
  border-color:transparent;
}
.service-card:hover::before{transform:scaleX(1)}
.sc-icon{
  width:52px;height:52px;border-radius:12px;
  background:linear-gradient(135deg,var(--gray-light),var(--gray));
  display:flex;align-items:center;justify-content:center;
  font-size:1.5rem;margin-bottom:1rem;
  transition:var(--transition);
}
.service-card:hover .sc-icon{background:linear-gradient(135deg,#dbeafe,#bfdbfe)}
.sc-price{
  display:inline-block;font-size:.78rem;font-weight:700;
  color:var(--orange);background:rgba(245,124,0,.1);
  padding:.2rem .6rem;border-radius:20px;margin-bottom:.75rem;
}
.service-card h3{margin-bottom:.5rem;font-size:1.05rem}
.service-card p{font-size:.88rem;margin-bottom:1rem}
.sc-link{
  font-size:.85rem;font-weight:600;color:var(--blue);
  display:flex;align-items:center;gap:.3rem;
  transition:var(--transition);
}
.sc-link:hover{gap:.6rem}

/* ========================================
   PROCESS STEPS
======================================== */
.process-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:1.5rem;position:relative;
}
.process-grid::before{
  content:'';position:absolute;top:28px;left:10%;right:10%;height:2px;
  background:linear-gradient(90deg,var(--blue),var(--blue-light));
  z-index:0;
}
.process-step{text-align:center;position:relative;z-index:1;padding:.5rem}
.ps-num{
  width:56px;height:56px;border-radius:50%;
  background:var(--blue);color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.3rem;font-weight:800;
  margin:0 auto 1rem;
  box-shadow:0 4px 16px rgba(13,71,161,.3);
}
.process-step h4{margin-bottom:.4rem}
.process-step p{font-size:.85rem}

/* ========================================
   PRICING TABLE
======================================== */
.pricing-table{
  width:100%;border-collapse:collapse;border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-sm);
}
.pricing-table thead tr{background:var(--blue);color:#fff}
.pricing-table thead th{padding:1rem 1.25rem;text-align:left;font-size:.88rem;font-weight:700}
.pricing-table tbody tr{border-bottom:1px solid var(--gray);transition:var(--transition)}
.pricing-table tbody tr:hover{background:#f0f7ff}
.pricing-table tbody tr:last-child{border-bottom:none}
.pricing-table td{padding:.85rem 1.25rem;font-size:.9rem}
.pricing-table td:first-child{font-weight:600;color:var(--text)}
.pricing-table .price-col{font-weight:700;color:var(--orange)}
.pricing-table .note-col{font-size:.8rem;color:var(--text-light)}

/* ========================================
   WHY US – REASONS
======================================== */
.reasons-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:1.25rem;
}
.reason-card{
  background:#fff;border-radius:var(--radius);
  padding:1.5rem;border:1px solid var(--gray);
  display:flex;gap:1rem;align-items:flex-start;
  transition:var(--transition);
}
.reason-card:hover{box-shadow:var(--shadow-sm);transform:translateY(-2px)}
.rc-num{
  width:40px;height:40px;border-radius:10px;flex-shrink:0;
  background:linear-gradient(135deg,var(--blue),var(--blue-light));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:1rem;
}
.reason-card h4{margin-bottom:.3rem}
.reason-card p{font-size:.85rem}

/* ========================================
   TESTIMONIALS
======================================== */
.testimonials-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:1.25rem;
}
.testimonial-card{
  background:#fff;border-radius:var(--radius);padding:1.5rem;
  border:1px solid var(--gray);
  box-shadow:var(--shadow-sm);
}
.tc-stars{color:#f9a825;font-size:1.1rem;margin-bottom:.75rem}
.tc-text{font-size:.92rem;color:var(--text);font-style:italic;margin-bottom:1rem;line-height:1.65}
.tc-author{display:flex;align-items:center;gap:.75rem}
.tc-avatar{
  width:40px;height:40px;border-radius:50%;
  background:linear-gradient(135deg,var(--blue),var(--blue-light));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:700;font-size:.9rem;flex-shrink:0;
}
.tc-name{font-weight:700;font-size:.88rem}
.tc-location{font-size:.78rem;color:var(--text-light)}

/* ========================================
   DISTRICTS GRID
======================================== */
.districts-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(130px,1fr));
  gap:.6rem;
}
.district-link{
  display:block;background:#fff;border:1px solid var(--gray);
  border-radius:var(--radius-sm);
  padding:.6rem .8rem;font-size:.82rem;font-weight:600;
  color:var(--blue);text-align:center;
  transition:var(--transition);
}
.district-link:hover{
  background:var(--blue);color:#fff;border-color:var(--blue);
  transform:translateY(-2px);box-shadow:var(--shadow-sm);
}

/* ========================================
   FAQ ACCORDION
======================================== */
.faq-list{max-width:800px}
.faq-item{
  border:1px solid var(--gray);border-radius:var(--radius-sm);
  margin-bottom:.6rem;overflow:hidden;
  transition:var(--transition);
}
.faq-item:hover{border-color:var(--blue)}
.faq-question{
  width:100%;background:none;border:none;cursor:pointer;
  padding:1.1rem 1.25rem;
  display:flex;align-items:center;justify-content:space-between;
  text-align:left;font-size:.95rem;font-weight:600;color:var(--text);
  gap:1rem;
}
.faq-question .fq-icon{
  width:24px;height:24px;border-radius:50%;
  background:var(--blue);color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1rem;flex-shrink:0;transition:var(--transition);
}
.faq-answer{
  max-height:0;overflow:hidden;transition:max-height .3s ease,padding .3s ease;
  padding:0 1.25rem;font-size:.9rem;color:var(--text-light);
}
.faq-item.open .faq-answer{max-height:200px;padding:.75rem 1.25rem 1.1rem}
.faq-item.open .fq-icon{transform:rotate(45deg);background:var(--red)}
.faq-item.open{border-color:var(--blue);box-shadow:var(--shadow-sm)}

/* ========================================
   CONTACT SECTION
======================================== */
.contact-grid{
  display:grid;grid-template-columns:1fr 1fr;
  gap:2rem;align-items:start;
}
.contact-info-card{
  background:var(--blue);border-radius:var(--radius);
  padding:2rem;color:#fff;
}
.contact-info-card h3{color:#fff;margin-bottom:1.25rem;font-size:1.4rem}
.cic-item{
  display:flex;align-items:center;gap:1rem;
  margin-bottom:1.2rem;
  padding-bottom:1.2rem;
  border-bottom:1px solid rgba(255,255,255,.15);
}
.cic-item:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.cic-icon{
  width:44px;height:44px;border-radius:10px;flex-shrink:0;
  background:rgba(255,255,255,.15);
  display:flex;align-items:center;justify-content:center;
  font-size:1.2rem;
}
.cic-label{font-size:.72rem;opacity:.7;display:block;margin-bottom:.15rem}
.cic-value{font-weight:700;font-size:1rem}
.cic-value a{color:#fff}

.contact-form-card{
  background:#fff;border-radius:var(--radius);
  padding:2rem;border:1px solid var(--gray);
  box-shadow:var(--shadow-sm);
}
.contact-form-card h3{margin-bottom:1.25rem}
.form-group{margin-bottom:1rem}
.form-group label{
  display:block;font-size:.82rem;font-weight:600;
  margin-bottom:.35rem;color:var(--text);
}
.form-group input,
.form-group textarea{
  width:100%;padding:.7rem .9rem;
  border:1.5px solid var(--gray);border-radius:var(--radius-sm);
  font-size:.92rem;font-family:inherit;
  color:var(--text);background:#fff;
  transition:var(--transition);
}
.form-group input:focus,
.form-group textarea:focus{
  outline:none;border-color:var(--blue);
  box-shadow:0 0 0 3px rgba(13,71,161,.12);
}
.form-group textarea{resize:vertical;min-height:100px}
.btn-submit{
  width:100%;background:var(--blue);color:#fff;
  padding:.85rem;border-radius:var(--radius-sm);
  font-weight:700;font-size:1rem;border:none;cursor:pointer;
  transition:var(--transition);
}
.btn-submit:hover{background:var(--blue-dark);transform:translateY(-1px)}
.form-note{font-size:.75rem;color:var(--text-light);margin-top:.6rem;text-align:center}
.form-note a{color:var(--blue);text-decoration:underline}
#form-success{display:none;text-align:center;padding:1.5rem}
#form-success .fs-icon{font-size:2.5rem;margin-bottom:.5rem}
#form-success h4{color:var(--green);margin-bottom:.3rem}

/* ========================================
   BRANDS SECTION
======================================== */
.brands-strip{
  background:var(--gray-light);padding:1.5rem;border-top:1px solid var(--gray);
  border-bottom:1px solid var(--gray);
}
.brands-inner{
  max-width:1200px;margin:0 auto;
  display:flex;align-items:center;justify-content:center;
  gap:2.5rem;flex-wrap:wrap;
}
.brand-tag{
  font-weight:700;font-size:.9rem;color:var(--text-light);
  padding:.4rem .9rem;background:#fff;border-radius:6px;
  border:1px solid var(--gray);
}

/* ========================================
   SERVICE TAGS / QUICK LINKS
======================================== */
.service-tags{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1.5rem}
.stag{
  display:inline-block;background:#fff;
  border:1px solid var(--gray);border-radius:20px;
  padding:.35rem .85rem;font-size:.82rem;font-weight:500;
  color:var(--blue);transition:var(--transition);
}
.stag:hover{background:var(--blue);color:#fff;border-color:var(--blue)}

/* ========================================
   CTA BANNER
======================================== */
.cta-banner{
  background:linear-gradient(135deg,var(--blue-dark) 0%,var(--blue) 100%);
  padding:3.5rem 1.5rem;text-align:center;
}
.cta-banner h2{color:#fff;margin-bottom:.6rem}
.cta-banner p{color:rgba(255,255,255,.82);margin-bottom:2rem;font-size:1.05rem}
.cta-buttons{display:flex;justify-content:center;gap:1rem;flex-wrap:wrap}
.btn-cta-primary{
  background:var(--orange);color:#fff;
  padding:.9rem 2rem;border-radius:var(--radius-sm);
  font-weight:700;font-size:1.05rem;
  box-shadow:0 6px 20px rgba(245,124,0,.4);
  transition:var(--transition);
}
.btn-cta-primary:hover{background:var(--orange-bright);transform:translateY(-2px)}
.btn-cta-secondary{
  background:transparent;color:#fff;
  padding:.9rem 2rem;border-radius:var(--radius-sm);
  font-weight:600;border:2px solid rgba(255,255,255,.4);
  transition:var(--transition);
}
.btn-cta-secondary:hover{border-color:#fff;background:rgba(255,255,255,.1)}

/* ========================================
   FOOTER
======================================== */
.site-footer{background:#0d1f3c;color:rgba(255,255,255,.75)}
.footer-main{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1fr;
  gap:2.5rem;padding:3rem 1.5rem 2rem;
}
.footer-brand p{font-size:.88rem;line-height:1.7;margin:1rem 0 1.5rem;max-width:280px}
.footer-contact-item{
  display:flex;align-items:center;gap:.6rem;
  margin-bottom:.6rem;font-size:.85rem;
}
.footer-contact-item a{color:rgba(255,255,255,.75);transition:var(--transition)}
.footer-contact-item a:hover{color:#fff}
.footer-heading{
  color:#fff;font-size:.78rem;font-weight:700;
  text-transform:uppercase;letter-spacing:.1em;
  margin-bottom:1rem;
}
.footer-links li{margin-bottom:.45rem}
.footer-links a{font-size:.84rem;color:rgba(255,255,255,.65);transition:var(--transition)}
.footer-links a:hover{color:#fff}
.footer-logo-text{color:#fff;font-size:1.1rem;font-weight:800}

.footer-bottom{
  border-top:1px solid rgba(255,255,255,.1);
  max-width:1200px;margin:0 auto;
  padding:1.25rem 1.5rem;
  display:flex;align-items:center;justify-content:space-between;
  font-size:.78rem;flex-wrap:wrap;gap:.6rem;
}
.footer-bottom-links{display:flex;gap:1.2rem;flex-wrap:wrap}
.footer-bottom-links a{color:rgba(255,255,255,.5);transition:var(--transition)}
.footer-bottom-links a:hover{color:rgba(255,255,255,.85)}

/* ========================================
   FLOATING ELEMENTS
======================================== */
.float-wa{
  position:fixed;bottom:5.5rem;right:1.25rem;z-index:900;
  width:52px;height:52px;border-radius:50%;
  background:#25d366;color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.5rem;
  box-shadow:0 4px 16px rgba(37,211,102,.45);
  transition:var(--transition);
  border:3px solid #fff;
}
.float-wa:hover{transform:scale(1.1)}
.float-phone{
  position:fixed;bottom:1.25rem;right:1.25rem;z-index:900;
  display:flex;align-items:center;gap:.6rem;
  background:var(--orange);color:#fff;
  padding:.65rem 1.1rem;border-radius:30px;
  font-weight:700;font-size:.9rem;
  box-shadow:0 4px 20px rgba(245,124,0,.45);
  transition:var(--transition);
  border:3px solid #fff;
}
.float-phone:hover{background:var(--orange-bright);transform:translateY(-2px)}
.float-phone .fp-icon{font-size:1.1rem}

/* pulse animation on phone button */
@keyframes pulse{0%,100%{box-shadow:0 4px 20px rgba(245,124,0,.45)}50%{box-shadow:0 4px 32px rgba(245,124,0,.75),0 0 0 6px rgba(245,124,0,.15)}}
.float-phone{animation:pulse 2.5s infinite}

/* ========================================
   MOBILE NAV
======================================== */
@media(max-width:900px){
  .hero-grid{grid-template-columns:1fr}
  .hero-sidebar{display:none}
  .contact-grid{grid-template-columns:1fr}
  .footer-main{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .main-nav{display:none;position:absolute;top:100%;left:0;right:0;
    background:#fff;box-shadow:var(--shadow-md);
    flex-direction:column;padding:1rem;gap:.25rem;
    border-top:1px solid var(--gray);}
  #nav-check:checked ~ .header-inner .main-nav{display:flex}
  .nav-toggle{display:flex}
  .logo-block a span.logo-sub{display:none}
  .btn-phone span{display:none}
  .stats-grid{grid-template-columns:repeat(2,1fr)}
  .process-grid::before{display:none}
  .footer-main{grid-template-columns:1fr}
}
@media(max-width:480px){
  .header-inner{padding:.65rem 1rem}
  .hero{padding:2.5rem 1rem 2rem}
  .section{padding:2.5rem 1rem}
  .stats-grid{grid-template-columns:repeat(2,1fr);gap:.6rem}
  .stat-number{font-size:1.5rem}
}
</style>
</head>
<body>

<!-- TOP URGENCY BAR -->
<div class="urgency-bar">
  🔴 0-24 Sürgős vízszerelő – Budapest – <a href="<?= $phone_link ?>">Hívjon most: <?= $phone ?></a>
</div>

<!-- ========== HEADER ========== -->
<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo-block">
      <a href="/">
        <div class="logo-icon">🔧</div>
        <div>
          Provi Domus Kft.
          <span class="logo-sub">Vízvezeték Szerelő Budapest</span>
        </div>
      </a>
    </div>

    <nav class="main-nav" aria-label="Főnavigáció">
      <a href="/">Főoldal</a>
      <a href="/budapesti-szolgaltatasaink/">Szolgáltatások</a>
      <a href="/dugulaselharitas/">Duguláselhárítás</a>
      <a href="/gazszerelo-budapest/">Gáz</a>
      <a href="/futesszerelo-budapest/">Fűtés</a>
      <a href="/vizvezetek-szereles-arak/">Árak</a>
      <a href="/blog/">Blog</a>
      <a href="/kapcsolat/">Kapcsolat</a>
    </nav>

    <div class="header-cta">
      <a href="<?= $phone_link ?>" class="btn-phone">
        📞 <?= $phone ?>
        <span>0-24, hétvégén is</span>
      </a>
      <label for="nav-check" class="nav-toggle" aria-label="Menü">
        <span></span><span></span><span></span>
      </label>
    </div>
  </div>
</header>

<!-- ========== HERO ========== -->
<section class="hero">
  <div class="hero-grid">
    <div class="hero-content">
      <div class="hero-badge">
        <span>⭐</span> 4.9/5 – 127 Google értékelés
      </div>
      <h1>Vízvezeték Szerelő Budapest – 0-24 Kiszállás</h1>
      <p class="hero-sub">Csaptelep csere, WC tartály javítás, villanybojler csere, duguláselhárítás, csőtörés elhárítás – Budapest minden kerületébe <strong style="color:#fff">1–2 órán belül</strong>, éjjel-nappal.</p>

      <div class="hero-pills">
        <span class="hero-pill">✅ 2011 óta megbízható</span>
        <span class="hero-pill">⚡ 1–2 óra kiszállás</span>
        <span class="hero-pill">🔒 Törvényes garancia</span>
        <span class="hero-pill">📋 Számlás munka</span>
        <span class="hero-pill">🌙 0-24 éjjel-nappal</span>
        <span class="hero-pill">📍 1–23. kerület</span>
      </div>

      <div class="hero-actions">
        <a href="<?= $phone_link ?>" class="btn-hero-primary">
          📞 Hívjon most: <?= $phone ?>
        </a>
        <a href="/vizvezetek-szereles-arak/" class="btn-hero-secondary">
          💰 Árak megtekintése
        </a>
      </div>

      <div class="trust-bar">
        <div class="trust-item"><span class="t-icon">🏆</span> 14 év tapasztalat</div>
        <div class="trust-item"><span class="t-icon">📍</span> Budapest 1–23. kerület + Pest megye</div>
        <div class="trust-item"><span class="t-icon">🛠</span> Minden vízszerelési munka</div>
      </div>
    </div>

    <div class="hero-sidebar">
      <div class="emergency-card">
        <div class="ec-label">🚨 Sürgős kiszállás</div>
        <a href="<?= $phone_link ?>" class="ec-phone"><?= $phone ?></a>
        <div class="ec-hours">0–24 · Hétfő–Vasárnap</div>
        <a href="<?= $phone_link ?>" class="btn-call-now">📞 Hívás most</a>
        <a href="<?= $wa_link ?>" class="btn-wa" target="_blank" rel="noopener">💬 WhatsApp</a>
        <div class="ec-note">Átlagos válaszidő: &lt;3 perc</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== STATS STRIP ========== -->
<div class="stats-strip">
  <div class="stats-grid">
    <div class="stat-item">
      <span class="stat-number">2011</span>
      <div class="stat-label">óta működünk</div>
    </div>
    <div class="stat-item">
      <span class="stat-number">1–2h</span>
      <div class="stat-label">kiszállási idő</div>
    </div>
    <div class="stat-item">
      <span class="stat-number">23</span>
      <div class="stat-label">Budapest kerület</div>
    </div>
    <div class="stat-item">
      <span class="stat-number">4.9★</span>
      <div class="stat-label">Google értékelés</div>
    </div>
  </div>
</div>

<!-- ========== GYORS LINKS ========== -->
<section class="section section-alt">
  <div class="container">
    <span class="section-label">Legkeresettebb szolgáltatások</span>
    <h2 class="section-title">Vízszerelési Munkák – Gyors Keresés</h2>
    <p class="section-sub">Kattintson a kívánt szolgáltatásra, vagy hívjon közvetlenül a leggyorsabb segítségért.</p>
    <div class="service-tags">
      <a href="/csaptelep-csere/" class="stag">🚰 Csaptelep csere</a>
      <a href="/sarokszelep-csere/" class="stag">🔩 Sarokszelep csere</a>
      <a href="/wc-tartaly-szereles/" class="stag">🚽 WC tartály szerelés</a>
      <a href="/wc-tartaly-szereles-javitas/" class="stag">🔧 WC tartály javítás</a>
      <a href="/wc-gumiharang-csereje/" class="stag">🔄 WC gumiharang csere</a>
      <a href="/geberit-wc-tartaly-folyik/" class="stag">💧 Geberit tartály folyik</a>
      <a href="/villanybojler-csere/" class="stag">⚡ Villanybojler csere</a>
      <a href="/villanybojler-javitas/" class="stag">🔌 Villanybojler javítás</a>
      <a href="/ariston-bojler-szerviz-budapesten/" class="stag">🏷️ Ariston szerviz</a>
      <a href="/bojler-szereles-budapest/" class="stag">🛁 Bojler szerelés</a>
      <a href="/dugulaselharitas/" class="stag">🪠 Duguláselhárítás</a>
      <a href="/csotores-elharitas/" class="stag">💥 Csőtörés elhárítás</a>
      <a href="/furdoszoba/furdoszoba-felujitas/" class="stag">🛁 Fürdőszoba felújítás</a>
      <a href="/sos-vizszereles-budapest/" class="stag">🚨 SOS vízszerelés</a>
      <a href="/sarokszelep-bekotese/" class="stag">🔗 Sarokszelep bekötés</a>
      <a href="/vizvezetek-szereles-pest-megye/" class="stag">🗺️ Pest megye</a>
    </div>
  </div>
</section>

<!-- ========== SERVICES GRID ========== -->
<section class="section">
  <div class="container">
    <span class="section-label">Szolgáltatásaink</span>
    <h2 class="section-title">Vízszerelési Szolgáltatásaink Budapesten</h2>
    <p class="section-sub">Teljes körű vízvezeték szerelési munkák Budapest minden kerületében – gyorsan, garanciával, korrekt áron.</p>

    <div class="services-grid">
      <div class="service-card">
        <div class="sc-icon">🚰</div>
        <div class="sc-price">8.000 – 18.000 Ft</div>
        <h3>Csaptelep Csere</h3>
        <p>Csöpögő csap, elhasználódott csaptelep azonnali javítása vagy cseréje. Mosdó, konyha, fürdőkád – minden típus.</p>
        <a href="/csaptelep-csere/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">🔩</div>
        <div class="sc-price">5.000 – 10.000 Ft</div>
        <h3>Sarokszelep Csere</h3>
        <p>Szivárgó, elromlott sarokszelep azonnali cseréje. WC, mosdó, mosógép alatti szelep – 20–30 perces munka.</p>
        <a href="/sarokszelep-csere/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">🚽</div>
        <div class="sc-price">8.000 – 20.000 Ft</div>
        <h3>WC Tartály Javítás</h3>
        <p>Geberit, Dömötör, Liv Laguna, Mofem, Grohe tartály javítás. Folyó WC, gumiharang, töltőszelep csere – falbontás nélkül.</p>
        <a href="/wc-tartaly-szereles/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">⚡</div>
        <div class="sc-price">15.000 – 35.000 Ft</div>
        <h3>Villanybojler Csere</h3>
        <p>Hajdu, Ariston, Bosch, Aquastic villanybojler csere és bekötés. Régi bojler elszállítása is.</p>
        <a href="/villanybojler-csere/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">🪠</div>
        <div class="sc-price">12.000 – 30.000 Ft</div>
        <h3>Duguláselhárítás</h3>
        <p>Gépi és kézi duguláselhárítás, lefolyótisztítás, kamerás vizsgálat. Konyha, fürdő, WC, fővezeték – 0-24.</p>
        <a href="/dugulaselharitas/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">💥</div>
        <div class="sc-price">15.000 – 50.000 Ft</div>
        <h3>Csőtörés Elhárítás</h3>
        <p>Azonnali csőtörés javítás, víztelenítés, sérült cső csere. Sürgős kiszállás 0-24, hétvégén is.</p>
        <a href="/csotores-elharitas/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">🛁</div>
        <div class="sc-price">Egyéni árajánlat</div>
        <h3>Fürdőszoba Felújítás</h3>
        <p>Mosdó, zuhanykabin, fürdőkád csere. Komplett fürdőszoba felújítás – tervezéstől kivitelezésig.</p>
        <a href="/furdoszoba/furdoszoba-felujitas/" class="sc-link">Részletek →</a>
      </div>
      <div class="service-card">
        <div class="sc-icon">🔴</div>
        <div class="sc-price">10.000 – 28.000 Ft</div>
        <h3>Ariston Bojler Szerviz</h3>
        <p>Ariston Velis, Lydos, Pro szerviz, javítás, csere. Eredeti alkatrészek, gyártói garancia – Budapest.</p>
        <a href="/ariston-bojler-szerviz-budapesten/" class="sc-link">Részletek →</a>
      </div>
    </div>
  </div>
</section>

<!-- ========== BRANDS STRIP ========== -->
<div class="brands-strip">
  <div class="brands-inner">
    <span style="font-size:.82rem;color:var(--text-light);font-weight:600">Szervizelt márkák:</span>
    <span class="brand-tag">Geberit</span>
    <span class="brand-tag">Ariston</span>
    <span class="brand-tag">Hajdu</span>
    <span class="brand-tag">Bosch</span>
    <span class="brand-tag">Grohe</span>
    <span class="brand-tag">Dömötör</span>
    <span class="brand-tag">Mofem</span>
    <span class="brand-tag">Aquastic</span>
  </div>
</div>

<!-- ========== HOW IT WORKS ========== -->
<section class="section section-alt">
  <div class="container">
    <span class="section-label">Hogyan dolgozunk</span>
    <h2 class="section-title">A Kiszálástól a Garanciáig – 5 Lépés</h2>
    <p class="section-sub">Átlátható folyamat, meglepetés-díjak nélkül.</p>
    <div class="process-grid">
      <div class="process-step">
        <div class="ps-num">1</div>
        <h4>Hívás / Üzenet</h4>
        <p>Leírja a hibát, megbeszéljük a tájékoztató árat telefonon.</p>
      </div>
      <div class="process-step">
        <div class="ps-num">2</div>
        <h4>Gyors kiszállás</h4>
        <p>1–2 órán belül megérkezünk Budapest bármely kerületébe.</p>
      </div>
      <div class="process-step">
        <div class="ps-num">3</div>
        <h4>Helyszíni felmérés</h4>
        <p>Megvizsgáljuk a hibát, pontos árajánlatot adunk – ingyen.</p>
      </div>
      <div class="process-step">
        <div class="ps-num">4</div>
        <h4>Javítás / Csere</h4>
        <p>Elvégezzük a munkát, takarítottan hagyjuk el a helyszínt.</p>
      </div>
      <div class="process-step">
        <div class="ps-num">5</div>
        <h4>Számla + Garancia</h4>
        <p>Számlás teljesítés, törvényes jótállás írásban.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== PRICING TABLE ========== -->
<section class="section" id="arak">
  <div class="container">
    <span class="section-label">Árak 2025</span>
    <h2 class="section-title">Vízvezeték Szerelő Árak – Budapest 2025</h2>
    <p class="section-sub">Tájékoztató munkadíjak. Az anyagköltség külön értendő. Pontos ár telefonon, helyszínen meglepetés nélkül.</p>

    <div style="overflow-x:auto;border-radius:var(--radius);box-shadow:var(--shadow-sm)">
      <table class="pricing-table">
        <thead>
          <tr>
            <th>Elvégzett munka</th>
            <th>Tájékoztató ár</th>
            <th>Megjegyzés</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><a href="/csaptelep-csere/">Csaptelep csere</a></td><td class="price-col">8.000–18.000 Ft</td><td class="note-col">+ anyag</td></tr>
          <tr><td><a href="/sarokszelep-csere/">Sarokszelep csere</a></td><td class="price-col">5.000–10.000 Ft</td><td class="note-col">+ anyag</td></tr>
          <tr><td><a href="/sarokszelep-bekotese/">Bekötőcső csere</a></td><td class="price-col">3.000–6.000 Ft</td><td class="note-col">+ anyag</td></tr>
          <tr><td><a href="/wc-tartaly-szereles/">WC töltőszelep csere</a></td><td class="price-col">8.000–14.000 Ft</td><td class="note-col">típustól függ</td></tr>
          <tr><td><a href="/wc-gumiharang-csereje/">WC gumiharang csere</a></td><td class="price-col">6.000–12.000 Ft</td><td class="note-col">+ anyag</td></tr>
          <tr><td><a href="/geberit-wc-tartaly-folyik/">Geberit UP javítás</a></td><td class="price-col">12.000–25.000 Ft</td><td class="note-col">falbontás nélkül</td></tr>
          <tr><td><a href="/villanybojler-csere/">Villanybojler csere</a></td><td class="price-col">15.000–35.000 Ft</td><td class="note-col">+ bojler ára</td></tr>
          <tr><td><a href="/dugulaselharitas/">Duguláselhárítás kézi</a></td><td class="price-col">12.000–18.000 Ft</td><td class="note-col">kisebb dugulás</td></tr>
          <tr><td><a href="/dugulaselharitas/">Duguláselhárítás gépi</a></td><td class="price-col">18.000–30.000 Ft</td><td class="note-col">30 m mélységig</td></tr>
          <tr><td><a href="/csotores-elharitas/">Csőtörés javítás</a></td><td class="price-col">15.000–50.000 Ft</td><td class="note-col">terjedelem szerint</td></tr>
        </tbody>
      </table>
    </div>

    <p style="margin-top:1rem;font-size:.85rem;color:var(--text-light)">
      * Hétvégi és éjszakai kiszállás sürgősségi díjjal. Részletes árlista:
      <a href="/vizvezetek-szereles-arak/" style="color:var(--blue);font-weight:600">Árak 2025 →</a> |
      <a href="/vizszereles-arak-kotesenkent-2025/" style="color:var(--blue);font-weight:600">Kötésenkénti árak →</a>
    </p>
  </div>
</section>

<!-- ========== WHY US ========== -->
<section class="section section-alt">
  <div class="container">
    <span class="section-label">Miért mi?</span>
    <h2 class="section-title">Miért Válasszon Minket?</h2>
    <p class="section-sub">Ezért bíznak ránk 2011 óta Budapest lakói és vállalkozásai.</p>
    <div class="reasons-grid">
      <div class="reason-card">
        <div class="rc-num">01</div>
        <div>
          <h4>⏱ 1–2 Óra Kiszállás</h4>
          <p>Budapest bármely kerületébe gyorsan ott vagyunk, sürgős esetben 1 órán belül.</p>
        </div>
      </div>
      <div class="reason-card">
        <div class="rc-num">02</div>
        <div>
          <h4>🔒 Törvényes Jótállás</h4>
          <p>Minden munkánkra a Ptk. szerinti jótállást biztosítjuk, számlás teljesítéssel, írásban.</p>
        </div>
      </div>
      <div class="reason-card">
        <div class="rc-num">03</div>
        <div>
          <h4>💰 Korrekt, Átlátható Árak</h4>
          <p>Telefonon elmondják az árat, helyszínen nem drágul. Nincs rejtett díj.</p>
        </div>
      </div>
      <div class="reason-card">
        <div class="rc-num">04</div>
        <div>
          <h4>🛠 5–14 Év Tapasztalat</h4>
          <p>Szerelőink minimum 5 éves tapasztalattal rendelkeznek, Budapesten ismerik a helyi problémákat.</p>
        </div>
      </div>
      <div class="reason-card">
        <div class="rc-num">05</div>
        <div>
          <h4>📞 0-24 Elérhetőség</h4>
          <p>Hétvégén, ünnepnapon, éjjel is elérhető csapat. Csőtörés és dugulás nem vár.</p>
        </div>
      </div>
      <div class="reason-card">
        <div class="rc-num">06</div>
        <div>
          <h4>📋 Számlás, Legális Munka</h4>
          <p>Minden munkáról számlát adunk, minden munka bejelentett, adóköteles vállalkozásban történik.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="section">
  <div class="container">
    <span class="section-label">Ügyfélvélemények</span>
    <h2 class="section-title">Mit Mondanak Ügyfeleink?</h2>
    <p class="section-sub">127 Google értékelés – átlag 4.9 csillag.</p>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="tc-stars">★★★★★</div>
        <p class="tc-text">"Szombat este 9-kor megrepedt egy cső. Fél 11-re már megoldva. Korrekt ár, rendben hagyták a lakást. Nagyon ajánlom!"</p>
        <div class="tc-author">
          <div class="tc-avatar">KM</div>
          <div>
            <div class="tc-name">Kovács Márta</div>
            <div class="tc-location">Budapest XIV. kerület</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="tc-stars">★★★★★</div>
        <p class="tc-text">"A beépített Geberit tartályomat mások nem merték javítani. 45 perc alatt megoldva, 14.000 Ft. Falbontás nélkül!"</p>
        <div class="tc-author">
          <div class="tc-avatar">NP</div>
          <div>
            <div class="tc-name">Németh Péter</div>
            <div class="tc-location">Budapest II. kerület</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="tc-stars">★★★★★</div>
        <p class="tc-text">"Villanybojler cserét vállaltak hétvégén is. A régit elvitték, az újat bekötötték, mindent tökéletesen hagytak."</p>
        <div class="tc-author">
          <div class="tc-avatar">TE</div>
          <div>
            <div class="tc-name">Takács Éva</div>
            <div class="tc-location">Budapest XI. kerület</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== DISTRICTS ========== -->
<section class="section section-alt">
  <div class="container">
    <span class="section-label">Budapest összes kerülete</span>
    <h2 class="section-title">Budapest Minden Kerületébe Kiszállunk</h2>
    <p class="section-sub">Válassza ki kerületét a helyszíni információkért és elérhetőségi időkért.</p>
    <div class="districts-grid">
      <a href="/sos-vizszereles-budapest/1-kerulet/" class="district-link">I. kerület</a>
      <a href="/sos-vizszereles-budapest/2-kerulet/" class="district-link">II. kerület</a>
      <a href="/sos-vizszereles-budapest/3-kerulet/" class="district-link">III. kerület</a>
      <a href="/sos-vizszereles-budapest/4-kerulet/" class="district-link">IV. kerület</a>
      <a href="/sos-vizszereles-budapest/5-kerulet/" class="district-link">V. kerület</a>
      <a href="/sos-vizszereles-budapest/6-kerulet/" class="district-link">VI. kerület</a>
      <a href="/sos-vizszereles-budapest/7-kerulet/" class="district-link">VII. kerület</a>
      <a href="/sos-vizszereles-budapest/8-kerulet/" class="district-link">VIII. kerület</a>
      <a href="/sos-vizszereles-budapest/9-kerulet/" class="district-link">IX. kerület</a>
      <a href="/sos-vizszereles-budapest/10-kerulet/" class="district-link">X. kerület</a>
      <a href="/sos-vizszereles-budapest/11-kerulet/" class="district-link">XI. kerület</a>
      <a href="/sos-vizszereles-budapest/12-kerulet/" class="district-link">XII. kerület</a>
      <a href="/sos-vizszereles-budapest/13-kerulet/" class="district-link">XIII. kerület</a>
      <a href="/sos-vizszereles-budapest/14-kerulet/" class="district-link">XIV. kerület</a>
      <a href="/sos-vizszereles-budapest/15-kerulet/" class="district-link">XV. kerület</a>
      <a href="/sos-vizszereles-budapest/16-kerulet/" class="district-link">XVI. kerület</a>
      <a href="/sos-vizszereles-budapest/17-kerulet/" class="district-link">XVII. kerület</a>
      <a href="/sos-vizszereles-budapest/18-kerulet/" class="district-link">XVIII. kerület</a>
      <a href="/sos-vizszereles-budapest/19-kerulet/" class="district-link">XIX. kerület</a>
      <a href="/sos-vizszereles-budapest/20-kerulet/" class="district-link">XX. kerület</a>
      <a href="/sos-vizszereles-budapest/21-kerulet/" class="district-link">XXI. kerület</a>
      <a href="/sos-vizszereles-budapest/22-kerulet/" class="district-link">XXII. kerület</a>
      <a href="/sos-vizszereles-budapest/23-kerulet/" class="district-link">XXIII. kerület</a>
    </div>
    <p style="margin-top:1.25rem;font-size:.88rem;color:var(--text-light)">
      Pest megye: <a href="/vizvezetek-szereles-pest-megye/" style="color:var(--blue);font-weight:600">Pest megye kiszállás →</a>
    </p>
  </div>
</section>

<!-- ========== FAQ ========== -->
<section class="section">
  <div class="container">
    <span class="section-label">GYIK</span>
    <h2 class="section-title">Gyakran Ismételt Kérdések</h2>
    <p class="section-sub">Ezeket kérdezik legtöbbször, mielőtt hívnak minket.</p>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Mennyi idő alatt ér ki vízvezeték szerelő Budapesten?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">Sürgős esetben <strong>1–2 órán belül</strong> kiszállunk Budapest összes kerületébe, 0-24-ben, hétvégén és ünnepnapon is. Normál esetben legkésőbb 24 órán belül.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Mennyibe kerül a csaptelep csere Budapesten 2025-ben?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">A csaptelep csere munkadíja <strong>8.000–18.000 Ft</strong>, az anyagköltség külön értendő. Telefonon pontosabb árajánlatot adunk az elvégzendő munka leírása alapján.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Mit tegyek, ha folyik a WC tartályom?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">Zárja el a <strong>sarokszelepet</strong> a WC alatt a vízveszteség megállításához, majd hívjon minket. Geberit, Dömötör, Liv Laguna, Mofem és Grohe tartályokat javítunk, falbontás nélkül is.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Vállalnak villanybojler cserét Budapesten?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">Igen, <strong>Hajdu, Ariston, Bosch és Aquastic</strong> villanybojler cserét, bekötést és a régi elszállítását is vállaljuk Budapest mind a 23 kerületében.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Van garancia a vízvezeték szerelési munkákra?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">Minden elvégzett munkánkra a <strong>Ptk. szerinti jótállást és szavatosságot</strong> biztosítjuk, számlás teljesítéssel, írásban.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Mennyibe kerül a duguláselhárítás Budapesten?
          <span class="fq-icon">+</span>
        </button>
        <div class="faq-answer">Kézi duguláselhárítás <strong>12.000–18.000 Ft</strong>, gépi duguláselhárítás <strong>18.000–30.000 Ft</strong>, a dugulás típusától és mélységétől függően. Kamerás vizsgálat is elérhető.</div>
      </div>
      <p style="margin-top:1rem"><a href="/gyakran-ismetelt-kerdesek/" style="color:var(--blue);font-weight:600">Összes GYIK →</a></p>
    </div>
  </div>
</section>

<!-- ========== CTA BANNER ========== -->
<div class="cta-banner">
  <div class="container">
    <h2>Vízvezeték Probléma? Hívjon Most!</h2>
    <p>0-24, hétvégén is – 1–2 óra kiszállás Budapest minden kerületébe. Ingyenes helyszíni árajánlat.</p>
    <div class="cta-buttons">
      <a href="<?= $phone_link ?>" class="btn-cta-primary">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="btn-cta-secondary" target="_blank" rel="noopener">💬 WhatsApp üzenet</a>
      <a href="/kapcsolat/" class="btn-cta-secondary">📧 Visszahívás kérése</a>
    </div>
  </div>
</div>

<!-- ========== CONTACT ========== -->
<section class="section" id="kapcsolat">
  <div class="container">
    <span class="section-label">Kapcsolat</span>
    <h2 class="section-title">📞 Visszahívást Kér?</h2>
    <p class="section-sub">Hagyja meg elérhetőségét, visszahívjuk – általában 15 percen belül.</p>
    <div class="contact-grid">
      <div class="contact-info-card">
        <h3>Elérhetőségeink</h3>
        <div class="cic-item">
          <div class="cic-icon">📞</div>
          <div>
            <span class="cic-label">Telefon / WhatsApp / Viber</span>
            <div class="cic-value"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
          </div>
        </div>
        <div class="cic-item">
          <div class="cic-icon">🕐</div>
          <div>
            <span class="cic-label">Nyitvatartás</span>
            <div class="cic-value">0–24 · Hétfő–Vasárnap</div>
          </div>
        </div>
        <div class="cic-item">
          <div class="cic-icon">✉️</div>
          <div>
            <span class="cic-label">E-mail</span>
            <div class="cic-value"><a href="mailto:<?= $email ?>"><?= $email ?></a></div>
          </div>
        </div>
        <div class="cic-item">
          <div class="cic-icon">📍</div>
          <div>
            <span class="cic-label">Cím</span>
            <div class="cic-value">1191 Budapest, Hamvas utca 7-9.</div>
          </div>
        </div>
        <div style="display:flex;gap:.6rem;margin-top:1rem;flex-wrap:wrap">
          <a href="<?= $wa_link ?>" target="_blank" rel="noopener"
             style="flex:1;min-width:100px;background:#25d366;color:#fff;text-align:center;padding:.55rem;border-radius:8px;font-weight:600;font-size:.85rem">
            💬 WhatsApp
          </a>
          <a href="<?= $viber_link ?>"
             style="flex:1;min-width:100px;background:#7360f2;color:#fff;text-align:center;padding:.55rem;border-radius:8px;font-weight:600;font-size:.85rem">
            📲 Viber
          </a>
        </div>
      </div>

      <div class="contact-form-card">
        <h3>Visszahívás Kérése</h3>
        <div id="form-success">
          <div class="fs-icon">✅</div>
          <h4>Köszönjük! Hamarosan hívjuk.</h4>
          <p style="font-size:.88rem">Sürgős esetben: <a href="<?= $phone_link ?>" style="color:var(--blue);font-weight:700"><?= $phone ?></a></p>
        </div>
        <form id="callback-form" onsubmit="submitForm(event)">
          <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
          <div class="form-group">
            <label for="name">Neve *</label>
            <input type="text" id="name" name="name" placeholder="pl. Kovács János" required>
          </div>
          <div class="form-group">
            <label for="phone_num">Telefonszám *</label>
            <input type="tel" id="phone_num" name="phone" placeholder="pl. 06 30 123 4567" required>
          </div>
          <div class="form-group">
            <label for="message">Rövid leírás (opcionális)</label>
            <textarea id="message" name="message" placeholder="pl. Csöpög a csap a konyhában..."></textarea>
          </div>
          <button type="submit" class="btn-submit">📨 Visszahívás kérése</button>
          <p class="form-note">
            * Kötelező mező. Adatait bizalmasan kezeljük.
            <a href="/adatvedelmi-nyilatkozat/">Adatvédelmi nyilatkozat</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="site-footer">
  <div class="footer-main">
    <div class="footer-brand">
      <div class="footer-logo-text">Provi Domus Kft.</div>
      <p>Vízvezeték szerelő Budapest területén 2011 óta. Csaptelep csere, WC tartály javítás, villanybojler csere, duguláselhárítás – 0-24, garanciával.</p>
      <div class="footer-contact-item">📞 <a href="<?= $phone_link ?>"><?= $phone ?></a> &nbsp;(0–24)</div>
      <div class="footer-contact-item">✉️ <a href="mailto:<?= $email ?>"><?= $email ?></a></div>
      <div class="footer-contact-item">📍 1191 Budapest, Hamvas utca 7-9.</div>
    </div>

    <div>
      <div class="footer-heading">Szolgáltatások</div>
      <ul class="footer-links">
        <li><a href="/csaptelep-csere/">Csaptelep csere</a></li>
        <li><a href="/sarokszelep-csere/">Sarokszelep csere</a></li>
        <li><a href="/wc-tartaly-szereles/">WC tartály szerelés</a></li>
        <li><a href="/wc-tartaly-szereles-javitas/">WC tartály javítás</a></li>
        <li><a href="/villanybojler-csere/">Villanybojler csere</a></li>
        <li><a href="/villanybojler-javitas/">Villanybojler javítás</a></li>
        <li><a href="/ariston-bojler-szerviz-budapesten/">Ariston szerviz</a></li>
        <li><a href="/dugulaselharitas/">Duguláselhárítás</a></li>
        <li><a href="/csotores-elharitas/">Csőtörés elhárítás</a></li>
        <li><a href="/sos-vizszereles-budapest/">SOS vízszerelés</a></li>
      </ul>
    </div>

    <div>
      <div class="footer-heading">Budapest kerületek</div>
      <ul class="footer-links">
        <?php for($i=1;$i<=12;$i++): ?>
        <li><a href="/sos-vizszereles-budapest/<?= $i ?>-kerulet/">Budapest <?= $i ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
    </div>

    <div>
      <div class="footer-heading">Kerületek (folyt.)</div>
      <ul class="footer-links">
        <?php for($i=13;$i<=23;$i++): ?>
        <li><a href="/sos-vizszereles-budapest/<?= $i ?>-kerulet/">Budapest <?= $i ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
      <div class="footer-heading" style="margin-top:1.5rem">Információk</div>
      <ul class="footer-links">
        <li><a href="/vizvezetek-szereles-arak/">Áraink 2025</a></li>
        <li><a href="/vizszereles-arak-kotesenkent-2025/">Kötésenkénti árak</a></li>
        <li><a href="/budapesti-szolgaltatasaink/">Összes szolgáltatás</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/kapcsolat/">Kapcsolat</a></li>
        <li><a href="/impresszum/">Impresszum</a></li>
        <li><a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a></li>
        <li><a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a></li>
        <li><a href="/gyakran-ismetelt-kerdesek/">GYIK</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Vízvezeték Szerelő Budapest</span>
    <div class="footer-bottom-links">
      <a href="/impresszum/">Impresszum</a>
      <a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a>
      <a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a>
      <a href="/sitemap.xml">Sitemap</a>
    </div>
  </div>
</footer>

<!-- ========== FLOATING BUTTONS ========== -->
<a href="<?= $wa_link ?>" class="float-wa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
<a href="<?= $phone_link ?>" class="float-phone" aria-label="Telefon">
  <span class="fp-icon">📞</span> <?= $phone ?>
</a>

<!-- ========== JAVASCRIPT ========== -->
<script>
function toggleFaq(btn){
  var item=btn.parentElement;
  var isOpen=item.classList.contains('open');
  document.querySelectorAll('.faq-item.open').forEach(function(el){el.classList.remove('open');el.querySelector('.faq-question').setAttribute('aria-expanded','false')});
  if(!isOpen){item.classList.add('open');btn.setAttribute('aria-expanded','true')}
}

function submitForm(e){
  e.preventDefault();
  var form=document.getElementById('callback-form');
  var success=document.getElementById('form-success');
  // honeypot check
  if(form.querySelector('[name="website"]').value){return}
  var data={
    name:form.querySelector('[name="name"]').value,
    phone:form.querySelector('[name="phone"]').value,
    message:form.querySelector('[name="message"]').value
  };
  // POST to backend (existing form handler)
  fetch('/kapcsolat/form-handler.php',{
    method:'POST',
    headers:{'Content-Type':'application/json'},
    body:JSON.stringify(data)
  }).then(function(){
    form.style.display='none';
    success.style.display='block';
  }).catch(function(){
    form.style.display='none';
    success.style.display='block';
  });
}

// Sticky header shadow adjustment on scroll
(function(){
  var header=document.querySelector('.site-header');
  window.addEventListener('scroll',function(){
    header.style.boxShadow=window.scrollY>30?'0 3px 18px rgba(0,0,0,.14)':'0 2px 12px rgba(0,0,0,.10)';
  },{passive:true});
})();
</script>
</body>
</html>
