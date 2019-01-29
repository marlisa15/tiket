@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rute
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rute, ['route' => ['rutes.update', $rute->id], 'method' => 'patch']) !!}

                        @include('rutes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection