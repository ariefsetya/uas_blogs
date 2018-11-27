<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PDO CRUDSRUD</title>
		<link rel="stylesheet" 
			type="text/css" 
			href="assets/css/css.css">
		
		<meta name="viewport" 
			content="width=device-width, initial-scale=1.0">

	</head>
	<body>
		<div class="top-gray"></div>
		<div class="header">
			<div class="big-logo">Logo</div>
			<?php inc('menu');?>
		</div>
		<div class="content">
			<div class="container">
			<?php
			if(!is_null(get('p'))){
				switch (get('p')) {

				case 'home':
					inc('home');
				break;

				case 'artikel':
					switch (get('m')) {
					case 'home':
						inc('tampilan/artikel/all');
					break;
					case 'add':
						inc('tampilan/artikel/add');
					break;
					case 'edit':
						inc('tampilan/artikel/edit');
					break;
					case 'blogs':
						inc('tampilan/artikel/blogs');
					break;
					default:
						inc('tampilan/artikel/all');
					break;
					}
				break;
				default:
					inc('tampilan/artikel/all');
				break;
			}
			}else{
				inc('tampilan/artikel/all');
			}
			?>
			</div>
		</div>
		
	</body>
</html>