<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/turbolinks@5.2.0/dist/turbolinks.js"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
></script>
</head>
<livewire:styles />
<livewire:scripts />
<body>

    <div class="d-flex align-items-center justify-content-between" style="background-color:#5b245b;height:70px;">
        <b><a class="mx-5 text-white text-decoration-none" href="/">Home</a></b>


        @auth
        
        <livewire:logout/>
            
        @endauth

        @guest
        <div>
            <b><a class="mx-2 text-white text-decoration-none" href="/login">Login</a></b>
        <b><a class="mx-2 me-5 text-white text-decoration-none" href="/register">Register</a></b>
        </div>
            
        @endguest
      
    </div>

 @yield('content')
</body>
</html>