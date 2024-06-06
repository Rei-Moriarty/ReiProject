<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reiga</title>
    <style>
        /* Custom CSS untuk header */
       .header {
            background-color: #000080; /* Warna biru es */
            padding: 20px;
            text-align:left;
            font-size: 36px;
            font-weight: bold;
            color: #000000; /* Warna teks putih */
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
       .header:hover {
            background-color: #87CEEB; /* Warna biru muda */
            cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid"> 
        <div class="header row"> 
            <div class="col"> 
                <span class="logo">MORIARTY</span>
                <button class="btn btn-primary float-end">Get Started</button>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>