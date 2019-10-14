<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/admin/user"> Quản lí tài khoản |<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/admin/Departments">Quản lí phòng ban |</a>
    </div>
  </div>
</nav>

@if (session('erro'))
  
    <div class= "alert alert-danger">
            <p class="banner-text"> {{ session('erro') }}</p>
          </div>
         
        @endif