@extends('layouts.app2')
@section('seccion')
<main class="fix5">
  <!-- about-area -->
  <section class="login__area-one">
    <div class="container">
      <div class="text-center mb-55">
        <h1 class="text-48-bold">Bienvenido...!!!</h1>
      </div>
      <div class="box-form-login">
        <div class="head-login">
          <h3>Iniciar Sesion</h3>
          <p>Inicia sesión con tu correo electrónico y contraseña</p>
          <div class="form-login">
            <div class="form-group">
              <input type="text" class="form-control account" placeholder="correo electronico" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="contraseña" />
              <span class="view-password"></span>
            </div>
            <div class="box-forgot-pass">
              <label>
                <input type="checkbox" class="cb-remember" value="1" /> Recordarme la contraseña
              </label>
              <a href="forgot-password">Has olvidado tu contraseña ?</a>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-login" value="Iniciar Sesion" />
            </div>
            <p>¿No tienes una cuenta? <a href="register" class="link-bold">Inscribirse</a> ahora</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-area-end -->
</main>
@endsection