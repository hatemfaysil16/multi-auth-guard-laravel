	@include('layouts.backend.head.head')
	@include('layouts.backend.materal.css.css')
	      @livewireStyles
    </head>
	<!-- end::Head -->
	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading @if(App()->getLocale() ==='ar') ar_lang  @endif" >
		<!-- begin:: Header Mobile -->
		@include('layouts.backend.sidebar.sidebar_mobile')
		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				@include('layouts.backend.sidebar.sidebar_desktop')
				<!-- end:: Aside -->

                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
					<!-- begin:: Header -->
					@include('layouts.backend.head.header_top')
					<!-- end:: Header -->
                   @yield('content')
                    </div>
                    <!-- begin:: Footer -->
					@include('layouts.backend.footer.footer')
                    <!-- end:: Footer -->
                </div>
			</div>
		</div>
		@include('layouts.backend.materal.js.js')
	</body>
	@livewireScripts
	<!-- end::Body -->
</html>
