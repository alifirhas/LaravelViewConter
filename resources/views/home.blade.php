<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>LVC</title>
</head>

<body>
    <div class="containter-lg">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col">
                <h1>List Of Post</h1>

                <form action="{{ route('home') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <textarea name="body" class="form-control" id="body" cols="30" rows="5"
                            placeholder="Post something..." autofocus></textarea>
                    </div>

                    @error('body')
                    <p class="text-danger"> {{ $message }}
                    </p>

                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                @foreach ($posts as $post)
                <p class="mt-4 fw-bold">Username <span><a href="{{ route('posts.view', $post) }}">See post</a></span></p>
                <p>{{ $post->body }}</p>
                @endforeach
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>