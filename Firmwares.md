<em>(Adapté des <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666146804170792">messages</a> <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666162247581806">originaux</a> <a href="discord.com/users/597435984925294620">de Nano</a> dans le Unleashed firmware Discord.)</em>

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
  <li><em>(ALIAS Code Grabber firmware.)</em></li>
  <li>Communauté de développement et Discord très active.</li>
  <li>Supprime les restrictions de transmission régionales Sub-GHz par défaut.</li>
  <li>Autorise une gamme de fréquences étendue Sub-GHz(ex. les téléavertisseurs de restaurant) par le biais du fichier <em>dangerous_settings</em>.</li>
  <li>Ajoute des fréquences Sub-GHz supplémentaires par défaut via le fichier officiel <em>setting_user</em>.</li>
  <li>Ajoute des clés Mifare classiques supplémentaires.</li>
  <li>Peut être utilisé pour capturer et envoyer des protocoles cryptés dynamiques/codes roulants. <em>(portes de garage modernes, etc.)</em></li>
  <li>Les signaux et les codes Sub-GHz cryptés peuvent être ajoutés manuellement.</li>
  <li>La liste des protocoles Sub-GHz actuels, modifiés et nouveaux <a href="https://github.com/Eng1n33r/flipperzero-firmware#current-modified-and-new-subghz-protocols-list">peuvent être trouvés ici</a>.</li>
  <li>Livré avec des applications et des plugins supplémentaires stables et éprouvés provenant de la communauté générale.
  <ul><li>Vous trouverez plus de détails et la liste complète des changements dans le document suivant <a href="https://github.com/Eng1n33r/flipperzero-firmware#readme">LISEZMOI</a>.</li></ul>
</ul>
<h2 id="plugins">RogueMaster <kbd>
    <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins">RogueMaster/flipperzero-firmware-wPlugins</a>
  </kbd>
</h2>
<ul>
  <li>Construit à partir de Unleashed comme firmware de base (qui est un fork du firmware de développement officiel.)</li>
  <li>Supprime les restrictions de transmission régionale Sub-GHz après les modifications apportées au fichier <em>extend_range.txt</em>.</li>
    <li>Autorise une gamme de fréquences étendue Sub-GHz (ex. les téléavertisseurs de restaurant) par le biais du fichier <em>extend_range.txt</em>.</li>
  <li>Possède les protocoles Sub-GHz et la plupart des autres changements pris dans FW Unleashed. (voir <a href="#unleashed">changements</a>).</li>
  <li>Ajout d'actifs supplémentaires personnalisés <em>(Dict Mifare classic, fichiers d'exemples, etc.)</em>.</li>
  <li>Inclut certains PRs du firmware officiel qui ne sont pas encore fusionnés dans le firmware officiel <em>(bleeding edge)</em>.</li>
  <li>Comprend un certain nombre de jeux, dont certains ne sont qu'expérimentaux, ainsi que le "mode jeux seulement" (alias mode débile).</li>
  <li>Inclut un nouveau système "Dolphin Level" amélioré mais expérimental.</li>
  <li>A ajouté les ajustements, plugins et jeux les plus connus de la communauté (certains peuvent être instables ou incomplets.)</li>
  <li>Comprend également un certain nombre d'autres petits ajustements et modifications.</li>
  <ul><li>Plus de détails et liste complète dans leur <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins#readme">LISEZMOI</a>.</li></ul>
</ul>
<h2 id="v1nc">v1nc <kbd>
    <a href="https://github.com/v1nc/flipperzero-firmware">v1nc/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>Prise en charge de différentes dispositions de clavier pour les Duckyscripts via le mot clé de script <code>DUCKY_LANG</code></li>
  <li>Une version actualisée du firmware Unleashed.</li>
  <li>Comprend des plugins et des jeux communautaires. </li>
</ul>
<h2 id="wetox">Wetox <kbd>
    <a href="https://github.com/wetox-team/flipperzero-firmware">wetox-team/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>La branche de développement est destinée à un usage public, tandis que d'autres testent ou archivent les soumissions de hackathon.</li>
  <li>Craquage des mots de passe RFID T5577 via une attaque par dictionnaire.</li>
  <li>Marquage de l'en-tête du bureau [WTX].</li>
  <li>A des trucs expérimentaux intéressants fréquemment mis à jour dans différentes <a href="https://github.com/wetox-team/flipperzero-firmware/branches">branches</a>.</li>
</ul>
<h2 id="muddledbox">MuddledBox <kbd>
    <a href="https://github.com/MuddledBox/flipperzero-firmware">MuddledBox/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li><b>Abandonné. Pas mis à jour depuis plus de 2 mois.</b></li>
  <li>Supprime les restrictions de transmission régionales Sub-GHz.</li>
  <li>Ajoute des images d'auto-promotion à la page à propos dans les paramètres.</li>
  <li>Ajoute quelques fréquences sub-GHz communes supplémentaires à capturer.</li>
</ul>
<h2 id="summary">Sommaire <kbd>(TL;DR)</kbd></h2>
<ul>
  <li>Rester à jour avec le firmware en amont (officiel) est important.</li>
  <li>La suppression de la restriction TX est illégale dans la plupart des cas, utilisez-la à vos risques et périls.</li>
  <li>MuddledBox a été le premier fork de firmware populaire, mais n'a pas grandi.</li>
  <li>Unleashed est davantage axé sur les fonctionnalités de base, la stabilité et les protocoles Sub-GHz.</li>
  <li>RogueMaster a plus de plugins communautaires, d'ajustements visuels, de jeux et de changements (certains expérimentaux).</li>
</ul>
