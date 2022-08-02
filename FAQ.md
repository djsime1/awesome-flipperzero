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
    <td>iButton</td>
    <td>WiFi board</td>
  </tr>
<table>

## Preamble [🔝](#top)
- *This is a community FAQ. Please consider also reading the [Official docs](https://docs.flipperzero.one/).*
- *This FAQ is still being worked on, and contributions are welcome.*
- *If your question isn't answered here, **SEARCH** the [Discord](https://flipperzero.one/discord) and check pinned messages before asking there.*



## Meta [🔝](#top)

### What is Awesome Flipper Zero?
> It's an [Awesome List](https://github.com/sindresorhus/awesome/blob/main/awesome.md) that I ([djsime1](https://dj.je)) created shortly after receiving Lurat, my lovely dolphin sidekick.

### How can I contribute to this repo?
> Perferably, open a [Pull Request](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request) with your changes, or use one of the methods in the next question to contact me.

### I found a mistake, broken link, or something else. What should I do?
> Open a [new discussion](https://github.com/djsime1/awesome-flipperzero/discussions/new) on this repo, Message me on Discord ([`@DJ#9822`](https://discord.gg/9rduBhctJ6)), Telegram ([`djsime1`](https://t.me/djsime1)), or email me (![dj at dj.je](https://user-images.githubusercontent.com/8518150/180326401-1408742a-124c-49a7-9818-60c31d0e0d28.png)).

### Why are there so many unmerged pull requests?
> If there's multiple small pull requests open at the same time, I'll often merge them together as a single update. Due to the way GitHub works, I'm unable to mark them as merged when I do this. To compensate, I include the contributors as co-authors on the commit, and mention the Pull Request ID's as part of the update message.



## General [🔝](#top)

### What MicroSD Card should I use?
> - It should be a reputable brand (Like SanDisk, Sony, etc.) because often cheaper cards don't fully support the communication protocol Flipper uses. 
> - The card should have a capacity between 4 and 64 GB, but an 8 GB card is MORE than enough.
> - After inserting the card, use the Flipper's setting menu to format (clear) and test the card.
> - Before ejecting the card, unmount it via the Settings menu to ensure data isn't corrupted.
> - Note: You might need a paperclip or similar object to push the SD Card in and out of the device.
> - Read the [official documentation](https://docs.flipperzero.one/basics/sd-card) for more information!

### How do I install databases and dumps?
> Make sure there's a working MicroSD Card in the device first by following the steps above.
> Once you download the dump, you can use qFlipper or the Flipper mobile app to transfer them. If you're transfering a large file or many at once, you can also eject the SD Card from Flipper and insert it in your computer for faster transfers.
> - In qFlipper: Plug your device in, go to the file browser tab, navigate into the SD Card, and drop files in their corresponding folders (The folder names are similar to the file extensions).
> - For mobile apps: Make sure you're connected via Bluetooth, save the file to the app's archive, and synchronize it back to the device.
> - For plugging the SD Card into your PC, drop files in their corresponding folders (The folder names are similar to the file extensions).

### How do I install applications and plugins?
> The links listed in this repo can't be installed as easily as drag-and-drop.
> Most of them have to be manually merged into the firmware and fully recompiled. (Documentation coming soon)
> As for ELF/FAP's, they're in a very early stage of development and require a special version of the firmware to be installed. I DO NOT recommend using them until they are officially merged into the main firmware.
> *If you're really insistent, install the firmware from [this comment](https://github.com/flipperdevices/flipperzero-firmware/pull/1387#issuecomment-1182470778), place the `.elf` or `.fap` file in the `apps` directory on the SD Card (create it if necessary), and use the ELF loader application to run them.*

### How do I write my own applications/plugins/firmware?
> *(WIP)*

### How do I install custom firmwares?
> First, ask yourself if you really need to. Sure, it might be fun to break out of Sub-GHz transmission restrictions, but how often are you actually going to do that? Is it really worth breaking the law?
> After you've ignored the previous sentences, make sure there's a working MicroSD Card in your Flipper and head over to the repository of your perferred firmware. Look for releases and find the `.dfu` file or updater package (typically a `.tar` or `.zip` file, always contains a file named `update.fuf`).
> - If you only have a `.dfu`, it can be installed using the "Install from file" option in qFlipper. Select the file and begin the installation.
> - If you have an updater package, extract and transfer the folder (not the original archive file) to the `update` folder on the SD Card (create if needed). Once transferred, go to the idle screen of the Flipper, press down to access the file browser, then left to view all folders. From there, open the `update` folder (typically at the bottom of the list) and find the folder you just transferred. Lastly, select the file named `update` and choose "Run in app" to install the firmware.
> 
> If there was no pre-compiled update file/package, you'll have to build the firmware yourself. See the next question for details.
> For more information, read the [official documentation](https://docs.flipperzero.one/basics/firmware-update).

### How do I compile my own firmware/applications/assets?
> *(WIP)*
  
### Can I make my own Flipper instead of buying one?
> Probably not. While the firwmare and schematics are mostly public, actually sourcing the components is extremely difficult. Multiple core pieces, such as the screen, were specficially produced to be used in Flipper manufacturing.
  
### How do I get a black-case Flipper?
> This is no longer possible, they were Kickstarter-backer exclusives.
  
### How do I invert the screen/change backlight color/change case cover, etc.
> These are all hardware mods, inaccessible to the average user. Look up/ask around on how to do them.

### Will there be future hardware revisions?
> [Not for the Flipper Zero.](https://discord.com/channels/740930220399525928/746304505879986267/1001167062728720395) While there are concepts for a [Flipper One](https://flipperzero.one/one), there is not any timeline for release.

### What is DUMB mode?
> It's a yet to be implimented mode that would hide all of the potentially malicious apps/features of Flipper.

### My device is frozen, how do I reboot/fix it?
> - To reboot the device: hold the BACK and LEFT buttons, then release simultaneously. If that didn't work, *disconnect the USB cable* and hold BACK for 30 seconds. This will preform a normal reboot.
> - To enter DFU/Recovery mode: Hold BACK and LEFT, then release BACK while still holding LEFT after a few seconds. When the screen lights up, you can release LEFT.
> - To exit DFU/Recovery mode: Follow steps for a normal reboot under the first bullet point.
> 
> If nothing works or the device is completely bricked, first make sure it's charged by plugging it in for 15-30 minutes. As a final resort, if you can't get it to turn on after charging, *unplug the USB cable* and hold OK plus BACK for 30 seconds. **There will be no indication**, but the device is now in recovery mode. Plug it in to a PC and use qFlipper to recover the firmware.
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
> Due to legal regulations, Flipper is not allowed to transmit on certain frequencies depending on your order location.
> For more information, referr to the [official documentation](https://docs.flipperzero.one/sub-ghz/frequencies) 
> If you have no regard for laws, you can use custom firmwares such as Unleashed to bypass this restriction **at your own risk.**

### How do I find the frequency of a device/transponder?
> If it's a commonly used frequency, bring the device *really close* to the Flipper and use the Frequency analyzer.
> If that didn't work, check for the device's FCC ID. It's legally required to be somewhere on the device if it's sold in the US.
> Then, look up that ID on [FCC ID.io](https://fccid.io). 

### I can't tune Flipper to capture a specific frequency.
> *(WIP)*

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



## NFC & RFID [🔝](#top)

### Feature/Compatability table

| Card name/type    | Read | Write | Save | Emulate | Notes                  |
| :---------------: | :--: | :---: | :--: | :-----: | :--------------------: |
| Mifare Classic    | X    |       | X    | X       | Emulation is hit/miss  |
| Mifare DESFire    | X    |       |      |         |                        |
| Mifare Ultralight | X    |       | X    | X       | Non-password protected |
| EMV Cards         | X    |       |      |         | Can read bank cards    |
| NTAG-21X          | X    |       | X    | X       |                        |
| iClass/PicoPass   | X    |       | X    |         |                        |
| EM4100/EM4102     | X    |       | X    | X       |                        |
| H10301            | X    |       | X    | X       |                        |
| Indala            | X    |       | X    | X       |                        |
| T5577             | X    | X     | X    | X       |                        |
| Paxton Net2       |      |       |      |         | Hitag2: no support     |

### How do I identify which type of card/tag I have?
> To determine the protocol (NFC, RFID, or iClass/PicoPass) you'll need to attempt reading in each corresponding app. If nothing works, check the tag/card for any markings or indications. As a last resort, take a picture of the card/fob and the reader and ask in the [Flipper Discord server](https://flipperzero.one/discord).

### How do I identify which type of NFC tag I have?
> Run the "Read card" action in the NFC app. If you don't see "NFC-A", your card is unfortunately unsupported.
> Note that you've only read the card UID and type, *not the actual data.* For that you need to select the "Run compatible app" option.

### Why can't I write an NFC tag?
> Currently unsupported, but is being worked on.

### Mifare Ultralight/NTAG was detected, but nothing happens when I'm trying to read the data.
> This happens when the tag is password protected. There's no quick fix for this, but solutions are in the works.

### Why does it take so long to read a Mifare Classic?
> Mifare classics are split up into sectors, these sectors are protected by two keys. To read a Mifare Classic, Flipper uses a dictionary attack, which takes a big list currently comprised of about 2000 common keys, and checks them individually against each sector on the card. If you know the keys, they can be manually added to the User Dictionary under the "Extra Actions" menu.

### What does it mean when no sectors could be read on a Mifare Classic?
> The data on Mifare Classic cards is split up into sectors, and each section is protected by two keys.
> The read has failed, meaning the card didn't use any common keys. If you have access to the card reader, [mfkey32v2](https://github.com/equipter/mfkey32v2) can be used to pull keys from it.

### What does it mean when some but not all sectors could be read on a Mifare Classic?
> The data on Mifare Classic cards is split up into sectors, and each sector is protected by two keys.
> The read wasn't successful, but it didn't fail either. Some of the card's data was read and saved, but not all.
> Even if not all sectors were read, there's a slim chance a partial save will work with emulation.

### Why isn't Mifare Classic emulation working?
> There are a number of reasons, some of which can be fixed while others can't. The first thing you should check is that all sectors were read from the card. If not, look at the questions above.
> On the hardware side: Mifare Classic emulation is handled by the CPU, except the clock cycle can't conform to the exact (and strict) timings that these tags communicate with.
> On the software side: Some rarely used card commands (counters, restore, and transfer) haven't been implimented, thus they will always fail during emulation.

### Why can't I save/emulate Mifare DESFire?
> DESFire is a very complicated and much more secure chipset. There are no known attacks against it yet.

### What are the .shd files in the NFC directory?
> These are shadow files, and they're created whenever an emulated tag is written to. 
> They store a copy of the original file with whatever was written. This way, the original file remains untouched.

### How do I edit the data in a saved tag?
> You'll need to use a NFC-enabled smartphone with an app that can write tags. One of the easiest to use apps is called NFC Tools, available for both [Android](https://play.google.com/store/apps/details?id=com.wakdev.wdnfc) and [iOS](https://apps.apple.com/us/app/nfc-tools/id1252962749). Due to Mifare Classic emulation quirks, you can only edit the data of saved NTAG and Mifare Ultralight tags. Create an empty NTAG216 with the "Add Manually" action in the NFC app if you don't have one already. Save that tag, then open it from the list. Once you start emulating the tag, you can use the NFC Tools smartphone app to write information on to the emulated tag. This is saved to a .shd file with the same name as the emulated tag. If you need a quick way to generate a tag containing a URL, you can use [Flipper Maker's NFC Creator tool](https://flippermaker.github.io/) online.

### Why doesn't my bank card work when I emulate it?
> EMV Credit/Debit cards are mostly encrypted. The information Flipper reads is the unencrypted portion of the card. This alone is not enough to emulate and complete a transaction. It is impossible to read the encrypted parts. 



## Infrared [🔝](#top)

### How do I add more devices to the "Universal Remotes" menu?
> While it isn't possible to add new items under the universal menu, there exist plenty of repositories containing many dumps of IR remotes. The most popular is [Flipper-IRDB](https://github.com/logickworkshop/Flipper-IRDB).
> (Note: When downloading, it's *highly recommended* to unmount the SD Card from your Flipper and directly plug it in to your computer.) If you only need a remote for one device, you can use [Flipper Maker's IR Device tool](https://flippermaker.github.io/) to create and transfer it on the go.

### The universal TV remote doesn't work besides the power button.
> The stock universal tv remote database mostly contains power codes, and very few of everything else. This file (Located at `infrared/assets/tv.ir` on the SD Card) be manually replaced with one containing extra codes for all buttons. To do so, download [this file](https://raw.githubusercontent.com/UberGuidoZ/Flipper/main/Infrared/tv.ir) and use qFlipper to transfer it into the path from the previous sentence.

### What are CSV/Pronto/IR Plus codes?
> All three are different formats of infrared databases. They are not natively compatible with Flipper, but repositories exist that hold converted and compatible versions, such as [Flipper-IRDB](https://github.com/logickworkshop/Flipper-IRDB).



## BadUSB [🔝](#top)
> *(WIP)*