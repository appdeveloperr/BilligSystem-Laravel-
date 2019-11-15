<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bill history</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="{!!url('/js/jquery.min.js')!!}"></script>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Data-Table-1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Data-Table.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>

<body>


    <div style="background-color: #000000;">
        <h2 class="text-center" style="padding-top: 10px;color: rgb(255,255,255);">Billing System</h2>
        <div class="text-center" style="padding-bottom: 10px;"><a href="/" style="padding-right: 20px;">l<i
                    class="fa fa-calculator"></i>&nbsp; Create Bill</a><a href="/bill-list">l<i
                    class="fa fa-address-book-o"></i>&nbsp; Bill List</a></div>
    </div>

    <div class="input-group" style="padding: 20px">
        <input type='text' name="search" id="search" class='form-control' placeholder="Enter Data"/>
        <div class="input-group-append">
        </div>
      </div>
              
      <table id="employee_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>MobileNo</th>
                <th>Email</th>
                <th>Date</th>
                <th>Address</th>
                <th>Amount(inc)</th>
            </tr>
        </thead>
        
        @if (count($bills) > 0)
              
        @foreach ($bills as $bill)
        <tbody>
            <tr>
            <td>{{$bill->id}}</td>
                <td>{{$bill->name}}</td>
                <td>{{$bill->mobileno}}</td>
                <td>{{$bill->email}}</td>
                <td>{{$bill->created_at}}</td>
                <td>{{$bill->address}}</td>
                <td>{{$bill->amount}}</td>
            </tr>
        </tbody>
        @endforeach 
        @else 
        <p style="text-align: center">No Bill Found</p>
        @endif
      
    </table>
    @if(count($bills) > 0)  
    {{$bills->links()}}       
    @endif
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>
</html>

<script>

    $(document).ready(function(){
        
        console.log('running');
        $('#search').keyup(function(){
            search_table($(this).val());
        });

        function search_table(value){

            $('#employee_table tr').each(function(){

                var found = 'false';
                $(this).each(function(){

                    if($(this).text().toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) >= 0)
                    {
                        found = 'true';
                    }
                });

                if(found == 'true')
                {
                    $(this).show();
                }
                else
                {
                    $(this).hide();
                }
            });
        }

    })
</script>