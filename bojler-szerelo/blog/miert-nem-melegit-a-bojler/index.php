<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+A+bojlerem+nem+melegít.+Segítenének%3F';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
$title      = 'Miért nem melegít a villanybojler? 7 leggyakoribb ok és megoldás';
$desc       = 'Reggel hideg víz? Megmutatjuk a 7 leggyakoribb okot, hogy miért nem melegít a villanybojler – fűtőszál, termosztát, vízkő – és mit kell tenni.';
$slug       = 'miert-nem-melegit-a-bojler';
$cat        = 'Hibajavítás';
$date       = '2025-04-28';
$date_d     = '2025. április 28.';
$read_min   = 8;
$img        = '/kepek/blog/bojler-nem-melegit.jpg';
$img_alt    = 'Villanybojler fűtőszál csere – elégett fűtőszál közeli fotó, Budapest szerelő';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "<?= $base ?>/blog/<?= $slug ?>/#post",
      "headline": "<?= addslashes($title) ?>",
      "description": "<?= addslashes($desc) ?>",
      "datePublished": "<?= $date ?>",
      "dateModified": "<?= $date ?>",
      "author": {"@type": "Organization", "name": "Provi Domus Kft.", "url": "<?= $base ?>/"},
      "publisher": {"@type": "Organization", "name": "Provi Domus Kft.", "url": "<?= $base ?>/"},
      "image": {"@type": "ImageObject", "url": "<?= $base ?><?= $img ?>", "width": 800, "height": 500},
      "inLanguage": "hu",
      "url": "<?= $base ?>/blog/<?= $slug ?>/",
      "mainEntityOfPage": "<?= $base ?>/blog/<?= $slug ?>/"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Miért nem melegít a villanybojler?",
          "acceptedAnswer": {"@type": "Answer", "text": "A leggyakoribb okok: elégett fűtőszál, elromlott termosztát, kioldott biztonsági hőkapcsoló, vastag vízkőréteg, hibás anódrúd vagy meghibásodott vezérlőelektronika."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül a villanybojler fűtőszál csere?",
          "acceptedAnswer": {"@type": "Answer", "text": "Fűtőszál csere munkadíja Budapesten 12 000–20 000 Ft, az alkatrész ára 3 000–8 000 Ft plusz, típustól függően. Összesen kb. 15 000–28 000 Ft."}
        },
        {
          "@type": "Question",
          "name": "Hogyan ellenőrzöm, hogy a biztonsági hőkapcsoló oldott-e ki?",
          "acceptedAnswer": {"@type": "Answer", "text": "A biztonsági hőkapcsoló (termostat) általában a bojler hátoldalán van, piros visszaállító gombbal. Ha benyomható, az azt jelenti, hogy kioldott. Megnyomás után a bojler újra fűthet – de ha rövidesen megint kiold, szervizre van szükség."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Blog", "item": "<?= $base ?>/blog/"},
        {"@type": "ListItem", "position": 3, "name": "<?= addslashes($title) ?>", "item": "<?= $base ?>/blog/<?= $slug ?>/"}
      ]
    }
  ]
}
</script>
</head>
<body>

<div class="urgency-bar">
  ⚡ Bojler meghibásodás? Azonnal hívható: <a href="<?= $phone_link ?>"><?= $phone ?></a> – 0-24, hétvégén is
</div>

