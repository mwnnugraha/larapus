<div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
	{!! Form::label('title', 'judul', ['class'=>'col-md-2 control-label']) !!}
   <div class="col-md-4">
   		{!! Form::text('title', null, ['class'=>'form-control']) !!}
   		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
   	</div>
</div>


<div class="form-group {!! $errors->has('authors_id') ? 'has-error' : '' !!}">
	{!! Form::label('author_id', 'Penulis', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::submit('author_id', ['=>']+App\Author::pluck('name','id')->all(), null) !!}
		{!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('amount') ? 'has-error' : '' !!}">
	{!! Form::label('amount', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('amount', null, ['class'=>'form-cotrol', 'min'=>I] !!}
		{!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('cover') ? 'has-error' : '' !!}">
	{!! Form::label('cover', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>