<header class="header py-3 px-5 bg-black">
  <div class="container-fluid text-white">
      <div class="row py-0 px-5">
          <div class="col text-start">
              <a href="#">
                  <img src="{{ asset("imgTmp/032.png") }}" alt="Logo">
              </a>
          </div>
          <div class="col text-end">
              <!-- Button trigger modal -->
              <button type="button" class="btn-menu btn text-center" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="{{ asset("imgTmp/033.png") }}" alt="Menu">
                  <img src="{{ asset("imgTmp/009.png") }}" alt="MenuB" class="text-white">
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content bg-dark">
                          <div class="container-fluid text-white mt-5 mb-5">
                              <div class="row">
                                  <div class="col-md-2 py-2">
                                      <div class="row">
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/064.png") }}" alt="064" class="w-25" style="filter: invert(100%);">
                                          </div>
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/046.png") }}" alt="046" class="img-fluid">
                                          </div>
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/064.png") }}" alt="064" class="w-25" style="filter: invert(100%);">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-8 py-2" style="background: url('{{ asset('imgTmp/064.png') }}');">
                                      <nav>
                                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><h3>Menú</h3></button>
                                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><h3>Login</h3></button>
                                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><h3>Registro</h3></button>
                                          </div>
                                      </nav>
                                      <div class="tab-content" id="nav-tabContent">
                                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                              <div class="row py-5">
                                                  <div class="col-md-6 mx-auto text-center">
                                                      <h1 class="py-2"><a href="" style="text-decoration: none;">Home</a></h1>
                                                      <h1 class="py-2"><a href="" style="text-decoration: none;">Nosotros</a></h1>
                                                      <h1 class="py-2"><a href="" style="text-decoration: none;">Servicios</a></h1>
                                                      <h1 class="py-2"><a href="" style="text-decoration: none;">Contacto</a></h1>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                              <div class="row py-2">
                                                  <div class="col-md-6 mx-auto text-start">
                                                      <form action="">
                                                          <label for="Correo" class="py-1">Correo </label>
                                                          <input type="email" class="form-control py-1">
                                                          <label for="password" class="py-1">Contraseña </label>
                                                          <input type="password"  class="form-control py-1">
                                                          <input type="submit" class="btn btn-lg btn-primary m-3 text-center" value="Ingresar">
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                              <div class="row py-2">
                                                  <div class="col-md-6 mx-auto text-start">
                                                      <form action="">
                                                          <label for="nombre" class="py-1">Nombre(s) </label>
                                                          <input type="text" class="form-control py-1">
                                                          <label for="apellidos" class="py-1">Apellidos(s) </label>
                                                          <input type="text"  class="form-control py-1">
                                                          <label for="correo" class="py-1">Correo electronico</label>
                                                          <input type="email" class="form-control py-1">
                                                          <label for="password" class="py-1">Contraseña</label>
                                                          <input type="password"  class="form-control py-1">
                                                          <label for="password2" class="py-1">Confirmar Contraseña</label>
                                                          <input type="password"  class="form-control py-1">
                                                          <input type="submit" class="btn btn-lg btn-primary m-3 text-center" value="Registrarse">
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2 py-2">
                                      <div class="row">
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/064.png") }}" alt="064" class="img-fluid w-25" style="filter: invert(100%);">
                                          </div>
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/046.png") }}" alt="046" class="img-fluid">
                                          </div>
                                          <div class="col-md-12 p-0 m-0 text-center">
                                              <img src="{{ asset("imgTmp/064.png") }}" alt="064" class="img-fluid w-25" style="filter: invert(100%);">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>