<header class="site-header">
  <input type="checkbox" id="nav-check">
  <div class="header-inner">
    <div class="logo"><a href="/"><span class="logo-icon">🔥</span> Bojler Szerelő Budapest</a></div>
    <nav>
      <a href="/">Főoldal</a>
      <a href="/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="/bojler-csere-budapest/">Bojler csere</a>
      <a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <span class="nav-item">
        <a href="/ariston-bojler-javitas-budapest/">Ariston</a>
        <div class="nav-dropdown">
          <a href="/ariston-lydos-bojler-bemutato/">Ariston Lydos</a>
          <a href="/ariston-velis-bojler-bemutato/">Ariston Velis</a>
          <a href="/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a>
          <a href="/ariston-bojler-javitas-budapest/">Ariston szerviz →</a>
        </div>
      </span>
      <span class="nav-item">
        <a href="/hajdu-bojler-csere-budapest/">Hajdú</a>
        <div class="nav-dropdown">
          <a href="/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a>
          <a href="/hajdu-z-smart-bojler-bemutato/">Hajdú Z Smart</a>
          <a href="/hajdu-ideallo-bojler-bemutato/">Hajdú Ideállo</a>
          <a href="/hajdu-bojler-csere-budapest/">Hajdú csere →</a>
        </div>
      </span>
      <a href="/blog/" class="active">Blog</a>
      <a href="/ajanlatkeres/">Árajánlat</a>
      <a href="/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü">
      <span></span><span></span><span></span>
    </label>
  </div>
</header>

<!-- POST HERO -->
<section class="post-hero">
  <div class="post-hero-inner">
    <nav aria-label="Morzsa navigáció" class="breadcrumb" style="padding:0 0 14px">
      <a href="/">Főoldal</a><span class="sep"> › </span><a href="/blog/">Blog</a><span class="sep"> › </span><span><?= htmlspecialchars($cat) ?></span>
    </nav>
    <span class="post-cat-badge"><?= htmlspecialchars($cat) ?></span>
    <h1><?= htmlspecialchars($title) ?></h1>
    <div class="post-meta-top">
      <span>📅 <?= $date_d ?></span>
      <span>🕐 <?= $read_min ?> perc olvasás</span>
      <span>✍️ Provi Domus Kft.</span>
    </div>
  </div>
</section>

