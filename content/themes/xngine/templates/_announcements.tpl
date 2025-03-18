{foreach $announcements as $announcement}
	<div class="px-3 side_item_list text-with-list x_announcement">
		{if $user->_logged_in}
			<button type="button" class="btn-close float-end shadow-none small js_announcment-remover" data-id="{$announcement['announcement_id']}"></button>
		{/if}
		
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 55" width="128" height="128" class="d-block mx-auto mb-3 text-{$announcement['type']}"><g><g><path opacity="0.4" fill="currentColor" d="M37.91148,31.34716c-0.10349-0.00041-26.7707-0.10758-25.15991-0.09998    c-0.76001-0.06-1.48999-0.5-2.16992-1.31c-0.07424-0.07424-0.34673-0.43498-0.39014-0.5h0.01001    c-1.50924-2.26155-2.33008-5.50986-2.33008-7.21002c-0.01301-0.07995-0.00977-0.14648-0.00977-0.29999    c-0.03003-1.56,0.32983-2.65997,1.02002-3.14001L29.26157,3.71722c0.21782-0.15234,0.52659,0.09726,0.3501,0.34998    c-0.9502,1.23999-0.79004,5.34998,0.41992,10.46997c0.59128,2.49638,1.42325,5.18685,2.5,7.92004    c1.85986,4.64996,4.04004,8.02997,5.43994,8.39996C38.26748,30.92546,38.20049,31.34716,37.91148,31.34716z"/><path opacity="0.4" fill="currentColor" d="M10.20151,29.43719H10.1915c-0.07983-0.10999-0.15991-0.22998-0.22998-0.35999    C10.0416,29.1972,10.12144,29.31719,10.20151,29.43719z"/></g><g fill="currentColor"><path d="M10.1915,29.43719h0.01001c-0.08008-0.12-0.19063-0.28803-0.25391-0.38422    c0.35351,0.08464,2.13724,0.00794,3.85693-0.66156c0.30782-0.11893,0.12837-0.58612-0.18164-0.46582    c-1.09375,0.42578-2.28906,0.64941-3.4668,0.64941c-0.05176,0-0.08789,0.01123-0.15723-0.00146    c-0.11084,0-0.18994,0.08081-0.22241,0.18182c-0.04666-0.08943,0.02638,0.06604-0.2749-0.49817    c-1.75295-3.63438-1.61851-6.22857-1.63989-6.33002l-0.99023,0.71997c-1.56373,1.04976,0.02107,7.12225,2.23022,7.28003    l1.47998,0.01001C10.5074,29.86295,10.23491,29.5022,10.1915,29.43719z"/><path d="M25.97446,41.37481c0.87149-1.48824,0.05792-2.94192-1.2002-3.31006c0.1885-1.1203-0.5337-2.12867-1.5166-2.41113    c0.35645-0.54248,0.50684-1.18945,0.41016-1.78711c-0.18576-1.06031-1.33327-1.74361-2.23779-1.44598    c-0.21533-0.38568-0.43506-0.77643-0.64844-1.14337h-0.58008c0.25293,0.43597,0.51685,0.90271,0.78491,1.37769    c-0.33838,0.25671-0.65918,0.66187-1.06763,1.18237c-0.5376,0.68365-1.26318,1.59137-2.40039,2.68945    c-0.42555-0.83126-2.59609-5.16731-2.64697-5.26947h-0.5498c0.44615,0.90625,0.33674,0.69386,0.69312,1.40588    c-0.3821-0.22919-1.26359-0.041-1.80396,0.6629c-1.24617,1.68793,0.26156,3.55092-0.96289,7.92676    c-0.1416,0.5166-0.34766,1.03418-0.6123,1.53857c-0.15215,0.29377,0.28921,0.52554,0.44336,0.23242    c0.97785-1.86402,1.28554-4.42089,1.1582-6.50488l-0.00317-0.04675c0.03662-0.00507,0.07397-0.01044,0.10669-0.03284    c1.02991-0.69439,1.49566-2.04582,0.94946-3.30225c0.15137-0.0509,0.30566-0.08044,0.45581-0.06201    c0.41846,0.10742,2.03223,2.95563,2.07959,4.08948c-0.31806,0.49042-0.56619,0.78729-0.85596,1.24548    c-0.17851,0.27952,0.24675,0.54277,0.42188,0.26758c0.28665-0.45032,0.49359-0.69131,0.8186-1.18762    c0.01196-0.00763,0.0271-0.00812,0.03784-0.01794c3.44873-3.11411,3.60522-4.88968,4.91504-4.58203    c0.49902,0.11816,0.9248,0.56543,1.01172,1.05957c0.13705,0.85144-0.36833,1.43899-0.39453,1.54004l-0.00439,0.01593    c-0.56374,0.8291-1.01891,1.65697-2.47217,3.29218c-0.0918,0.10303-0.08301,0.26123,0.02051,0.35303    c0.10666,0.09361,0.26412,0.0798,0.35254-0.021c1.13548-1.27697,1.65714-2.05109,2.30273-3.02606    c0.7939,0.10144,1.52699,1.02209,1.27246,2.01819c-0.21996,0.86494-1.4837,2.23979-2.1416,2.85016    c-0.16662,0.1538-0.05667,0.43311,0.16992,0.43311c0.06055,0,0.12207-0.02197,0.16992-0.06689    c0.74962-0.69523,1.78143-1.84434,2.16577-2.79559c0.89425,0.25441,1.3814,1.13512,1.18384,1.97528    c-0.20001,0.84943-1.50392,2.27355-2.14648,2.87158c-0.16878,0.1566-0.05306,0.43311,0.16992,0.43311    c0.06055,0,0.12207-0.02197,0.16992-0.06689c0.63932-0.5943,1.22627-1.26746,1.69849-1.94037    c0.63498,0.27834,0.82533,0.96159,0.75366,1.58295c-0.05371,0.45898-0.23535,0.93555-0.57129,1.50195    c-1.53364,2.63103-4.07649,4.37915-6.61816,6.40332c-0.1084,0.08594-0.12598,0.24316-0.04004,0.35156    c0.08447,0.10727,0.24258,0.12622,0.35059,0.04004c2.56115-2.03502,5.15892-3.83078,6.73828-6.5415    c0.37207-0.62695,0.57422-1.1665,0.63672-1.69727C27.05519,42.47713,26.61498,41.69104,25.97446,41.37481z M13.1981,35.91296    c-0.05842-0.91843-0.05508-1.94506,0.65137-2.53558C14.21835,34.27381,13.99037,35.27446,13.1981,35.91296z"/><path d="M19.59751,30.85821c-4-4.4126-5.6084-9.59912-4.91797-15.85645c0.03719-0.3266-0.46054-0.38766-0.49609-0.05469    c-0.70801,6.40771,0.94238,11.72217,5.04297,16.24707C19.45128,31.43885,19.81863,31.1026,19.59751,30.85821z"/><path d="M29.84946,3.30108c-2.05762,0.63867-1.44824,6.51709-0.30078,11.35547c0.54576,2.35649,1.43457,5.26898,2.51758,7.98242    c0.9347,2.34614,4.08882,9.44206,6.48242,8.69922c2.26172-0.70215,1.40234-8.25146-0.73535-15.14502    C35.67564,9.30254,32.11802,2.60137,29.84946,3.30108z M34.34946,20.68645c-0.66016,0.42194-1.3125,0.89557-1.94312,1.43481    c-0.95912-2.44512-1.72316-4.89653-2.28784-7.24951c0.91016,0.06012,1.8186,0.12061,2.72412,0.18201    C32.50958,16.3467,33.43204,19.83458,34.34946,20.68645z M38.40025,30.86065c-1.0957,0.33508-3.44189-2.3819-5.79932-8.23792    c1.85387-1.61565,2.43305-1.64952,2.5293-1.90698c0.8026-1.0047-0.71786-6.69869-1.95264-6.14032    c-1.05688-0.07227-2.11938-0.14258-3.18286-0.21259C28.5001,7.95434,28.8729,4.12786,29.9979,3.77862    c0.0625-0.01953,0.12891-0.02881,0.19727-0.02881c1.57031,0,4.76953,4.95166,7.13965,12.5918    C39.81138,24.32452,39.88364,30.4002,38.40025,30.86065z"/><path d="M8.15415,22.88409c0.36405,0,2.46683-0.38235,4.4502-1.20361c0.12793-0.05273,0.18848-0.19873,0.13574-0.32666    c-0.05371-0.12793-0.2002-0.18848-0.32715-0.13525c-1.37598,0.56934-2.82031,0.9624-4.29297,1.16797    c-0.13672,0.01904-0.23242,0.14551-0.21387,0.28223C7.92368,22.79375,8.0311,22.88409,8.15415,22.88409z"/><path d="M8.91294,25.7044c-0.32087,0.01934-0.30451,0.49951,0.01563,0.49951c0.52834-0.0766,1.82072-0.06167,3.76172-0.86963    c0.12793-0.05322,0.18848-0.19971,0.13477-0.32715c-0.05273-0.12695-0.2002-0.18506-0.32617-0.13477    C11.35435,25.34893,10.14732,25.62872,8.91294,25.7044z"/><path d="M41.29185,7.27667c-0.50293,1.39014-1.10449,2.75684-1.78711,4.06152c-0.06348,0.12207-0.0166,0.27344,0.10547,0.3374    c0.12458,0.06393,0.27395,0.01567,0.33789-0.10596c0.69238-1.32422,1.30273-2.71143,1.81445-4.12305    C41.87424,7.13711,41.40642,6.9645,41.29185,7.27667z"/><path d="M48.73423,11.0252c-0.05859-0.12646-0.20703-0.18018-0.33105-0.12402l-7.18066,3.25879    c-0.29952,0.13583-0.09734,0.58987,0.20703,0.45508l7.18066-3.25879C48.73618,11.29913,48.79185,11.15118,48.73423,11.0252z"/><path d="M41.68247,16.76446c-0.10645-0.08447-0.26367-0.06689-0.35156,0.0415c-0.08594,0.10791-0.06738,0.26514,0.04102,0.35107    l3.54004,2.79736c0.10831,0.08527,0.26471,0.06713,0.35156-0.04102c0.08594-0.1084,0.06738-0.26563-0.04102-0.35156    L41.68247,16.76446z"/></g></g></svg>
		
		{if $announcement['title']}<div class="headline-font fw-semibold side_widget_title px-0 pt-0 text-{$announcement['type']}">{$announcement['title']}</div>{/if}
		<div class="text-muted">
			{$announcement['code']}
		</div>
	</div>
{/foreach}