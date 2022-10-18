<html>

<head>
    <title>Laravel Pagination using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
        }

        .flex {
            display: flex;
            justify-content: center;
            gap: 102px;
        }

        .create-form {
            padding: 20px
        }

        .create-btn {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
            align-items: center;
            gap: 30px
        }

        .create-form-container {
            padding: 20px
        }

        #search-form {
            margin: 0
        }
    </style>
</head>

<body>
    <br />
    @yield('content')
</body>

</html>

<script>
    var searchParams = null
    var select = document.getElementById('search');
select.addEventListener('change', function(){
    var submitBtn = document.getElementById('search-submit');
    submitBtn.click()

}, false);
console.log(select)
 $(document).ready(function(){

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

 function fetch_data(page)
 {
  $.ajax({
   url:"/contacts?page="+page+"&&search="+searchParams.search,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }

});
</script>
