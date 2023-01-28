<h1>Flipper Zero firmware differences</h1>
<h3>
    <code>::</code> Last updated Jan 20 2023. <code>::</code>
</h3>
<p>
    This document maintains a list of differences between various forks of the
    <a href="#official">Flipper Zero firmware</a>.
</p>
<table>
    <tr>
        <td>
            <strong>Jump to:</strong>
        </td>
        <td><a href="#official">Official</a></td>
        <td><a href="#unleashed">Unleashed</a></td>
        <td><a href="#plugins">RogueMaster</a></td>
        <td><a href="#Xtreme">Xtreme</a></td>
        <td><a href="#Dexv">Dexv</a></td>
        <td><a href="#SquachWare">SquachWare</a></td>
        <td><a href="#v1nc">v1nc</a></td>
        <td><a href="#wetox">Wetox</a></td>
        <td><a href="#muddledbox">MuddledBox</a></td>
        <td><a href="#summary">Summary (TL;DR)</a></td>
    </tr>
</table>
<h2 id="official">
    ✅ Official
    <kbd>
        <a href="https://github.com/flipperdevices/flipperzero-firmware">flipperdevices/flipperzero-firmware</a>
    </kbd>
</h2>
<ul>
    <li>Has region-locked Sub-GHz transmission because of legal limitations.</li>
    <li>Has no ability to save and send rolling codes (dynamic encrypted) in Sub-GHz, only shows them in captured list.
    </li>
    <li>Factory-set device name that shows everywhere (Bluetooth broadcast, USB connection, etc) that cannot be changed.
    </li>
    <ul>
        <li><em>The Flipper team has a list of device names with their corresponding production information <a
                    href="https://discord.com/channels/740930220399525928/765282833744265246/971881286543224852">(No
                    shipping address)</a> so they can assist you easier in case of an RMA.</em></li>
    </ul>
</ul>
<h2 id="unleashed">
    🔓 Unleashed
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
<h2 id="plugins">
    💫 RogueMaster
    <kbd>
        <a
            href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins">RogueMaster/flipperzero-firmware-wPlugins</a>
    </kbd>
</h2>
<ul>
    <li>Built off Unleashed as the base firmware (which is a fork of Official dev firmware.)</li>
    <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
    <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
    <li>Adds extra custom assets <em>(Mifare classic dict, example files, etc)</em>.</li>
    <li>Includes some PRs from Official firmware that are not yet merged in Official firmware <em>(bleeding edge)</em>.
    </li>
    <li>Includes experimental "Games Only Mode" (aka Dumb Mode).</li>
    <li>Includes an enhanced, but experimental, new "Dolphin Level" system.</li>
    <li>Includes extra apps and plugins from the general community through SD Application loader (FAP files).</li>
    <li>Also includes a number of other small tweaks, changes, and a ton of additional animations.</li>
    <ul>
        <li>More details and full list in their <a
                href="https://github.com/RogueMaster/flipperzero-firmware-wPlugins#readme">README</a>.</li>
    </ul>
</ul>
<h2 id="Xtreme">
    💋 Flipper-Xtreme
    <kbd>
        <a href="https://github.com/ClaraCrazy/Flipper-Xtreme/">ClaraCrazy/Flipper-Xtreme/</a>
    </kbd>
</h2>
<ul>
    <li>Built from RogueMaster (converted to fork of Official for future development).</li>
    <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
    <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
    <li>Adds extra custom assets <em>(Mifare classic dict, 18+ animations, example files, etc)</em>.</li>
    <li>Includes an enhanced/improved "Dolphin Level" system similar to RogueMaster.</li>
    <li>Includes extra apps and plugins from the general community through SD Application loader (FAP files).</li>
    <li>Also includes a number of other small tweaks, changes, and stability fixes.</li>
</ul>
<h2 id="Dexv">
    💎Dexv
    <kbd>
        <a href="https://github.com/DXVVAY/Dexvmaster0">DXVVAY/Dexvmaster0</a>
    </kbd>
