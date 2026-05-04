<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Bojler+cser%C3%A9t+szeretn%C3%A9k+k%C3%A9rni.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Csere Budapest – Új Bojler Beszerelése 1-2 Óra | Provi Domus Kft.</title>
<meta name="description" content="Bojler csere Budapesten gyorsan és megbízhatóan. Ariston Lydos, Hajdú Aquastic, Atlantic, Drazice felszerelése – régi bojler elszállítással. Garancia, számla, 0-24.">
<meta name="keywords" content="bojler csere budapest, villanybojler csere, új bojler beszerelés, ariston bojler csere, hajdú bojler csere, bojler felszerelés budapest">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/bojler-csere-budapest/">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Bojler Csere Budapest",
      "url": "<?= $base ?>/bojler-csere-budapest/",
      "telephone": "+36701644000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": {"@type": "City", "name": "Budapest"},
      "priceRange": "15000-35000 HUF",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "143",
        "bestRating": "5"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Bojler Csere Szolgáltatások",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Bojler csere (munkadíj)"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "15000", "maxPrice": "25000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ariston Lydos 80L"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "65000", "maxPrice": "75000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Hajdú Aquastic 80L"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "55000", "maxPrice": "65000", "priceCurrency": "HUF"}}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mennyibe kerül a bojler csere Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "A bojler csere összköltség függ az új bojler árától és a munkadíjtól. A munkadíj 15.000–25.000 Ft (tartalmazza a régi elbontását, az új felszerelését, csatlakozások elkészítését). Az Ariston Lydos 80L ára kb. 50.000–60.000 Ft, a Hajdú Aquastic 80L ára kb. 40.000–50.000 Ft. Régi bojler elszállítása az árban bennfoglalt."}
        },
        {
          "@type": "Question",
          "name": "Mikor kell bojlert cserélni?",
          "acceptedAnswer": {"@type": "Answer", "text": "Bojlert cserélni érdemes: (1) ha 15 évnél idősebb és meghibásodik, (2) ha a tank belső fala korrodálódott és nem javítható, (3) ha az energiahatékonyság lényegesen romlott, (4) ha az alkatrészek már nem kaphatók. Az új energiahatékony bojlerek akár 30-40%-kal kevesebb áramot fogyasztanak."}
        },
        {
          "@type": "Question",
          "name": "Mekkora bojler kell egy 2-3 személyes lakásba?",
          "acceptedAnswer": {"@type": "Answer", "text": "2-3 személyes lakásba általában 80 literes bojler elegendő. 1-2 személynek 50-80 L, 3-4 személynek 80-100 L, 4+ személynek 100-150 L ajánlott. Fürdőkád esetén érdemes 100 literes bojlert választani, hogy egy feltöltéssel teli kád elegendő legyen."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Bojler Csere Budapest", "item": "<?= $base ?>/bojler-csere-budapest/"}
      ]
    }
  ]
}
</script>

<link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="float-btns">
  <a href="<?= $phone_link ?>" class="float-btn phone" title="Hívjon most">📞</a>
  <a href="<?= $wa_link ?>" class="float-btn wa" title="WhatsApp" target="_blank">💬</a>
</div>

<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo"><a href="<?= $base ?>/"><span>🔥</span> Bojler Szerelő Budapest</a></div>
    <nav>
      <a href="<?= $base ?>/">Főoldal</a>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="active">Bojler csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú</a>
      <a href="<?= $base ?>/blog/">Blog</a>
      <a href="<?= $base ?>/ajanlatkeres/">Árajánlat</a>
      <a href="<?= $base ?>/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü"><span></span><span></span><span></span></label>
  </div>
</header>

<div class="urgency-bar">
  🔄 BOJLER CSERE – 1-2 ÓRA KISZÁLLÁS – RÉGI BOJLER ELSZÁLLÍTÁSSAL →
  <a href="<?= $phone_link ?>"><?= $phone ?></a>
</div>

