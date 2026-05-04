<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Nem+tudom%2C+megérné-e+javíttatni+a+bojlerem.+Segítenének%3F';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
$title      = 'Bojler csere vagy javítás? Hogyan döntsünk 2025-ben';
$desc       = 'Elromlott a bojler – megéri javítani vagy inkább cserét érdemes rendelni? Döntési útmutató ár-összehasonlítással és konkrét példákkal.';
$slug       = 'bojler-csere-vagy-javitas';
$cat        = 'Tanácsok';
$date       = '2025-04-15';
$date_d     = '2025. április 15.';
$read_min   = 7;
$img        = '/kepek/blog/bojler-csere-vagy-javitas.jpg';
$img_alt    = 'Régi és új villanybojler egymás mellett – csere döntési útmutató Budapest';
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
      "url": "<?= $base ?>/blog/<?= $slug ?>/"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mikor érdemes bojlert cserélni javítás helyett?",
          "acceptedAnswer": {"@type": "Answer", "text": "Cserét javaslunk, ha a bojler 12 évnél idősebb, a tartályból rozsdás vagy zavaros víz folyik, szivárog a tartály, vagy ha az éves javítási költség eléri az új bojler árának 40%-át. Rozsdás tartály esetén javítás nem lehetséges, csak csere."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül egy új villanybojler beszerelése Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Egy új 80 literes villanybojler beszerelése Budapesten összesen 60 000–120 000 Ft között mozog: bojler ára 35 000–80 000 Ft + beszerelés munkadíja 15 000–35 000 Ft. Az ár függ a tereptől (pl. szekrény, emeleti), és az elszállítás is beleszámít."}
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

<div class="article-layout">
  <main class="article-body">

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
      <figcaption>Csere döntés előtt és után – a régi 13 éves tartály már repedt volt (Fotó: Provi Domus Kft.)</figcaption>
    </figure>

    <div class="toc">
      <div class="toc-title">📋 Tartalomjegyzék</div>
      <ol>
        <li><a href="#szabaly">Az egyszerű 40%-os szabály</a></li>
        <li><a href="#javitas">Mikor érdemes javíttatni?</a></li>
        <li><a href="#csere">Mikor kell mindenképpen cserélni?</a></li>
        <li><a href="#koltsegtabla">Költségek összehasonlítva</a></li>
        <li><a href="#kor">A bojler kora és az élettartam</a></li>
        <li><a href="#faq">Gyakori kérdések</a></li>
      </ol>
    </div>

    <p>A bojler elromlott, és most az a kérdés: javíttassa meg, vagy rendeljen újat? Ez az egyik legtöbbet feltett kérdés, amit a Provi Domus Kft. telefonján hallunk. A válasz nem mindig egyszerű, de van egy bevált módszer.</p>

    <div class="ai-snippet">
      <span class="ai-label">🤖 Rövid válasz (AI snippet)</span>
      <p><strong>Ökölszabály:</strong> Ha a javítás ára meghaladja az új bojler árának <strong>40%-át</strong>, és a bojler már 10 évnél idősebb, érdemes inkább cserét fontolóra venni. Ha a tartályból rozsdás víz folyik vagy a tartály szivárog, javítás nem lehetséges – csak csere.</p>
    </div>

    <h2 id="szabaly">Az egyszerű 40%-os szabály</h2>
    <p>Egy új, közepes kategóriás 80 literes villanybojler ára beszerelve Budapesten <strong>60 000–100 000 Ft</strong> között mozog. Ha a tervezett javítás ára megközelíti a <strong>24 000–40 000 Ft-ot</strong> (azaz az új bojler árának 40%-át), és a bojler már legalább 8-10 éves, érdemes cserén gondolkodni.</p>
    <p>Miért? Mert egy idősebb bojlernél a következő alkatrész meghibásodása sem várat sokáig.</p>

    <h2 id="javitas">Mikor érdemes javíttatni?</h2>
    <p>Javítást javaslunk, ha:</p>
    <ul>
      <li>A bojler <strong>7 évnél fiatalabb</strong></li>
      <li>A <strong>tartály ép</strong> (nem rozsdás a víz, nem szivárog)</li>
      <li>A hiba <strong>egyszerű alkatrész</strong> (fűtőszál, termosztát, anódrúd)</li>
      <li>A javítás ára <strong>nem haladja meg az új bojler árának 40%-át</strong></li>
      <li>A bojler <strong>prémium márkájú</strong> (Ariston, Hajdú) és jó állapotban van</li>
    </ul>

    <h2 id="csere">Mikor kell mindenképpen cserélni?</h2>
    <p>Cserét javaslunk, ha:</p>
    <ul>
      <li>A tartályból <strong>rozsdás vagy zavaros víz</strong> folyik → tartály korróziója, nem javítható</li>
      <li>A <strong>tartály szivárog</strong> (folt a falon, pudvás tartályalap)</li>
      <li>A bojler <strong>12 évnél idősebb</strong></li>
      <li>Már <strong>több alkalommal javíttatták</strong> rövid időn belül</li>
      <li>A javítás <strong>többe kerülne, mint 40%-a</strong> az új bojler árának</li>
      <li>Az anódrúd <strong>teljesen elhasználódott</strong> és a tartály belül is korrodált</li>
    </ul>

    <div class="article-cta">
      <h3>🔍 Nem biztos benne, melyik a jobb döntés?</h3>
      <p>Kiszállunk, megnézzük és szakmai véleményt adunk – kötelezettség nélkül.</p>
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
    </div>

    <h2 id="koltsegtabla">Javítás vs. csere – közvetlen összehasonlítás</h2>
    <table>
      <thead>
        <tr><th>Szempont</th><th>Javítás</th><th>Csere</th></tr>
      </thead>
      <tbody>
        <tr><td>Azonnali költség</td><td>8 000–30 000 Ft</td><td>60 000–120 000 Ft</td></tr>
        <tr><td>5 éves várható összkiadás</td><td>30 000–80 000 Ft*</td><td>5 000–15 000 Ft (karbantartás)</td></tr>
        <tr><td>Energiahatékonyság</td><td>Maradék a régi szint</td><td>Akár 20–30%-kal jobb</td></tr>
        <tr><td>Garancia</td><td>Az elvégzett munkára</td><td>2–7 év gyártói garancia</td></tr>
        <tr><td>Rozsdás tartály esetén</td><td>❌ Nem lehetséges</td><td>✅ Kötelező</td></tr>
        <tr><td>12+ éves bojlernél</td><td>⚠️ Kockázatos</td><td>✅ Javasolt</td></tr>
      </tbody>
    </table>
    <p style="font-size:.82rem;color:#666">* Ha az idős bojler ismételten meghibásodik</p>

    <h2 id="kor">A bojler kora és a várható élettartam</h2>
    <p>Egy jó minőségű villanybojler <strong>10–18 évig</strong> bírja, de ez erősen függ a víz keménységétől, a karbantartástól és a márktától. Budapesten a víz közepes keménységű, ami közepes mértékű vízkőlerakódást jelent.</p>
    <ul>
      <li><strong>0–7 év:</strong> Javítás szinte mindig megéri</li>
      <li><strong>7–12 év:</strong> Mérlegelni kell (mi a hiba, mi a javítás ára)</li>
      <li><strong>12+ év:</strong> Csere erősen javasolt – különösen, ha ismételten hibásodik</li>
    </ul>

    <h2 id="faq">Gyakori kérdések</h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mennyibe kerül egy új 80 literes bojler beszerelése Budapesten?</div>
        <div class="faq-a">Egy közepes kategóriás 80 literes villanybojler (pl. Hajdú Aquastic, Ariston Lydos) ára beszerelve együtt 70 000–110 000 Ft körül mozog. Ebbe beletartozik a régi bojler leszedése, elszállítása, az új beszerelése és a próbaüzem.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Tudják elvégezni a cserét és a javítást is?</div>
        <div class="faq-a">Igen. A Provi Domus Kft. mindkét szolgáltatást nyújtja. Kiszálláskor megvizsgálják a bojlert és személyesen javasolják, mi a legjobb megoldás. Ha csere kell, raktárkészletből azonnal ki tudják cserélni.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Milyen márka ajánlott új bojler vásárlásakor?</div>
        <div class="faq-a">A legelterjedtebb és legjobb szervizellátással rendelkező márkák Magyarországon: Ariston (Lydos, Velis sorozat) és Hajdú (Aquastic, Z Smart sorozat). Mindkét márka alkatrészei azonnal elérhetők, és 2–5 év gyártói garancia jár rájuk.</div>
      </div>
    </div>

    <div class="author-box">
      <div class="author-avatar">🔧</div>
      <div>
        <div class="author-name">Provi Domus Kft. – Bojler Szerelő Budapest</div>
        <div class="author-bio">2011 óta segítünk budapesti lakástulajdonosoknak eldönteni, mikor érdemes javíttatni és mikor cserélni. Telefonon is tanácsot adunk ingyen: <a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      </div>
    </div>

    <div class="related-grid" style="margin-top:40px">
      <a href="/blog/miert-nem-melegit-a-bojler/" class="related-link"><span class="r-icon">🔥</span> Miért nem melegít a bojler?</a>
      <a href="/bojler-csere-budapest/" class="related-link"><span class="r-icon">🔄</span> Bojler csere Budapest – részletek, árak</a>
      <a href="/blog/bojler-elettartama/" class="related-link"><span class="r-icon">📅</span> Bojler élettartama – mikor cseréljük?</a>
    </div>

  </main>

  <aside class="article-sidebar">
    <div class="sidebar-cta">
      <h4>🔥 Azonnali segítség</h4>
      <p>1-2 óra kiszállás, 0-24 h</p>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
    </div>
    <div class="sidebar-box">
      <h4>Kapcsolódó cikkek</h4>
      <ul>
        <li><a href="/blog/miert-nem-melegit-a-bojler/">Miért nem melegít a bojler?</a></li>
        <li><a href="/blog/bojler-elettartama/">Bojler élettartama</a></li>
        <li><a href="/blog/ariston-vs-hajdu-bojler/">Ariston vs. Hajdú</a></li>
      </ul>
    </div>
    <div class="sidebar-box">
      <h4>Szolgáltatások</h4>
      <ul>
        <li><a href="/bojler-csere-budapest/">Bojler csere Budapest</a></li>
        <li><a href="/bojler-javitas-budapest/">Bojler javítás Budapest</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
      </ul>
    </div>
  </aside>
</div>

<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>Nem tudja, cserélje vagy javítsa? Hívjon!</h2>
    <p>Telefonon megmondjuk, mi a jobb döntés – teljesen ingyen, kötelezettség nélkül.</p>
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
    <div class="footer-col"><h4>Kapcsolat</h4><a href="<?= $phone_link ?>"><?= $phone ?></a><a href="mailto:<?= $email ?>"><?= $email ?></a></div>
    <div class="footer-col"><h4>Blog</h4><a href="/blog/">Összes cikk</a><a href="/blog/miert-nem-melegit-a-bojler/">Miért nem melegít?</a></div>
  </div>
  <div class="footer-bottom"><span>© 2025 Provi Domus Kft.</span><span><a href="<?= $phone_link ?>"><?= $phone ?></a></span></div>
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