<!-- ARTICLE -->
<div class="article-layout">
  <main class="article-body">

    <!-- Featured image -->
    <figure>
      <img
        src="<?= $img ?>"
        alt="<?= htmlspecialchars($img_alt) ?>"
        width="800"
        height="500"
        loading="eager"
        fetchpriority="high"
        decoding="async"
      >
      <figcaption>Villanybojler fűtőszál csere – a leggyakoribb hiba, amikor a bojler nem melegít (Fotó: Provi Domus Kft.)</figcaption>
    </figure>

    <!-- TOC -->
    <div class="toc">
      <div class="toc-title">📋 Tartalomjegyzék</div>
      <ol>
        <li><a href="#futooszal">1. Elégett fűtőszál</a></li>
        <li><a href="#termosztat">2. Hibás termosztát</a></li>
        <li><a href="#biztonsagi-hokapcsolo">3. Kioldott biztonsági hőkapcsoló</a></li>
        <li><a href="#vizkő">4. Vastag vízkőréteg</a></li>
        <li><a href="#anodrud">5. Elhasznált anódrúd</a></li>
        <li><a href="#nyomasszelep">6. Biztonsági szelep hibája</a></li>
        <li><a href="#elektronika">7. Hibás vezérlőelektronika</a></li>
        <li><a href="#koltsegek">Javítási költségek táblázata</a></li>
        <li><a href="#faq">Gyakori kérdések</a></li>
      </ol>
    </div>

    <p>Reggel felkel, kinyitja a csapot – és jön a hideg víz. Ismerős? A villanybojler meghibásodása mindig a legrosszabbkor történik. Ez a cikk bemutatja a <strong>7 leggyakoribb okot</strong>, amiért a villanybojler nem melegít, és megmondja, mit kell tenni minden esetben.</p>

    <div class="ai-snippet">
      <span class="ai-label">🤖 Rövid válasz (AI snippet)</span>
      <p><strong>A villanybojler leggyakrabban azért nem melegít, mert elégett a fűtőszál</strong> (villamos fűtőelem). Ez az összes "nem melegít" eset kb. 60–70%-a. Második leggyakoribb ok a termosztát meghibásodása. Mindkét alkatrész cserélhető, a javítás 15 000–28 000 Ft között mozog Budapesten 2025-ben.</p>
    </div>

    <h2 id="futooszal">1. Elégett fűtőszál (fűtőelem)</h2>
    <p>A fűtőszál az a tekercs alakú fémcsőbe zárt villamos ellenállás, ami felmelegíti a vizet. <strong>Élettartama 8–15 év</strong>, de vastag vízkő lerakódás, vagy a víz magas mészkőtartalma esetén hamarabb is tönkre mehet.</p>
    <p><strong>Jelek:</strong></p>
    <ul>
      <li>A víz egyáltalán nem melegszik (hideg marad a bojlerből jövő víz is)</li>
      <li>A bojler üzemel (a jelzőfény ég, a termosztát kattog), de a víz nem melegszik</li>
      <li>Esetleg kénszag érezhető a melegvíznél</li>
    </ul>
    <p><strong>Megoldás:</strong> Fűtőszál csere. Egy jó szerelő 1–2 óra alatt elvégzi.</p>

    <figure>
      <img
        src="/kepek/blog/futooszal-vizkoves.jpg"
        alt="Vízkővel lerakódott fűtőszál egy 8 éves Ariston bojlerből – Budapest szerviz"
        width="780"
        height="460"
        loading="lazy"
        decoding="async"
      >
      <figcaption>Tipikus eset: 8 éves Ariston bojler fűtőszála, vízkőlerakódással borítva. A fehér réteg 3–5 mm vastag volt.</figcaption>
    </figure>

    <h2 id="termosztat">2. Hibás termosztát</h2>
    <p>A termosztát szabályozza, mikor kapcsol be és ki a fűtőszál. Ha elromlik, két dolog történhet: <strong>nem kapcsol be a fűtés</strong> (így a víz hideg marad), vagy <strong>nem kapcsol ki</strong> (így a biztonsági hőkapcsoló oldja ki a fűtést).</p>
    <ul>
      <li>A termosztát gombja forgatható, de a bojler nem indul el → termosztát hiba</li>
      <li>A bojler elkezd melegíteni, de leáll, mielőtt elérné a beállított hőmérsékletet</li>
    </ul>
    <p>A termosztát csere ára Budapesten: <strong>10 000–18 000 Ft</strong> munkadíjjal együtt.</p>

    <h2 id="biztonsagi-hokapcsolo">3. Kioldott biztonsági hőkapcsoló</h2>
    <p>Ez egy biztonsági szerkezet, ami megakadályozza a túlhevülést. Ha a víz hőmérséklete meghaladja a maximumot (általában 80–90°C), a hőkapcsoló megszakítja az áramkört.</p>
    <p><strong>Mi okozhatja:</strong> meghibásodott termosztát, vastag vízkőréteg, vagy ha valaki nagyon magasra állította a hőmérsékletet.</p>
    <p><strong>Mit kell tenni:</strong> A hőkapcsoló piros visszaállító gombjának megnyomása (általában a bojler hátán vagy alján, a fedél mögött). Ha ez után újra kiold, szervizre van szükség.</p>

    <div class="article-cta">
      <h3>🔧 Nem biztos benne, mi a baj?</h3>
      <p>Hívjon minket – telefonon megmondjuk, mi lehet a probléma, és szükség esetén 1-2 órán belül kiszállunk.</p>
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
    </div>

    <h2 id="vizkő">4. Vastag vízkőréteg</h2>
    <p>A vízkő (mészkő lerakódás) a fűtőszál körül képződik és hőszigeteként viselkedik. <strong>3 mm vízkő 25%-kal növeli az energiafelhasználást</strong>, 6 mm felett a fűtőszál egyenesen átéghet.</p>
    <p><strong>Tünet:</strong> A bojler lassan melegít, hangos, sistergő vagy kattogó hangot ad, és a meleg víz hamarabb elfogy, mint korábban.</p>
    <p><strong>Megoldás:</strong> <a href="/bojler-vizkotelenites-budapest/">Szakszerű vízkőtelenítés</a>, ami meghosszabbítja a bojler élettartamát. <strong>Ajánlott 3–5 évente elvégezni</strong>.</p>

    <h2 id="anodrud">5. Elhasznált anódrúd</h2>
    <p>Az anódrúd (magnézium vagy titánium) megvédi a tartályt a rozsdásodástól. Ha teljesen elhasználódik, a tartály korróziónak van kitéve. Bár az anódrúd elsősorban nem okoz "nem melegít" hibát, a korrodált tartály iszapja eltömítheti a fűtőszálat.</p>
    <p>Az anódrúd cseréje <strong>kb. 8 000–12 000 Ft</strong>, és 5 évenként ajánlott.</p>

    <h2 id="nyomasszelep">6. Biztonsági szelep (nyomáscsökkentő szelep) hibája</h2>
    <p>A biztonsági szelep védi a tartályt a túlnyomástól. Ha folyamatosan csorog belőle víz, a nyomás ingadozás megzavarhatja a termosztát működését. Szélsőséges esetben a bojler nem tud felforrósodni, mert a friss hideg víz folyamatosan beáramlik.</p>
    <p><strong>Jelei:</strong> Csöpögő vízszintes cső a bojler oldalán, esetleg víztócsa a bojler alatt.</p>

    <h2 id="elektronika">7. Hibás vezérlőelektronika</h2>
    <p>Az elektronikusan vezérelt bojlerekben (pl. Ariston Velis, Hajdú Z Smart) a vezérlőpanel is meghibásodhat. Ez ritka, de ha az összes többi rész rendben van, ez is lehetséges ok.</p>
    <p><strong>Jelei:</strong> Hibakód a kijelzőn, a gombokra nem reagál a bojler, vagy véletlenszerűen viselkedik.</p>

    <h2 id="koltsegek">Javítási költségek összefoglaló táblázata (Budapest, 2025)</h2>
    <table>
      <thead>
        <tr>
          <th>Javítás típusa</th>
          <th>Munkadíj</th>
          <th>Alkatrész</th>
          <th>Összesen (kb.)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Fűtőszál csere</td><td>12 000–18 000 Ft</td><td>3 000–8 000 Ft</td><td>15 000–26 000 Ft</td></tr>
        <tr><td>Termosztát csere</td><td>10 000–16 000 Ft</td><td>2 000–6 000 Ft</td><td>12 000–22 000 Ft</td></tr>
        <tr><td>Biztonsági hőkapcsoló</td><td>8 000–14 000 Ft</td><td>1 500–4 000 Ft</td><td>9 500–18 000 Ft</td></tr>
        <tr><td>Anódrúd csere</td><td>6 000–10 000 Ft</td><td>2 000–5 000 Ft</td><td>8 000–15 000 Ft</td></tr>
        <tr><td>Vízkőtelenítés</td><td>12 000–20 000 Ft</td><td>–</td><td>12 000–20 000 Ft</td></tr>
        <tr><td>Biztonsági szelep csere</td><td>8 000–12 000 Ft</td><td>2 000–5 000 Ft</td><td>10 000–17 000 Ft</td></tr>
      </tbody>
    </table>

    <h2 id="faq">Gyakori kérdések</h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mi az első dolog, amit ellenőrizzek, ha nem melegít a bojler?</div>
        <div class="faq-a">Ellenőrizze a biztonsági hőkapcsolót (piros gomb a bojler hátán vagy alján). Ha benyomható, nyomja meg és kapcsolja vissza a bojlert. Ha ez sem segít, hívjon szerelőt.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Megérné házilag megjavítani a bojlert?</div>
        <div class="faq-a">Nem ajánlott. A villanybojler 220V-os hálózathoz csatlakozik és nyomás alatt van. Szakszerűtlen beavatkozás áramütést, vízkárt vagy robbanást okozhat. Mindig hívjon szakembert.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mikor érdemes inkább cserélni, mint javítani?</div>
        <div class="faq-a">Ha a bojler 12 évnél idősebb, és a javítás ára meghaladja az új készülék árának 40%-át, cserét ajánlunk. Fiatalabb, ép tartályú bojlernél általában megéri javíttatni.</div>
      </div>
    </div>

    <!-- Author box -->
    <div class="author-box">
      <div class="author-avatar">🔧</div>
      <div>
        <div class="author-name">Provi Domus Kft. – Bojler Szerelő Budapest</div>
        <div class="author-bio">2011 óta javítunk villanybojlereket Budapest teljes területén. Ariston és Hajdú szakszerviz, 0-24 kiszállás, garancia, számla. Telefonon is tanácsot adunk: <a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      </div>
    </div>

    <!-- Related posts -->
    <div class="related-grid" style="margin-top:40px">
      <a href="/bojler-csere-vagy-javitas/" class="related-link"><span class="r-icon">📖</span> Bojler csere vagy javítás – hogyan döntsünk?</a>
      <a href="/bojler-vizkotelenites-budapest/" class="related-link"><span class="r-icon">💧</span> Bojler vízkőtelenítés Budapest</a>
      <a href="/bojler-javitas-budapest/" class="related-link"><span class="r-icon">🔧</span> Bojler javítás Budapest – árak, garanciák</a>
    </div>

  </main>

  <!-- SIDEBAR -->
  <aside class="article-sidebar">
    <div class="sidebar-cta">
      <h4>🔥 Azonnali segítség</h4>
      <p>1-2 óra kiszállás, 0-24 h</p>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
    </div>
    <div class="sidebar-box">
      <h4>Kapcsolódó cikkek</h4>
      <ul>
        <li><a href="/blog/bojler-csere-vagy-javitas/">Csere vagy javítás?</a></li>
        <li><a href="/blog/bojler-vizkotelenites-mikor-kell/">Mikor kell vízkőteleníteni?</a></li>
        <li><a href="/blog/bojler-elettartama/">Bojler élettartama</a></li>
        <li><a href="/blog/bojler-biztositekot-ver-ki/">Kioldja a biztosítékot</a></li>
      </ul>
    </div>
    <div class="sidebar-box">
      <h4>Szolgáltatások</h4>
      <ul>
        <li><a href="/bojler-javitas-budapest/">Bojler javítás Budapest</a></li>
        <li><a href="/bojler-csere-budapest/">Bojler csere Budapest</a></li>
        <li><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
      </ul>
    </div>
  </aside>
