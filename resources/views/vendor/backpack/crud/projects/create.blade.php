@extends(backpack_view('blank'))

@section('content')
<div class="container create-project">
    <div class="row create-project-header">
        <div class="header-section">
            <div class="page-title">Nuevo proyecto</div>
        </div>
    </div>

    <div class="row create-project-content">
          <div class="row header">
              <div class="section">
                  <span>1</span>

                  <span>Información básica</span>
              </div>

              <div class="section">
                  <span>2</span>

                  <span>Equipo responsable</span>
              </div>

              <div class="section">
                  <span>3</span>

                  <span>Base de datos</span>
              </div>
          </div>

          <div class="row form">
              <form method="post" action="{{ url('/admin/project') }}">
              {!! csrf_field() !!}

                  <div class="section">
                      <div class="section-title">
                          <span>1</span>
                          
                          <span>Completa la información básica del proyecto.</span>
                        </div>

                      <div class="section-content space-evenly">
                          <input type="text" id="name" name="name" placeholder="Nombre del proyecto" />

                          <input type="text" id="code" name="code" placeholder="Código del projecto" />

                          <input type="text" id="client" name="client" placeholder="Cliente" />

                          <input type="date" id="deadline" name="deadline" />
                      </div>
                  </div>

                  <div class="section">
                      <div class="section-title">
                          <span>2</span>
                          
                          <span>Selecciona los integrantes del proyecto. El colaborador que agregues primero será el responsable del proyecto.</span>
                      </div>

                      <div class="section-content">
                          <select id="project_leader_id" name="project_leader_id" class="form-control select2_from_array" >
                              @foreach($collaborators as $user)
                                  <option value="{{ $user->id }}">{{ $user->email }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>

                  <div class="section">
                      <div class="section-title">
                          <span>3</span>
                          
                          <span>Arrastra un archivo de Excel con los usuarios para la encuesta, o usa los filtros para seleccionar la muestra de nuestra base de datos</span>
                      </div>

                      <div class="section-content">
                          <div class="filters"></div>

                          <div>
                              <input type="number" id="participant_number" name="participant_number" placeholder="Número de participantes" />
                          </div>
                      </div>
                  </div>

                  <div class="section">
                      <button type="submit">Crear proyecto</button>
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection
