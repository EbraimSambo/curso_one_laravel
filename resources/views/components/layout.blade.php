<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostFace</title>
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
    <link rel="stylesheet" href="/app.css">

</head>
<script src="//unpkg.com/alpinejs" defer></script>
<body>
    <x-header  />
    <main id="main">
        <x-flash-message />
        {{$slot}}
    </main>
    <x-footer  />
</body>
</html>
