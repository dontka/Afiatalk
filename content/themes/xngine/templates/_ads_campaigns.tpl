{if $ads_campaigns}
	<!-- ads campaigns -->
	{foreach $ads_campaigns as $campaign}
		<div class="mb-3 overflow-hidden content">
			<h6 class="headline-font fw-semibold m-0 side_widget_title">
				{__("Sponsored")}
			</h6>
			<div class="px-3 side_item_list pt-1 {if $campaign['campaign_bidding'] == 'click'}js_ads-click-campaign{/if}" data-id="{$campaign['campaign_id']}">
				<a href="{$campaign['ads_url']}" target="_blank">
					<img class="img-fluid rounded-3" src="{$system['system_uploads']}/{$campaign['ads_image']}">
				</a>
				{if $campaign['ads_title'] || $campaign['ads_description']}
					<div class="mt-2 pt-1">
						<p class="fw-semibold mb-1">
							<a href="{$campaign['ads_url']}" target="_blank" class="body-color">{$campaign['ads_title']}</a>
						</p>
						<p class="text-muted m-0 small">
							{$campaign['ads_description']|truncate:200}
						</p>
					</div>
				{/if}
			</div>
		</div>
	{/foreach}
	<!-- ads campaigns -->
{/if}