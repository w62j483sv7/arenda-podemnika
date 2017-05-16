<?php wp_footer(); ?>
<footer class="footer footer_style">
	<div class="footer__container container">
		<div class="footer__layout">
			<div class="footer__item col_4">
				<div class="address">
					<div class="address__icon"></div>
					<div class="address__title">Адрес</div>
					<div class="address__text"><?php the_field('2995984287', 'option'); ?></div>
				</div>
			</div>
			<div class="footer__item col_4">
				<div class="phone">
					<div class="phone__icon"></div>
					<div class="phone__title">Телефон</div>
					<div class="phone__text"><?php the_field('7589449637', 'option'); ?></div>
				</div>
			</div>
			<div class="footer__item col_4">
				<div class="mail">
					<div class="mail__icon"></div>
					<div class="mail__title">Почта</div>
					<div class="mail__text"><?php the_field('6346749959', 'option'); ?></div>
				</div>
			</div>
			<div class="footer__item col_4">
				<div class="hours">
					<div class="hours__icon"></div>
					<div class="hours__title">Часы работы</div>
					<div class="hours__text"><?php the_field('7585725258', 'option'); ?></div>
				</div>
			</div>
		</div>
		<div class="footer__copyright copyright">
			<div class="copyright__text">Copyright © Top Lift Rental 2015 Все права защищены.</div>
		</div>
	</div>
</footer>
<div class="overlay overlay_style js-overlay"></div>
<div class="modal-window modal-window_style js-modal">
	<form action="<?php bloginfo('template_url'); ?>/mail.php" method="POST" name="form" class="form">
		<div class="modal-window__item">
			<input type="text" name="name" class="input" placeholder="Имя:" tabindex="0" required pattern="^[а-яА-ЯёЁ]{3,20}" maxlength="20" title="Поле должно содержать от 3 до 20 букв русского алфавита, без пробелов, цифр и других символов.">
		</div>
		<div class="modal-window__item">
			<input type="tel" name="phone" class="input" placeholder="Телефон:" tabindex="0" required pattern="(\+?\d[- .]*){11}" title="Номер должен начинаться с 8 или +7 далее код оператора и номер телефона">
		</div>
		<div class="modal-window__item">
			<input type="email" name="mail" class="input" placeholder="Почта:" tabindex="0" required pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$">
		</div>
		<div class="modal-window__button">
			<input type="submit" class="button button_responsive button_theme_orange" value="Оставить заявку" tabindex="0">
		</div>
	</form>
	<div class="modal-window__close button js-modal-close">&times;</div>
</div>
</body>
</html>
