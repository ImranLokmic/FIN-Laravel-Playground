<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--Tailwind-->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="bg-blue-900 text-blue-100 pt-20">
        <div class="max-w-5xl mx-auto">
            <div>
                <form action="/tweets" method="POST">
                    @csrf
                    <input type="text" name="body" class="mb-4 w-full p-2 border-2 border-blue-500 text-black" placeholder="Whats Happenin'?" />
                    <button type="submit" class="bg-yellow-500 text-gray-800 py-3 px-7 rounded-full">Tweet</button>
                </form>
            </div>
            <div>
                @foreach($tweets as $tweet)
                <div class="border-b-2 border-blue-500 p-2">
                    <form action="/tweets/{{$tweet->id}}" method="post" class="flex space-x-2 ">
                        @csrf
                        @method('PUT')
                        <input type="text" name="body" value="{{$tweet->body}}" class="bg-white py-2 px-4 rounded-full text-black w-full">
                        <button type="submit" class="bg-blue-300 text-blue-900 py-3 px-4 rounded-full">Edit</button>
                    
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
