@extends(backpack_view('blank'))

@section('content')
<div class="container doctor-database">
    <div class="row doctor-database-header">
        <div class="header-section">
            <div class="page-title">Base de datos Emocional y Racional</div>

            <div class="searchbar">
                <input type="text" placeholder="Buscar" />

                <div><svg height="18" viewBox="-1 0 136 136.219" width="18"><path d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0 0 55.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 0 0-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" style="stroke:none;fill-rule:nonzero;fill-opacity:1"/></svg></div>
            </div>
        </div>
    </div>

    <div class="row doctor-database-content">
        <div class="table col-12">
            <table>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Práctica privada</th>
                    <th>Práctica pública</th>
                    <th>Estado</th>
                    <th>Teléfono</th>
                    <th>E-mail</th>
                </tr>

                @foreach ($data as $doctor)
                <tr>
                    <td>x</td>
                    <td>{{ $doctor->user->first_name }}</td>
                    <td>{{ $doctor->user->last_name }}</td>
                    <td>{{ $doctor->user->birthday }} {{  (\Carbon\Carbon::now()->year - \Carbon\Carbon::parse($doctor->user->birthday)->year) }} años</td>
                    <td>
                        @foreach($doctor->privatePractices as $practice)
                        - {{ $practice->name }} <br />
                        @endforeach
                    </td>
                    <td>
                        @foreach($doctor->publicPractices as $practice)
                        - {{ $practice->name }} <br />
                        @endforeach
                    </td>
                    <td>{{ $doctor->address1 }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->user->email }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
