<?= $this->view('Shared/header'); ?>

	<a href='/Invoice/create'>Add a new invoice</a>

	<div class='container'>
		<table>
		<?php
		foreach($data as $index => $invoice){
			echo "<tr><td>$invoice->invoice_id </td><td>$invoice->invoice_title</td>
			<td><a href='/Invoice/update?id=$invoice_id'> Update </a></td>
			<td><a href='/Invoice/delete?id=$invoice_id'> Delete </a></td>
			</tr>";
		}
		?>
		</table>
	</div>

<?= $this->view('Shared/header'); ?>