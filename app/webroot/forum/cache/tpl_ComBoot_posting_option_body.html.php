<?php if (!defined('IN_PHPBB')) exit; ?><div class="tab-pane active" id="options-tab">
	<fieldset class="form-horizontal">
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox"> 
					<label for="disable_bbcode">
						<input type="checkbox" name="disable_bbcode" id="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="disable_smilies">
						<input type="checkbox" name="disable_smilies" id="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="disable_magic_url">
						<input type="checkbox" name="disable_magic_url" id="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_SIG_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="attach_sig">
						<input type="checkbox" name="attach_sig" id="attach_sig"<?php echo (isset($this->_rootref['S_SIGNATURE_CHECKED'])) ? $this->_rootref['S_SIGNATURE_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_ATTACH_SIG'])) ? $this->_rootref['L_ATTACH_SIG'] : ((isset($user->lang['ATTACH_SIG'])) ? $user->lang['ATTACH_SIG'] : '{ ATTACH_SIG }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_NOTIFY_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="notify">
						<input type="checkbox" name="notify" id="notify"<?php echo (isset($this->_rootref['S_NOTIFY_CHECKED'])) ? $this->_rootref['S_NOTIFY_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_NOTIFY_REPLY'])) ? $this->_rootref['L_NOTIFY_REPLY'] : ((isset($user->lang['NOTIFY_REPLY'])) ? $user->lang['NOTIFY_REPLY'] : '{ NOTIFY_REPLY }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_LOCK_TOPIC_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="lock_topic">
						<input type="checkbox" name="lock_topic" id="lock_topic"<?php echo (isset($this->_rootref['S_LOCK_TOPIC_CHECKED'])) ? $this->_rootref['S_LOCK_TOPIC_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_LOCK_TOPIC'])) ? $this->_rootref['L_LOCK_TOPIC'] : ((isset($user->lang['LOCK_TOPIC'])) ? $user->lang['LOCK_TOPIC'] : '{ LOCK_TOPIC }')); ?>

					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_LOCK_POST_ALLOWED']) {  ?>

			<div class="form-group">
				<div class="checkbox">
					<label for="lock_post">
						<input type="checkbox" name="lock_post" id="lock_post"<?php echo (isset($this->_rootref['S_LOCK_POST_CHECKED'])) ? $this->_rootref['S_LOCK_POST_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_LOCK_POST'])) ? $this->_rootref['L_LOCK_POST'] : ((isset($user->lang['LOCK_POST'])) ? $user->lang['LOCK_POST'] : '{ LOCK_POST }')); ?> [<?php echo ((isset($this->_rootref['L_LOCK_POST_EXPLAIN'])) ? $this->_rootref['L_LOCK_POST_EXPLAIN'] : ((isset($user->lang['LOCK_POST_EXPLAIN'])) ? $user->lang['LOCK_POST_EXPLAIN'] : '{ LOCK_POST_EXPLAIN }')); ?>]
					</label>
				</div>
			</div>
		<?php } if ($this->_rootref['S_TYPE_TOGGLE'] || $this->_rootref['S_TOPIC_TYPE_ANNOUNCE'] || $this->_rootref['S_TOPIC_TYPE_STICKY']) {  ?>

			<hr class="dashed" />
		<?php } if ($this->_rootref['S_TYPE_TOGGLE']) {  ?>

			<div class="form-group">
				<div class="radio">
					<label for="topic_type-0"><?php if ($this->_rootref['S_EDIT_POST']) {  echo ((isset($this->_rootref['L_CHANGE_TOPIC_TO'])) ? $this->_rootref['L_CHANGE_TOPIC_TO'] : ((isset($user->lang['CHANGE_TOPIC_TO'])) ? $user->lang['CHANGE_TOPIC_TO'] : '{ CHANGE_TOPIC_TO }')); } else { echo ((isset($this->_rootref['L_POST_TOPIC_AS'])) ? $this->_rootref['L_POST_TOPIC_AS'] : ((isset($user->lang['POST_TOPIC_AS'])) ? $user->lang['POST_TOPIC_AS'] : '{ POST_TOPIC_AS }')); } ?>:</label>
					<?php $_topic_type_count = (isset($this->_tpldata['topic_type'])) ? sizeof($this->_tpldata['topic_type']) : 0;if ($_topic_type_count) {for ($_topic_type_i = 0; $_topic_type_i < $_topic_type_count; ++$_topic_type_i){$_topic_type_val = &$this->_tpldata['topic_type'][$_topic_type_i]; ?>

						<label for="topic_type-<?php echo $_topic_type_val['VALUE']; ?>">
							<input type="radio" name="topic_type" id="topic_type-<?php echo $_topic_type_val['VALUE']; ?>" value="<?php echo $_topic_type_val['VALUE']; ?>"<?php echo $_topic_type_val['S_CHECKED']; ?> />
							<?php echo $_topic_type_val['L_TOPIC_TYPE']; ?>

						</label>
					<?php }} ?>

				</div>
			</div>
		<?php } if ($this->_rootref['S_TOPIC_TYPE_ANNOUNCE'] || $this->_rootref['S_TOPIC_TYPE_STICKY']) {  ?>

			<div class="form-group">
				<label for="topic_time_limit" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_STICK_TOPIC_FOR'])) ? $this->_rootref['L_STICK_TOPIC_FOR'] : ((isset($user->lang['STICK_TOPIC_FOR'])) ? $user->lang['STICK_TOPIC_FOR'] : '{ STICK_TOPIC_FOR }')); ?>:</label>
				<div class="col-md-1">
					<input type="text" name="topic_time_limit" id="topic_time_limit" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['TOPIC_TIME_LIMIT'])) ? $this->_rootref['TOPIC_TIME_LIMIT'] : ''; ?>" class="form-control" />
				</div>
				<div class="col-md-9"><?php echo ((isset($this->_rootref['L_DAYS'])) ? $this->_rootref['L_DAYS'] : ((isset($user->lang['DAYS'])) ? $user->lang['DAYS'] : '{ DAYS }')); ?></div>
				<div class="clearfix"></div>
				<p class="help-block col-md-12"><?php echo ((isset($this->_rootref['L_STICK_TOPIC_FOR_EXPLAIN'])) ? $this->_rootref['L_STICK_TOPIC_FOR_EXPLAIN'] : ((isset($user->lang['STICK_TOPIC_FOR_EXPLAIN'])) ? $user->lang['STICK_TOPIC_FOR_EXPLAIN'] : '{ STICK_TOPIC_FOR_EXPLAIN }')); ?></p>
			</div>
		<?php } if ($this->_rootref['S_EDIT_REASON']) {  ?>

			<div class="form-group">
				<label for="edit_reason" class="col-md-4"><?php echo ((isset($this->_rootref['L_EDIT_REASON'])) ? $this->_rootref['L_EDIT_REASON'] : ((isset($user->lang['EDIT_REASON'])) ? $user->lang['EDIT_REASON'] : '{ EDIT_REASON }')); ?>:</label>
				<div class="col-md-8">
					<input type="text" name="edit_reason" id="edit_reason" value="<?php echo (isset($this->_rootref['EDIT_REASON'])) ? $this->_rootref['EDIT_REASON'] : ''; ?>" class="form-control" />
				</div>
			</div>
		<?php } ?>

	</fieldset>
</div>