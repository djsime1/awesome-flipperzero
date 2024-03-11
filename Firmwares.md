<h1>Flipper Zero firmware differences</h1>
<h3>
    <code>::</code> Last updated March 11 2024. <code>::</code>
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
        <td><a href="#Dexv">Xvirus</a></td>
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
    <li><em>Stable custom firmware focused on new features and improvements of original firmware components, with almost no UI changes</em></li>
    <li>Very active development and Discord community.</li>
    <li>Removes Sub-GHz regional transmission restrictions by default.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>dangerous_settings</em> file.</li>
    <li>Allows changing Flipper's name via Settings->Desktop</li>
    <li>Adds extra Sub-GHz frequencies by default without using <em>setting_user</em> file, <em>setting_user</em> is kept untouched for user settings.</li>
    <li>Adds extra Mifare classic keys to included dict file and leaves user file untouched.</li>
    <li>Can be used to capture, send, or make new dynamic encrypted protocols/rolling codes thats present in Official FW but locked (no encoder code was made). <em>(Modern garage doors, etc.)</em>
    </li>
    <li>Dynamic Sub-GHz signals and codes can be added manually to pair Flipper as new remote with your system.</li>
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
    <li>Built off <a href="#unleashed">Unleashed</a> as the base firmware (which is a fork of <a href="#official">Official</a> dev firmware.)</li>
    <li>Contains copy of Xtreme Settings App with big parts of code removed and renamed to CFW Settings</li>
    <li>Provides closed source builds (with code taken from opensource projects) on Patreon</li>
    <li>Removes Sub-GHz regional transmission restrictions after changes to <em>extend_range.txt</em> file.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through <em>extend_range.txt</em> file.</li>
    <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
    <li>Adds extra custom assets <em>(Mifare classic dict, example files, etc)</em>.</li>
    <li>Includes some PRs from Official firmware that are not yet merged in Official firmware (Unfinished, WIP) <em>(bleeding edge)</em>.
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
    💋 Xtreme
    <kbd>
        <a href="https://github.com/Flipper-XFW/Xtreme-Firmware">Flipper-XFW/Xtreme-Firmware</a>
    </kbd>
</h2>
<ul>
    <li>Built from RogueMaster originally then converted to fork of <a href="#unleashed">Unleashed</a> + <a href="#official">Official</a> FW for future development.</li>
    <li>Adds custom UI and custom Main Menu themes, and asset packs (icons, animations)</li>
    <li>Removes Sub-GHz regional transmission restrictions by default.</li>
    <li>Allows Sub-GHz extended frequency range (i.e. restaurant pagers) through Xtreme Settings App.</li>
    <li>Allows changing Flipper's name via Xtreme Settings App</li>
    <li>Has Sub-GHz protocols and most of the other changes taken from Unleashed FW (see <a href="#unleashed">changes</a>).</li>
    <li>Adds extra custom assets <em>(Mifare classic dict, more animations (installed separately), example files, etc)</em>.</li>
    <li>Includes an enhanced/improved "Dolphin Level" system similar to RogueMaster.</li>
    <li>Includes extra apps and plugins from the general community through SD Application loader (FAP files).</li>
    <li>Also includes a number of other small tweaks, changes, and stability fixes.</li>
</ul>
<h2 id="Dexv">
    ❌Xvirus
    <kbd>
        <a href="https://github.com/Xvirus-Team/xvirus-firmware">Xvirus-Team/xvirus-firmware</a>
    </kbd>
</h2>
<ul>
    <li>Fork of <a href="#unleashed">Unleashed FW</a></li>
    <li>Adds custom-themed graphics that are not included in the Official Firmware.</li>
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
    <li><em>SquachWare is abandonware for the time being! There are still some good files on it but the underlying firmware is very outdated!! I would love to resurrect the project in the future, but for now, we're on hiatus!</em></li>
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
    <li>Out of date with upstream Official firmware, appears to not be maintained.</li>
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
    <li>Xtreme is more focused on new visual tweaks, UI customisation, and other.</li>
    <li>RogueMaster is based on Unleashed, but may be less stable than Unleashed in some circumstances.</li>
    <li>SquachWare is forked from OFW, adding lots of custom stuff to play with out of the box all while retaining the securities and comfort of OFW.</li>
</ul>
