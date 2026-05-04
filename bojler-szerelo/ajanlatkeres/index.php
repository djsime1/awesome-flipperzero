<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+%C3%81raj%C3%A1nlatot+szeretn%C3%A9k+k%C3%A9rni.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';

$sent  = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev       = htmlspecialchars(trim($_POST['nev'] ?? ''));
    $telefon   = htmlspecialchars(trim($_POST['telefon'] ?? ''));
    $email_be  = htmlspecialchars(trim($_POST['email_be'] ?? ''));
    $bojler    = htmlspecialchars(trim($_POST['bojler'] ?? ''));
    $problema  = htmlspecialchars(trim($_POST['problema'] ?? ''));

    if ($nev && $telefon) {
        $subject = "Új árajánlat kérés – bojler-szerelo-budapest.hu";
        $body    = "Név: $nev\nTelefon: $telefon\nE-mail: $email_be\nBojler típusa: $bojler\nProbléma:\n$problema";
        $headers = "From: noreply@bojler-szerelo-budapest.hu\r\nReply-To: $email_be";
        mail($email, $subject, $body, $headers);
        $sent = true;
    } else {
        $error = 'Kérem adja meg a nevét és telefonszámát!';
    }
}
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ingyenes Árajánlat – Bojler Javítás, Csere Budapest | Provi Domus Kft.</title>
<meta name="description" content="Kérjen ingyenes árajánlatot bojler javításra, cserére vagy vízkőtelenítésre Budapesten. 1 órán belül visszahívjuk. 0-24 elérhető szerviz.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/ajanlatkeres/">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/ajanlatkeres/">
<meta property="og:title" content="Ingyenes Árajánlat – Bojler Szerelő Budapest">
<meta property="og:description" content="Kérjen ingyenes árajánlatot bojler javításra vagy cserére. 1 órán belül visszahívjuk.">
<meta property="og:locale" content="hu_HU">
<link rel="stylesheet" href="/style.css">
<style>
.quote-hero{background:linear-gradient(135deg,#1a2744 0%,#0d1b35 100%);padding:56px 20px 48px;text-align:center;color:#fff}
.quote-hero h1{font-size:clamp(1.6rem,4vw,2.4rem);margin:0 0 12px;font-weight:800}
.quote-hero h1 span{color:#ff6b00}
.quote-hero p{color:#b0bcd4;font-size:1.05rem;margin:0 0 20px}
.quote-badges{display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-top:16px}
.quote-badge{background:rgba(255,107,0,.15);border:1px solid rgba(255,107,0,.3);color:#ff9a4d;padding:6px 14px;border-radius:20px;font-size:.85rem}
.quote-layout{max-width:1000px;margin:0 auto;padding:48px 20px;display:grid;grid-template-columns:1fr 320px;gap:32px;align-items:start}
@media(max-width:760px){.quote-layout{grid-template-columns:1fr}}
.quote-form-box{background:#fff;border-radius:14px;padding:32px;box-shadow:0 4px 24px rgba(0,0,0,.08)}
.quote-form-box h2{font-size:1.3rem;color:#1a2744;margin:0 0 24px;font-weight:700}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
@media(max-width:560px){.form-row{grid-template-columns:1fr}}
.form-group{margin-bottom:16px}
.form-group label{display:block;font-size:.85rem;color:#555;margin-bottom:6px;font-weight:600}
.form-group input,.form-group select,.form-group textarea{width:100%;padding:12px 14px;border:1.5px solid #dde3ef;border-radius:8px;font-size:.95rem;font-family:inherit;box-sizing:border-box;transition:border-color .2s}
.form-group input:focus,.form-group select:focus,.form-group textarea:focus{outline:none;border-color:#ff6b00}
.form-group textarea{resize:vertical;min-height:100px}
.form-submit{width:100%;padding:14px;background:#ff6b00;color:#fff;border:none;border-radius:8px;font-size:1rem;font-weight:700;cursor:pointer;transition:background .2s}
.form-submit:hover{background:#e55c00}
.form-note{font-size:.8rem;color:#888;margin-top:10px;text-align:center}
.form-success{background:#e8f5e9;border:1.5px solid #4caf50;border-radius:10px;padding:20px;text-align:center;color:#2e7d32}
.form-success strong{display:block;font-size:1.1rem;margin-bottom:6px}
.form-error{background:#fdecea;border:1.5px solid #f44336;border-radius:8px;padding:12px 16px;color:#c62828;margin-bottom:16px;font-size:.9rem}
.quote-sidebar .phone-cta{background:#ff6b00;border-radius:14px;padding:28px 24px;color:#fff;text-align:center;margin-bottom:20px}
.quote-sidebar .phone-cta h3{font-size:1rem;margin:0 0 10px;font-weight:600;opacity:.9}
.quote-sidebar .phone-cta a{display:block;font-size:1.5rem;font-weight:800;color:#fff;text-decoration:none;margin:8px 0}
.quote-sidebar .phone-cta p{font-size:.85rem;opacity:.85;margin:8px 0 0}
.quote-sidebar .wa-btn{display:block;background:#25d366;color:#fff;text-align:center;padding:13px;border-radius:10px;font-weight:700;text-decoration:none;margin-bottom:16px;font-size:.95rem}
.quote-sidebar .trust-list{background:#f8f9fb;border-radius:12px;padding:20px 24px}
.quote-sidebar .trust-list h4{font-size:.9rem;color:#1a2744;font-weight:700;margin:0 0 14px}
.quote-sidebar .trust-list li{list-style:none;padding:6px 0;border-bottom:1px solid #eee;font-size:.9rem;color:#444}
.quote-sidebar .trust-list li:last-child{border-bottom:none}
.quote-sidebar .trust-list ul{margin:0;padding:0}
</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Ingyenes Árajánlat – Bojler Szerelő Budapest",
  "url": "<?= $base ?>/ajanlatkeres/",
  "description": "Kérjen ingyenes árajánlatot bojler javításra, cserére Budapest területén.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type":"ListItem","position":1,"name":"Főoldal","item":"<?= $base ?>/"},
      {"@type":"ListItem","position":2,"name":"Árajánlat","item":"<?= $base ?>/ajanlatkeres/"}
    ]
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
      <a href="<?= $base ?>/ajanlatkeres/" class="active">Árajánlat</a>
      <a href="<?= $base ?>/kapcsolat/">Kapcsolat</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
    <label for="nav-check" class="nav-toggle" aria-label="Menü"><span></span><span></span><span></span></label>
  </div>
</header>

<section class="quote-hero">
  <div>
    <h1>Ingyenes <span>Árajánlatkérés</span></h1>
    <p>Töltse ki az alábbi űrlapot – <strong>1 órán belül visszahívjuk</strong> pontos árajánlattal.<br>Nincs kötelezettség!</p>
    <div class="quote-badges">
      <span class="quote-badge">⚡ 0-24 Szerviz</span>
      <span class="quote-badge">📞 1 órán belül visszahívunk</span>
      <span class="quote-badge">✅ 12 hó garancia</span>
      <span class="quote-badge">🧾 Áfás számla</span>
      <span class="quote-badge">🔧 Eredeti alkatrészek</span>
    </div>
  </div>
</section>

<div class="quote-layout">
  <div class="quote-form-box">
    <h2>📋 Árajánlatkérő űrlap</h2>
    <?php if ($sent): ?>
    <div class="form-success">
      <strong>✅ Köszönjük a megkeresést!</strong>
      Hamarosan visszahívjuk a megadott telefonszámon. Ha sürgős, hívjon minket közvetlenül: <a href="<?= $phone_link ?>"><?= $phone ?></a>
    </div>
    <?php else: ?>
    <?php if ($error): ?><div class="form-error"><?= $error ?></div><?php endif; ?>
    <form method="post" action="">
      <div class="form-row">
        <div class="form-group">
          <label for="nev">Teljes neve *</label>
          <input type="text" id="nev" name="nev" placeholder="Kovács János" required>
        </div>
        <div class="form-group">
          <label for="telefon">Telefonszám *</label>
          <input type="tel" id="telefon" name="telefon" placeholder="06 70 123 4567" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="email_be">E-mail cím</label>
          <input type="email" id="email_be" name="email_be" placeholder="pelda@email.hu">
        </div>
        <div class="form-group">
          <label for="bojler">Bojler típusa / márkája</label>
          <select id="bojler" name="bojler">
            <option value="">-- Válasszon --</option>
            <option>Ariston</option>
            <option>Hajdú</option>
            <option>Drazice</option>
            <option>Atlantic</option>
            <option>Egyéb / Nem tudom</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="problema">Miben segíthetünk?</label>
        <textarea id="problema" name="problema" placeholder="Pl. nem melegít a bojler, csöpög, biztosítékot ver ki..."></textarea>
      </div>
      <button type="submit" class="form-submit">📩 Árajánlatot kérek – visszahívnak 1 órán belül</button>
      <p class="form-note">A megadott adatokat kizárólag az ajánlatadáshoz használjuk fel.</p>
    </form>
    <?php endif; ?>
  </div>

  <aside class="quote-sidebar">
    <div class="phone-cta">
      <h3>Telefonos elérhetőség</h3>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
      <p>0-24-ben fogadunk hívásokat</p>
    </div>
    <a href="<?= $wa_link ?>" class="wa-btn" target="_blank">💬 WhatsApp üzenet</a>
    <div class="trust-list">
      <h4>Miért válasszon minket?</h4>
      <ul>
        <li>✅ 1-2 óra kiszállás Budapesten</li>
        <li>✅ 0-24 elérhetőség, hétvégén is</li>
        <li>✅ 12 hónap garancia a munkára</li>
        <li>✅ Áfás számla minden esetben</li>
        <li>✅ Eredeti gyári alkatrészek</li>
        <li>✅ Ariston és Hajdú szakszerviz</li>
        <li>⭐ 4.9/5 – 200+ értékelés alapján</li>
      </ul>
    </div>
  </aside>
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
      <strong>Kapcsolat</strong>
      <a href="<?= $phone_link ?>"><?= $phone ?></a>
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
      <a href="<?= $wa_link ?>" target="_blank">WhatsApp</a>
    </div>
  </div>
  <div class="footer-bottom">© <?= date('Y') ?> Provi Domus Kft. | <a href="<?= $base ?>/ajanlatkeres/">Árajánlat</a> | <a href="<?= $base ?>/kapcsolat/">Kapcsolat</a></div>
</footer>

</body>
</html>
