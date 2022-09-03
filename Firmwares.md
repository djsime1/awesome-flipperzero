<em>(Adapté des <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666146804170792">messages</a> <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666162247581806">originaux</a> <a href="discord.com/users/597435984925294620">de Nano</a> dans le Discord Unleashed firmware.)</em>

<h1>Différences entre les firmwares du Flipper Zero</h1>
<h3>
  <code>::</code> Dernière mise à jour : 3 août 2022. <code>::</code>
</h3>
<p>Ce document tiendra <em>(nous l'espérons)</em> une liste des différences entre les différentes branches du <a
    href="#official">firmware du Flipper Zero</a>. <br>Si j'avais eu un dollar à chaque fois que j'ai vu cette question posée, je ne serais pas endetté pour mes études.. ¯\_(ツ)_/¯ <br>Pensez également à consulter la liste <a
    href="https://github.com/djsime1/awesome-flipperzero">Awesome Flipper Zero</a>, ainsi que mon <a
    href="https://gist.github.com/djsime1/73adaaf24f20b8bb70c4d4854431b0f1">discours sur les deux types d'utilisateurs de Flipper.</a>. </p>
    <table><tr>
      <td>
        <strong>Aller à:</strong>
      </td>
      <td><a href="#official">Officiel</a></td>
      <td><a href="#unleashed">Unleashed</a></td>
      <td><a href="#plugins">RogueMaster</a></td>
      <td><a href="#v1nc">v1nc</a></td>
      <td><a href="#wetox">Wetox</a></td>
      <td><a href="#muddledbox">MuddledBox</a></td>
      <td><a href="#summary">Summary (TL;DR)</a></td>
    </tr></table>
<h2 id="official">Officiel <kbd>
    <a href="https://github.com/flipperdevices/flipperzero-firmware">flipperdevices/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>La transmission Sub-GHz est verrouillée par région en raison de limitations légales..</li>
  <li>Ne permet pas de sauvegarder et d'envoyer des rolling codes (cryptés dynamiques) en Sub-GHz, mais les affiche uniquement dans la liste des captures..
  </li>
  <li>Nom d'appareil réglé en usine qui apparaît partout (diffusion Bluetooth, connexion USB, etc.) et qui ne peut pas être modifié.</li>
  <ul>
    <li><em>L'équipe Flipper dispose d'une liste de noms d'appareils avec les informations de production correspondantes <a href="https://discord.com/channels/740930220399525928/765282833744265246/971881286543224852">(Pas d'adresse de livraison)</a> afin qu'ils puissent vous aider plus facilement en cas de RMA.</em></li>
  </ul>
</ul>
<h2 id="unleashed">Unleashed <kbd>
    <a href="https://github.com/Eng1n33r/flipperzero-firmware">Eng1n33r/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li><em>(AKA Code Grabber firmware.)</em></li>
  <li>Very active development and Discord community.</li>
  <li>Removes Sub-GHz regional transmission restrictions by default.</li>
  <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>dangerous_settings</em> file.</li>
  <li>Adds extra Sub-GHz frequencies by default through Official <em>setting_user</em> file.</li>
  <li>Adds extra Mifare classic keys.</li>
  <li>Can be used to capture and send dynamic encrypted protocols/rolling codes. <em>(Modern garage doors, etc.)</em></li>
  <li>Encrypted Sub-GHz signals and codes can be added manually.</li>
  <li>Current modified and new Sub-GHz protocols list <a href="https://github.com/Eng1n33r/flipperzero-firmware#current-modified-and-new-subghz-protocols-list">can be found here</a>.</li>
  <li>Comes with proven-stable extra apps and plugins from the general community.
  <ul><li>More details and full list of changes can be found in their <a href="https://github.com/Eng1n33r/flipperzero-firmware#readme">README</a>.</li></ul>
</ul>
<h2 id="plugins">RogueMaster <kbd>
    <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins">RogueMaster/flipperzero-firmware-wPlugins</a>
  </kbd>
</h2>
<ul>
  <li>Built off Unleashed as the base firmware (which is a fork of Official dev firmware.)</li>
  <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
  <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
  <li>Adds extra custom assets <em>(Mifare classic dict, example files, etc)</em>.</li>
  <li>Includes some PRs from Official firmware that are not yet merged in Official firmware <em>(bleeding edge)</em>.</li>
  <li>Includes a number of games, some experimental only, as well as "Games Only Mode" (aka Dumb Mode).</li>
  <li>Includes an enhanced, but experimental, new "Dolphin Level" system.</li>
  <li>Has added most known community tweaks, plugins & games (some may be unstable or incomplete.)</li>
  <li>Also includes a number of other small tweaks and changes.</li>
  <ul><li>More details and full list in their <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins#readme">README</a>.</li></ul>
</ul>
<h2 id="v1nc">v1nc <kbd>
    <a href="https://github.com/v1nc/flipperzero-firmware">v1nc/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>Supports different keyboard layouts for Duckyscripts via the script keyword <code>DUCKY_LANG</code></li>
  <li>Up to date fork of the Unleashed firmware</li>
  <li>Includes community plugins & games </li>
</ul>
<h2 id="wetox">Wetox <kbd>
    <a href="https://github.com/wetox-team/flipperzero-firmware">wetox-team/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>The dev branch is intended for public use, while others are either testing or archived hackathon submissions.</li>
  <li>Cracking T5577 RFID passwords via dictionary attack.</li>
  <li>Desktop header branding [WTX].</li>
  <li>Has some frequently updated interesting experimental stuff in different <a href="https://github.com/wetox-team/flipperzero-firmware/branches">branches</a>.</li>
</ul>
<h2 id="muddledbox">MuddledBox <kbd>
    <a href="https://github.com/MuddledBox/flipperzero-firmware">MuddledBox/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li><b>Abandoned. Not updated for more than 2 months.</b></li>
  <li>Removes Sub-GHz regional transmission restrictions.</li>
  <li>Adds self-promo images to about page in settings.</li>
  <li>Adds a few extra common Sub-GHz frequencies to capture on.</li>
</ul>
<h2 id="summary">Summary <kbd>(TL;DR)</kbd></h2>
<ul>
  <li>Staying up to date with upstream (official) firmware is important.</li>
  <li>TX restriction removal is illegal in most circumstances, use at your own risk.</li>
  <li>MuddledBox was the first popular firmware fork, but didn't grow up.</li>
  <li>Unleashed is more focused on core functionality, stability, and Sub-GHz protocols.</li>
  <li>RogueMaster has more community plugins, visual tweaks, games, and changes (some experimental).</li>
</ul>
