<div class="post-comments">
	{if $_is_photo}

		<!-- sort comments -->
		{if $photo['comments'] > 0}
			<div class="comments-filter mb-2 pb-1">
				<div class="btn-group btn-group-sm js_comments-filter" data-value="photo_comments">
					<button type="button" class="btn btn-sm btn-gray dropdown-toggle px-2" data-bs-toggle="dropdown" data-display="static">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6H21M6 12H18M10 18H14" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
						<span class="btn-group-text">{__("Most Recent")}</span>
					</button>
					<div class="dropdown-menu dropdown-menu-left">
						<div class="dropdown-item pointer" data-value="photo_comments" data-id="{$photo['photo_id']}">{__("Most Recent")}</div>
						<div class="dropdown-item pointer" data-value="photo_comments_top" data-id="{$photo['photo_id']}">{__("Top Comments")}</div>
						<div class="dropdown-item pointer" data-value="photo_comments_all" data-id="{$photo['photo_id']}">{__("All Comments")}</div>
					</div>
				</div>
			</div>
		{/if}
		<!-- sort comments -->

		<!-- post comment -->
		{include file='__feeds_comment.form.tpl' _handle='photo' _id=$photo['photo_id']}
		<!-- post comment -->

		<!-- comments loader -->
		<div class="text-center py-5 x-hidden js_comments-filter-loader">
			<div class="loader loader_large"></div>
		</div>
		<!-- comments loader -->

		<!-- comments -->
		<ul class="js_comments x_comms_list">{if $photo['comments'] > 0}
				{foreach $photo['photo_comments'] as $comment}
					{include file='__feeds_comment.tpl' _comment=$comment}
				{/foreach}
			{/if}</ul>
		<!-- comments -->

		<!-- previous comments -->
		{if $photo['comments'] >= $system['min_results']}
			<div class="main pointer px-3 text-center rounded-3 d-block side_item_hover side_item_list small fw-semibold js_see-more" data-get="photo_comments" data-id="{$photo['photo_id']}" data-remove="true" data-target-stream=".js_comments">
				<span class="">
					{__("View previous comments")}
				</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
		{/if}
		<!-- previous comments -->

	{else}

		<!-- sort comments -->
		{if $post['comments'] > 0}
			<div class="comments-filter mb-2 pb-1">
				<div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments">
					<button type="button" class="btn btn-sm btn-gray dropdown-toggle px-2" data-bs-toggle="dropdown" data-display="static">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6H21M6 12H18M10 18H14" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
						<span class="btn-group-text">{__("Most Recent")}</span>
					</button>
					<div class="dropdown-menu dropdown-menu-left">
						<div class="dropdown-item pointer" data-value="post_comments" data-id="{$post['post_id']}">{__("Most Recent")}</div>
						<div class="dropdown-item pointer" data-value="post_comments_top" data-id="{$post['post_id']}">{__("Top Comments")}</div>
						<div class="dropdown-item pointer" data-value="post_comments_all" data-id="{$post['post_id']}">{__("All Comments")}</div>
					</div>
				</div>
			</div>
		{/if}
		<!-- sort comments -->

		<!-- post comment -->
		{include file='__feeds_comment.form.tpl' _handle='post' _id=$post['post_id']}
		<!-- post comment -->

		<!-- comments loader -->
		<div class="text-center py-5 x-hidden js_comments-filter-loader">
			<div class="loader loader_large"></div>
		</div>
		<!-- comments loader -->

		<!-- comments -->
		<ul class="js_comments x_comms_list {if $_live_comments}js_live-comments{/if}">{if $post['comments'] > 0}
				{foreach $post['post_comments'] as $comment}
					{include file='__feeds_comment.tpl' _comment=$comment}
				{/foreach}
			{/if}</ul>
		<!-- comments -->

		<!-- previous comments -->
		{if $post['comments'] >= $system['min_results']}
			<div class="main pointer px-3 text-center rounded-3 d-block side_item_hover side_item_list small fw-semibold js_see-more" data-get="post_comments" data-id="{$post['post_id']}" data-remove="true" data-target-stream=".js_comments">
				<span class="">
					{__("View previous comments")}
				</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
		{/if}
		<!-- previous comments -->

	{/if}
</div>