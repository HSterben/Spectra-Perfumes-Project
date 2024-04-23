<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

	<a href='/Invoice/create'>Add a new invoice</a>

	<div class='container'>
		<table>
		<?php
		foreach($data as $index => $invoice){
			echo "<tr><td>$invoice->invoice_id </td><td>$invoice->invoice_title</td>
			<td><a href='/Invoice/update?id=$index'>></a></td>
			<td><a href='/Invoice/delete?id=$index'></a></td>
			</tr>";
		}
		?>
		</table>
	</div>
</body>
</html>