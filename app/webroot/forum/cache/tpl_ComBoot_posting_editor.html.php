<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
// <![CDATA[
	onload_functions.push('apply_onkeypress_event()');
// ]]>
</script>


<fieldset>
	<?php if ($this->_rootref['ERROR']) {  ?><p class="alert alert-danger"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></p><?php } ?>

	<div class="form-horizontal">
		<?php if ($this->_rootref['S_PRIVMSGS'] && ! $this->_rootref['S_SHOW_DRAFTS']) {  if ($this->_rootref['S_ALLOW_MASS_PM']) {  if (sizeof($this->_tpldata['to_recipient'])) {  ?>

					<div class="form-group">
						<label class="col-md-2"><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</label>
						<div class="col-md-10 btn-group pm-to">
							<?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if ($_to_recipient_val['IS_GROUP']) {  ?>

									<a href="<?php echo $_to_recipient_val['U_VIEW']; ?>" class="btn btn-default btn-sm"><strong><?php echo $_to_recipient_val['NAME']; ?></strong></a>
								<?php } else { ?>

									<?php echo $_to_recipient_val['NAME_FULL']; ?>

								<?php } if (! $this->_rootref['S_EDIT_POST']) {  ?>

									<input type="submit" name="remove_<?php echo $_to_recipient_val['TYPE']; ?>[<?php echo $_to_recipient_val['UG_ID']; ?>]" value="x" class="btn btn-danger btn-sm" />
								<?php } }} ?>

						</div>
					</div>
				<?php } if (sizeof($this->_tpldata['bcc_recipient'])) {  ?>

					<div class="form-group">
						<label class="col-md-2"><?php echo ((isset($this->_rootref['L_BCC'])) ? $this->_rootref['L_BCC'] : ((isset($user->lang['BCC'])) ? $user->lang['BCC'] : '{ BCC }')); ?>:</label>
						<div class="col-md-10">
							<?php $_bcc_recipient_count = (isset($this->_tpldata['bcc_recipient'])) ? sizeof($this->_tpldata['bcc_recipient']) : 0;if ($_bcc_recipient_count) {for ($_bcc_recipient_i = 0; $_bcc_recipient_i < $_bcc_recipient_count; ++$_bcc_recipient_i){$_bcc_recipient_val = &$this->_tpldata['bcc_recipient'][$_bcc_recipient_i]; if ($_bcc_recipient_val['IS_GROUP']) {  ?>

									<a href="<?php echo $_bcc_recipient_val['U_VIEW']; ?>"><strong><?php echo $_bcc_recipient_val['NAME']; ?></strong></a>
								<?php } else { ?>

									<?php echo $_bcc_recipient_val['NAME_FULL']; ?>

								<?php } if (! $this->_rootref['S_EDIT_POST']) {  ?>

									<input type="submit" name="remove_<?php echo $_bcc_recipient_val['TYPE']; ?>[<?php echo $_bcc_recipient_val['UG_ID']; ?>]" value="x" class="btn btn-danger btn-sm" />
								<?php } }} ?>

						</div>
					</div>
				<?php } if (! $this->_rootref['S_EDIT_POST']) {  ?>

					<div class="form-group">
						<div class="col-md-7 col-md-offset-2">
							<div class="input-group">
								<input id="username_list" name="username_list" class="form-control" cols="50" rows="1"></input>
								<div class="input-group-btn">
									<a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a>
									<button type="submit" name="add_to" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?></button>
									<button type="submit" name="add_bcc" value="<?php echo ((isset($this->_rootref['L_ADD_BCC'])) ? $this->_rootref['L_ADD_BCC'] : ((isset($user->lang['ADD_BCC'])) ? $user->lang['ADD_BCC'] : '{ ADD_BCC }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_ADD_BCC'])) ? $this->_rootref['L_ADD_BCC'] : ((isset($user->lang['ADD_BCC'])) ? $user->lang['ADD_BCC'] : '{ ADD_BCC }')); ?></button>
								</div>
							</div>
						</div>
					</div>
				<?php } } else { ?>

				<div class="form-group">
					<label for="username_list" class="col-md-4 control-label"><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</label>
					<div class="col-md-7">
						<?php if (! $this->_rootref['S_EDIT_POST']) {  ?>

							<span><a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></span>
						<?php } if (sizeof($this->_tpldata['to_recipient'])) {  $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if ($_to_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>"><strong><?php echo $_to_recipient_val['NAME']; ?></strong></a><?php } else { echo $_to_recipient_val['NAME_FULL']; } if (! $this->_rootref['S_EDIT_POST']) {  ?><input type="submit" name="remove_<?php echo $_to_recipient_val['TYPE']; ?>[<?php echo $_to_recipient_val['UG_ID']; ?>]" value="x" class="btn btn-danger btn-mini" /><?php } }} } if (! $this->_rootref['S_EDIT_POST']) {  ?>

							<input class="form-control" type="text" name="username_list" id="username_list" size="20" value="" />
							<input type="submit" name="add_to" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" class="btn btn-success" />
						<?php } ?>

					</div>
				</div>
			<?php } if ($this->_rootref['S_GROUP_OPTIONS']) {  ?>

				<div class="form-group">
					<label for="group_list" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); ?>:</label>
					<div class="col-md-7">
						<select name="group_list[]" id="group_list" multiple="multiple" size="4" class="form-control"><?php echo (isset($this->_rootref['S_GROUP_OPTIONS'])) ? $this->_rootref['S_GROUP_OPTIONS'] : ''; ?></select>
					</div>
				</div>
			<?php } ?>

			<div class="clearfix"></div>
		<?php } if ($this->_rootref['S_DELETE_ALLOWED']) {  ?>

			<div class="form-group">
				<label for="delete" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>:</label>
				<div class="col-md-7">
					<div class="checkbox no-padding">
						<label class="checkbox-inline">
							<input type="checkbox" name="delete" id="delete" /><p class="text-danger"><?php echo ((isset($this->_rootref['L_DELETE_POST_WARN'])) ? $this->_rootref['L_DELETE_POST_WARN'] : ((isset($user->lang['DELETE_POST_WARN'])) ? $user->lang['DELETE_POST_WARN'] : '{ DELETE_POST_WARN }')); ?></p>
						</label>
					</div>
				</div>
			</div>
		<?php } if ($this->_rootref['S_SHOW_TOPIC_ICONS'] || $this->_rootref['S_SHOW_PM_ICONS']) {  ?>

			<div class="form-group">
				<label for="icon" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_ICON'])) ? $this->_rootref['L_ICON'] : ((isset($user->lang['ICON'])) ? $user->lang['ICON'] : '{ ICON }')); ?>:</label>
				<div class="col-md-7">
					<div class="btn-radio-group btn-group">
						<label class="btn btn-sm btn-default btn-radio" for="icon">
							<input type="radio" class="chradio" name="icon" id="icon" value="0" checked="checked" tabindex="1" />
							<?php if ($this->_rootref['S_SHOW_TOPIC_ICONS']) {  echo ((isset($this->_rootref['L_NO_TOPIC_ICON'])) ? $this->_rootref['L_NO_TOPIC_ICON'] : ((isset($user->lang['NO_TOPIC_ICON'])) ? $user->lang['NO_TOPIC_ICON'] : '{ NO_TOPIC_ICON }')); } else { echo ((isset($this->_rootref['L_NO_PM_ICON'])) ? $this->_rootref['L_NO_PM_ICON'] : ((isset($user->lang['NO_PM_ICON'])) ? $user->lang['NO_PM_ICON'] : '{ NO_PM_ICON }')); } ?>

						</label>
						<?php $_topic_icon_count = (isset($this->_tpldata['topic_icon'])) ? sizeof($this->_tpldata['topic_icon']) : 0;if ($_topic_icon_count) {for ($_topic_icon_i = 0; $_topic_icon_i < $_topic_icon_count; ++$_topic_icon_i){$_topic_icon_val = &$this->_tpldata['topic_icon'][$_topic_icon_i]; ?>

							<label class="btn btn-default btn-sm btn-radio" for="icon-<?php echo $_topic_icon_val['ICON_ID']; ?>">
								<input type="radio" class="chradio" name="icon" id="icon-<?php echo $_topic_icon_val['ICON_ID']; ?>" value="<?php echo $_topic_icon_val['ICON_ID']; ?>" <?php echo $_topic_icon_val['S_ICON_CHECKED']; ?> tabindex="1" />
								<img src="<?php echo $_topic_icon_val['ICON_IMG']; ?>" width="<?php echo $_topic_icon_val['ICON_WIDTH']; ?>" height="<?php echo $_topic_icon_val['ICON_HEIGHT']; ?>" alt="" title="" />
							</label> 
						<?php }} ?>

					</div>
				</div>
			</div>
		<?php } if (! $this->_rootref['S_PRIVMSGS'] && $this->_rootref['S_DISPLAY_USERNAME']) {  ?>

			<div class="form-group">
				<label for="username" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label>
				<div class="col-md-7">
					<input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="form-control" />
				</div>
			</div>
		<?php } if ($this->_rootref['S_POST_ACTION'] || $this->_rootref['S_PRIVMSGS'] || $this->_rootref['S_EDIT_DRAFT']) {  ?>

			<div class="form-group">
				<label for="subject" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label>
				<div class="col-md-7">
					<input type="text" class="form-control" name="subject" id="subject" ng-model="subject" size="45" maxlength="<?php if ($this->_rootref['S_NEW_MESSAGE']) {  ?>60<?php } else { ?>64<?php } ?>" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; echo (isset($this->_rootref['DRAFT_SUBJECT'])) ? $this->_rootref['DRAFT_SUBJECT'] : ''; ?>" ng-init="subject = '<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; echo (isset($this->_rootref['DRAFT_SUBJECT'])) ? $this->_rootref['DRAFT_SUBJECT'] : ''; ?>'"/>
				</div>
			</div>
			<?php if ($this->_rootref['CAPTCHA_TEMPLATE'] && $this->_rootref['S_CONFIRM_CODE']) {  $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 3; if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) { $this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']); } } } ?>

		<div class="form-group">
			<div class="col-md-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<?php $this->_tpl_include('posting_buttons.html'); ?>

					</div>
					<div class="panel-body no-padding">
						<div id="message-box">
							<textarea <?php if ($this->_rootref['S_UCP_ACTION'] && ! $this->_rootref['S_PRIVMSGS'] && ! $this->_rootref['S_EDIT_DRAFT']) {  ?>name="signature" id="signature" style="height: 9em;"<?php } else { ?> name="message" id="message"<?php } ?> rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" class="form-control" ng-init="message = '<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; echo (isset($this->_rootref['DRAFT_MESSAGE'])) ? $this->_rootref['DRAFT_MESSAGE'] : ''; ?>'" ng-model="message" ><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; echo (isset($this->_rootref['DRAFT_MESSAGE'])) ? $this->_rootref['DRAFT_MESSAGE'] : ''; echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<?php if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

						<div class="col-sm-6 col-md-12" id="smiley-box" >
							<?php if ($this->_rootref['S_SMILIES_ALLOWED'] && sizeof($this->_tpldata['smiley'])) {  ?>

								<strong><?php echo ((isset($this->_rootref['L_SMILIES'])) ? $this->_rootref['L_SMILIES'] : ((isset($user->lang['SMILIES'])) ? $user->lang['SMILIES'] : '{ SMILIES }')); ?></strong><br/>
								<?php $_smiley_count = (isset($this->_tpldata['smiley'])) ? sizeof($this->_tpldata['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$this->_tpldata['smiley'][$_smiley_i]; ?>

									<a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); return false;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" /></a>
								<?php }} } if ($this->_rootref['S_SHOW_SMILEY_LINK'] && $this->_rootref['S_SMILIES_ALLOWED']) {  ?>

								<br /><a href="<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;"><?php echo ((isset($this->_rootref['L_MORE_SMILIES'])) ? $this->_rootref['L_MORE_SMILIES'] : ((isset($user->lang['MORE_SMILIES'])) ? $user->lang['MORE_SMILIES'] : '{ MORE_SMILIES }')); ?></a>
							<?php } ?>

						</div>
					<?php } ?>

					<div class="col-sm-6 col-md-12">
						<?php if ($this->_rootref['BBCODE_STATUS']) {  ?>

							<div class="visible-lg"><?php if (sizeof($this->_tpldata['smiley'])) {  ?><hr /><?php } ?></div>
							<?php echo (isset($this->_rootref['BBCODE_STATUS'])) ? $this->_rootref['BBCODE_STATUS'] : ''; ?><br />
							<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

								<?php echo (isset($this->_rootref['IMG_STATUS'])) ? $this->_rootref['IMG_STATUS'] : ''; ?><br />
								<?php echo (isset($this->_rootref['FLASH_STATUS'])) ? $this->_rootref['FLASH_STATUS'] : ''; ?><br />
								<?php echo (isset($this->_rootref['URL_STATUS'])) ? $this->_rootref['URL_STATUS'] : ''; ?><br />
							<?php } ?>

							<?php echo (isset($this->_rootref['SMILIES_STATUS'])) ? $this->_rootref['SMILIES_STATUS'] : ''; ?>

						<?php } if ($this->_rootref['S_EDIT_DRAFT'] || $this->_rootref['S_DISPLAY_REVIEW']) {  if ($this->_rootref['S_DISPLAY_REVIEW']) {  ?><hr /><?php } if ($this->_rootref['S_EDIT_DRAFT']) {  ?><a href="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>" class="btn btn-warning"><?php echo ((isset($this->_rootref['L_BACK_TO_DRAFTS'])) ? $this->_rootref['L_BACK_TO_DRAFTS'] : ((isset($user->lang['BACK_TO_DRAFTS'])) ? $user->lang['BACK_TO_DRAFTS'] : '{ BACK_TO_DRAFTS }')); ?></a><?php } if ($this->_rootref['S_DISPLAY_REVIEW']) {  ?><a href="#review" class="btn btn-primary"><?php echo ((isset($this->_rootref['L_TOPIC_REVIEW'])) ? $this->_rootref['L_TOPIC_REVIEW'] : ((isset($user->lang['TOPIC_REVIEW'])) ? $user->lang['TOPIC_REVIEW'] : '{ TOPIC_REVIEW }')); ?></a><?php } } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</fieldset>
