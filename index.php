<?php
	$url = 'wallipsum.json';
	$content = file_get_contents($url);
	$json = json_decode($content, true);

	$max_filler = max($json["filler"]);
	$max_filler = $max_filler["id"];

	$max_main = max($json["long"]);
	$max_main = $max_main["id"];
	$json = json_decode($content);
	
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Eddy Wallypsum</title>
</head>
<body>
<div class="container">

	<form method="post">
		<div class="form-group">
			<label for="slider">How many paragraphs do you want?</label>
			<select type="select"  name="aantal">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
			</select>
		</div>

		<div class="form-group">
			<label for="slider">Maak je tekst helemaal</label>
			<select type="select"  name="helemaal">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
			</select>
						<input type="submit" name="submit" value="Get Excerpt">

		</div>
		
	</form>
		<?php
			if (isset($_POST['aantal'])) {
				$i = $_POST['aantal'];
				while ($i--) {
					$id = rand(1, $max_main);
					foreach($json->long as $item) {
						if ($item->id == $id) {
							$ptag = '<p>' . $item->paragraph. '</p>';
							echo '<p>';
							echo htmlentities($ptag);
							echo '</p>';
						}
					}
				}
			}
		?>

</div>

</body>
</html>