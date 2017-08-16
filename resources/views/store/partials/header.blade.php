@include('store.partials.sidebar')
<nav class="navbar navbar-default"> <!-- navbar-fixed-top -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MAX</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#" onclick="openNav()">Productos</a></li>
        <li><a href="#">Conócenos</a></li>
        <li><a href="{{route('contact-us')}}">Contacto</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input class="form-control" placeholder="Introduzca su búsqueda" type="text">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
        @include('store.partials.menu-user')
        <!-- <li><a href="#">Link</a></li> -->
      </ul>
    </div>
  </div>
</nav>