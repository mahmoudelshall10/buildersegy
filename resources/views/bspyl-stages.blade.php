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
	/* list-style:none; */

}
li ul li {
	list-style:number;
	text-decoration:none
}
span{
	font-weight:bolder;
	text-decoration:underline
}
</style>
<div style="text-align:center;margin-top:10px;">
	<a class="btn btn-danger" href="{{asset('bspyl-home')}}" role="button">BSPYL Home</a>
	<a class="btn btn-danger" href="{{asset('bspyl-about')}}" role="button">BSPYL About</a>
	<a class="btn btn-danger" href="{{asset('bspyl-form')}}" role="button">BSPYL Form</a>
</div>
<section class="ftco-section bg-light">
	<div class="container">
<p>- يقسم كل اصدار  لعدة مراحل تدربية كالاتى:</p>
		<ul>
	    <li style="list-style:square"><span>المرحلة الأولى</span> :  فترة تدريبية  مدتها <strong>10  أيام</strong> سواء منفصلين او متصلين وهذا يكون على حسب توافق مواعيد المدربين والمتدربين  يحصل فيها الطالب على قدر كبير جدا من حجم المعلومات و العلوم المختلفه التي تشمل جميع جوانب سوق العمل و المهارات الشخصية
			<ol>
				<li>ادارة الموارد البشرية : <strong>Human Resources</strong></li>
				<li>ادارة العلاقات العامة :  <strong>Public Relations</strong></li>
				<li>ادارة المشروعات : <strong>Project Management</strong></li>
				<li>ادارة المبيعات : <strong>Sales</strong></li>
				<li>التسويق من خلال قنوات السوشيال ميديا :<strong> Social Media Marketing </strong></li>
				<li>التصميم الجرافيكى :<strong> Graphic Design</strong></li>
				<li>اللغة الانجليزية :<strong> English</strong></li>
			</ol>
		</li>
		<p>فهذه الـ 6 مجالات ، هى قوام أى مؤسسة أو شركة  و لا في هذا القرن أصبحت الركيزه الأساسية التي يقام عليها المشاريع الضخمه و لا مفر من اتقان جزء منها و معرفه تفاصيل بسيطه عنها كلها .</p>
		<span>فيما يلى تفصيل الأيام التدربية الأولى التي حدد كمرحلة أولى للمتدرب .</span>
		<ul>
			<li><span>اليوم الاول</span> : المتدرب هيتعرف  على مؤهلاته وإمكانياته من خلال  نفسه عن طريق اختبارات مثل : اختبار جاسم هارون لتحديد الشخصيات ومن خلال التعمل مع المحطين و مشاركة الخبرات وهذا يتم من خلال جلسات حواريه ونقاشات مع المتدربين الاخرين .</li>
			<br>
			<li><span>اليوم الثانى</span>: المتدرب هيتعلم كيفية الاستفادة من مؤهلاته وامكانياته  وكيفية توجيهها فى الطريق الذى يستفيد منه وهذا من خلال  المهارات الشخصية التى هيتعلمها خلال  التدريب مثل :
				<ul>
					<li style="list-style:square"><span>مهارات الشخصية</span>:
					<ol>
						<li><strong>Communication Skills</strong></li>
						<li><strong>Team building</strong></li>
						<li><strong>Presentation skills</strong></li>
						<li><strong>Leadership Skills</strong></li>
						<li><strong>Decision Making</strong></li>
						<li><strong>Emotional intelligence</strong></li>
					</ol>
					</li>
				</ul>
			</li>
			<li><span>اليوم الثالث</span> : بيدرس المتدرب فيه بعض من اساسيات  <strong>“Human Resources الموارد البشرية“</strong>
					<ol>
						<li>كيفية عمل النظام الداخلى <strong>Internal System</strong></li>
						<li>كيفية عمل  التحليل الوظيفى <strong>Job Analysis</strong></li>
						<li>كيفية حل المشاكل التى تواجهه <strong>Problem Solving</strong></li>
					</ol>
			</li>
			<li><span>اليوم الرابع</span> : المتدرب هيتعلم معنى التسويق واساسياته  وماذا تعنى اخلاقيات التسويق <strong>"Marketing Ethics"</strong>.</li>
			<li><span>اليوم الخامس</span> : هيتعلم فيه المتدرب كيفيه عمل خطة استراتيجية <strong>“Strategic Plan”</strong> قويه للشركة </li>
			<li><span>اليوم السادس</span> : يتعلم المتدرب كيفيه تسويق لنفسه <strong>“Brand Your Self“</strong> وسط المجتمع سواء لوظيفة او كصاحب عمل وكيفيه عمل صفقات <strong>" How to make a deal "</strong></li>
			<li><span>اليوم السابع</span> : هيتعلم المتدرب عمل <strong>Hiring System </strong> للشركة وكيفية عمل <strong>Tracking System</strong>  من اجل تقييم الموظفين ومدى تقدم مستواهم  وفى نهاية اليوم هيتعلم كيفيه عمل   <strong>" Development Plan خطة تطويريه" </strong> للفريق الذى يشارك فيه.</li>
			<li><span>اليوم الثامن</span> : هيتعرف على نماذج للشركات الناجحة وكيفية عمل خطة قويه للشركة وهنتكلم اكثر عن كيفية عمل التوازن بين كل معادلات العمل من تكاليف وفكرة وفريق وغيره .. . وعمل تصور كامل للمشروع  والذى تتضمن تنفيذ الخطة المستقبليه  مدتها تتراوح من <strong> 5 - 10 سنوات</strong> </li>
			<li><span>اليوم التاسع</span> : اليوم قبل الاخير هيتعرف عن كيفية تطوير مهاراته التى اكتسبها  وكيفية المحافظة على مستواه ويستديم نجاحه  .</li>
			<li><span>اليوم العاشر</span> :  اليوم الاخير من المرحلة الاولى للبرنامج  هيكون عبارة عن يوم تجميعى لكل ما تعلمه ودرسه المتدرب ويتعرف عن كيفية استخدام كل الذى تعلمه  لكى يستطيع ان يبدا طريقه الوظيفى <strong>”How to start your career “</strong></li>
		</ul>
		<br>
		<li><span>المرحلة الثانية</span> : يقوم المتدرب الملتحق بالبرنامج  بالعمل الجدى  على مشروع مدتة <strong>50  يوم ، و يقسم تنفيذ هذا المشروع لعدة خطوات</strong> :-
		<ol>
			<li><span>الخطوة الاولى</span> :<strong>  تسمى دائرة حياة بيلدرز – BUILDERS Life Cycle</strong>  و هى  خطوة مهمه جدا فى البرنامج و تعتبر نفطه محواريه فى البرنامج حيث ان المتدرب يخضع لدائرة عمل مركبه و يمر خلالها على جميع اقسام الشركه السالف ذكرها و يتعرف على اساسيات كل اداره و يضع تصور خاص به عن كل اداره و يصحب هذا تقيم مستمر و تتبع لمستوى المتدرب خلال هذه الخطوة.</li>
			<li><span>الخطوة الثانية</span> : وفقا للتقيم القائم فى الخطوة السابقة يتم تقسيم المتدربين فى هذه الخطوة فيما يعرف <strong> باسم دائرة حياة الادارة – Function Life Cycle</strong> فمن خلال التقيم السابق نقسم المتدربين على الادارات المحددة بالاعلى و يقوم المتدرب بالعمل مره اخري فى نموذج محكاه كامل يغطى كل جوانب هذه الاداره ويتقن كل تفاصيل يتم تنفيذها بصوره عملية مشاركا فى المسئوليه وليس كمتدرب . البرنامج مقسم على ثلاث مراحل  ( التدريب – التطبيق – التنفيذ).</li>
		</ol>
		</li>
		<br>
	<p>- ويكتمل هذا البرنامج بزيادة جذب المستثمرين الكبار والمؤسسات التنموية ، وذلك لتمويل البرنامج وإتاحة الفرص للشباب .. للعمل والتدريب فى الشركات الكبرى و كذلك للاستماع و مشاركة العروض الخاصة بالشركات المحاكاه المنفذه وابداء التعليقات عليها</p>
	<p>- و بذلك نكون قد حققنا معدلة النجاح التي تتمثل في وجهه نظرنا كالتالى : <span>( التدريب – التطبيق – التنفيذ )</span></p>
	<p>- الجدير بالذكر أنه قبل المرحلة الأخيرة يتم اختيار خمس اشخاص من من ظهر فيهم القدرة على تعليم و المساعدة و قيادة الاخرين باسلوب يتسم بالاعتدال للحصول على برنامج اضافى خاص بتأهيل <strong>المدربين – TOT</strong>  وهذا ليكونوا من ضمن فريق المدربين الذى يشرف على تدريب الشباب على مستوى البرنامج فى اصدارات لاحقة.</p>
	</ul>
	</div>

</section>

@endsection