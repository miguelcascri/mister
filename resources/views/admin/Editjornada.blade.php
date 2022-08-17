@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('Updatejornada', $jornada->id) }}" method="POST">
            @csrf
            <div class="row">
                <form action="{{ route('nuevajornada') }}" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jornada</label>
                        <input class="form-control" type="number" name="jornada" value="{{ $jornada->jornada }}">
                        <label for="exampleInputEmail1" class="form-label"><b>Puesto 12</b></label>
                        


                        <select class="form-select form-select mb-3" name="puesto12">
                            <option class="bg-success" selected value="{{$name12[0]->id}}">{{ $name12[0] -> nombre}} {{$name12[0] -> apellidos}}</option>
                            @foreach ($Allplayer as $key)
                            
                            <option value="{{ $key->id }}"> {{ $key->nombre }}{{ $key->apellidos }} </option>
                        @endforeach
                        </select>
                        <label for="exampleInputEmail1" class="form-label"><b>Puesto 13</b></label>
                        <select class="form-select form-select mb-3" name="puesto13">
                            <option class="bg-success" selected value="{{$name13[0]->id}}">{{ $name13[0] -> nombre}} {{$name13[0] -> apellidos}}</option>
                            @foreach ($Allplayer as $key)
                                <option value="{{ $key->id }}"> {{ $key->nombre }}{{ $key->apellidos }} </option>
                            @endforeach
                        </select>
                        
                        <label for="exampleInputEmail1" class="form-label"><b>Puesto 14</b></label>
                        <select class="form-select form-select mb-3" name="puesto14">
                            <option class="bg-success" selected value="{{$name14[0]->id}}">{{ $name14[0] -> nombre}} {{$name14[0] -> apellidos}}</option>
                            @foreach ($Allplayer as $key)
                                <option value="{{ $key->id }}">{{ $key->nombre }}{{ $key->apellidos }}</option>
                            @endforeach
                        </select>
                        <label for="exampleInputEmail1" class="form-label"><b>Puesto 15</b></label>
                        <select class="form-select form-select mb-3" name="puesto15">
                            <option class="bg-success" selected value="{{$name15[0]->id}}">{{ $name15[0] -> nombre}} {{$name15[0] -> apellidos}}</option>

                            @foreach ($Allplayer as $key)
                                <option value="{{ $key->id }}">{{ $key->nombre }}{{ $key->apellidos }}</option>
                            @endforeach
                        </select>
                        <label for="exampleInputEmail1" class="form-label"><b>Puesto 16</b></label>
                        <select class="form-select form-select mb-3" name="puesto16">
                            <option class="bg-success" selected value="{{$name16[0]->id}}">{{ $name16[0] -> nombre}} {{$name16[0] -> apellidos}}</option>

                            @foreach ($Allplayer as $key)
                                <option value="{{ $key->id }}">{{ $key->nombre }}{{ $key->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin: 0 auto; display:block; text-align: center;">
                        <a class="btn btn-secondary" href="../clasificacion">Atras</a>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>


                </form>





            </div>
        </form>
    </div>
@endsection
