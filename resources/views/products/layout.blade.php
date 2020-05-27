<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 CRUD Application - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #edf7ef">
  
<div class="container">
	<br/>
	<br/>
	<br/>
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function CreateModel(params) {
        $("#myModal").modal("show");
        $.ajax({
            type: "GET",
            url: params+"/create",
            success: function (response) {
                $("#form").html(response);
                                                
            }
        });                
    }
    function EditModel(params,id) {
        $("#myModal").modal("show");
        $.ajax({
            type: "GET",
            url: params+"/"+id+"/edit",
            success: function (response) {
                $("#form").html(response);                                                
            }
        });                
    }
    function ShowModel(params,id) {
        $("#myModal").modal("show");
        $.ajax({
            type: "GET",
            url: params+"/"+id,
            success: function (response) {
                $("#form").html(response);                                                
            }
        });                
    }
    function DeleteModel(params,id) {
        // $("#myModal").modal("show");
        $.ajax({
            type: "DELETE",
            url: params+"/"+id,
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            success: function (response) {
                $("#form").html(response);                                                
            }
        });                
    }
</script>
</body>
</html>