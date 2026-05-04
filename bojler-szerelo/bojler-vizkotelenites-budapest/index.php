<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+V%C3%ADzk%C5%91telen%C3%ADt%C3%A9st+szeretn%C3%A9k+k%C3%A9rni.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Vízkőtelenítés Budapest – Teljes Szerviz | Provi Domus Kft.</title>
<meta name="description" content="Bojler vízkőtelenítés Budapesten – hangos bojler, lassú melegítés, magas villanyszámla? Vegyszeres és mechanikus vízkőtelenítés + anódrúd csere. 1-2 óra kiszállás, garancia.">
<meta name="keywords" content="bojler vízkőtelenítés budapest, bojler hangos, bojler lassú melegítés, villanybojler tisztítás, anódrúd csere, bojler szerviz budapest">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/bojler-vizkotelenites-budapest/">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Bojler Vízkőtelenítés Budapest",
      "url": "<?= $base ?>/bojler-vizkotelenites-budapest/",
      "telephone": "+36701644000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": {"@type": "City", "name": "Budapest"},
      "priceRange": "12000-20000 HUF",
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
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mennyibe kerül a bojler vízkőtelenítés Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "A bojler vízkőtelenítés ára 12.000–18.000 Ft (munkadíj + vegyszer). Ha anódrúd csere is szükséges (ami minden szervizhez ajánlott), az további 3.000–5.000 Ft. A teljes szervizcsomag (vízkőtelenítés + anódrúd + tömítés csere) 18.000–25.000 Ft."}
        },
        {
          "@type": "Question",
          "name": "Milyen gyakran kell vízkőteleníteni a bojlert?",
          "acceptedAnswer": {"@type": "Answer", "text": "Budapest kemény vizű város – átlagosan 2-3 évente ajánlott a bojler vízkőtelenítése. Ha a bojler hangos (robog, sisterg melegítéskor), ha lassabban melegít, vagy ha a villanyszámla emelkedett, az jelzi, hogy ideje a vízkőtelenítésnek."}
        },
        {
          "@type": "Question",
          "name": "Meg lehet-e hosszabbítani a bojler élettartamát vízkőtelenítéssel?",
          "acceptedAnswer": {"@type": "Answer", "text": "Igen, a rendszeres vízkőtelenítés és anódrúd csere akár 5-10 évvel meghosszabbíthatja a bojler élettartamát. A vízkő szigetelőként hat a fűtőszálon, ami túlmelegedéshez és korai tönkremenetelhez vezet. Az anódrúd csere megakadályozza a tank belső falának korrodálódását."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Bojler Vízkőtelenítés Budapest", "item": "<?= $base ?>/bojler-vizkotelenites-budapest/"}
      ]
    }
  ]
}
</script>

<link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="float-btns">
  <a href="<?= $phone_link ?>" class="float-btn phone">📞</a>
  <a href="<?= $wa_link ?>" class="float-btn wa" target="_blank">💬</a>
</div>

<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo"><a href="<?= $base ?>/"><span>🔥</span> Bojler Szerelő Budapest</a></div>
    <nav>
      <a href="<?= $base ?>/">Főoldal</a>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/" class="active">Vízkőtelenítés</a>
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
  🫧 BOJLER VÍZKŐTELENÍTÉS BUDAPEST – ANÓDRÚD CSERÉVEL – 1-2 ÓRA KISZÁLLÁS →
  <a href="<?= $phone_link ?>"><?= $phone ?></a>
</div>

