<h4 class="center-align">Add a new entry to the guestbook.</h1>

<?php echo validation_errors(); ?>

<div class='container'>
	<div class='row'>
		<?php echo form_open('newEntry', 'class=col 12'); ?>
			<div class="row">
                    		<div class="input-field col s12">
                        		<input id="author" name="author" type="text" class="validate">
                        		<label for="author">Name</label>
                    		</div>
                	</div>

                	<div class="row">
                    		<div class="input-field col s12">
                        		<textarea id="text" name="text" class="materialize-textarea"></textarea>
                        		<label for="text">Message</label>
                    		</div>
                	</div>

                	<!-- TODO: Disable submit btn if inputs are empty -->

                	<button class="btn waves-effect waves-light" type="submit">
                    		Submit<i class="material-icons right">send</i>
			</button>
		</form>
	</div>
</div>
