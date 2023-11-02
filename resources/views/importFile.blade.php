<!DOCTYPE html>
<html>

<head>
	<title> Import and Export Excel data to database Using Laravel 8 </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
		<div class="card bg-light mt-3">
			<div class="card-header">
				Import and Export Excel data to database Using Laravel 8
			</div>
			<div class="card-body">
				<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="file" name="file" class="form-control">
					<br>
					<button class="btn btn-success">Import User Data</button>
					<a class="btn btn-warning" href="{{ route('export-users') }}">Export User Data</a>
					<a class="btn btn-info" href="{{ route('laravel-dompdf') }}">Download User Data</a>
				</form>
				@include('tableau')
			</div>
		</div>
	</div>

</body>

</html>
