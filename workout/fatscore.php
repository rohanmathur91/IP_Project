<html>
<head>
	<script src="new 1.js"></script>
	<link rel="stylesheet" href="new 2.css">
</head>
<div id=outer><b>Fat Percentage Calculator</b><div id=cover><form name=fp><table class=main><col class=w60><col class=w60><tr><td>Measuring System<td><select id=msf onchange=msystem();><option value=metric>Metric (Kgs, Cms)<option value=us>US (lbs, inches)</select><tr><td>Sex<td><select id=sf><option value=m>Male<option value=f>Female</select><tr><td>Height <span id=thf>(Cms)</span><td><input id=hf><tr><td>Neck Girth<span id=tneck> (Cms)</span><td><input id=neck><tr><td>Waist <span id=twaist>(Cms)</span><td><input id=waist><tr><td>Hips <span id=thips>(Cms)</span><td><input id=hips><tr><td><button type=reset>Reset</button><td><button type=button onclick='bfat();'>Submit</button><tr><td>Your Body Fat<td><input id=bf class=op><tr><td>Body Fat Category<td><input id=nbf class=op><tr><td colspan=2 class=ac></table></form></div></div>
</html>