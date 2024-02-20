@extends('plantilla')

@section('titulo')
    Editar Permisos
@endsection

@section("scripts")
<script src="{{asset("js/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection


@section("css")
    <style media="screen">
        .text {   
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.7); 
        }

        .btn {
            margin-left: 10px;
            margin-right: 10px;
        }

        .btn-primary {
            font-family: Raleway-SemiBold;
            font-size: 13px;
            color: rgba(58, 133, 191, 0.75);
            letter-spacing: 1px;
            line-height: 15px;
            border: 2px solid rgba(58, 133, 191, 0.75);
            border-radius: 40px;
            background: transparent;
            transition: all 0.3s ease 0s;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }
        .btn-primary:hover {
            color: #FFF;
            background: rgba(58, 133, 191, 0.75);
            border: 2px solid rgba(58, 133, 191, 0.75);
        }

        .btn-secondary {
            font-family: Raleway-SemiBold;
            font-size: 13px;
            color: rgba(203, 62, 52, 0.75);
            letter-spacing: 1px;
            line-height: 15px;
            border: 2px solid rgba(191, 62, 58, 0.75);
            border-radius: 40px;
            background: transparent;
            transition: all 0.3s ease 0s;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }
        .btn-secondary:hover {
            color: #FFF;
            background: rgba(203, 62, 52, 0.75);
            border: 2px solid rgba(191, 62, 58, 0.75);
        }

    
        .card-header{
            background: #1488CC;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
            color:white;
            }

            .valid-feedback {
                display: none;
                width: 100%;
                margin-top: .25rem;
                font-size: 80%;
                color: #28a745;
            }

    </style>
@endsection



@section('contenido')


<div style="height: 50px;"></div>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-12 col-md-8 text-center"><h4>EDITAR PERMISO</h4></div>
                            <div class="col-6 col-md-4"><a href="{{route('permiso')}}" class="btn btn-info float-right"><i class="fa fa-fw fa-reply-all"></i>Listado</a></div>
                          </div>
                    </div>
                    <div class="card-body">
                            <form action="{{route('actualizar_permiso', ['id' => $data->id])}}" id="form-general" class="needs-validation" method="POST" autocomplete="off">
                            @csrf @method("put")
                            <div class="form-row">
                            
                                    @include('admin.permiso.form')
                                
                            </div>
                            <div class="form-row">
                                <dir class="col-sm-4">
                                    @include('includes.boton-form-editar')
                                </dir>
                                <dir class="col-sm-6">
                                    @include('includes.form-error')
                                    @include('includes.mensaje')
                                </dir>
                            </div>
                            
                            
                            </form>
                    </div>   
                </div>
            </div>       
        </div>                  
    </div>



    
@endsection