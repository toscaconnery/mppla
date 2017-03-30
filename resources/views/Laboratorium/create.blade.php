<div class="col-md-12">
	<div class="col-md-12">
		<h2>Tambahkan Deskripsi</h2>
	</div>
	<div class="col-md-12">

		<form class="" action="" method="POST">
			<div class="col-md-12">
				<h3>Silahkan pilih laboratorium :</h3>
			</div>
			<div class="col-md-12">
				<select name="id_lab">
					@foreach($namaLaboratorium as $list)
						<option value="{{$list->id}}">{{$list->nama_lab}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-12">
				<h3>Silahkan masukkan deskripsi</h3>
			</div>
			<div class="col-md-12">
				<input type="text" name="deskripsi_lab" placeholder="Deskripsi Laboratorium">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
			<div>
				<button type="submit">Simpan</button>
			</div>
		</form>

	</div>
</div>