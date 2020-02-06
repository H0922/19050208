<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <title>A</title>
</head>
<body>
    <h1>A页面</h1>
</body>
<script>
    $.ajax({
        url:'http://b.com/',
        data:'GET',
    }).done(function(a){
        alert(a);
    })
</script>
</html>