<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="{{ asset('css/pulse.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
 <livewire:users-table></livewire:users-table>
    @livewireScripts
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
