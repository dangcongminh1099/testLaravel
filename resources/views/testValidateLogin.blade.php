<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Hello World</h1>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="container">
        
            <div class="row">
                <div class="col-xs-6 col-xs-push-3">
                    <form action="{{Route('processLogin')}}" method="POST" role="form">
                        <legend>Login</legend>
                        {{csrf_field()}}
                        <div class="form-group">
                        <label for="">Nhập tên</label>
                            <input type="text" class="form-control" id="" name="user" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Nhập password</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="Input field">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        @php
            if(isset($errors))
            {
                echo count($errors);
                foreach ($errors->all() as $key=>$value) {
                    echo $value;
                }
            }
            dd($errors);
        @endphp
    </body>
</html>
