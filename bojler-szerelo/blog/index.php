<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+%C3%89rdekl%C5%91dn%C3%A9k+a+bojler+szerel%C3%A9s+ir%C3%A1nt.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';

$posts = [
  [
    'slug'    => 'miert-nem-melegit-a-bojler',
    'title'   => 'Miért nem melegít a villanybojler? 7 leggyakoribb ok és megoldás',
    'excerpt' => 'Reggel hideg víz? Fűtőszál, termosztát, biztonsági hőkapcsoló vagy vízkő – részletes hibakeresési útmutató, árakkal.',
    'cat'     => 'Hibajavítás',
    'date'    => '2025-04-28',
    'date_d'  => '2025. ápr. 28.',
    'min'     => 8,
    'img'     => '/kepek/blog/bojler-nem-melegit.jpg',
    'alt'     => 'Villanybojler fűtőszál csere – elégett fűtőszál közeli fotó, Budapest',
    'w'       => 800, 'h' => 500,
    'featured'=> true,
  ],
  [
    'slug'    => 'bojler-csere-vagy-javitas',
    'title'   => 'Bojler csere vagy javítás? Hogyan döntsünk 2025-ben',
    'excerpt' => 'A 10 éves bojler elromlott – megéri javítani vagy jobb cserét rendelni? Döntési segéd ár-összehasonlítással.',
    'cat'     => 'Tanácsok',
    'date'    => '2025-04-15',
    'date_d'  => '2025. ápr. 15.',
    'min'     => 7,
    'img'     => '/kepek/blog/bojler-csere-vagy-javitas.jpg',
    'alt'     => 'Régi és új villanybojler egymás mellett – csere döntési útmutató',
    'w'       => 800, 'h' => 500,
    'featured'=> false,
  ],
  [
    'slug'    => 'bojler-vizkotelenites-mikor-kell',
    'title'   => 'Mikor kell a bojlert vízkőteleníteni? Jelek és következmények',
    'excerpt' => 'A vízkő csökkenti a hatékonyságot és tönkreteheti a fűtőszálat. Megtudhatja, mikor kell beavatkozni és mi történik, ha kihagyja.',
    'cat'     => 'Vízkőtelenítés',
    'date'    => '2025-03-20',
    'date_d'  => '2025. márc. 20.',
    'min'     => 6,
    'img'     => '/kepek/blog/bojler-vizkotelenites.jpg',
    'alt'     => 'Villanybojler fűtőszál vastag vízkőlerakódással borítva – Budapest',
    'w'       => 800, 'h' => 500,
    'featured'=> false,
  ],
  [
    'slug'    => 'ariston-vs-hajdu-bojler',
    'title'   => 'Ariston vs. Hajdú bojler – melyiket válasszuk 2025-ben?',
    'excerpt' => 'Két piacvezető márka összehasonlítása: megbízhatóság, energiahatékonyság, alkatrész ellátás és szervizköltség szempontjából.',
    'cat'     => 'Termékek',
    'date'    => '2025-03-05',
    'date_d'  => '2025. márc. 5.',
    'min'     => 9,
    'img'     => '/kepek/blog/ariston-vs-hajdu.jpg',
    'alt'     => 'Ariston és Hajdú villanybojler egymás mellett – összehasonlítás 2025',
    'w'       => 800, 'h' => 500,
    'featured'=> false,
  ],
  [
    'slug'    => 'bojler-elettartama',
    'title'   => 'Meddig tart egy villanybojler? Élettartam és a csere jelei',
    'excerpt' => 'Az átlagos villanybojler 10–15 évig bírja. De mi dönti el, hogy a tiéd mikor ér a végére? Jelek, amikre figyelni kell.',
    'cat'     => 'Tanácsok',
    'date'    => '2025-02-18',
    'date_d'  => '2025. febr. 18.',
    'min'     => 6,
    'img'     => '/kepek/blog/bojler-elettartama.jpg',
    'alt'     => 'Rozsdás, öreg villanybojler tartály – az élettartam végén',
    'w'       => 800, 'h' => 500,
    'featured'=> false,
  ],
  [
    'slug'    => 'bojler-biztositekot-ver-ki',
    'title'   => 'Miért veri ki a bojler a biztosítékot? Okok és teendők',
    'excerpt' => 'Ha a villanybojler kioldja a biztosítékot, ne kapcsolja vissza! Ez az útmutató megmutatja a pontos okokat és mit kell tennie.',
    'cat'     => 'Hibajavítás',
    'date'    => '2025-02-03',
    'date_d'  => '2025. febr. 3.',
    'min'     => 5,
    'img'     => '/kepek/blog/bojler-biztositekot-ver-ki.jpg',
    'alt'     => 'Elektromos biztosítékszekrény – kioldott bojler biztosíték',
    'w'       => 800, 'h' => 500,
    'featured'=> false,
  ],
];

