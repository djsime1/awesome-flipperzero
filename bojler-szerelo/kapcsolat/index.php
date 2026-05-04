<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Kapcsolatba+szeretn%C3%A9k+l%C3%A9pni.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kapcsolat – Bojler Szerelő Budapest | Provi Domus Kft.</title>
<meta name="description" content="Vegye fel velünk a kapcsolatot! Bojler javítás, csere, vízkőtelenítés Budapesten. Telefon: 06 70 164 4000. 0-24 elérhető szerviz.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/kapcsolat/">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/kapcsolat/">
<meta property="og:title" content="Kapcsolat – Bojler Szerelő Budapest">
<meta property="og:description" content="Hívjon minket 0-24! Bojler javítás, csere Budapesten. Tel: 06 70 164 4000">
<meta property="og:locale" content="hu_HU">
<link rel="stylesheet" href="/style.css">
<style>
.contact-hero{background:linear-gradient(135deg,#1a2744 0%,#0d1b35 100%);padding:56px 20px 48px;text-align:center;color:#fff}
.contact-hero h1{font-size:clamp(1.6rem,4vw,2.4rem);margin:0 0 12px;font-weight:800}
.contact-hero p{color:#b0bcd4;font-size:1.05rem;margin:0}
.contact-layout{max-width:1000px;margin:0 auto;padding:48px 20px;display:grid;grid-template-columns:1fr 1fr;gap:32px}
@media(max-width:680px){.contact-layout{grid-template-columns:1fr}}
.contact-card{background:#fff;border-radius:14px;padding:28px;box-shadow:0 4px 24px rgba(0,0,0,.07);text-align:center}
.contact-card .icon{font-size:2.4rem;margin-bottom:12px}
.contact-card h2{font-size:1.1rem;color:#1a2744;font-weight:700;margin:0 0 10px}
.contact-card p{color:#666;font-size:.9rem;margin:0 0 16px;line-height:1.6}
.contact-card a.cta{display:inline-block;background:#ff6b00;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.95rem}
.contact-card a.cta:hover{background:#e55c00}
.contact-card a.cta-wa{display:inline-block;background:#25d366;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.95rem}
.contact-card .phone-big{font-size:1.5rem;font-weight:800;color:#ff6b00;text-decoration:none;display:block;margin:8px 0}
.contact-card .hours{background:#f8f9fb;border-radius:8px;padding:12px 16px;font-size:.85rem;color:#555;margin-top:12px}
.contact-help{max-width:1000px;margin:0 auto 48px;padding:0 20px}
.contact-help-box{background:#f0f4ff;border-radius:14px;padding:32px;text-align:center}
.contact-help-box h2{font-size:1.2rem;color:#1a2744;font-weight:700;margin:0 0 12px}
.contact-help-box p{color:#555;font-size:.95rem;line-height:1.7;margin:0 0 20px}
.contact-help-tags{display:flex;gap:10px;flex-wrap:wrap;justify-content:center}
.contact-help-tags span{background:#fff;border:1.5px solid #c8d4f0;padding:6px 16px;border-radius:20px;font-size:.85rem;color:#1a2744}
.contact-info-row{max-width:1000px;margin:0 auto 48px;padding:0 20px;display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
@media(max-width:680px){.contact-info-row{grid-template-columns:1fr}}
.info-item{background:#fff;border-radius:12px;padding:20px 24px;box-shadow:0 2px 12px rgba(0,0,0,.05);text-align:center}
.info-item .info-icon{font-size:1.6rem;margin-bottom:8px}
.info-item h3{font-size:.9rem;color:#888;font-weight:600;margin:0 0 6px;text-transform:uppercase;letter-spacing:.05em}
.info-item p,.info-item a{font-size:.95rem;color:#1a2744;font-weight:600;text-decoration:none}
</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Kapcsolat – Bojler Szerelő Budapest",
  "url": "<?= $base ?>/kapcsolat/",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type":"ListItem","position":1,"name":"Főoldal","item":"<?= $base ?>/"},
      {"@type":"ListItem","position":2,"name":"Kapcsolat","item":"<?= $base ?>/kapcsolat/"}
    ]
  },
  "mainEntity": {
    "@type": ["Plumber","HVACBusiness"],
    "name": "Provi Domus Kft. – Bojler Javítás Budapest",
    "telephone": "+36701644000",
    "email": "<?= $email ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Budapest",
      "addressCountry": "HU"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "00:00",
      "closes": "23:59"
    }
  }
}
</script>
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
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú</a>
      <a href="<?= $base ?>/blog/">Blog</a>
      <a href="<?= $base ?>/ajanlatkeres/">Árajánlat</a>
      <a href="<?= $base ?>/kapcsolat/" class="active">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü"><span></span><span></span><span></span></label>
  </div>
</header>

<section class="contact-hero">
  <h1>Kapcsolat</h1>
  <p>Telefonon és e-mailben is elérhetőek vagyunk.<br>Ha gyors segítsége van szüksége, vegye fel velünk a kapcsolatot!</p>
</section>

<div class="contact-layout" style="margin-bottom:0;padding-bottom:32px">
  <div class="contact-card">
    <div class="icon">📞</div>
    <h2>Telefon</h2>
    <p>A leggyorsabb kapcsolatfelvétel telefonon történik, különösen sürgős esetben, amikor a bojler nem melegít, csöpög vagy bizonytalanul működik.</p>
    <a class="phone-big" href="<?= $phone_link ?>"><?= $phone ?></a>
    <div class="hours">⏰ 0-24 ben fogadunk hívásokat, hétvégén is</div>
  </div>
  <div class="contact-card">
    <div class="icon">💬</div>
    <h2>WhatsApp & E-mail</h2>
    <p>WhatsApp üzenetben is elérhetsz minket – küldd el a bojler típusát és a hibát, és visszaírunk vagy visszahívunk.</p>
    <a href="<?= $wa_link ?>" class="cta-wa" target="_blank" style="margin-bottom:10px;display:inline-block">💬 WhatsApp üzenet</a>
    <br>
    <a href="mailto:<?= $email ?>" style="color:#ff6b00;font-weight:600;text-decoration:none;font-size:.95rem"><?= $email ?></a>
  </div>
</div>

<div class="contact-info-row">
  <div class="info-item">
    <div class="info-icon">📍</div>
    <h3>Terület</h3>
    <p>Budapest és agglomeráció</p>
  </div>
  <div class="info-item">
    <div class="info-icon">⚡</div>
    <h3>Kiszállás</h3>
    <p>1-2 óra kiszállás</p>
  </div>
  <div class="info-item">
    <div class="info-icon">🕐</div>
    <h3>Nyitvatartás</h3>
    <p>0-24 / Minden nap</p>
  </div>
</div>

<div class="contact-help">
  <div class="contact-help-box">
    <h2>Miben tudunk segíteni?</h2>
    <p>Bojler javítás, bojler csere, vízkőtelenítés, típusspecifikus kérdések és általános döntési segítség egyaránt szóba jöhet. Ariston és Hajdú szakszerviz.</p>
    <div class="contact-help-tags">
      <span>🔧 Bojler javítás</span>
      <span>🔄 Bojler csere</span>
      <span>💧 Vízkőtelenítés</span>
      <span>🏷️ Ariston szerviz</span>
      <span>🏷️ Hajdú szerviz</span>
      <span>⚡ Sürgős hívás</span>
    </div>
  </div>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <strong>🔥 Bojler Szerelő Budapest</strong>
      <p>Provi Domus Kft. – Bojler javítás, csere, vízkőtelenítés Budapest teljes területén.</p>
    </div>
    <div class="footer-col">
      <strong>Szolgáltatások</strong>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston szerviz</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú szerviz</a>
    </div>
    <div class="footer-col">
      <strong>Elérhetőség</strong>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
      <a href="<?= $wa_link ?>" target="_blank">WhatsApp</a>
    </div>
  </div>
  <div class="footer-bottom">© <?= date('Y') ?> Provi Domus Kft. | <a href="<?= $base ?>/ajanlatkeres/">Árajánlat</a> | <a href="<?= $base ?>/kapcsolat/">Kapcsolat</a></div>
</footer>

</body>
</html>
