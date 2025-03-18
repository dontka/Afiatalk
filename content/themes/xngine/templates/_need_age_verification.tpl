<!-- need age verification -->
<div class="p-3">
	<div class="text-muted text-center py-5">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="56" height="56" class="text-danger text-opacity-75"><path fill="currentColor" d="m24,11v2h-2v2h-2v-2h-2v-2h2v-2h2v2h2Zm-12.826.691c-.491-.552-.799-1.271-.799-2.066,0-1.723,1.402-3.125,3.125-3.125s3.125,1.402,3.125,3.125c0,.795-.308,1.514-.799,2.066.643.615,1.049,1.476,1.049,2.434,0,1.861-1.514,3.375-3.375,3.375s-3.375-1.514-3.375-3.375c0-.958.405-1.819,1.049-2.434Zm3.701,2.434c0-.758-.617-1.375-1.375-1.375s-1.375.617-1.375,1.375.617,1.375,1.375,1.375,1.375-.617,1.375-1.375Zm-1.375-3.375c.62,0,1.125-.505,1.125-1.125s-.505-1.125-1.125-1.125-1.125.505-1.125,1.125.505,1.125,1.125,1.125Zm-5.5,6.25V7h-1.488l-2.516,2.777,1.482,1.342.521-.575v6.456h2Zm4,5c-5.514,0-10-4.486-10-10S6.486,2,12,2c3.691,0,6.914,2.016,8.647,5h2.248C20.994,2.876,16.831,0,12,0,5.383,0,0,5.383,0,12s5.383,12,12,12c4.831,0,8.994-2.876,10.895-7h-2.248c-1.732,2.984-4.955,5-8.647,5Z"/></svg>
		<div class="text-md mt-4">
			<h5 class="headline-font m-0">
				{if !$user->_data['user_adult']}
					{__("You must be 18+ to view this content")}
				{else}
					{__("Your age must be verified to view this content")}
				{/if}
			</h5>
		</div>
	</div>
</div>
<!-- need age verification -->