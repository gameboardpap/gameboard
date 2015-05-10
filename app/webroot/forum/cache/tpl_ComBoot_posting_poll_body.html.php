<?php if (!defined('IN_PHPBB')) exit; ?><div class="tab-pane" id="poll-tab">
	<?php if ($this->_rootref['S_SHOW_POLL_BOX']) {  ?>

	<p><?php echo ((isset($this->_rootref['L_ADD_POLL_EXPLAIN'])) ? $this->_rootref['L_ADD_POLL_EXPLAIN'] : ((isset($user->lang['ADD_POLL_EXPLAIN'])) ? $user->lang['ADD_POLL_EXPLAIN'] : '{ ADD_POLL_EXPLAIN }')); ?></p>
	<?php } ?>

	<fieldset class="form-horizontal">
	<?php if ($this->_rootref['S_SHOW_POLL_BOX']) {  if ($this->_rootref['S_POLL_DELETE']) {  ?>

			<div class="form-group">
				<label for="poll_delete" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_DELETE'])) ? $this->_rootref['L_POLL_DELETE'] : ((isset($user->lang['POLL_DELETE'])) ? $user->lang['POLL_DELETE'] : '{ POLL_DELETE }')); ?>:</label>
				<div class="col-md-5">
					<label for="poll_delete"><input type="checkbox" name="poll_delete" id="poll_delete"<?php if ($this->_rootref['S_POLL_DELETE_CHECKED']) {  ?> checked="checked"<?php } ?> /></label>
				</div>
			</div>
		<?php } ?>

		<div class="form-group">
			<label for="poll_title" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_QUESTION'])) ? $this->_rootref['L_POLL_QUESTION'] : ((isset($user->lang['POLL_QUESTION'])) ? $user->lang['POLL_QUESTION'] : '{ POLL_QUESTION }')); ?>:</label>
			<div class="col-md-5">
				<input type="text" name="poll_title" id="poll_title" maxlength="255" value="<?php echo (isset($this->_rootref['POLL_TITLE'])) ? $this->_rootref['POLL_TITLE'] : ''; ?>" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="poll_option_text" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_OPTIONS'])) ? $this->_rootref['L_POLL_OPTIONS'] : ((isset($user->lang['POLL_OPTIONS'])) ? $user->lang['POLL_OPTIONS'] : '{ POLL_OPTIONS }')); ?>:</label>
			<div class="col-md-5">
				<textarea name="poll_option_text" id="poll_option_text" rows="5" cols="35" class="form-control"><?php echo (isset($this->_rootref['POLL_OPTIONS'])) ? $this->_rootref['POLL_OPTIONS'] : ''; ?></textarea>
				<span class="help-block"><?php echo ((isset($this->_rootref['L_POLL_OPTIONS_EXPLAIN'])) ? $this->_rootref['L_POLL_OPTIONS_EXPLAIN'] : ((isset($user->lang['POLL_OPTIONS_EXPLAIN'])) ? $user->lang['POLL_OPTIONS_EXPLAIN'] : '{ POLL_OPTIONS_EXPLAIN }')); ?></span>
			</div>
		</div>
		<hr class="dashed" />
		<div class="form-group">
			<label for="poll_max_options" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_MAX_OPTIONS'])) ? $this->_rootref['L_POLL_MAX_OPTIONS'] : ((isset($user->lang['POLL_MAX_OPTIONS'])) ? $user->lang['POLL_MAX_OPTIONS'] : '{ POLL_MAX_OPTIONS }')); ?>:</label>
			<div class="col-md-5">
				<input type="text" name="poll_max_options" id="poll_max_options" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['POLL_MAX_OPTIONS'])) ? $this->_rootref['POLL_MAX_OPTIONS'] : ''; ?>" class="form-control" />
			</div>
			<div class="clearfix"></div>
			<span class="help-block col-md-12"><?php echo ((isset($this->_rootref['L_POLL_MAX_OPTIONS_EXPLAIN'])) ? $this->_rootref['L_POLL_MAX_OPTIONS_EXPLAIN'] : ((isset($user->lang['POLL_MAX_OPTIONS_EXPLAIN'])) ? $user->lang['POLL_MAX_OPTIONS_EXPLAIN'] : '{ POLL_MAX_OPTIONS_EXPLAIN }')); ?></span>
		</div>
		<div class="form-group">
			<label for="poll_length" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_FOR'])) ? $this->_rootref['L_POLL_FOR'] : ((isset($user->lang['POLL_FOR'])) ? $user->lang['POLL_FOR'] : '{ POLL_FOR }')); ?>:</label>
			<div class="col-md-1">
				<input type="text" name="poll_length" id="poll_length" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['POLL_LENGTH'])) ? $this->_rootref['POLL_LENGTH'] : ''; ?>" class="form-control" />
			</div>
			<span class="help-block col-md-9"><?php echo ((isset($this->_rootref['L_DAYS'])) ? $this->_rootref['L_DAYS'] : ((isset($user->lang['DAYS'])) ? $user->lang['DAYS'] : '{ DAYS }')); ?></span>
			<div class="clearfix"></div>
			<span class="help-block col-md-12"><?php echo ((isset($this->_rootref['L_POLL_FOR_EXPLAIN'])) ? $this->_rootref['L_POLL_FOR_EXPLAIN'] : ((isset($user->lang['POLL_FOR_EXPLAIN'])) ? $user->lang['POLL_FOR_EXPLAIN'] : '{ POLL_FOR_EXPLAIN }')); ?></span>
		</div>

		<?php if ($this->_rootref['S_POLL_VOTE_CHANGE']) {  ?>

			<hr class="dashed" />
			<div class="form-group">
				<label for="poll_vote_change" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_VOTE_CHANGE'])) ? $this->_rootref['L_POLL_VOTE_CHANGE'] : ((isset($user->lang['POLL_VOTE_CHANGE'])) ? $user->lang['POLL_VOTE_CHANGE'] : '{ POLL_VOTE_CHANGE }')); ?>:</label>
				<div class="col-md-5">
					<div class="checkbox">
						<label for="poll_vote_change"><input type="checkbox" id="poll_vote_change" name="poll_vote_change"<?php echo (isset($this->_rootref['VOTE_CHANGE_CHECKED'])) ? $this->_rootref['VOTE_CHANGE_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_POLL_VOTE_CHANGE_EXPLAIN'])) ? $this->_rootref['L_POLL_VOTE_CHANGE_EXPLAIN'] : ((isset($user->lang['POLL_VOTE_CHANGE_EXPLAIN'])) ? $user->lang['POLL_VOTE_CHANGE_EXPLAIN'] : '{ POLL_VOTE_CHANGE_EXPLAIN }')); ?></label>
					</div>
				</div>
			</div>
		<?php } } else if ($this->_rootref['S_POLL_DELETE']) {  ?>

			<div class="form-group">
				<label for="poll_delete" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_POLL_DELETE'])) ? $this->_rootref['L_POLL_DELETE'] : ((isset($user->lang['POLL_DELETE'])) ? $user->lang['POLL_DELETE'] : '{ POLL_DELETE }')); ?>:</label>
				<div class="col-md-5">
					<div class="checkbox">
						<label for="poll_delete"><input type="checkbox" name="poll_delete" id="poll_delete"<?php if ($this->_rootref['S_POLL_DELETE_CHECKED']) {  ?> checked="checked"<?php } ?> /> </label>
					</div>
				</div>
			</div>
		<?php } ?>

	</fieldset>
</div>