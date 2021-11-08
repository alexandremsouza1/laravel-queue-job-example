<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Queue Job Example</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-900">
    @if(session()->has('success'))
        <span class="px-3 py-1 m-3 text-green-500">{{session()->get('success')}}</span>
    @endif
    <form action="{{route('send.email.user')}}" method="post">
        @csrf
        <button type="submit" name="send" class="bg-green-500 px-4 py-3 m-3 hover:bg-green-600 rounded-full text-white shadow-lg">Send Email</button>
    </form>
</body>
</html>