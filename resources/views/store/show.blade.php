@extends('store.template')
@section('content')
	<div id="contenedor" class="container text-center"  >
		<!-- <div class="page-header"> -->
			<h1>{{$product->clave}}</h1>
		<!-- </div> -->
		<div class="row">
			<div class="col-md-6">
				<div class="product-block">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('images/product/'.$product->brand->imagen) }}">
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<img src="{{ asset('images/product/'.$product->flag->imagen) }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<img id="myImg" src="{{ asset('images/product/'.$product->imagen) }}">
						</div>
						<!-- The Modal -->
		                    <div id="myModal" class="modal">
		                        <span class="close">×</span>
		                        <img class="modal-content" id="img01">
		                        <div id="caption"></div>
		                    </div>
		                <!-- Fin The Modal -->
					</div>
					<p>Click en la imagen para ampliar</p>
					<hr>
					<h3><i class="fa fa-shopping-cart"></i> Carrito de compras</h3>
					<div class="table-responsive">
							<table  class="table table-striped table-bordered table-hover text-center">
								<thead>
									<tr>
										<th>CANTIDAD</th>
										<th>IMPORTE</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
								
									<tr>
										<td><input type="number" min="20" value="{{$cart->cantidad}}" id="cant" placeholder="Introduzca la cantidad..." class="busq"> <button id="aca" class="btn btn-primary busq fa fa-refresh"></button></td>
										<!-- <td><input name="importe" type="text" value="{{$cart->precio}}" id="carimporte" size="10" pattern="(\d{3})([\.])(\d{2})" disabled></td> -->
										<td id="impo">${{number_format($cart->precio,2)}}</td>
										<!-- <td> <input name="itotal" type="text" id="itotal" size="10" pattern="(\d{3})([\.])(\d{2})" disabled></td> -->
										<td id="tota">${{number_format($cart->precio * $cart->cantidad,2)}}</td>
										</tr>
								
								</tbody>
							</table>
					</div>
					<a class="btn btn-success agregarCar" data-url={{url("/")}} data-slug="{{$cart->slug}}" data-id="{{$cart->id}}">
						Agregar al Carrito <i class="fa fa-cart-plus"></i> 
					</a>
					<hr>
					<div class="table-responsive">
							<table id="miTabla" class="table table-striped table-bordered table-hover text-center">
								<thead>
									<tr>
										<th>ESCALA</th>
										<th>PRECIO</th>
										<th>IMPRESIÓN</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									@foreach($scalas as $escala)
									<tr>
										<td>{{$escala->escala}}</td>
										<td>${{$escala->precio}}</td>
										<td>${{$escala->precioimp}}</td>
										<td>${{$total=$escala->precio+$escala->precioimp}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-block">
					<h3>{{$product->nombre}}</h3><hr>
					<div class="product-info-panel">
						<p>{{$product->descripcion}}</p>
						<!-- <h3> -->
						<p>Colores: {{$product->colores}}</p>
						<p>Medidas: {{$product->medidas}}</p>
						<p>Material: {{$product->material}}</p>
						<p>Status: {{$product->status}}</p>
						<p>Página del catálogo: {{$product->paginacat}}</p>
						<p>Técnica de impresión: {{$product->tecnicaimp}}</p>
						<p>Comentario de impresión: {{$product->impcoment}}</p>
						<p>Adicionales: {{$product->adicionales}}</p>
						<p>Empaque: {{$product->empaque}}</p>
						<p>Piezas por caja: {{$product->pzasxcaja}}</p>
						<p>Medida de la caja: {{$product->medidacaja}}</p>
						<p>Peso por 100 pzas:: {{$product->peso100p}}</p>
							<!-- <span class="label label-success">Precio: ${{ number_format($product->price,2)}}</span> -->
						<!-- </h3> -->
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover text-center">
								<thead>
									<tr>
										<th>ZONA DE IMPRESIÓN</th>
										<th>ÁREA</th>
									</tr>
								</thead>
								<tbody>
									@foreach($zones as $zone)
									<tr>
										<td>{{$zone->zona}}
										</td>
										<td>{{$zone->area}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<p>
							
						</p>
					</div>
				</div>
			</div>
		</div><hr>
		<p>
			<a class="btn btn-warning" href="{{route('home')}}">
				<i class="fa fa-chevron-circle-left"></i> Regresar
			</a>
		</p>
	</div>
@stop