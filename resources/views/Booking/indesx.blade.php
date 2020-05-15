@extends('layout.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Boking</h3>
					<div class="right">
						
					
					
						
				

				</div>
					

				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th >Tanggal Boking</th>
								<th >Jam Boking</th>
								<th >Jumlah Orang</th>
								<th >Nama </th>
								<th >AKSI</th></tr>
						</thead>
						@foreach($data_boking as $boking)
						<tbody>
							<tr>
								<td>{{$boking->tanggal}}</td>
								<td>{{$boking->jam}}</td>
								<td>{{$boking->jumlah}}</td>
								<td>{{$boking->nama}}</td>
									
								<td>
									<a href="/boking/{{$boking->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ? ')" > Delete </a>
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
		


@stop
