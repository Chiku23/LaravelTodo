<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    {{-- Include the Header --}}
    @Include('includes.header')

    {{-- yield Content --}}
    <div class="container max-w-[1200px] mx-auto">
        @yield('content')
    </div>

    {{-- Add Scripts --}}
</body>
</html>