</div>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>Nem melegít a bojler? Hívjon most!</h2>
    <p>1-2 óra kiszállás Budapest minden kerületébe, 0-24 – hétvégén és ünnepnapokon is.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank" rel="noopener">💬 WhatsApp</a>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p>Provi Domus Kft. – Villanybojler javítás, csere, vízkőtelenítés 2011 óta.</p>
    </div>
    <div class="footer-col">
      <h4>Szolgáltatások</h4>
      <a href="/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="/bojler-csere-budapest/">Bojler csere</a>
      <a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
    </div>
    <div class="footer-col">
      <h4>Kapcsolat</h4>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
    </div>
    <div class="footer-col">
      <h4>Blog</h4>
      <a href="/blog/">Összes cikk</a>
      <a href="/blog/bojler-csere-vagy-javitas/">Csere vagy javítás?</a>
      <a href="/blog/bojler-vizkotelenites-mikor-kell/">Vízkőtelenítés mikor?</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft.</span>
    <span><a href="<?= $phone_link ?>"><?= $phone ?></a></span>
  </div>
</footer>

<div class="float-btns">
  <a href="<?= $wa_link ?>" class="float-btn wa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
  <a href="<?= $phone_link ?>" class="float-btn call" aria-label="Hívás">📞</a>
</div>

<script>
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => q.parentElement.classList.toggle('open'));
});
</script>
</body>
</html>
