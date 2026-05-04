<?php
$phone='06 (70) 164-4000';$phone_link='tel:+36701644000';
$wa_link='https://wa.me/36701644000?text=Szia!+A+bojlerem+már+régi%2C+érdeklődöm+cseréről.';
$email='providomuszkft@gmail.com';$base='https://www.bojler-szerelo-budapest.hu';
$title='Meddig tart egy villanybojler? Élettartam és a csere jelei';
$desc='Egy villanybojler átlagosan 10–15 évig bírja. Mutatjuk, mitől függ az élettartam és mikor jött el a csere ideje.';
$slug='bojler-elettartama';$cat='Tanácsok';
$date='2025-02-18';$date_d='2025. február 18.';$read_min=6;
$img='/kepek/blog/bojler-elettartama.jpg';
$img_alt='Rozsdás, öreg villanybojler tartály – az élettartam végén, Budapest szerviz';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?> | Bojler Szerelő Budapest</title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/blog/<?= $slug ?>/">
<meta property="og:type" content="article">
<meta property="og:url" content="<?= $base ?>/blog/<?= $slug ?>/">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:image" content="<?= $base ?><?= $img ?>">
<meta property="og:locale" content="hu_HU">
<link rel="stylesheet" href="/style.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
  {"@type":"BlogPosting","@id":"<?= $base ?>/blog/<?= $slug ?>/#post","headline":"<?= addslashes($title) ?>","datePublished":"<?= $date ?>","dateModified":"<?= $date ?>","author":{"@type":"Organization","name":"Provi Domus Kft.","url":"<?= $base ?>/"},"publisher":{"@type":"Organization","name":"Provi Domus Kft.","url":"<?= $base ?>/"},"image":{"@type":"ImageObject","url":"<?= $base ?><?= $img ?>","width":800,"height":500},"inLanguage":"hu","url":"<?= $base ?>/blog/<?= $slug ?>/"},
  {"@type":"FAQPage","mainEntity":[
    {"@type":"Question","name":"Meddig tart egy villanybojler?","acceptedAnswer":{"@type":"Answer","text":"Egy jó minőségű villanybojler átlagosan 10–15 évig tart rendszeres karbantartással. Kemény vízben (pl. Budapest Buda oldal) ez lehet 8–12 év. Az élettartam függ a márkától (Ariston, Hajdú), a víz keménységétől, a karbantartás rendszerességétől és a hőmérséklet beállítástól."}},
    {"@type":"Question","name":"Mikor kell biztosan cserélni a bojlert?","acceptedAnswer":{"@type":"Answer","text":"Biztosan cserélje a bojlert, ha: rozsdás víz folyik belőle, a tartály szivárog, a bojler 15+ éves és ismételten meghibásodik, vagy ha a javítás ára meghaladja az új bojler árának 40–50%-át."}}
  ]},
  {"@type":"BreadcrumbList","itemListElement":[
    {"@type":"ListItem","position":1,"name":"Főoldal","item":"<?= $base ?>/"},
    {"@type":"ListItem","position":2,"name":"Blog","item":"<?= $base ?>/blog/"},
    {"@type":"ListItem","position":3,"name":"<?= addslashes($title) ?>","item":"<?= $base ?>/blog/<?= $slug ?>/"}
  ]}
]}
</script>
</head>
<body>
<div class="urgency-bar">⚡ Bojler meghibásodás? Azonnal hívható: <a href="<?= $phone_link ?>"><?= $phone ?></a> – 0-24, hétvégén is</div>
<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo"><a href="/"><span class="logo-icon">🔥</span> Bojler Szerelő Budapest</a></div>
    <nav>
      <a href="/">Főoldal</a><a href="/bojler-javitas-budapest/">Bojler javítás</a><a href="/bojler-csere-budapest/">Bojler csere</a><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <span class="nav-item"><a href="/ariston-bojler-javitas-budapest/">Ariston</a><div class="nav-dropdown"><a href="/ariston-lydos-bojler-bemutato/">Ariston Lydos</a><a href="/ariston-velis-bojler-bemutato/">Ariston Velis</a><a href="/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz →</a></div></span>
      <span class="nav-item"><a href="/hajdu-bojler-csere-budapest/">Hajdú</a><div class="nav-dropdown"><a href="/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a><a href="/hajdu-z-smart-bojler-bemutato/">Hajdú Z Smart</a><a href="/hajdu-ideallo-bojler-bemutato/">Hajdú Ideállo</a><a href="/hajdu-bojler-csere-budapest/">Hajdú csere →</a></div></span>
      <a href="/blog/" class="active">Blog</a><a href="/ajanlatkeres/">Árajánlat</a><a href="/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü"><span></span><span></span><span></span></label>
  </div>
</header>

