<em>(Adapted from <a href="discord.com/users/597435984925294620">Nano&#39;s</a> <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666146804170792">original</a> <a href="https://discord.com/channels/937479784148115456/937489970007003166/970666162247581806">messages</a> in the Unleashed firmware Discord.)</em>

<h1>Flipper Zero firmware differences</h1>
<h3>
  <code>::</code> Last updated Aug 3 2022. <code>::</code>
</h3>
<p>This document will <em>(hopefully)</em> maintain a list of differences between various forks of the <a
    href="#official">Flipper Zero firmware</a>. <br>If I had a dollar for every time I&#39;ve seen this question asked,
  I wouldn&#39;t be in college debt. ¯\_(ツ)_/¯ <br>Also consider checking out the <a
    href="https://github.com/djsime1/awesome-flipperzero">Awesome Flipper Zero list</a>, and my <a
    href="https://gist.github.com/djsime1/73adaaf24f20b8bb70c4d4854431b0f1">rant about the two types of Flipper users</a>. </p>
    <table><tr>
      <td>
        <strong>Jump to:</strong>
      </td>
      <td><a href="#official">Official</a></td>
      <td><a href="#unleashed">Unleashed</a></td>
      <td><a href="#plugins">RogueMaster</a></td>
      <td><a href="#v1nc">v1nc</a></td>
      <td><a href="#wetox">Wetox</a></td>
      <td><a href="#muddledbox">MuddledBox</a></td>
      <td><a href="#summary">Summary (TL;DR)</a></td>
    </tr></table>
<h2 id="official">Official <kbd>
    <a href="https://github.com/flipperdevices/flipperzero-firmware">flipperdevices/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>Has region-locked Sub-GHz transmission because of legal limitations.</li>
  <li>Has no ability to save and send rolling codes (dynamic encrypted) in Sub-GHz, only shows them in captured list.
  </li>
  <li>Factory-set device name that shows everywhere (Bluetooth broadcast, USB connection, etc) that cannot be changed.</li>
  <ul>
    <li><em>The Flipper team has a list of device names with their corresponding production information <a href="https://discord.com/channels/740930220399525928/765282833744265246/971881286543224852">(No shipping address)</a> so they can assist you easier in case of an RMA.</em></li>
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
