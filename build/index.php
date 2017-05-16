<?php get_header(); ?>
<div class="main main_header_fixed">
<div class="banner banner_style">
	<div class="container banner__container">
		<div class="banner__title">
			<h1 class="title"><?php the_title();?></h1>
			<div class="subtitle">в москве и московской области</div>
		</div>
	</div>
</div>
<div class="advantages advantages_style">
	<div class="container advantages__container">
		<?php if (get_field('6462247928')): ?>
		<div class="advantages__title">
			<div class="title"><?php the_field('6462247928'); ?></div>
		</div>
		<?php endif; ?>
		<?php if (have_rows('9737893594')): ?>
		<div class="advantages__layout">
			<?php while (have_rows('9737893594')) : the_row(); ?>
			<div class="advantages__item col_2">
				<div class="advantage advantage_style">
					<?php if (get_sub_field('6755762847')): ?>
					<div class="advantage__icon"><?php the_sub_field('6755762847'); ?></div>
					<?php endif; ?>
					<div class="advantage__content">
						<?php if (get_sub_field('2458726672')): ?>
						<div class="advantage__title"><?php the_sub_field('2458726672'); ?></div>
						<?php endif; ?>
						<?php if (get_sub_field('7245898548')): ?>
						<div class="advantage__text"><?php the_sub_field('7245898548'); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="attention attention_style">
	<div class="container attention__container">
		<div class="attention__image"></div>
		<div class="attention__layout">
			<div class="attention__title">Нас рекомендуют друзьям!</div>
			<div class="attention__content">
				<div class="attention__counter">439</div>
				<div class="attention__text">человек за прошлый месяц стали нашими клиентами</div>
			</div>
		</div>
	</div>
</div>
<div class="nav-by-type nav-by-type_style">
	<div class="container nav-by-type__container">
		<?php if (get_field('9267587698')): ?>
		<div class="nav-by-type__title">
			<div class="title">
					<h2 class="title"><?php the_field('9267587698'); ?></h2>
			</div>
		</div>
		<?php endif; ?>
		<?php if (have_rows('2952668873')): ?>
		<div class="nav-by-type__layout">
			<?php while (have_rows('2952668873')) : the_row(); ?>
			<div class="nav-by-type__item col_3">
				<?php $image = get_sub_field('4673233934'); ?>
				<?php if (!empty($image)): ?>
				<div class="nav-by-type__icon">
					<div class="nav-by-type__image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
				</div>
				<?php endif; ?>
				<?php if (get_sub_field('5625277529')): ?>
				<a href="<?php the_sub_field('5563847463'); ?>" class="nav-by-type__link link" title="<?php the_sub_field('4657526595'); ?>">
					<?php the_sub_field('5625277529'); ?>
				</a>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="nav-by-height nav-by-height_style">
	<div class="container nav-by-height__container">
		<?php if (have_rows('9445723678')): ?>
		<div class="nav-by-height__layout">
			<?php while (have_rows('9445723678')) : the_row(); ?>
			<div class="nav-by-height__item col_6">
				<a href="<?php the_sub_field('5964733825'); ?>" class="nav-by-height__link link" title="<?php the_sub_field('9497279977'); ?>"><?php the_sub_field('4382642526'); ?></a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="nav-by-manufacturers nav-by-manufacturers_style">
	<div class="container nav-by-manufacturers__container">
		<?php if (have_rows('9467395498')): ?>
		<div class="nav-by-manufacturers__layout">
			<?php while (have_rows('9467395498')) : the_row(); ?>
			<div class="nav-by-manufacturers__item col_6">
				<a href="<?php the_sub_field('9546574835'); ?>" title="<?php the_sub_field('2375939369'); ?>" class="nav-by-manufacturers__link">
					<?php $image = get_sub_field('3364678925'); ?>
					<?php if (!empty($image)): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="nav-by-manufacturers__img">
					<?php endif; ?>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="cta-1 cta-1_style">
	<div class="container cta-1__container">
		<div class="cta-1__image"></div>
		<div class="cta-1__content">
			<?php if (get_field('6635283845')): ?>
			<div class="cta-1__title"><?php the_field('6635283845'); ?></div>
			<?php endif; ?>
			<?php if (get_field('3286666428')): ?>
			<div class="cta-1__text"><?php the_field('3286666428'); ?></div>
			<?php endif; ?>
			<div class="cta-1__phone">8 (499) 347-07-07</div>
		</div>
	</div>
</div>
<div class="reviews reviews_style">
	<div class="container reviews__container">
		<?php if (get_field('4456288832')): ?>
		<div class="reviews__title">
			<div class="title"><?php the_field('4456288832'); ?></div>
		</div>
		<?php endif; ?>
		<div id="reviews-carousel" class="owl-carousel">
			<?php if (have_rows('7376877456')): ?>
			<?php while (have_rows('7376877456')) : the_row(); ?>
			<div class="reviews__item">
				<?php $image = get_sub_field('5763385564'); ?>
				<?php if (!empty($image)): ?>
				<img src="<?php echo $image['url']; ?>" class="reviews__photo" alt="<?php echo $image['alt']; ?>">
				<?php endif; ?>
				<div class="reviews__content">
					<div class="reviews__author"><?php the_sub_field('5789828777'); ?></div>
					<div class="reviews__text"><?php the_sub_field('6789624643'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="article-about-us article-about-us_style">
	<div class="container article-about-us__container">
		<?php if (get_field('7993989766')): ?>
		<div class="article-about-us__title">
			<div class="title"><?php the_field('7993989766'); ?></div>
		</div>
		<?php endif; ?>
		<div class="article-about-us__text"><?php the_field('5338299297'); ?></div>
	</div>
</div>
<div class="news news_style">
	<div class="news__container container">
		<?php if (get_field('6453847499')): ?>
		<div class="news__title">
			<div class="title"><?php the_field('6453847499'); ?></div>
		</div>
		<?php endif; ?>
		<?php if (have_rows('3536698689')): ?>
		<?php while (have_rows('3536698689')) : the_row(); ?>
		<div class="news__item">
			<div class="news__date"><?php the_sub_field('8493883354'); ?></div>
			<div class="news__text"><?php the_sub_field('5997833474'); ?></div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
