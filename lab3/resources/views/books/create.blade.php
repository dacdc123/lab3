<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Danh sách Them </h1>
        <form action="{{ route('book.store') }}" class="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Url Thumbnail</label>
                <input type="text" name="thumbnail" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">author</label>
                <input type="text" name="author" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publisher</label>
                <input type="text" name="publisher" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publication</label>
                <input type="date" name="publication" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" step="0.1" name="price" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category Name</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id}}">
                            {{ $cate->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Thêm Mới </button>    
                <a href="{{ route('book.index') }}" class="btn btn-success">List</a>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