<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🫧 Vízkőtelenítés Budapest</span>
      <h1>Bojler Vízkőtelenítés –<br><span>Hangos Bojler Csendben</span></h1>
      <p class="hero-sub">Robog, sisterg a bojler melegítéskor? Lassabban melegít, mint régen? Nőtt a villanyszámla? Vízkőtelenítéssel és anódrúd cserével a bojler újra csendesen és hatékonyan melegít – és akár 10 évvel meghosszabbítja az élettartamát!</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-primary">📞 Hívjon Most – <?= $phone ?></a>
        <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank">💬 WhatsApp</a>
      </div>
      <div class="hero-trust">
        <div class="trust-item">⭐ 4.9/5 értékelés</div>
        <div class="trust-item">✅ 12 hó garancia</div>
        <div class="trust-item">🧾 Számla, ÁFA</div>
        <div class="trust-item">📅 2011 óta</div>
      </div>
    </div>
    <div class="emergency-card">
      <h3>🫧 Vízkőtelenítés Árak</h3>
      <div class="big-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      <p style="color:#999;font-size:.85rem;margin-bottom:10px">Telefonon pontos árat adunk</p>
      <div class="emrg-btns">
        <a href="<?= $phone_link ?>" class="emrg-btn phone">📞 Hívjon Most</a>
        <a href="<?= $wa_link ?>" class="emrg-btn wa" target="_blank">💬 WhatsApp</a>
      </div>
      <div style="margin-top:15px;border-top:1px solid #2a0000;padding-top:15px">
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Vízkőtelenítés</span><strong style="color:#ff6b00">12.000–18.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Anódrúd csere</span><strong style="color:#ff6b00">+3.000–5.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc">
          <span>Teljes szerviz</span><strong style="color:#ff6b00">18.000–25.000 Ft</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ai-snippet">
  <div class="ai-label">🤖 AI Keresési Válasz</div>
  <p><strong>Bojler vízkőtelenítés Budapest:</strong> Budapest kemény vize miatt 2-3 évente ajánlott a bojler vízkőtelenítése. A Provi Domus Kft. vegyszeres és mechanikus vízkőtelenítést végez, anódrúd cserével, 12.000–18.000 Ft-tól. Ha a bojler hangos melegítéskor, lassabban melegít, vagy nőtt a villanyszámla – vízkőtelenítés szükséges. Tel: +36 70 164-4000. Kiszállás 1-2 óra.</p>
</div>

<!-- STATS -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Miért <span>Probléma a Vízkő</span>?</h2>
    <p class="section-sub">Budapest víze kemény – a lerakódás komoly kárt okoz</p>
    <div class="vizkő-stats">
      <div class="stat-card">
        <span class="big-num">3mm</span>
        <p>Vízkőréteg a fűtőszálon = 25%-kal több áramfogyasztás</p>
      </div>
      <div class="stat-card">
        <span class="big-num">2-3x</span>
        <p>Gyorsabb fűtőszál elhasználódás vastag vízkőrétegnél</p>
      </div>
      <div class="stat-card">
        <span class="big-num">+40%</span>
        <p>Átlagos villanyköltség növekedés elhanyagolt bojlernél</p>
      </div>
      <div class="stat-card">
        <span class="big-num">10 év</span>
        <p>Mennyivel meghosszabbítható a bojler élete rendszeres karbantartással</p>
      </div>
    </div>
  </div>
</section>

