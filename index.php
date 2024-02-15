<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Learn</title>
	<meta name="description" content="Página de estudos html." />
	<meta name="keywords" content="HTML, PHP">
	<meta name="author" content="Manequinha">
	<meta property="og:image" content="https://img.cancaonova.com/cnimages/canais/uploads/sites/6/2021/01/formacao_onde-esta-o-amor-de-deus-no-mundo-de-hoje.jpg">

	<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<link rel="icon" href="./assets/favicon.ico" type="image/x-icon" />
</head>

<body class="h-screen flex flex-col">
	<?php include 'header.php';?>
	<main class="flex gap-5 justify-center items-center p-5 bg-gray-300 ">
		<?php include 'aside.php';?>
		<?php include 'main.php';?>
	</main>
	<?php include 'footer.php';?>
</body>

</html>