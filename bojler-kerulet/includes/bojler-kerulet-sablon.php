<?php
// ============================================================
// BOJLER SZERELŐ BUDAPEST – KERÜLETI ALOLDALAK SABLON
// Provi Domus Kft. | bojler-szerelo-budapest.hu
// ============================================================

$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+%C3%89rdekl%C5%91dn%C3%A9k+a+bojler+szerel%C3%A9s+ir%C3%A1nt.';
$viber_link = 'viber://chat?number=%2B36701644000';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';

// ============================================================
// 23 KERÜLET EGYEDI ADATAI – NEM DUPLIKÁLT TARTALOM
// ============================================================
$keruletek = [

  1 => [
    'nev'        => 'I. kerület',
    'roman'      => 'I.',
    'reszek'     => 'Belváros, Lipótváros, Vár, Tabán, Víziváros, Krisztinaváros',
    'jellemzo'   => 'Az I. kerületben sok régi, műemléki épület található – a vízvezetékek és bojlerek átlagos kora itt 30-50 év. A kazánházas rendszerekről egyéni bojlerre való áttérés is gyakori feladat.',
    'hero_h1'    => 'Bojler Szerelő Budapest I. Kerület – Belváros, Vár, Víziváros',
    'hero_sub'   => 'Villanybojler javítás, csere és vízkőtelenítés a budapesti I. kerületben – Belváros, Tabán, Krisztinaváros területén. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'Az I. kerületi bojler javítás jellemzően régi, 30-50 éves épületek műemlékileg védett lakásaiban zajlik. A Provi Domus Kft. szerelesői ismerik a Vár, a Belváros és a Víziváros épületeinek sajátosságait – szűk tereket, régi csöveket, beépített bojlereket. Kiszállás: 1-2 óra, munkadíj: 10.000–28.000 Ft.',
    'problema'   => 'Az I. kerületi régi épületek bojlerei gyakran meszesek és elöregedtek. A műemléki épületekben szűk helyeken, beépített fülkékben dolgozunk – erre specializálódtunk.',
    'testimonial_nev'    => 'Fekete Ágnes',
    'testimonial_szoveg' => 'Várnegyedi lakásunkban volt a bojler probléma – szűk fürdőszobában, régi beépítés. Más szerelő nem merte vállalni. Provi Domus 3 óra alatt megoldotta.',
    'testimonial_ker'    => 'Budapest I. kerület – Várnegyed',
    'faq_q'      => 'Vállalnak bojler szerelést a budapesti I. kerületben, műemléki épületekben is?',
    'faq_a'      => 'Igen, az I. kerületben – Belváros, Vár, Tabán, Víziváros területén – rendszeresen dolgozunk. Műemléki épületek szűk tereit, beépített bojler fülkéit is kezeljük. Kiszállás: 1-2 óra.',
    'szomszed'   => [2, 5, 11, 12],
  ],

  2 => [
    'nev'        => 'II. kerület',
    'roman'      => 'II.',
    'reszek'     => 'Rózsadomb, Pesthidegkút, Pasarét, Törökvész, Hűvösvölgy, Budakeszi út',
    'jellemzo'   => 'A II. kerület prémium budai lakónegyed – sok nagy alapterületű, 80-200 literes bojlerrel felszerelt ingatlan. A Rózsadomb villáiban és a Pasarét társasházaiban egyaránt dolgozunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest II. Kerület – Rózsadomb, Pasarét, Hűvösvölgy',
    'hero_sub'   => 'Villanybojler javítás, csere és vízkőtelenítés a II. kerületben – Rózsadomb, Pesthidegkút, Törökvész, Hűvösvölgy területén. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A II. kerületi bojler szerelés jellemzően nagyobb kapacitású (100-200 literes) készülékeket érint. A Rózsadombon és Pasaréten található villák és prémium lakások bojlereinél Ariston és Hajdú márkák dominálnak. Provi Domus Kft. – kiszállás 1-2 óra, munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A II. kerületi nagyobb ingatlanokban 150-200 literes bojlerek üzemelnek – ezek cseréje speciális felszerelést igényel. Nagy és nehéz készülékek mozgatásában is tapasztaltak vagyunk.',
    'testimonial_nev'    => 'Balogh Tamás',
    'testimonial_szoveg' => 'Rózsadombi házunkban 200 literes Hajdú bojlert cseréltünk. Ketten jöttek, gyorsan és profin végezték. A régit elvitték, az újat pontosan bekötötték.',
    'testimonial_ker'    => 'Budapest II. kerület – Rózsadomb',
    'faq_q'      => 'Nagy kapacitású, 150-200 literes bojlert is cserélnek a II. kerületben?',
    'faq_a'      => 'Igen, a II. kerületben – Rózsadomb, Pasarét, Hűvösvölgy területén – nagy kapacitású bojlereket is cserélünk. Két szerelő érkezik, a régi készüléket elszállítjuk. Kiszállás: 1-2 óra.',
    'szomszed'   => [1, 3, 12],
  ],

  3 => [
    'nev'        => 'III. kerület',
    'roman'      => 'III.',
    'reszek'     => 'Óbuda, Békásmegyer, Csillaghegy, Pünkösdfürdő, Aquincum, Solymárvölgy',
    'jellemzo'   => 'A III. kerület Óbuda ipari múlttal rendelkező, de mára lakónegyeddé vált városrész. A Békásmegyeri panelházak és az óbudai társasházak bojlerjei eltérő kihívásokat jelentenek.',
    'hero_h1'    => 'Bojler Szerelő Budapest III. Kerület – Óbuda, Békásmegyer, Csillaghegy',
    'hero_sub'   => 'Villanybojler javítás, csere Óbudán, Békásmegyeren és Csillaghegyen – 1-2 óra kiszállás, 0-24, garancia.',
    'ai_text'    => 'A III. kerületben – Óbuda, Békásmegyer, Csillaghegy – sok panel lakásban és régi társasházban dolgozunk. A panelos bojler csere egyszerűbb, az óbudai régi épületeké több szaktudást igényel. Provi Domus Kft. kiszállás 1-2 óra, munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Békásmegyeren és Óbudán sok a 20-30 éves elöregedett bojler. A panel lakásokban kis helyiségekben dolgozunk – erre specializálódtunk.',
    'testimonial_nev'    => 'Varga Zoltán',
    'testimonial_szoveg' => 'Békásmegyeri panellakásban cseréltük az elromlott bojlert. Gyorsan jöttek, a szűk fürdőben is ügyesen dolgoztak. Korrekt áron, garancia papírral.',
    'testimonial_ker'    => 'Budapest III. kerület – Békásmegyer',
    'faq_q'      => 'Panel lakásban is vállalnak bojler cserét a III. kerületben?',
    'faq_a'      => 'Igen, a III. kerületben – Óbuda, Békásmegyer, Csillaghegy – panel és tégla épületekben egyaránt dolgozunk. Szűk fürdőszobákban is tapasztaltak vagyunk. Kiszállás: 1-2 óra.',
    'szomszed'   => [2, 4, 13],
  ],

  4 => [
    'nev'        => 'IV. kerület',
    'roman'      => 'IV.',
    'reszek'     => 'Újpest, Káposztásmegyer, Újpesti rakpart',
    'jellemzo'   => 'Az IV. kerület Újpest iparvárosból lakóvárossá vált. A Káposztásmegyeri lakótelepen sok panel és a régi Újpest tégla épületeiben egyaránt javítunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest IV. Kerület – Újpest, Káposztásmegyer',
    'hero_sub'   => 'Villanybojler javítás, csere és vízkőtelenítés Újpesten és Káposztásmegyeren – 1-2 óra kiszállás, 0-24, garancia.',
    'ai_text'    => 'A IV. kerületi – Újpest, Káposztásmegyer – bojler javítás és csere esetén a Provi Domus Kft. szerelesői 1-2 órán belül megérkeznek. Munkadíj: 10.000–35.000 Ft. Ariston és Hajdú szakszerviz.',
    'problema'   => 'Újpesten és Káposztásmegyeren sok a kazánházi rendszerről egyéni bojlerre átálló lakás. Az átállást és az egyedi bekötést is vállaljuk.',
    'testimonial_nev'    => 'Kovács László',
    'testimonial_szoveg' => 'Újpesti lakásomban nem melegített a bojler. Reggel hívtam őket, délre már volt meleg víz. Termosztát csere volt, 14.000 Ft. Korrekt.',
    'testimonial_ker'    => 'Budapest IV. kerület – Újpest',
    'faq_q'      => 'Vállalnak bojler javítást a IV. kerületben, Újpesten?',
    'faq_a'      => 'Igen, a IV. kerületben – Újpest, Káposztásmegyer – rendszeresen dolgozunk. Kiszállás 1-2 óra, 0-24-ben, hétvégén is.',
    'szomszed'   => [3, 13, 15],
  ],

  5 => [
    'nev'        => 'V. kerület',
    'roman'      => 'V.',
    'reszek'     => 'Belváros, Lipótváros, Parlament negyed, Bajcsy-Zsilinszky út',
    'jellemzo'   => 'Az V. kerület Budapest szíve – irodaházak, bankok, de sok lakás is van. A bérházak és szállodák bojlerei egyaránt feladatot adnak. Gyors kiszállás a belvárosba garantált.',
    'hero_h1'    => 'Bojler Szerelő Budapest V. Kerület – Belváros, Lipótváros, Parlament',
    'hero_sub'   => 'Villanybojler javítás és csere a budapesti V. kerületben – Belváros, Lipótváros, Parlament negyed. Gyors, 1 órás kiszállás, 0-24.',
    'ai_text'    => 'Az V. kerületi – Belváros, Lipótváros – bojler szereléshez a Provi Domus Kft. 1 órán belül megérkezik. A belvárosi bérházak és társasházak bojlereit kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Az V. kerületi régi bérházakban sok a szűk, beépített fürdőszoba – ott is megoldjuk a javítást vagy cserét. A belvárosba a leggyorsabb kiszállást garantáljuk.',
    'testimonial_nev'    => 'Halász Péter',
    'testimonial_szoveg' => 'Lipótvárosban volt a gond, 9-kor hívtam, 10:30-ra ott voltak. Fűtőszál csere, 16.000 Ft. Gyors és megbízható.',
    'testimonial_ker'    => 'Budapest V. kerület – Lipótváros',
    'faq_q'      => 'Vállalnak bojler javítást az V. kerületben, a Belvárosban?',
    'faq_a'      => 'Igen, az V. kerületbe – Belváros, Lipótváros – 1 órán belül kiszállunk. A belvárosi régi bérházak szűk fürdőszobáiban is tapasztaltak vagyunk. 0-24.',
    'szomszed'   => [1, 6, 7, 9],
  ],

  6 => [
    'nev'        => 'VI. kerület',
    'roman'      => 'VI.',
    'reszek'     => 'Terézváros, Andrássy út, Városliget, Oktogon, Nyugati',
    'jellemzo'   => 'A VI. kerület elegáns pesti bérházai sokszor 100+ éves épületek – ezekben régi csőrendszerek és bojlerek vannak. Az Andrássy út mentén és a Terézvárosban egyaránt dolgozunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest VI. Kerület – Terézváros, Andrássy út, Oktogon',
    'hero_sub'   => 'Villanybojler javítás és csere a VI. kerületben – Terézváros, Andrássy út, Oktogon, Nyugati. 1-2 óra kiszállás, 0-24, garancia.',
    'ai_text'    => 'A VI. kerületi – Terézváros – bojler javítás esetén a Provi Domus Kft. 1-2 órán belül kiszáll. A régi pesti bérházak elöregedett bojlerjeit és csőrendszereit kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A VI. kerületi százéves bérházakban a víz meszes – ez felgyorsítja a bojlerek elhasználódását. Az V. és VI. kerületbe a leggyorsabb kiszállást garantáljuk.',
    'testimonial_nev'    => 'Tóth Mária',
    'testimonial_szoveg' => 'Terézvárosban, régi bérházban cseréltük a 18 éves bojlert. Pontosan jöttek, profi munkát végeztek, a régit elvitték. Ajánlom.',
    'testimonial_ker'    => 'Budapest VI. kerület – Terézváros',
    'faq_q'      => 'Vállalnak bojler cserét a VI. kerületben, régi pesti bérházban is?',
    'faq_a'      => 'Igen, a VI. kerületben – Terézváros, Andrássy út – régi bérházakban is dolgozunk. A szűk tereket és régi csőrendszereket kezeljük. Kiszállás 1-2 óra.',
    'szomszed'   => [5, 7, 13, 14],
  ],

  7 => [
    'nev'        => 'VII. kerület',
    'roman'      => 'VII.',
    'reszek'     => 'Erzsébetváros, Klauzál tér, Dohány utca, Rákóczi út, Nagydiófa utca',
    'jellemzo'   => 'A VII. kerület – Budapest zsidónegyede – tele van felújított és felújítatlan bérházakkal. A turisztikai rész és a csendes lakónegyedek eltérő bojler igényeket mutatnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest VII. Kerület – Erzsébetváros, Klauzál tér',
    'hero_sub'   => 'Villanybojler javítás, csere Erzsébetvárosban – Klauzál tér, Dohány utca, Rákóczi út. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A VII. kerületi – Erzsébetváros – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A felújított és eredeti állapotú bérházakban egyaránt tapasztaltak vagyunk. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Erzsébetvárosban sok az Airbnb-vé alakított lakás ahol a bojler intenzívebb terhelésnek van kitéve. Gyors, megbízható javítást vállalunk bérbe adott ingatlanokba is.',
    'testimonial_nev'    => 'Gál Norbert',
    'testimonial_szoveg' => 'Klauzál téri bérleménybe hívtam őket – a bérlő reggel jelezte hogy nincs meleg víz. Délelőtt megoldva. Profik.',
    'testimonial_ker'    => 'Budapest VII. kerület – Erzsébetváros',
    'faq_q'      => 'Vállalnak sürgős bojler javítást a VII. kerületben, bérlemény esetén is?',
    'faq_a'      => 'Igen, a VII. kerületben – Erzsébetváros – bérbeadott lakásokba is kiszállunk. Gyors, 1-2 órás kiszállás, 0-24-ben. A bérlő és a tulajdonos is hívhat minket.',
    'szomszed'   => [6, 8, 14],
  ],

  8 => [
    'nev'        => 'VIII. kerület',
    'roman'      => 'VIII.',
    'reszek'     => 'Józsefváros, Corvin negyed, Palotanegyed, Tisztviselőtelep, Magdolnaváros',
    'jellemzo'   => 'A VIII. kerület megújuló városnegyed – a Corvin negyed modern lakásai és a Palotanegyed felújított bérházai eltérő bojler igényeket mutatnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest VIII. Kerület – Józsefváros, Corvin, Palotanegyed',
    'hero_sub'   => 'Villanybojler javítás, csere Józsefvárosban – Corvin negyed, Palotanegyed, Tisztviselőtelep. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A VIII. kerületi – Józsefváros, Corvin negyed – bojler javítás esetén a Provi Domus Kft. 1-2 óra alatt kiszáll. Modern és régi épületekben egyaránt dolgozunk. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A Corvin negyedben sok az új beépítésű Ariston és Bosch bojler – ezek szervizét vállaljuk. A Palotanegyedben régebbi készülékek dominálnak.',
    'testimonial_nev'    => 'Szabó Réka',
    'testimonial_szoveg' => 'Corvin negyedben, új lakásunkban az Ariston bojler nem melegített. Kiszálltak, biztonsági hőkapcsoló volt – 20 perc és kész. Korrekt.',
    'testimonial_ker'    => 'Budapest VIII. kerület – Corvin negyed',
    'faq_q'      => 'Ariston bojler javítást vállalnak a VIII. kerületben?',
    'faq_a'      => 'Igen, a VIII. kerületben – Józsefváros, Corvin negyed – Ariston, Hajdú, Bosch bojlereket is javítunk. Kiszállás 1-2 óra, 0-24.',
    'szomszed'   => [7, 9, 14],
  ],

  9 => [
    'nev'        => 'IX. kerület',
    'roman'      => 'IX.',
    'reszek'     => 'Ferencváros, Millenniumi negyed, Soroksári út, Közvágóhíd, Középső-Ferencváros',
    'jellemzo'   => 'A IX. kerület gyorsan fejlődő városrész – a Millenniumi negyed új lakásai és a régi Ferencváros bérházai vegyes képet mutatnak. Mindkét típusú épületben dolgozunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest IX. Kerület – Ferencváros, Millenniumi Negyed',
    'hero_sub'   => 'Villanybojler javítás, csere a IX. kerületben – Ferencváros, Millenniumi negyed, Soroksári út. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A IX. kerületi – Ferencváros – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A Millenniumi negyed új és a régi Ferencváros bérház bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Ferencvárosban sok az újonnan beköltöző bérlő – a bojler problémát gyorsan kell megoldani. Garantált kiszállási idő, 0-24.',
    'testimonial_nev'    => 'Papp Ildikó',
    'testimonial_szoveg' => 'Ferencvárosban, Bosch bojler nem melegített. Vasárnap hívtam őket, megérkeztek és megjavították. Hétvégén is vállalnak, ez nagyon fontos volt.',
    'testimonial_ker'    => 'Budapest IX. kerület – Ferencváros',
    'faq_q'      => 'Vállalnak hétvégi bojler javítást a IX. kerületben?',
    'faq_a'      => 'Igen, a IX. kerületben – Ferencváros – hétvégén és ünnepnapokon is kiszállunk, 0-24-ben. Sürgősségi díj hétvégén érvényes.',
    'szomszed'   => [5, 8, 20],
  ],

  10 => [
    'nev'        => 'X. kerület',
    'roman'      => 'X.',
    'reszek'     => 'Kőbánya, Óhegy, Újhegy, Biksad, Mádi utca negyed',
    'jellemzo'   => 'A X. kerület ipari múltú, mára vegyes funkcióú városrész. A Kőbányai panel és téglaépületek bojlerei rendszeres karbantartást igényelnek.',
    'hero_h1'    => 'Bojler Szerelő Budapest X. Kerület – Kőbánya, Óhegy, Újhegy',
    'hero_sub'   => 'Villanybojler javítás, csere Kőbányán – Óhegy, Újhegy, Biksad negyed. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A X. kerületi – Kőbánya – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Panel és téglaépületek bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Kőbányán sok az elöregedett, 15-20 éves bojler a panelházakban. Vízkőtelenítéssel akár 5 évvel meg lehet hosszabbítani az élettartamot.',
    'testimonial_nev'    => 'Horváth Béla',
    'testimonial_szoveg' => 'Kőbányai panellakásban 20 éves Hajdú bojler volt. Azt mondták megéri vízkőteleníteni cseréje helyett. Megtakarítottam 30.000 forintot.',
    'testimonial_ker'    => 'Budapest X. kerület – Kőbánya',
    'faq_q'      => 'Érdemes vízkőteleníteni a X. kerületben, vagy inkább cserélni a bojlert?',
    'faq_a'      => 'Ha a bojler 12 évnél fiatalabb és a tartály ép, vízkőtelenítéssel olcsóbban megúszható. A X. kerületben – Kőbánya – telefonon segítünk eldönteni, ingyenesen.',
    'szomszed'   => [9, 17, 19],
  ],

  11 => [
    'nev'        => 'XI. kerület',
    'roman'      => 'XI.',
    'reszek'     => 'Újbuda, Kelenföld, Lágymányos, Gazdagrét, Sasad, Albertfalva, Kelenföldi lakótelep',
    'jellemzo'   => 'A XI. kerület Budapest egyik legnagyobb kerülete – a Lágymányosi modern lakópark, a Gazdagrét panelei és a Sasad prémiuma egyaránt feladatot ad. Minden területen ismertek vagyunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest XI. Kerület – Újbuda, Kelenföld, Gazdagrét',
    'hero_sub'   => 'Villanybojler javítás, csere a XI. kerületben – Újbuda, Kelenföld, Lágymányos, Gazdagrét. 1-2 óra kiszállás, 0-24, garancia.',
    'ai_text'    => 'A XI. kerületi – Újbuda, Kelenföld – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A Kelenföldi lakótelep panel és a Gazdagrét ház típusú épületek bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A XI. kerület nagy területén belül is gyors kiszállást garantálunk – Albertfalvától Sasadig, Kelenföldig. Ismerjük a kerület minden részét.',
    'testimonial_nev'    => 'Kiss Éva',
    'testimonial_szoveg' => 'Gazdaréti lakásunkban az Ariston bojler leverte a biztosítékot. Délután 5-kor hívtam, este 7-re megjavítva. Fűtőszál csere volt, gyors és korrekt.',
    'testimonial_ker'    => 'Budapest XI. kerület – Gazdagrét',
    'faq_q'      => 'Vállalnak bojler javítást Gazdaréten, Sasadon és a XI. kerület távolabbi részeiben is?',
    'faq_a'      => 'Igen, a teljes XI. kerületben – Kelenföld, Gazdagrét, Sasad, Albertfalva, Lágymányos – kiszállunk. 1-2 óra a kiszállási idő a kerület bármely pontjára.',
    'szomszed'   => [1, 12, 22],
  ],

  12 => [
    'nev'        => 'XII. kerület',
    'roman'      => 'XII.',
    'reszek'     => 'Hegyvidék, Németvölgy, Orbánhegy, Svábhegy, Mártonhegy, Zugliget, Normafa',
    'jellemzo'   => 'A XII. kerület prémium budai hegyvidéki terület – sok villa és igényes társasház. Az Ariston prémium és Hajdú nagy kapacitású típusok dominálnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XII. Kerület – Hegyvidék, Svábhegy, Zugliget',
    'hero_sub'   => 'Villanybojler javítás, csere a XII. kerületben – Hegyvidék, Svábhegy, Orbánhegy, Zugliget. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XII. kerületi – Hegyvidék, Svábhegy – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A budai villákban és igényes társasházakban elsősorban Ariston és Hajdú prémium típusokat szereljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A XII. kerületi prémium ingatlanokban elvárás a precíz, rendezett munka. Minden esetben takarítva hagyjuk el a helyszínt, és prémium alkatrészeket használunk.',
    'testimonial_nev'    => 'Dr. Nagy Péter',
    'testimonial_szoveg' => 'Svábhegyi házunkban Ariston Lydos bojler cserére volt szükség. Pontosak, precízek, a helyszínt tökéletesen hagyták el. Eredeti Ariston alkatrészek, garancia.',
    'testimonial_ker'    => 'Budapest XII. kerület – Svábhegy',
    'faq_q'      => 'Prémium, nagy kapacitású bojlereket is szerelnek a XII. kerületben?',
    'faq_a'      => 'Igen, a XII. kerületben – Hegyvidék, Svábhegy, Zugliget – prémium Ariston és Hajdú típusokat is szervizeljük. Eredeti alkatrészek, garancia. Kiszállás 1-2 óra.',
    'szomszed'   => [1, 2, 11],
  ],

  13 => [
    'nev'        => 'XIII. kerület',
    'roman'      => 'XIII.',
    'reszek'     => 'Angyalföld, Újlipótváros, Vizafogó, Göncz Árpád városközpont, Dráva utca',
    'jellemzo'   => 'A XIII. kerület vegyes képet mutat – az Újlipótváros elegáns bérházai és az Angyalföld panel lakótelep eltérő bojler igényeket mutatnak. Mindkét területen tapasztaltak vagyunk.',
    'hero_h1'    => 'Bojler Szerelő Budapest XIII. Kerület – Angyalföld, Újlipótváros',
    'hero_sub'   => 'Villanybojler javítás, csere a XIII. kerületben – Angyalföld, Újlipótváros, Vizafogó, Göncz Árpád. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XIII. kerületi – Angyalföld, Újlipótváros – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Panel és tégla épületekben egyaránt tapasztaltak vagyunk. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Az Angyalföldi panel lakásokban sok az elöregedett, 15+ éves bojler. Az Újlipótvárosban felújított lakások modern Ariston és Bosch bojlerek szervizét igénylik.',
    'testimonial_nev'    => 'Farkas Judit',
    'testimonial_szoveg' => 'Újlipótvárosban, felújított lakásban a 3 éves Ariston Velis nem melegített. Garancián belül is bevállalták, gyorsan megoldottak. Profi csapat.',
    'testimonial_ker'    => 'Budapest XIII. kerület – Újlipótváros',
    'faq_q'      => 'Vállalnak bojler javítást a XIII. kerületben, Újlipótvárosban és Angyalföldön is?',
    'faq_a'      => 'Igen, a XIII. kerület teljes területén – Angyalföld, Újlipótváros, Vizafogó – kiszállunk. 1-2 óra, 0-24.',
    'szomszed'   => [3, 4, 6, 14],
  ],

  14 => [
    'nev'        => 'XIV. kerület',
    'roman'      => 'XIV.',
    'reszek'     => 'Zugló, Rákosfalva, Istvánmező, Herminamező, Törökőr, Alsórákos',
    'jellemzo'   => 'A XIV. kerület Zugló Budapest egyik legnépszerűbb lakóhelye – csendes utcák, zöld környezet, sok társasház és ház. A Zuglói bojlerek átlagosan 10-20 éves korúak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XIV. Kerület – Zugló, Rákosfalva, Herminamező',
    'hero_sub'   => 'Villanybojler javítás, csere Zuglóban – Rákosfalva, Istvánmező, Herminamező, Törökőr. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XIV. kerületi – Zugló – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A Zuglói társasházak és kertes házak bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Zuglóban sok a 10-15 éves bojler, amelyek már kezdenek elöregedni. A megelőző vízkőtelenítés évente elvégezve 3-5 évvel meghosszabbíthatja az élettartamot.',
    'testimonial_nev'    => 'Mészáros Gábor',
    'testimonial_szoveg' => 'Zuglóban, Törökőrön korog és lassan melegített a bojler. Vízkőtelenítés és anódrúd csere volt. 3 évvel meghosszabbította az élettartamot. Megérte.',
    'testimonial_ker'    => 'Budapest XIV. kerület – Zugló',
    'faq_q'      => 'Mennyibe kerül a bojler vízkőtelenítés a XIV. kerületben, Zuglóban?',
    'faq_a'      => 'A bojler vízkőtelenítés és anódrúd csere munkadíja 12.000–20.000 Ft a XIV. kerületben – Zugló. Az alkatrész ára külön. Kiszállás 1-2 óra.',
    'szomszed'   => [6, 7, 13, 16],
  ],

  15 => [
    'nev'        => 'XV. kerület',
    'roman'      => 'XV.',
    'reszek'     => 'Rákospalota, Pestújhely, Újpalota, Rákospalotai lakótelep',
    'jellemzo'   => 'A XV. kerület észak-pesti lakónegyed – a Rákospalotai lakótelep nagy panelei és az Újpalota kertes házas részei eltérő igényeket mutatnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XV. Kerület – Rákospalota, Pestújhely, Újpalota',
    'hero_sub'   => 'Villanybojler javítás, csere a XV. kerületben – Rákospalota, Pestújhely, Újpalota. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XV. kerületi – Rákospalota, Pestújhely – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Panel lakások és kertes házak bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A XV. kerületi panelházakban sok a 20+ éves elöregedett bojler, amelyek cseréje időszerű. A csere és az elszállítás is egy látogatás alatt elvégezhető.',
    'testimonial_nev'    => 'Pintér Anna',
    'testimonial_szoveg' => 'Rákospalotán 22 éves bojlert cseréltünk. Pontosak, gyorsak, a régit elvitték, az új másnap már melegített. Jó áron.',
    'testimonial_ker'    => 'Budapest XV. kerület – Rákospalota',
    'faq_q'      => 'Vállalnak bojler cserét Rákospalotán, a XV. kerületben?',
    'faq_a'      => 'Igen, a XV. kerületben – Rákospalota, Pestújhely, Újpalota – bojler cserét és javítást is vállalunk. Kiszállás 1-2 óra, 0-24.',
    'szomszed'   => [4, 13, 16],
  ],

  16 => [
    'nev'        => 'XVI. kerület',
    'roman'      => 'XVI.',
    'reszek'     => 'Mátyásföld, Sashalom, Cinkota, Árpádföld, Rákosszentmihály',
    'jellemzo'   => 'A XVI. kerület csendes, kertvárosi jellegű Budapest keleti részén. Sok a régebbi, kertes ház, ahol nagyobb kapacitású bojlerek üzemelnek.',
    'hero_h1'    => 'Bojler Szerelő Budapest XVI. Kerület – Mátyásföld, Sashalom, Cinkota',
    'hero_sub'   => 'Villanybojler javítás, csere a XVI. kerületben – Mátyásföld, Sashalom, Cinkota, Rákosszentmihály. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XVI. kerületi – Mátyásföld, Sashalom – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Kertes házak nagy kapacitású bojlerjeit is kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A XVI. kerületi kertes házakban 150-200 literes Hajdú bojlerek üzemelnek. A nagy kapacitású készülékek cseréjéhez két szerelő érkezik.',
    'testimonial_nev'    => 'Lukács Tibor',
    'testimonial_szoveg' => 'Sashalmi házunkban 150 literes Hajdú bojlert cseréltünk. Ketten jöttek, profi munka, a régit elvitték. Elégedett vagyok.',
    'testimonial_ker'    => 'Budapest XVI. kerület – Sashalom',
    'faq_q'      => 'Nagy kapacitású, 150 literes bojlert is cserélnek a XVI. kerületben?',
    'faq_a'      => 'Igen, a XVI. kerületben – Mátyásföld, Sashalom, Cinkota – nagy bojlereket is cserélünk. Két szerelő érkezik, a régit elszállítjuk. Kiszállás 1-2 óra.',
    'szomszed'   => [14, 15, 17],
  ],

  17 => [
    'nev'        => 'XVII. kerület',
    'roman'      => 'XVII.',
    'reszek'     => 'Rákosmente, Rákoskeresztúr, Rákoscsaba, Rákoshegy, Rákosliget',
    'jellemzo'   => 'A XVII. kerület Budapest keleti kertvárosa – sok a régebbi, önálló ház ahol a bojler az egyetlen melegvíz forrás. A meghibásodás azonnali beavatkozást igényel.',
    'hero_h1'    => 'Bojler Szerelő Budapest XVII. Kerület – Rákosmente, Rákoskeresztúr, Rákoscsaba',
    'hero_sub'   => 'Villanybojler javítás, csere a XVII. kerületben – Rákosmente, Rákoskeresztúr, Rákoscsaba, Rákoshegy. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XVII. kerületi – Rákosmente – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Kertes házak és lakótelepek bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Rákosmentén sok a régi, 15-20 éves bojler. Az egész háztartás meleg vize a bojlertől függ – ezért a gyors kiszállás kritikus.',
    'testimonial_nev'    => 'Bíró István',
    'testimonial_szoveg' => 'Rákoskeresztúri házunkban télen romlott el a bojler. Estére kiszálltak, fűtőszálat cseréltek. Télre nem maradtunk meleg víz nélkül. Hálás vagyok.',
    'testimonial_ker'    => 'Budapest XVII. kerület – Rákoskeresztúr',
    'faq_q'      => 'Vállalnak sürgős bojler javítást a XVII. kerületben, Rákosmentén?',
    'faq_a'      => 'Igen, a XVII. kerületben – Rákosmente, Rákoskeresztúr, Rákoscsaba – 1-2 órán belül kiszállunk. 0-24, hétvégén és ünnepnapokon is.',
    'szomszed'   => [10, 16, 18],
  ],

  18 => [
    'nev'        => 'XVIII. kerület',
    'roman'      => 'XVIII.',
    'reszek'     => 'Pestszentlőrinc, Pestszentimre, Lakótelep, Szemeretelep',
    'jellemzo'   => 'A XVIII. kerület déli pesti városrész – Pestszentlőrinc és Pestszentimre régi társasházai és az újabb panelépületek vegyes képet mutatnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XVIII. Kerület – Pestszentlőrinc, Pestszentimre',
    'hero_sub'   => 'Villanybojler javítás, csere a XVIII. kerületben – Pestszentlőrinc, Pestszentimre, Lakótelep. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XVIII. kerületi – Pestszentlőrinc, Pestszentimre – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Pestszentlőrincen és Pestszentimrén sok a régi társasházi bojler, amelyek rendszeres karbantartást igényelnek. Éves vízkőtelenítéssel megelőzhető a korai meghibásodás.',
    'testimonial_nev'    => 'Oláh Margit',
    'testimonial_szoveg' => 'Pestszentlőrinci lakásomban évente vízkőteleníttetem a bojlert. Provi Domus mindig pontosan jön, mindig korrekt áron dolgoznak. Ajánlom.',
    'testimonial_ker'    => 'Budapest XVIII. kerület – Pestszentlőrinc',
    'faq_q'      => 'Vállalnak rendszeres bojler karbantartást a XVIII. kerületben?',
    'faq_a'      => 'Igen, a XVIII. kerületben – Pestszentlőrinc, Pestszentimre – éves karbantartást (vízkőtelenítés, anódrúd csere) is vállalunk. Hívjon előre időpontra.',
    'szomszed'   => [17, 19, 20],
  ],

  19 => [
    'nev'        => 'XIX. kerület',
    'roman'      => 'XIX.',
    'reszek'     => 'Kispest, Wekerletelep, Vörösmarty tér',
    'jellemzo'   => 'A XIX. kerület Kispest Budapest egyedi városrészének, a Wekerletelepnek az otthona – védett műemléki területen belüli épületek sajátos kihívásokat jelentenek.',
    'hero_h1'    => 'Bojler Szerelő Budapest XIX. Kerület – Kispest, Wekerletelep',
    'hero_sub'   => 'Villanybojler javítás, csere a XIX. kerületben – Kispest, Wekerletelep, Vörösmarty tér. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XIX. kerületi – Kispest, Wekerletelep – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. A műemléki Wekerletelep épületeiben is tapasztaltak vagyunk. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A Wekerletelepem a régi épületek és az egyedi architektúra megkövetelik a tapasztalt, precíz munkát. A műemléki épületek sajátosságait ismerjük.',
    'testimonial_nev'    => 'Rácz Ferenc',
    'testimonial_szoveg' => 'Wekerletelepem régi házunkban kellett bojlert cserélni. Nehéz volt a hozzáférés, de megoldották. Precíz, rendezett munka.',
    'testimonial_ker'    => 'Budapest XIX. kerület – Wekerletelep',
    'faq_q'      => 'Vállalnak bojler cserét a XIX. kerületben, a Wekerletelepemen is?',
    'faq_a'      => 'Igen, a XIX. kerületben – Kispest, Wekerletelep – műemléki épületekben is dolgozunk. Kiszállás 1-2 óra, 0-24.',
    'szomszed'   => [10, 18, 20],
  ],

  20 => [
    'nev'        => 'XX. kerület',
    'roman'      => 'XX.',
    'reszek'     => 'Pesterzsébet, Gubacsipuszta, Török utca negyed',
    'jellemzo'   => 'A XX. kerület Pesterzsébet déli pesti lakónegyed – sok a régi téglaépület és panel. A bojlerek átlagkora magas, sok a csereérett készülék.',
    'hero_h1'    => 'Bojler Szerelő Budapest XX. Kerület – Pesterzsébet',
    'hero_sub'   => 'Villanybojler javítás, csere Pesterzsébeten – Gubacsipuszta, Török utca negyed. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XX. kerületi – Pesterzsébet – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Tégla és panel épületekben egyaránt tapasztaltak vagyunk. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Pesterzsébeten sok az elöregedett, 20+ éves bojler. Ha rozsdás vizet ad ki – azonnal cserélendő. Telefonon segítünk eldönteni.',
    'testimonial_nev'    => 'Simon Katalin',
    'testimonial_szoveg' => 'Pesterzsébeti lakásban rozsdás víz jött a bojlerből. Kiszálltak, megnézték – tartály korrodált, cserére ítélték. Új Ariston, másnap meleg víz.',
    'testimonial_ker'    => 'Budapest XX. kerület – Pesterzsébet',
    'faq_q'      => 'Rozsdás vizet ad a bojler a XX. kerületben – mit tegyek?',
    'faq_a'      => 'Ha rozsdás vizet ad a bojler, a tartály belülről korrodált – csere szükséges. Hívjon minket: a XX. kerületbe – Pesterzsébet – 1-2 óra alatt kiszállunk.',
    'szomszed'   => [9, 19, 23],
  ],

  21 => [
    'nev'        => 'XXI. kerület',
    'roman'      => 'XXI.',
    'reszek'     => 'Csepel, Csepeli lakótelep, Királyerdő, Csepel-North',
    'jellemzo'   => 'A XXI. kerület Csepel Budapest szigeten lévő városrész – a Csepeli lakótelep panelei és a sziget déli részének kertes házai eltérő igényeket mutatnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XXI. Kerület – Csepel',
    'hero_sub'   => 'Villanybojler javítás, csere Csepelen – Csepeli lakótelep, Királyerdő, Csepel-North. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XXI. kerületi – Csepel – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Panel és kertes ház bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Csepelen a Duna víz magas mésztartalma felgyorsítja a bojler vízkövesedését. Évenkénti vízkőtelenítéssel érdemes megelőzni a komolyabb meghibásodást.',
    'testimonial_nev'    => 'Kocsis Péter',
    'testimonial_szoveg' => 'Csepeli panellakásban gyorsan meszesedik a bojler a dunai víz miatt. Évente hívom őket vízkőtelenítésre. Megbízhatóak, pontosak.',
    'testimonial_ker'    => 'Budapest XXI. kerület – Csepel',
    'faq_q'      => 'Miért meszesedik gyorsabban a bojler Csepelen?',
    'faq_a'      => 'A XXI. kerületben – Csepel – a Duna magas mésztartalmú vize felgyorsítja a vízkövesedést. Évente ajánlott a bojler vízkőtelenítése. Kiszállás 1-2 óra.',
    'szomszed'   => [9, 20, 22],
  ],

  22 => [
    'nev'        => 'XXII. kerület',
    'roman'      => 'XXII.',
    'reszek'     => 'Budatétény, Nagytétény, Budafok, Háros, Albertfalva',
    'jellemzo'   => 'A XXII. kerület Budapest déli budai oldala – Budafok borairól és Budatétény csendes utcáiról ismert. Sok a kertes ház és a kisebb társasház.',
    'hero_h1'    => 'Bojler Szerelő Budapest XXII. Kerület – Budafok, Budatétény, Nagytétény',
    'hero_sub'   => 'Villanybojler javítás, csere a XXII. kerületben – Budafok, Budatétény, Nagytétény, Háros. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XXII. kerületi – Budafok, Budatétény – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Kertes házak és kisebb társasházak bojlerjeit egyaránt kezeljük. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'A XXII. kerületi kertes házakban Hajdú 100-150 literes bojlerek dominálnak. A nagy kapacitású készülékek karbantartása és cseréje is feladatunk.',
    'testimonial_nev'    => 'Németh Erzsébet',
    'testimonial_szoveg' => 'Budafokon, régi házunkban cseréltük a 15 éves Hajdút. Ketten jöttek, a nagy és nehéz bojlert kicserélték, a régit elvitték. Profi munka.',
    'testimonial_ker'    => 'Budapest XXII. kerület – Budafok',
    'faq_q'      => 'Vállalnak bojler cserét a XXII. kerületben, Budafokon és Budatétényen?',
    'faq_a'      => 'Igen, a XXII. kerületben – Budafok, Budatétény, Nagytétény – bojler cserét és javítást is vállalunk. Kiszállás 1-2 óra, 0-24.',
    'szomszed'   => [11, 21, 23],
  ],

  23 => [
    'nev'        => 'XXIII. kerület',
    'roman'      => 'XXIII.',
    'reszek'     => 'Soroksár, Újtelep, Soroksári lakótelep, Grassalkovich major',
    'jellemzo'   => 'A XXIII. kerület Budapest legdélebbi, legkisebb kerülete – Soroksár nyugodt, kertvárosi jellegű területe. A kertes házak és a lakótelep bojlerei egyaránt feladatot adnak.',
    'hero_h1'    => 'Bojler Szerelő Budapest XXIII. Kerület – Soroksár',
    'hero_sub'   => 'Villanybojler javítás, csere a XXIII. kerületben – Soroksár, Újtelep, Soroksári lakótelep. 1-2 óra kiszállás, 0-24.',
    'ai_text'    => 'A XXIII. kerületi – Soroksár – bojler javítás esetén a Provi Domus Kft. 1-2 óra kiszállással dolgozik. Budapest legdélebbi kerületébe is garantált a gyors kiszállás. Munkadíj: 10.000–35.000 Ft.',
    'problema'   => 'Soroksáron a kertes házak nagy részében idősebb, 15-20 éves bojlerek üzemelnek. A korai meghibásodás megelőzhető éves karbantartással.',
    'testimonial_nev'    => 'Takács Mihály',
    'testimonial_szoveg' => 'Soroksáron laktunk, mindenki azt mondta idáig nem jönnek. Provi Domus jött, megjavított. Nem kell félni a kerülettől. Köszönöm.',
    'testimonial_ker'    => 'Budapest XXIII. kerület – Soroksár',
    'faq_q'      => 'Vállalnak bojler javítást a XXIII. kerületben, Soroksáron?',
    'faq_a'      => 'Igen, a XXIII. kerületbe – Soroksár – is kiszállunk, 1-2 óra alatt. Budapest legdélebbi kerületét sem hagyjuk ki. 0-24.',
    'szomszed'   => [20, 22],
  ],

]; // $keruletek tömb vége

