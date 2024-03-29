@include('dashboard')
<!doctype html>
<html lang="en">

<head>
  <title>Appointment</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <a href="{{url('dashboard')}}"><button class="btn btn-primary">Back</button></a>
  </header>
  <main style="margin-top: -800px";>
    <div class="table-responsive" style="margin-left: 100px;margin-top:-565px">
        <table class="table table-primary center">
            <thead>
                <tr>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
              @foreach ($service as $app)



                <tr class="center">
                    <td>{{$app->icons}}</td>
                    <td>{{$app->title}}</td>
                    <td>{{$app->price}}</td>


                    <td><a href="{{url('/deleteservice')}}/{{$app->id}}"><button class="btn btn-danger">Delete</button></a>
                      <a href="{{url('/editservice')}}/{{$app->id}}">
                    <button class="btn btn-primary">Edit</button>
                  </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