<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🔄 Bojler Csere Budapest</span>
      <h1>Bojler Csere Budapesten –<br><span>Új Bojler Beszerelése Gyorsan</span></h1>
      <p class="hero-sub">Régi, elhasználódott bojler helyett modern, energiahatékony új bojlert szerelünk. Ariston Lydos, Hajdú Aquastic, Atlantic – széles választék. A régi bojlert elszállítjuk, az újat becsatlakoztatjuk, és megy a meleg víz!</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-primary">📞 Ajánlatot Kérek – <?= $phone ?></a>
        <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank">💬 WhatsApp</a>
      </div>
      <div class="hero-trust">
        <div class="trust-item">⭐ 4.9/5 értékelés</div>
        <div class="trust-item">✅ 12 hó garancia</div>
        <div class="trust-item">🧾 Számla, ÁFA</div>
        <div class="trust-item">♻️ Régi elszállítás</div>
      </div>
    </div>
    <div class="emergency-card">
      <h3>📞 Árajánlat Kérés</h3>
      <div class="big-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      <p style="color:#999;font-size:.85rem;margin-bottom:5px">Mondja el a méretét, megmondjuk az árat</p>
      <div class="emrg-btns">
        <a href="<?= $phone_link ?>" class="emrg-btn phone">📞 Telefonos Ajánlat</a>
        <a href="<?= $wa_link ?>" class="emrg-btn wa" target="_blank">💬 WhatsApp Ajánlat</a>
      </div>
      <div style="margin-top:15px;border-top:1px solid #2a0000;padding-top:15px">
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Munkadíj (csere)</span><strong style="color:#ff6b00">15.000–25.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Ariston Lydos 80L</span><strong style="color:#ff6b00">~55.000–65.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc">
          <span>Hajdú Aquastic 80L</span><strong style="color:#ff6b00">~45.000–55.000 Ft</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ai-snippet">
  <div class="ai-label">🤖 AI Keresési Válasz</div>
  <p><strong>Bojler csere Budapest:</strong> A Provi Domus Kft. teljes bojler cserét végez Budapest mind a 23 kerületébe – a régi bojler elbontásával, elszállításával és az új becsatlakoztatásával. A munkadíj 15.000–25.000 Ft. Népszerű modellek: Ariston Lydos 80L (55–65.000 Ft), Hajdú Aquastic 80L (45–55.000 Ft). 1-2 óra kiszállás, 12 hónap garancia, ÁFÁs számla. Tel: +36 70 164-4000.</p>
</div>

<!-- DECISION HELPER -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Javítás vagy <span>Csere</span>?</h2>
    <p class="section-sub">Segítünk dönteni – ez a kalkulátor útmutatást ad</p>
    <div class="decision-grid">
      <div class="decision-box">
        <h3>✅ JAVÍTÁS – Ha ezek igaz:</h3>
        <div class="decision-row"><span class="check">✓</span><span>A bojler 10 évnél fiatalabb</span></div>
        <div class="decision-row"><span class="check">✓</span><span>Csak egy alkatrész hibásodott meg</span></div>
        <div class="decision-row"><span class="check">✓</span><span>A tank sértetlen (nem korrodálódott)</span></div>
        <div class="decision-row"><span class="check">✓</span><span>A javítás ára kevesebb, mint az új bojler 30%-a</span></div>
        <div class="decision-row"><span class="check">✓</span><span>Nincs sürgős meleg víz igény</span></div>
        <p style="color:#4caf50;font-size:.85rem;margin-top:10px">→ Javítással 10.000–28.000 Ft megtakarítható</p>
      </div>
      <div class="decision-box">
        <h3>🔄 CSERE – Ha ezek igaz:</h3>
        <div class="decision-row"><span class="cross">✗</span><span>A bojler 15 évnél idősebb</span></div>
        <div class="decision-row"><span class="cross">✗</span><span>A tank belső fala korrodálódott</span></div>
        <div class="decision-row"><span class="cross">✗</span><span>Ismétlődő meghibásodások, rendszeres javítgatás</span></div>
        <div class="decision-row"><span class="cross">✗</span><span>Alkatrészek már nem kaphatók</span></div>
        <div class="decision-row"><span class="cross">✗</span><span>Feltűnően magas villanyszámla (rossz hatásfok)</span></div>
        <p style="color:#ff6b00;font-size:.85rem;margin-top:10px">→ Új energiahatékony bojler 3-5 év alatt megtérül</p>
      </div>
    </div>
  </div>
</section>

