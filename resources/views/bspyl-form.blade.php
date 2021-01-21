@extends('layouts.app')
@section('content')
<style>
section{
	color:#000
}
strong{
	color: #dc3545
}
h1{
	text-align: center
}
ul{
	/* list-style:none; */
}
small{
	color: gray;
}
</style>

<section class="ftco-section bg-light">
<div style="text-align:center;margin-top:-95px;">
		<a class="btn btn-danger" href="{{asset('bspyl-home')}}" role="button">BSPYL Home</a>
		<a class="btn btn-danger" href="{{asset('bspyl-about')}}" role="button">BSPYL About</a>
		<a class="btn btn-danger" href="{{asset('bspyl-stages')}}" role="button">BSPYL Stages</a>
</div>
	<div class="container">

		<h1><strong>BSPYL</strong> Form</h1>
		<h3 class="mb-4">We Are Happy To Join Us</h3>
			{!! Form::open(['url'=>'bspyl-form','id'=>'bspylForm','class'=>'form-row','method'=>'POST','enctype'=>"multipart/form-data"]) !!}
			<div class="form-row">
				<div class="form-group col-md-6">
						{!! Form::text('fldName',old('fldName'),['class'=>'form-control','placeholder'=>'Name.... Required','required']) !!}
						
					@if ($errors->has('fldName'))
						<span class="help-block">
							<strong>{{ $errors->first('fldName') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-6 ">
						{!! Form::text('fldEmail',old('fldEmail'),['class'=>'form-control','placeholder'=>'Email.... Required','required']) !!}
					
					@if ($errors->has('fldEmail'))
						<span class="help-block">
							<strong>{{ $errors->first('fldEmail') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-6">
						{!! Form::text('fldAge',old('fldAge'),['class'=>'form-control','placeholder'=>'Age.... Required','required']) !!}

					@if ($errors->has('fldAge'))
						<span class="help-block">
							<strong>{{ $errors->first('fldAge') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-6">
						{!! Form::text('fldUniversity',old('fldUniversity'),['class'=>'form-control','placeholder'=>'University.... Required','required']) !!}
					
					@if ($errors->has('fldUniversity'))
						<span class="help-block">
							<strong>{{ $errors->first('fldUniversity') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-6">
						{!! Form::text('fldFaculty',old('fldFaculty'),['class'=>'form-control','placeholder'=>'Faculty.... Required','required','required']) !!}
					
					@if ($errors->has('fldFaculty'))
						<span class="help-block">
							<strong>{{ $errors->first('fldFaculty') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-3">
						{!! Form::text('fldPhone',old('fldPhone'),['class'=>'form-control','placeholder'=>'Phone.... Required']) !!}
					
					@if ($errors->has('fldPhone'))
						<span class="help-block">
							<strong>{{ $errors->first('fldPhone') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-3">
						{!! Form::text('fldGovernment',old('fldGovernment'),['class'=>'form-control','placeholder'=>'Government.... Required','required']) !!}
					
					@if ($errors->has('fldGovernment'))
						<span class="help-block">
							<strong>{{ $errors->first('fldGovernment') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-sm-12">
						{!! Form::label('How many Years Experience Do You Have ?') !!} 
						{!! Form::text('fldQuestion3',old('fldQuestion3'),['class'=>'form-control','placeholder'=>'# Of Years...... Required' ,'required']) !!}
					
					@if ($errors->has('fldQuestion3'))
						<span class="help-block">
							<strong>{{ $errors->first('fldQuestion3') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-sm-4">
						{!! Form::label('Please Write Your Suggestions.') !!} <small>Optional</small>
						{!! Form::textarea('fldSuggestion',old('fldSuggestion'),['class'=>'form-control','placeholder'=>'Suggestions....']) !!}
					
					@if ($errors->has('fldSuggestion'))
						<span class="help-block">
							<strong>{{ $errors->first('fldSuggestion') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-sm-4">
						{!! Form::label('Why Join Us?') !!} <small>Optional</small>
						{!! Form::textarea('fldQuestion1',old('fldQuestion1'),['class'=>'form-control','placeholder'=>'Why Join Us?......']) !!}

					@if ($errors->has('fldQuestion1'))
						<span class="help-block">
							<strong>{{ $errors->first('fldQuestion1') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-sm-4">
						{!! Form::label('What Are Your Expectations?') !!} <small>Optional</small>
						{!! Form::textarea('fldQuestion2',old('fldQuestion2'),['class'=>'form-control','placeholder'=>'What Are Your Expectations?......']) !!}

					@if ($errors->has('fldQuestion2'))
						<span class="help-block">
							<strong>{{ $errors->first('fldQuestion2') }}</strong>
						</span>
					@endif
				</div>
					{!! Form::submit('Submit',['class'=>'btn btn-danger','id'=>'bspylForm_data','style'=>'width:115px;margin-left:500px;']) !!}
				{!! Form::close() !!}
		</div>
		
		<div class="alert_error">
				<ul>

				</ul>
		</div>
		{{-- @include('layouts.errors') --}}
</div>
</section>

@endsection
