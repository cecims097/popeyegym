<div class="form-group">
    {!! Form::label('name', 'Nombre del Curso', ) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('costo', 'Costo') !!}
    {!! Form::number('costo', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipo', 'Tipo') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Foto') !!}
    {!! Form::open(array('imagen'=>'create', 'method'=>'POST', 'files'=>true, 'url'=>'images')) !!}
    {!! Form::file('imagen', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>



<div class="form-group">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    
    {!! Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary', 'required' => 'required']) !!}
</div>