<?php /* Template Name: Рубрики */ ?>
<?php get_header(); ?>
<div class="main main_header_fixed">
<?php $term = get_field('5763788972', $term); ?>
<?php if (have_posts()) : ?>
<?php query_posts("cat=$term"); ?>
	<div class="goods goods_style">
		<div class="container goods__container">
			<div class="goods__title">
				<h1 class="title"><?php the_title();?></h1>
			</div>
			<div class="goods__layout">
				<?php while (have_posts()) : the_post(); ?>
				<div class="goods__item col_3">
					<?php $image = get_field('6352349462'); ?>
					<?php if (!empty($image)): ?>
					<div class="goods__image" style="background: url(<?php echo $image['url']; ?>) center center no-repeat; background-size: cover;"></div>
					<?php endif; ?>
					<div class="goods__name"><?php the_title(); ?></div>
					<div class="goods__description">
						<div class="list">
							<div class="list__item">
								<div class="list__left">Конструкция:</div>
								<div class="list__right"><?php the_field('4429525559'); ?></div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Двигатель:</div>
								<div class="list__right"><?php the_field('5836386566'); ?></div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Рабочая высота:</div>
								<div class="list__right"><?php the_field('7658782385'); ?> м.</div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Грузоподъемность:</div>
								<div class="list__right"><?php the_field('8258887273'); ?> кг.</div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Габариты платформы:</div>
								<div class="list__right"><?php the_field('8525955583'); ?> м.</div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Габариты подъемника:</div>
								<div class="list__right"><?php the_field('5875996875'); ?> м.</div>
								<div class="list__line"></div>
							</div>
							<div class="list__item">
								<div class="list__left">Вес:</div>
								<div class="list__right"><?php the_field('4989572983'); ?> кг.</div>
								<div class="list__line"></div>
							</div>
						</div>
					</div>
					<div class="goods__offer">
						<div class="goods__price">
							<?php if (get_field('6248987445')): ?>
							<div class="price">
								<span class="price__amount">от <?php the_field('6248987445'); ?></span>
								<span class="price__currency">руб. / сутки</span>
							</div>
							<?php endif; ?>
						</div>
						<div class="goods__button">
							<button type="button" class="button button_theme_orange js-call-modal">Заказать</button>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php if (get_field('8534928865')): ?>
<div class="article-rubric article-rubric_style">
	<div class="container article-rubric__container">
	<?php the_field('8534928865'); ?>
	</div>
</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