<section class="post-hero">
  <div class="post-hero-inner">
    <nav aria-label="Morzsa" class="breadcrumb" style="padding:0 0 14px">
      <a href="/">Főoldal</a><span class="sep"> › </span><a href="/blog/">Blog</a><span class="sep"> › </span><span><?= $cat ?></span>
    </nav>
    <span class="post-cat-badge"><?= $cat ?></span>
    <h1><?= htmlspecialchars($title) ?></h1>
    <div class="post-meta-top"><span>📅 <?= $date_d ?></span><span>🕐 <?= $read_min ?> perc</span><span>✍️ Provi Domus Kft.</span></div>
  </div>
</section>

<div class="article-layout">
  <main class="article-body">
    <figure>
      <img src="<?= $img ?>" alt="<?= htmlspecialchars($img_alt) ?>" width="800" height="500" loading="eager" fetchpriority="high" decoding="async">
      <figcaption>15 éves bojler tartálya belülről – rozsdás, kicserélésre szorul (Fotó: Provi Domus Kft.)</figcaption>
    </figure>

    <div class="toc">
      <div class="toc-title">📋 Tartalomjegyzék</div>
      <ol>
        <li><a href="#atlagos">Átlagos élettartam: számok és tények</a></li>
        <li><a href="#befolyasolo">Mi befolyásolja az élettartamot?</a></li>
        <li><a href="#jelek">5 jel, hogy elérte a véget</a></li>
        <li><a href="#meghosszabbitas">Hogyan hosszabbíthatja meg az élettartamot?</a></li>
        <li><a href="#faq">Gyakori kérdések</a></li>
      </ol>
    </div>

    <div class="ai-snippet">
      <span class="ai-label">🤖 Rövid válasz (AI snippet)</span>
      <p><strong>Egy villanybojler átlagosan 10–15 évig tart</strong> rendszeres karbantartással. Az élettartamot leginkább a víz keménysége, a karbantartás rendszeressége (vízkőtelenítés, anódrúd csere) és a hőmérséklet beállítása határozza meg. Ariston Pro1 Eco esetén 7 év tartálygarancia biztosítja a gyártói minőséget.</p>
    </div>

    <h2 id="atlagos">Átlagos élettartam: számok és tények</h2>
    <table>
      <thead><tr><th>Bojler kategória</th><th>Várható élettartam</th><th>Garancia (tartály)</th></tr></thead>
      <tbody>
        <tr><td>Ariston Lydos</td><td>12–16 év</td><td>2 év</td></tr>
        <tr><td>Ariston Velis</td><td>12–16 év</td><td>2 év</td></tr>
        <tr><td>Ariston Pro1 Eco</td><td>15–20 év</td><td>7 év (titán anóddal)</td></tr>
        <tr><td>Hajdú Aquastic</td><td>10–15 év</td><td>2 év</td></tr>
        <tr><td>Hajdú Ideállo</td><td>12–16 év</td><td>3 év</td></tr>
        <tr><td>Ismeretlen márka</td><td>6–10 év</td><td>1–2 év</td></tr>
      </tbody>
    </table>

    <h2 id="befolyasolo">Mi befolyásolja az élettartamot?</h2>
    <p><strong>1. Víz keménysége:</strong> Kemény vízben (>250 mg/l kalcium) gyorsabban képződik vízkő. Budapest Buda oldalán a víz keményebb, Pesten valamivel lágyabb.</p>
    <p><strong>2. Karbantartás:</strong> A rendszeres vízkőtelenítés és anódrúd csere akár 3–5 évvel meghosszabbítja a bojler életét.</p>
    <p><strong>3. Hőmérséklet beállítás:</strong> 60°C-on tartva a bojlert (Legionella elleni védelem) a vízkő gyorsabban képződik, mint 50°C-on. A kompromisszum: hetente egyszer 70°C-ra felmelegíteni, egyébként 55–58°C-on tartani.</p>
    <p><strong>4. Bojler mérete:</strong> Ha a bojler állandóan tele van és sűrűn üzemel, rövidebb lesz az élettartama. Helyes méretezés fontos.</p>
    <p><strong>5. Elhelyezés:</strong> Párás, nedves helyiségben (pl. pince) a külső korrózió is felgyorsul.</p>

    <h2 id="jelek">5 jel, hogy a bojler elérte az élettartama végét</h2>
    <ol>
      <li>🟥 <strong>Rozsdás víz</strong> folyik a melegvíz csapból → a tartály belül korrodált, nem javítható</li>
      <li>🟥 <strong>Szivárgás a tartályból</strong> (nem a csövekből, hanem a tartály aljából/oldaláról)</li>
      <li>🟠 <strong>Egyre sűrűbb meghibásodások</strong> rövid időn belül (évente 2+ javítás)</li>
      <li>🟠 <strong>12 évnél idősebb és ismét elromlott</strong> → mérlegelje a cserét</li>
      <li>🟡 <strong>Nagyon magas áramfogyasztás</strong> indok nélkül → vastag vízkő vagy sérült szigetelés</li>
    </ol>
    <p><strong>Fontos:</strong> A piros (🟥) jelek esetén a bojlert azonnal le kell cserélni. Rozsdás tartálynál javítás nem lehetséges.</p>

    <div class="article-cta">
      <h3>🔧 Régi a bojler? Segítünk dönteni!</h3>
      <p>Hívjon – telefonon megmondjuk, érdemes-e még javíttatni, vagy ideje cserélni.</p>
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
    </div>

    <h2 id="meghosszabbitas">Hogyan hosszabbíthatja meg a bojler élettartamát?</h2>
    <ul>
      <li>✅ <strong>Vízkőtelenítés 3–5 évente</strong> (keményebb vízben 2–3 évente)</li>
      <li>✅ <strong>Anódrúd csere 5 évente</strong> (ez védi a tartályt a rozsdásodástól)</li>
      <li>✅ <strong>Hőmérséklet: 55–60°C</strong> – nem túl magas, nem túl alacsony</li>
      <li>✅ <strong>Biztonsági szelep ellenőrzése</strong> évente (ne csorogjon)</li>
      <li>✅ <strong>Megfelelő méretű bojler</strong> – ne üzemeljen folyamatosan tele terhelésen</li>
    </ul>

    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Meddig tart egy villanybojler?</div>
        <div class="faq-a">Átlagosan 10–15 évig rendszeres karbantartással. Kemény vízű területeken (Budapest Buda) ez lehet 8–12 év. A legjobb márkák (Ariston Pro1 Eco titánium anóddal) elérheti a 20 évet is.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Érdemes-e 15 éves bojlert megjavíttatni?</div>
        <div class="faq-a">Általában nem. 15 éves bojlernél a tartály állapota ismeretlen, és az alkatrészek egy következő meghibásodása várható. Kivétel, ha a javítás egyszerű (pl. termosztát csere 10 000 Ft) és a tartályból nem folyik rozsdás víz.</div>
      </div>
    </div>

    <div class="author-box">
      <div class="author-avatar">🔧</div>
      <div>
        <div class="author-name">Provi Domus Kft. – Bojler Szerelő Budapest</div>
        <div class="author-bio">2011 óta javítjuk és cseréljük Budapest legöregebb bojlereit is. Telefonon tanácsot adunk ingyen: <a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      </div>
    </div>

    <div class="related-grid" style="margin-top:40px">
      <a href="/blog/bojler-csere-vagy-javitas/" class="related-link"><span class="r-icon">🔄</span> Csere vagy javítás?</a>
      <a href="/bojler-csere-budapest/" class="related-link"><span class="r-icon">🔧</span> Bojler csere Budapest</a>
      <a href="/blog/ariston-vs-hajdu-bojler/" class="related-link"><span class="r-icon">📊</span> Ariston vs. Hajdú</a>
    </div>
  </main>

  <aside class="article-sidebar">
    <div class="sidebar-cta">
      <h4>🔥 Azonnali csere</h4>
      <p>Raktárkészletről, 0-24 h</p>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
    </div>
    <div class="sidebar-box">
      <h4>Kapcsolódó cikkek</h4>
      <ul>
        <li><a href="/blog/bojler-csere-vagy-javitas/">Csere vagy javítás?</a></li>
        <li><a href="/blog/miert-nem-melegit-a-bojler/">Miért nem melegít?</a></li>
        <li><a href="/blog/ariston-vs-hajdu-bojler/">Ariston vs. Hajdú</a></li>
      </ul>
    </div>
    <div class="sidebar-box">
      <h4>Bojler csere</h4>
      <ul>
        <li><a href="/bojler-csere-budapest/">Csere Budapest</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
      </ul>
    </div>
  </aside>
