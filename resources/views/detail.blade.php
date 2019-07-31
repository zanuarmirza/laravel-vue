<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--[if IE]><link rel="icon" href="favicon.ico"><![endif]-->
    <title>client</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        #app {
            font-family: 'Avenir', Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            color: #2c3e50;
        }

        #nav {
            padding: 30px;
        }

        #nav a {
            font-weight: bold;
            color: #2c3e50;
        }

        #nav a.router-link-exact-active {
            color: #42b983;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="nav" class="bg-white p-2 mt-0 fixed w-full z-10 top-0">
            <a href="{{ route('employee') }}" class="router-link-exact-active router-link-active">Home</a> |
            <a href="{{ route('employeeForm') }}" class="">Create</a></div>
        <div class="pt-20">
            <div class="p-2 justify-center flex items-center"><a data-v-bb2677e4="" href="/spa/detail"
                    class="w-full md:w-1/2 lg:w-1/3 p-2 router-link-exact-active router-link-active">
                    <div data-v-bb2677e4=""
                        class="border border-grey-light bg-white rounded p-4 flex flex-col justify-between leading-normal card">
                        <div data-v-bb2677e4="" class="text-black font-bold text-xl mb-2">{{$employee->firstName}} {{$employee->lastName}}</div>
                        <p data-v-bb2677e4="" class="text-grey-darker text-base">{{$employee->job}}</p>
                        <p data-v-bb2677e4="" class="text-grey-darker text-base">{{$employee->address}}</p>
                        <p data-v-bb2677e4="" class="text-grey-darker text-base">{{$employee->education}}</p>
                    </div>
                </a></div>
        </div>
    </div>
</body>

</html>