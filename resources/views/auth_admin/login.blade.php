	@include('layouts.backend.head.head')
	@include('layouts.backend.materal.css.css')
		<link href="{{ asset('backend/assets/css/demo1/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('backend/assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('backend/assets/media/bg/bg-2.jpg') }});">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="{{route('login.admin')}}">
									<img src="{{ asset('backend/assets/media/logos/logo-5.png') }}">
								</a>
							</div>
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">{{ TanslationHelper::translate('Sign In To Admin') }}</h3>
								</div>
										@include('layouts.MassageValidations.ErrorValidation')
								<form class="kt-form" method="post" action="{{ route('login.admin') }}">
									@csrf
                                    @method('POST')
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off" name="email">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Password" name="password" name="password">
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">{{ TanslationHelper::translate('Sign In') }}</button>
									</div>
								</form>
							</div>
	
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->


		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		@include('layouts.backend.materal.js.js')

	</body>

	<!-- end::Body -->
</html>