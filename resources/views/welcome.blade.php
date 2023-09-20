<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-10 mx-auto">
            <div class="card mt-5 shadow">
                <div class="card-header bg-primary text-center text-light h3">
                    Comments Section
                </div>
                <div class="card-body">
                    <div class="form mb-4">
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="comment" class="form-label strong"> Leave a comment: </label>
                                <textarea name="comment" id="coment" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">
                                    Post
                                </button>
                            </div>
                        </form>

                    </div>
                    <hr>
                    @foreach ($comments as $data)
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="h4">{{$data['name']}}</span> - <small class="text-muted"><em>{{$data['time']}}</em></small>
                                    </div>
                                    <div>
                                        <button class="btn text-danger">X</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {{$data['content']}}
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