<!-- BOJLER MODELS -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ajánlott <span>Bojler Modellek</span></h2>
    <p class="section-sub">Az általunk leggyakrabban beépített, megbízható modellek</p>
    <div class="bojler-grid">
      <div class="bojler-card">
        <div class="bojler-card-head">
          <div class="bojler-brand">Ariston</div>
          <h3>Ariston Lydos R 80V</h3>
        </div>
        <div class="bojler-card-body">
          <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,5 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">B</span></div>
          <div class="spec-row"><span class="label">Garancia</span><span class="val">2 év</span></div>
          <div class="spec-row"><span class="label">Ideális</span><span class="val">2-3 személynek</span></div>
        </div>
        <div class="bojler-price">
          <span class="from">Ár (készülék+beépítés):</span>
          <span class="amount">~70.000–80.000 Ft</span>
        </div>
        <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="detail-link">→ Ariston Lydos részletek</a>
      </div>
      <div class="bojler-card">
        <div class="bojler-card-head">
          <div class="bojler-brand">Ariston</div>
          <h3>Ariston Velis Evo 80</h3>
        </div>
        <div class="bojler-card-body">
          <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,5 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">A</span></div>
          <div class="spec-row"><span class="label">Garancia</span><span class="val">2 év</span></div>
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">WiFi okoseszköz</span></div>
        </div>
        <div class="bojler-price">
          <span class="from">Ár (készülék+beépítés):</span>
          <span class="amount">~90.000–105.000 Ft</span>
        </div>
        <a href="<?= $base ?>/ariston-velis-bojler-bemutato/" class="detail-link">→ Ariston Velis részletek</a>
      </div>
      <div class="bojler-card">
        <div class="bojler-card-head">
          <div class="bojler-brand">Hajdú</div>
          <h3>Hajdú Aquastic AQ80 ErP</h3>
        </div>
        <div class="bojler-card-body">
          <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">2,0 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">B</span></div>
          <div class="spec-row"><span class="label">Garancia</span><span class="val">2 év</span></div>
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">Magyar gyártás</span></div>
        </div>
        <div class="bojler-price">
          <span class="from">Ár (készülék+beépítés):</span>
          <span class="amount">~60.000–70.000 Ft</span>
        </div>
        <a href="<?= $base ?>/hajdu-aquastic-bojler-bemutato/" class="detail-link">→ Hajdú Aquastic részletek</a>
      </div>
      <div class="bojler-card">
        <div class="bojler-card-head">
          <div class="bojler-brand">Hajdú</div>
          <h3>Hajdú Z Smart 80</h3>
        </div>
        <div class="bojler-card-body">
          <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">2,0 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">A</span></div>
          <div class="spec-row"><span class="label">Garancia</span><span class="val">3 év</span></div>
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">WiFi vezérlés</span></div>
        </div>
        <div class="bojler-price">
          <span class="from">Ár (készülék+beépítés):</span>
          <span class="amount">~80.000–95.000 Ft</span>
        </div>
        <a href="<?= $base ?>/hajdu-z-smart-bojler-bemutato/" class="detail-link">→ Hajdú Z Smart részletek</a>
      </div>
    </div>
  </div>
</section>

<!-- PRICE TABLE -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Bojler Csere <span>Árak 2025</span></h2>
    <p class="section-sub">Munkadíj + készülék ár – a kiszállás az árban bennfoglalt</p>
    <table class="price-table">
      <thead>
        <tr><th>Csomag</th><th>Tartalmaz</th><th class="price-col">Összár (Ft)</th><th>Határidő</th></tr>
      </thead>
      <tbody>
        <tr><td><strong>Csak munkadíj</strong> (saját bojlerrel)</td><td>Régi elbontás, elszállítás, új becsatlakoztatás</td><td class="price-col">15.000–25.000</td><td>1-2 óra</td></tr>
        <tr><td><strong>Hajdú Aquastic 80L</strong></td><td>Készülék + beépítés + régi elszállítás</td><td class="price-col">60.000–70.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Ariston Lydos 80L</strong></td><td>Készülék + beépítés + régi elszállítás</td><td class="price-col">70.000–80.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Hajdú Z Smart 80L</strong></td><td>Készülék + beépítés + WiFi beállítás</td><td class="price-col">80.000–95.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Ariston Velis Evo 80L</strong></td><td>Készülék + beépítés + app beállítás</td><td class="price-col">90.000–105.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Ariston Pro1 Eco 100L</strong></td><td>Készülék + beépítés (prémium energiaosztály)</td><td class="price-col">110.000–130.000</td><td>3-4 óra</td></tr>
      </tbody>
    </table>
    <p style="color:#888;font-size:.82rem">* Az árak tájékoztató jellegűek. A régi bojler elszállítása minden csomagban szerepel. Pontos árat telefonon adunk.</p>
  </div>
