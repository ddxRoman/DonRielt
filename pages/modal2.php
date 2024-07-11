<div id="openModal" class="section__first__callback_modal">
		<div class="section__first__callback_modal-dialog">
			<div class="section__first__callback_modal-content">
				<div class="section__first__callback_modal-body">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-12 col-sm-12 modal__left-part">
								<div class="row">
									<div class="col-9">
										<h3 class="modal-title">Мы вам перезвоним</h3>
									</div>
									<div class="col-3">
										<a href="#close" title="Close" class="close_btn_hidden">×</a>
									</div>
								</div>
								<form class="section__first__callback_modal_form" action="../php/send-callback-TgBot.php" method="post">
								<div class="form-item">
										<input required type="text" id="person-name" name="name" placeholder="">
										<label class="dance_placeholder" for="person-name">Имя</label>
									</div>
									<div class="form-item">
										<input required id="phone-number" name="phone" type="text" class="mask-phone" placeholder="Номер телефона">
										<label class="dance_placeholder" for="phone-number">Номер телефона</label>
									</div>
									<button class="modal__left-part__confirm_btn" type="submit">Жду звонка</button>
								</form>
							</div>
							<div class="col-lg-5 col-md-12 col-sm-12 h-100 modal__right-part">
								<a href="#close" title="Close" class="close_btn">×</a>
								<div class="modal__right-part_list">
									<ul>
										<li class="callback-list">
											<p>Позвоним в течении 30 минут</p>
										</li>
										<li class="callback-list">
											<p>Поможем с вашим вопросом</p>
										</li>
										<li class="callback-list">
											<p>Пришлём Смс с контактами</p>
										</li>
									</ul>
								</div>
								<div class="modal__right-part_picture">
									<img src="resources/img/pictures/2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