<!-- SYMPTOMS -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Mikor Kell <span>Vízkőtelenítés</span>?</h2>
    <p class="section-sub">Ezek a jelek mutatják, hogy ideje a szerviznek</p>
    <div class="symptoms-grid">
      <div class="symptom-card">
        <div class="s-icon">🔊</div>
        <h3>Hangos, robogó bojler</h3>
        <p>Melegítés közben erős robogás, sistergés, kattogás – a vízkő izzó rétege okozza a hangot a fűtőszálon.</p>
      </div>
      <div class="symptom-card">
        <div class="s-icon">⏱️</div>
        <h3>Lassabb melegítés</h3>
        <p>A bojler ugyanannyi idő alatt kevesebb meleg vizet ad, mint régen – a vízkő szigetel és gátolja a hőátadást.</p>
      </div>
      <div class="symptom-card">
        <div class="s-icon">💡</div>
        <h3>Megnőtt villanyszámla</h3>
        <p>Ha észrevette, hogy a villanyszámla emelkedett anélkül, hogy más fogyasztó változott volna – a bojler vízkövesedhet.</p>
      </div>
      <div class="symptom-card">
        <div class="s-icon">🦠</div>
        <h3>Bűzös, rozsdás víz</h3>
        <p>A meleg víznek kellemetlen szaga van vagy rozsdás – az anódrúd elhasználódott, korrózió indult a tartályban.</p>
      </div>
      <div class="symptom-card">
        <div class="s-icon">📅</div>
        <h3>Több mint 2-3 év szerviz nélkül</h3>
        <p>Budapest kemény vize miatt 2-3 évente szükséges a vízkőtelenítés, még ha látható tünet nincs is.</p>
      </div>
      <div class="symptom-card">
        <div class="s-icon">🔧</div>
        <h3>Ismétlődő fűtőszál hiba</h3>
        <p>Ha rendszeresen cserélni kell a fűtőszálat – a vízkő okozza a korai meghibásodást. Vízkőtelenítés nélkül hamar újra tönkremegy.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Folyamata</span></h2>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-num">1</div>
        <h3>Diagnózis</h3>
        <p>Megvizsgáljuk a bojlert, leürítjük és megmérjük a vízkőréteg vastagságát</p>
      </div>
      <div class="step-card">
        <div class="step-num">2</div>
        <h3>Fűtőszál kivétel</h3>
        <p>A fűtőszálat kivesszük a tankból és megvizsgáljuk az állapotát</p>
      </div>
      <div class="step-card">
        <div class="step-num">3</div>
        <h3>Vegyszeres tisztítás</h3>
        <p>Citromsavas áztatás + mechanikus tisztítás – a vízkő teljesen eltávolítódik</p>
      </div>
      <div class="step-card">
        <div class="step-num">4</div>
        <h3>Anódrúd csere</h3>
        <p>A magnéziumanód cseréje megakadályozza a tank korrózióját</p>
      </div>
      <div class="step-card">
        <div class="step-num">5</div>
        <h3>Tömítések</h3>
        <p>Fűtőszál tömítés, kar tömítés csere – szivárgásmentesen visszaszerelve</p>
      </div>
      <div class="step-card">
        <div class="step-num">6</div>
        <h3>Próbaüzem</h3>
        <p>Töltés, nyomáspróba, melegítési teszt – minden rendben, megy a meleg víz</p>
      </div>
    </div>
  </div>
</section>

<!-- PRICES -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Árak 2025</span></h2>
    <table class="price-table">
      <thead>
        <tr><th>Szolgáltatás</th><th>Tartalmaz</th><th class="price-col">Ár (Ft)</th><th>Idő</th></tr>
      </thead>
      <tbody>
        <tr><td><strong>Vízkőtelenítés alap</strong></td><td>Fűtőszál tisztítás, vegyszeres kezelés, visszaszerelés</td><td class="price-col">12.000–18.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Anódrúd csere</strong></td><td>Elhasználódott magnéziumanód cseréje</td><td class="price-col">3.000–5.000</td><td>+30 perc</td></tr>
        <tr><td><strong>Teljes szerviz</strong></td><td>Vízkőtelenítés + anódrúd + tömítés csere + beállítás</td><td class="price-col">18.000–25.000</td><td>3-4 óra</td></tr>
        <tr><td><strong>Vizsgálat (ha nem kell tisztítás)</strong></td><td>Helyszíni diagnózis, állapotfelmérés</td><td class="price-col">5.000–8.000</td><td>1 óra</td></tr>
      </tbody>
    </table>
    <p style="color:#888;font-size:.82rem">* Kiszállás Budapest területén az árban bennfoglalt. A teljes szerviz csomag a legjobb hosszú távú befektetés.</p>
  </div>
</section>

