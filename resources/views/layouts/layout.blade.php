<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<link href={{asset('assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/tether/dist/css/tether.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/select2/dist/css/select2.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/nouislider/distribute/nouislider.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/dropzone/dist/dropzone.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/quill/dist/quill.snow.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/@yaireo/tagify/dist/tagify.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/summernote/dist/summernote.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/animate.css/animate.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/toastr/build/toastr.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/dual-listbox/dist/dual-listbox.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/morris.js/morris.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/sweetalert2/dist/sweetalert2.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/socicon/css/socicon.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/plugins/line-awesome/css/line-awesome.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/plugins/flaticon/flaticon.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/plugins/flaticon2/flaticon.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css" />

		<!--end:: Vendor Plugins -->
		<link href={{asset('assets/css/style.bundle.css')}} rel="stylesheet" type="text/css" />

		<!--begin:: Vendor Plugins for custom pages -->
		<link href={{asset('assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/@fullcalendar/core/main.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/@fullcalendar/daygrid/main.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/@fullcalendar/list/main.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/@fullcalendar/timegrid/main.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/jstree/dist/themes/default/style.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/jqvmap/dist/jqvmap.css')}} rel="stylesheet" type="text/css" />
		<link href={{asset('assets/plugins/custom/uppy/dist/uppy.min.css')}} rel="stylesheet" type="text/css" />

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href={{asset('assets/media/logos/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src={{asset('assets/media/logos/logo-2-sm.png')}} />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="index.html">
								<img alt="Logo" src={{asset('assets/media/logos/logo-4.png')}} />
							</a>
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="{{url('/')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-layers-1"></i><span class="kt-menu__link-text">Tickets</span></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/tickets/create')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add New Ticket</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/tickets')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Show All Tickets</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-layers-1"></i><span class="kt-menu__link-text">categories</span></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/category/create')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add New category</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/category')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Show All categories</span></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
								<ul class="kt-menu__nav ">
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{url('/')}}" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{url('/tickets')}}" class="kt-menu__link "><span class="kt-menu__link-text">tickets</span></a></li>
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{url('/tickets/create')}}" class="kt-menu__link "><span class="kt-menu__link-text">New tickets</span></a></li>
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{url('/category')}}" class="kt-menu__link "><span class="kt-menu__link-text">categories</span></a></li>
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{url('/category/create')}}" class="kt-menu__link "><span class="kt-menu__link-text">New category</span></a></li>
								</ul>
							</div>
						</div>
						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">
							<!--begin: Quick Actions -->
							<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
									<span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
									<form>

										<!--begin: Head -->
										<div class="kt-head kt-head--skin-dark" style="background-image: url(assets/media/misc/bg-1.jpg)">
											<h3 class="kt-head__title">
												User Quick Actions
												<span class="kt-space-15"></span>
												<span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
											</h3>
										</div>

										<!--end: Head -->

										<!--begin: Grid Nav -->
										<div class="kt-grid-nav kt-grid-nav--skin-light">
											<div class="kt-grid-nav__row">
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
																<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Accounting</span>
													<span class="kt-grid-nav__desc">eCommerce</span>
												</a>
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3" />
																<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Administration</span>
													<span class="kt-grid-nav__desc">Console</span>
												</a>
											</div>
											<div class="kt-grid-nav__row">
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Projects</span>
													<span class="kt-grid-nav__desc">Pending Tasks</span>
												</a>
												<a href="#" class="kt-grid-nav__item">
													<span class="kt-grid-nav__icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg> </span>
													<span class="kt-grid-nav__title">Customers</span>
													<span class="kt-grid-nav__desc">Latest cases</span>
												</a>
											</div>
										</div>

										<!--end: Grid Nav -->
									</form>
								</div>
							</div>

							<!--end: Quick Actions -->
							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
									<div class="kt-header__topbar-user">
										<span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
										<img class="kt-hidden" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}} />

										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}} />

											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
										</div>
										<div class="kt-user-card__name">
											Sean Stone
										</div>
										<div class="kt-user-card__badge">
											<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Profile
												</div>
												<div class="kt-notification__item-time">
													Account settings and more
												</div>
											</div>
										</a>
										<a href="custom/apps/user/profile-3.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-mail kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Messages
												</div>
												<div class="kt-notification__item-time">
													Inbox and tasks
												</div>
											</div>
										</a>
										<a href="custom/apps/user/profile-2.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-rocket-1 kt-font-danger"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Activities
												</div>
												<div class="kt-notification__item-time">
													Logs and notifications
												</div>
											</div>
										</a>
										<a href="custom/apps/user/profile-3.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-hourglass kt-font-brand"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Tasks
												</div>
												<div class="kt-notification__item-time">
													latest tasks and projects
												</div>
											</div>
										</a>
										<a href="custom/apps/user/profile-1/overview.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-cardiogram kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Billing
												</div>
												<div class="kt-notification__item-time">
													billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
												</div>
											</div>
										</a>
										<div class="kt-notification__custom kt-space-between">
											<a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
											<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User Bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Dashboard 3-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-lg-8 col-xl-8 offset-2 order-lg-1 order-xl-1 bg-light p-4">

                                    @if(session('status'))
                                         <div class='alert-success'>
                                         {{ session('status') }}
                                         </div>
                                    @endif
                                    @yield('content')
								</div>

							</div>

							<!--End::Row-->

							<!--End::Dashboard 3-->
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
							</div>
							<div class="kt-footer__menu">
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<script src={{asset('assets/plugins/general/jquery/dist/jquery.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/popper.js/dist/umd/popper.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap/dist/js/bootstrap.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js-cookie/src/js.cookie.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/moment/min/moment.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/sticky-js/dist/sticky.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/wnumb/wNumb.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery-form/dist/jquery.form.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/block-ui/jquery.blockUI.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/select2/dist/js/select2.full.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/typeahead.js/dist/typeahead.bundle.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/handlebars/dist/handlebars.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/nouislider/distribute/nouislider.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/owl.carousel/dist/owl.carousel.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/autosize/dist/autosize.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/clipboard/dist/clipboard.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/dropzone/dist/dropzone.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/dropzone.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/quill/dist/quill.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/@yaireo/tagify/dist/tagify.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/summernote/dist/summernote.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/markdown/lib/markdown.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery-validation/dist/jquery.validate.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery-validation/dist/additional-methods.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/toastr/build/toastr.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/dual-listbox/dist/dual-listbox.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/raphael/raphael.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/morris.js/morris.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/chart.js/dist/Chart.bundle.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/waypoints/lib/jquery.waypoints.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/counterup/jquery.counterup.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/es6-promise-polyfill/promise.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/sweetalert2/dist/sweetalert2.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery.repeater/src/lib.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery.repeater/src/jquery.input.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/jquery.repeater/src/repeater.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/general/dompurify/dist/purify.js')}} type="text/javascript"></script>

		<!--end:: Vendor Plugins -->
		<script src={{asset('assets/js/scripts.bundle.js')}} type="text/javascript"></script>

		<!--begin:: Vendor Plugins for custom pages -->
		<script src={{asset('assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/core/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/daygrid/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/google-calendar/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/interaction/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/list/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/@fullcalendar/timegrid/main.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/gmaps/gmaps.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/dist/es5/jquery.flot.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.resize.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.categories.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.pie.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.stack.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.crosshair.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/flot/source/jquery.flot.axislabels.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net/js/jquery.dataTables.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/js/global/integration/plugins/datatables.init.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jszip/dist/jszip.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/pdfmake/build/pdfmake.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/pdfmake/build/vfs_fonts.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-buttons/js/buttons.print.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jstree/dist/jstree.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/jquery.vmap.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/uppy/dist/uppy.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/tinymce/tinymce.min.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/tinymce/themes/silver/theme.js')}} type="text/javascript"></script>
		<script src={{asset('assets/plugins/custom/tinymce/themes/mobile/theme.js')}} type="text/javascript"></script>

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src={{asset('assets/js/pages/dashboard.js')}} type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