$featured  = $posts[0];
$grid_posts = array_slice($posts, 1);
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojleres Blog – Tippek, Hibakeresés, Tanácsok | Provi Domus Kft.</title>
<meta name="description" content="Bojler hibajelenségek, vízkőtelenítés, csere vs. javítás döntési útmutató, Ariston és Hajdú összehasonlítás. Szakmai cikkek Budapest legjobb bojlerszerelőjétől.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/blog/">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/blog/">
<meta property="og:title" content="Bojleres Blog – Tippek és Szakmai Cikkek | Provi Domus Kft.">
<meta property="og:description" content="Villanybojler hibajavítás, vízkőtelenítés, csere döntési útmutató – valós szerelési tapasztalatok alapján.">
<meta property="og:locale" content="hu_HU">
<link rel="stylesheet" href="/style.css">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Blog",
      "@id": "<?= $base ?>/blog/#blog",
      "name": "Bojleres Blog – Provi Domus Kft.",
      "url": "<?= $base ?>/blog/",
      "description": "Villanybojler hibajavítás, vízkőtelenítés, csere tanácsok – szakmai cikkek a Provi Domus Kft. szerelőitől.",
      "inLanguage": "hu",
      "publisher": {
        "@type": "Organization",
        "name": "Provi Domus Kft.",
        "url": "<?= $base ?>/"
      }
    },
    {
      "@type": "ItemList",
      "name": "Bojleres Blog cikkek",
      "itemListElement": [
        <?php foreach ($posts as $i => $p): ?>
        {
          "@type": "ListItem",
          "position": <?= $i + 1 ?>,
          "url": "<?= $base ?>/blog/<?= $p['slug'] ?>/"
        }<?= $i < count($posts) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Blog", "item": "<?= $base ?>/blog/"}
      ]
    }
  ]
}
</script>
</head>
<body>

<!-- URGENCY BAR -->
<div class="urgency-bar">
  ⚡ Bojler meghibásodás? Azonnal hívható: <a href="<?= $phone_link ?>"><?= $phone ?></a> – 0-24, hétvégén is
</div>

<!-- HEADER -->
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
      <a href="/blog/" class="active" aria-current="page">Blog</a>
      <a href="/ajanlatkeres/">Árajánlat</a>
      <a href="/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü megnyitása">
      <span></span><span></span><span></span>
    </label>
  </div>
</header>

<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="blog-hero-inner">
    <nav aria-label="Morzsa navigáció" class="breadcrumb" style="padding:0 0 16px;">
      <a href="/">Főoldal</a><span class="sep"> › </span><span>Blog</span>
    </nav>
    <h1>🔧 Bojleres Blog</h1>
    <p>Valós szerelési tapasztalatok, hibajelenségek, döntési útmutatók és terméktesztek – Budapest legjobb bojlerszerelőitől.</p>
  </div>
</section>