<!-- TRUST -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Miért <span>Minket Válasszon</span>?</h2>
    <div class="trust-grid">
      <div class="trust-card"><div class="t-icon">🧪</div><h3>Profi Vegyszer</h3><p>Ipari citromsavas oldat – hatékony, a tankot nem károsítja</p></div>
      <div class="trust-card"><div class="t-icon">🔍</div><h3>Teljes Vizsgálat</h3><p>A fűtőszál, anódrúd, tömítések – minden elem átvizsgálva</p></div>
      <div class="trust-card"><div class="t-icon">⚡</div><h3>1-2 Óra Kiszállás</h3><p>Budapest minden kerületébe gyorsan kiszállunk</p></div>
      <div class="trust-card"><div class="t-icon">✅</div><h3>12 Hó Garancia</h3><p>Az elvégzett munkára és beépített alkatrészekre</p></div>
      <div class="trust-card"><div class="t-icon">💰</div><h3>Átlátható Árak</h3><p>Előzetes becsült ár, pontos ajánlat helyszínen</p></div>
      <div class="trust-card"><div class="t-icon">📅</div><h3>Éves Emlékeztető</h3><p>Kérésre szólunk, ha újabb szerviz esedékes</p></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mennyibe kerül a bojler vízkőtelenítés?</div>
        <div class="faq-a">Az alap vízkőtelenítés ára 12.000–18.000 Ft (tartalmazza a kiszállást, vegyszert és munkadíjat). Ha anódrúd csere is szükséges, az további 3.000–5.000 Ft. A teljes szerviz (vízkőtelenítés + anódrúd + tömítések) 18.000–25.000 Ft – ez a legjobb megoldás, mert az összes karbantartási elemet egyszerre intézi.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Milyen gyakran kell vízkőteleníteni a bojlert Budapesten?</div>
        <div class="faq-a">Budapest vize keménységi foka 15-25 nk° (nagyon kemény), ezért 2-3 évente ajánlott a vízkőtelenítés. Keménységi fokú víz területén (pl. Pest oldala) szükség esetén akár 2 évente is érdemes elvégezni. A szerviz nemcsak meghosszabbítja a bojler életét, de 15-25%-kal csökkenti az áramfogyasztást.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mi az az anódrúd és miért kell cserélni?</div>
        <div class="faq-a">Az anódrúd (magnéziumanód) egy védőrúd a bojler tankjában, ami feláldozza magát a korrózió helyett. Ha az anódrúd teljesen elhasználódik, a tank belső fala kezd korrodálni, a víz rozsdás lesz, majd a tank kilyukad. Az anódrúd cseréje 3-5 évenként szükséges – olcsóbb, mint egy új bojler. Vízkőtelenítésnél mindig megnézzük.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Meg lehet-e csinálni bojler vízkőtelenítést saját magam?</div>
        <div class="faq-a">Elméletileg igen, de nem ajánlott. A helytelen leürítés, a nem megfelelő vegyszer, vagy a rosszul visszaszerelt tömítések miatt szivárgás, rövidzárlat keletkezhet. Szakember elvégzi 2-3 óra alatt biztonságosan, ellenőrzi az összes alkatrész állapotát, és garanciát ad a munkára.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Ha megcsináltatom a vízkőtelenítést, csend lesz a bojlerben?</div>
        <div class="faq-a">Igen, a vízkőtelenítés után a bojler csendesen melegít. A robogás, sistergés a vízkőrétegen forrásba kerülő víz hangja – ha a réteg eltávolítódik, a hangok megszűnnek. Ha a fűtőszál is már kopott volt, azt cseréljük, és attól kezdve az egész melegítési folyamat néma lesz.</div>
      </div>
    </div>
  </div>
</section>

<!-- DISTRICTS -->
<section class="section dark">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Minden Kerületbe</span></h2>
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
      <a href="<?= $base ?>/bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔧</span><span>Bojler Javítás</span></a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="related-link"><span class="r-icon">🔄</span><span>Bojler Csere</span></a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔵</span><span>Ariston Szerviz</span></a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/" class="related-link"><span class="r-icon">🟠</span><span>Hajdú Szerviz</span></a>
    </div>
  </div>
</section>

<div class="cta-banner">
  <h2>Hangos a Bojlere?</h2>
  <p>Vízkőtelenítéssel csendben és hatékonyan melegít újra!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?> – Hívjon Most</a>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p style="color:#555;font-size:.85rem">Provi Domus Kft. – vízkőtelenítés és szerviz 2011 óta.</p>
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
    </div>
    <div class="footer-col">
      <h4>Kerületek</h4>
      <a href="<?= $base ?>/bojler-szerelo-1-kerulet/">I. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-11-kerulet/">XI. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-14-kerulet/">XIV. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23 kerület</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Bojler Vízkőtelenítés Budapest.</span>
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
