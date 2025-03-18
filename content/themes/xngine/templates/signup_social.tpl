{include file='_head.tpl'}
{include file='_header.tpl'}

<style>
.search-wrapper-prnt {
display: none !important
}
</style>

<!-- page content -->
<div class="row x_content_row">
    <div class="col-lg-12 w-100">
		<div class="row m-0">
			<div class="col-md-6 col-lg-5 mx-md-auto">
				<div class="fr_auth_form">
					<div class="text-center my-4">
						<h2 class="m-0 fr_welcome_title">{__("Welcome")}, {$user_profile->displayName}</h2>
					</div>

					<div class="text-center my-4">
						<img class="img-thumbnail rounded-circle" src="{$user_profile->photoURL}" width="99" height="99">
					</div>

					<form class="js_ajax-forms" data-url="core/signup_social.php">
						{if $system['invitation_enabled']}
							<!-- invitation code -->
							<div class="form-floating">
								<input name="invitation_code" type="text" placeholder=' ' class="form-control" required>
								<label class="form-label">{__("Invitation Code")}</label>
							</div>
							<!-- invitation code -->
						{/if}
						
						{if !$system['show_usernames_enabled']}
							<!-- first name -->
							<div class="form-floating">
								<input name="first_name" type="text" placeholder=' ' value="{$user_profile->firstName}" class="form-control" required>
								<label class="form-label">{__("First name")}</label>
							</div>
							<!-- first name -->

							<!-- last name -->
							<div class="form-floating">
								<input name="last_name" type="text" placeholder=' ' value="{$user_profile->lastName}" class="form-control" required>
								<label class="form-label">{__("Last name")}</label>
							</div>
							<!-- last name -->
						{/if}
				
						<div class="form-floating">
							<input name="username" type="text" class="form-control" placeholder=' ' value="{$user_profile->username}" required>
							<label class="form-label">{__("Username")}</label>
						</div>
					  
						<div class="form-floating">
							<input name="email" type="email" class="form-control" placeholder=' ' value="{$user_profile->email}" required>
							<label class="form-label">{__("Email")}</label>
						</div>
						
						<div class="form-floating">
							<input name="password" type="password" class="form-control" placeholder=' ' required>
							<label class="form-label">{__("Password")}</label>
						</div>
					  
						{if !$system['genders_disabled']}
							<div class="form-floating">
								<select class="form-select" name="gender" required>
									<option value="none">{__("Select Sex")}:</option>
									{foreach $genders as $gender}
										<option value="{$gender['gender_id']}">{$gender['gender_name']}</option>
									{/foreach}
								</select>
								<label class="form-label">{__("I am")}</label>
							</div>
						{/if}
						
						{if $system['select_user_group_enabled'] && $user_groups}
							<!-- user group -->
							<div class="form-floating">
								<select class="form-select" name="custom_user_group">
									<option value="0">{__("Select User Group")}:</option>
									{foreach $user_groups as $user_group}
										<option value="{$user_group['user_group_id']}">{$user_group['user_group_title']}</option>
									{/foreach}
								</select>
								<label class="form-label">{__("User Group")}</label>
							</div>
							<!-- user group -->
						{/if}
						
						<!-- newsletter consent -->
						{if $system['newsletter_consent']}
							<div class="form-check mb10">
								<input type="checkbox" class="form-check-input" name="newsletter_agree" id="newsletter_agree">
								<label class="form-check-label" for="newsletter_agree">
									{__("I expressly agree to receive the newsletter")}
								</label>
							</div>
						{/if}
						<!-- newsletter consent -->
						
						<div class="form-check mb10">
							<input type="checkbox" class="form-check-input" name="privacy_agree" id="privacy_agree">
							<label class="form-check-label" for="privacy_agree">
								{__("By creating your account, you agree to our")} <a href="{$system['system_url']}/static/terms" target="_blank">{__("Terms")}</a> & <a href="{$system['system_url']}/static/privacy" target="_blank">{__("Privacy Policy")}</a>
							</label>
						</div>
						
						<div class="my-4">
							<input value="{$user_profile->photoURL}" name="avatar" type="hidden">
							<input value="{$provider}" name="provider" type="hidden">
							<button type="submit" class="btn btn-primary d-block btn-lg w-100">{__("Sign Up")}</button>
						</div>
						
						<!-- error -->
						<div class="alert alert-danger mt15 mb0 x-hidden"></div>
						<!-- error -->
					</form>
				</div>
			</div>
		</div>
    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}