<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>LVC</title>
</head>
<body>
    <div class="containter-lg">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col">
                <h1>List Of Post</h1>

                @for ($i = 0; $i < 10; $i++)
                    <p class="mt-4 fw-bold">Username <span><a href="#">See post</a></span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nam quisquam, rem ratione numquam tempore odio voluptate ad temporibus laudantium culpa ex? Molestias corrupti incidunt, molestiae rem eum voluptatem impedit.</p>
                @endfor
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>