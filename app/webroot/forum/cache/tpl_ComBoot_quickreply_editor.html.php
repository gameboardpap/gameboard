<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">
	<div class="panel panel-default panel-collapsible" id="qr_ns_editor_div">
		<div class="panel-heading">
    		<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></h3>
    		<span class="pull-right panel-right clickable panel-collapsed"><i class="fa fa-chevron-down"></i></span>
    	</div>
    	<div class="panel-body" style="display:none">
			<fieldset>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-2" for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label>
						<div class="col-md-10">
							<input type="text" name="subject" id="subject-ns" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<textarea name="message" id="message" rows="7" cols="76" tabindex="3" class="form-control"></textarea>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="panel-footer" style="display:none">
			<fieldset class="submit-buttons">
				<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

				<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>

				<input type="submit" accesskey="f" tabindex="7" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" class="btn btn-primary" />
				<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-success" />
			</fieldset>
		</div>
	</div>
</form>