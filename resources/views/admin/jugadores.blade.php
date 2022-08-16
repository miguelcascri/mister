@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="margin-bottom: 15%;">
                <p class="justify-content-center">
                <h4>LISTA DE JUGADORES</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Pagado</th>
                                <th scope="col">Estado</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Allplayer as $item)
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">{{ $item->nombre }}</th>
                                    <td style="vertical-align: middle;">{{ $item->apellidos }}</td>
                                    <td style="vertical-align: middle;">{{ $item->pagado }}</td>
                                    @if ($item->state == 0)
                                        <td style="vertical-align: middle;">
                                          <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                        </td>
                                    @elseif ($item->state == 1)
                                        <td style="vertical-align: middle;">
                                            <svg style="color: green;" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    @endif

                                    <td>
                                        <a class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a  href="{{ route('editPlayer', $item->id) }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-pencil-square"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#añadirplayer">
                    Añadir Jugador
                </button>

                <!-- Modal -->
                <div class="modal fade" id="añadirplayer" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Jugador</h5>
                                <p data-dismiss="modal">
                                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                            height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg></span>
                                </p>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('newplayer') }}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-5 form-group">
                                            <label for="exampleFormControlInput1" class="text-white">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Nombre" required>
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="exampleFormControlInput1" class="text-white">Apellidos</label>
                                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                                placeholder="Apellidos" required>
                                        </div>

                                    </div><br>
                                    <input type="submit" class="btn btn-primary" value="Añadir jugador"
                                        style="margin: 0 auto; display: block; text-align: center; width: 50%;" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
