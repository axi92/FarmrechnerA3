<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
    $filetime = filemtime("index.php");
    if($filetime == false)
    {
        $sfiletime = "Nicht verfuegbar!";
    }
    else
    {
        $sfiletime = date("d.m.Y - H:i", $filetime);
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><head>
    <title>Zero-One Farmrechner</title>
    <meta name="description" content="JS Calculator">
    <meta name="author" content="axi92">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script language="javascript"><!--
		var produkte = [ 
			['Kupfererz','Kupfer',1540,4,3],
			['Eisenerz','Eisen',3010,5,3],
			['Stein','Zement',1785,6,5],
			['Salz','Raffiniertes Salz',1470,3,1],
			['Trauben','Wein',1470,3,2],
			['Trauben','Moonshine',2340,3,2],
			['Sand','Glas',1715,3,1],
			['Öl','Rafiniertes Öl',2240,7,5],
			['Erdgas','Rafiniertes Erdgas',3900,6,4],
			['Diamant','Geschliffener Diamant',3780,4,2],
			['Baumwolle','Kleidung',2030,4,2],
			['Helium','Helium',22176,100,100],
			['Cannabis','Marijuana',3430,4,3],
			['Heroin','Reines Heroin',3360,6,4],
			['Kokain','Reines Kokain',5320,6,4],
			['Dunkle Materie','Dunkle Materie',38600,100,100],
			['Brief','Brief',490,3,3],
			['Paket','Paket',6160,25,25],
			['Schildkröte','Schildkröte',8500,6,6],
			['Tunfisch','Tunfisch',4650,6,6],
			['Ornate','Ornate',378,2,2],
			['Salema','Salema',525,2,2],
			['Makrele','Makrele',616,4,4],
			['Mullet','Mullet',735,4,4],
			['Katzenhai','Katzenhai',875,6,6],
			['Apfel','Apfel',50,1,1],
			['Pfirsich','Pfirsich',55,1,1]
			];
		// vehicle['Name',Kaufpreis,Mietpreis,Ladekapazität,Ausparkkosten]
		var vehicle = [
			['Kein Fahrzeug',0,0,0],
			['Limousine',31200,20800,52],
			['Geländewagen',46800,31200,108],
			['Truck',126750,84500,160],
			['SUV',175500,117000,80],
			['Truck Boxer',165750,110500,208],
			['Tanklaster',165750,110500,208],
			['Limousine (Sport)',234000,156000,52],
			['Zamak-Transporter',351000,0,320],
			['Zamak-Transporter (abgedeckt)',468000,312000,440],
			['Zamak Tanken',468000,312000,440],
			['Tempest Transporter',975000,0,560],
			['Tempest-Transporter (abgedeckt)',7800000,0,2080],
			['Tempest Tanken',975000,0,560],
			['Tempest Gerät',16500000,0,2400],
			['Hemtt-Transporter',1677000,0,720],
			['Hemtt-Transporter (abgedeckt)',2145000,0,880],
			['Hemtt Treibstoff',2145000,0,880],
			['Hemtt Transport',3900000,0,1040],
			['Mh-9 Hummingbird',986700,0,35],
			['PO-30 Orca (Schwarz)',3705000,0,200],
			['Ch-49 Mohawk',6727500,0,320],
			['Ch-67 Huron (Schwarz)',12577500,0,400],
			['Taru',13650000,9100000,400],
			['A-143 Buzzard (Flugabwehr)',7800000,0,1800],
			['A-164 Wipeout (Luftunterstützung)',11700000,0,2600],
			['To-199 Neophron (Luftunterstützung)',15600000,0,3900],
			['Rettungsboot',60000,40000,224],
			['Rettungsboot',135000,90000,352],
			['Motorboot',360000,240000,520]
			];
		function splitter(number) {
			number = '' + number;
			if (number.length > 3) {
				var mod = number.length % 3;
				var output = (mod > 0 ? (number.substring(0,mod)) : '');
				for (i=0 ; i < Math.floor(number.length / 3); i++) {
					if ((mod == 0) && (i == 0))
					output += number.substring(mod+ 3 * i, mod + 3 * i + 3);
					else
					output+= '.' + number.substring(mod + 3 * i, mod + 3 * i + 3);
				}
				return (output);
			}
			else return number;
		}
		window.onload = function() {
			dropdown = '';
			dropdown_vehicle = '';
			table1 = '';
			table2 = '';
			for (var i = 0; i < produkte.length; i++)
			{
				console.log(produkte[i][0] + '-' + i);
				dropdown = dropdown + '<option id="product' + i + '" value="' + i + '">' + produkte[i][0] + ' -> ' + produkte[i][1] + '</option>' + '\n'
				table2 = table2 + '<tr><td>' + produkte[i][0] + ' (' + produkte[i][3] + ')</td><td>' + produkte[i][1] + ' (' + produkte[i][4] + ')</td><td>' +  '</td><td>' + splitter(produkte[i][2]) + '</td></tr>'
			}
			for (var i = 0; i < vehicle.length; i++)
			{
				if(i > 0)
				{
					table1 = table1 + '<tr><td>' + vehicle[i][0] + '</td><td>' + vehicle[i][3] + '</td><td>' + splitter(vehicle[i][1]) + '</td><td>' + splitter(vehicle[i][1]/1.5) + '</td></tr>'
				}
				dropdown_vehicle = dropdown_vehicle + '<option id="vehicle' + i + '" value="' + i + '">' + vehicle[i][0] + '</option>' + '\n'
			}
			document.getElementById('dropdownliste').innerHTML = dropdown;
			document.getElementById('dropdownliste_vehicle').innerHTML = dropdown_vehicle;
			document.getElementById('table1_content').innerHTML = table1;
			document.getElementById('table2_content').innerHTML = table2;
			rechner();
		};
		function rechner() {
			//if(document.gewinnrechner.menge1.value == '') {document.gewinnrechner.menge1.value = 0}
			if(document.gewinnrechner.menge2.value == '') {document.gewinnrechner.menge2.value = 0}
            var backpack   			= parseInt(document.gewinnrechner.menge2.value);
			var produktpreis		= produkte[document.gewinnrechner.dropdownliste.value][2];
			var product_weight		= produkte[document.gewinnrechner.dropdownliste.value][3];
			var vehicle_capacity	= vehicle[document.gewinnrechner.dropdownliste_vehicle.value][3];
			
			var fit_in_veh			= parseInt(vehicle_capacity/product_weight);
			var fit_in_back			= parseInt(backpack/product_weight);
			var einheiten			= fit_in_veh + fit_in_back;
			//alert(backpack + " - " + produktpreis + " - " + vehicle_capacity + " - " + menge + " - Fit int: " + fit_in + " Gerundet: " + parseInt(fit_in));
			
            var zinsen				= document.gewinnrechner.zinsen.value;
			
            var ergebnis = einheiten*produktpreis;
			//alert (menge + " - " + produkte[produktpreis][2]);
            var abgabe       = (ergebnis/100)*zinsen;
            document.getElementById('ausgabe').innerHTML = ("Du erhältst für " + splitter(einheiten) + " Einheiten " + splitter(ergebnis) + " an Ertrag!");
            document.getElementById('sold').innerHTML = ("Sold zu zahlen: " + splitter(abgabe) + " dein Gewinn dadurch: " + splitter((ergebnis-abgabe)) );
		}
	</script>
</head>
<body>
	<h1>Produkte</h1>
	<form name="gewinnrechner"> <br>
		Ladegut:
		<select id="dropdownliste" name="liste" onchange="rechner()">
			<option id="product1" value="1">Produkte</option>
		</select>
		<br>
		<!-- <input name="menge1" value="0" size="5" maxlength="5" type="text" onkeyup="rechner()"> Einheiten Fahrzeug<br> -->
		Fahrzeug:
		<select id="dropdownliste_vehicle" name="liste_vehicle" onchange="rechner()">
			<option id="vehicle1" value="1">Fahrzeuge</option>
		</select>
		<br>		
		<input name="menge2" value="0" size="5" maxlength="5" type="text" onkeyup="rechner()"> Rucksackgröße<br>
		<input name="zinsen" size="20" maxlength="50" type="text" onkeyup="rechner()">% an Abgaben für Söldner<br>
		<span id="ausgabe" style="text-align: center;border-style:solid;border-width:0px;"></span><br>
		<span id="sold" style="text-align: center;border-style:solid;border-width:0px;"></span><br>
		<span style="text-align: center;border-style:solid;border-width:0px;">Copyright © by axi92</span><br>
		<span style="text-align: center;border-style:solid;border-width:0px;"><?php echo 'Letztes Update: - ' . $sfiletime ?></span><br>
	</form>
	<div>
		<table id="rounded-corner" summary="Vehicle List"  style="float:left;">
			<thead>
				<tr>
					<th scope="col" class="rounded-company">Fahrzeug</th>
					<th scope="col" class="rounded-q1">Ladeeinheiten</th>
					<th scope="col" class="rounded-q2">Kaufpreis</th>
					<th scope="col" class="rounded-q3">Mietpreis</th>
				</tr>
			</thead>
				<tfoot>
				<tr>
					<td colspan="3" class="rounded-foot-left"><em>Sollten die Daten Fehlerhaft sein bitte im Forum axi92 informieren!</em></td>
					<td class="rounded-foot-right">&nbsp;</td>
				</tr>
			</tfoot>
			<tbody id='table1_content'>
				<tr>
					<td>Fahrzeug1</td>
					<td>0.0</td>
					<td>0.0</td>
					<td>0.0</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div>
		<table id="rounded-corner" summary="Produkte"  style="float:left;">
			<thead>
				<tr>
					<th scope="col" class="rounded-company">Rohstoff (Gewicht)</th>
					<th scope="col" class="rounded-q1">Endprodukt (Gewicht)</th>
					<th scope="col" colspan="2" class="rounded-q2">Verkaufspreis</th>
				</tr>
			</thead>
				<tfoot>
				<tr>
					<td colspan="3" class="rounded-foot-left"><em>Sollten die Daten Fehlerhaft sein bitte im Forum axi92 informieren!</em></td>
					<td class="rounded-foot-right">&nbsp;</td>
				</tr>
			</tfoot>
			<tbody id='table2_content'>
				<tr>
					<td>Produkt1</td>
					<td>0.0</td>
					<td>0.0</td>
				</tr>
			</tbody>
		</table>
	</div>

	<style>
		body {
		  background: #f5f5f5;
		  margin: 0px;
		  padding: 0px 0px 0px 0px;
		  border: 0px;
		  color: #5d5d5d;
		  font-family: Verdana, "sans serif";
		  font-size: 11px;
		  line-height: 14px;
		  text-align:center;
		}
		
		
		#rounded-corner
		{
			font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
			font-size: 12px;
			margin: 45px;
			width: 480px;
			text-align: left;
			border-collapse: collapse;
		}
		#rounded-corner th
		{
			padding: 8px;
			font-weight: normal;
			font-size: 13px;
			color: #039;
			background: #b9c9fe;
		}
		#rounded-corner td
		{
			padding: 8px;
			background: #e8edff;
			border-top: 1px solid #fff;
			color: #669;
		}
		#rounded-corner tbody tr:hover td
		{
			background: #d0dafd;
		}
	</style>
</body></html>