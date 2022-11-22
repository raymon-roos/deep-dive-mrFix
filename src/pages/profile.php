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

<body>

	<header class="flex flex-col justify-between items-center w-full h-1/4 bg-mrfix_brown mb-24">
		<div class="flex justify-between w-full h-1/3 p-4">
			<a href="./index.php">Back</a>
			<a href="#">Edit Profile</a>
			<a href="#">B</a>
		</div>

		<div class="relative top-10 flex items-center w-full h-1/3 p-4">
			<div class="relative right-2 top-4 rounded-full w-24 h-24 bg-gray-400
          border-solid border-4 border-white">
			</div>
			<a href="#" class="text-gray-100 font-bold">John Doe</a>
		</div>
	</header>

	<main class="flex flex-col justify-between items-center my-4">
		<h6 class="font-bold my-4">Personal Information</h6>

		<form class="flex flex-row justify-between items-center w-2/3 px-10 py-8 bg-white rounded-md">
			<div class="flex flex-col">
				<label for="phone" class="font-bold">Phone number</label>
				<label for="email" class="font-bold">Email</label>
				<label for="phone_input" class="font-bold">First name</label>
				<label for="surname" class="font-bold">Surname</label>
			</div>
			<div class="flex flex-col justify-evenly items-end">
				<input type="tel" name="phone" value="" id="phone" class="rounded-md border-solid border-2">
				<input type="text" name="email" value="" id="email" class="rounded-md border-solid border-2">
				<input type="text" name="first_name" value="" id="first_name" class="rounded-md border-solid border-2">
				<input type="text" name="surname" value="" id="phone_input" class="rounded-md border-solid border-2">
			</div>
		</form>

		<h6 class="font-bold my-4">Preferences</h6>

		<form class="flex flex-row justify-evenly items-center w-2/3 px-4 py-6 bg-white rounded-md">
			<div class="flex flex-col">
				<label for="language" class="font-bold">Language</label>
				<label for="darkmode" class="font-bold">Darkmode</label>
			</div>
			<div class="flex flex-col justify-evenly items-end">
				<input type="button" name="language" value=" " id="language" class="rounded-md border-solid border-2">
				<input type="button" name="darkmode" value=" " id="darkmode" class="rounded-md border-solid border-2">

			</div>
		</form>

	</main>

	<?php require('../components/navbar.html'); ?>
</body>

</html>
