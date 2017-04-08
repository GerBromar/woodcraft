<div class="container-fluid footer">
		<div class="col-md-offset-1 col-md-5 footerDiv">
			<div class="footerHeaders">
				<h3>Как нас найти?</h3>
			</div>
			<div class="yaDiv">
				<iframe src="https://api-maps.yandex.ru/frame/v1/-/CZhgqE4u" width="560" height="400" frameborder="0"></iframe>
				</div>
		</div>
		<div class="col-md-5 footerDiv">
			<div class="footerHeaders">
				<h3>Сделайте заказ или задайте вопрос</h3>
				<div>
					<form action="send.php" method="POST">
						<p>Заполните, пожалуйста, несколько полей:</p>
						<div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Имя">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Электронная почта">												
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" name="phone" id="phone" placeholder="Номер телефона">												
						</div>
						<div class="form-group">
							<p class="areaText">Комментарий или вопрос:</p>
							<textarea class="form-control" rows="4" name="message"></textarea>
							<button type="submit" name="submit" class="btn btn-default">Отправить</button>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
	<!--Modal window-->

	
	<div id="modal_form">
      <span id="modal_close">X</span>
		<div>
			<form action="send.php" id="modal_form1" method="POST">
				<p>Заполните, пожалуйста, несколько полей, и мы с вами свяжемся:</p>
				<div class="form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Имя">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" id="email" placeholder="Электронная почта">												
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон">												
				</div>
				<div class="form-group">
					<p class="areaText">Комментарий или вопрос:</p>
					<textarea name="message" class="form-control" rows="4"></textarea>
					<button type="submit" name="submit" value="Отправка с формы заказа" class="btn btn-default">Отправить</button>
				</div>
			</form>					
		</div>
	</div>
	<div id="overlay"></div><!-- Пoдлoжкa -->	