</div>

<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>Elöregedett a bojler? Cseréljük!</h2>
    <p>Raktárkészletről azonnal, beszerelés 1-2 napon belül – Budapest minden kerületébe.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank" rel="noopener">💬 WhatsApp</a>
    </div>
  </div>
</section>
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col"><h4>🔥 Bojler Szerelő Budapest</h4><p>Provi Domus Kft. – 2011 óta.</p></div>
    <div class="footer-col"><h4>Szolgáltatások</h4><a href="/bojler-javitas-budapest/">Bojler javítás</a><a href="/bojler-csere-budapest/">Bojler csere</a><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a></div>
    <div class="footer-col"><h4>Kapcsolat</h4><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <div class="footer-col"><h4>Blog</h4><a href="/blog/">Összes cikk</a></div>
  </div>
  <div class="footer-bottom"><span>© 2025 Provi Domus Kft.</span><span><a href="<?= $phone_link ?>"><?= $phone ?></a></span></div>
</footer>
<div class="float-btns">
  <a href="<?= $wa_link ?>" class="float-btn wa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
  <a href="<?= $phone_link ?>" class="float-btn call" aria-label="Hívás">📞</a>
</div>
<script>document.querySelectorAll('.faq-q').forEach(q=>{q.addEventListener('click',()=>q.parentElement.classList.toggle('open'));});</script>
</body>
</html>
