<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrito</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


 <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




</head>
<body>
       





<!-- nabvar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Página</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito();"><i class="fas fa-shopping-cart"></i> Mi Carrito</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="buscar" name="buscar" onkeyup="buscar_ahora($('#buscar').val());" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>












<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<div class="modal-body">
				<div>
					<div class="p-2">
					

              <div id="mi_carrito"></div>


					</div>
				</div>
			</div>
      <div class="modal-footer">
      <p>Comprado</p><a type="button" class="btn btn-primary" class="link" href="indexx.php" onclick="borrar_carrito();"> Borrar y Regresar</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->






<!-- articulos -->
<div class="album py-5 bg-light">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col-4">
        <div class="card shadow-sm">
          <br>
          <img src="img/images2.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Flamint</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref1').val(),$('#titulo1').val(),$('#precio1').val(),$('#cantidad1').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref1" value="1" />                           
                <input name="precio" type="hidden" id="precio1" value="60" />
                <input name="titulo" type="hidden" id="titulo1" value="Flamint" />
                <input name="cantidad" type="hidden" id="cantidad1" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$60</small>
            </div>
            </div>
            </div>
            </div>

          <div class="col-4">
        <div class="card shadow-sm">
          <br>
          <img src="img/images3.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Esquite</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
               
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref2').val(),$('#titulo2').val(),$('#precio2').val(),$('#cantidad2').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref2" value="2" />                           
                <input name="precio" type="hidden" id="precio2" value="40" />
                <input name="titulo" type="hidden" id="titulo2" value="Esquite" />
                <input name="cantidad" type="hidden" id="cantidad2" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$40</small>
            </div>
            </div>
            </div>
            </div>

  
          <div class="col-4">
        <div class="card shadow-sm">
          <br>
          <img src="img/images4.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Sabrimecha</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref3').val(),$('#titulo3').val(),$('#precio3').val(),$('#cantidad3').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref3" value="3" />                           
                <input name="precio" type="hidden" id="precio3" value="70" />
                <input name="titulo" type="hidden" id="titulo3" value="Sabrimecha" />
                <input name="cantidad" type="hidden" id="cantidad3" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$70</small>
            </div>
</div>
</div>
</div>


          <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images5.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Takielote</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref4').val(),$('#titulo4').val(),$('#precio4').val(),$('#cantidad4').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref4" value="4" />                           
                <input name="precio" type="hidden" id="precio4" value="85" />
                <input name="titulo" type="hidden" id="titulo4" value="Takielote" />
                <input name="cantidad" type="hidden" id="cantidad4" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$85</small>
            </div>
</div>
</div>
</div>


          <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images6.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Elote Entero Sencillos</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref5').val(),$('#titulo5').val(),$('#precio5').val(),$('#cantidad5').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref5" value="5" />                           
                <input name="precio" type="hidden" id="precio5" value="45" />
                <input name="titulo" type="hidden" id="titulo5" value="Elote Entero Sencillos" />
                <input name="cantidad" type="hidden" id="cantidad5" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$45</small>
            </div>
</div>
</div>
</div>


          <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images7.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Toestielote</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref6').val(),$('#titulo6').val(),$('#precio6').val(),$('#cantidad6').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref6" value="6" />                           
                <input name="precio" type="hidden" id="precio6" value="60" />
                <input name="titulo" type="hidden" id="titulo6" value="Toestielote" />
                <input name="cantidad" type="hidden" id="cantidad6" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$60</small>
            </div>
</div>
</div>
</div>


          <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images8.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Eloteloco</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref7').val(),$('#titulo7').val(),$('#precio7').val(),$('#cantidad7').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref7" value="7" />                           
                <input name="precio" type="hidden" id="precio7" value="110" />
                <input name="titulo" type="hidden" id="titulo7" value="Eloteloco" />
                <input name="cantidad" type="hidden" id="cantidad7" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$110</small>
            </div>
</div>
</div>
</div>


          <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images9.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Rufelotes</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
          
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref8').val(),$('#titulo8').val(),$('#precio8').val(),$('#cantidad8').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref8" value="8" />                           
                <input name="precio" type="hidden" id="precio8" value="95" />
                <input name="titulo" type="hidden" id="titulo8" value="Rufelotes" />
                <input name="cantidad" type="hidden" id="cantidad8" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$95</small>
            </div>
</div>
</div>
</div>

<div class="col-4">
        <div class="card shadow-sm">
          <img src="img/images10.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Mechuda</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref9').val(),$('#titulo9').val(),$('#precio9').val(),$('#cantidad9').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref9" value="9" />                           
                <input name="precio" type="hidden" id="precio9" value="90" />
                <input name="titulo" type="hidden" id="titulo9" value="Mechuda" />
                <input name="cantidad" type="hidden" id="cantidad9" value="1" class="pl-2" />
              </div>
              <small class="text-muted">$90</small>
            </div>
          </div>
          </div>
          </div>


<!-- mandamos al carrito -->
<script type="text/javascript">
function envia_carrito(ref,titulo,precio,cantidad) {
  var parametros = {"ref":ref,"titulo":titulo,"precio":precio,"cantidad":cantidad};
     $.ajax({
    data:parametros,
    url:'cart.php',
    type: 'POST',
    beforeSend: function () {
     
    },
    success: function (response) {  
        
// todo ok
        
    },
    error: function (response, error) {
     
  //error

    }
});
}
</script>

<!-- consultamos nuestro carrito -->
<script type="text/javascript">
        function consultar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'modal_carrito.php',
        success: function(data) {
        document.getElementById("mi_carrito").innerHTML = data;
        }
        });
        }
</script>


<!-- borrar carro -->
<script type="text/javascript">
        function borrar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'borrarcarro.php',
        success: function(data) {
        
          consultar_carrito();

        }
        });
        }
</script>









        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


</body>
</html>