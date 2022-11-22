<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="../manifest.webmanifest" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						'mrfix_brown': '#b19982',
						'mrfix_bg': '#f6f6f6',
					},
				},
			},
			plugins: [],
		}
	</script>
</head>

<body class="w-screen h-screen">

	<div class="flex flex-col justify-evenly items-center w-full h-full">
		<div class="flex bg-red-600 w-1/3 h-1/4 justify-center items-center rounded-2xl">
			<a href="another_page.html" class="flex justify-center items-center w-full h-full">
				<h1> hello, mrFix! </h1>
			</a>
		</div>

		<div class="flex bg-red-600 w-1/3 h-1/4 justify-center items-center rounded-2xl">
			<a href="profile.php" class="flex justify-center items-center w-full h-full">
				<h1>to the profile page</h1>
			</a>
		</div>
	</div>

	<?php include('../components/navbar.html'); ?>
</body>

</html>
