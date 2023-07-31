<?php
# prints an HTML table of the movies in the given result set
function print_table($first_name, $last_name, $rows, $caption) {
	?>

	<h1> Results for <?= $first_name ?> <?= $last_name ?> </h1>

	<table class="movietable">
		<caption> <?= $caption ?> </caption>
		<tr>
			<th>#</th> <th>Title</th> <th>Year</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { ?>
			<tr>
				<td><?= $i ?></td>
				<td><?= htmlspecialchars($row["name"]) ?></td>
				<td><?= htmlspecialchars($row["year"]) ?></td>
			</tr>
		<?php $i++; } ?>
	</table>

	<?php
}
?>