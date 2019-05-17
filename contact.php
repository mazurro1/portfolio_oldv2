<section id="contact">
	<div class="container">
		<div class="letter_white">Kontakt</div>
	


		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<?php if( $emailSent == 1){ ?>
			<div class="">
			
				<span>Wiadomość została wysłana</span>
			
			</div>
		<?php } ?>
			<div class="form-group ">



			<?php if($errorName != null) {?>
					<span class="">
						<?php echo $errorName; ?>
					</span>
				<?php } ?>



				<input type="text" id="name" placeholder="IMIĘ ORAZ NAZWISKO" class="form-control" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="form-group">



				<?php if($errorEmail != null) {?>
					<span class="">
						<?php echo $errorEmail; ?>
					</span>
				<?php } ?>



				<input type="email" id="email" placeholder="E-MAIL" class="form-control" name="email" value="<?php echo $email; ?>">
			</div>
			 <div class="form-group">



			 <?php if($errorText != null) {?>
					<span class="">
						<?php echo $errorText; ?>
					</span>
				<?php } ?>



   	 			<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" placeholder="TREŚĆ WIADOMOŚCI" value="<?php echo $text; ?>"></textarea>
   	 			<small class="form-text text-muted">Proszę o wypełnienie wszystkich pól.</small>
  			</div>
  			<button type="submit" name="send" class="button-contact" data-toggle="tooltip" data-placement="bottom" >Wyślij</button>
		</form>
	
	</div>
</section>