</h2>
<ul>
    <li>Fork of <a href="#Xtreme">Clara Crazy's Xtreme FW</a> (converted to fork of Unleashed for future development).</li>
    <li>Adds custom-themed graphics and some extra features that are not included in the Official Firmware.</li>
    <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
    <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
    <li>Adds extra custom assets <em>(Mifare classic dict, example files, etc)</em>.</li>
    <li>Includes extra apps and plugins from the general community through SD Application loader (FAP files).</li>
</ul>
<h2 id="SquachWare">
    🌲 SquachWare
    <kbd>
        <a href="https://github.com/skizzophrenic/SquachWare-CFW">skizzophrenic/SquachWare-CFW</a>
    </kbd>
</h2>
<ul>
    <li><em>(OEM+)</em></li>
    <li>Fresh and active firmware forked from OFW.</li>
    <li>Adds custom animations/moods.</li>
    <li>Includes built-in name changer! (No recompile required to change your devices name).</li>
    <li>Includes extra community based apps and plugins through SD Application loader (FAP files).</li>
    <li>Includes community based Bad USB scripts.</li>
    <li>Includes community based Sub-GHz files.</li>
            <ul>
            <li>More details can be found in their <a
                    href="https://github.com/skizzophrenic/SquachWare-CFW">README</a>.</li>
        </ul>
</ul>
<h2 id="v1nc">
    ⌨ v1nc
    <kbd>
        <a href="https://github.com/v1nc/flipperzero-firmware">v1nc/flipperzero-firmware</a>
    </kbd>
</h2>
<ul>
    <li>Supports different keyboard layouts for Duckyscripts via the script keyword <code>DUCKY_LANG</code>.</li>
    <li>Out of date with upstream Unleashed firmware, appears to not be maintained.</li>
    <li>Includes some integrated community plugins & games but not updated FAP loader.</li>
</ul>
<h2 id="wetox">
    🎩 Wetox
    <kbd>
        <a href="https://github.com/wetox-team/flipperzero-firmware">wetox-team/flipperzero-firmware</a>
    </kbd>
</h2>
<ul>
    <li>The dev branch is intended for public use, while others are either testing or archived hackathon submissions.
    </li>
    <li>Cracking T5577 RFID passwords via dictionary attack.</li>
    <li>Desktop header branding [WTX].</li>
    <li>Has some frequently updated interesting experimental stuff in different <a
            href="https://github.com/wetox-team/flipperzero-firmware/branches">branches</a>.</li>
</ul>
<h2 id="muddledbox">
    📦 MuddledBox
    <kbd>
        <a href="https://github.com/MuddledBox/flipperzero-firmware">MuddledBox/flipperzero-firmware</a>
    </kbd>
</h2>
<ul>
    <li>The first 'custom firmware', nowadays abandoned.</li>
    <li>Removes Sub-GHz regional transmission restrictions.</li>
    <li>Adds self-promo images to about page in settings.</li>
    <li>Adds a few extra common Sub-GHz frequencies to capture on.</li>
</ul>
<h2 id="summary">
    📝 Summary
    <kbd>(TL;DR)</kbd>
</h2>
<ul>
    <li>Staying up to date with upstream (official) firmware is important.</li>
    <li>TX restriction removal is illegal in most circumstances, use at your own risk.</li>
    <li>MuddledBox was the first popular firmware fork, but didn't grow up.</li>
    <li>Unleashed is more focused on core functionality, stability, and Sub-GHz protocols.</li>
    <li>RogueMaster is more focused on visual tweaks, new items, and changes (some experimental).</li>
    <li>RogueMaster is based on Unleashed, but may be less stable than Unleashed in some circumstances.</li>
    <li>SquachWare is forked from OFW, adding lots of custom stuff to play with out of the box all while retaining the securities and comfort of OFW.</li>
</ul>
