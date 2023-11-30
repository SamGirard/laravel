<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Who's watching?</title>
    <link rel="stylesheet" href="../selectUser.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg">




    <div class="container">
        <h1 class="header text-light text-center">Who's watching?</h2>

        <div class="row_user">
            <div class="row justify-content-center">
            @if(count($usagers))
                    @foreach($usagers as $usager)
                <div class="col-lg-2">
                    <div class="card">
                        <a href="{{route('Netflix.index') }}">
                            <img src="../images/netflix-avatar.png" class="icon">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$usager->username}}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <div class="col-lg-2">
                    <div class="card">
                        <a href="{{route('Netflix.index') }}" class="test">
                            <img src="../images/add-icon.png" class="add">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title add-title">Add Profile</h3>
                        </div>
                    </div>
                </div>
                    
            </div>
            
            <div class="button text-center">
                <h3>Manage profiles</h3>
            </div>

        </div>

    </div>


</body>
</html>