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
		<div class="p-3 py-md-5 text-center">
			<svg width="56" height="56" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-50"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.0229 2.22727C11.0229 1.68754 11.4604 1.25 12.0002 1.25C17.9382 1.25 22.7502 6.06364 22.7502 12C22.7502 17.9364 17.9382 22.75 12.0002 22.75C11.4604 22.75 11.0229 22.3125 11.0229 21.7727C11.0229 21.233 11.4604 20.7955 12.0002 20.7955C16.8585 20.7955 20.7956 16.8571 20.7956 12C20.7956 7.14292 16.8585 3.20455 12.0002 3.20455C11.4604 3.20455 11.0229 2.76701 11.0229 2.22727ZM9.58105 2.51096C9.77413 3.01497 9.52206 3.58008 9.01804 3.77315C8.0927 4.12763 7.22663 4.61191 6.46436 5.20245C6.03769 5.533 5.42384 5.45508 5.09329 5.02841C4.76274 4.60174 4.84067 3.98789 5.26734 3.65734C6.18574 2.94584 7.2205 2.36869 8.31885 1.94795C8.82287 1.75487 9.38797 2.00694 9.58105 2.51096ZM4.01043 6.22586C4.46878 6.51088 4.60928 7.11349 4.32427 7.57183C3.76386 8.47304 3.37605 9.45814 3.18814 10.4652C3.08914 10.9958 2.57877 11.3457 2.04819 11.2467C1.51762 11.1477 1.16776 10.6373 1.26675 10.1067C1.50116 8.85047 1.9814 7.63814 2.66446 6.5397C2.94948 6.08136 3.55209 5.94085 4.01043 6.22586ZM2.04819 12.7533C2.57877 12.6543 3.08914 13.0042 3.18814 13.5348C3.37605 14.5419 3.76386 15.527 4.32427 16.4282C4.60928 16.8865 4.46878 17.4891 4.01043 17.7741C3.55209 18.0592 2.94948 17.9186 2.66447 17.4603C1.9814 16.3619 1.50116 15.1495 1.26675 13.8933C1.16776 13.3627 1.51762 12.8523 2.04819 12.7533ZM5.09761 18.9661C5.43122 18.5418 6.04562 18.4683 6.4699 18.8019C7.22608 19.3964 8.08862 19.8729 9.01658 20.2267C9.5209 20.4189 9.77388 20.9837 9.58161 21.488C9.38934 21.9923 8.82464 22.2453 8.32031 22.053C7.22459 21.6353 6.18629 21.0652 5.2618 20.3383C4.83752 20.0047 4.76401 19.3903 5.09761 18.9661Z" fill="currentColor"/><path d="M9.01735 9.75C9.01735 8.10094 10.3417 6.75 11.9927 6.75C13.6438 6.75 14.9681 8.10094 14.9681 9.75C14.9681 11.3991 13.6438 12.75 11.9927 12.75C10.3417 12.75 9.01735 11.3991 9.01735 9.75Z" fill="currentColor"/><path d="M7.47099 15.9682C9.82372 13.4936 14.1349 13.3585 16.5388 15.9775C16.6747 16.1256 16.7455 16.322 16.7353 16.5226C16.7251 16.7233 16.6349 16.9115 16.4847 17.0451C15.2929 18.1052 13.721 18.75 12.0003 18.75C10.2797 18.75 8.7079 18.1053 7.51611 17.0454C7.36424 16.9103 7.27369 16.7194 7.26518 16.5163C7.25668 16.3133 7.33095 16.1154 7.47099 15.9682Z" fill="currentColor"/></svg>
			<div class="text-md mt-4">
				<h5 class="headline-font m-0">
					{__("Activation Required")}
				</h5>
			</div>
			
			<div class="mt-1 text-muted">
				{__("You have to activate your account before you start")}
			</div>
			
			<hr class="my-md-4">

			<h4 class="headline-font">{__("Hey")} 👋 {__("Let's verify your")} {if $system['activation_type'] == "email"}{__("Email")}{else}{__("Phone Number")}{/if}</h4>
			<p class="">
				{if $system['activation_type'] == "email"}
					{__("Please go to")} <span class="main">{$user->_data['user_email']}</span> {__("to complete the activation process")}
				{else}
					{__("Please check the SMS on your phone")} <strong>{$user->_data['user_phone']}</strong> {__("to complete the activation process")}
				{/if}
			</p>

			<div class="mt-4 d-flex align-items-center justify-content-center gap-2 flex-wrap">
				{if $system['activation_type'] == "email"}
					<button type="button" class="btn btn-success" data-toggle="modal" data-url="core/activation_email_resend.php">
						{__("Resend Verification Email")}
					</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-url="#activation-email-reset">
						{__("Change Email")}
					</button>
				{else}
					<button type="button" class="btn btn-success" data-toggle="modal" data-url="#activation-phone">{__("Enter Code")}</button>
					{if $user->_data['user_phone']}
						<button type="button" class="btn btn-primary" data-toggle="modal" data-url="core/activation_phone_resend.php">
							{__("Resend SMS")}
						</button>
					{/if}
					<button type="button" class="btn btn-primary" data-toggle="modal" data-url="#activation-phone-reset">
						{__("Change Phone Number")}
					</button>
				{/if}
			</div>
		</div>
    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}