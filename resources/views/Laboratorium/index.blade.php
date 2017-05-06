<div class="col-md-12">
	<div class="col-md-12">
		<h1>Laboratorium Teknik Informatika</h1>
	</div>
	<div class="col-md-12">
		<h2>Institut Teknologi Sepuluh Nopember</h2>
	</div>
	<br>

	<div class="col-md-12">
		@foreach($laboratorium as $list)
			<div class="col-md-12">
				<h3>{{$list->nama_lab}}</h3>
			</div>
			<div class="col-md-12">
				<p>{{$list->deskripsi_lab}}</p>
			</div>
		@endforeach
	</div>
	<div class="col-md-12">
		<a href="{{url('')}}/tambahkan-deskripsi-laboratorium">Tambahkan Deskripsi Laboratorium</a>
	</div>
</div>