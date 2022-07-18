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

## General
(TODO)

## Sub-GHz

### How do I hack my neighbors garage or unlock some random persons car?!?
Short answer: You don't. That's illegal, and NOT what Flipper was designed for.

### What does "This frequency can only be used for RX in your region" mean?
Due to legal regulations, Flipper is not allowed to transmit on certain frequencies depending on your order location.
For more information, read this: https://docs.flipperzero.one/sub-ghz/frequencies
If you have no regard for laws, you can use custom firmwares such as Unleashed to bypass this restriction **at your own risk.**

### How do I find the frequency of a device/transponder?
If it's a commonly used frequency, bring the device *really close* to the Flipper and use the Frequency analyzer.
If that didn't work, check for the device's FCC ID. It's legally required to be somewhere on the device if it's sold in the US.
Then, look up that ID on https://fccid.io. 

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
Example: 365, 136, and 650 can all be found in 13650 by looking at 3 digits individually.


## NFC & RFID

### Feature/Compatability table

| Card name/type    | Read | Write | Save | Emulate | Notes                  |
| :---------------: | :--: | :---: | :--: | :-----: | :--------------------: |
| Mifare Classic    | X    |       | X    | X       | Emulation is hit/miss  |
| Mifare DESFire    | X    |       |      |         |                        |
| Mifare Ultralight | X    |       | X    | X       | Non-password protected |
| EMV Cards         | X    |       |      |         | Can read bank cards    |
| NTAG-21X          | X    |       | X    | X       |                        |
| iClass/PicoPass   | X    |       |      |         | Third-party app        |
| EM4100/EM4102     | X    |       | X    | X       |                        |
| H10301            | X    |       | X    | X       |                        |
| Indala            | X    |       | X    | X       |                        |
| T5577             | X    | X     | X    | X       |                        |

### How do I identify which type of card I have?
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