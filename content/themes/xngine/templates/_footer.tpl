{if !$user->_logged_in && !$system['newsfeed_public'] && $page == "index"}
{else}
	<!-- ads -->
	{include file='_ads.tpl' _ads=$ads_master['footer'] _master=true}
	<!-- ads -->
{/if}


</div>
<!-- right column -->
</div>
<!-- row -->
</div>
<!-- container -->
</div>
<!-- main wrapper -->

<div class="d-none position-fixed w-100 h-100 top-0 start-0 end-0 bottom-0 bg-black bg-opacity-75 x_user_menu_backdrop"></div>

<!-- Dependencies CSS [Twemoji-Awesome] -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zamblektech/twemoji-amazing@latest/twemoji-amazing.css">
<!-- Dependencies CSS [Twemoji-Awesome] -->

<!-- JS Files -->
{include file='_js_files.tpl'}
<!-- JS Files -->

<!-- JS Templates -->
{include file='_js_templates.tpl'}
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->
{if $system['custome_js_footer']}
  <script>
    {html_entity_decode($system['custome_js_footer'], ENT_QUOTES)}
  </script>
{/if}
<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
{if $system['analytics_code']}{html_entity_decode($system['analytics_code'], ENT_QUOTES)}{/if}
<!-- Analytics Code -->

<!-- Sounds -->
{if $user->_logged_in}
  <!-- Notification -->
  <audio id="notification-sound" preload="auto">
    <source src="{$system['system_url']}/includes/assets/sounds/notification.mp3" type="audio/mpeg">
  </audio>
  <!-- Notification -->
  {if $system['chat_enabled']}
    <!-- Chat -->
    <audio id="chat-sound" preload="auto">
      <source src="{$system['system_url']}/includes/assets/sounds/chat.mp3" type="audio/mpeg">
    </audio>
    <!-- Chat -->
    <!-- Call -->
    <audio id="chat-calling-sound" preload="auto" loop="true">
      <source src="{$system['system_url']}/includes/assets/sounds/calling.mp3" type="audio/mpeg">
    </audio>
    <!-- Call -->
    <!-- Video -->
    <audio id="chat-ringing-sound" preload="auto" loop="true">
      <source src="{$system['system_url']}/includes/assets/sounds/ringing.mp3" type="audio/mpeg">
    </audio>
    <!-- Video -->
  {/if}
{/if}
<!-- Sounds -->

</body>

</html>