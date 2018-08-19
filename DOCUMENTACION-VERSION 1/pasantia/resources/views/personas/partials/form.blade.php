<div class="form-group">
	{{ Form::label('dni', 'C.I') }}
	{{ Form::text('dni', null, ['class' => 'form_control']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form_control']) }}
</div>
<div class="form-group">
	{{ Form::label('primerAp', 'Apellido Paterno') }}
	{{ Form::text('primerAp', null, ['class' => 'form_control']) }}
</div>
<div class="form-group">
	{{ Form::label('SegundoAp', 'Apellido Materno') }}
	{{ Form::text('SegundoAp', null, ['class' => 'form_control']) }}
</div>
<div class="form-group">
	{{ Form::label('dirreccion', 'Dirreccion') }}
	{{ Form::text('dirreccion', null, ['class' => 'form_control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'bnt btn-primary']) }}
</div>