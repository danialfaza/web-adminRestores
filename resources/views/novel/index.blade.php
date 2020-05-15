@extends('layout.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Restoran</h3>
					<div class="right">
						
					
					
						<a href="/novel/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
				

				</div>
					

				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >Nama Restoran</th>
								<th width="500px">Deskripsi</th>
								<th >Alamat</th>
								<th >Jam Buka</th>
								<th >Nomer Telfon</th>
								<th >Gambar</th>
								<th >AKSI</th></tr>
						</thead>
						@foreach($data_novel as $novel)
						<tbody>
							<tr>
								<td>{{$novel->nama_restoran}}</td>
								<td>{{$novel->deskripsi}}</td>
								<td>{{$novel->alamat}}</td>
								<td>{{$novel->jam_buka}}</td>
								<td>{{$novel->telfon}}</td>
								<td><img src="{{asset('images/'.$novel->gambar)}}" width="100" height="130"></td>
								
								<td>
									<a href="/novel/{{$novel->id}}/edit" class="btn btn-warning">Edit</a>
									<a href="/novel/{{$novel->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ? ')" > Delete </a>
								</td></tr>
									@endforeach
										
					</table>
				</div>
			</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
		

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					       <form action="/novel/create" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Restoran</label>
								    <input name="nama_restoran" type="text" class="form-control" id="exampleInputEmail1" placeholder="nama Restoran">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Deskripsi Singkat</label>
								    <input name="deskripsi" type="text" class="form-control" id="exampleInputPassword1" placeholder="deskripsi">
								  </div>

								 
								   <div class="form-group">
								    <label for="exampleInputPassword1">Alamat</label>
								    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="alamat">
								  </div>

								   
								   <div class="form-group">
								    <label for="exampleInputPassword1">Jam Buka</label>
								    <input name="jam_buka" type="text" class="form-control" id="exampleInputPassword1" placeholder="jam operasional">
								  </div>

								   <div class="form-group">
								    <label for="exampleFormControlTextarea1">Gambar</label>
								    <input type="file" name="gambar" class="form-control">
								  </div>

								   <div class="form-group">
								    <label for="exampleFormControlTextarea1">Nomer Telfon</label>
								    <textarea name="telfon" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								  </div>
								
								  <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					       <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
								</form>
					      </div>
					     
					    </div>
					  </div>
@stop
