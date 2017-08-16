@extends('store.template')
@section('content')
	<div id="contenedor" class="container text-center"  >
		<!-- <div class="page-header"> -->
			<h1>Conócenos</h1>
		<!-- </div> -->
		<div class="row">
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.4995847972498!2d-99.14726929412633!3d19.412441854379107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f925eed6103d%3A0x245a321091238293!2sMaxi+Distribuci%C3%B3n+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1487623746884" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
					<a href="https://goo.gl/maps/p8u2BuoZRgr">Google maps</a>
			</div>
		</div><hr>
		<p>
			<a class="btn btn-warning" href="{{route('home')}}">
				<i class="fa fa-chevron-circle-left"></i> Regresar
			</a>
		</p>
	</div>
@stop