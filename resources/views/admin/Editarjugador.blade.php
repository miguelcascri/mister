@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('UpdatePlayer', $player->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 3%">
                    <input type="text" class="form-control" placeholder="Nombre" value="{{ $player->nombre }}"
                        name="nombre">
                </div>
                <div class="col-md-12" style="margin-bottom: 3%">
                    <input type="text" class="form-control" placeholder="Apellidos" value="{{ $player->apellidos }}"
                        name="apellidos">
                </div>
                <div class="col-md-12" style="margin-bottom: 3%">
                    <label> Dinero restante</label>
                    <input type="number" class="form-control" placeholder="10" value="{{ $player->pagado }}"
                        name="pagado">
                </div>
                <div class="col-md-12" style="margin-bottom: 3%">
                    <select class="form-select" name="state" aria-label="Default select example">

                        @if ($player->state == 0)
                            <option  value="0">Deuda</option>
                            <option value="1">Pagado</option>
                        @elseif($player->state == 1)
                            <option value="1">Pagado</option>
                            <option value="0">Deuda</option>
                        @endif
                    </select>
                </div>
                <div style="margin: 0 auto; display:block; text-align: center;">

                    <input type="submit" style="width: 40%" class="btn btn-primary" value="Guardar Cambios">


                    <a class="btn btn-secondary" href="../jugadores">Atras</a>
                </div>


            </div>
        </form>
    </div>
@endsection
