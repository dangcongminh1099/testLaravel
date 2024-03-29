
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
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-push-3">
                    <h1 class="text-center">Calculate</h1>
                    
                    <form action="{{ route('tinhToan') }}" method="Get" role="form">
                        {{ csrf_field() }}
                        <legend>Tính toán</legend>
                    
                        <div class="form-group">
                            <label for="">Số a</label>
                            <input type="number" class="form-control" id="" placeholder="Input field" name="numa">
                        </div>
                        <div class="form-group">
                            <label for="">Số b</label>
                            <input type="number" class="form-control" id="" placeholder="Input field" name="numb">
                        </div>          
                        <button type="submit" class="btn btn-primary">tính tổng</button>
                    </form>
                    
                </div>
                
                
            </div>
            
        </div>
    
        

        
    </body>
</html>
