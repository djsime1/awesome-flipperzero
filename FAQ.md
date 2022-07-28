<a href="https://github.com/djsime1/awesome-flipperzero">
  <img src="https://user-images.githubusercontent.com/8518150/179464273-7927420c-b60a-48ab-9eb9-d69b563c0a0b.png" align="center" alt="Flipper Zero FAQ" title="Flipper Zero FAQ">
</a>

<table align="center">
  <tr><th colspan="8">Table of Contents</th></tr>
  <tr>
    <td><a href="#meta">Meta</a></td>
    <td><a href="#general">General</a></td>
    <td><a href="#sub-ghz">Sub-GHz</a></td>
    <td><a href="#nfc--rfid">NFC & RFID</a></td>
    <td>Infrared</td>
    <td>iButton</td>
    <td>BadUSB</td>
    <td>WiFi board</td>
  </tr>
<table>

## Preamble
- *This is a community FAQ. Please consider also reading the [Official docs](https://docs.flipperzero.one/).*
- *This FAQ is still being worked on, and contributions are welcome.*
- *If your question isn't answered here, **SEARCH** the [Discord](https://flipperzero.one/discord) and check pinned messages before asking there.*



## Meta

### What is Awesome Flipper Zero?
It's an [Awesome List](https://github.com/sindresorhus/awesome/blob/main/awesome.md) that I ([djsime1](https://dj.je)) created shortly after receiving Lurat, my lovely dolphin sidekick.

### How can I contribute to this repo?
Perferably, open a [Pull Request](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request) with your changes, or use one of the methods in the next question to contact me.

### I found a mistake, broken link, or something else. What should I do?
Open a [new discussion](https://github.com/djsime1/awesome-flipperzero/discussions/new) on this repo, Message me on Discord ([`@DJ#9822`](https://discord.gg/9rduBhctJ6)), Telegram ([`djsime1`](https://t.me/djsime1)), or email me (![dj at dj.je](https://user-images.githubusercontent.com/8518150/180326401-1408742a-124c-49a7-9818-60c31d0e0d28.png)).



## General

### What MicroSD card should I use?
- It should be a reputable brand (Like SanDisk, Sony, etc.) because often cheaper cards don't fully support the communication protocol Flipper uses. 
- The card should have a capacity between 4 and 64 GB, but an 8 GB card is MORE than enough.
- After inserting the card, use the Flipper's setting menu to format (clear) and test the card.
- Before ejecting the card, unmount it via the Settings menu to ensure data isn't corrupted.
- Note: You might need a paperclip or similar object to push the SD card in and out of the device.
- Read the [official documentation](https://docs.flipperzero.one/basics/sd-card) for more information!

### How do I install databases and dumps?
Make sure there's a working MicroSD card in the device first by following the steps above.
Once you download the dump, you can use qFlipper or the Flipper mobile app to transfer them. If you're transfering a large file or many at once, you can also eject the SD card from Flipper and insert it in your computer for faster transfers.
- In qFlipper: Plug your device in, go to the file browser tab, navigate into the SD card, and drop files in their corresponding folders (The folder names are similar to the file extensions).
- For mobile apps: Make sure you're connected via Bluetooth, save the file to the app's archive, and synchronize it back to the device.
- For plugging the SD card into your PC, drop files in their corresponding folders (The folder names are similar to the file extensions).

### How do I install applications and plugins?
The links listed in this repo can't be installed as easily as drag-and-drop.
Most of them have to be manually merged into the firmware and fully recompiled. (Documentation coming soon)
As for ELF/FAP's, they're in a very early stage of development and require a special version of the firmware to be installed. I DO NOT recommend using them until they are officially merged into the main firmware.
*If you're really insistent, install the firmware from [this comment](https://github.com/flipperdevices/flipperzero-firmware/pull/1387#issuecomment-1182470778), place the `.elf` or `.fap` file in the `apps` directory on the SD card (create it if necessary), and use the ELF loader application to run them.*

### How do I write my own applications/plugins/firmware?
(WIP)

### How do I install custom firmwares?
First, ask yourself if you really need to. Sure, it might be fun to break out of Sub-GHz transmission restrictions, but how often are you actually going to do that? Is it really worth breaking the law?
After you've ignored the previous sentences, make sure there's a working MicroSD card in your Flipper and head over to the repository of your perferred firmware. Look for releases and find the `.dfu` file or updater package (typically a `.tar` or `.zip` file, always contains a file named `update.fuf`).
- If you only have a `.dfu`, it can be installed using the "Install from file" option in qFlipper. Select the file and begin the installation.
- If you have an updater package, extract and transfer the folder (not the original archive file) to the `update` folder on the SD card (create if needed). Once transferred, go to the idle screen of the Flipper, press down to access the file browser, then left to view all folders. From there, open the `update` folder (typically at the bottom of the list) and find the folder you just transferred. Lastly, select the file named `update` and choose "Run in app" to install the firmware.

If there was no pre-compiled update file/package, you'll have to build the firmware yourself. See the next question for details.
For more information, read the [official documentation](https://docs.flipperzero.one/basics/firmware-update).

### How do I compile my own firmware/applications/assets?
(WIP)
  
### Can I make my own Flipper instead of buying one?
Probably not. While the firwmare and schematics are mostly public, actually sourcing the components is extremely difficult. Multiple core pieces, such as the screen, were specficially produced to be used in Flipper manufacturing.
  
### How do I get a black-case Flipper?
This is no longer possible, they were Kickstarter-backer exclusives.
  
### How do I invert the screen/change backlight color/change case cover, etc.
These are all hardware mods, inaccessible to the average user. Look up/ask around on how to do them.

### Will there be future hardware revisions?
[Not for the Flipper Zero.](https://discord.com/channels/740930220399525928/746304505879986267/1001167062728720395) While there are concepts for a [Flipper One](https://flipperzero.one/one), there is not any timeline for release.


## Sub-GHz

### How do I hack my neighbors garage or unlock some random persons car?!?
Short answer: You don't. That's illegal, and NOT what Flipper was designed for.

### What does "This frequency can only be used for RX in your region" mean?
Due to legal regulations, Flipper is not allowed to transmit on certain frequencies depending on your order location.
For more information, referr to the [official documentation](https://docs.flipperzero.one/sub-ghz/frequencies) 
If you have no regard for laws, you can use custom firmwares such as Unleashed to bypass this restriction **at your own risk.**

### How do I find the frequency of a device/transponder?
If it's a commonly used frequency, bring the device *really close* to the Flipper and use the Frequency analyzer.
If that didn't work, check for the device's FCC ID. It's legally required to be somewhere on the device if it's sold in the US.
Then, look up that ID on [FCC ID.io](https://fccid.io). 

### I can't tune Flipper to capture a specific frequency.
(TODO)

### I captured a garage/car/etc. signal, but it doesn't work when I replay it.
Unless the item of interest is extremely old, it probably uses rolling codes. Read more below.

### What is a rolling code?
Think of it like this: Imagine your garage door was programmed to open whenever it received the code "1234" from a transponder.
This would be a static code, where a replay attack (Read RAW) would be able to open the garage.
Since replay attacks are so easy, most devices will shuffle the code after each use.
So the first time you open your garage, the transponder sends "1234" and the second time it sends "5678."
Rolling codes aren't that simple, but you get the gist.

### I replayed a rolling code and now my original keyfob/transponder doesn't work.
You'll have to re-sync your old device manually, since it's now lagging behind on the rolling code.

### What is a Debruin/Brute force code?
A brute force code tries every possible code for a specific bit length, however this is inefficient.
Example: 0001, 0002, 0003, 0004 ... 9998, 9999.
Debruin sequences are more efficient by merging multiple codes together.
Example: 365, 136, and 650 can all be found in 13650 by looking at groups of 3 digits individually.



## NFC & RFID

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
To determine the protocol (NFC, RFID, or iClass/PicoPass) you'll need to attempt reading in each corresponding app. If nothing works, check the tag/card for any markings or indications. As a last resort, take a picture and ask in the [Flipper Discord server](https://flipperzero.one/discord).

### How do I identify which type of NFC tag I have?
Run the "Read card" action in the NFC app. If you don't see "NFC-A", your card is unfortunately unsupported.
Note that you've only read the card UID and type, *not the actual data.* For that you need to select the "Run compatible app" option.

### Why can't I write an NFC tag?
Currently unsupported, but is being worked on.

### Mifare Ultralight/NTAG was detected, but nothing happens when I'm trying to read the data.
This happens when the tag is password protected. There's no quick fix for this, but solutions are in the works.

### Why does it take so long to read a Mifare Classic?
The data on Mifare Classic cards is split up into sections, and each section is protected by a key.
Flipper attempts to read the card by preforming a dictionary attack on the card using a bunch of common keys.
Some sectors will be unlocked, others won't be.

### What does it mean when no sectors could be read on a Mifare Classic?
The data on Mifare Classic cards is split up into sections, and each section is protected by a key.
The read has failed, meaning the card didn't use any common keys. Workarounds are being developed.

### What does it mean when some but not all sectors could be read on a Mifare Classic?
The data on Mifare Classic cards is split up into sections, and each section is protected by a key.
The read wasn't successful, but it didn't fail either. Some of the card's data was read and saved, but not all.
Even if not all sectors were read, it's still worth trying to use the partial save.

### Why isn't Mifare Classic emulation working?
There are a number of reasons, some of which can be fixed while others can't.
Most prominently, the Flipper's NFC chip doesn't have hardware support for Mifare Classic, so it's been offloaded to the CPU.
However, the CPU's clock cycle can't conform to the exact (and strict) timings that Mifare Classics communicate with.
This means that some readers will respond to emulation, while others won't. This can not be fixed with firmware.

### Why can't I save/emulate Mifare DESFire?
DESFire is a very complicated and much more secure protocol. There are no known attacks against it yet.

### What are the .sha files in the NFC directory?
These are shadow files, and they're created whenever an emulated tag is written to. 
They store a copy of the original file with whatever was written. This way, the original file remains untouched.
