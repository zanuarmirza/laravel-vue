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
            <div class="flex content-start flex-wrap p-12 bg-gray-200 justify-center ">
                <form method="POST" action={{route('createEmployee')}}
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0"><label for="grid-first-name"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">First
                                Name</label><input id="grid-first-name" type="text" placeholder="Jane" name="firstName"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                        <div class="w-full md:w-1/2 px-3"><label for="grid-last-name"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Last
                                Name</label><input id="grid-last-name" type="text" placeholder="Doe" name="lastName"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3"><label for="grid-job"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Job</label><input
                                id="grid-job" type="text" name="job"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3"><label for="grid-address"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Address</label><input
                                id="grid-address" type="text" name="address"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3"><label for="grid-education"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Education</label><input
                                id="grid-education" type="text" name="education"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div><button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>