<?php
require(__DIR__ . '/../config_install.php');
?>
<div class="page_element">
	<h3 class="install_h3"><i class="fa fa-key"></i> Purchase code</h3>
	<div class="install_section">
		<div class="setting_element">
			<p class="label">Purchase code</p>
			<input id="install_purchase" class="full_input" type="text"/>
			<p class="ex_admin sub_text">Provide purchase code received with purchase.</p>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="page_element">
	<h3 class="install_h3"><i class="fa fa-database"></i> Database information</h3>
	<div class="install_section">
		<div class="form_split">
			<div class="form_left_full">
				<div class="setting_element">
					<p class="label">Database host</p>
					<input id="install_db_host" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Database host ex: localhost</p>
				</div>
			</div>
			<div class="form_right_full">
				<div class="setting_element">
					<p class="label">Database name</p>
					<input id="install_db_name" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Name of the database</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="form_split">
			<div class="form_left_full">
				<div class="setting_element">
					<p class="label">Database user</p>
					<input id="install_db_user" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Username to connect to the database</p>
				</div>
			</div>
			<div class="form_right_full">
				<div class="setting_element">
					<p class="label">Database password</p>
					<input id="install_db_password" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Avoid using $ ' " ; in password</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="page_element">
	<h3 class="install_h3"><i class="fa fa-globe"></i> Site information</h3>
	<div class="install_section">
		<div class="setting_element">
			<p class="label">Installation url</p>
			<input id="install_domain" class="full_input" type="text"/>
			<p class="ex_admin sub_text">Absolute path to your chat installation ex: http://www.mychat.com/chat. Must <span class="error">not</span> end with /</p>
		</div>
		<div class="form_split">
			<div class="form_left_full">
				<div class="setting_element">
					<p class="label">Title</p>
					<input id="install_title" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Name that will apear on browser tab</p>
				</div>
			</div>
			<div class="form_right_full">
				<div class="setting_element ">
					<p class="label">Default language</p>
					<select id="install_language">
						<?php echo listLanguage('English', 1); ?>
					</select>
					<p class="ex_admin sub_text">Default system language.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="page_element">
	<h3 class="install_h3"><i class="fa fa-trophy"></i> Owner account</h3>
	<div class="install_section">
		<div class="form_split">
			<div class="form_left_full">
				<div class="setting_element">
					<p class="label">Username</p>
					<input id="install_username" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Max 18 characters a-z0-9</p>
				</div>
			</div>
			<div class="form_right_full">
				<div class="setting_element">
					<p class="label">Email</p>
					<input id="install_email" class="full_input" type="text"/>
					<p class="ex_admin sub_text">Must be a valid email.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="form_split">
			<div class="form_left_full">
				<div class="setting_element">
					<p class="label">Password</p>
					<input id="install_password" class="full_input" type="password"/>
					<p class="ex_admin sub_text">Choose a secure password for your account</p>
				</div>
			</div>
			<div class="form_right_full">
				<div class="setting_element">
					<p class="label">Repeat password</p>
					<input id="install_repeat" class="full_input" type="password"/>
					<p class="ex_admin sub_text">Repeat previous password</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear10"></div>
	<button id="install_component" onclick="runInstaller();" type="button" class="save_admin reg_button ok_btn"><i class="fa fa-database"></i> Install chat</button>
	<button id="wait_install" type="button" class="save_admin reg_button ok_btn"><i class="fa fa-clock"></i> Please wait ...</button>
</div>