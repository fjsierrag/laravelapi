@extends('layouts.main')
@section('content')
    <table class="table table-striped" id="datatable">
        <thead>
          <tr><th>CustomerID</th><th>CompanyName</th><th>City</th></tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr data-id="{{ $customer->CustomerID }}">
                <td>{{$customer->CompanyName}}</td>
                <td>{{$customer->City}}</td>
                <td><button class="btn btn-sm btn-success btEditar">Editar</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="vueApp">
        <input type="text" v-model="titulo">
        <h1>@{{titulo}}</h1>
    </div>
@endsection
@section('page-js')
    <script src="{{ asset("libs/vue.js") }}"></script>
    <script>
        let vueApp = new Vue({
            el: '#vueApp',
            data:{
                titulo:"Titulo"
            }
        });
        $(document).ready(function(){
          $("#datatable").dataTable({});
            $("#datatable").on("click",".btEditar",function(e){
                var $e=$(e.target);
                var $padre=$e.closest("tr");
                var idFila=$padre.data("id");
                console.log(idFila);
            });

        });
    </script>
@endsection