<!-- LISTING -->
<section class="section">
  <div style="max-width:1100px;margin:0 auto">

    <!-- Kategória szűrő -->
    <div class="cat-filter">
      <a href="/blog/" class="cat-btn active">Összes</a>
      <a href="/blog/?kat=hibajavitas" class="cat-btn">Hibajavítás</a>
      <a href="/blog/?kat=vizkotelenites" class="cat-btn">Vízkőtelenítés</a>
      <a href="/blog/?kat=termekek" class="cat-btn">Termékek</a>
      <a href="/blog/?kat=tanacsok" class="cat-btn">Tanácsok</a>
    </div>

    <!-- Kiemelt cikk -->
    <article class="post-featured">
      <div class="post-featured-img">
        <span class="post-featured-badge">⭐ Kiemelt cikk</span>
        <img
          src="<?= $featured['img'] ?>"
          alt="<?= htmlspecialchars($featured['alt']) ?>"
          width="<?= $featured['w'] ?>"
          height="<?= $featured['h'] ?>"
          loading="eager"
          fetchpriority="high"
          decoding="async"
        >
      </div>
      <div class="post-featured-body">
        <div class="post-cat-label"><?= $featured['cat'] ?></div>
        <h2 class="post-title"><a href="/blog/<?= $featured['slug'] ?>/"><?= htmlspecialchars($featured['title']) ?></a></h2>
        <p class="post-excerpt"><?= htmlspecialchars($featured['excerpt']) ?></p>
        <div class="post-meta">
          <span><?= $featured['date_d'] ?></span>
          <span class="post-meta-sep">·</span>
          <span><?= $featured['min'] ?> perc olvasás</span>
          <a href="/blog/<?= $featured['slug'] ?>/" class="post-read-link">Elolvasom →</a>
        </div>
      </div>
    </article>

    <!-- Cikk rács -->
    <div class="post-grid">
      <?php foreach ($grid_posts as $p): ?>
      <article class="post-card">
        <div class="post-card-img">
          <span class="post-cat-badge"><?= htmlspecialchars($p['cat']) ?></span>
          <img
            src="<?= $p['img'] ?>"
            alt="<?= htmlspecialchars($p['alt']) ?>"
            width="<?= $p['w'] ?>"
            height="<?= $p['h'] ?>"
            loading="lazy"
            decoding="async"
          >
        </div>
        <div class="post-card-body">
          <h2 class="post-title"><a href="/blog/<?= $p['slug'] ?>/"><?= htmlspecialchars($p['title']) ?></a></h2>
          <p class="post-excerpt"><?= htmlspecialchars($p['excerpt']) ?></p>
          <div class="post-meta">
            <span class="post-meta-date"><?= $p['date_d'] ?></span>
            <span class="post-meta-sep">·</span>
            <span class="post-meta-read"><?= $p['min'] ?> perc</span>
            <a href="/blog/<?= $p['slug'] ?>/" class="post-read-link">Olvasom →</a>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="cta-banner-inner">
    <h2>Bojler meghibásodás? Hívjon most!</h2>
    <p>1-2 óra kiszállás Budapest minden kerületébe, 0-24 – hétvégén és ünnepnapokon is.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="<?= $phone_link ?>" class="btn-primary">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank" rel="noopener">💬 WhatsApp</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p>Provi Domus Kft. – Villanybojler javítás, csere, vízkőtelenítés Budapest területén 2011 óta.</p>
    </div>
    <div class="footer-col">
      <h4>Szolgáltatások</h4>
      <a href="/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="/bojler-csere-budapest/">Bojler csere</a>
      <a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a>
      <a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a>
    </div>
    <div class="footer-col">
      <h4>Kapcsolat</h4>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
      <p style="margin-top:8px">0-24 h, 7/7 nap<br>Budapest minden kerülete</p>
    </div>
    <div class="footer-col">
      <h4>Blog</h4>
      <?php foreach (array_slice($posts, 0, 4) as $p): ?>
      <a href="/blog/<?= $p['slug'] ?>/"><?= htmlspecialchars(mb_substr($p['title'], 0, 42)) ?>…</a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Bojler Szerelő Budapest</span>
    <span>Tel.: <a href="<?= $phone_link ?>"><?= $phone ?></a></span>
  </div>
</footer>

<!-- Lebegő hívás gombok -->
<div class="float-btns">
  <a href="<?= $wa_link ?>" class="float-btn wa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
  <a href="<?= $phone_link ?>" class="float-btn call" aria-label="Hívás">📞</a>
</div>

</body>
</html>