</section>

<!-- STEPS -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Bojler Csere <span>Folyamata</span></h2>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-num">1</div>
        <h3>Felmérés</h3>
        <p>Telefonon kérdezünk a jelenlegi bojlerről és igényekről</p>
      </div>
      <div class="step-card">
        <div class="step-num">2</div>
        <h3>Ajánlat</h3>
        <p>Javasolt modell és pontos ár – Ön dönt</p>
      </div>
      <div class="step-card">
        <div class="step-num">3</div>
        <h3>Kiszállás</h3>
        <p>Meghozott bojlerrel érkezünk – 1-2 óra kiszállás</p>
      </div>
      <div class="step-card">
        <div class="step-num">4</div>
        <h3>Csere</h3>
        <p>Régi elbontás, elszállítás, új becsatlakoztatás</p>
      </div>
      <div class="step-card">
        <div class="step-num">5</div>
        <h3>Tesztelés</h3>
        <p>Próbaüzem, hőmérséklet beállítás, minden rendben</p>
      </div>
      <div class="step-card">
        <div class="step-num">6</div>
        <h3>Garancia</h3>
        <p>12 hó garancia + ÁFÁs számla a helyszínen</p>
      </div>
    </div>
  </div>
</section>

<!-- TRUST -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Miért <span>Minket Válasszon</span>?</h2>
    <div class="trust-grid">
      <div class="trust-card"><div class="t-icon">🏭</div><h3>Gyártói Alkatrész</h3><p>Csak eredeti Ariston, Hajdú alkatrészekkel dolgozunk</p></div>
      <div class="trust-card"><div class="t-icon">♻️</div><h3>Elszállítás</h3><p>A régi bojlert szabályosan elszállítjuk és ártalmatlanítjuk</p></div>
      <div class="trust-card"><div class="t-icon">⚡</div><h3>Gyors Csere</h3><p>2-3 óra alatt kész – aznap van meleg víz</p></div>
      <div class="trust-card"><div class="t-icon">💰</div><h3>Legjobb Ár</h3><p>Versenyképes árak, nincs rejtett díj</p></div>
      <div class="trust-card"><div class="t-icon">🔧</div><h3>13 Év Tapasztalat</h3><p>2011 óta több mint 2.800 bojler cserét végeztünk</p></div>
      <div class="trust-card"><div class="t-icon">📋</div><h3>Garancialevél</h3><p>Írásban, bélyegzővel – minden elvégzett munkára</p></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Bojler Csere <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mennyibe kerül a bojler csere Budapesten 2025-ben?</div>
        <div class="faq-a">A bojler csere összköltség: munkadíj 15.000–25.000 Ft + az új bojler ára. Ariston Lydos 80L: 70.000–80.000 Ft összesen (készülék + beépítés + régi elszállítás). Hajdú Aquastic 80L: 60.000–70.000 Ft összesen. A kiszállás díja a csomagban bennfoglalt Budapest területén.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Meddig tart a bojler csere?</div>
        <div class="faq-a">A bojler csere a régi elbontásával, az új becsatlakoztatásával és próbaüzemmel együtt általában 2-3 óra. Ha a vízcsatlakozások módosítást igényelnek (pl. más pozícióba kerül a bojler), az 4-5 óráig is tarthat.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Elviszike a régi bojlert?</div>
        <div class="faq-a">Igen, minden csomag tartalmazza a régi bojler elbontását és elszállítását. A régi bojlert megfelelő környezetvédelmi előírások szerint adjuk le a hulladékkezelőnek. Önnek semmi dolga nincs a régi bojlerrel.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mekkora bojler kell egy 2-3 személyes lakásba?</div>
        <div class="faq-a">2-3 személynek általában 80 literes bojler elegendő. Ha van fürdőkád is, inkább 100 literes ajánlott, hogy teli kád melegítésre is elegen legyen. 1 személynek 50 liter is elég, 4+ személynek 100-150 liter javasolt.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Ariston vagy Hajdú bojlert válasszak?</div>
        <div class="faq-a">Mindkét márka megbízható és jó minőségű. Az Ariston bojlerek (Lydos, Velis) általában kicsit drágábbak, de prémium minőségű fűtőszálat és jobb hőszigetelést kínálnak. A Hajdú bojlerek (Aquastic, Z Smart) hazai gyártású, kiváló ár-érték arányú termékek. A WiFi vezérléses modellek (Velis, Z Smart) okostelefonról hangolhatók.</div>
      </div>
    </div>
  </div>
