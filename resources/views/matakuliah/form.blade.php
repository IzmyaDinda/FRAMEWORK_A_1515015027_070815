<div class="form-group">
	<label class="col-sm-2 control-label">Tittle</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-comtrol','placeholder'=>"Tittle"])!!}
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Keterangan</label>
		<div class="col-sm-10">
		{!! Form::keterangan('keterangan',['class'=>'form-control','placeholder'=>"Keterangan"])}
		</div>
	</div>
	@stop