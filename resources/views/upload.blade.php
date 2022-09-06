<html>
<head>
    <title>image upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



</head>
<body>
<h1 class="text-center text-info">Upload</h1>
<form action="insert" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="image">
    <input type="submit" class="btn btn-success">
</form>
<hr>
<table class="table table-striped  table-bordered border-primary ">
    <tr>
        <th><h3><b>ID</b></h3></th>
        <th><h3><b>Photo</b></h3></th>
    <tr>
    @foreach($data as $data)
        <tr>
            <th>{{$data['id']}}</th>
            <th><img src="image/{{$data['name']}}" height="50px" width="100px"></th>
        </tr>
        @endforeach
</table>
</body>
</html>