</section>

<!-- DISTRICTS -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Bojler Csere <span>Minden Kerületbe</span></h2>
    <div class="district-grid">
      <?php
      $keruletek = [
        1=>'I. ker.', 2=>'II. ker.', 3=>'III. ker.', 4=>'IV. ker.', 5=>'V. ker.',
        6=>'VI. ker.', 7=>'VII. ker.', 8=>'VIII. ker.', 9=>'IX. ker.', 10=>'X. ker.',
        11=>'XI. ker.', 12=>'XII. ker.', 13=>'XIII. ker.', 14=>'XIV. ker.', 15=>'XV. ker.',
        16=>'XVI. ker.', 17=>'XVII. ker.', 18=>'XVIII. ker.', 19=>'XIX. ker.', 20=>'XX. ker.',
        21=>'XXI. ker.', 22=>'XXII. ker.', 23=>'XXIII. ker.'
      ];
      foreach($keruletek as $n => $nev):
      ?>
      <a href="<?= $base ?>/bojler-szerelo-<?= $n ?>-kerulet/" class="district-link"><?= $nev ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Kapcsolódó <span>Szolgáltatások</span></h2>
    <div class="related-grid">
      <a href="<?= $base ?>/bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔧</span><span>Bojler Javítás Budapest</span></a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/" class="related-link"><span class="r-icon">🫧</span><span>Vízkőtelenítés</span></a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔵</span><span>Ariston Szerviz</span></a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/" class="related-link"><span class="r-icon">🟠</span><span>Hajdú Szerviz</span></a>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="related-link"><span class="r-icon">📘</span><span>Ariston Lydos</span></a>
      <a href="<?= $base ?>/hajdu-aquastic-bojler-bemutato/" class="related-link"><span class="r-icon">📙</span><span>Hajdú Aquastic</span></a>
    </div>
  </div>
</section>

<div class="cta-banner">
  <h2>Régi Bojler Cseréje?</h2>
  <p>Hívjon – megmondjuk a legjobb modellt és az árat!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?> – Ajánlatot Kérek</a>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p style="color:#555;font-size:.85rem">Provi Domus Kft. – bojler csere és javítás 2011 óta.</p>
      <p style="color:#555;font-size:.82rem;margin-top:8px">📍 Hamvas utca 7-9, Budapest 1191</p>
    </div>
    <div class="footer-col">
      <h4>Szolgáltatások</h4>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler Javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler Csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston Szerviz</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú Szerviz</a>
    </div>
    <div class="footer-col">
      <h4>Márkák</h4>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/">Ariston Lydos</a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/">Ariston Velis</a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a>
      <a href="<?= $base ?>/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a>
      <a href="<?= $base ?>/hajdu-z-smart-bojler-bemutato/">Hajdú Z Smart</a>
    </div>
    <div class="footer-col">
      <h4>Kerületek</h4>
      <a href="<?= $base ?>/bojler-szerelo-1-kerulet/">I. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-11-kerulet/">XI. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-13-kerulet/">XIII. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-14-kerulet/">XIV. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23 kerület</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Bojler Csere Budapest.</span>
    <span>📞 <a href="<?= $phone_link ?>" style="color:#ff6b00"><?= $phone ?></a></span>
  </div>
</footer>

<script>
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => q.parentElement.classList.toggle('open'));
});
</script>
</body>
</html>
