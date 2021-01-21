@extends('layouts.app')
@section('content')
<style>
section{
	direction: rtl;
	color:#000;
	font-size: 20px;
	text-align: right;
}
section div{
	margin-top: -100px;
}
strong{
	color: #dc3545
}
h1{
	text-align: center
}
ul{
	list-style:none;
}
</style>
<div style="text-align:center;margin-top:10px;">
	<a class="btn btn-danger" href="{{asset('bspyl-about')}}" role="button">BSPYL About</a>
	<a class="btn btn-danger" href="{{asset('bspyl-stages')}}" role="button">BSPYL Stages</a>
	<a class="btn btn-danger" href="{{asset('bspyl-form')}}" role="button">BSPYL Form</a>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<ul>
			<li>
تقدم شركة بيلدرز – <strong style="color:0d4c92 !important;">BUILDERS Company</strong> التى تعمل فى مجال الإستشارات و التدريب و تأهيل الشركات للحصول على الـ <strong>ISO</strong> بعض المشاريع و المبادرات المجتمعية و الخدمية و الخيرية للنهوض   و ذلك من منطلق ايمانها بأهيمه دور التطوير و الأرتقاء بالعنصر البشرى الذى يعتبر وحدة اساس المجتمع و من هذه المشاريع .
			</li>
		</ul>
	</div>
</section>
<br>
<br>
<br>
@include('layouts.ftco-gallery')

@endsection