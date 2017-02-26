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

				<!-- 1 панель 5 класс -->
				<div class="panel panel-primary">
					<!-- Заголовок -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseOne">
						<h4 class="panel-title">Математика 5 класс</h4>
					</a>
					<!-- Содержимое -->
					<div id="collapseOne" class="panel-collapse collapse
						<?php if($cats[0]->cat_ID === 31) echo ' in' ?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-5/start-work-5/">Входная контрольная работа</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/25/articles/school-math/math-5/itog-kontrol-work5/">Итоговая контрольная работа</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/25/articles/school-math/math-5/obyknovennye-drobi/">Урок презентация "Обыкновенные дроби"</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-5/slozhenie-vychitanie-smeshannyx-chisel/">Урок презентация "Сложение и вычитание смешанных чисел"</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- 2 панель 6 класс -->
				<div class="panel panel-primary">
					<!-- Заголовок -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseTwo">
						<h4 class="panel-title">Математика 6 класс</h4>
					</a>
					<!-- Содержимое 1 панели -->
					<div id="collapseTwo" class="panel-collapse collapse
						<?php if($cats[0]->cat_ID === 15) echo ' in' ?>">
						<div class="panel-body">
							<ul>
								<li><a
									href="http://matemati4ka.esy.es/2017/02/25/articles/school-math/math-6/start-kontrol-work6/">Входная контрольная работа</a></li>
								<li><a
									href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-6/work-programm-6/">Рабочая программа</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- 3 панель 7 класс -->
				<div class="panel panel-primary">
					<!-- Заголовок 2 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseThree">
						<h4 class="panel-title">Математика 7 класс</h4>
					</a>
					<!-- Содержимое 2 панели -->
					<div id="collapseThree" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 33) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-7/start-kontrol-algebra-7/">Стартовая контрольная работа по алгебре</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-7/work-programm-geometry-7/">Рабочая программа по геометрии 7 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-7/work-programm-algebra-7/">Рабочая программа по алгебре 7 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-7/work-programm-geometry-7-9/">Рабочая программа по геометрии 7-9 классы</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/14/articles/school-math/math-7/work-programm-algebra-7-9/">Рабочая программа по алгебре 7-9 классы</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- 4 панель 8 класс -->
				<div class="panel panel-primary">
					<!-- Заголовок 3 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseFour">
						<h4 class="panel-title">Математика 8 класс</h4>
					</a>
					<!-- Содержимое 3 панели -->
					<div id="collapseFour" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 34) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-8/start-work-algebra-8/">Стартовая контрольная работа по алгебре 8 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-8/work-programm-geometry-8/">Рабочая программа по геометрии 8 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-8/work-programm-algebra-8/">Рабочая программа по алгебре 8 класс</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- 5 панель 9 класс -->
				<div class="panel panel-primary">
					<!-- Заголовок 3 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseFive">
						<h4 class="panel-title">Математика 9 класс</h4>
					</a>
					<!-- Содержимое 3 панели -->
					<div id="collapseFive" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 35) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-9/start-work-algebra-9/">Стартовая контрольная работа по алгебре 9 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-9/work-programm-geometry-9/">Рабочая программа по геометрии 9 класс</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/math-9/work-programm-algebra-9/">Рабочая программа по алгебре 9 класс</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- 6 панель КВН -->
				<div class="panel panel-primary">
					<!-- Заголовок 3 панели -->
					<a class='panel-heading' data-toggle="collapse"
					   data-parent="#accordion" href="#collapseSix">
						<h4 class="panel-title">Занимательная математика</h4>
					</a>
					<!-- Содержимое 3 панели -->
					<div id="collapseSix" class="panel-collapse collapse <?php if($cats[0]->cat_ID === 32) echo 'in'?>">
						<div class="panel-body">
							<ul>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/kvn/kvn-5/">Математический КВН в 5 классе</a></li>
								<li><a
										href="http://matemati4ka.esy.es/2017/02/26/articles/school-math/kvn/math-kvn-5-6/">Математический КВН между 5 и 6 классами</a></li>
							</ul>
						</div>
					</div>
				</div

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