<?php if ($this->_tpldata['DEFINE']['.']['EXTRA_POSTING_OPTIONS'] == (1)) {  if ($this->_rootref['S_HAS_ATTACHMENTS']) {  ?>

		<div class="panel panel-warning">
			<div class="panel-heading">
			    <h3 class="panel-title"><?php echo ((isset($this->_rootref['L_POSTED_ATTACHMENTS'])) ? $this->_rootref['L_POSTED_ATTACHMENTS'] : ((isset($user->lang['POSTED_ATTACHMENTS'])) ? $user->lang['POSTED_ATTACHMENTS'] : '{ POSTED_ATTACHMENTS }')); ?></h3>
			</div>
			<div class="panel-body">
				<fieldset>
					<?php $_attach_row_count = (isset($this->_tpldata['attach_row'])) ? sizeof($this->_tpldata['attach_row']) : 0;if ($_attach_row_count) {for ($_attach_row_i = 0; $_attach_row_i < $_attach_row_count; ++$_attach_row_i){$_attach_row_val = &$this->_tpldata['attach_row'][$_attach_row_i]; ?>

						<div class="panel panel-default">
  							<div class="panel-body">
								<div class="form-horizontal">
									<div class="form-group row">
										<div class="col-md-6">
											<a href="<?php echo $_attach_row_val['U_VIEW_ATTACHMENT']; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?> attach-editor" target="_blank"><img src="<?php echo $_attach_row_val['U_VIEW_ATTACHMENT']; ?>" alt="<?php echo $_attach_row_val['FILENAME']; ?>" class="img-responsive" /></a>
										</div>
										<div class="col-md-6">
											<div class="pull-right">
												<?php if ($this->_rootref['S_INLINE_ATTACHMENT_OPTIONS']) {  ?><input type="button" value="<?php echo ((isset($this->_rootref['L_PLACE_INLINE'])) ? $this->_rootref['L_PLACE_INLINE'] : ((isset($user->lang['PLACE_INLINE'])) ? $user->lang['PLACE_INLINE'] : '{ PLACE_INLINE }')); ?>" onclick="attach_inline(<?php echo $_attach_row_val['ASSOC_INDEX']; ?>, '<?php echo $_attach_row_val['A_FILENAME']; ?>');" class="btn btn-warning" /><?php } ?>

												<input type="submit" name="delete_file[<?php echo $_attach_row_val['ASSOC_INDEX']; ?>]" value="<?php echo ((isset($this->_rootref['L_DELETE_FILE'])) ? $this->_rootref['L_DELETE_FILE'] : ((isset($user->lang['DELETE_FILE'])) ? $user->lang['DELETE_FILE'] : '{ DELETE_FILE }')); ?>" class="btn btn-danger" />
											</div>
										</div>
									</div>
									<hr/>
									<div class="form-group">
										<label for="comment_list_<?php echo $_attach_row_val['ASSOC_INDEX']; ?>" class="col-md-2"><?php echo ((isset($this->_rootref['L_FILE_COMMENT'])) ? $this->_rootref['L_FILE_COMMENT'] : ((isset($user->lang['FILE_COMMENT'])) ? $user->lang['FILE_COMMENT'] : '{ FILE_COMMENT }')); ?>:</label>
										<div class="col-md-10">
											<textarea name="comment_list[<?php echo $_attach_row_val['ASSOC_INDEX']; ?>]" id="comment_list_<?php echo $_attach_row_val['ASSOC_INDEX']; ?>" rows="1" cols="35" class="form-control"><?php echo $_attach_row_val['FILE_COMMENT']; ?></textarea>
										</div>
										<?php echo $_attach_row_val['S_HIDDEN']; ?>

									</div>
								</div>
							</div>
						</div>
					<?php }} ?>

				</fieldset>
			</div>
		</div>
	<?php } if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?>

		<div id="submit">
			<fieldset class="submit-buttons btn-post">
				<?php echo (isset($this->_rootref['S_HIDDEN_ADDRESS_FIELD'])) ? $this->_rootref['S_HIDDEN_ADDRESS_FIELD'] : ''; ?>

				<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

				<div class="btn-group">
					<?php if ($this->_rootref['S_HAS_DRAFTS']) {  ?><input type="submit" accesskey="d" tabindex="8" name="load" value="<?php echo ((isset($this->_rootref['L_LOAD_DRAFT'])) ? $this->_rootref['L_LOAD_DRAFT'] : ((isset($user->lang['LOAD_DRAFT'])) ? $user->lang['LOAD_DRAFT'] : '{ LOAD_DRAFT }')); ?>" class="btn btn-warning" onclick="load_draft = true;" /><?php } if ($this->_rootref['S_SAVE_ALLOWED']) {  ?><input type="submit" accesskey="k" tabindex="7" name="save" value="<?php echo ((isset($this->_rootref['L_SAVE_DRAFT'])) ? $this->_rootref['L_SAVE_DRAFT'] : ((isset($user->lang['SAVE_DRAFT'])) ? $user->lang['SAVE_DRAFT'] : '{ SAVE_DRAFT }')); ?>" class="btn btn-warning" /><?php } ?>

				</div>
				<input type="submit" tabindex="5" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>" class="btn btn-primary"<?php if (! $this->_rootref['S_PRIVMSGS']) {  ?> onclick="document.getElementById('postform').action += '#preview';"<?php } ?> />
				<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-success default-submit-action" />
			</fieldset>
		</div>
	<?php } if (! $this->_rootref['S_PRIVMSGS'] && ! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?>

		<div id="opt_tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#options-tab" data-toggle="tab"><span><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></span></a></li>
				<?php if ($this->_rootref['S_SHOW_ATTACH_BOX']) {  ?><li><a href="#attach-tab" data-toggle="tab"><span><?php echo ((isset($this->_rootref['L_ADD_ATTACHMENT'])) ? $this->_rootref['L_ADD_ATTACHMENT'] : ((isset($user->lang['ADD_ATTACHMENT'])) ? $user->lang['ADD_ATTACHMENT'] : '{ ADD_ATTACHMENT }')); ?></span></a></li><?php } if ($this->_rootref['S_SHOW_POLL_BOX'] || $this->_rootref['S_POLL_DELETE']) {  ?><li><a href="#poll-tab" data-toggle="tab"><span><?php echo ((isset($this->_rootref['L_ADD_POLL'])) ? $this->_rootref['L_ADD_POLL'] : ((isset($user->lang['ADD_POLL'])) ? $user->lang['ADD_POLL'] : '{ ADD_POLL }')); ?></span></a></li><?php } ?>

			</ul>
		</div>
	<?php } if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?>

		<div class="tab-content well post-tabs">
			<?php $this->_tpl_include('posting_option_body.html'); if ($this->_rootref['S_SHOW_ATTACH_BOX']) {  $this->_tpl_include('posting_attach_body.html'); } if ($this->_rootref['S_SHOW_POLL_BOX'] || $this->_rootref['S_POLL_DELETE']) {  $this->_tpl_include('posting_poll_body.html'); } ?>

		</div>
	<?php } } ?>