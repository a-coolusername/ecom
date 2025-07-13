<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('head')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            nav ul {
                list-style-type: none;
                padding: 0;
                background:hsl(210, 100.00%, 35.50%);
                overflow: hidden;
                display: flex;
                justify-content: center;
            }

            ul li {
                padding: 14px 20px;
            }

            nav ul li a {
                color: white;
                text-decoration: none;
            }

            .container {
                display: flex;
                flex: 1;
                max-width: 100%;
            }

            .sidebar {
                width: 250px;
                background: #f4f4f4;
                padding: 15px;
            }

            .main-content {
                flex: 1;
                padding: 20px;
            }

            footer {
                background: #004080;
                color: white;
                text-align: center;
                padding: 10px;
                position: relative;
                bottom: 0;
                width: 100%;
            }

            .product-description{
                font-size: 12px !important;
                color:hsl(0, 0.00%, 80%);
                margin:0;
            }
            .price{
                display: flex;
                align-items: center;
                justify-content: center;

                position: absolute;
                top: 0;
                right: 0;

                background-color: hsl(147, 50%, 47%);
                border: 1px solid black;
                margin: 0;
            }
            .product-details{
                display: flex;
                flex-wrap: wrap;
                text-align: left;
                align-items: flex-end;
                height: 100%;
            }
            .text-container, .details-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .image{
                position: absolute;
                top: 0;
                left: 0;
            }
            .product-box:hover{
                background-color: hsl(0, 0%, 71%);
            }
            .product-box {
                position: relative;
                width: 250px;
                height: 450px;
            }
            .product-name{
                color:black;
                font-weight: bold;
                font-size: 20px !important;
                margin: 0;
            }
        </style>
        @yield('styles')
<body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/products/cart">Cart @yield('Count')</a></li>
            </ul>
            @yield('header')
        </nav>
        <div class="container">
            <main class="main-content">
                @yield('content')
            </main>
        </div>

        <footer>
            @yield('footer')
            <p>E-commerce Website 2025</p>
        </footer>
    </body>

    @yield('scripts')

</html>
