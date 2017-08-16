$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

	$('.white-panel').equaliseHeights(); //iguala alturas del grid
			

	$(".hdetalle").click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var url = $(this).data('url');
		var slug= $(this).data('slug');
		window.location.href = url + "/product/" + slug + "/" + 0 + "/" + 0

	});

	$(".edit-item").click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var url = $(this).data('url');
		var slug= $(this).data('slug');
		var precio= $(this).data('precio');
		var cantidad= $(this).data('cantidad');
		//var cantidad = $("#product_" + id).val();
		
		window.location.href = url + "/product/" + slug + "/" + cantidad + "/" + precio

	});

	$(".agregarCar").click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var url = $(this).data('url');
		var slug= $(this).data('slug');
		var canti = $("#cant").val();
		var pre = $("#impo").html();
		cantidad = parseInt(canti);
		prec=pre.substr(1);
		preci = parseFloat(prec);   
		precio = preci.toFixed(2);
		window.location.href = url + "/cart/add/" + slug + "/" + cantidad + "/" + precio

	});		


                    // Get the img modal
                    var modal = document.getElementById('myModal');
                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg');
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    };
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() { 
                        modal.style.display = "none";
                    };
                      
                    //<!-- FIN The img Modal -->



//función que realiza la busqueda
	$(".busq").click(function(e){
		e.preventDefault();
	 
	        //obtenemos el valor insertado a buscar
	        buscar=parseInt($("#cant").prop("value"));
	        //utilizamos esta variable solo de ayuda y mostrar que se encontro
	        encontradoResultado=false;
	        //validamos cantidad mínima
	        minimo=$("#miTabla tr").find('td:eq(0)').html();
	        if(buscar<minimo){
	            alert("La cantidad mínima es: "+minimo);
	        }else{
		        //realizamos el recorrido solo por las celdas que contienen el código, que es la primera
		        importe=$("#miTabla tr").find('td:eq(3)').html();
		        $("#mostrarResultado").html(": "+importe);
		            $("#miTabla tr").find('td:eq(0)').each(function () {
		              //obtenemos el codigo de la celda
		              codigo = $(this).html();
		              //comparamos para ver si el código es igual a la busqueda
		              if(codigo<=buscar){
		                //aqui ya que tenemos el td que contiene el codigo utilizaremos parent para obtener el tr.
		                trDelResultado=$(this).parent();
		                //ya que tenemos el tr seleccionado ahora podemos navegar a las otras celdas con find
		                importe=trDelResultado.find("td:eq(3)").html();
		                encontradoResultado=true;
		               }
		        });
		        
		        importen=importe.substr(1);
		        tot= parseFloat(importen)*buscar;
		        tota = tot.toFixed(2);
		        impor = parseFloat(importen);   
		        imp = impor.toFixed(2); 
		        
		        //$("#itotal").val('$' + parseFloat(tot, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
		        $('#tota').html('$' + parseFloat(tot, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
		        $('#impo').html('$' + parseFloat(imp, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());
		        //$('#cartotal').val(tota);
		        //$("#carimporte").val(importe);
		        //$("#cartotal").val(nuevotota);
		        //mostramos el resultado en el div
		//                    $("#mostrarResultado").html("Encontrado: "+importe);
	        }
	        //si no se encontro resultado mostramos que no existe.
	//        if(!encontradoResultado)
	//        $("#mostrarResultado").html("No encontrado: "+importe);
	});

	

});