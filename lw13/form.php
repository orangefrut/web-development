<div class="popup-block_hidden popup">
	<div class="record-form">
		<img class="record-image astronaft" src="images/astronaft.webp" loading="auto" width="307px" height="211px">
		<form method="POST" class="form" onsubmit="return false;">
			<p class="sign-up_text">Записаться на курс</p>
			<input class="record-form__name record-place" type="text" name="first_name" placeholder="Ваше имя">
			<input class="record-form__email record-place" type="text" name="email" placeholder="Email">
			<select class="record-form__selector record-place" name="activity">
				<option hidden value="-" >Деятельность</option>
				<option value="Программист">Программист</option>
				<option value="Дизайнер">Дизайнер</option>
				<option value="Маркетолог">Маркетолог</option>
			</select>
			<div class="record-form__label">
				<input class="record-form__checkbox" type="checkbox">
				<label class="label-text_agree" for="record-form__checkbox">Согласен получать информационные материалы о старте курса</label>
			</div>
			<input class="record-form__button" type="submit" value="Записаться на курс">
		</form>
	</div>
	<div class="cross hidden"></div>			
</div>