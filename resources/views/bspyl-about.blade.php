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
	<a class="btn btn-danger" href="{{asset('bspyl-home')}}" role="button">BSPYL Home</a>
	<a class="btn btn-danger" href="{{asset('bspyl-stages')}}" role="button">BSPYL Stages</a>
	<a class="btn btn-danger" href="{{asset('bspyl-form')}}" role="button">BSPYL Form</a>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<ul>
			<h1><strong style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">مبادرة بسبيل – BSPYL Initiative</strong></h1>
			<li>
هو عبارة عن	<strong>Simulation Project</strong> يقوم بتجهيز محاكاة لسوق العمل والمشاكل التى تواجهنا فى الحياة المهنية ، وكيفية التصرف أمام هذه المشاكل و ما الذى
سينعكس علينا منه عند تطبيق مثل هذه الطريقة ، تنفيذ هذا المشروع كان نابعا مما نشاهد فى الجامعات المصريه من عدم وجود وعى بسوق العمل و و تحدياتة و كذلك  مشكلة الخرجين الذين يصتدمون بالواقع الذى قل فيه  فرص العمل او عند وجودها يجدوا انفسهم  لا يملكون  الحد الأدنى من الإمكانيات التي تؤهلهم للحصول على وظيفه
			</li>
			<br>
			<li>
فظهر الحل من هنا وذلك بتجهز برنامج تأهيلى للشباب يكونوا من خلاله على أتم الاستعداد لبداية مشروع خاص بيهم أو العمل فى شركه تؤمن له الحياه المستقرة
			</li>
			<br>
			<li>
و هذا المشروع أختصار لأسم<strong> Builders Simulation Program for Young Leaders </strong> و هو برنامج محاكاة لتأهيل صغار القادة 
			</li>
			<br>
			<li>
<strong>هدفه</strong> تأهيل الشباب سواء كانوا الطلاب بالجامعة او الخريجين لسوق العمل و مواجهه تحديات العمل المختلفة و إضافة خبرات عملية بجانب التدريب النظرى ، فنحن نستهدف فيه الفئة الشبابية التى يتراوح عمرها<strong> من 18 لـ 30 سنة </strong>، فهو عبارة عن برنامج محاكاة يخدم المجتمع و يهدف هذا البرنامج لتدريب<strong> 1,000,000 متدرب  و 1000 مدرب</strong> وفقا لخطة طموحة تمتد <strong>لمدة خمس سنوات لتشمل كل محافظات مصر</strong>.			
			</li>
			<br>
			<li>يتكون البرنامج من إصدرين  كل عام كل أصدار يستمر لشهرين كاملين يحصل فيهم المتدرب على كل ما يحتاجه من حجم كبير من المعلومات و يصحبه مشاركة خبرات و كذلك العديد من برامج المحاكاه للشركات و تنفيذ مشاريع حقيقه على ارض الواقع.</li>
			<br>
			<li>
				<ul>
					<li style="list-style:outside">الاصدار الاول  : من شهر مارس حتى شهر مايو</li>
					<li style="list-style:outside">الاصدار الثانى : من شهر يوليو حت شهر سبتمر</li>
				</ul>
			</li>
		</ul>




		{{-- 
		<p></p>
		<p>فظهر الحل من هنا وذلك بتجهز برنامج تأهيلى للشباب يكونوا من خلاله على أتم الاستعداد لبداية مشروع خاص بيهم أو العمل فى شركه تؤمن له الحياه المستقرة.</p>
		<p style="direction:rtl">
				و ذلك من منطلق ايمانها بأهيمه دور التطوير و الأرتقاء بالعنصر البشرى الذى يعتبر وحدة اساس المجتمع و من هذه المشاريع :- 
		</p> --}}
	</div>

</section>

@endsection