<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="flex justify-center">
    <main class="max-w-6xl w-full">
        <h1 class="text-white w-full bg-black">Welcome home</h1>
        @livewire("task-component")
    </main>
</body>
</html>