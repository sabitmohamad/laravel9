<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
		<section class="p-5 w-75 mx-auto">
			<h1 class="text-center mb-5">Rental Mobil</h1>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Price</th>
						<th scope="col">Image</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cars as $car)
						<tr class="mx-auto">
							<th scope="row">{{ $car->id }}</th>
							<td>{{ $car->name }}</td>
							<td>${{ $car->tarif }}</td>
							<td><img src="{{ $car->img_url }}" alt="" width="200"></td>
						</tr>
							
					@endforeach
				</tbody>
			</table>
		</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>