<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h3>
		</div>
		<div class="panel-body">
			<p><?php echo ((isset($this->_rootref['L_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_FRIENDS_EXPLAIN'] : ((isset($user->lang['FRIENDS_EXPLAIN'])) ? $user->lang['FRIENDS_EXPLAIN'] : '{ FRIENDS_EXPLAIN }')); ?></p>
			<fieldset>
				<div class="form-horizontal">
					<?php if ($this->_rootref['ERROR']) {  ?><p class="alert alert-danger"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></p><?php } ?>

					<div class="form-group">
						<label class="control-label col-md-4" <?php if ($this->_rootref['S_USERNAME_OPTIONS']) {  ?>for="usernames"<?php } ?>><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS'])) ? $this->_rootref['L_YOUR_FRIENDS'] : ((isset($user->lang['YOUR_FRIENDS'])) ? $user->lang['YOUR_FRIENDS'] : '{ YOUR_FRIENDS }')); ?>:</label>
						<div class="col-md-8">
							<?php if ($this->_rootref['S_USERNAME_OPTIONS']) {  ?>

								<select name="usernames[]" id="usernames" multiple="multiple" size="5"><?php echo (isset($this->_rootref['S_USERNAME_OPTIONS'])) ? $this->_rootref['S_USERNAME_OPTIONS'] : ''; ?></select>
							<?php } else { ?>

								<p class="form-control-static"><?php echo ((isset($this->_rootref['L_NO_FRIENDS'])) ? $this->_rootref['L_NO_FRIENDS'] : ((isset($user->lang['NO_FRIENDS'])) ? $user->lang['NO_FRIENDS'] : '{ NO_FRIENDS }')); ?></p>
							<?php } ?>

							<span class="help-block"><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_YOUR_FRIENDS_EXPLAIN'] : ((isset($user->lang['YOUR_FRIENDS_EXPLAIN'])) ? $user->lang['YOUR_FRIENDS_EXPLAIN'] : '{ YOUR_FRIENDS_EXPLAIN }')); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4" for="add"><?php echo ((isset($this->_rootref['L_ADD_FRIENDS'])) ? $this->_rootref['L_ADD_FRIENDS'] : ((isset($user->lang['ADD_FRIENDS'])) ? $user->lang['ADD_FRIENDS'] : '{ ADD_FRIENDS }')); ?>:</label>
						<div class="col-md-8">
							<textarea name="add" id="add" rows="3" cols="30" class="form-control"><?php echo (isset($this->_rootref['USERNAMES'])) ? $this->_rootref['USERNAMES'] : ''; ?></textarea>
							<div class="spacer"></div>
							<a class="btn btn-default btn-sm btn-primary" href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a>
							<span class="help-block"><?php echo ((isset($this->_rootref['L_ADD_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_ADD_FRIENDS_EXPLAIN'] : ((isset($user->lang['ADD_FRIENDS_EXPLAIN'])) ? $user->lang['ADD_FRIENDS_EXPLAIN'] : '{ ADD_FRIENDS_EXPLAIN }')); ?></span>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="panel-footer">
			<fieldset class="submit-buttons">
				<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

				<input type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-danger" />
				<input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-success" />
				<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

			</fieldset>
		</div>
	</div>
</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>