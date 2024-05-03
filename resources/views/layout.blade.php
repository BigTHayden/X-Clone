<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<i class='bx bxs-news'></i>" type="/x-icon">
    <link rel="stylesheet" href="/bootstrap-5.3.1-dist/css/bootstrap.min.css">

    <title>Aproko NG</title>
</head>

<body>

    <div class="d-flex justify-content-center my-5 bg-secondary p-3">
        <a href="{{ route('post.add')}}" class="btn btn-light me-2">Add Post</a>
        <a href="{{ route('all.post')}}" class="btn btn-light me-2">All Posts</a>
    </div>





    @yield('content')

</body>

</html>
