<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama </label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email </label>
						<input type="email" class="form-control" name="email" @if(isset($email)) value="{{ $email }}" @endif>
					</div>
					<div class="form-group">
						<label for="gender">Jenis Kelamin </label>
						<div class="radio">
							<label>
								<input type="radio" name="gender":checked value="laki-laki" @if(isset($gender) && $gender == "laki-laki") checked @endif>
								Laki-laki
							</label>
						</div>	
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="perempuan" @if(isset($gender) && $gender == "perempuan") checked @endif>
								Perempuan
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="other" @if(isset($gender) && $gender == "other") checked @endif>
								Other
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="senjata">Senjata Pilihan </label><br>
						<small>Bisa pilih lebih dari satu</small>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="Muramasa" @if(isset($senjata) && in_array('Muramasa', $senjata)) checked @endif>
								Muramasa
							</label>
						</div>	
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="Masamune" @if(isset($senjata) && in_array('Masamune', $senjata)) checked @endif>
								Masamune
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="Sange & Yasha" @if(isset($senjata) && in_array('Sange & Yasha', $senjata)) checked @endif>
								Sange & Yasha
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="ChunChunMaru" @if(isset($senjata) && in_array('ChunChunMaru', $senjata)) checked @endif>
								ChunChunMaru
							</label>
						</div>
					</div>
					<button type="submit" name="submit" class="btn btn-warning">Submit</button>
				</form>
				<br>
				<br>
				@if(isset($nama))
					Halo, {{ $nama }}
				@endif
				<br>
				@if(isset($email))
					Email kamu, {{ $email }}
				@endif
					<br>
				@if(isset($gender))
					Kamu seorang @if($gender == "laki-laki") Laki-laki 
					@elseif($gender == "perempuan") Perempuan
					@else Gak Jelas
					@endif
				@endif
				<br>
				@if(isset($senjata))
					Senjata Pilihan: 
					<br>
					@foreach($senjata as $value)
						-> {{ $value }}
						<br>
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>