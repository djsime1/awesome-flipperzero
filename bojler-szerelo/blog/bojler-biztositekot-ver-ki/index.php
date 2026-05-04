<?php
$phone='06 (70) 164-4000';$phone_link='tel:+36701644000';
$wa_link='https://wa.me/36701644000?text=Szia!+A+bojlerem+leveri+a+biztosítékot.+Segítsenek%21';
$email='providomuszkft@gmail.com';$base='https://www.bojler-szerelo-budapest.hu';
$title='Miért veri ki a bojler a biztosítékot? Okok és teendők';
$desc='Ha a villanybojler kioldja a biztosítékot, ne kapcsolja vissza! Megmutatjuk az okokat és mit kell tenni – 0-24 szerviz Budapest.';
$slug='bojler-biztositekot-ver-ki';$cat='Hibajavítás';
$date='2025-02-03';$date_d='2025. február 3.';$read_min=5;
$img='/kepek/blog/bojler-biztositekot-ver-ki.jpg';
$img_alt='Kioldott elektromos biztosíték – bojler leverte a biztosítékot, Budapest';
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
    {"@type":"Question","name":"Miért veri ki a bojler a biztosítékot?","acceptedAnswer":{"@type":"Answer","text":"A leggyakoribb ok az elhasználódott vagy nedves fűtőszál, amelynek szigetelése megsérült és az áram a fémre (földre) szivárog. Emiatt a differenciálvédő (FI relé) vagy biztosíték kiold. Másik lehetséges ok: sérült tápkábel, nedves csatlakozó, vagy rövidzárlat a vezérlőelektronikában."}},
    {"@type":"Question","name":"Mit kell tenni, ha a bojler kiveri a biztosítékot?","acceptedAnswer":{"@type":"Answer","text":"Ne kapcsolja vissza! Kapcsolja ki a fő áramellátást a bojlernél, zárja el a vizet a bojlerhez vezető csapon, és hívjon szakembert. Addig ne használja a bojlert. A kioldott biztosíték ismételt visszakapcsolása tűzveszélyes lehet."}}
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
<div class="urgency-bar">⚡ SÜRGŐS! Bojler leverte a biztosítékot? Azonnal hívható: <a href="<?= $phone_link ?>"><?= $phone ?></a></div>
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
      <figcaption>Kioldott FI relé a biztosítékszekrényben – bojler leverte a biztosítékot (Fotó: Provi Domus Kft.)</figcaption>
    </figure>

    <div class="toc">
      <div class="toc-title">📋 Tartalomjegyzék</div>
      <ol>
        <li><a href="#elso-teendo">Első teendő – NE tegye ezt!</a></li>
        <li><a href="#okok">A 4 leggyakoribb ok</a></li>
        <li><a href="#mi-kiold">Mi oldja ki – biztosíték vagy FI relé?</a></li>
        <li><a href="#koltseg">Javítási ár</a></li>
        <li><a href="#faq">Gyakori kérdések</a></li>
      </ol>
    </div>

    <div class="ai-snippet">
      <span class="ai-label">🤖 Rövid válasz (AI snippet)</span>
      <p><strong>Ha a bojler leveri a biztosítékot, az leggyakrabban elhasználódott fűtőszál</strong> okozza – a szigetelés megsérül, az áram a fémre (földre) szivárog. Ez az összes ilyen eset kb. 75–80%-a. <strong>NE kapcsolja vissza a biztosítékot!</strong> Hívjon szerelőt – ez áramütési és tűzveszélyes állapot.</p>
    </div>

    <h2 id="elso-teendo">⚠️ Első teendő – mit NE csináljon</h2>
    <p style="color:#ff6b00;font-weight:700">NE kapcsolja vissza a biztosítékot vagy az FI relét!</p>
    <p>Ha visszakapcsolja és megint kiold, a fűtőszál ismét áramot vezet a fém burkolaton keresztül. Ez áramütést okozhat és tűzveszélyes.</p>
    <p><strong>Amit tenni kell:</strong></p>
    <ol>
      <li>Hagyja kioldott állapotban a biztosítékot/FI-t</li>
      <li>Zárja el a vizet a bojlerhez vezető elzáró csapnál</li>
      <li>Kapcsolja ki a bojler tápellátását (ha van külön kapcsolója)</li>
      <li>Hívjon szakembert: <a href="<?= $phone_link ?>"><?= $phone ?></a></li>
    </ol>

    <h2 id="okok">A 4 leggyakoribb ok</h2>

    <h3>1. Elhasználódott fűtőszál (75–80% az esetek)</h3>
    <p>A fűtőszál szigetelő bevonatát a vízkő és az évek megrongálják. Ha a szigetelés áttörik, az áram a fémre szivárog – ezt érzékeli az FI relé és kiold. <strong>Megoldás: fűtőszál csere.</strong></p>

    <h3>2. Nedves csatlakozó vagy sérült tápkábel</h3>
    <p>Ha víz került a bojler elektromos csatlakozójába (pl. szivárgás), az is kioldja a védelmeket. A tápkábel szigetelésének sérülése szintén okozhat rövidzárlatot.</p>

    <h3>3. Hibás vezérlőelektronika</h3>
    <p>Különösen elektronikusan vezérelt bojlereknél (Ariston Velis, Hajdú Z Smart) a vezérlőpanel meghibásodása is okozhat kioldást.</p>

    <h3>4. Nem a bojler a hibás</h3>
    <p>Időnként a biztosítékszekrény, a kábel vagy maga a FI relé hibás – nem a bojler. Erre általában az utal, hogy más eszközök is kioldják, vagy a bojler nélkül is probléma van.</p>

    <h2 id="mi-kiold">Mi oldja ki – biztosíték vagy FI relé?</h2>
    <table>
      <thead><tr><th>Mi old ki?</th><th>Mit jelent?</th><th>Teendő</th></tr></thead>
      <tbody>
        <tr><td>Biztosíték (automata)</td><td>Túlterhelés vagy rövidzárlat</td><td>Szerviz szükséges</td></tr>
        <tr><td>FI relé (differenciálvédő)</td><td>Áram szivárog a földre (fűtőszál)</td><td>Szerviz SÜRGŐS</td></tr>
        <tr><td>Mindkettő</td><td>Súlyos rövidzárlat</td><td>Azonnali szerviz</td></tr>
      </tbody>
    </table>
    <p>Ha az <strong>FI relé</strong> old ki (az a kis gomb a biztosítékszekrényen), az mindig súlyosabb eset – emberek védelmére van, és azt jelzi, hogy az áram veszélyesen szivárog.</p>

    <h2 id="koltseg">Javítási ár (Budapest, 2025)</h2>
    <table>
      <thead><tr><th>Javítás</th><th>Munkadíj</th><th>Alkatrész</th><th>Összesen</th></tr></thead>
      <tbody>
        <tr><td>Fűtőszál csere</td><td>12 000–18 000 Ft</td><td>3 000–8 000 Ft</td><td>15 000–26 000 Ft</td></tr>
        <tr><td>Tápkábel csere</td><td>6 000–10 000 Ft</td><td>1 500–4 000 Ft</td><td>7 500–14 000 Ft</td></tr>
        <tr><td>Csatlakozó javítás</td><td>5 000–9 000 Ft</td><td>500–2 000 Ft</td><td>5 500–11 000 Ft</td></tr>
      </tbody>
    </table>

    <div class="article-cta">
      <h3>🚨 Bojler leverte a biztosítékot? Hívjon MOST!</h3>
      <p>Ez sürgős szervizeset. 1-2 órán belül kiszállunk – 0-24, hétvégén is.</p>
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
    </div>

    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Visszakapcsolhatom a biztosítékot, ha a bojler levert?</div>
        <div class="faq-a">NEM. Ne kapcsolja vissza! Ha az FI relé kiold, az áram a fémre szivárog – ez áramütésveszélyes. Hívjon szakembert és addig ne használja a bojlert.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mennyi ideig vagyunk meleg víz nélkül?</div>
        <div class="faq-a">A Provi Domus Kft. 1-2 órán belül kiszáll Budapest minden kerületébe. A fűtőszál cserét általában 1-2 óra alatt elvégzik helyszínen, és a bojler ismét üzemel.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Ha a fűtőszál cserére kerül, mire kell még figyelni?</div>
        <div class="faq-a">Fűtőszál cserénél érdemes egyszerre vízkőteleníteni és az anódrúdat is ellenőrizni. Ha vastag volt a vízkő, az is hozzájárult a fűtőszál tönkremenetelééhez.</div>
      </div>
    </div>

    <div class="author-box">
      <div class="author-avatar">⚡</div>
      <div>
        <div class="author-name">Provi Domus Kft. – Bojler Szerelő Budapest</div>
        <div class="author-bio">Sürgős szerviz – 1-2 óra kiszállás Budapest minden kerületébe. <a href="<?= $phone_link ?>"><?= $phone ?></a> – 0-24 h, hétvégén is.</div>
      </div>
    </div>

    <div class="related-grid" style="margin-top:40px">
      <a href="/blog/miert-nem-melegit-a-bojler/" class="related-link"><span class="r-icon">🔥</span> Miért nem melegít a bojler?</a>
      <a href="/bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔧</span> Bojler javítás Budapest – árak</a>
      <a href="/blog/bojler-csere-vagy-javitas/" class="related-link"><span class="r-icon">🔄</span> Csere vagy javítás?</a>
    </div>
  </main>

  <aside class="article-sidebar">
    <div class="sidebar-cta">
      <h4>🚨 Sürgős szerviz</h4>
      <p>1-2 óra, 0-24 h</p>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
    </div>
    <div class="sidebar-box">
      <h4>Kapcsolódó cikkek</h4>
      <ul>
        <li><a href="/blog/miert-nem-melegit-a-bojler/">Miért nem melegít?</a></li>
        <li><a href="/blog/bojler-csere-vagy-javitas/">Csere vagy javítás?</a></li>
        <li><a href="/blog/bojler-elettartama/">Bojler élettartama</a></li>
      </ul>
    </div>
    <div class="sidebar-box">
      <h4>Szerviz</h4>
      <ul>
        <li><a href="/bojler-javitas-budapest/">Bojler javítás</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
      </ul>
    </div>
  </aside>
</div>

<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>🚨 Bojler leverte a biztosítékot? Hívjon azonnal!</h2>
    <p>Sürgős szerviz – 1-2 óra kiszállás Budapest minden kerületébe, 0-24 h.</p>
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
