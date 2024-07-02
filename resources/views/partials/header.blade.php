<header>
    <div class="links">
    <a class="@if (Route::currentRouteName() == 'home') active @endif" href="{{ route('home')}}" >HOME</a>
    <a class="@if (Route::currentRouteName() == 'staff') active @endif" href="{{ route('staff')}}" >STAFF</a>
  
    </div>
    <h1 class="text-center p-1" style="color:red">Laravel-Model-Controller</h1>
    <hr style="color: white;">
    
    <span style="color: rgba(255, 255, 255, 0.219);">Attualmente sei in: {{Route::currentRouteName()}}</span>
    <p style="color: rgba(255, 255, 255, 0.219);"> Siamo sulla route: {{route('home')}}</p>
</header> 