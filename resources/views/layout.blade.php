<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoc viet blade</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .body {
            height: 300px;
            border: 1px solid #333;
            display: flex;
        }
        .body-left,
        .body-right {
            display: flex;
            height: 100%;
            box-sizing: border-box;
            background: #ccc;
            flex: 1;
        }
        .body-left {
            background: green;
        }
    </style>
</head>
<body>
    <div class="header">Header @yield('menu')</div>
    <div class="body">
        <div class="body-left">
        @yield('bodyLeft')
        </div>
        <div class="body-right">
        @yield('bodyRight')
        </div>
    </div>
    <div class="footer">Footer</div>
</body>
</html>