@extends(backpack_view('blank'))

@section('content')
<div class="container current-projects">
    <div class="row current-projects-header">
        <div class="header-section">
            <div class="page-title">Proyectos en curso</div>

            <div class="searchbar">
                <input type="text" placeholder="Buscar" />

                <div><svg height="18" viewBox="-1 0 136 136.219" width="18"><path d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0 0 55.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 0 0-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" style="stroke:none;fill-rule:nonzero;fill-opacity:1"/></svg></div>
            </div>

            <div class="filter">
                <div>Fecha decendiente</div>
            </div>
        </div>
    </div>

    <div class="row current-projects-content">
        @foreach($data as $project)
        <div class="container project-showcase col-md-3">
            <div>
                <div class="project-title">{{ $project['name'] }}</div>

                <div class="id">{{ $project['code'] }}</div>
            </div>

            <div>
                <div class="project-percentage">0%</div>

                <div class="project-status">0 de 10</div>

                <div class="project-members">x</div>
            </div>

            <div class="progress">
                <div class="progress-bar" style="width: 0%; {{ $project['status_percentage'] == 100 ? 'background-color: #0CD6A0' : '' }}"></div>
            </div>

            <div>
                <div class="metadata">
                    <div class="title">Equipo responsable:</div>

                    <div class="members">
                        <div class="head">
                            <div>x</div>

                            <div>{{ $project['projectLeader']['first_name'] }} {{ $project['projectLeader']['last_name'] }}</div>
                        </div>

                        <div class="collaborators">
                            <div style="text-align: right">x</div>
                        </div>
                    </div>
                </div>

                <div class="project-date">
                    <div class="title">Fecha de entrega:</div>

                    <div class="date">{{ $project['deadline'] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
