<html>

<head>
	<title>My site</title>
</head>

<body>
	<ul>
		<?php foreach ($users as $user) : ?>
			<li><?= $user->name ?></li>
		<?php endforeach; ?>
	</ul>
</body>

</html>