<?= $this->view('Shared/header'); ?>

	<a href='/Invoice/create'>Add a new invoice</a>

	<div class='container'>
		<table>
		<?php
		foreach($data as $invoice){
			echo "<tr><td>$invoice->invoice_id </td><td>$invoice->invoice_title</td>
			<td><a href='/Invoice/update?id=$invoice->invoice_id'> Update </a></td>
			<td><a href='/Invoice/delete?id=$invoice->invoice_id'> Delete </a></td>
			</tr>";
		}
		?>
		</table>
	</div>

<?= $this->view('Shared/header'); ?>