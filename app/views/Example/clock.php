<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clock example with AJAX</title>
</head>
<body>

<div id='counter'></div>
<div id='clock'></div>

<script type="text/javascript">
theCounterDiv = document.getElementById('counter');

fetch('/Example/count')
.then(response => response.json())
.then(data => {
	theCounterDiv.innerHTML = data.count + ' visits to the page';
});



theDiv = document.getElementById('clock');
fetch('/Example/clock',{
	method: 'GET'
})
.then(response => response.json())
.then(data => {
	theDiv.innerHTML = data.date;
});

</script>
</body>
</html>