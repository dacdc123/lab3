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
    <div>
        <h1>Danh sách </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th scope="col">Title</th>
                    <th>Thumnail</th>
                    <th>Author</th>
                    <th scope="col">Publisher</th>
                    <th>publication</th>
                    <th scope="col">Price</th>
                    <th scope="col">quantity</th>
                    <th>Category NAme</th>
                    <th>
                        <a href="{{ route('book.create') }}" class="btn btn-success"> Thêm Mới</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }} </td>
                        <td>{{ $book->title }}</td>
                        <td>
                            <img src="{{ $book->thumbnail }}" alt="" width="60">
                        </td>
                        <td>{{ $book->author }}</td>
                        <td scope="col">{{ $book->publisher }}</td>
                        <td>{{ $book->publication }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>{{ $book->name }}</td>
                        <td>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xoá không ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
