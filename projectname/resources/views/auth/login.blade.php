<!-- resources/views/auth/login.blade.php -->
@extends('layouts.plantilla')
@section('content')
    <div class="fondo">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="glass">
                    <p class="title">Plataforma ESE de Estudios Socioeconmicos by Revolution</p>
                    
                    <h1 class="title">Iniciar sesion</h1>
                    <br>
                    <br>
                    <br>
                    <form method="POST" action="/auth/login" role="form">
                        {!! csrf_field() !!}
                    
                        <div class="form-group">
                            <label for="ejemplo_email_1">Correo electronico</label>
                            <input type="email" class="form-control" id="ejemplo_email_1" name="email" value="{{ old('email') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                    
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Recuerdame
                            </label>
                        </div>
                    
                        <div class="col-md-5 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-lg btn-block boton">Entrar</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="link">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    