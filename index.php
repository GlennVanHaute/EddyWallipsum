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
	<link rel="stylesheet" href="assets/css/main.css">
	<script type="text/javascript" src="assets/js/script.js"></script>


</head>
<body>
<div class="header">
	<div class="mid">
		ER IS GENOEG EDDY Wallypsum voor iedereen. waauw!
	</div>
</div>
<div class="lampleft"></div>
<div class="lampright"></div>
<div class="lampbottom"></div>
<div class="lamptop"></div>
<div class="container">

	<div class="form">
		<form method="post">
		<img src="assets/img/wow.gif" alt="" width="400px;">
			<div class="form-group">
				<label for="slider">Hoeveel geweldige paragrafen?</label>
				<input type="text" name="select">
			</div>

			<div class="form-group" style="display: none;">
				<label for="slider">Maak je tekst helemaal</label>
				<select type="select"  name="helemaal">
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
				</select>
							<input type="submit" name="submit" value="Get Excerpt">

			</div>
			<input type="submit" class ="btn"name="submit" value="EDDY’S MAGISCHE KNOP">
			
		</form>
	</div>
	<div class="result">
		<div class="innerresult">
			<?php
				if (isset($_POST['select'])) {
					$i = $_POST['select'];
					while ($i--) {
						$id = rand(1, $max_main);
						foreach($json->long as $item) {
							if ($item->id == $id) {
								$ptag = '<p>' . $item->paragraph. '</p>';

								echo ($ptag);

							}
						}
					}
				}
			?>
		</div>
	</div>
</div>

</body>
</html>