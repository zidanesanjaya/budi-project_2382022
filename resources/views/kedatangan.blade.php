<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Budi's Projects</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="/css/index.css" rel="stylesheet">
	<link href="/js/index.js" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
	<body>
		<div class="container">
			<div class="table-wrapper">
				<div class="table-title" style="text-align: center;">
					<h2>Manage <b>Ship</b></h2>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th colspan="2">Nama Kapal</th>
							<th>Schedule</th>
							<th>Kedatangan</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@forelse($ship as $s)
						<tr>
							<td colspan="2">{{$s->nama_kapal}}</td>
							<td>{{date("d-M-Y", strtotime($s->schedule))}}</td>
							<td>{{$s->kedatangan}}</td>
							<td>{{$s->status}}</td>
						</tr>
						@empty
						<tr>
							<td colspan="12">There are no Ship.</td>
						</tr>
						@endforelse 
					</tbody>
				</table>
			{{$ship->links()}}
			</div>
		</div>
	</body>
</html>