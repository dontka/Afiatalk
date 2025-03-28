{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="row x_content_row">
	<div class="col-lg-8">
		<div class="position-sticky x_top_posts">
			<div class="headline-font fw-semibold side_widget_title px-3 py-2 d-flex align-items-center justify-content-between">
				{__("Events")}
				<span class="flex-0 d-flex align-items-center gap-2">
					{if $system['newsfeed_location_filter_enabled']}
						<button type="button" class="btn btn-gray border-0 p-2 rounded-circle lh-1 flex-0" data-bs-toggle="modal" data-bs-target="#filter_modal">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none"><path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z" stroke="currentColor" stroke-width="1.75" /><path d="M20 5.69899C19.0653 5.76636 17.8681 6.12824 17.0379 7.20277C15.5385 9.14361 14.039 9.30556 13.0394 8.65861C11.5399 7.6882 12.8 6.11636 11.0401 5.26215C9.89313 4.70542 9.73321 3.19045 10.3716 2" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round" /><path d="M2 11C2.7625 11.6621 3.83046 12.2682 5.08874 12.2682C7.68843 12.2682 8.20837 12.7649 8.20837 14.7518C8.20837 16.7387 8.20837 16.7387 8.72831 18.2288C9.06651 19.1981 9.18472 20.1674 8.5106 21" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round" /><path d="M22 13.4523C21.1129 12.9411 20 12.7308 18.8734 13.5405C16.7177 15.0898 15.2314 13.806 14.5619 15.0889C13.5765 16.9775 17.0957 17.5711 14 22" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round" /></svg>
						</button>
					{/if}
					{if $user->_data['can_create_events']}
						<button class="btn btn-sm btn-primary flex-0 d-none d-md-flex" data-toggle="modal" data-url="modules/add.php?type=event">
							<span class="my2">{__("Create Event")}</span>
						</button>
						<button class="btn btn-primary flex-0 p-2 rounded-circle lh-1 d-md-none" data-toggle="modal" data-url="modules/add.php?type=event">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C12.5523 3 13 3.44772 13 4V11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H13V20C13 20.5523 12.5523 21 12 21C11.4477 21 11 20.5523 11 20V13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H11V4C11 3.44772 11.4477 3 12 3Z" fill="currentColor"/></svg>
						</button>
					{/if}
				</span>
			</div>
			
			<div class="d-flex align-items-center justify-content-center">
				<div {if $view == "" || $view == "category"}class="active fw-semibold" {/if}>
					<a href="{$system['system_url']}/events" class="body-color side_item_hover w-100 text-center d-block">
						<span class="position-relative d-inline-block py-3">{__("Discover")}</span>
					</a>
				</div>
				{if $user->_logged_in}
					<div {if $view == "going"}class="active fw-semibold" {/if}>
						<a href="{$system['system_url']}/events/going" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3">{__("Going")}</span>
						</a>
					</div>
					<div {if $view == "interested"}class="active fw-semibold" {/if}>
						<a href="{$system['system_url']}/events/interested" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3">{__("Interested")}</span>
						</a>
					</div>
					<div {if $view == "invited"}class="active fw-semibold" {/if}>
						<a href="{$system['system_url']}/events/invited" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3">{__("Invited")}</span>
						</a>
					</div>
					<div {if $view == "manage"}class="active fw-semibold" {/if}>
						<a href="{$system['system_url']}/events/manage" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3">{__("My Events")}</span>
						</a>
					</div>
				{/if}
			</div>
		</div>
		
		<div class="pt-3 pb-2 px-2 mx-1">
			<form class="js_search-form" data-filter="events">
				<div class="position-relative">
					<input type="search" class="form-control shadow-none rounded-pill x_search_filter" name="query" placeholder='{__("Search for events")}'>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" color="currentColor" fill="none" class="position-absolute pe-none search-input-icon"><path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path></svg>
				</div>
			</form>
		</div>
		
		{if $view == "" || $view == "category"}
			<!-- categories -->
			<div class="pb-2 pt-2">
				<div class="overflow-hidden x_page_cats x_page_scroll d-flex align-items-start position-relative">
					<ul class="px-3 d-flex gap-2 align-items-center overflow-x-auto pb-3 scrolll">
						{if $view != "category"}
						{else}
							{if $current_category['parent']}
								<li>
									<a class="btn btn-sm border-0 ps-0 pe-1" href="{$system['system_url']}/events/category/{$current_category['parent']['category_id']}/{$current_category['parent']['category_url']}">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.99996 16.9998L4 11.9997L9 6.99976" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 12H20" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg> {__($current_category['parent']['category_name'])}
									</a>
								</li>
								<li>
									<a class="btn btn-sm main position-relative main_bg_half">
										{__($current_category['category_name'])}
									</a>
								</li>
							{else}
								<li>
									<a class="btn btn-sm border-0 ps-0 pe-1" href="{$system['system_url']}/events">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.99996 16.9998L4 11.9997L9 6.99976" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 12H20" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
										{__("All")}
									</a>
								</li>
								{if $current_category['sub_categories']}
									<li>
										<a class="btn btn-sm position-relative main main_bg_half">
											{__($current_category['category_name'])}
										</a>
									</li>
								{/if}
							{/if}
						{/if}
						{foreach $categories as $category}
							<li {if $view == "category" && $current_category['category_id'] == $category['category_id']}class="position-relative main main_bg_half" {/if}>
								<a class="btn btn-sm" href="{$system['system_url']}/events/category/{$category['category_id']}/{$category['category_url']}">
									{__($category['category_name'])}
									{if $category['sub_categories']}
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none"><path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
									{/if}
								</a>
							</li>
						{/foreach}
					</ul>
					<div class="d-flex align-items-center justify-content-between position-absolute w-100 h-100 pe-none scroll-btns">
						<div class="pe-auto">
							<button class="btn rounded-circle p-1 bg-black text-white mx-2 scroll-left-btn">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 6L9 12.0001L15 18" stroke="currentColor" stroke-width="2" stroke-miterlimit="16" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</div>
						<div class="pe-auto">
							<button class="btn rounded-circle p-1 bg-black text-white mx-2 scroll-right-btn">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.00005 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-miterlimit="16" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- categories -->
		{/if}
		
		<!-- content -->
		<div class="p-3 pt-2">
			{if $events}
				<ul class="row">
					{foreach $events as $_event}
						{include file='__feeds_event.tpl' _tpl='box'}
					{/foreach}
				</ul>

				<!-- see-more -->
				{if count($events) >= $system['events_results']}
					<div class="alert alert-post see-more js_see-more" data-get="{$get}" {if $view == "category"}data-id="{$current_category['category_id']}" {/if} {if $view == "going" || $view == "interested" || $view == "invited" || $view == "manage"}data-uid="{$user->_data['user_id']}" {/if} data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}">
						<span>{__("See More")}</span>
						<div class="loader loader_small x-hidden"></div>
					</div>
				{/if}
				<!-- see-more -->
			{else}
				{include file='_no_data.tpl'}
			{/if}
		</div>
		<!-- content -->
	</div>
	
	<!-- right panel -->
	<div class="col-lg-4 js_sticky-sidebar">
		<!-- upgrade to pro -->	
		{if $system['packages_enabled'] && !$user->_data['user_subscribed']}
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					{__("Upgrade to Pro")}
				</h6>
				<div class="px-3 py-0 side_item_list">
					{__("Choose the Plan That's Right for You")}
				</div>
				<div class="px-3 side_item_list">
					<a class="btn btn-main" href="{$system['system_url']}/packages">
						{__("Upgrade")}
					</a>
				</div>
			</div>
		{/if}
		<!-- upgrade to pro -->
		
		<!-- trending -->
		{if $trending_hashtags}
            {include file='_trending_widget.tpl'}
		{/if}
		<!-- trending -->

		{include file='_ads.tpl'}
		{include file='_ads_campaigns.tpl'}
		{include file='_widget.tpl'}
		
		<!-- mini footer -->
		{include file='_footer_mini.tpl'}
		<!-- mini footer -->
	</div>
	<!-- right panel -->
