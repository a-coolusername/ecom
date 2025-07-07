<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('head')
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
                background: #005bb5;
                overflow: hidden;
                display: flex;
                justify-content: center;
            }

            nav ul li {
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
        </style>
        @yield('styles')
<body>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div class="container">
            <aside class="sidebar">
                <h2>Sidebar</h2>
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Class</a></li>
                </ul>
            </aside>
            <main class="main-content">
                @yield('content')
            </main>
        </div>

        <footer>
            <p>E-commerce Website 2025</p>
        </footer>
    </body>

    @yield('scripts')

</html>