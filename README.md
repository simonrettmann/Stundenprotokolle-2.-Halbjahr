# Stundenprotokolle 12. Klasse 2. Halbjahr
<img alt="Foto der Gruppe" align="right" alt="Bild der Gruppe" height="200px" width="135px" src="https://user-images.githubusercontent.com/88385654/144517233-30a5e82f-7035-4ed2-aa45-f1700086d5cc.jpg">
<p>
Stormarnschule 2021      
<img align="left" heigth="120px" width="120px" alt="Logo der Stormarnschule" src="https://user-images.githubusercontent.com/88385654/143951761-5bef3ad8-f6f8-4034-8314-8af063be444e.jpg">
    
Informatik, Bl

David Borgmann, Simon Rettmann
	
&#10132;<a href="https://github.com/simonrettmann/Projektseite"> Projektseite</a> <br>
&#10132;<a href="https://www.youtube.com/channel/UCEljeGxqUxyXQlMq9Q-U8_w">YouTube Kanal - Novum hotplate</a>	
</p>

## Stundenübersicht

<table align="center">
     
<tr>
    <td> <a href="#Stundevom14.12.2021"> Stunde vom 14.12.2021 </a></td>
    <td> <a href="#Stundevom15.12.2021"> Stunde vom 15.12.2021 </a></td>
    <td> <a href="#Stundevom21.12.2021"> Stunde vom 21.12.2021 </a></td>
    <td> <a href="#Stundevom22.12.2021"> Stunde vom 22.12.2021 </a></td>
</tr>
<tr> 
	 <td> <a href="#Stundevom11.1.2022"> Stunde vom 11.1.2022 </a></td>
</tr>
	
 </table>
<br>

## <p> <h2> <a id="Stundevom14.12.2021"> Stunde vom 14.12.2021 </a> </h2>
In dieser Stunde begann die zweite Projektfindungsphase. Der Abgabetermin wurde auf den 19.4.2022 festgelegt. Um ein Projekt zu finden, wurde erneut eine MindMap erstellt. Diskutierte Ideen war die Weiterführung des arduinogesteuerten Gaskochers, da die Gruppe während der letzten Phase von diesem Projekt begeistert war und eine Kamera, die auf einer Schiene befestigt ist und Kamerafahrten, sogar durch eine Objekterfassung gesteuerte Kamerafahrten, aufnehmen kann. 
<a href="https://youtu.be/h5faZXlyLzY"> Link von YouTube zu einer Videoinspiraton zum Kameraprojekt</a>

<details>
	<summary>Bild der MindMap</summary>
<img alt="Bild der MindMap" src="https://user-images.githubusercontent.com/88385654/146187027-ce64e107-2326-4b0b-a0ec-b7d27955739d.jpeg">
</details>

Nach längerer Diskussion und Ausarbeitung der beiden Ideen mit Herrn Buhl, entschied sich die Gruppe den arduinogesteuerten Gaskocher weiterzuführen. Die vorherrschende Meinung war, dass es noch genug zu verbessern gibt und diese weitere Entwicklung eventuell sogar die Teilnahme an Wettbewerben wie Jugend forscht ermöglicht. 
	
## <p> <h2> <a id="Stundevom15.12.2021"> Stunde vom 15.12.2021 </a> </h2>

Von zu Hause begann bereits der Denkprozess, wie die Ideen konkret umgesetzt werden könnten. Primärer Fokus war die Kommunikation einer Website mit dem Arduino. Dazu wurde ein neuer Mikrocontroller bestellt, der WLAN-fähig ist und so von der ganzen Welt gesteuert werden kann. Dazu wurde der ESP8266 bestellt. <a href="https://www.amazon.de/dp/B06Y1ZPNMS/ref=cm_sw_em_r_mt_dp_8W3S15S43VPSKZEXFZCC?_encoding=UTF8&psc=1"> Kauflink zum Produkt von Amazon </a>
Weiter wurde sich auch mit der Kompatibilität dieses Chips mit verschiedenen Website und Datentypen auseinandergesetzt. 
Für die Hardware nahm sich die Gruppe vor die nahenden Ferien zu nutzen und die Hardware dort fertigzustellen, damit die Stunden im neuen Jahr für die softwaretechnische Umsetzung genutzt werden können. 
Für die nächste Zeit setzte sich die Gruppe folgende Ziele:
<ul>
	<li>Einarbeitung und anlegen einer sql-Datenbank</li>
	<li>Suche eines Servers auf der sowohl die Website als auch die Datenbank laufen können </li>
	<li>Einarbeitung in PHP, sodass eine datenverarbeitende Website erstellt werden kann und diese gewonnen Daten in einer Datenbank gespeichert werden können 
	</li>
</ul>

## <p> <h2> <a id="Stundevom21.12.2021"> Stunde vom 21.12.2021 </a> </h2>

In dieser Stunde war Simon Rettmann nicht anwesend, da er krank war. Diese Stunde wurde von Herrn Buhl für die Rückgabe der bewerteten Projekte des ersten Halbjahres genutzt. Den Rest der Stunde wurde "secret Hitler" gespielt. An dem Projekt wurde nicht weitergearbeitet. 

## <p> <h2> <a id="Stundevom22.12.2021"> Stunde vom 22.12.2021 </a> </h2>

Aufgrund der Ferien musste diese Stunde leider ausfallen. 

## <p> <h2> <a id="Stundevom11.1.2022"> Stunde vom 11.1.2022 </a> </h2>
Die erste Stunde nach den Ferien wurde von der Gruppe genutzt die Ergebnisse der Einarbeitungsphase zu besprechen. Das bestellte Bauteil kam über die Ferien an und erste Ansteuerungsversuche wurden getätigt. <br>
Als erster Schritt wurde die I2C-Kommunikation angegangen. Zwar wurde diese Technologie bereits in der ersten Projektphase verwendet, jedoch verwendeten wir zur I2C-Kommunikation mit dem LC-Display eine simple Libary. In der zweiten Projektphase soll der I2C-Datenbus dazu benutzt werden, Daten zwischen dem Wlan-Netzwerk fähigen NodeMCU-Mikrokontroller (Name des Moduls, in welches das ESP8862 eingearbeitet ist) und dem Arduino auszutauschen. Da wir bisher noch keine geeignete Libary gefunden haben, beschäftigten wir uns zunächst mit der hardwarenahen Programmierung. Das NodeMCU soll dabei die Rolle als Master-Device und der Arduino als Slave-Device übernehmen. Problematisch dabei ist, dass am Ende hauptsächlich Integer- und Floatvariablen übertragen werden sollen. Standartmäßig können aber nur Bytes mit I2C übertragen werden. Es ist also nötig die Daten in Bytes zu trennen, die Bytes zu übertragen und anschließend die Daten beim Empfänger wieder zusammenzusetzen. Die einfache Übertragung von Bytes zwischen den beiden Geräten funktionierte nach kurzem Testen ohne große Probleme. Schwierig gestalltete sich jedoch die Zusammensetzung der Bytes zu den Variablen, sobalt mehrere verschiedene Variablen involviert waren. <br>
Nachdem sich die Gruppenmitglieder erfolglos über eine Lösung des Problems beraten hatten, folgete gegen Ende der Stunde eine Recherche über eine geeignete Libary zur Übertragung der gewünschten Variablen.

