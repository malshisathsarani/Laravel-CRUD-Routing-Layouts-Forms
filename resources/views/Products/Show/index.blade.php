<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Page</title>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>

<body>
    <div class="row h-100 justify-content-center">
        <div class="col-lg-6 self-center">
            <div class="card shadow" style="margin-top:100px;">
                <div class="card-body">
                    <h1>Show Product</h1>
                    <ul>
                        <li> Title: {{ $product->title }}</li>
                        <li> Price: {{ $product->price }}</li>
                        <li> Description: {{ $product->description }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
