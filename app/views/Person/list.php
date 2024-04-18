<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

	<a href='/Person/register'>Add a new person record</a>

	<div class='container'>
		<table>
			<tr><th>first_name</th><th>last_name</th><th>email</th><th>weekly_flyer</th><th>mailing_list</th><th>Delete</th><th>Edit</th></tr>

		<?php
		foreach($data as $index => $person){
			echo "<tr><td>$person->first_name</td><td>$person->last_name</td><td>$person->email</td><td>$person->weekly_flyer</td><td>$person->mailing_list</td>
			<td><a href='/Person/delete?id=$index'><i style='font-size: 2rem;' class='bi-x-square-fill' title='delete'></i></a></td>
			<td><a href='/Person/edit?id=$index'><i style='font-size: 2rem;' class='bi-pencil-fill' title='delete'></i></a></td>
			</tr>";
		}
		?>
		</table>

	</div>
</body>
</html>