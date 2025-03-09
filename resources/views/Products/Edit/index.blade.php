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
                    <h1>Edit Product</h1>
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="inp-title">Title</label>
                            <input type="text" class="form-control" name="title" id="inp-title" value="{{ $product->title }}"
                                aria-describedby="inp-title-helpId" placeholder="Enter here" required>
                            <small id="inp-title-helpId" class="form-text text-muted">Please enter the product title here</small>

                            @error('title')
                                <br>
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="inp-price">Price</label>
                            <input type="number" step="0.01" class="form-control" name="price" id="inp-price" value="{{ $product->price }}"
                                aria-describedby="inp-price-helpId" placeholder="Enter here" required>
                            <small id="inp-price-helpId" class="form-text text-muted">Please enter the product price here</small>

                            @error('price')
                                <br>
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inp-description">Description</label>
                            <textarea class="form-control" name="description" id="inp-description" rows="3"> {{ $product->description }} </textarea>

                            @error('description')
                                <br>
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="mt-4 btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
