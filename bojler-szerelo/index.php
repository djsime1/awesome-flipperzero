<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+%C3%89rdekl%C5%91dn%C3%A9k+a+bojler+szerel%C3%A9s+ir%C3%A1nt.';
$viber_link = 'viber://chat?number=%2B36701644000';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Szerelő Budapest – Javítás &amp; Csere 0-24 | Provi Domus Kft.</title>
<meta name="description" content="Bojler nem melegít? Csöpög? Leveri a biztosítékot? Hívjon most – 1-2 óra kiszállás Budapest minden kerületébe, 0-24. Ariston, Hajdú szerviz. Garancia, számla.">
<meta name="keywords" content="bojler szerelő budapest, villanybojler javítás, bojler csere budapest, ariston szerviz budapest, hajdú bojler szerelő, vízkőtelenítés budapest, bojler nem melegít">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/">
<meta property="og:title" content="Bojler Szerelő Budapest – 0-24 Gyorsszerviz | Provi Domus Kft.">
<meta property="og:description" content="Bojler javítás, csere, vízkőtelenítés – 1-2 óra kiszállás Budapest minden kerületébe. Ariston és Hajdú szakszerviz, garancia, számla.">
<meta property="og:locale" content="hu_HU">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bojler Szerelő Budapest – 0-24 | Provi Domus Kft.">
<meta name="twitter:description" content="Bojler javítás, csere, Ariston & Hajdú szerviz – 1-2 óra kiszállás, 0-24, garancia.">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Bojler Szerelő Budapest",
      "url": "<?= $base ?>/",
      "description": "Villanybojler javítás, csere, vízkőtelenítés Budapest területén 2011 óta. Ariston és Hajdú szakszerviz, 0-24, 1-2 óra kiszállás.",
      "telephone": "+36701644000",
      "email": "<?= $email ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": [
        {"@type": "City", "name": "Budapest"},
        {"@type": "AdministrativeArea", "name": "Pest megye"}
      ],
      "priceRange": "10000-35000 HUF",
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
        "reviewCount": "143",
        "bestRating": "5"
      },
      "review": [
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Horváth Gábor"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Reggel 7-kor nem volt meleg víz. Délelőtt 10-re új bojler működött. Ariston Lydost szereltek, minden rendben.",
          "datePublished": "2025-04-10"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Szabó Krisztina"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Hajdú bojlerem 15 éve volt, vízkőtelenítés és anódrúd csere, még mindig megy. Profik, korrekt ár.",
          "datePublished": "2025-03-22"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Molnár István"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Leverte a biztosítékot a bojler. Telefonon azonnal megmondták mi lehet, kiszálltak, fűtőszál csere 2 óra alatt.",
          "datePublished": "2025-02-14"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Bojler Szerelési Szolgáltatások",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Bojler javítás"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Bojler csere"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "15000", "maxPrice": "35000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Vízkőtelenítés"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "12000", "maxPrice": "20000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ariston bojler szerviz"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Hajdú bojler szerviz"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Miért nem melegít a villanybojler?",
          "acceptedAnswer": {"@type": "Answer", "text": "A villanybojler leggyakoribb meghibásodásai: elégett fűtőszál (nem melegszik a víz), elromlott termosztát (nem áll be a hőmérséklet), leoldott biztonsági hőkapcsoló (túlhevülés után), vagy vastag vízkőréteg (lassú melegítés). Ezek közül a fűtőszál és termosztát csere a leggyakoribb, 10.000–28.000 Ft között javítható."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül a bojler javítás Budapesten 2025-ben?",
          "acceptedAnswer": {"@type": "Answer", "text": "A bojler javítás munkadíja Budapesten 10.000–28.000 Ft között mozog 2025-ben, az alkatrész árától függően. Fűtőszál csere: 12.000–20.000 Ft, termosztát csere: 10.000–18.000 Ft, biztonsági szelep csere: 8.000–15.000 Ft. Az alkatrész ára külön értendő."}
        },
        {
          "@type": "Question",
          "name": "Mikor kell bojlert cserélni javítás helyett?",
          "acceptedAnswer": {"@type": "Answer", "text": "Bojler cserét javasoljuk ha: a készülék 12 évnél idősebb, a tartályból rozsdás víz folyik, szivárog a tartály, vagy az éves javítási költség meghaladja az új bojler árának 40%-át. 7 évnél fiatalabb, ép tartályú bojlernél általában megéri javítani."}
        },
        {
          "@type": "Question",
          "name": "Miért veri le a bojler a biztosítékot?",
          "acceptedAnswer": {"@type": "Answer", "text": "Ha a villanybojler leveri a biztosítékot, az leggyakrabban elhasználódott vagy nedves fűtőszál miatt van. A fűtőszál szigetelése megsérül, földre szivárog az áram – ez védelmi kioldást okoz. Másik ok lehet a sérült tápkábel vagy belső rövidzárlat. Ez sürgős szervizeset, ne használja tovább a bojlert!"}
        },
        {
          "@type": "Question",
          "name": "Mennyi ideig tart egy bojler csere Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Egy villanybojler csere általában 2–3 órát vesz igénybe. Ez magában foglalja a régi bojler leszedését és elszállítását, az új bojler felszerelését, bekötését és a rendszer próbáját. Nagy kapacitású (120+ literes) bojler esetén 3–4 óra."}
        },
        {
          "@type": "Question",
          "name": "Milyen garancia van a bojler javításra?",
          "acceptedAnswer": {"@type": "Answer", "text": "Minden elvégzett munkánkra a Ptk. szerinti jótállást és szavatosságot biztosítjuk, számlás teljesítéssel. Az általunk beépített alkatrészekre gyártói garancia vonatkozik."}
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
/* ================================================
   RESET & BASE
================================================ */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;color:#1a1a2e;background:#fff;line-height:1.6;overflow-x:hidden}
img{max-width:100%;height:auto;display:block}
a{color:inherit;text-decoration:none}
ul{list-style:none}
button{font-family:inherit}

/* ================================================
   CSS VÁLTOZÓK – BOJLER TÉMA (tűz + meleg)
================================================ */
:root{
  --fire:#c62828;
  --fire-dark:#8e0000;
  --fire-light:#ef5350;
  --amber:#f57f17;
  --amber-bright:#ffab00;
  --dark:#0f0f1a;
  --dark-card:#1a1a2e;
  --green:#2e7d32;
  --white:#ffffff;
  --gray-light:#f5f5f7;
  --gray:#e8e8ed;
  --gray-mid:#9e9ea8;
  --text:#1a1a2e;
  --text-light:#4a4a5a;
  --shadow-sm:0 2px 8px rgba(198,40,40,.10);
  --shadow-md:0 6px 24px rgba(198,40,40,.16);
  --shadow-lg:0 16px 48px rgba(198,40,40,.20);
  --radius:12px;
  --radius-sm:8px;
  --t:all .22s ease;
}

/* ================================================
   TIPOGRÁFIA
================================================ */
h1{font-size:clamp(1.8rem,4.5vw,3rem);font-weight:900;line-height:1.1;color:#fff;letter-spacing:-.02em}
h2{font-size:clamp(1.45rem,3vw,2.2rem);font-weight:800;line-height:1.2;color:var(--text)}
h3{font-size:clamp(1.05rem,2vw,1.3rem);font-weight:700;color:var(--text)}
h4{font-size:1rem;font-weight:700;color:var(--text)}
p{color:var(--text-light);line-height:1.7}
strong{color:var(--text);font-weight:700}

/* ================================================
   SÜRGŐSSÉGI SÁV
================================================ */
.alert-bar{
  background:var(--fire-dark);color:#fff;
  text-align:center;padding:.5rem 1rem;
  font-size:.84rem;font-weight:600;letter-spacing:.01em;
}
.alert-bar a{color:#ffcc02;text-decoration:none;font-weight:800}
.alert-bar a:hover{text-decoration:underline}

/* ================================================
   FEJLÉC
================================================ */
.site-header{
  position:sticky;top:0;z-index:1000;
  background:var(--dark);
  box-shadow:0 2px 16px rgba(0,0,0,.4);
}
.header-inner{
  max-width:1200px;margin:0 auto;
  display:flex;align-items:center;justify-content:space-between;
  padding:.7rem 1.5rem;gap:1rem;
}
.logo a{
  display:flex;align-items:center;gap:.65rem;color:#fff;
  font-size:1.1rem;font-weight:900;white-space:nowrap;
}
.logo-mark{
  width:42px;height:42px;border-radius:10px;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  display:flex;align-items:center;justify-content:center;
  font-size:1.3rem;
}
.logo-sub{font-size:.68rem;font-weight:400;color:rgba(255,255,255,.6);display:block;margin-top:1px}

.main-nav{display:flex;gap:.1rem;flex-wrap:wrap;align-items:center}
.main-nav a{
  color:rgba(255,255,255,.8);font-size:.84rem;font-weight:500;
  padding:.4rem .65rem;border-radius:6px;transition:var(--t);white-space:nowrap;
}
.main-nav a:hover{background:rgba(255,255,255,.1);color:#fff}

.h-cta{display:flex;align-items:center;gap:.6rem;flex-shrink:0}
.btn-hcall{
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.55rem 1.15rem;border-radius:var(--radius-sm);
  font-weight:800;font-size:.9rem;white-space:nowrap;
  box-shadow:0 3px 12px rgba(198,40,40,.4);transition:var(--t);
}
.btn-hcall:hover{transform:translateY(-1px);box-shadow:0 5px 18px rgba(198,40,40,.5)}
.btn-hcall small{display:block;font-size:.64rem;font-weight:400;opacity:.85}

.nav-toggle{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:.4rem}
.nav-toggle span{width:24px;height:2px;background:#fff;border-radius:2px;transition:var(--t)}
#nav-check{display:none}

/* ================================================
   HERO
================================================ */
.hero{
  background:linear-gradient(145deg,var(--fire-dark) 0%,var(--fire) 50%,#d84315 100%);
  position:relative;overflow:hidden;
  padding:4.5rem 1.5rem 3.5rem;
}
.hero::after{
  content:'';position:absolute;
  bottom:-1px;left:0;right:0;height:60px;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 60'%3E%3Cpath fill='%23f5f5f7' d='M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60Z'/%3E%3C/svg%3E") bottom/cover;
  pointer-events:none;
}
.hero-wrap{max-width:1200px;margin:0 auto;position:relative;z-index:1}
.hero-grid{display:grid;grid-template-columns:1fr 280px;gap:2.5rem;align-items:start}

.hero-panic{
  display:inline-flex;align-items:center;gap:.5rem;
  background:rgba(0,0,0,.3);color:#ffcc02;
  padding:.35rem .9rem;border-radius:20px;
  font-size:.82rem;font-weight:800;margin-bottom:1rem;
  border:1px solid rgba(255,204,2,.3);letter-spacing:.04em;
  text-transform:uppercase;
}
.hero h1{margin-bottom:.8rem;text-shadow:0 2px 12px rgba(0,0,0,.3)}
.hero h1 em{font-style:normal;color:#ffcc02}
.hero-desc{
  color:rgba(255,255,255,.9);font-size:1.1rem;
  margin-bottom:1.5rem;max-width:580px;line-height:1.65;
}
.hero-checklist{
  display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:2rem;
}
.hc-item{
  display:flex;align-items:center;gap:.4rem;
  color:rgba(255,255,255,.93);font-size:.83rem;font-weight:600;
  background:rgba(0,0,0,.25);padding:.3rem .75rem;border-radius:20px;
  border:1px solid rgba(255,255,255,.15);
}
.hero-btns{display:flex;gap:.85rem;flex-wrap:wrap;margin-bottom:1.75rem}
.btn-hero-call{
  background:#fff;color:var(--fire);
  padding:.9rem 1.9rem;border-radius:var(--radius-sm);
  font-weight:900;font-size:1.1rem;
  box-shadow:0 6px 24px rgba(0,0,0,.25);transition:var(--t);
  display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-call:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(0,0,0,.35)}
.btn-hero-wa{
  background:rgba(255,255,255,.12);color:#fff;
  padding:.9rem 1.5rem;border-radius:var(--radius-sm);
  font-weight:700;border:2px solid rgba(255,255,255,.35);
  transition:var(--t);display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-wa:hover{background:rgba(255,255,255,.22)}

.hero-signals{display:flex;flex-wrap:wrap;gap:1.25rem}
.sig{display:flex;align-items:center;gap:.4rem;color:rgba(255,255,255,.85);font-size:.82rem;font-weight:500}

/* Hero kártya */
.hero-card{
  background:var(--dark);border-radius:var(--radius);
  padding:1.5rem;border:1px solid rgba(255,255,255,.08);
  box-shadow:0 16px 48px rgba(0,0,0,.4);
}
.hc-urgent{
  text-align:center;
  background:linear-gradient(135deg,var(--fire-dark),var(--fire));
  border-radius:var(--radius-sm);padding:.8rem;margin-bottom:1rem;
}
.hc-urgent .u-label{font-size:.7rem;color:rgba(255,255,255,.7);text-transform:uppercase;letter-spacing:.08em;display:block}
.hc-urgent .u-phone{font-size:1.4rem;font-weight:900;color:#fff;display:block;margin:.2rem 0}
.hc-urgent .u-sub{font-size:.75rem;color:rgba(255,255,255,.75)}
.btn-call-red{
  display:block;width:100%;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;text-align:center;padding:.75rem;
  border-radius:var(--radius-sm);font-weight:800;font-size:.95rem;
  margin-bottom:.6rem;transition:var(--t);
}
.btn-call-red:hover{filter:brightness(1.1)}
.btn-wa-green{
  display:block;width:100%;
  background:#25d366;color:#fff;text-align:center;padding:.65rem;
  border-radius:var(--radius-sm);font-weight:700;font-size:.88rem;
  margin-bottom:.5rem;transition:var(--t);
}
.btn-wa-green:hover{background:#1ebe5d}
.hc-problems{margin-top:.85rem}
.hc-problems p{font-size:.73rem;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.07em;margin-bottom:.5rem}
.prob-list li{
  font-size:.83rem;color:rgba(255,255,255,.8);
  padding:.3rem 0;border-bottom:1px solid rgba(255,255,255,.07);
  display:flex;align-items:center;gap:.4rem;
}
.prob-list li:last-child{border-bottom:none}

/* ================================================
   STATS SÁV
================================================ */
.stats-bar{background:var(--dark);padding:1.5rem}
.stats-inner{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;
}
.stat{text-align:center}
.stat-n{font-size:2rem;font-weight:900;color:var(--amber);line-height:1}
.stat-l{font-size:.76rem;color:rgba(255,255,255,.6);margin-top:.25rem}

/* ================================================
   KÖZÖS SZEKCIÓ STÍLUSOK
================================================ */
.section{padding:4rem 1.5rem}
.section-alt{background:var(--gray-light)}
.section-dark{background:var(--dark-card)}
.container{max-width:1200px;margin:0 auto}
.tag{
  display:inline-block;font-size:.76rem;font-weight:700;
  text-transform:uppercase;letter-spacing:.1em;
  padding:.25rem .8rem;border-radius:20px;margin-bottom:.65rem;
}
.tag-fire{color:var(--fire);background:rgba(198,40,40,.1)}
.tag-dark{color:var(--amber);background:rgba(245,127,23,.15)}
.sec-title{margin-bottom:.6rem}
.sec-sub{color:var(--text-light);font-size:1rem;max-width:640px;margin-bottom:2.5rem}
.sec-title-white{color:#fff;margin-bottom:.6rem}
.sec-sub-white{color:rgba(255,255,255,.7);font-size:1rem;max-width:640px;margin-bottom:2.5rem}

/* ================================================
   AI SNIPPET BLOKK
================================================ */
.ai-snippet{
  background:linear-gradient(135deg,#0f0f1a,#1a1a2e);
  border-radius:var(--radius);padding:1.75rem 2rem;
  border-left:4px solid var(--amber);
  box-shadow:var(--shadow-md);
  margin-bottom:2.5rem;
}
.ai-label{
  display:inline-flex;align-items:center;gap:.4rem;
  font-size:.72rem;font-weight:700;color:var(--amber);
  text-transform:uppercase;letter-spacing:.1em;margin-bottom:.75rem;
  background:rgba(245,127,23,.15);padding:.2rem .7rem;border-radius:20px;
}
.ai-snippet h3{color:#fff;margin-bottom:.75rem;font-size:1.1rem}
.ai-snippet p{color:rgba(255,255,255,.78);font-size:.92rem;line-height:1.75;margin-bottom:.5rem}
.ai-snippet p:last-child{margin-bottom:0}

/* ================================================
   SZOLGÁLTATÁS KÁRTYÁK
================================================ */
.services-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));
  gap:1.25rem;
}
.svc-card{
  background:#fff;border-radius:var(--radius);
  border:1px solid var(--gray);padding:1.6rem;
  transition:var(--t);position:relative;overflow:hidden;
}
.svc-card::after{
  content:'';position:absolute;top:0;left:0;right:0;height:4px;
  background:linear-gradient(90deg,var(--fire),var(--amber));
  transform:scaleX(0);transform-origin:left;transition:var(--t);
}
.svc-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);border-color:transparent}
.svc-card:hover::after{transform:scaleX(1)}
.svc-icon{
  width:54px;height:54px;border-radius:12px;
  background:linear-gradient(135deg,rgba(198,40,40,.08),rgba(245,127,23,.12));
  display:flex;align-items:center;justify-content:center;
  font-size:1.55rem;margin-bottom:1rem;transition:var(--t);
}
.svc-card:hover .svc-icon{background:linear-gradient(135deg,rgba(198,40,40,.15),rgba(245,127,23,.2))}
.svc-price{
  display:inline-block;font-size:.78rem;font-weight:800;
  color:var(--fire);background:rgba(198,40,40,.08);
  padding:.2rem .65rem;border-radius:20px;margin-bottom:.75rem;
}
.svc-card h3{margin-bottom:.5rem;font-size:1.05rem}
.svc-card p{font-size:.88rem;margin-bottom:1rem}
.svc-list{margin-bottom:1rem}
.svc-list li{font-size:.83rem;color:var(--text-light);padding:.2rem 0;display:flex;align-items:center;gap:.4rem}
.svc-list li::before{content:'✓';color:var(--green);font-weight:700;font-size:.8rem;flex-shrink:0}
.svc-link{font-size:.85rem;font-weight:700;color:var(--fire);display:flex;align-items:center;gap:.3rem;transition:var(--t)}
.svc-link:hover{gap:.6rem}

/* ================================================
   MÁRKA SZEKCIÓ
================================================ */
.brand-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.brand-card{
  border-radius:var(--radius);padding:2rem;
  border:2px solid transparent;transition:var(--t);
}
.brand-ariston{background:linear-gradient(135deg,#fff9f9,#fff3f3);border-color:rgba(198,40,40,.2)}
.brand-hajdu{background:linear-gradient(135deg,#f9f9ff,#f0f4ff);border-color:rgba(21,101,192,.2)}
.brand-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md)}
.brand-header{display:flex;align-items:center;gap:.75rem;margin-bottom:1.25rem}
.brand-icon{
  width:50px;height:50px;border-radius:10px;
  display:flex;align-items:center;justify-content:center;font-size:1.5rem;
}
.brand-ariston .brand-icon{background:rgba(198,40,40,.1)}
.brand-hajdu .brand-icon{background:rgba(21,101,192,.1)}
.brand-name{font-size:1.3rem;font-weight:900}
.brand-ariston .brand-name{color:var(--fire)}
.brand-hajdu .brand-name{color:#1565c0}
.brand-sub{font-size:.78rem;color:var(--text-light)}
.brand-types{display:flex;flex-wrap:wrap;gap:.4rem;margin:1rem 0}
.btype{
  font-size:.78rem;font-weight:600;padding:.25rem .65rem;
  border-radius:20px;border:1px solid;
}
.brand-ariston .btype{color:var(--fire);border-color:rgba(198,40,40,.25);background:rgba(198,40,40,.06)}
.brand-hajdu .btype{color:#1565c0;border-color:rgba(21,101,192,.25);background:rgba(21,101,192,.06)}
.brand-features li{
  font-size:.86rem;color:var(--text-light);
  padding:.3rem 0;border-bottom:1px solid var(--gray);
  display:flex;align-items:center;gap:.5rem;
}
.brand-features li:last-child{border-bottom:none}
.brand-link{
  display:inline-flex;align-items:center;gap:.4rem;
  margin-top:1rem;font-size:.88rem;font-weight:700;
  padding:.55rem 1.1rem;border-radius:var(--radius-sm);transition:var(--t);
}
.brand-ariston .brand-link{color:#fff;background:var(--fire)}
.brand-ariston .brand-link:hover{background:var(--fire-dark)}
.brand-hajdu .brand-link{color:#fff;background:#1565c0}
.brand-hajdu .brand-link:hover{background:#0d47a1}

/* ================================================
   HIBAKÓD / TÜNET BLOKK
================================================ */
.symptom-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
  gap:1rem;
}
.symptom-card{
  background:#fff;border-radius:var(--radius-sm);padding:1.25rem;
  border:1px solid var(--gray);transition:var(--t);
  border-left:3px solid var(--fire);
}
.symptom-card:hover{box-shadow:var(--shadow-sm);transform:translateY(-2px)}
.sym-icon{font-size:1.5rem;margin-bottom:.5rem}
.sym-title{font-weight:700;font-size:.92rem;margin-bottom:.4rem;color:var(--text)}
.sym-cause{font-size:.82rem;color:var(--text-light);margin-bottom:.5rem}
.sym-price{font-size:.8rem;font-weight:700;color:var(--fire)}

/* ================================================
   ÁRAK
================================================ */
.price-table{width:100%;border-collapse:collapse;border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm)}
.price-table thead tr{background:linear-gradient(90deg,var(--fire-dark),var(--fire));color:#fff}
.price-table thead th{padding:1rem 1.25rem;text-align:left;font-size:.88rem;font-weight:700}
.price-table tbody tr{border-bottom:1px solid var(--gray);transition:var(--t)}
.price-table tbody tr:hover{background:#fff5f5}
.price-table tbody tr:last-child{border-bottom:none}
.price-table td{padding:.85rem 1.25rem;font-size:.9rem}
.price-table td:first-child{font-weight:600}
.price-col{font-weight:800;color:var(--fire)}
.note-col{font-size:.8rem;color:var(--text-light)}
.price-note{margin-top:1rem;font-size:.84rem;color:var(--text-light);padding:.75rem 1rem;background:var(--gray-light);border-radius:var(--radius-sm);border-left:3px solid var(--amber)}

/* ================================================
   DÖNTÉS SEGÉD – JAVÍTÁS VS CSERE
================================================ */
.decision-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.dec-card{border-radius:var(--radius);padding:1.75rem;border:2px solid transparent}
.dec-fix{background:linear-gradient(135deg,#f0fff4,#e8f5e9);border-color:#81c784}
.dec-replace{background:linear-gradient(135deg,#fff5f0,#fbe9e7);border-color:#ef9a9a}
.dec-header{display:flex;align-items:center;gap:.75rem;margin-bottom:1.25rem}
.dec-icon{font-size:1.8rem}
.dec-title{font-size:1.1rem;font-weight:800}
.dec-fix .dec-title{color:var(--green)}
.dec-replace .dec-title{color:var(--fire)}
.dec-list li{
  display:flex;align-items:flex-start;gap:.5rem;
  font-size:.88rem;color:var(--text-light);
  padding:.35rem 0;border-bottom:1px solid rgba(0,0,0,.06);
}
.dec-list li:last-child{border-bottom:none}
.dec-badge{
  display:inline-block;margin-top:1rem;
  font-size:.8rem;font-weight:700;padding:.3rem .8rem;border-radius:20px;
}
.dec-fix .dec-badge{background:var(--green);color:#fff}
.dec-replace .dec-badge{background:var(--fire);color:#fff}

/* ================================================
   MIÉRT MINKET
================================================ */
.reasons-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1.25rem}
.reason{
  background:rgba(255,255,255,.05);border-radius:var(--radius);
  padding:1.5rem;border:1px solid rgba(255,255,255,.08);
  transition:var(--t);
}
.reason:hover{background:rgba(255,255,255,.09);transform:translateY(-2px)}
.reason-num{
  width:42px;height:42px;border-radius:10px;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:900;font-size:1rem;margin-bottom:1rem;
}
.reason h4{color:#fff;margin-bottom:.4rem;font-size:1rem}
.reason p{color:rgba(255,255,255,.65);font-size:.86rem}

/* ================================================
   FOLYAMAT LÉPÉSEK
================================================ */
.steps-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1.5rem;position:relative}
.steps-grid::before{
  content:'';position:absolute;top:28px;left:10%;right:10%;height:2px;
  background:linear-gradient(90deg,var(--fire),var(--amber));z-index:0;
}
.step{text-align:center;position:relative;z-index:1;padding:.5rem}
.step-n{
  width:56px;height:56px;border-radius:50%;margin:0 auto 1rem;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:1.4rem;font-weight:900;
  box-shadow:0 4px 16px rgba(198,40,40,.4);
}
.step h4{margin-bottom:.35rem;font-size:.95rem}
.step p{font-size:.83rem}

/* ================================================
   VÉLEMÉNYEK
================================================ */
.reviews-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.25rem}
.review-card{
  background:#fff;border-radius:var(--radius);padding:1.5rem;
  border:1px solid var(--gray);box-shadow:var(--shadow-sm);
  border-top:3px solid var(--fire);
}
.rv-stars{color:#f9a825;font-size:1.1rem;margin-bottom:.75rem}
.rv-text{font-size:.92rem;font-style:italic;margin-bottom:1rem;line-height:1.65;color:var(--text)}
.rv-author{display:flex;align-items:center;gap:.75rem}
.rv-av{
  width:40px;height:40px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:.9rem;
}
.rv-name{font-weight:700;font-size:.88rem}
.rv-loc{font-size:.76rem;color:var(--text-light)}

/* ================================================
   KERÜLETEK
================================================ */
.districts-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(125px,1fr));gap:.5rem;
}
.dist-link{
  display:block;background:#fff;border:1px solid var(--gray);
  border-radius:var(--radius-sm);padding:.55rem .7rem;
  font-size:.8rem;font-weight:600;color:var(--fire);text-align:center;
  transition:var(--t);
}
.dist-link:hover{background:var(--fire);color:#fff;border-color:var(--fire);transform:translateY(-2px)}

/* ================================================
   FAQ
================================================ */
.faq-wrap{max-width:820px}
.faq-item{border:1px solid var(--gray);border-radius:var(--radius-sm);margin-bottom:.6rem;overflow:hidden}
.faq-item:hover{border-color:var(--fire)}
.faq-q{
  width:100%;background:none;border:none;cursor:pointer;
  padding:1.1rem 1.25rem;display:flex;align-items:center;
  justify-content:space-between;text-align:left;
  font-size:.95rem;font-weight:700;color:var(--text);gap:1rem;
}
.faq-icon{
  width:26px;height:26px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:1rem;transition:var(--t);
}
.faq-a{
  max-height:0;overflow:hidden;
  transition:max-height .3s ease,padding .3s ease;
  padding:0 1.25rem;font-size:.9rem;color:var(--text-light);
}
.faq-item.open .faq-a{max-height:250px;padding:.75rem 1.25rem 1.1rem}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-item.open{border-color:var(--fire);box-shadow:var(--shadow-sm)}

/* ================================================
   KAPCSOLAT
================================================ */
.contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:start}
.contact-card{
  background:linear-gradient(135deg,var(--fire-dark),var(--fire));
  border-radius:var(--radius);padding:2rem;color:#fff;
}
.contact-card h3{color:#fff;margin-bottom:1.25rem;font-size:1.4rem}
.cc-item{display:flex;align-items:center;gap:.85rem;margin-bottom:1.1rem;padding-bottom:1.1rem;border-bottom:1px solid rgba(255,255,255,.15)}
.cc-item:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.cc-ico{width:44px;height:44px;border-radius:10px;flex-shrink:0;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:1.2rem}
.cc-lbl{font-size:.7rem;opacity:.7;display:block;margin-bottom:.1rem;text-transform:uppercase;letter-spacing:.06em}
.cc-val{font-weight:700;font-size:.98rem}
.cc-val a{color:#fff}
.contact-btns{display:flex;gap:.6rem;margin-top:1rem;flex-wrap:wrap}
.cbtn{flex:1;min-width:90px;text-align:center;padding:.6rem;border-radius:8px;font-weight:700;font-size:.84rem;transition:var(--t)}
.cbtn-wa{background:#25d366;color:#fff}
.cbtn-wa:hover{background:#1ebe5d}
.cbtn-vb{background:#7360f2;color:#fff}
.cbtn-vb:hover{background:#5c4de0}

.form-card{background:#fff;border-radius:var(--radius);padding:2rem;border:1px solid var(--gray);box-shadow:var(--shadow-sm)}
.form-card h3{margin-bottom:1.25rem}
.fg{margin-bottom:1rem}
.fg label{display:block;font-size:.82rem;font-weight:700;margin-bottom:.35rem;color:var(--text)}
.fg input,.fg textarea{
  width:100%;padding:.7rem .9rem;
  border:1.5px solid var(--gray);border-radius:var(--radius-sm);
  font-size:.92rem;font-family:inherit;color:var(--text);transition:var(--t);
}
.fg input:focus,.fg textarea:focus{outline:none;border-color:var(--fire);box-shadow:0 0 0 3px rgba(198,40,40,.1)}
.fg textarea{resize:vertical;min-height:90px}
.btn-submit{
  width:100%;background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.85rem;border-radius:var(--radius-sm);
  font-weight:800;font-size:1rem;border:none;cursor:pointer;transition:var(--t);
}
.btn-submit:hover{filter:brightness(1.08);transform:translateY(-1px)}
.form-note{font-size:.73rem;color:var(--text-light);margin-top:.5rem;text-align:center}
.form-note a{color:var(--fire)}
#fs{display:none;text-align:center;padding:1.5rem}
#fs .fi{font-size:2.5rem;margin-bottom:.5rem}

/* ================================================
   CTA BANNER
================================================ */
.cta-banner{
  background:linear-gradient(135deg,#0f0f1a 0%,var(--fire-dark) 100%);
  padding:3.5rem 1.5rem;text-align:center;
}
.cta-banner h2{color:#fff;margin-bottom:.6rem}
.cta-banner p{color:rgba(255,255,255,.75);margin-bottom:2rem;font-size:1.05rem}
.cta-btns{display:flex;justify-content:center;gap:1rem;flex-wrap:wrap}
.btn-cta-main{
  background:linear-gradient(135deg,#fff,#fff5f0);color:var(--fire);
  padding:.95rem 2.2rem;border-radius:var(--radius-sm);
  font-weight:900;font-size:1.1rem;transition:var(--t);
  box-shadow:0 6px 24px rgba(255,255,255,.2);
}
.btn-cta-main:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(255,255,255,.3)}
.btn-cta-sec{
  background:transparent;color:#fff;
  padding:.95rem 2rem;border-radius:var(--radius-sm);
  font-weight:700;border:2px solid rgba(255,255,255,.35);transition:var(--t);
}
.btn-cta-sec:hover{border-color:#fff;background:rgba(255,255,255,.1)}

/* ================================================
   FOOTER
================================================ */
.site-footer{background:#050510;color:rgba(255,255,255,.65)}
.footer-main{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1fr;
  gap:2.5rem;padding:3rem 1.5rem 2rem;
}
.footer-brand p{font-size:.86rem;line-height:1.7;margin:1rem 0 1.25rem;max-width:270px}
.f-contact-row{display:flex;align-items:center;gap:.55rem;margin-bottom:.5rem;font-size:.84rem}
.f-contact-row a{color:rgba(255,255,255,.65);transition:var(--t)}
.f-contact-row a:hover{color:#fff}
.f-heading{color:#fff;font-size:.76rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;margin-bottom:.85rem}
.f-links li{margin-bottom:.4rem}
.f-links a{font-size:.83rem;color:rgba(255,255,255,.6);transition:var(--t)}
.f-links a:hover{color:#fff}
.footer-logo{color:#fff;font-size:1.05rem;font-weight:900}

.footer-bottom{
  border-top:1px solid rgba(255,255,255,.07);
  max-width:1200px;margin:0 auto;
  padding:1.25rem 1.5rem;
  display:flex;align-items:center;justify-content:space-between;
  font-size:.76rem;flex-wrap:wrap;gap:.5rem;
}
.footer-bottom-links{display:flex;gap:1.1rem;flex-wrap:wrap}
.footer-bottom-links a{color:rgba(255,255,255,.4);transition:var(--t)}
.footer-bottom-links a:hover{color:rgba(255,255,255,.8)}

/* ================================================
   LEBEGŐ GOMBOK
================================================ */
.float-wa{
  position:fixed;bottom:5.5rem;right:1.25rem;z-index:900;
  width:52px;height:52px;border-radius:50%;
  background:#25d366;color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.5rem;border:3px solid #fff;
  box-shadow:0 4px 16px rgba(37,211,102,.45);transition:var(--t);
}
.float-wa:hover{transform:scale(1.1)}
.float-call{
  position:fixed;bottom:1.25rem;right:1.25rem;z-index:900;
  display:flex;align-items:center;gap:.55rem;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.65rem 1.15rem;border-radius:30px;
  font-weight:800;font-size:.9rem;border:3px solid #fff;
  box-shadow:0 4px 20px rgba(198,40,40,.5);transition:var(--t);
}
.float-call:hover{filter:brightness(1.1);transform:translateY(-2px)}
@keyframes firepulse{0%,100%{box-shadow:0 4px 20px rgba(198,40,40,.5)}50%{box-shadow:0 4px 32px rgba(198,40,40,.8),0 0 0 8px rgba(198,40,40,.12)}}
.float-call{animation:firepulse 2.5s infinite}

/* ================================================
   RESZPONZÍV
================================================ */
@media(max-width:1024px){
  .hero-grid{grid-template-columns:1fr}
  .hero-card{display:none}
  .brand-grid{grid-template-columns:1fr}
  .decision-grid{grid-template-columns:1fr}
  .contact-grid{grid-template-columns:1fr}
  .footer-main{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .main-nav{display:none;position:absolute;top:100%;left:0;right:0;background:var(--dark);flex-direction:column;padding:1rem;gap:.2rem;box-shadow:var(--shadow-lg)}
  #nav-check:checked ~ .header-inner .main-nav{display:flex}
  .nav-toggle{display:flex}
  .stats-inner{grid-template-columns:repeat(2,1fr)}
  .steps-grid::before{display:none}
  .footer-main{grid-template-columns:1fr}
}
@media(max-width:480px){
  .hero{padding:2.5rem 1rem 2rem}
  .section{padding:2.5rem 1rem}
  .stats-inner{grid-template-columns:repeat(2,1fr);gap:.5rem}
  .stat-n{font-size:1.6rem}
}
</style>
</head>
<body>

<!-- SÜRGŐSSÉGI SÁV -->
<div class="alert-bar">
  🔥 Bojler meghibásodás? Azonnal hívható: <a href="<?= $phone_link ?>"><?= $phone ?></a> &nbsp;–&nbsp; 0-24, hétvégén is
</div>

<!-- FEJLÉC -->
<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo">
      <a href="/">
        <div class="logo-mark">🔥</div>
        <div>Provi Domus Kft.<span class="logo-sub">Bojler Szerelő Budapest</span></div>
      </a>
    </div>
    <nav class="main-nav" aria-label="Főnavigáció">
      <a href="/">Főoldal</a>
      <a href="/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="/bojler-csere-budapest/">Bojler csere</a>
      <a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="/ariston-bojler-javitas-budapest/">Ariston</a>
      <a href="/hajdu-bojler-csere-budapest/">Hajdú</a>
      <a href="/blog/">Blog</a>
      <a href="/ajanlatkeres/">Árajánlat</a>
      <a href="/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="h-cta">
      <a href="<?= $phone_link ?>" class="btn-hcall">
        📞 <?= $phone ?>
        <small>0-24 · Azonnal</small>
      </a>
      <label for="nav-check" class="nav-toggle" aria-label="Menü">
        <span></span><span></span><span></span>
      </label>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-wrap">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-panic">🚨 Azonnali segítség elérhető</div>
        <h1>Bojler <em>nem melegít?</em><br>Hívjon most – 1-2 óra alatt ott vagyunk.</h1>
        <p class="hero-desc">
          Villanybojler javítás, csere, Ariston és Hajdú szerviz Budapest minden kerületében –
          <strong style="color:#ffcc02">2011 óta</strong>, garanciával, korrekt áron, 0-24.
        </p>
        <div class="hero-checklist">
          <span class="hc-item">✅ 2011 óta megbízható</span>
          <span class="hc-item">⚡ 1–2 óra kiszállás</span>
          <span class="hc-item">🔒 Törvényes garancia</span>
          <span class="hc-item">📋 Számlás munka</span>
          <span class="hc-item">🌙 0-24 éjjel-nappal</span>
          <span class="hc-item">🏷️ Ariston &amp; Hajdú szakszerviz</span>
        </div>
        <div class="hero-btns">
          <a href="<?= $phone_link ?>" class="btn-hero-call">📞 Hívjon most: <?= $phone ?></a>
          <a href="<?= $wa_link ?>" class="btn-hero-wa" target="_blank" rel="noopener">💬 WhatsApp</a>
        </div>
        <div class="hero-signals">
          <span class="sig">🏆 4.9★ – 143 Google vélemény</span>
          <span class="sig">📍 Budapest 1–23. kerület + Pest megye</span>
          <span class="sig">🔧 Raktáron tartott alkatrészek</span>
        </div>
      </div>

      <div class="hero-sidebar">
        <div class="hero-card">
          <div class="hc-urgent">
            <span class="u-label">🚨 Sürgős kiszállás</span>
            <a href="<?= $phone_link ?>" class="u-phone"><?= $phone ?></a>
            <span class="u-sub">0–24 · Hétfő–Vasárnap</span>
          </div>
          <a href="<?= $phone_link ?>" class="btn-call-red">📞 Hívás most</a>
          <a href="<?= $wa_link ?>" class="btn-wa-green" target="_blank" rel="noopener">💬 WhatsApp üzenet</a>
          <div class="hc-problems">
            <p>Mikor hívjon?</p>
            <ul class="prob-list">
              <li>🔴 Nem melegít a bojler</li>
              <li>🔴 Leveri a biztosítékot</li>
              <li>🔴 Csöpög, szivárog</li>
              <li>🔴 Rozsdás víz folyik</li>
              <li>🔴 Csökkent kapacitás</li>
              <li>🟡 Vízkőtelenítés esedékes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS SÁV -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat"><span class="stat-n">2011</span><div class="stat-l">óta működünk</div></div>
    <div class="stat"><span class="stat-n">1–2h</span><div class="stat-l">kiszállási idő</div></div>
    <div class="stat"><span class="stat-n">23</span><div class="stat-l">Budapest kerület</div></div>
    <div class="stat"><span class="stat-n">4.9★</span><div class="stat-l">Google értékelés</div></div>
  </div>
</div>

<!-- AI SNIPPET BLOKK -->
<section class="section section-alt">
  <div class="container">
    <div class="ai-snippet">
      <div class="ai-label">🤖 Gyors válasz – AI &amp; Google kiemelt snippet</div>
      <h3>Bojler szerelő Budapest – Amit azonnal tudni kell</h3>
      <p>A <strong style="color:#ffab00">Provi Domus Kft.</strong> villanybojler javítást, cserét és vízkőtelenítést végez Budapest mind a 23 kerületében, 2011 óta. Munkadíj: <strong style="color:#ffab00">10.000–35.000 Ft</strong>. Kiszállási idő sürgős esetben: <strong style="color:#ffab00">1–2 óra</strong>. Telefon: <strong style="color:#ffab00"><?= $phone ?></strong>, 0-24.</p>
      <p>A leggyakoribb bojler meghibásodások: elégett fűtőszál (nem melegszik a víz), elromlott termosztát, leoldott biztonsági hőkapcsoló (leveri a biztosítékot), vagy vastag vízkőréteg (lassú melegítés). Ariston és Hajdú márka szakszerviz, eredeti alkatrészekkel, garanciával.</p>
    </div>

    <!-- SZOLGÁLTATÁSOK -->
    <span class="tag tag-fire">Szolgáltatásaink</span>
    <h2 class="sec-title">Bojler Szerelési Szolgáltatások Budapesten</h2>
    <p class="sec-sub">Teljes körű villanybojler szerviz – javítástól cseréig, minden márkához, Budapest egész területén.</p>

    <div class="services-grid">
      <div class="svc-card">
        <div class="svc-icon">🔧</div>
        <div class="svc-price">10.000 – 28.000 Ft</div>
        <h3>Bojler Javítás Budapest</h3>
        <p>Helyszíni diagnózis után pontos ár. Nem melegít, leveri a biztosítékot, vagy csöpög? Megoldjuk.</p>
        <ul class="svc-list">
          <li>Fűtőszál csere (leggyakoribb hiba)</li>
          <li>Termosztát csere és beállítás</li>
          <li>Biztonsági szelep csere</li>
          <li>Biztonsági hőkapcsoló reset / csere</li>
          <li>Elektromos hiba diagnosztika</li>
        </ul>
        <a href="/bojler-javitas-budapest/" class="svc-link">Részletek a bojler javításról →</a>
      </div>

      <div class="svc-card">
        <div class="svc-icon">🔄</div>
        <div class="svc-price">15.000 – 35.000 Ft</div>
        <h3>Bojler Csere Budapest</h3>
        <p>Régi bojler leszedése, elszállítása, új bojler felszerelése és bekötése – 2–3 óra alatt.</p>
        <ul class="svc-list">
          <li>Régi bojler biztonságos eltávolítása</li>
          <li>Új bojler felszerelése és bekötése</li>
          <li>Tömörségi próba, beüzemelés</li>
          <li>Régi készülék elszállítása</li>
          <li>Ariston, Hajdú, Bosch választható</li>
        </ul>
        <a href="/bojler-csere-budapest/" class="svc-link">Részletek a bojler cseréről →</a>
      </div>

      <div class="svc-card">
        <div class="svc-icon">💧</div>
        <div class="svc-price">12.000 – 20.000 Ft</div>
        <h3>Vízkőtelenítés Budapest</h3>
        <p>Éves karbantartás: anódrúd csere, biztonsági szelep ellenőrzés, vízkőréteg eltávolítás.</p>
        <ul class="svc-list">
          <li>Anódrúd ellenőrzés és csere</li>
          <li>Biztonsági szelep tesztelés</li>
          <li>Belső vízkőréteg megszüntetése</li>
          <li>Tömörségi vizsgálat</li>
          <li>Élettartam meghosszabbítás 3–5 évvel</li>
        </ul>
        <a href="/bojler-vizkotelenites-budapest/" class="svc-link">Részletek a vízkőtelenítésről →</a>
      </div>
    </div>
  </div>
</section>

<!-- TÜNETEK / HIBAKÓD BLOKK -->
<section class="section">
  <div class="container">
    <span class="tag tag-fire">Diagnosztika</span>
    <h2 class="sec-title">Bojler Tünetek – Mi Okozza és Mennyibe Kerül?</h2>
    <p class="sec-sub">Ismerje fel a hibát – tudja meg előre a várható javítási költséget.</p>
    <div class="symptom-grid">
      <div class="symptom-card">
        <div class="sym-icon">❄️</div>
        <div class="sym-title">Nem melegít a bojler</div>
        <div class="sym-cause">Ok: elégett fűtőszál, elromlott termosztát, vagy leoldott hőkapcsoló.</div>
        <div class="sym-price">Javítás: 12.000–22.000 Ft</div>
      </div>
      <div class="symptom-card">
        <div class="sym-icon">⚡</div>
        <div class="sym-title">Leveri a biztosítékot</div>
        <div class="sym-cause">Ok: nedves vagy sérült fűtőszál – a szigetelés megsérült, földre szivárog az áram.</div>
        <div class="sym-price">Javítás: 14.000–24.000 Ft</div>
      </div>
      <div class="symptom-card">
        <div class="sym-icon">💧</div>
        <div class="sym-title">Csöpög a biztonsági szelep</div>
        <div class="sym-cause">Ok: elhasználódott szelep vagy túlnyomás a rendszerben. Ne ragassza le!</div>
        <div class="sym-price">Javítás: 8.000–15.000 Ft</div>
      </div>
      <div class="symptom-card">
        <div class="sym-icon">🐌</div>
        <div class="sym-title">Lassan melegít a víz</div>
        <div class="sym-cause">Ok: vastag vízkőréteg szigeteli a fűtőszálat. 5+ mm vízkő = 30–50% hatékonyságveszteség.</div>
        <div class="sym-price">Vízkőtelenítés: 12.000–20.000 Ft</div>
      </div>
      <div class="symptom-card">
        <div class="sym-icon">🦀</div>
        <div class="sym-title">Rozsdás víz folyik</div>
        <div class="sym-cause">Ok: elhasználódott anódrúd – a tartály belülről korrodál. Cserét javasoljuk.</div>
        <div class="sym-price">Csere: 15.000–35.000 Ft</div>
      </div>
      <div class="symptom-card">
        <div class="sym-icon">💥</div>
        <div class="sym-title">Korog, zajos a bojler</div>
        <div class="sym-cause">Ok: vastag vízkőréteg a fűtőszálon – hő hatására "pattog". Sürgős vízkőtelenítést igényel.</div>
        <div class="sym-price">Karbantartás: 12.000–18.000 Ft</div>
      </div>
    </div>
  </div>
</section>

<!-- MÁRKÁK -->
<section class="section section-alt">
  <div class="container">
    <span class="tag tag-fire">Márkák</span>
    <h2 class="sec-title">Ariston és Hajdú Szakszerviz Budapesten</h2>
    <p class="sec-sub">Mindkét vezető márka készülékeit javítjuk és cseréljük – eredeti alkatrészekkel, gyártói előírások szerint.</p>
    <div class="brand-grid">
      <div class="brand-card brand-ariston">
        <div class="brand-header">
          <div class="brand-icon">🔴</div>
          <div>
            <div class="brand-name">Ariston</div>
            <div class="brand-sub">Olasz minőség – modern, helytakarékos</div>
          </div>
        </div>
        <div class="brand-types">
          <a href="/ariston-lydos-bojler-bemutato/" class="btype">Lydos</a>
          <a href="/ariston-velis-bojler-bemutato/" class="btype">Velis</a>
          <a href="/ariston-pro1-eco-bojler-bemutato/" class="btype">Pro1 Eco</a>
          <a href="/ariston-bojler-javitas-budapest/" class="btype">Szerviz →</a>
        </div>
        <ul class="brand-features">
          <li>✓ Lapos, helytakarékos kialakítás</li>
          <li>✓ Időzítős, okos modellek</li>
          <li>✓ Modern fürdőszobába ideális</li>
          <li>✓ Eredeti Ariston alkatrészek raktáron</li>
          <li>✓ E-TECH technológia – energiatakarékos</li>
        </ul>
        <a href="/ariston-bojler-javitas-budapest/" class="brand-link">Ariston szerviz →</a>
      </div>

      <div class="brand-card brand-hajdu">
        <div class="brand-header">
          <div class="brand-icon">🔵</div>
          <div>
            <div class="brand-name">Hajdú</div>
            <div class="brand-sub">Magyar gyártó – tartós, megbízható</div>
          </div>
        </div>
        <div class="brand-types">
          <a href="/hajdu-aquastic-bojler-bemutato/" class="btype">Aquastic</a>
          <a href="/hajdu-z-smart-bojler-bemutato/" class="btype">Z Smart</a>
          <a href="/hajdu-ideallo-bojler-bemutato/" class="btype">Ideallo</a>
          <a href="/hajdu-bojler-csere-budapest/" class="btype">Csere →</a>
        </div>
        <ul class="brand-features">
          <li>✓ Magyar gyártmány – könnyen szervizelhető</li>
          <li>✓ Nagy kapacitás – 80–200 liter</li>
          <li>✓ Kertes házba, nagy fogyasztáshoz</li>
          <li>✓ Eredeti Hajdú alkatrészek raktáron</li>
          <li>✓ Aquastic okos vezérlés lehetséges</li>
        </ul>
        <a href="/hajdu-bojler-csere-budapest/" class="brand-link">Hajdú csere →</a>
      </div>
    </div>
  </div>
</section>

<!-- JAVÍTÁS vs CSERE DÖNTÉSSEGÉD -->
<section class="section">
  <div class="container">
    <span class="tag tag-fire">Döntéssegéd</span>
    <h2 class="sec-title">Javítás vagy Csere? – Így Döntse El</h2>
    <p class="sec-sub">Telefonon is segítünk eldönteni – de íme a szakmai szempontok.</p>
    <div class="decision-grid">
      <div class="dec-card dec-fix">
        <div class="dec-header"><div class="dec-icon">🔧</div><div class="dec-title">Javítás javasolt, ha...</div></div>
        <ul class="dec-list">
          <li>✅ A készülék 7 évnél fiatalabb</li>
          <li>✅ A tartály ép, nem szivárog</li>
          <li>✅ Egyetlen alkatrész hibás</li>
          <li>✅ A javítás ára &lt; csere 40%-a</li>
          <li>✅ Nem folyik rozsdás víz</li>
          <li>✅ Első meghibásodás</li>
        </ul>
        <span class="dec-badge">💰 Megéri javítani</span>
      </div>
      <div class="dec-card dec-replace">
        <div class="dec-header"><div class="dec-icon">🔄</div><div class="dec-title">Csere javasolt, ha...</div></div>
        <ul class="dec-list">
          <li>⚠️ A készülék 12+ éves</li>
          <li>⚠️ Rozsdás vizet ad ki</li>
          <li>⚠️ Szivárog a tartály</li>
          <li>⚠️ Ismételt meghibásodások</li>
          <li>⚠️ Megnőtt energiafelhasználás</li>
          <li>⚠️ Javítás ára &gt; csere 50%-a</li>
        </ul>
        <span class="dec-badge">🔄 Érdemesebb cserélni</span>
      </div>
    </div>
    <p style="margin-top:1.25rem;font-size:.88rem;color:var(--text-light);padding:.75rem 1rem;background:var(--gray-light);border-radius:var(--radius-sm);border-left:3px solid var(--amber)">
      💡 <strong>Nem biztos?</strong> Hívjon minket – <strong><?= $phone ?></strong> – telefonon elmondja a tüneteket, mi megmondjuk megéri-e javítani. Ingyenes tanácsadás.
    </p>
  </div>
</section>

<!-- ÁRAK -->
<section class="section section-alt" id="arak">
  <div class="container">
    <span class="tag tag-fire">Árak 2025</span>
    <h2 class="sec-title">Bojler Javítás és Csere Árak – Budapest 2025</h2>
    <p class="sec-sub">Tájékoztató munkadíjak. Telefonon elmondja a tüneteket – mi megmondjuk a várható költséget.</p>
    <div style="overflow-x:auto;border-radius:var(--radius);box-shadow:var(--shadow-sm)">
      <table class="price-table">
        <thead>
          <tr><th>Elvégzett munka</th><th>Tájékoztató ár</th><th>Megjegyzés</th></tr>
        </thead>
        <tbody>
          <tr><td><a href="/bojler-javitas-budapest/">Fűtőszál csere</a></td><td class="price-col">12.000–20.000 Ft</td><td class="note-col">+ alkatrész</td></tr>
          <tr><td><a href="/bojler-javitas-budapest/">Termosztát csere</a></td><td class="price-col">10.000–18.000 Ft</td><td class="note-col">+ alkatrész</td></tr>
          <tr><td><a href="/bojler-javitas-budapest/">Biztonsági szelep csere</a></td><td class="price-col">8.000–15.000 Ft</td><td class="note-col">+ alkatrész</td></tr>
          <tr><td><a href="/bojler-javitas-budapest/">Biztonsági hőkapcsoló csere</a></td><td class="price-col">10.000–16.000 Ft</td><td class="note-col">+ alkatrész</td></tr>
          <tr><td><a href="/bojler-csere-budapest/">Bojler csere (szerelési díj)</a></td><td class="price-col">15.000–35.000 Ft</td><td class="note-col">+ bojler ára</td></tr>
          <tr><td><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés + anódrúd csere</a></td><td class="price-col">12.000–20.000 Ft</td><td class="note-col">+ alkatrész</td></tr>
          <tr><td><a href="/ariston-bojler-javitas-budapest/">Ariston bojler javítás</a></td><td class="price-col">10.000–28.000 Ft</td><td class="note-col">típustól függ</td></tr>
          <tr><td><a href="/hajdu-bojler-csere-budapest/">Hajdú bojler csere</a></td><td class="price-col">15.000–35.000 Ft</td><td class="note-col">+ bojler ára</td></tr>
        </tbody>
      </table>
    </div>
    <div class="price-note">
      ⚠️ Az árak tájékoztató jellegűek, az anyag/alkatrész külön értendő. Hétvégi és éjszakai kiszállás sürgősségi díjjal.
      Pontos ajánlat: <strong><a href="<?= $phone_link ?>" style="color:var(--fire)"><?= $phone ?></a></strong> vagy
      <a href="/ajanlatkeres/" style="color:var(--fire);font-weight:700">online árajánlat →</a>
    </div>
  </div>
</section>

<!-- MIÉRT MINKET (sötét szekció) -->
<section class="section section-dark">
  <div class="container">
    <span class="tag tag-dark">Miért minket?</span>
    <h2 class="sec-title-white">6 Ok, Amiért Budapesten Minket Hívnak</h2>
    <p class="sec-sub-white">Nem ígérünk olyat amit nem tudunk tartani – ezeket igen.</p>
    <div class="reasons-grid">
      <div class="reason"><div class="reason-num">01</div><h4>⏱ 1–2 Óra Kiszállás</h4><p>Budapest bármely kerületébe – sürgős esetben 1 órán belül megérkezünk.</p></div>
      <div class="reason"><div class="reason-num">02</div><h4>🏷️ Ariston &amp; Hajdú Szakszerviz</h4><p>Nem általános szerelők – ezekre a márkákra specializálódtunk. Raktáron tartott alkatrészek.</p></div>
      <div class="reason"><div class="reason-num">03</div><h4>💰 Ár Telefonon, Nem Helyszínen</h4><p>Elmondja a tüneteket – megmondjuk a várható árat. Helyszínen nem drágul meg a munka.</p></div>
      <div class="reason"><div class="reason-num">04</div><h4>🔒 Törvényes Jótállás</h4><p>Minden javításra és beépített alkatrészre Ptk. szerinti garancia, számlával, írásban.</p></div>
      <div class="reason"><div class="reason-num">05</div><h4>📞 0-24 Elérhetőség</h4><p>Éjjel, hétvégén, ünnepnapon is. A bojler meghibásodás nem vár munkaidőre.</p></div>
      <div class="reason"><div class="reason-num">06</div><h4>🧹 Takarosan Dolgozunk</h4><p>Elvégezzük a munkát, összeszedünk mindent és takarítottan hagyjuk el a helyszínt.</p></div>
    </div>
  </div>
</section>

<!-- FOLYAMAT -->
<section class="section section-alt">
  <div class="container">
    <span class="tag tag-fire">Hogyan dolgozunk</span>
    <h2 class="sec-title">4 Lépés a Meleg Vízhez</h2>
    <p class="sec-sub">Átlátható folyamat – meglepetés nélkül.</p>
    <div class="steps-grid">
      <div class="step"><div class="step-n">1</div><h4>Hívás</h4><p>Leírja a tüneteket, mi megmondjuk a várható árat és a kiszállási időt.</p></div>
      <div class="step"><div class="step-n">2</div><h4>Kiszállás</h4><p>1–2 órán belül megérkezünk – saját alkatrészkészlettel, felszerelve.</p></div>
      <div class="step"><div class="step-n">3</div><h4>Diagnózis</h4><p>Helyszíni vizsgálat, pontos árajánlat – az Ön jóváhagyása után kezdünk.</p></div>
      <div class="step"><div class="step-n">4</div><h4>Javítás + Számla</h4><p>Elvégezzük a munkát, kiállítjuk a számlát, garanciát adunk írásban.</p></div>
    </div>
  </div>
</section>

<!-- VÉLEMÉNYEK -->
<section class="section">
  <div class="container">
    <span class="tag tag-fire">Ügyfélvélemények</span>
    <h2 class="sec-title">143 Elégedett Ügyfél – 4.9 Csillag</h2>
    <p class="sec-sub">Nem mi mondjuk – ők mondják.</p>
    <div class="reviews-grid">
      <div class="review-card">
        <div class="rv-stars">★★★★★</div>
        <p class="rv-text">"Reggel 7-kor nem volt meleg víz. Telefonáltam, délelőtt 10-re új Ariston Lydos működött. Gyors, profi, korrekt ár."</p>
        <div class="rv-author">
          <div class="rv-av">HG</div>
          <div><div class="rv-name">Horváth Gábor</div><div class="rv-loc">Budapest XI. kerület</div></div>
        </div>
      </div>
      <div class="review-card">
        <div class="rv-stars">★★★★★</div>
        <p class="rv-text">"15 éves Hajdú bojleremen vízkőtelenítés és anódrúd csere. Azt mondták megéri még, nem erőltették a cserét. Becsületes szakemberek."</p>
        <div class="rv-author">
          <div class="rv-av">SzK</div>
          <div><div class="rv-name">Szabó Krisztina</div><div class="rv-loc">Budapest II. kerület</div></div>
        </div>
      </div>
      <div class="review-card">
        <div class="rv-stars">★★★★★</div>
        <p class="rv-text">"Leverte a biztosítékot a bojler. Telefonon azonnal megmondták mi lehet a baj. Kiszálltak, fűtőszál csere, 2 óra alatt megoldva."</p>
        <div class="rv-author">
          <div class="rv-av">MI</div>
          <div><div class="rv-name">Molnár István</div><div class="rv-loc">Budapest XIV. kerület</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KERÜLETEK -->
<section class="section section-alt">
  <div class="container">
    <span class="tag tag-fire">Területi lefedettség</span>
    <h2 class="sec-title">Bojler Szerelő Budapest – Minden Kerületbe Kiszállunk</h2>
    <p class="sec-sub">Válassza ki kerületét a helyi elérhetőségért és kiszállási időért.</p>
    <div class="districts-grid">
      <?php for($i=1;$i<=23;$i++): ?>
      <a href="/bojler-szerelo-<?= $i ?>-kerulet/" class="dist-link">Budapest <?= $i ?>. ker.</a>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <span class="tag tag-fire">GYIK</span>
    <h2 class="sec-title">Gyakran Ismételt Kérdések – Bojler Szerelés</h2>
    <p class="sec-sub">AI-ra optimalizált válaszok – ezeket kérdezik leggyakrabban.</p>
    <div class="faq-wrap">
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Miért nem melegít a villanybojler? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">A villanybojler leggyakrabban azért nem melegít, mert <strong>elégett a fűtőszál</strong> (ez a legelterjedtebb hiba, kb. 10–15 évente fordul elő), elromlott a <strong>termosztát</strong> (nem érzékeli a hőmérsékletet), vagy leoldott a <strong>biztonsági hőkapcsoló</strong> túlhevülés miatt. Vastag vízkőréteg esetén lassan melegít ugyan, de egyáltalán nem melegítő bojler szinte mindig a fűtőszál vagy a termosztát hibája.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Mennyibe kerül a bojler javítás Budapesten 2025-ben? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">A bojler javítás munkadíja Budapesten <strong>10.000–28.000 Ft</strong> között mozog 2025-ben, az alkatrész árától függően. Fűtőszál csere: 12.000–20.000 Ft + alkatrész. Termosztát csere: 10.000–18.000 Ft + alkatrész. Biztonsági szelep: 8.000–15.000 Ft + alkatrész. Telefonon pontosabb árajánlatot adunk.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Miért veri le a bojler a biztosítékot? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">Ha a villanybojler leveri a biztosítékot, az szinte biztosan <strong>sérült fűtőszál</strong> miatt van. A fűtőszál szigetelése megrepedezik, víz hatására földre szivárog az áram – ez védelmi kioldást okoz. <strong>Ne használja tovább a bojlert</strong> – elektromos balesetet okozhat. Hívjon szerelőt azonnal: <?= $phone ?>.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Mikor kell bojlert cserélni javítás helyett? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">Bojler cserét javasoljuk ha: a készülék <strong>12 évnél idősebb</strong>, <strong>rozsdás vizet</strong> ad ki (a tartály belülről korrodál), <strong>szivárog a tartály</strong>, vagy az éves javítási költség meghaladja az új bojler árának <strong>40%-át</strong>. 7 évnél fiatalabb, ép tartályú bojlernél általában megéri javítani.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Mennyi ideig tart egy bojler csere Budapesten? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">Egy villanybojler csere általában <strong>2–3 órát</strong> vesz igénybe. Ez tartalmazza a régi bojler leszedését és elszállítását, az új felszerelését, bekötését és a rendszer tömörségi próbáját. Nagy kapacitású (120+ literes) bojler esetén 3–4 óra.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)" aria-expanded="false">
          Milyen garancia van a bojler javításra? <span class="faq-icon">+</span>
        </button>
        <div class="faq-a">Minden elvégzett munkánkra a <strong>Ptk. szerinti jótállást és szavatosságot</strong> biztosítjuk, számlás teljesítéssel, írásban. Az általunk beépített alkatrészekre gyártói garancia vonatkozik.</div>
      </div>
      <p style="margin-top:1rem"><a href="/blog/" style="color:var(--fire);font-weight:700">Tovább a blogra – bojler tippek és útmutatók →</a></p>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <div class="container">
    <h2>Nem Melegít a Bojler? Hívjon Most!</h2>
    <p>0-24, hétvégén is – 1–2 óra kiszállás Budapest minden kerületébe. Ingyenes helyszíni diagnózis.</p>
    <div class="cta-btns">
      <a href="<?= $phone_link ?>" class="btn-cta-main">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="btn-cta-sec" target="_blank" rel="noopener">💬 WhatsApp</a>
      <a href="/ajanlatkeres/" class="btn-cta-sec">📋 Online árajánlat</a>
    </div>
  </div>
</div>

<!-- KAPCSOLAT -->
<section class="section" id="kapcsolat">
  <div class="container">
    <span class="tag tag-fire">Kapcsolat</span>
    <h2 class="sec-title">Visszahívást Kér?</h2>
    <p class="sec-sub">Hagyja meg számát – visszahívjuk, általában 15 percen belül.</p>
    <div class="contact-grid">
      <div class="contact-card">
        <h3>Elérhetőségeink</h3>
        <div class="cc-item"><div class="cc-ico">📞</div><div><span class="cc-lbl">Telefon / WhatsApp / Viber</span><div class="cc-val"><a href="<?= $phone_link ?>"><?= $phone ?></a></div></div></div>
        <div class="cc-item"><div class="cc-ico">🕐</div><div><span class="cc-lbl">Nyitvatartás</span><div class="cc-val">0–24 · Hétfő–Vasárnap</div></div></div>
        <div class="cc-item"><div class="cc-ico">✉️</div><div><span class="cc-lbl">E-mail</span><div class="cc-val"><a href="mailto:<?= $email ?>"><?= $email ?></a></div></div></div>
        <div class="cc-item"><div class="cc-ico">📍</div><div><span class="cc-lbl">Cím</span><div class="cc-val">1191 Budapest, Hamvas u. 7-9.</div></div></div>
        <div class="contact-btns">
          <a href="<?= $wa_link ?>" target="_blank" rel="noopener" class="cbtn cbtn-wa">💬 WhatsApp</a>
          <a href="<?= $viber_link ?>" class="cbtn cbtn-vb">📲 Viber</a>
        </div>
      </div>
      <div class="form-card">
        <h3>Visszahívás Kérése</h3>
        <div id="fs"><div class="fi">✅</div><h4 style="color:var(--green)">Köszönjük! Hamarosan hívjük.</h4><p style="font-size:.88rem">Sürgős: <a href="<?= $phone_link ?>" style="color:var(--fire);font-weight:700"><?= $phone ?></a></p></div>
        <form id="cbform" onsubmit="submitCb(event)">
          <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
          <div class="fg"><label for="nev">Neve *</label><input type="text" id="nev" name="name" placeholder="pl. Kovács János" required></div>
          <div class="fg"><label for="tel">Telefonszám *</label><input type="tel" id="tel" name="phone" placeholder="pl. 06 30 123 4567" required></div>
          <div class="fg"><label for="leiras">Bojler tünete (opcionális)</label><textarea id="leiras" name="message" placeholder="pl. Nem melegít, reggel óta nincs meleg víz..."></textarea></div>
          <button type="submit" class="btn-submit">📨 Visszahívás kérése</button>
          <p class="form-note">* Kötelező. Adatait bizalmasan kezeljük. <a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a></p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="footer-main">
    <div class="footer-brand">
      <div class="footer-logo">🔥 Provi Domus Kft.</div>
      <p>Bojler szerelő Budapest területén 2011 óta. Villanybojler javítás, csere, vízkőtelenítés – Ariston &amp; Hajdú szakszerviz, 0-24, garanciával.</p>
      <div class="f-contact-row">📞 <a href="<?= $phone_link ?>"><?= $phone ?></a> &nbsp;(0–24)</div>
      <div class="f-contact-row">✉️ <a href="mailto:<?= $email ?>"><?= $email ?></a></div>
      <div class="f-contact-row">📍 1191 Budapest, Hamvas utca 7-9.</div>
    </div>
    <div>
      <div class="f-heading">Szolgáltatások</div>
      <ul class="f-links">
        <li><a href="/bojler-javitas-budapest/">Bojler javítás</a></li>
        <li><a href="/bojler-csere-budapest/">Bojler csere</a></li>
        <li><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
        <li><a href="/ariston-lydos-bojler-bemutato/">Ariston Lydos</a></li>
        <li><a href="/ariston-velis-bojler-bemutato/">Ariston Velis</a></li>
        <li><a href="/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a></li>
        <li><a href="/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a></li>
        <li><a href="/hajdu-z-smart-bojler-bemutato/">Hajdú Z Smart</a></li>
        <li><a href="/hajdu-ideallo-bojler-bemutato/">Hajdú Ideallo</a></li>
      </ul>
    </div>
    <div>
      <div class="f-heading">Budapest kerületek</div>
      <ul class="f-links">
        <?php for($i=1;$i<=12;$i++): ?>
        <li><a href="/bojler-szerelo-<?= $i ?>-kerulet/">Budapest <?= $i ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
    </div>
    <div>
      <div class="f-heading">Kerületek (folyt.)</div>
      <ul class="f-links">
        <?php for($i=13;$i<=23;$i++): ?>
        <li><a href="/bojler-szerelo-<?= $i ?>-kerulet/">Budapest <?= $i ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
      <div class="f-heading" style="margin-top:1.5rem">Információk</div>
      <ul class="f-links">
        <li><a href="/ajanlatkeres/">Árajánlat kérés</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/kapcsolat/">Kapcsolat</a></li>
        <li><a href="/impresszum/">Impresszum</a></li>
        <li><a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a></li>
        <li><a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a></li>
        <li><a href="/sitemap.xml">Sitemap</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Bojler Szerelő Budapest</span>
    <div class="footer-bottom-links">
      <a href="/impresszum/">Impresszum</a>
      <a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a>
      <a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a>
    </div>
  </div>
</footer>

<!-- LEBEGŐ GOMBOK -->
<a href="<?= $wa_link ?>" class="float-wa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
<a href="<?= $phone_link ?>" class="float-call" aria-label="Hívás">📞 <?= $phone ?></a>

<script>
function toggleFaq(btn){
  var item=btn.parentElement;
  var open=item.classList.contains('open');
  document.querySelectorAll('.faq-item.open').forEach(function(el){el.classList.remove('open');el.querySelector('.faq-q').setAttribute('aria-expanded','false')});
  if(!open){item.classList.add('open');btn.setAttribute('aria-expanded','true')}
}
function submitCb(e){
  e.preventDefault();
  var f=document.getElementById('cbform');
  if(f.querySelector('[name="website"]').value)return;
  fetch('/kapcsolat/form-handler.php',{
    method:'POST',headers:{'Content-Type':'application/json'},
    body:JSON.stringify({name:f.querySelector('[name="name"]').value,phone:f.querySelector('[name="phone"]').value,message:f.querySelector('[name="message"]').value})
  }).finally(function(){f.style.display='none';document.getElementById('fs').style.display='block'});
}
(function(){
  var h=document.querySelector('.site-header');
  window.addEventListener('scroll',function(){h.style.boxShadow=scrollY>30?'0 3px 20px rgba(0,0,0,.5)':'0 2px 16px rgba(0,0,0,.4)';},{passive:true});
})();
</script>
</body>
</html>

