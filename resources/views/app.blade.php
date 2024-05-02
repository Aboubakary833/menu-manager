<!DOCTYPE html>
<html lang="{{ config("app.locale") }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
	<title>{{ config("app.name") }} | @yield("title")</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    </style>
	@vite([
		'resources/ts/app.ts',
		'resources/css/app.css',
	])
</head>
<body class="dark:bg-dark font-inter">
	@yield("content")

    @yield("tiny_script")
</body>
</html>
