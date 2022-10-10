<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar UI Design</title>

    <style>
body{
    background: #352b48;
}

li, a{
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
}

.logo{
    cursor: pointer;

    padding: 3px;

    margin-left: 30%;
    margin-top: 10px;
    color: #edf0f1;
}

.nav_links{
    list-style: none;
}
.nav_links li{
    display: inline-block;
    padding: 0px 20px;
}

.nav_links li a{
    transition: all 0.3s ease 0s;
}

.nav_links li a:hover{
    color: #f44336;

}
    </style>
     <header>
        <h2 class="logo">John Heinrich Fabros CALENDAR 2023 LAB 2</h2>
        <nav>
            <ul class="nav_links">
                <li> <a href="{{ url('/january') }}">January</a></li>
                <li> <a href="{{ url('/february') }}">February</a></li>
                <li> <a href="{{ url('/march') }}">March</a></li>
                <li> <a href="{{ url('/april') }}">April</a></li>
                <li> <a href="{{ url('/may') }}">May</a></li>
                <li> <a href="{{ url('/june') }}">June</a></li>
                <li> <a href="{{ url('/july') }}">July</a></li>
                <li> <a href="{{ url('/august') }}">August</a></li>
                <li> <a href="{{ url('/september') }}">September</a></li>
                <li> <a href="{{ url('/october') }}">October</a></li>
                <li> <a href="{{ url('/november') }}">November</a></li>
                <li> <a href="{{ url('/december') }}">December</a></li>
            </ul>
        </nav>
    </header>
</head>
</html>
@yield('contents') 
