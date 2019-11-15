<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Billing System</title>


    <!--Attach-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-Menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PHP-Contact-Form-dark-1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PHP-Contact-Form-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Table-With-Search-1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Table-With-Search.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


</head>

<body>
    <div style="background-color: #000000;">
        <h2 class="text-center" style="padding-top: 10px;color: rgb(255,255,255);">Billing System</h2>
        <div class="text-center" style="padding-bottom: 10px;"><a href="/" style="padding-right: 20px;">l<i
                    class="fa fa-calculator"></i>&nbsp; Create Bill</a><a href="/bill-list">l<i
                    class="fa fa-address-book-o"></i>&nbsp; Bill List</a></div>
    </div>
    </div>
    <div class="text-left border rounded" id="contact" style="height: 500px;">
        <div class="container" style="width: 700px;height: 400px;">
            <div class="intro">
                <h2></h2>
                <p style="font-size: 25px;">Enter the Details</p>
            </div>
            

            @if ($errors->any())

            @foreach ($errors->all() as $error)
                <li style="color:#f00">{{$error}}</li>
            @endforeach
            @endif 


            {!! Form::open(['action' => 'BillController@store_bill', 'method'=>'POST']) !!}

            <div class="messages"></div>
                <div class="controls">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group"><label for="form_name">Name</label><!--<input class="form-control"
                                    type="text" name="name" required="" placeholder="Enter name" id="name"
                                    data-error="Enter proper name">-->
                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name','data-error'=>'Invalid name','required'=>'', 'tabindex'=>'1'])}}

                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-group"><label for="form_lastname">MobileNo</label><!--<input
                                    class="form-control" type="text" name="mobileno" required=""
                                    placeholder="Enter mobileno" id="mobileno" data-error="Enter proper mobile no">-->
                                    {{Form::text('mobileno','',['class'=>'form-control','placeholder'=>'Enter MobileNo','data-error'=>'Invalid mobileno','required'=>'', 'tabindex'=>'2'])}}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group"><label for="form_email">E-Mail (optional)&nbsp;</label><!--<input
                                class="form-control" type="email" name="email" placeholder="Enter email" id="email">-->
                                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email', 'tabindex'=>'3'])}}

                            <div class=" help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label for="form_phone">Amount</label><!--<input class="form-control"
                            type="number"  name="amount" placeholder="Enter Amount" id="amount"
                            data-error="Enter proper amount">-->
                            {{Form::text('amount','',['class'=>'form-control','placeholder'=>'Enter Amount','data-error'=>'Invalid Amount','required'=>'', 'tabindex'=>'4'])}}

                        <div class="help-block with-errors"></div>
                    </div>
                </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group"><label for="form_message">Address (optional)</label><!--<input class="form-control"
                        type="text" name="address"  placeholder="Enter Address" id="address"
                        rows="4">-->
                        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter Address', 'tabindex'=>'5'])}}

                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 text-center align-content-center"><!--<button
                    class="btn btn-primary justify-content-between btn-send" type="submit" 
                    style="width: 150px;height: 40px;">Enter Bill</button>-->
                    {{Form::submit('Enter Bill',['class'=>'btn btn-primary justify-content-between btn-send'])}}
 
                </div>
        </div>
       
        {!! Form::close() !!}
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>