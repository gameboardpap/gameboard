<?php if (!defined('IN_PHPBB')) exit; ?><div class="tab-pane" id="attach-tab">
	<p><?php echo ((isset($this->_rootref['L_ADD_ATTACHMENT_EXPLAIN'])) ? $this->_rootref['L_ADD_ATTACHMENT_EXPLAIN'] : ((isset($user->lang['ADD_ATTACHMENT_EXPLAIN'])) ? $user->lang['ADD_ATTACHMENT_EXPLAIN'] : '{ ADD_ATTACHMENT_EXPLAIN }')); ?></p>
	<fieldset class="form-horizontal">
		<div class="form-group">
			<label for="fileupload" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_FILENAME'])) ? $this->_rootref['L_FILENAME'] : ((isset($user->lang['FILENAME'])) ? $user->lang['FILENAME'] : '{ FILENAME }')); ?>:</label>
			<div class="col-md-5">
				<div class="input-group">
					<input type="file" name="fileupload" id="fileupload" maxlength="<?php echo (isset($this->_rootref['FILESIZE'])) ? $this->_rootref['FILESIZE'] : ''; ?>" value="" class="form-control" /> 
					<span class="input-group-btn">
						<input type="submit" name="add_file" value="<?php echo ((isset($this->_rootref['L_ADD_FILE'])) ? $this->_rootref['L_ADD_FILE'] : ((isset($user->lang['ADD_FILE'])) ? $user->lang['ADD_FILE'] : '{ ADD_FILE }')); ?>" class="btn btn-default" onclick="upload = true;" />
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="filecomment" class="col-md-2 control-label"><?php echo ((isset($this->_rootref['L_FILE_COMMENT'])) ? $this->_rootref['L_FILE_COMMENT'] : ((isset($user->lang['FILE_COMMENT'])) ? $user->lang['FILE_COMMENT'] : '{ FILE_COMMENT }')); ?>:</label>
			<div class="col-md-5">
				<textarea name="filecomment" id="filecomment" rows="1" cols="40" class="form-control"><?php echo (isset($this->_rootref['FILE_COMMENT'])) ? $this->_rootref['FILE_COMMENT'] : ''; ?></textarea></dd>
			</div>
		</div>
	</fieldset>
</div>