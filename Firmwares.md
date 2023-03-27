<h1>Flipper Zero firmware differences</h1>
<h3>
    <code>::</code> Last updated Mar 27 2023. <code>::</code>
</h3>
<p>This document will <em>(hopefully)</em> maintain a list of differences between various forks of the <a
    href="#official">Flipper Zero firmware</a>. <br>If I had a dollar for every time I&#39;ve seen this question asked,
  I wouldn&#39;t be in college debt. ¯\_(ツ)_/¯</p>
    <table><tr>
      <td>
        <strong>Jump to:</strong>
      </td>
      <td><a href="#plugins">RogueMaster</a></td>
      <td><a href="#unleashed">Unleashed</a></td>
      <td><a href="#official">Official</a></td>
      <td><a href="#Squachware">Squachware</a></td>
      <td><a href="#summary">Summary (TL;DR)</a></td>
    </tr></table>

<h2 id="plugins">RogueMaster<kbd>
    <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins">RogueMaster/flipperzero-firmware-wPlugins</a>
  </kbd>
</h2>
<ul>
  <li>Built off Unleashed as the base firmware (which is a fork of Official dev firmware.)</li>
  <li>First to allow for rename through Name Changer app.</li>
  <li>First to allow for removal of Sub-GHz regional transmission restrictions through Extend Range app.</li>
  <li>Passport fully customizable</li>
  <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
  <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
  <li>Has Sub-GHz protocols and all the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
  <li>Adds extra custom assets <em>(Mifare classic dict, example files, fun files, etc)</em>.</li>
  <li>Includes some PRs from Unleashed and Official firmware that are not yet merged <em>(bleeding edge)</em>.</li>
  <li>Includes a number of games, some experimental, as well as a real "Games Only Mode".</li>
  <li>Includes an enhanced new "Dolphin Level" system.</li>
  <li>Has added most known community tweaks, plugins & games</li>
  <li>Also includes a number of other small tweaks and changes.</li>
  <ul><li>More details and full list in their <a href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins#readme">README</a>.</li></ul>

</ul>
<h2 id="unleashed">
    Unleashed
    <kbd>
        <a href="https://github.com/DarkFlippers/unleashed-firmware">DarkFlippers/unleashed-firmware</a>
    </kbd>
</h2>
<ul>
    <li><em>(AKA Code Grabber firmware.)</em></li>
    <li>Very active development and Discord community.</li>
    <li>Removes Sub-GHz regional transmission restrictions by default.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>dangerous_settings</em> file.</li>
    <li>Adds extra Sub-GHz frequencies by default through Official <em>setting_user</em> file.</li>
    <li>Adds extra Mifare classic keys to included dict file and leaves user file untouched.</li>
    <li>Can be used to capture and send dynamic encrypted protocols/rolling codes. <em>(Modern garage doors, etc.)</em>
    </li>
    <li>Encrypted Sub-GHz signals and codes can be added manually.</li>
    <li>Current modified and new Sub-GHz protocols list <a
            href="https://github.com/DarkFlippers/unleashed-firmware#current-modified-and-new-subghz-protocols-list">can
            be found here</a>.</li>
    <li>Comes with extra apps and plugins from the general community through SD Application loader (FAP files).
        <ul>
            <li>More details and full list of changes can be found in their <a
                    href="https://github.com/DarkFlippers/unleashed-firmware#readme">README</a>.</li>
        </ul>
</ul>
<h2 id="official">Official<kbd>
    <a href="https://github.com/flipperdevices/flipperzero-firmware">flipperdevices/flipperzero-firmware</a>
  </kbd>
</h2>
<ul>
  <li>Has region-locked Sub-GHz transmission because of legal limitations.</li>
  <li>Has no ability to save and send rolling codes (dynamic encrypted) in Sub-GHz, only shows them in captured list.
  </li>
  <li>Factory-set device name that shows everywhere (Bluetooth broadcast, USB connection, etc) that cannot be changed.</li>
    <li><em>The Flipper team has a list of device names with their corresponding production information <a href="https://discord.com/channels/740930220399525928/765282833744265246/971881286543224852">(No shipping address)</a> so they can assist you easier in case of an RMA.</em></li>
  </ul>
<h2 id="Squachware">
    Squachware
    <kbd>
        <a href="https://github.com/skizzophrenic/SquachWare-CFW">skizzophrenic/SquachWare-CFW - [TalkingSasquach](https://www.youtube.com/@TalkingSasquach)</a>
    </kbd>
</h2>
<ul>
    <li>Fork of <a href="#official">Official</a>.</li>
    <li>Adds custom-themed graphics that are not included in the Official Firmware.</li>
    <li>Keeps Sub-GHz regional transmission restrictions like Official Firmware.</li>
    <li>Has many of the apps that are available from <a href="#plugins">RogueMaster</a>.</li>
</ul>
<h2 id="summary">
    📝 Summary
    <kbd>(TL;DR)</kbd>
</h2>
<ul>
    <li>Staying up to date with upstream (official) firmware is important.</li>
    <li>TX restriction removal is illegal in most circumstances, use at your own risk.</li>
    <li>RogueMaster is more focused on visual tweaks, new items, and changes (some experimental).</li>
    <li>RogueMaster is based on Unleashed and OFW and keeps up to date on both on a daily basis.</li>
    <li>Unleashed is more focused on core functionality, stability, and Sub-GHz protocols.</li>
</ul>
