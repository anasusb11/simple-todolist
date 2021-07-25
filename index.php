<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body {
            background-color : #4e1458;
        }
    </style>
</head>
<body>
        <h1 class="text-center mt-4 mb-4 text-white">Simple To-do List</h1>

<div class="card mx-auto" style="width: 70%">
  <div class="card-header">
    Card To Do List
  </div>
  <div class="card-body">
      <form action="add.php" method="POST">
    <input type="text" class="form-control mb-2" name="title" placeholder="Write, what you want to do">
        <button type="submit" name="submit" class="btn  btn-block btn-primary">Add &nbsp; <span>&#43;</span></button>
        </form>
  </div>
</div>
    <div id="list">

    </div>
    <script type="text/javascript">
$(document).ready(function(){
    loadData();

    $('form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(){
                loadData();
            }
        }); 
    })
})

function loadData() {
    $.get('list.php', function(data) {
        $('#list').html(data);
        $('.deleteData').click(function(e) {
        e.preventDefault();
            $.ajax({
                type: 'get',
                url: $(this).attr('href'),
                success: function(){
                    loadData();
            }
        }); 
        })
    })
}
</script>
</body>
</html>