</div>
<!-- page content -->

<!-- location filter -->
{if $system['newsfeed_location_filter_enabled']}
	<div class="modal fade" id="filter_modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">{__("Filter")}</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
		  
				<div class="modal-body">
					<label class="form-label fw-medium d-flex align-items-center gap-1 small">
						<svg width="14" height="14" class="flex-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.67752 20.4855C10.4174 20.6875 11.1961 20.7953 12 20.7953C12.6913 20.7953 13.3639 20.7156 14.0093 20.5648C14.3307 19.9605 14.4776 19.4829 14.5303 19.102C14.6018 18.5855 14.5081 18.1915 14.3586 17.8254C14.2834 17.6415 14.1803 17.4375 14.082 17.2433C13.9831 17.0477 13.8667 16.8162 13.7803 16.5734C13.5893 16.0372 13.5394 15.4284 13.8976 14.7419C14.1585 14.2419 14.5367 13.9512 14.9899 13.8083C15.3375 13.6987 15.8203 13.6782 16.1267 13.6653C16.8013 13.6345 17.5354 13.5789 18.4363 12.9314C19.2407 12.3532 20.0495 12.1908 20.7915 12.2677C20.7941 12.1788 20.7955 12.0895 20.7955 11.9999C20.7955 9.99664 20.1258 8.14982 18.998 6.67109C18.4992 6.85577 18.0138 7.16643 17.6315 7.66136C16.8187 8.71334 15.9471 9.36049 15.063 9.62066C14.1618 9.88583 13.3114 9.72806 12.6319 9.28831C11.6258 8.63716 11.4958 7.7271 11.4107 7.13117C11.3644 6.81979 11.3081 6.5283 11.2244 6.37345C11.1546 6.24443 11.0279 6.08994 10.7127 5.93693C9.92015 5.55225 9.471 4.84875 9.31521 4.09083C9.28482 3.94302 9.26529 3.7926 9.25612 3.64087C6.05016 4.6926 3.65688 7.5373 3.26198 10.9893C3.80225 11.3049 4.42081 11.518 5.08874 11.518C5.75485 11.518 6.32888 11.5491 6.81102 11.6394C7.29426 11.73 7.73816 11.8892 8.09861 12.1844C8.84883 12.7987 8.95837 13.7612 8.95837 14.7516C8.95837 15.7705 8.9604 16.1995 9.01512 16.5654C9.06753 16.916 9.16946 17.2163 9.43644 17.9815C9.59057 18.4233 9.80455 19.0503 9.79233 19.7264C9.78777 19.9791 9.75206 20.2335 9.67752 20.4855ZM1.25115 11.8409C1.25038 11.8938 1.25 11.9468 1.25 11.9999C1.25 17.9369 6.06294 22.7499 12 22.7499C12.7905 22.7499 13.561 22.6646 14.3029 22.5026L14.3214 22.4988C18.665 21.5427 22.0226 17.962 22.6466 13.5021C22.6481 13.491 22.6494 13.4799 22.6505 13.4688C22.7161 12.9886 22.75 12.4982 22.75 11.9999C22.75 6.06282 17.9371 1.24988 12 1.24988H11.9999C11.9548 1.24988 11.9099 1.25016 11.8649 1.25071C6.04305 1.3224 1.33552 6.02206 1.25115 11.8409Z" fill="currentColor"/></svg>
						{if $selected_country}{$selected_country['country_name']}{else}{__("All Countries")}{/if}
					</label>
					<div class="dropdown-menu position-relative w-100 d-block shadow-none countries-dropdown">
						<div class="js_scroller">
							<a class="dropdown-item" href="?country=all">
								{__("All Countries")}
							</a>
							{foreach $countries as $country}
								<a class="dropdown-item" href="?country={$country['country_name_native']}">
									{$country['country_name']}
								</a>
							{/foreach}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/if}
<!-- location filter -->

{include file='_footer.tpl'}