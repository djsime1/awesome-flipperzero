<a id="top" href="https://github.com/djsime1/awesome-flipperzero">
  <img src="https://user-images.githubusercontent.com/8518150/179464273-7927420c-b60a-48ab-9eb9-d69b563c0a0b.png" align="center" alt="Flipper Zero FAQ" title="Flipper Zero FAQ">
</a>

<table align="center">
  <tr><th colspan="8">Table of Contents</th></tr>
  <tr>
    <td><a href="#meta-">Meta</a></td>
    <td><a href="#general-">General</a></td>
    <td><a href="#sub-ghz-">Sub-GHz</a></td>
    <td><a href="#nfc--rfid-">NFC & RFID</a></td>
    <td><a href="#infrared-">Infrared</a></td>
    <td><a href="#badusb-">BadUSB</a></td>
    <td><a href="#ibutton-">iButton</a></td>
    <td><a href="#wifi-board-">WiFi board</a></td>
  </tr>
<table>

## Preamble [🔝](#top)
- *This is a community FAQ. Please consider also reading the [Official docs](https://docs.flipperzero.one/).*
- *It is written with information from the latest dev firmware, you may have to wait for a firmware (pre)release before some of the questions/answers become relevant.*
- *This FAQ is still being worked on, and contributions are welcome.*

### Other Communities

- *If your question isn't answered here, consider searching for it in other communities:*

- [Discord](https://flipperzero.one/discord) (Check the pinned messages to see if you question was already answered, primarily English)
- [Telegram](https://t.me/flipperzero) (Russian)
- [Flipper Forum](https://forum.flipper.net/) (Multi-language)
- [Reddit](https://old.reddit.com/r/flipperzero/) (Multi-language)

## Meta [🔝](#top)

### What is Awesome Flipper Zero?
> It's an [Awesome List](https://github.com/sindresorhus/awesome/blob/main/awesome.md) that I ([djsime1](https://dj.je)) created shortly after receiving Lurat, my lovely dolphin sidekick.

### What is an Awesome List?
> An [Awesome List](https://github.com/sindresorhus/awesome/blob/main/awesome.md) is a collection of links and resources related to some project or topic. Think of it like a central curated hub to discover interesting stuff.


### How can I contribute to this repo?
> Perferably, open a [Pull Request](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request) with your changes, or use one of the methods in the next question to contact me.

### I found a mistake, broken link, or something else. What should I do?
> Open a [new discussion](https://github.com/djsime1/awesome-flipperzero/discussions/new) on this repo, or contact me via one of the methods listed on [this page](https://dj.je/pages/contact).

### Why are there so many unmerged pull requests?
> If there's multiple small pull requests open at the same time, I'll often merge them together as a single update. Due to the way GitHub works, I'm unable to mark them as merged when I do this. To compensate, I include the contributors as co-authors on the commit, and mention the Pull Request ID's as part of the update message.

### This is really cool! Is there a way I can donate to you?
> I really appreciate the kind words, however I'm not accepting personal monetary donations.
> If you're really insistent, I'll accept a Discord Nitro gift ([`@djsime1`](https://discord.gg/9rduBhctJ6)) or Steam Game ([`/id/djsime1`](https://steamcommunity.com/id/djsime1/))!
> Besides that, why not support a local charity/organization instead? My personal recommendation is the [Electronic Frontier Foundation](https://supporters.eff.org/donate).



## General [🔝](#top)

### Where can I buy a Flipper zero ?
> Below are official (re)sellers for the Flipper Zero. Any retailer not on this list may be selling the device deceptively!
> - [**Official Store** *https://shop.flipperzero.one/*](https://shop.flipperzero.one/)
> - [**Lab401** *https://lab401.com/*](https://lab401.com/)
> - [**Joom** *https://flipp.dev/joom-catalog*](https://flipp.dev/joom-catalog)
>
> To find out which of these retailers sell the Flipper Zero in your country, use this site: [https://flipperzero.one/how-to-buy](https://flipperzero.one/how-to-buy)

### What MicroSD Card should I use?
> - It should be a reputable brand (Like SanDisk, Sony, etc.) because often cheaper cards don't fully support the communication protocol Flipper uses. 
> - The card should have a capacity between 4 and 64 GB, but an 8 GB card is MORE than enough.
> - After inserting the card, use the Flipper's setting menu to format (clear) and test the card.
> - Before ejecting the card, unmount it via the Settings menu to ensure data isn't corrupted.
> - Note: You might need a paperclip or similar object to push the SD Card in and out of the device.
> - Read the [official documentation](https://docs.flipperzero.one/basics/sd-card) for more information!

### How do I install databases and dumps?
> Make sure there's a working MicroSD Card in the device first by following the steps above.
> Once you download the dump, you can use [qFlipper](https://flipperzero.one/update) or the [Flipper mobile app]((https://flpr.app/)) to transfer them. If you're transfering a large file or many at once, you can also eject the SD Card from Flipper and insert it in your computer for faster transfers.
> - In qFlipper: Plug your device in, go to the file browser tab, navigate into the SD Card, and drop files in their corresponding folders (The folder names are similar to the file extensions).
> - For mobile apps: Make sure you're connected via Bluetooth, save the file to the app's archive, and synchronize it back to the device.
> - For plugging the SD Card into your PC, drop files in their corresponding folders (The folder names are similar to the file extensions).

### How do I install applications and plugins?
> As of Firmware v0.87.0, applications can be easily side-loaded on the MicroSD card. These can be installed via the [Flipper mobile app](https://flpr.app/), or the online catalog at [https://lab.flipper.net/apps](https://lab.flipper.net/apps).

### How do I install custom firmwares?
> First, ask yourself if you really need to. Sure, it might be fun to break out of Sub-GHz transmission restrictions, but how often are you actually going to do that? Is it really worth breaking the law?
> After you've ignored the previous sentences, make sure there's a working MicroSD Card in your Flipper and head over to the repository of your perferred firmware. Look for releases and find the `.dfu` file or update package (typically a `.tar`, `.tar.gz`, or `.zip` file, it always contains a file named `update.fuf`).
> - If you only have a `.dfu`, it must be installed using the "Install from file" option in qFlipper. Select the file and begin the installation.
> - If you have an update package, you can either install it with [qFlipper](https://flipperzero.one/update), or install it manually through the Micro SD card by following the steps below.
> - To manually install an update package, extract and transfer the folder (not the original archive file) to the `update` folder on the SD Card (create the folder if it doesn't already exist). Once transferred, go to the desktop/idle screen of the Flipper, press down to access the file browser, then left to view all folders. From there, open the `update` folder (typically at the bottom of the list) and find the folder you just transferred. Lastly, select the file named `update` and choose "Run in app" to install the firmware.
> 
> If there was no pre-compiled update file/package, you'll have to build the firmware yourself. See the next question for details.
> For more information, read the [official documentation](https://docs.flipperzero.one/basics/firmware-update).

### Where and when are developer Q&A sessions held?
> **Maintainer note: Unsure if these are still held.**
> Question and Answer session are held every week on Saturday at 01:00 and 13:00 (GMT) on the [Flipper Discord](https://flipperzero.one/discord).
> 
> | Time zone      | Side A  |  Side B |
> | :------------: | :-----: | :-----: |
> | GMT/UTC        | 01:00   | 13:00   |
> | Pacific (PDT)  | 6:00 PM | 6:00 AM |
> | Mountain (MDT) | 7:00 PM | 7:00 AM |
> | Central (CDT)  | 8:00 PM | 8:00 AM |
> | Eastern (EDT)  | 9:00 PM | 9:00 AM |
> | China Standard | 09:00   | 21:00   |
> | India Standard | 06:30   | 18:30   |

<!-- ### Are there archives of past Q&A sessions?
> Archival is a community effort, so only some are available.
> [https://github.com/flipperdevices/flipper-questions-and-answers](https://github.com/flipperdevices/flipper-questions-and-answers) -->

### How do I write/compile my own applications/plugins/firmware/assets?
> **Maintainer note: this needs to be updated.**
<blockquote>
  <em>(The following is a summary of the <a href="https://github.com/flipperdevices/flipperzero-firmware/blob/dev/documentation/fbt.md">official FBT docs</a>.)</em><br>
  Since the introduction of <a href="https://github.com/flipperdevices/flipperzero-firmware/blob/dev/documentation/fbt.md">Flipper Build Tool (FBT)</a>, this has become very easy! You should have a basic understanding of working on a command line before proceeding. The only prerequisite install is <a href="https://git-scm.com/downloads">Git</a>. You should also have an IDE installed, <a href="https://code.visualstudio.com/">VSCode</a> is recommended since the <a href="https://github.com/flipperdevices/flipperzero-firmware">firmware repo</a> has <a href="https://github.com/flipperdevices/flipperzero-firmware/blob/dev/documentation/fbt.md#vscode-integration">config files</a> for it.
  <details>
    <summary>Expand me for the rest of the steps.</summary>
    <em>(WIP, sorry to curb your enthusiasm.)</em>
  </details>
</blockquote>
  
### Can I make my own Flipper instead of buying one?
> Probably not. While the firmware and schematics are mostly public, actually sourcing the components is extremely difficult. Multiple core pieces, such as the screen, were specifically produced to be used in Flipper manufacturing.
  
### How do I get a black/clear-shell Flipper?
> This is no longer possible*, black-shells were Kickstarter-backer exclusives and clear-shells were a limited production run.
> (*No longer possible unless you're willing to shill out hundreds of dollars for one on eBay.)
  
### How do I invert the screen/change backlight color/change case cover, etc.
> These are all hardware mods, generally inaccessible to the average user. Look up/ask around on how to do them if you're really interested, [r/flipperzero](https://old.reddit.com/r/flipperzero/) is a good place to start.

### Will there be future hardware revisions?
> Regarding the Flipper Zero, no. There was a minor hardware revision in 2023 to address component shortages, but this changed nothing functionally.
> There are plans for a new device called the Flipper Nano, which is solely focused on being a hub for GPIO devices. It will not feature any internal radios (Sub-GHz, NFC, RFID, IR, etc.) like the Flipper Zero does, but will have double the GPIO pins. Check out [this video by Talking Sasquach](https://youtu.be/WB86ZOI6DAw) for more information.
> Long ago, there were concepts for a 'Flipper One,' which was rumored to be something akin to a Pi Zero with an SDR running Kali, however there's been no information nor confirmation of its development for quite some time.

### What is Dummy Mode?
> Dummy mode is a basic toggle to make the Flipper appear like a hand-held toy/game device by remapping the buttons to launch specific apps from the desktop instead of opening the app list.

### My device is frozen, how do I reboot/fix it?
> - To reboot the device: hold the BACK and LEFT buttons, then release simultaneously. If that didn't work, *disconnect the USB cable* and hold BACK for 30 seconds. This will preform a normal reboot.
> - To enter DFU/Recovery mode: Hold BACK and LEFT, then release BACK while still holding LEFT after a few seconds. When the screen lights up, you can release LEFT.
> - To exit DFU/Recovery mode: Follow steps for a normal reboot under the first bullet point.
> 
> If nothing works or the device is completely bricked, first make sure it's charged by plugging it in for 15-30 minutes. As a final resort, if you can't get it to turn on after charging, *unplug the USB cable* and hold OK plus BACK for 30 seconds. **There will be no indication**, but the device is now in recovery mode. Plug it in to a PC and use [qFlipper](https://flipperzero.one/update) to recover the firmware.
> Read the official docs for [Control](https://docs.flipperzero.one/basics/control), [Reboot](https://docs.flipperzero.one/basics/reboot), and [Firmware recovery](https://docs.flipperzero.one/basics/firmware-update/firmware-recovery).

### How do I access the CLI/Logs?
<blockquote>
  To access the Serial CLI, click one of the following based on your platform.
  <details>
    <summary>Desktop web browser*</summary>
    <em>*Chromium browsers only, such as: Google Chrome, Microsoft Edge, Opera/Opera GX, Brave, and Vivaldi.</em>
    <ul>
      <li>Connect your Flipper via USB.</li>
      <li>Ensure qFlipper and any other serial terminals are closed.</li>
      <li>Open <a href="https://my.flipp.dev/">my.flipp.dev</a> in one of the aforementioned browsers.</li>
      <li>Click <kbd>CONNECT</kbd> and select "USB Serial Device" from the list.</li>
      <li>Wait until you can see your device details on screen.</li>
      <li>Select the 💻 CLI item from the left sidebar.</li>
      <li><strong>Done!</strong></li>
    </ul>
  </details>
  <details>
    <summary>Windows</summary>
    <ul>
      <li>Install <a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">PuTTY</a> if it isn't already.</li>
      <li>Connect your Flipper via USB.</li>
      <li>Open qFlipper and look for the COM port next to the Flipper's name. <em>(Should say COM followed by a number, like COM1)</em></li>
      <li>Take note of the COM port number.</li>
      <li><strong>CLOSE qFlipper</strong>, otherwise the next steps won't work.</li>
      <li>Open PuTTY and ensure you're on the Session screen.</li>
      <li>Select "Serial" under connection type.</li>
      <li>Set serial line to the COM port. <em>(Just COM followed by the number, like COM1)</em></li>
      <li>Set speed to <code>115200</code></li>
      <li><em>Optional: Save the session settings for easy connection later.</em></li>
      <li>Finally, click <kbd>Open</kbd> to enter the CLI.</li>
      <li><strong>Done!</strong></li>
      <li>If you get an "Access Denied" error, make sure qFlipper isn't running!</li>
    </ul>
  </details>
  <details>
    <summary>MacOS/Linux</summary>
    <em>Note: I'm a filthy Windows user without any way to verify this procedure. Let me know if it's wrong!</em>
    <ul>
      <li>Install <a href="https://www.gnu.org/software/screen/">GNU Screen</a> if it isn't already.</li>
      <li>Connect your Flipper via USB.</li>
      <li>Open qFlipper and look for the device path next to the Flipper's name. <em>(Starts with /dev/tty)</em></li>
      <li><em>Alternatively: Run <code>ls /dev/tty.*</code> in a terminal.</em></li>
      <li>Take note of the full device path.</li>
      <li><strong>CLOSE qFlipper</strong>, otherwise the next steps won't work.</li>
      <li>Open a terminal.</li>
      <li>Run <code>screen PATH 115200</code>, replacing PATH with the device path from earlier.</li>
      <li><strong>Done!</strong></li>
    </ul>
  </details>
  <details>
    <summary>Android</summary>
    <ul>
      <li>Install <a href="https://play.google.com/store/apps/details?id=de.kai_morich.serial_usb_terminal">Serial USB Terminal</a> if it isn't already.</li>
      <li>Open the app and go to the Connections screen in the hamburger menu <em>(3 bars icon)</em></li>
      <li>Connect your Flipper via USB.</li>
      <li>Click the refresh icon if it doesn't automatically show up.</li>
      <li>Allow Serial USB Terminal to access Flipper if prompted.</li>
      <li>If it doesn't automatically connect, click the connect icon in the upper right. <em>(2 plugs icon)</em></li>
      <li><strong>Done!</strong></li>
      <li><em>Note: To exit log mode, you'll have to disconnect and reconnect using the icon.</em></li>
    </ul>
  </details>
  <details>
    <summary>iPhone</summary>
    Unfortunately, iOS is incapable of accessing a serial terminal over USB; try one of the other methods.
  </details>
  On the Flipper, open the settings, go to System, and set Log Level to Debug. <em>(You can keep Debug set to off unless someone asks you to turn it on)</em>
  Once you have the CLI open, type <code>log</code> and press enter to start watching logs. Press <code>Ctrl-C</code> or <code>Cmd-C</code> to exit log mode.
</blockquote>



## Sub-GHz [🔝](#top)

### How do I hack my neighbors garage or unlock some random persons car?!?
> Short answer: You don't. That's illegal, and NOT what Flipper was designed for.

### What does "This frequency can only be used for RX in your region" mean?
> Due to legal regulations, Flipper is not allowed to transmit on certain frequencies depending on your device's provisioned location.
> Provisioning occurs whenever you update your firmware via [qFlipper](https://flipperzero.one/update) or the [mobile app]((https://flpr.app/)) and is based on your rough location.

### How do I find the frequency of a device/transponder?
> If it's a commonly used frequency, bring the device *really close* to the Flipper and use the Frequency analyzer.
> If that didn't work, check for the device's FCC ID. It's legally required to be somewhere on the device if it's sold in the US.
> Then, look up that ID on [FCC ID.io](https://fccid.io). 

### I can't tune Flipper to capture a specific frequency.
> You'll need to edit the `setting_user` and `setting_frequency_analyzer_user` to change the frequencies available for selection in the app. The files are located in `subghz/assets` on the SD card.
> Note that this won't magically unlock those frequencies, you're still bound by the device's limitations.

### I captured a garage/car/etc. signal, but it doesn't work when I replay it.
> Unless the item of interest is extremely old, it probably uses rolling codes. Read more below.

### What is a rolling code?
> Think of it like this: Imagine your garage door was programmed to open whenever it received the code "1234" from a transponder.
> This would be a static code, where a replay attack (Read RAW) would be able to open the garage.
> Since replay attacks are so easy, most devices will shuffle the code after each use.
> So the first time you open your garage, the transponder sends "1234" and the second time it sends "5678."
> Rolling codes aren't that simple, but you get the gist.

### I replayed a rolling code and now my original keyfob/transponder doesn't work.
> You'll have to re-sync your old device manually, since it's now lagging behind on the rolling code.

### What is a Debruin/Brute force code?
> A brute force code tries every possible code for a specific bit length, however this is inefficient.
> Example: 0001, 0002, 0003, 0004 ... 9998, 9999.
> Debruin sequences are more efficient by merging multiple codes together.
> Example: 365, 136, and 650 can all be found in 13650 by looking at groups of 3 digits individually.

### Can I attach a more powerful antenna?
> Yes and no. You can't just attach any antenna directly via the GPIO pins, however you could use a separate processor on a protoboard and control it from Flipper, assuming you write your own code to do that.
> For example, you could write your own code on a NRF24 and accompanying Flipper app to control it over GPIO.



## NFC & RFID [🔝](#top)

### Feature/Compatability table

| Card name/type    | Read | Write | Save | Emulate | Notes                             |
| :---------------- | :--: | :---: | :--: | :-----: | :-------------------------------- |
| Mifare Classic    | ✅   | ✅    | ✅   | ✅      | Emulation can be a hit or miss    |
| Mifare DESFire    | ✅   |       |      |         | Can read public files             |
| Mifare Ultralight | ✅   |       | ✅   | ✅      | Unlock tags with various methods  |
| NTAG-21X          | ✅   |       | ✅   | ✅      | Very similar to Mifare Ultralight |
| EMV Cards         |      |       | ❌   | ❌      | Read of public data was removed because it was misunderstood.  Will come back as community app |
| NFC-B             |      |       |      | ❌      | No hardware support for emulation |
| iClass/PicoPass   | ✅   | ✅    | ✅   |         |                                   |
| EM4100/EM4102     | ✅   | ❌    | ✅   | ✅      |                                   |
| H10301            | ✅   | ❌    | ✅   | ✅      |                                   |
| Indala            | ✅   | ❌    | ✅   | ✅      |  Some lengths not supported  |
| T5577             | ✅   | ✅    | ✅   | ✅      |                                   |
| EM4305            | ✅   |       | ✅   | ✅      |                                   |
| Paxton Net2       | ❌   | ❌    | ❌   | ❌      | No support for Hitag2             |
| Legic Prime       | ❌   | ❌    | ❌   | ❌      | Proprietary protocol              |

***Key:*** *Check = Already implimented as of latest official firmware. No mark = Could be implemented in the future. Cross mark = Unlikely to ever be implemented or impossible.*

### How do I identify which type of card/tag I have?
> To determine the protocol (NFC, RFID, or iClass/PicoPass) you'll need to attempt reading in each corresponding app. If nothing works, check the tag/card for any markings or indications. As a last resort, take a picture of the card/fob and the reader and ask in the [Flipper Discord server](https://flipperzero.one/discord).
> If you have access to the card reader, you can use the [RFID Detector app](https://lab.flipper.net/apps/nfc_rfid_detector) to determine whether it's looking for a high-frequency (NFC/iClass/PicoPass) or low-frequency (RFID) card.

### How do I identify which type of NFC tag I have?
> Run the "Read card" action in the NFC app. Only NFC-A type tags are supported (Mifare/NTAG/Some EMV).
> Once successfully read, the tag's type is displayed in bold at the top of the screen.

### Which NFC tags can I write?
> Currently, Mifare Classic's are the only NFC card that can be written to.
> More will be added in the future with firmware updates.

### I was told a Mifare Ultralight/NTAG tag has password-protected sectors. What does that mean?
> Either the read was interrupted, or the tag is actually password protected.
> First, try reading the tag again but make sure it stays on the back of the device until the info screen pops up.
> If you're still seeing the warning, Flipper can unlock *legally distinct NFC-enabled figurines that are pronounced like "Ameebo"* and Xaomi air filter tags, but be warned that there's a risk of **bricking** your tag if you use the wrong password too many times.

### Why does it take so long to read a Mifare Classic?
> Mifare classics are split up into sectors, these sectors are protected by two keys. To read a Mifare Classic, Flipper uses a dictionary attack, which takes a big list currently comprised of 1241 common keys, and checks them individually against each sector on the card. If you know the keys, they can be manually added to the User Dictionary under the "Extra Actions" menu.

### What does it mean when no sectors could be read on a Mifare Classic?
> The data on Mifare Classic cards is split up into sectors, and each sector is protected by two keys.
> If no sectors were read, then Flipper's dictionary attack has failed to find any valid keys.
> If you know the keys, you can manually input them under the "Extra Actions" menu of the NFC app. Otherwise, try attacking the reader with mfkey32 as described a few questions down.

### What does it mean when some but not all sectors could be read on a Mifare Classic?
> The data on Mifare Classic cards is split up into sectors, and each sector is protected by two keys.
> The read wasn't successful, but it didn't fail either. Some of the card's data was read and saved, but not all.
> Even if not all sectors were read, you should inspect the dump with the [mobile app](https://flpr.app/) to see if the missing data is necessary or not. In a few rare cases, semi-read cards can be emulated in place of the original without issue.
> If you still need the rest of the keys, read the next question.

### How to I get Mifare Classic keys from a reader? (mfkey32 attack)
> Read this documentation article: [https://docs.flipper.net/nfc/mfkey32](https://docs.flipper.net/nfc/mfkey32)

### Why isn't Mifare Classic emulation working?
> Flipper emulates Mifare Classics according to official specification docs (at 13.56 mhz), however certain card readers operate at slightly different frequencies (such as 13.50 mhz). Since Flipper is unable to detect the frequency (like a real card does), it also can't correct for these minor errors.
> As a result, data transmission doesn't always occur when the reader expects it, and thus emulation is imperfect.
> There are a few theoretical ways to fix this with software, but the best option would require a new hardware revision.

### Why can't I save/emulate Mifare DESFire?
> DESFire is a very complicated and much more secure chipset. There are no known attacks against it yet.

### What are the .shd files in the NFC directory?
> These are shadow files, and they're created whenever an emulated tag is written to. 
> They store a copy of the original file with whatever was written. This way, the original file remains untouched.

### How do I edit the data in a saved tag?
> You'll need to use a NFC-enabled smartphone with an app that can write tags. One of the easiest to use apps is called NFC Tools, available for both [Android](https://play.google.com/store/apps/details?id=com.wakdev.wdnfc) and [iOS](https://apps.apple.com/us/app/nfc-tools/id1252962749). Due to Mifare Classic emulation quirks, you can only edit the data of saved NTAG and Mifare Ultralight tags. Create an empty NTAG216 with the "Add Manually" action in the NFC app if you don't have one already. Save that tag, then open it from the list. Once you start emulating the tag, you can use the NFC Tools smartphone app to write information on to the emulated tag. This is saved to a .shd file with the same name as the emulated tag. If you need a quick way to generate a tag containing a URL, you can use [Flipper Maker's NFC Creator tool](https://flippermaker.github.io/) online.

### Why doesn't my bank card work when I emulate it?
> EMV Credit/Debit cards are mostly encrypted. The information Flipper reads is the unencrypted portion of the card. This alone is not enough to emulate and complete a transaction. It is impossible to read the encrypted parts.

### Is there any way to save then emulate a bank card to authorize transactions?
> No, as explained in the previous question.

### Why does the NFC feature table say bank cards can be read?
> Most NFC-enabled bank cards expose their card number unencrypted. The expiration date, CVV, and ZIP code are not revealed.
> The card number alone is not enough to create a transaction, thus there's no reason to add a save option.

### Can Flipper emulate a payment terminal and authorize transactions?
> No. Are you starting to see a pattern here?

### Where is the "USB/LibNFC NFC Reader" feature mentioned in the [September blog post](https://blog.flipperzero.one/september-progress/)?
> This was scrapped due to timing issues, more details in [this GitHub issue](https://github.com/flipperdevices/flipperzero-firmware/issues/1173#issuecomment-1127728562).

### Where can I learn more about NFC and RFID technology?
> - Introduction to both Low Frequency and High Frequency: https://blog.flipperzero.one/rfid/
> - Types of NFC https://www.rfwireless-world.com/Tutorials/NFC-Type1-Tag-vs-NFC-Type2-Tag-vs-NFC-Type3-Tag-NFC-Type4-Tag-Types.html
> - Mifare Classic: https://learn.adafruit.com/adafruit-pn532-rfid-nfc/mifare
> - The Mifare Family: https://en.wikipedia.org/wiki/MIFARE
> - Datasheets: http://www.proxmark.org/files/Documents/
> - Common RFID Standards and protocols: https://www.asiarfid.com/common-rfid-standards-and-protocols.html
> - RFID Standards: ISO, IEC, EPCglobal: https://www.electronics-notes.com/articles/connectivity/rfid-radio-frequency-identification/standards-iec-iso-epcglobal.php



## Infrared [🔝](#top)

### How do I add more devices to the "Universal Remotes" menu?
> While it isn't possible to add new items under the universal menu, there exist plenty of repositories containing many dumps of IR remotes. The most popular is [Flipper-IRDB](https://github.com/logickworkshop/Flipper-IRDB).
> (Note: When downloading, it's *highly recommended* to unmount the SD Card from your Flipper and directly plug it in to your computer.) If you only need a remote for one device, you can use [Flipper Maker's IR Device tool](https://flippermaker.github.io/) to create and transfer it on the go.

### The universal TV remote doesn't work besides the power button.
> The stock universal tv remote database mostly contains power codes, and very few of everything else. This file (Located at `infrared/assets/tv.ir` on the SD Card) be manually replaced with one containing extra codes for all buttons. To do so, download [this file](https://raw.githubusercontent.com/UberGuidoZ/Flipper/main/Infrared/tv.ir) and use [qFlipper](https://flipperzero.one/update) to transfer it into the path from the previous sentence.

### What are CSV/Pronto/IR Plus codes?
> All three are different formats of infrared databases. They are not natively compatible with Flipper, but repositories exist that hold converted and compatible versions, such as [Flipper-IRDB](https://github.com/logickworkshop/Flipper-IRDB).



## BadUSB [🔝](#top)

### I'm on a Non-US QWERTY keyboard, how do I make scripts work?
> Until a solution is put into the firmware, your best choice is trying one of the following converters:
> - [http://helppox.com/badusbconvert.html](http://helppox.com/badusbconvert.html)
> - [https://flippermaker.github.io/](https://flippermaker.github.io/) (BadUSB String To Alt Code)



## iButton [🔝](#top)
> *(WIP)*



## WiFi board [🔝](#top)

### What can I do with the Wi-Fi dev board?
> Since the WiFi dev board is an entirely separate computer from the Flipper, certain tasks can be offloaded from the Flipper and run on the integrated ESP32 chip instead. There are two primary use cases for the dev board so far:
> - [Blackmagic firmware (for debugging firmware/apps on the Flipper)](https://docs.flipper.net/development/hardware/wifi-developer-board)
> - [Marauder firmware (for performing basic Wi-Fi attacks, please don't use this maliciously)](https://github.com/justcallmekoko/ESP32Marauder/wiki/flipper-zero)

### How do I flash firmware to the dev board?
> - Flashing Blackmagic: [Use ufbt](https://docs.flipper.net/development/hardware/wifi-developer-board/update).
> - Flashing Marauder: [Choose one of these options](https://github.com/justcallmekoko/ESP32Marauder/wiki/update-firmware#using-spacehuhn-web-updater).
> - Flashing anything else: Use the [ESP Flasher app](https://lab.flipper.net/apps/esp_flasher) or [ESPWebTool](https://esp.huhn.me/).