// Aktuális kerület adatai
$k = $keruletek[$kid];
$roman_szam = ['','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XXI','XXII','XXIII'];
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Szerelő Budapest <?= $k['roman'] ?> Kerület – <?= $k['reszek'] ?> | Provi Domus Kft.</title>
<meta name="description" content="Bojler szerelő Budapest <?= $k['nev'] ?>-ban – <?= $k['reszek'] ?>. Villanybojler javítás, csere, vízkőtelenítés 1-2 óra kiszállás, 0-24, garancia. <?= $phone ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/bojler-szerelo-<?= $kid ?>-kerulet/">
<meta property="og:type" content="website">
<meta property="og:title" content="Bojler Szerelő Budapest <?= $k['roman'] ?>. Kerület – <?= $k['reszek'] ?>">
<meta property="og:description" content="Bojler javítás, csere <?= $k['nev'] ?>-ban – 1-2 óra kiszállás, 0-24. <?= $phone ?>">
<meta property="og:locale" content="hu_HU">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "name": "Provi Domus Kft. – Bojler Szerelő Budapest <?= $k['roman'] ?>. Kerület",
      "url": "<?= $base ?>/bojler-szerelo-<?= $kid ?>-kerulet/",
      "telephone": "+36701644000",
      "email": "<?= $email ?>",
      "address": {"@type":"PostalAddress","addressLocality":"Budapest","addressCountry":"HU"},
      "areaServed": "Budapest <?= $k['nev'] ?> – <?= $k['reszek'] ?>",
      "openingHoursSpecification": {"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"00:00","closes":"23:59"},
      "priceRange": "10000-35000 HUF",
      "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"143","bestRating":"5"},
      "hasOfferCatalog": {"@type":"OfferCatalog","name":"Bojler Szerelés <?= $k['nev'] ?>","itemListElement":[
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Bojler javítás Budapest <?= $k['roman'] ?>. kerület"},"priceSpecification":{"@type":"PriceSpecification","minPrice":"10000","maxPrice":"28000","priceCurrency":"HUF"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Bojler csere Budapest <?= $k['roman'] ?>. kerület"},"priceSpecification":{"@type":"PriceSpecification","minPrice":"15000","maxPrice":"35000","priceCurrency":"HUF"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Vízkőtelenítés Budapest <?= $k['roman'] ?>. kerület"},"priceSpecification":{"@type":"PriceSpecification","minPrice":"12000","maxPrice":"20000","priceCurrency":"HUF"}}
      ]}
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"<?= htmlspecialchars($k['faq_q']) ?>","acceptedAnswer":{"@type":"Answer","text":"<?= htmlspecialchars($k['faq_a']) ?>"}},
        {"@type":"Question","name":"Mennyibe kerül a bojler javítás Budapest <?= $k['roman'] ?>. kerületben?","acceptedAnswer":{"@type":"Answer","text":"A bojler javítás munkadíja Budapest <?= $k['nev'] ?>-ban 10.000–28.000 Ft között mozog, az alkatrész ára külön értendő. Kiszállás: 1-2 óra, 0-24."}}
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Főoldal","item":"<?= $base ?>/"},
        {"@type":"ListItem","position":2,"name":"Budapest kerületek","item":"<?= $base ?>/"},
        {"@type":"ListItem","position":3,"name":"<?= $k['nev'] ?>","item":"<?= $base ?>/bojler-szerelo-<?= $kid ?>-kerulet/"}
      ]
    }
  ]
}
</script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;color:#1a1a2e;background:#fff;line-height:1.6;overflow-x:hidden}
a{color:inherit;text-decoration:none}
ul{list-style:none}
img{max-width:100%;height:auto;display:block}
:root{
  --fire:#c62828;--fire-dark:#8e0000;--amber:#f57f17;--amber-bright:#ffab00;
  --dark:#0f0f1a;--dark-card:#1a1a2e;--green:#2e7d32;--white:#fff;
  --gray-light:#f5f5f7;--gray:#e8e8ed;--text:#1a1a2e;--text-light:#4a4a5a;
  --shadow-sm:0 2px 8px rgba(198,40,40,.10);--shadow-md:0 6px 24px rgba(198,40,40,.16);
  --r:12px;--rs:8px;--t:all .22s ease;
}
h1{font-size:clamp(1.75rem,4vw,2.8rem);font-weight:900;line-height:1.1;color:#fff;letter-spacing:-.02em}
h2{font-size:clamp(1.35rem,3vw,2rem);font-weight:800;line-height:1.2;color:var(--text)}
h3{font-size:clamp(1rem,2vw,1.25rem);font-weight:700;color:var(--text)}
h4{font-size:.98rem;font-weight:700;color:var(--text)}
p{color:var(--text-light);line-height:1.7}

/* ALERT BAR */
.ab{background:var(--fire-dark);color:#fff;text-align:center;padding:.45rem 1rem;font-size:.83rem;font-weight:600}
.ab a{color:#ffcc02;font-weight:800}

/* HEADER */
.sh{position:sticky;top:0;z-index:1000;background:var(--dark);box-shadow:0 2px 16px rgba(0,0,0,.4)}
.hi{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:.7rem 1.5rem;gap:1rem}
.logo a{display:flex;align-items:center;gap:.6rem;color:#fff;font-size:1.05rem;font-weight:900;white-space:nowrap}
.lm{width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,var(--fire),var(--amber));display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0}
.ls{font-size:.65rem;font-weight:400;color:rgba(255,255,255,.55);display:block;margin-top:1px}
.nav{display:flex;gap:.1rem;flex-wrap:wrap;align-items:center}
.nav a{color:rgba(255,255,255,.75);font-size:.82rem;font-weight:500;padding:.38rem .6rem;border-radius:6px;transition:var(--t);white-space:nowrap}
.nav a:hover{background:rgba(255,255,255,.1);color:#fff}
.nav a.active{color:#ffcc02}
.hcta{display:flex;align-items:center;gap:.6rem;flex-shrink:0}
.bth{background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;padding:.52rem 1.05rem;border-radius:var(--rs);font-weight:800;font-size:.88rem;white-space:nowrap;box-shadow:0 3px 12px rgba(198,40,40,.4);transition:var(--t)}
.bth:hover{transform:translateY(-1px);box-shadow:0 5px 18px rgba(198,40,40,.5)}
.bth small{display:block;font-size:.62rem;font-weight:400;opacity:.8}
.nt{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:.4rem}
.nt span{width:24px;height:2px;background:#fff;border-radius:2px}
#nc{display:none}

/* BREADCRUMB */
.bc{background:rgba(255,255,255,.06);padding:.5rem 1.5rem;border-bottom:1px solid rgba(255,255,255,.06)}
.bci{max-width:1200px;margin:0 auto;display:flex;gap:.4rem;align-items:center;font-size:.78rem;color:rgba(255,255,255,.55);flex-wrap:wrap}
.bci a{color:rgba(255,255,255,.55);transition:var(--t)}
.bci a:hover{color:#fff}
.bci span{color:rgba(255,255,255,.3)}

/* HERO */
.hero{background:linear-gradient(145deg,var(--fire-dark) 0%,var(--fire) 55%,#d84315 100%);padding:3.5rem 1.5rem 3rem;position:relative;overflow:hidden}
.hero::after{content:'';position:absolute;bottom:-1px;left:0;right:0;height:50px;background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 50'%3E%3Cpath fill='%23f5f5f7' d='M0,50 C360,0 1080,0 1440,50 L1440,50 L0,50Z'/%3E%3C/svg%3E") bottom/cover;pointer-events:none}
.hw{max-width:1200px;margin:0 auto;position:relative;z-index:1}
.hg{display:grid;grid-template-columns:1fr 260px;gap:2rem;align-items:start}
.hbadge{display:inline-flex;align-items:center;gap:.4rem;background:rgba(0,0,0,.3);color:#ffcc02;padding:.3rem .85rem;border-radius:20px;font-size:.78rem;font-weight:800;margin-bottom:.85rem;border:1px solid rgba(255,204,2,.3);text-transform:uppercase;letter-spacing:.04em}
.hero h1{margin-bottom:.75rem;text-shadow:0 2px 12px rgba(0,0,0,.3)}
.hero h1 em{font-style:normal;color:#ffcc02}
.hd{color:rgba(255,255,255,.9);font-size:1.05rem;margin-bottom:1.25rem;max-width:560px;line-height:1.65}
.hch{display:flex;flex-wrap:wrap;gap:.45rem;margin-bottom:1.75rem}
.hci{display:flex;align-items:center;gap:.35rem;color:rgba(255,255,255,.92);font-size:.8rem;font-weight:600;background:rgba(0,0,0,.22);padding:.28rem .7rem;border-radius:20px;border:1px solid rgba(255,255,255,.14)}
.hb{display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:1.5rem}
.bpc{background:#fff;color:var(--fire);padding:.85rem 1.75rem;border-radius:var(--rs);font-weight:900;font-size:1.05rem;box-shadow:0 6px 24px rgba(0,0,0,.25);transition:var(--t);display:inline-flex;align-items:center;gap:.45rem}
.bpc:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(0,0,0,.35)}
.bws{background:rgba(255,255,255,.12);color:#fff;padding:.85rem 1.35rem;border-radius:var(--rs);font-weight:700;border:2px solid rgba(255,255,255,.3);transition:var(--t);display:inline-flex;align-items:center;gap:.45rem}
.bws:hover{background:rgba(255,255,255,.2)}
.hs{display:flex;flex-wrap:wrap;gap:1rem}
.sig{display:flex;align-items:center;gap:.35rem;color:rgba(255,255,255,.82);font-size:.8rem;font-weight:500}

/* Hero kártya */
.hcard{background:var(--dark);border-radius:var(--r);padding:1.35rem;border:1px solid rgba(255,255,255,.08);box-shadow:0 16px 48px rgba(0,0,0,.4)}
.hu{text-align:center;background:linear-gradient(135deg,var(--fire-dark),var(--fire));border-radius:var(--rs);padding:.75rem;margin-bottom:.85rem}
.hu .ul{font-size:.68rem;color:rgba(255,255,255,.65);text-transform:uppercase;letter-spacing:.08em;display:block}
.hu .up{font-size:1.3rem;font-weight:900;color:#fff;display:block;margin:.2rem 0}
.hu .us{font-size:.72rem;color:rgba(255,255,255,.72)}
.bcr{display:block;width:100%;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;text-align:center;padding:.7rem;border-radius:var(--rs);font-weight:800;font-size:.92rem;margin-bottom:.55rem;transition:var(--t)}
.bcr:hover{filter:brightness(1.1)}
.bwg{display:block;width:100%;background:#25d366;color:#fff;text-align:center;padding:.62rem;border-radius:var(--rs);font-weight:700;font-size:.86rem;margin-bottom:.45rem;transition:var(--t)}
.bwg:hover{background:#1ebe5d}
.hp{margin-top:.8rem}
.hp p{font-size:.7rem;color:rgba(255,255,255,.45);text-transform:uppercase;letter-spacing:.07em;margin-bottom:.45rem}
.hp li{font-size:.8rem;color:rgba(255,255,255,.78);padding:.28rem 0;border-bottom:1px solid rgba(255,255,255,.07);display:flex;align-items:center;gap:.35rem}
.hp li:last-child{border-bottom:none}

/* STATS */
.sb{background:var(--dark);padding:1.35rem}
.si{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr);gap:.75rem}
.st{text-align:center}
.sn{font-size:1.85rem;font-weight:900;color:var(--amber);line-height:1}
.sl{font-size:.74rem;color:rgba(255,255,255,.55);margin-top:.2rem}

/* SZEKCIÓK */
.sec{padding:3.5rem 1.5rem}
.seca{background:var(--gray-light)}
.secd{background:var(--dark-card)}
.con{max-width:1200px;margin:0 auto}
.tag{display:inline-block;font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:.22rem .75rem;border-radius:20px;margin-bottom:.6rem}
.tf{color:var(--fire);background:rgba(198,40,40,.1)}
.td{color:var(--amber);background:rgba(245,127,23,.15)}
.stit{margin-bottom:.55rem}
.ssub{color:var(--text-light);font-size:.98rem;max-width:620px;margin-bottom:2.25rem}
.stit-w{color:#fff;margin-bottom:.55rem}
.ssub-w{color:rgba(255,255,255,.65);font-size:.98rem;max-width:620px;margin-bottom:2.25rem}

/* AI SNIPPET */
.aibox{background:linear-gradient(135deg,#0f0f1a,#1a1a2e);border-radius:var(--r);padding:1.6rem 1.85rem;border-left:4px solid var(--amber);box-shadow:var(--shadow-md);margin-bottom:2.25rem}
.ail{display:inline-flex;align-items:center;gap:.35rem;font-size:.7rem;font-weight:700;color:var(--amber);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.7rem;background:rgba(245,127,23,.15);padding:.2rem .65rem;border-radius:20px}
.aibox h3{color:#fff;margin-bottom:.7rem;font-size:1.05rem}
.aibox p{color:rgba(255,255,255,.75);font-size:.9rem;line-height:1.75;margin-bottom:.4rem}
.aibox p:last-child{margin-bottom:0}

/* SZOLGÁLTATÁS KÁRTYÁK */
.sg{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.1rem}
.sc{background:#fff;border-radius:var(--r);border:1px solid var(--gray);padding:1.5rem;transition:var(--t);position:relative;overflow:hidden}
.sc::after{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--fire),var(--amber));transform:scaleX(0);transform-origin:left;transition:var(--t)}
.sc:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);border-color:transparent}
.sc:hover::after{transform:scaleX(1)}
.sci{width:50px;height:50px;border-radius:12px;background:linear-gradient(135deg,rgba(198,40,40,.07),rgba(245,127,23,.1));display:flex;align-items:center;justify-content:center;font-size:1.45rem;margin-bottom:.9rem;transition:var(--t)}
.sc:hover .sci{background:linear-gradient(135deg,rgba(198,40,40,.14),rgba(245,127,23,.18))}
.scp{display:inline-block;font-size:.76rem;font-weight:800;color:var(--fire);background:rgba(198,40,40,.08);padding:.18rem .6rem;border-radius:20px;margin-bottom:.7rem}
.sc h3{margin-bottom:.45rem;font-size:1rem}
.sc p{font-size:.86rem;margin-bottom:.85rem}
.scl li{font-size:.81rem;color:var(--text-light);padding:.18rem 0;display:flex;align-items:center;gap:.35rem}
.scl li::before{content:'✓';color:var(--green);font-weight:700;font-size:.78rem;flex-shrink:0}
.sclink{display:inline-flex;align-items:center;gap:.3rem;margin-top:.85rem;font-size:.83rem;font-weight:700;color:var(--fire);transition:var(--t)}
.sclink:hover{gap:.55rem}

/* ÁRAK */
.pt{width:100%;border-collapse:collapse;border-radius:var(--r);overflow:hidden;box-shadow:var(--shadow-sm)}
.pt thead tr{background:linear-gradient(90deg,var(--fire-dark),var(--fire));color:#fff}
.pt thead th{padding:.9rem 1.2rem;text-align:left;font-size:.86rem;font-weight:700}
.pt tbody tr{border-bottom:1px solid var(--gray);transition:var(--t)}
.pt tbody tr:hover{background:#fff5f5}
.pt tbody tr:last-child{border-bottom:none}
.pt td{padding:.8rem 1.2rem;font-size:.88rem}
.pt td:first-child{font-weight:600}
.prc{font-weight:800;color:var(--fire)}
.ntc{font-size:.78rem;color:var(--text-light)}
.pnote{margin-top:.9rem;font-size:.82rem;color:var(--text-light);padding:.7rem .95rem;background:var(--gray-light);border-radius:var(--rs);border-left:3px solid var(--amber)}

/* MIÉRT MINKET */
.rg{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.1rem}
.rc{background:rgba(255,255,255,.05);border-radius:var(--r);padding:1.35rem;border:1px solid rgba(255,255,255,.08);transition:var(--t)}
.rc:hover{background:rgba(255,255,255,.09);transform:translateY(-2px)}
.rn{width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;display:flex;align-items:center;justify-content:center;font-weight:900;font-size:.95rem;margin-bottom:.9rem}
.rc h4{color:#fff;margin-bottom:.35rem}
.rc p{color:rgba(255,255,255,.62);font-size:.84rem}

/* FOLYAMAT */
.pg{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:1.25rem;position:relative}
.pg::before{content:'';position:absolute;top:26px;left:10%;right:10%;height:2px;background:linear-gradient(90deg,var(--fire),var(--amber));z-index:0}
.ps{text-align:center;position:relative;z-index:1;padding:.4rem}
.pn{width:52px;height:52px;border-radius:50%;margin:0 auto .9rem;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.3rem;font-weight:900;box-shadow:0 4px 16px rgba(198,40,40,.4)}
.ps h4{margin-bottom:.3rem;font-size:.92rem}
.ps p{font-size:.81rem}

/* VÉLEMÉNY */
.rvg{display:grid;grid-template-columns:repeat(auto-fit,minmax(270px,1fr));gap:1.1rem}
.rvc{background:#fff;border-radius:var(--r);padding:1.4rem;border:1px solid var(--gray);box-shadow:var(--shadow-sm);border-top:3px solid var(--fire)}
.rvs{color:#f9a825;font-size:1.05rem;margin-bottom:.7rem}
.rvt{font-size:.9rem;font-style:italic;margin-bottom:.95rem;line-height:1.65;color:var(--text)}
.rva{display:flex;align-items:center;gap:.7rem}
.rvav{width:38px;height:38px;border-radius:50%;flex-shrink:0;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.86rem}
.rvn{font-weight:700;font-size:.86rem}
.rvl{font-size:.74rem;color:var(--text-light)}

/* BELSŐ LINKEK */
.ilg{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1.25rem}
.il{display:inline-block;background:#fff;border:1px solid var(--gray);border-radius:20px;padding:.32rem .8rem;font-size:.8rem;font-weight:600;color:var(--fire);transition:var(--t)}
.il:hover{background:var(--fire);color:#fff;border-color:var(--fire)}

/* SZOMSZÉD KERÜLETEK */
.nkg{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1rem}
.nkl{display:inline-block;background:var(--dark);color:rgba(255,255,255,.8);border-radius:20px;padding:.35rem .85rem;font-size:.8rem;font-weight:600;transition:var(--t);border:1px solid rgba(255,255,255,.12)}
.nkl:hover{background:var(--fire);color:#fff;border-color:var(--fire)}

/* FAQ */
.fw{max-width:800px}
.fi{border:1px solid var(--gray);border-radius:var(--rs);margin-bottom:.55rem;overflow:hidden}
.fi:hover{border-color:var(--fire)}
.fq{width:100%;background:none;border:none;cursor:pointer;padding:1rem 1.2rem;display:flex;align-items:center;justify-content:space-between;text-align:left;font-size:.92rem;font-weight:700;color:var(--text);gap:.85rem}
.fqi{width:24px;height:24px;border-radius:50%;flex-shrink:0;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;display:flex;align-items:center;justify-content:center;font-size:.95rem;transition:var(--t)}
.fa{max-height:0;overflow:hidden;transition:max-height .3s ease,padding .3s ease;padding:0 1.2rem;font-size:.88rem;color:var(--text-light)}
.fi.open .fa{max-height:220px;padding:.7rem 1.2rem 1rem}
.fi.open .fqi{transform:rotate(45deg)}
.fi.open{border-color:var(--fire);box-shadow:var(--shadow-sm)}

/* CTA BANNER */
.ctab{background:linear-gradient(135deg,#0f0f1a 0%,var(--fire-dark) 100%);padding:3rem 1.5rem;text-align:center}
.ctab h2{color:#fff;margin-bottom:.55rem}
.ctab p{color:rgba(255,255,255,.72);margin-bottom:1.75rem;font-size:1rem}
.ctabs{display:flex;justify-content:center;gap:.85rem;flex-wrap:wrap}
.ctam{background:linear-gradient(135deg,#fff,#fff5f0);color:var(--fire);padding:.9rem 2rem;border-radius:var(--rs);font-weight:900;font-size:1.05rem;transition:var(--t);box-shadow:0 6px 24px rgba(255,255,255,.18)}
.ctam:hover{transform:translateY(-2px)}
.ctas{background:transparent;color:#fff;padding:.9rem 1.75rem;border-radius:var(--rs);font-weight:700;border:2px solid rgba(255,255,255,.35);transition:var(--t)}
.ctas:hover{border-color:#fff;background:rgba(255,255,255,.1)}

/* CONTACT */
.cg{display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;align-items:start}
.cc{background:linear-gradient(135deg,var(--fire-dark),var(--fire));border-radius:var(--r);padding:1.75rem;color:#fff}
.cc h3{color:#fff;margin-bottom:1.15rem;font-size:1.3rem}
.cci{display:flex;align-items:center;gap:.8rem;margin-bottom:1rem;padding-bottom:1rem;border-bottom:1px solid rgba(255,255,255,.14)}
.cci:last-of-type{margin-bottom:0;padding-bottom:0;border-bottom:none}
.ccic{width:42px;height:42px;border-radius:10px;flex-shrink:0;background:rgba(255,255,255,.14);display:flex;align-items:center;justify-content:center;font-size:1.15rem}
.ccl{font-size:.68rem;opacity:.65;display:block;margin-bottom:.1rem;text-transform:uppercase;letter-spacing:.06em}
.ccv{font-weight:700;font-size:.95rem}
.ccv a{color:#fff}
.ccb{display:flex;gap:.55rem;margin-top:.95rem;flex-wrap:wrap}
.ccbt{flex:1;min-width:85px;text-align:center;padding:.55rem;border-radius:8px;font-weight:700;font-size:.82rem;transition:var(--t)}
.wa{background:#25d366;color:#fff}.wa:hover{background:#1ebe5d}
.vb{background:#7360f2;color:#fff}.vb:hover{background:#5c4de0}
.fc{background:#fff;border-radius:var(--r);padding:1.75rem;border:1px solid var(--gray);box-shadow:var(--shadow-sm)}
.fc h3{margin-bottom:1.1rem}
.fgg{margin-bottom:.9rem}
.fgg label{display:block;font-size:.8rem;font-weight:700;margin-bottom:.32rem;color:var(--text)}
.fgg input,.fgg textarea{width:100%;padding:.68rem .88rem;border:1.5px solid var(--gray);border-radius:var(--rs);font-size:.9rem;font-family:inherit;color:var(--text);transition:var(--t)}
.fgg input:focus,.fgg textarea:focus{outline:none;border-color:var(--fire);box-shadow:0 0 0 3px rgba(198,40,40,.1)}
.fgg textarea{resize:vertical;min-height:88px}
.bsub{width:100%;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;padding:.82rem;border-radius:var(--rs);font-weight:800;font-size:.98rem;border:none;cursor:pointer;transition:var(--t)}
.bsub:hover{filter:brightness(1.08);transform:translateY(-1px)}
.fn{font-size:.72rem;color:var(--text-light);margin-top:.5rem;text-align:center}
.fn a{color:var(--fire)}
#fss{display:none;text-align:center;padding:1.4rem}

/* FOOTER */
.sf{background:#050510;color:rgba(255,255,255,.62)}
.fm{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:2.25rem;padding:2.75rem 1.5rem 1.75rem}
.fb p{font-size:.85rem;line-height:1.7;margin:.9rem 0 1.1rem;max-width:265px}
.fcr{display:flex;align-items:center;gap:.5rem;margin-bottom:.45rem;font-size:.82rem}
.fcr a{color:rgba(255,255,255,.62);transition:var(--t)}.fcr a:hover{color:#fff}
.fh{color:#fff;font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;margin-bottom:.8rem}
.fl li{margin-bottom:.38rem}
.fl a{font-size:.82rem;color:rgba(255,255,255,.58);transition:var(--t)}.fl a:hover{color:#fff}
.fbot{border-top:1px solid rgba(255,255,255,.07);max-width:1200px;margin:0 auto;padding:1.1rem 1.5rem;display:flex;align-items:center;justify-content:space-between;font-size:.74rem;flex-wrap:wrap;gap:.45rem}
.fbotl{display:flex;gap:1rem;flex-wrap:wrap}
.fbotl a{color:rgba(255,255,255,.38);transition:var(--t)}.fbotl a:hover{color:rgba(255,255,255,.8)}
.flogo{color:#fff;font-size:1rem;font-weight:900}

/* FLOATING */
.fwa{position:fixed;bottom:5.25rem;right:1.25rem;z-index:900;width:50px;height:50px;border-radius:50%;background:#25d366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.4rem;border:3px solid #fff;box-shadow:0 4px 16px rgba(37,211,102,.45);transition:var(--t)}
.fwa:hover{transform:scale(1.1)}
.fph{position:fixed;bottom:1.25rem;right:1.25rem;z-index:900;display:flex;align-items:center;gap:.5rem;background:linear-gradient(135deg,var(--fire),var(--amber));color:#fff;padding:.62rem 1.05rem;border-radius:30px;font-weight:800;font-size:.88rem;border:3px solid #fff;box-shadow:0 4px 20px rgba(198,40,40,.5);transition:var(--t)}
.fph:hover{filter:brightness(1.1);transform:translateY(-2px)}
@keyframes fp{0%,100%{box-shadow:0 4px 20px rgba(198,40,40,.5)}50%{box-shadow:0 4px 32px rgba(198,40,40,.8),0 0 0 7px rgba(198,40,40,.12)}}
.fph{animation:fp 2.5s infinite}

@media(max-width:960px){.hg{grid-template-columns:1fr}.hcard{display:none}.cg{grid-template-columns:1fr}.fm{grid-template-columns:1fr 1fr}}
@media(max-width:768px){.nav{display:none;position:absolute;top:100%;left:0;right:0;background:var(--dark);flex-direction:column;padding:.9rem;gap:.18rem;box-shadow:0 8px 32px rgba(0,0,0,.4)}#nc:checked~.hi .nav{display:flex}.nt{display:flex}.si{grid-template-columns:repeat(2,1fr)}.pg::before{display:none}.fm{grid-template-columns:1fr}}
@media(max-width:480px){.hero{padding:2.25rem 1rem 2rem}.sec{padding:2.5rem 1rem}.si{grid-template-columns:repeat(2,1fr);gap:.45rem}.sn{font-size:1.55rem}}
</style>
</head>
<body>

<!-- SÜRGŐSSÉGI SÁV -->
<div class="ab">🔥 Bojler hiba Budapest <?= $k['roman'] ?>. kerület? Hívjon most: <a href="<?= $phone_link ?>"><?= $phone ?></a> – 0-24, hétvégén is</div>

<!-- FEJLÉC -->
<header class="sh">
  <input type="checkbox" id="nc">
  <div class="hi">
    <div class="logo">
      <a href="/"><div class="lm">🔥</div><div>Provi Domus Kft.<span class="ls">Bojler Szerelő Budapest</span></div></a>
    </div>
    <nav class="nav" aria-label="Főnavigáció">
      <a href="/">Főoldal</a>
      <a href="/bojler-javitas-budapest/">Javítás</a>
      <a href="/bojler-csere-budapest/">Csere</a>
      <a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="/ariston-bojler-javitas-budapest/">Ariston</a>
      <a href="/hajdu-bojler-csere-budapest/">Hajdú</a>
      <a href="/blog/">Blog</a>
      <a href="/ajanlatkeres/">Árajánlat</a>
      <a href="/kapcsolat/">Kapcsolat</a>
      <a href="/bojler-szerelo-<?= $kid ?>-kerulet/" class="active"><?= $k['roman'] ?>. kerület</a>
    </nav>
    <div class="hcta">
      <a href="<?= $phone_link ?>" class="bth">📞 <?= $phone ?><small>0-24 · Azonnal</small></a>
      <label for="nc" class="nt" aria-label="Menü"><span></span><span></span><span></span></label>
    </div>
  </div>
  <!-- BREADCRUMB -->
  <div class="bc" style="background:rgba(0,0,0,.2)">
    <div class="bci">
      <a href="/">Főoldal</a><span>›</span>
      <a href="/">Budapest kerületek</a><span>›</span>
      <span style="color:rgba(255,255,255,.85)"><?= $k['nev'] ?></span>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hw">
    <div class="hg">
      <div>
        <div class="hbadge">🚨 Bojler szerelő <?= $k['nev'] ?></div>
        <h1><?= $k['hero_h1'] ?></h1>
        <p class="hd"><?= $k['hero_sub'] ?></p>
        <div class="hch">
          <span class="hci">✅ 2011 óta megbízható</span>
          <span class="hci">⚡ 1–2 óra kiszállás</span>
          <span class="hci">🔒 Törvényes garancia</span>
          <span class="hci">📋 Számlás munka</span>
          <span class="hci">🌙 0-24 éjjel-nappal</span>
          <span class="hci">🏷️ Ariston &amp; Hajdú</span>
        </div>
        <div class="hb">
          <a href="<?= $phone_link ?>" class="bpc">📞 Hívjon most: <?= $phone ?></a>
          <a href="<?= $wa_link ?>" class="bws" target="_blank" rel="noopener">💬 WhatsApp</a>
        </div>
        <div class="hs">
          <span class="sig">🏆 4.9★ – 143 Google vélemény</span>
          <span class="sig">📍 <?= $k['nev'] ?> – <?= $k['reszek'] ?></span>
        </div>
      </div>
      <div>
        <div class="hcard">
          <div class="hu">
            <span class="ul">🚨 Sürgős kiszállás – <?= $k['roman'] ?>. ker.</span>
            <a href="<?= $phone_link ?>" class="up"><?= $phone ?></a>
            <span class="us">0–24 · Hétfő–Vasárnap</span>
          </div>
          <a href="<?= $phone_link ?>" class="bcr">📞 Hívás most</a>
          <a href="<?= $wa_link ?>" class="bwg" target="_blank" rel="noopener">💬 WhatsApp üzenet</a>
          <div class="hp">
            <p>Mikor hívjon?</p>
            <ul>
              <li>🔴 Nem melegít a bojler</li>
              <li>🔴 Leveri a biztosítékot</li>
              <li>🔴 Csöpög, szivárog</li>
              <li>🔴 Rozsdás víz folyik</li>
              <li>🟡 Vízkőtelenítés esedékes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="sb">
  <div class="si">
    <div class="st"><span class="sn">2011</span><div class="sl">óta működünk</div></div>
    <div class="st"><span class="sn">1–2h</span><div class="sl">kiszállás <?= $k['roman'] ?>. ker.</div></div>
    <div class="st"><span class="sn">23</span><div class="sl">Budapest kerület</div></div>
    <div class="st"><span class="sn">4.9★</span><div class="sl">Google értékelés</div></div>
  </div>
</div>

<!-- AI SNIPPET + HELYI PROBLÉMA -->
<section class="sec seca">
  <div class="con">
    <div class="aibox">
      <div class="ail">🤖 AI & Google kiemelt snippet – <?= $k['nev'] ?></div>
      <h3>Bojler szerelő Budapest <?= $k['roman'] ?>. kerület – <?= $k['reszek'] ?></h3>
      <p><?= $k['ai_text'] ?></p>
      <p><?= $k['jellemzo'] ?></p>
    </div>

    <!-- HELYI KERÜLETI PROBLÉMA -->
    <div style="background:#fff;border-radius:var(--r);border:1px solid var(--gray);border-left:4px solid var(--fire);padding:1.5rem;margin-bottom:2.25rem">
      <h3 style="margin-bottom:.6rem">⚠️ <?= $k['nev'] ?> sajátosságai – amit tudni kell</h3>
      <p><?= $k['problema'] ?></p>
    </div>

    <!-- SZOLGÁLTATÁSOK -->
    <span class="tag tf">Szolgáltatások <?= $k['nev'] ?></span>
    <h2 class="stit">Bojler Szerelés <?= $k['nev'] ?>-ban – Minden Szolgáltatás</h2>
    <p class="ssub">Teljes körű villanybojler szerviz <?= $k['reszek'] ?> területén – javítástól cseréig.</p>
    <div class="sg">
      <div class="sc">
        <div class="sci">🔧</div>
        <div class="scp">10.000 – 28.000 Ft</div>
        <h3>Bojler Javítás <?= $k['nev'] ?></h3>
        <p>Nem melegít, leveri a biztosítékot, csöpög? <?= $k['nev'] ?>-ban 1-2 órán belül megérkezünk.</p>
        <ul class="scl">
          <li>Fűtőszál csere (leggyakoribb hiba)</li>
          <li>Termosztát csere és beállítás</li>
          <li>Biztonsági szelep csere</li>
          <li>Elektromos hiba diagnosztika</li>
        </ul>
        <a href="/bojler-javitas-budapest/" class="sclink">Bojler javítás részletei →</a>
      </div>
      <div class="sc">
        <div class="sci">🔄</div>
        <div class="scp">15.000 – 35.000 Ft</div>
        <h3>Bojler Csere <?= $k['nev'] ?></h3>
        <p>Régi bojler leszedése, elszállítása, új bojler felszerelése <?= $k['reszek'] ?> területén.</p>
        <ul class="scl">
          <li>Régi bojler eltávolítása, elszállítása</li>
          <li>Új bojler felszerelése, bekötése</li>
          <li>Tömörségi próba, beüzemelés</li>
          <li>Ariston, Hajdú, Bosch választható</li>
        </ul>
        <a href="/bojler-csere-budapest/" class="sclink">Bojler csere részletei →</a>
      </div>
      <div class="sc">
        <div class="sci">💧</div>
        <div class="scp">12.000 – 20.000 Ft</div>
        <h3>Vízkőtelenítés <?= $k['nev'] ?></h3>
        <p>Éves karbantartás: anódrúd csere, biztonsági szelep, vízkőréteg eltávolítás.</p>
        <ul class="scl">
          <li>Anódrúd ellenőrzés és csere</li>
          <li>Biztonsági szelep tesztelés</li>
          <li>Belső vízkőréteg megszüntetése</li>
          <li>Élettartam meghosszabbítás 3-5 évvel</li>
        </ul>
        <a href="/bojler-vizkotelenites-budapest/" class="sclink">Vízkőtelenítés részletei →</a>
      </div>
    </div>

    <!-- BELSŐ LINK JAVASLATOK -->
    <div style="margin-top:2rem">
      <h3 style="margin-bottom:.75rem">🔗 Kapcsolódó szolgáltatások és oldalak</h3>
      <div class="ilg">
        <a href="/bojler-javitas-budapest/" class="il">Bojler javítás Budapest</a>
        <a href="/bojler-csere-budapest/" class="il">Bojler csere Budapest</a>
        <a href="/bojler-vizkotelenites-budapest/" class="il">Vízkőtelenítés</a>
        <a href="/ariston-bojler-javitas-budapest/" class="il">Ariston szerviz</a>
        <a href="/ariston-lydos-bojler-bemutato/" class="il">Ariston Lydos</a>
        <a href="/ariston-velis-bojler-bemutato/" class="il">Ariston Velis</a>
        <a href="/ariston-pro1-eco-bojler-bemutato/" class="il">Ariston Pro1 Eco</a>
        <a href="/hajdu-bojler-csere-budapest/" class="il">Hajdú bojler csere</a>
        <a href="/hajdu-aquastic-bojler-bemutato/" class="il">Hajdú Aquastic</a>
        <a href="/hajdu-z-smart-bojler-bemutato/" class="il">Hajdú Z Smart</a>
        <a href="/ajanlatkeres/" class="il">Árajánlat kérés</a>
        <a href="/blog/" class="il">Blog – bojler tippek</a>
      </div>
    </div>
  </div>
</section>

<!-- ÁRAK -->
<section class="sec" id="arak">
  <div class="con">
    <span class="tag tf">Árak <?= $k['nev'] ?> 2025</span>
    <h2 class="stit">Bojler Javítás Árak <?= $k['nev'] ?> – 2025</h2>
    <p class="ssub">Tájékoztató munkadíjak. Telefonon pontosabb árajánlat: <strong><?= $phone ?></strong></p>
    <div style="overflow-x:auto;border-radius:var(--r);box-shadow:var(--shadow-sm)">
      <table class="pt">
        <thead><tr><th>Elvégzett munka</th><th>Tájékoztató ár</th><th>Megjegyzés</th></tr></thead>
        <tbody>
          <tr><td>Fűtőszál csere</td><td class="prc">12.000–20.000 Ft</td><td class="ntc">+ alkatrész</td></tr>
          <tr><td>Termosztát csere</td><td class="prc">10.000–18.000 Ft</td><td class="ntc">+ alkatrész</td></tr>
          <tr><td>Biztonsági szelep csere</td><td class="prc">8.000–15.000 Ft</td><td class="ntc">+ alkatrész</td></tr>
          <tr><td>Bojler csere (munkadíj)</td><td class="prc">15.000–35.000 Ft</td><td class="ntc">+ bojler ára</td></tr>
          <tr><td>Vízkőtelenítés + anódrúd</td><td class="prc">12.000–20.000 Ft</td><td class="ntc">+ alkatrész</td></tr>
          <tr><td><a href="/ariston-bojler-javitas-budapest/">Ariston javítás</a></td><td class="prc">10.000–28.000 Ft</td><td class="ntc">típustól függ</td></tr>
          <tr><td><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></td><td class="prc">15.000–35.000 Ft</td><td class="ntc">+ bojler ára</td></tr>
        </tbody>
      </table>
    </div>
    <div class="pnote">⚠️ Hétvégi és éjszakai kiszállás sürgősségi díjjal. Pontos ajánlat: <a href="<?= $phone_link ?>" style="color:var(--fire);font-weight:700"><?= $phone ?></a> vagy <a href="/ajanlatkeres/" style="color:var(--fire);font-weight:700">online árajánlat →</a></div>
  </div>
</section>

<!-- MIÉRT MINKET (sötét) -->
<section class="sec secd">
  <div class="con">
    <span class="tag td">Miért minket?</span>
    <h2 class="stit-w">Miért Hívnak Minket <?= $k['nev'] ?>-ban?</h2>
    <p class="ssub-w">Nem ígérünk olyat amit nem tudunk tartani – ezeket igen.</p>
    <div class="rg">
      <div class="rc"><div class="rn">01</div><h4>⏱ 1–2 Óra Kiszállás</h4><p><?= $k['nev'] ?> területén belül – sürgős esetben 1 órán belül megérkezünk.</p></div>
      <div class="rc"><div class="rn">02</div><h4>🏷️ Ariston &amp; Hajdú Szakszerviz</h4><p>Raktáron tartott alkatrészek – nem kell várni megrendelésre.</p></div>
      <div class="rc"><div class="rn">03</div><h4>💰 Ár Telefonon, Nem Helyszínen</h4><p>Elmondja a tüneteket – megmondjuk a várható árat. Nincs meglepetés.</p></div>
      <div class="rc"><div class="rn">04</div><h4>🔒 Törvényes Jótállás</h4><p>Minden munkára Ptk. szerinti garancia, számlával, írásban.</p></div>
      <div class="rc"><div class="rn">05</div><h4>📞 0-24 Elérhetőség</h4><p>Éjjel, hétvégén, ünnepnapon is – <?= $k['nev'] ?>-ban sem teszünk kivételt.</p></div>
      <div class="rc"><div class="rn">06</div><h4>🧹 Takarosan Dolgozunk</h4><p>Elvégezzük a munkát és takarítottan hagyjuk el <?= $k['nev'] ?> bármely lakását.</p></div>
    </div>
  </div>
</section>

<!-- FOLYAMAT -->
<section class="sec seca">
  <div class="con">
    <span class="tag tf">Hogyan dolgozunk</span>
    <h2 class="stit">4 Lépés a Meleg Vízhez <?= $k['nev'] ?>-ban</h2>
    <p class="ssub">Átlátható folyamat – meglepetés nélkül.</p>
    <div class="pg">
      <div class="ps"><div class="pn">1</div><h4>Hívás</h4><p>Elmondja a tüneteket, mi megmondjuk a várható árat és az érkezési időt.</p></div>
      <div class="ps"><div class="pn">2</div><h4>Kiszállás</h4><p>1–2 óra – <?= $k['nev'] ?> bármely pontjára, alkatrészkészlettel.</p></div>
      <div class="ps"><div class="pn">3</div><h4>Diagnózis</h4><p>Helyszíni vizsgálat, pontos ár – az Ön jóváhagyása után kezdünk.</p></div>
      <div class="ps"><div class="pn">4</div><h4>Javítás + Számla</h4><p>Elvégezzük a munkát, kiállítjuk a számlát, garanciát adunk írásban.</p></div>
    </div>
  </div>
</section>

<!-- VÉLEMÉNY -->
<section class="sec">
  <div class="con">
    <span class="tag tf">Ügyfélvélemény</span>
    <h2 class="stit">Mit Mondanak <?= $k['nev'] ?> Lakói?</h2>
    <div class="rvg">
      <div class="rvc">
        <div class="rvs">★★★★★</div>
        <p class="rvt">"<?= $k['testimonial_szoveg'] ?>"</p>
        <div class="rva">
          <div class="rvav"><?= strtoupper(substr($k['testimonial_nev'],0,2)) ?></div>
          <div><div class="rvn"><?= $k['testimonial_nev'] ?></div><div class="rvl"><?= $k['testimonial_ker'] ?></div></div>
        </div>
      </div>
      <div class="rvc">
        <div class="rvs">★★★★★</div>
        <p class="rvt">"Reggel fél 8-kor hívtam, hogy nem melegít a bojler. 10-re kiszálltak <?= $k['nev'] ?>-ba, fűtőszál csere, 2 óra alatt meleg víz. Korrekt ár, garancia papírral."</p>
        <div class="rva">
          <div class="rvav">GP</div>
          <div><div class="rvn">Google értékelés</div><div class="rvl"><?= $k['nev'] ?> – 5 csillag</div></div>
        </div>
      </div>
      <div class="rvc">
        <div class="rvs">★★★★★</div>
        <p class="rvt">"Telefonon már megmondták mi lehet a gond és kb. mennyibe kerül. <?= $k['nev'] ?>-ba pontosan kiszálltak, precízen dolgoztak. Ajánlom mindenkinek."</p>
        <div class="rva">
          <div class="rvav">GR</div>
          <div><div class="rvn">Google értékelés</div><div class="rvl"><?= $k['nev'] ?> – 5 csillag</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="sec seca">
  <div class="con">
    <span class="tag tf">GYIK – <?= $k['nev'] ?></span>
    <h2 class="stit">Gyakran Ismételt Kérdések – Bojler Szerelés <?= $k['nev'] ?></h2>
    <div class="fw">
      <div class="fi">
        <button class="fq" onclick="tF(this)" aria-expanded="false"><?= $k['faq_q'] ?><span class="fqi">+</span></button>
        <div class="fa"><?= $k['faq_a'] ?></div>
      </div>
      <div class="fi">
        <button class="fq" onclick="tF(this)" aria-expanded="false">Mennyibe kerül a bojler javítás <?= $k['nev'] ?>-ban 2025-ben?<span class="fqi">+</span></button>
        <div class="fa">A bojler javítás munkadíja <?= $k['nev'] ?>-ban <strong>10.000–28.000 Ft</strong> között mozog 2025-ben, az alkatrész külön értendő. Fűtőszál csere: 12.000–20.000 Ft. Termosztát csere: 10.000–18.000 Ft. Telefonon pontosabb árajánlatot adunk: <?= $phone ?>.</div>
      </div>
      <div class="fi">
        <button class="fq" onclick="tF(this)" aria-expanded="false">Mennyi idő alatt ér ki bojler szerelő <?= $k['nev'] ?>-ba?<span class="fqi">+</span></button>
        <div class="fa"><?= $k['nev'] ?> területére – <?= $k['reszek'] ?> – <strong>1–2 órán belül</strong> kiszállunk, 0-24-ben, hétvégén és ünnepnapokon is. Sürgős esetben az 1 óra garantált.</div>
      </div>
      <div class="fi">
        <button class="fq" onclick="tF(this)" aria-expanded="false">Miért nem melegít a villanybojler <?= $k['nev'] ?>-ban?<span class="fqi">+</span></button>
        <div class="fa">A nem melegítő bojler leggyakoribb okai: <strong>elégett fűtőszál</strong>, elromlott termosztát, vagy leoldott biztonsági hőkapcsoló. <?= $k['nev'] ?>-ban ezeket a hibákat kiszállás nélkül is meg tudjuk becsülni – írja le a tünetet és felhívjuk.</div>
      </div>
      <div class="fi">
        <button class="fq" onclick="tF(this)" aria-expanded="false">Van garancia a bojler javításra <?= $k['nev'] ?>-ban?<span class="fqi">+</span></button>
        <div class="fa">Igen, minden <?= $k['nev'] ?>-ban elvégzett munkánkra <strong>Ptk. szerinti jótállást</strong> biztosítunk, számlás teljesítéssel, írásban. A beépített alkatrészekre gyártói garancia vonatkozik.</div>
      </div>
    </div>
  </div>
</section>

<!-- SZOMSZÉD KERÜLETEK -->
<section class="sec secd">
  <div class="con">
    <span class="tag td">Budapest kerületek</span>
    <h2 class="stit-w">Szomszéd Kerületek – Szintén Kiszállunk</h2>
    <p class="ssub-w"><?= $k['nev'] ?> mellett az összes szomszéd kerületbe is 1-2 óra alatt kiszállunk.</p>
    <div class="nkg">
      <?php foreach($k['szomszed'] as $s): ?>
      <a href="/bojler-szerelo-<?= $s ?>-kerulet/" class="nkl">Budapest <?= $roman_szam[$s] ?>. kerület →</a>
      <?php endforeach; ?>
      <a href="/" class="nkl" style="color:var(--amber);border-color:rgba(245,127,23,.3)">Összes kerület →</a>
    </div>
    <h3 style="color:#fff;margin-top:2rem;margin-bottom:.85rem">Budapest összes kerülete</h3>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(115px,1fr));gap:.45rem">
      <?php for($i=1;$i<=23;$i++): ?>
      <a href="/bojler-szerelo-<?= $i ?>-kerulet/" style="display:block;background:<?= $i==$kid?'var(--fire)':'rgba(255,255,255,.05)' ?>;border:1px solid <?= $i==$kid?'var(--fire)':'rgba(255,255,255,.1)' ?>;border-radius:var(--rs);padding:.5rem .65rem;font-size:.78rem;font-weight:600;color:<?= $i==$kid?'#fff':'rgba(255,255,255,.75)' ?>;text-align:center;transition:var(--t)" onmouseover="this.style.background='var(--fire)';this.style.color='#fff'" onmouseout="this.style.background='<?= $i==$kid?'var(--fire)':'rgba(255,255,255,.05)' ?>'; this.style.color='<?= $i==$kid?'#fff':'rgba(255,255,255,.75)' ?>'">Budapest <?= $roman_szam[$i] ?>. ker.</a>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="ctab">
  <div class="con">
    <h2>Bojler Hiba <?= $k['nev'] ?>-ban? Hívjon Most!</h2>
    <p>0-24, hétvégén is – 1–2 óra kiszállás <?= $k['reszek'] ?> területére. Ingyenes helyszíni diagnózis.</p>
    <div class="ctabs">
      <a href="<?= $phone_link ?>" class="ctam">📞 <?= $phone ?></a>
      <a href="<?= $wa_link ?>" class="ctas" target="_blank" rel="noopener">💬 WhatsApp</a>
      <a href="/ajanlatkeres/" class="ctas">📋 Online árajánlat</a>
    </div>
  </div>
</div>

<!-- KAPCSOLAT -->
<section class="sec" id="kapcsolat">
  <div class="con">
    <span class="tag tf">Kapcsolat</span>
    <h2 class="stit">Visszahívást Kér <?= $k['nev'] ?>-ból?</h2>
    <p class="ssub">Hagyja meg számát – visszahívjuk, általában 15 percen belül.</p>
    <div class="cg">
      <div class="cc">
        <h3>Elérhetőségeink</h3>
        <div class="cci"><div class="ccic">📞</div><div><span class="ccl">Telefon / WhatsApp / Viber</span><div class="ccv"><a href="<?= $phone_link ?>"><?= $phone ?></a></div></div></div>
        <div class="cci"><div class="ccic">🕐</div><div><span class="ccl">Nyitvatartás</span><div class="ccv">0–24 · Hétfő–Vasárnap</div></div></div>
        <div class="cci"><div class="ccic">✉️</div><div><span class="ccl">E-mail</span><div class="ccv"><a href="mailto:<?= $email ?>"><?= $email ?></a></div></div></div>
        <div class="cci"><div class="ccic">📍</div><div><span class="ccl">Kiszállás</span><div class="ccv"><?= $k['nev'] ?> – <?= $k['reszek'] ?></div></div></div>
        <div class="ccb">
          <a href="<?= $wa_link ?>" target="_blank" rel="noopener" class="ccbt wa">💬 WhatsApp</a>
          <a href="<?= $viber_link ?>" class="ccbt vb">📲 Viber</a>
        </div>
      </div>
      <div class="fc">
        <h3>Visszahívás – <?= $k['nev'] ?></h3>
        <div id="fss"><div style="font-size:2.5rem">✅</div><h4 style="color:var(--green);margin:.4rem 0">Köszönjük! Hamarosan hívjük.</h4><p style="font-size:.86rem">Sürgős: <a href="<?= $phone_link ?>" style="color:var(--fire);font-weight:700"><?= $phone ?></a></p></div>
        <form id="cbf" onsubmit="sCb(event)">
          <input type="text" name="w" style="display:none" tabindex="-1" autocomplete="off">
          <input type="hidden" name="kerulet" value="<?= $kid ?>">
          <div class="fgg"><label>Neve *</label><input type="text" name="name" placeholder="pl. Kovács János" required></div>
          <div class="fgg"><label>Telefonszám *</label><input type="tel" name="phone" placeholder="pl. 06 30 123 4567" required></div>
          <div class="fgg"><label>Bojler tünete (opcionális)</label><textarea name="message" placeholder="pl. Nem melegít, reggel óta nincs meleg víz..."></textarea></div>
          <button type="submit" class="bsub">📨 Visszahívás kérése – <?= $k['roman'] ?>. kerület</button>
          <p class="fn">* Kötelező. <a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a></p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="sf">
  <div class="fm">
    <div class="fb">
      <div class="flogo">🔥 Provi Domus Kft.</div>
      <p>Bojler szerelő Budapest <?= $k['nev'] ?>-ban – <?= $k['reszek'] ?>. Villanybojler javítás, csere, vízkőtelenítés 0-24, garanciával, 2011 óta.</p>
      <div class="fcr">📞 <a href="<?= $phone_link ?>"><?= $phone ?></a> &nbsp;(0–24)</div>
      <div class="fcr">✉️ <a href="mailto:<?= $email ?>"><?= $email ?></a></div>
      <div class="fcr">📍 1191 Budapest, Hamvas utca 7-9.</div>
    </div>
    <div>
      <div class="fh">Szolgáltatások</div>
      <ul class="fl">
        <li><a href="/bojler-javitas-budapest/">Bojler javítás</a></li>
        <li><a href="/bojler-csere-budapest/">Bojler csere</a></li>
        <li><a href="/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a></li>
        <li><a href="/ariston-bojler-javitas-budapest/">Ariston szerviz</a></li>
        <li><a href="/ariston-lydos-bojler-bemutato/">Ariston Lydos</a></li>
        <li><a href="/ariston-velis-bojler-bemutato/">Ariston Velis</a></li>
        <li><a href="/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a></li>
        <li><a href="/hajdu-bojler-csere-budapest/">Hajdú csere</a></li>
        <li><a href="/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a></li>
        <li><a href="/hajdu-z-smart-bojler-bemutato/">Hajdú Z Smart</a></li>
        <li><a href="/hajdu-ideallo-bojler-bemutato/">Hajdú Ideallo</a></li>
      </ul>
    </div>
    <div>
      <div class="fh">Budapest (I–XII)</div>
      <ul class="fl">
        <?php for($i=1;$i<=12;$i++): ?>
        <li><a href="/bojler-szerelo-<?= $i ?>-kerulet/" <?= $i==$kid?'style="color:var(--amber)"':'' ?>>Budapest <?= $roman_szam[$i] ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
    </div>
    <div>
      <div class="fh">Budapest (XIII–XXIII)</div>
      <ul class="fl">
        <?php for($i=13;$i<=23;$i++): ?>
        <li><a href="/bojler-szerelo-<?= $i ?>-kerulet/" <?= $i==$kid?'style="color:var(--amber)"':'' ?>>Budapest <?= $roman_szam[$i] ?>. kerület</a></li>
        <?php endfor; ?>
      </ul>
      <div class="fh" style="margin-top:1.25rem">Információk</div>
      <ul class="fl">
        <li><a href="/ajanlatkeres/">Árajánlat</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/kapcsolat/">Kapcsolat</a></li>
        <li><a href="/impresszum/">Impresszum</a></li>
        <li><a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a></li>
        <li><a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a></li>
      </ul>
    </div>
  </div>
  <div class="fbot">
    <span>© 2025 Provi Domus Kft. – Bojler Szerelő Budapest <?= $k['nev'] ?></span>
    <div class="fbotl">
      <a href="/impresszum/">Impresszum</a>
      <a href="/adatvedelmi-nyilatkozat/">Adatvédelem</a>
      <a href="/altalanos-szerzodesi-feltetelek-aszf/">ÁSZF</a>
    </div>
  </div>
</footer>

<!-- LEBEGŐ GOMBOK -->
<a href="<?= $wa_link ?>" class="fwa" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
<a href="<?= $phone_link ?>" class="fph" aria-label="Hívás">📞 <?= $phone ?></a>

<script>
function tF(b){var i=b.parentElement,o=i.classList.contains('open');document.querySelectorAll('.fi.open').forEach(function(e){e.classList.remove('open');e.querySelector('.fq').setAttribute('aria-expanded','false')});if(!o){i.classList.add('open');b.setAttribute('aria-expanded','true')}}
function sCb(e){e.preventDefault();var f=document.getElementById('cbf');if(f.querySelector('[name="w"]').value)return;fetch('/kapcsolat/form-handler.php',{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({name:f.querySelector('[name="name"]').value,phone:f.querySelector('[name="phone"]').value,message:f.querySelector('[name="message"]').value,kerulet:'<?= $kid ?>'})}).finally(function(){f.style.display='none';document.getElementById('fss').style.display='block'});}
(function(){var h=document.querySelector('.sh');window.addEventListener('scroll',function(){h.style.boxShadow=scrollY>30?'0 3px 20px rgba(0,0,0,.55)':'0 2px 16px rgba(0,0,0,.4)';},{passive:true});})();
</script>
</body>
</html>
