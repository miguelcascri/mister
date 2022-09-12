@extends('admin.layouts.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Pagado</th>
                                {{-- <th scope="col">Pagado</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Allplayer as $item)
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">{{ $item->nombre }}</th>
                                    <td style="vertical-align: middle;">{{ $item->apellidos }}</td>
                                    <td style="vertical-align: middle;">{{ $item->pagado }}€</td>
                                    {{-- @if ($item->state == 0)
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
                                        @endif --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <h4> Ultimos de la Jornada {{$integer}} </h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                            <tr>
                                <th scope="row" style="vertical-align: middle;">12º</th>
                                <td> {{ $name12[0] -> nombre}} {{$name12[0] -> apellidos}} </td>
                            </tr>
                            <tr>
                                <th scope="row" style="vertical-align: middle;">13º</th>
                                <td>{{ $name13[0] -> nombre}} {{$name13[0] -> apellidos}}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="vertical-align: middle;">14º</th>
                                <td>{{ $name14[0] -> nombre}} {{$name14[0] -> apellidos}}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="vertical-align: middle;">15º</th>
                                <td>{{ $name15[0] -> nombre}} {{$name15[0] -> apellidos}}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="vertical-align: middle;">16º</th>
                                <td>{{ $name16[0] -> nombre}} {{$name16[0] -> apellidos}}</td>
                            </tr>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
