@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kapal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kapal, ['route' => ['kapals.update', $kapal->id], 'method' => 'patch']) !!}

                        @include('kapals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection