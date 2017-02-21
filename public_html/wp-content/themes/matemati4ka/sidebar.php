<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matemati4ka
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>

<div class="col-lg-4 col-md-4 col-sm-4">
	<aside id="secondary" class="widget-area" role="complementary">


		<!-- Меню -->

		<h2>Мои наработки</h2>
		<div class="panel-group" id="accordion">

			<?php
			global $post;

			$cats = get_the_category( $post->ID );
			if($cats[0] -> category_parent === 12) { ?>

				<!-- Математика -->
				<!-- 1 панель -->
				<div class="panel panel-primary">
					<!-- Заголовок 1 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseOne">
						<h4 class="panel-title">Математика 6 класс</h4>
					</a>
					<!-- Содержимое 1 панели -->

					<div id="collapseOne" class="panel-collapse collapse
						<?php if($cats[0]->cat_ID === 15) echo ' in' ?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/1-5">Пояснительная
										записка</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/2-5">Общая
										характеристика курса математики</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/3-5">Место
										предмета в учебном плане школы</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/4-4">Личностные,
										метапредметные и предметные результаты освоения курса</a>
								</li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/20/articles/school-math/math-6/soderzhanie-kursa">Содержание
										курса</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/planiruemye-rezultaty-obucheniya">Планируемые
										результаты обучения</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/ocenka">Оценка
										достижения предметных результатов</a></li>
								<li><a
										href=" http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/tematicheskoe-planirovanie">Тематическое
										планирование</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/metodobespechenie">Методическое
										и техническое обеспечение</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- 2 панель -->
				<div class="panel panel-primary">
					<!-- Заголовок 2 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseTwo">
						<h4 class="panel-title">Алгебра 7-9 классы</h4>
					</a>
					<!-- Содержимое 2 панели -->
					<div id="collapseTwo" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 16) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/1-6">Пояснительная
										записка</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/2-6">Общая
										характеристика учебного предмета</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/3-6">Место
										предмета в учебном плане школы</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/4-5">Требования
										к уровню подготовки обучающихся </a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/5-2">Содержание
										курса</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/6-2">Тематическое
										планирование</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/algebra-7_9/7-2">Методическое
										и техническое обеспечение</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- 3 панель -->
				<div class="panel panel-primary">
					<!-- Заголовок 3 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseThree">
						<h4 class="panel-title">Геометрия 7-9 классы</h4>
					</a>
					<!-- Содержимое 3 панели -->
					<div id="collapseThree" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 17) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/1-7">Пояснительная
										записка</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/2-7">Общая
										характеристика учебного предмета</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/3-7">Место
										предмета в учебном плане школы</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/4-6">Требования
										к уровню подготовки обучающихся </a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/5-3">Содержание
										курса</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/6-3">Тематическое
										планирование</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/geometry-7_9/7-3">Методическое
										и техническое обеспечение</a></li>
							</ul>
						</div>
					</div>
				</div>

			<?php
			} else {
				if($cats[0] -> category_parent === 13) { ?>

					<!-- Классное руководство -->
					<!-- 1 панель -->
					<div class="panel panel-primary">
						<!-- Заголовок 1 панели -->
						<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							<h4 class="panel-title">Должностные обязанности классного руководителя</h4>
						</a>
						<!-- Содержимое 1 панели -->
						<div id="collapseOne" class="panel-collapse collapse
							<?php if($cats[0]->cat_ID === 18) echo ' in' ?>">
							<div class="panel-body">
								<ul>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/1-8">Общие положения</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/2-8">Цель и задачи деятельности классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/3-8">Функции классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/4-7">Формы работы классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/5-4">Критерии оценки осуществления функций классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/6-4">Режим работы классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/7-4">Права и обязанности классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/8-2">Ответственность</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/9-2">Права и обязанности директора</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- 2 панель -->
					<div class="panel panel-primary">
						<!-- Заголовок 2 панели -->
						<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							<h4 class="panel-title">Воспитательная система класса "Истоки духовности"</h4>
						</a>
						<!-- Содержимое 2 панели -->
						<div id="collapseTwo" class="panel-collapse collapse
							<?php if($cats[0]->cat_ID === 19) echo ' in' ?>">
							<div class="panel-body">
								<ul>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/1-9">Нормативно-правовая и методологическая основы программы</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/2-9/">Актуальность проблемы духовно-нравственого воспитания школьников</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/3-9/">Этапы реализации программы</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/4-8/">Цели и задачи программы</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/5-5/">Ожидаемые результаты</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/6-5/">Основные направления работы</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/7-5/">Диагностика</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/spirituality-origins/8-3/">Работа с родителями</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- 3 панель -->
					<div class="panel panel-primary">
						<!-- Заголовок 3 панели -->
						<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							<h4 class="panel-title">На заметку</h4>
						</a>
						<!-- Содержимое 3 панели -->
						<div id="collapseThree" class="panel-collapse collapse
							<?php if($cats[0]->cat_ID === 20) echo ' in' ?>">
							<div class="panel-body">
								<ul>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/note/1-10/">Перечень документов классного руководителя</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/note/2-10/">Циклограмма классной работы</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/note/3-10/">Задачи воспитательной деятельности</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/note/4-9/">Перечень возможных дел класса</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/note/5-6/">Памятка классному руководителю</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- 4 панель -->
					<div class="panel panel-primary">
						<!-- Заголовок 4 панели -->
						<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							<h4 class="panel-title">Фотогалерея</h4>
						</a>
						<!-- Содержимое 4 панели -->
						<div id="collapseFour" class="panel-collapse collapse
							<?php if($cats[0]->cat_ID === 21) echo ' in' ?>">
							<div class="panel-body">
								<ul>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/photos/1-11/">февраль 2016</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/photos/2-11/">март 2016</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/photos/3-11/">апрель 2016</a></li>
									<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/photos/maj-2016-goda/">май 2016</a></li>
								</ul>
							</div>
						</div>
					</div>

				<?php
				} else {
					if($cats[0] -> category_parent === 14) { ?>

						<!-- Родителям -->
						<!-- 1 панель -->
						<div class="panel panel-primary">
							<!-- Заголовок 1 панели -->
							<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<h4 class="panel-title">Права несовершеннолетних детей</h4>
							</a>
							<!-- Содержимое 1 панели -->
							<div id="collapseOne" class="panel-collapse collapse
								<?php if($cats[0]->cat_ID === 22) echo ' in' ?>">
								<div class="panel-body">
									<ul>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/%d1%81hildrens-rights/1-2/">Право ребёнка жить и воспитываться в семье</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/%d1%81hildrens-rights/2-2/">Право ребёнка на общение с родителями и другими родственниками</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/%d1%81hildrens-rights/3-2/">Право ребёнка на защиту</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/%d1%81hildrens-rights/4-2/">Право ребёнка выражать свое мнение</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- 2 панель -->
						<div class="panel panel-primary">
							<!-- Заголовок 2 панели -->
							<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<h4 class="panel-title">Права и обязанности родителей</h4>
							</a>
							<!-- Содержимое 2 панели -->
							<div id="collapseTwo" class="panel-collapse collapse
								<?php if($cats[0]->cat_ID === 23) echo ' in' ?>">
								<div class="panel-body">
									<ul>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/parents-duty/1-3/">Равенство прав и обязанностей родителей</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/parents-duty/2-3/">Права несовершеннолетних родителей</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/parents-duty/3-3/">Права и обязанности родителей по воспитанию и образованию детей</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/parents-duty/4-3/">Права и обязанности родителей по защите прав и интересов детей</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- 3 панель -->
						<div class="panel panel-primary">
							<!-- Заголовок 3 панели -->
							<a class='panel-heading' data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								<h4 class="panel-title">Советы психолога</h4>
							</a>
							<!-- Содержимое 3 панели -->
							<div id="collapseThree" class="panel-collapse collapse
								<?php if($cats[0]->cat_ID === 24) echo ' in' ?>">
								<div class="panel-body">
									<ul>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/psychologs-advice/1-4/">Общие рекомендации</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/psychologs-advice/2-4/">10 воспитательных действий для родителей</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/psychologs-advice/3-4/">Как помочь ребёнку достичь успеха в школе</a></li>
										<li><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/psychologs-advice/mogut-roditeli/">Что могут сделать родители</a></li>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}
				}
			}
			?>

		</div>


		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div> <!-- .col-lg-4 -->
