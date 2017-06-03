@extends('layouts.app')
@section('content')
	<div class="container">
	    <h1> Guardar tarea </h1>
	    @if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	    {!! Form::open(array('url' => 'tareas/' . $tarea->id, 'method' => $method)) !!}
	    	<div class="form-group">
			    {!! Form::label('titulo', 'Título') !!}
			    {!! Form::text('titulo', $tarea->titulo, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			    {!! Form::label('descripcion', 'Descripción') !!}
			    {!! Form::textarea('descripcion', $tarea->descripcion, ['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
			</div>
			<div class="form-group">
			    {!! Form::label('estado', 'Estado') !!}
			    <select name="estado_id" id="estado_id" class="form-control">			    	
			    	<option value=""> --- </option>
			    	@foreach ($estados as $item)
			    		@if($tarea->id != null && $item->id == $tarea->estado->id)
			    			<option selected="selected" value="{{ $item->id }}"> {{ $item->nombre }} </option>
			    		@else
			    			<option value="{{ $item->id }}"> {{ $item->nombre }} </option>
			    		@endif
					@endforeach
			    </select>
			</div>
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}			
			{!! link_to('tareas', 'Cancelar', ['class' => 'btn btn-danger']) !!}
	    {!! Form::close() !!}
	</div>
@endsection