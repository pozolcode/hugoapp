<div class="container dashboard">
    <div class="row">
        <div class="side-nav">
            <div class="nav-logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                </a>
            </div>

            <div class="nav-actions">
                <div>
                <a href="#"><span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>

                   <span class="hidden">Crear projecto</span>
                </a>
                </div>
                
                <div>
                    <a href="/"> <span class="icon"><i class="fa fa-list" aria-hidden="true"></i></span>

                   <span class="hidden">Proyectos en curso</span>
                </a>
                </div>

                <div>
                <a href="/users"><span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>

                    <span class="hidden">Base de datos</span>
                </a>
                </div>
            </div>
        </div>

        <div class="content">@yield('content')</div>
    </div>
</div>
