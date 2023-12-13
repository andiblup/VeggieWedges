<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VeggieWedges</title>
    @vite(['resources/js/app.js'])
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- <style>
        .body-inherit * :not(.btn) {
            color: inherit!important;
            background-color: inherit!important;
        }

        .dark-mode {
            background-color: #41413F!important;
            color: white!important;
        }

        .light-mode {
            background-color: white;
            color: black;
        }
        
        .dark-mode-body {
            background-color: #222222!important;
            color: white;
        }
        
        .light-mode-body {
            background-color: white!important;
            color: black;
        }
    </style> --}}
</head>
 
<body class="p-4" id="body">
    {{-- <div class="form-check bi bi-moon-stars-fill"> --}}
    
    
    {{-- <div class="form-check form-switch">
        <i class="bi bi-brightness-high-fill"></i>
        <input class="form-check-input" type="checkbox" id="darkModeToggle" onchange="toggleDarkMode(this)">
    </div> --}}
    <label class="custom-checkbox">
        <i class="bi bi-brightness-high-fill"></i>
        <input class="" type="checkbox" id="darkModeToggle" onchange="toggleDarkMode(this)">
    </label>
    @section('header-toggle')
        @show
        {{-- <i class="bi bi-brightness-high-fill" id="darkModeToggle" onchange="toggleDarkMode(this)"></i> --}}

        {{-- <input class="form-check-input" type="checkbox" id="darkModeToggle" onchange="toggleDarkMode(this)">  --}}
        {{-- <i class="bi bi-moon-stars-fill"></i> --}}
        {{-- <label class="form-check-label" for="darkModeToggle">Dark Mode</label> --}}


    @section('header')
    @show

    @section('main')
    @show

    @section('footer')
    @show

    <script>
        document.getElementById("darkModeToggle").checked = localStorage.getItem('darkMode') === "true";
        document.getElementById("body").classList.add('body-inherit');
        checkDarkMode();
        synchronizeCards();
        function toggleDarkMode(checked) {
            console.log("CHECKED?: " + checked.checked);
            if (checked.checked){
                console.log("JAA");
                localStorage.setItem('darkMode', true);
            } else {
                console.log("NEEIIn");
                //document.body.classList.remove('dark-mode');
                localStorage.setItem('darkMode', false);
            }
            console.log(localStorage.getItem('darkMode'));
            checkDarkMode();
        }
        
        function checkDarkMode() {
            if (localStorage.getItem('darkMode') === "true") {
                document.body.classList.add('dark-mode');
                
                Array.from(document.getElementsByClassName("bi-brightness-high-fill")).forEach(
                function(element, index, array) {
                    element.classList.add('bi-moon-stars-fill');
                    element.classList.remove('bi-brightness-high-fill');
                    }
                );
            } else {
                document.body.classList.remove('dark-mode');

                Array.from(document.getElementsByClassName("bi-moon-stars-fill")).forEach(
                function(element, index, array) {
                    element.classList.add('bi-brightness-high-fill');
                    element.classList.remove('bi-moon-stars-fill');
                    }
                );
            }
            synchronizeCards();
        }

        function synchronizeCards(){
            Array.from(document.getElementsByClassName("card")).forEach(
                function(element, index, array) {
                    // do stuff
                    if (localStorage.getItem('darkMode') === "true") {
                        element.classList.add('dark-mode');
                    } else {
                        element.classList.remove('dark-mode');
                    }
                }
            );
        }
    </script>
</body>

</html>
