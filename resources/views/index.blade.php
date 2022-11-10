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
			<a href="{{ route('a.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
			<h1 class="text-center mb-5">Rental Mobil</h1>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Price</th>
						<th scope="col">Image</th>
						<th scope="col">Durasi</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($cars as $car)
						<tr class="mx-auto">
							<th scope="row">{{ $loop->iteration }}</th>
							<td>{{ $car->name }}</td>
							<td>${{ $car->tarif }}</td>
							<td class="text-center">
								<img src="{{ $car->img_url}}" class="rounded" style="width: 150px">
							</td>
							<td>{{ $car->durasi }}</td>
							<td>{{ $car->status }}</td>

							<td class="text-center">
								<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('a.destroy', $car->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<a href="{{ route('a.edit',$car->id) }}" class="btn btn-sm btn-primary">EDIT</a>
									<button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
								</form>
							</td>
							
						</tr>
						@empty	
					@endforelse
				</tbody>
			</table>
		</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>