@extends('comman.header')
<h1>Welcome, {{ Auth::user()->name }}</h1>
<p>Email: {{ Auth::user()->email }}</p>
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
@include('comman.sidebar')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
<div class="d-flex flex-column flex-column-fluid">
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Default</h1>
						<!--end::Title-->
						<!--begin::Breadcrumb-->
						<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-400 w-5px h-2px"></span>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">Dashboards</li>
							<!--end::Item-->
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page title-->
					<!--begin::Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3">
						<!--begin::Secondary button-->
						<a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
						<!--end::Secondary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
						<!--end::Primary button-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Toolbar container-->
			</div>
			
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col-->
						<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
							<!--begin::Card widget 20-->
							<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<div class="card-title d-flex flex-column">
										<!--begin::Amount-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
										<!--end::Amount-->
										<!--begin::Subtitle-->
										<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
										<!--end::Subtitle-->
									</div>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex align-items-end pt-0">
									<!--begin::Progress-->
									<div class="d-flex align-items-center flex-column mt-3 w-100">
										<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
											<span>43 Pending</span>
											<span>72%</span>
										</div>
										<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
											<div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<!--end::Progress-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card widget 20-->
							<!--begin::Card widget 7-->
							<div class="card card-flush h-md-50 mb-5 mb-xl-10">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<div class="card-title d-flex flex-column">
										<!--begin::Amount-->
										<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
										<!--end::Amount-->
										<!--begin::Subtitle-->
										<span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
										<!--end::Subtitle-->
									</div>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex flex-column justify-content-end pe-0">
									<!--begin::Title-->
									<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
									<!--end::Title-->
									<!--begin::Users group-->
									<div class="symbol-group symbol-hover flex-nowrap">
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
											<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
										</div>
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
											<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
										</div>
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
											<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
										</div>
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
											<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
										</div>
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
											<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
										</div>
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
											<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
										</a>
									</div>
									<!--end::Users group-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card widget 7-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
							<!--begin::Card widget 17-->
							<div class="card card-flush h-md-50 mb-5 mb-xl-10">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<div class="card-title d-flex flex-column">
										<!--begin::Info-->
										<div class="d-flex align-items-center">
											<!--begin::Currency-->
											<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
											<!--end::Currency-->
											<!--begin::Amount-->
											<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
											<!--end::Amount-->
											<!--begin::Badge-->
											<span class="badge badge-light-success fs-base">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->2.2%</span>
											<!--end::Badge-->
										</div>
										<!--end::Info-->
										<!--begin::Subtitle-->
										<span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
										<!--end::Subtitle-->
									</div>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
									<!--begin::Chart-->
									<div class="d-flex flex-center me-5 pt-2">
										<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
									</div>
									<!--end::Chart-->
									<!--begin::Labels-->
									<div class="d-flex flex-column content-justify-center flex-row-fluid">
										<!--begin::Label-->
										<div class="d-flex fw-semibold align-items-center">
											<!--begin::Bullet-->
											<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
										<!--begin::Label-->
										<div class="d-flex fw-semibold align-items-center my-3">
											<!--begin::Bullet-->
											<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
										<!--begin::Label-->
										<div class="d-flex fw-semibold align-items-center">
											<!--begin::Bullet-->
											<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="text-gray-500 flex-grow-1 me-4">Others</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Labels-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card widget 17-->
							<!--begin::List widget 26-->
							<div class="card card-flush h-lg-50">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h3 class="card-title text-gray-800 fw-bold">External Links</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 2-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mb-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Ticket</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Customer</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<!--begin::Menu item-->
												<a href="#" class="menu-link px-3">
													<span class="menu-title">New Group</span>
													<span class="menu-arrow"></span>
												</a>
												<!--end::Menu item-->
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Admin Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Staff Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Member Group</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Contact</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mt-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3 py-3">
													<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-5">
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
										<!--end::Section-->
										<!--begin::Action-->
										<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
													<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
													<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Action-->
									</div>
									<!--end::Item-->
									<!--begin::Separator-->
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
										<!--end::Section-->
										<!--begin::Action-->
										<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
													<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
													<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Action-->
									</div>
									<!--end::Item-->
									<!--begin::Separator-->
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
										<!--end::Section-->
										<!--begin::Action-->
										<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
													<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
													<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Action-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::LIst widget 26-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-6">
							<!--begin::Engage widget 10-->
							<div class="card card-flush h-md-100">
								<!--begin::Body-->
								<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
									<!--begin::Wrapper-->
									<div class="mb-10">
										<!--begin::Title-->
										<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
										<span class="me-2">Try our all new Enviroment with
										<br />
										<span class="position-relative d-inline-block text-danger">
											<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
											<!--begin::Separator-->
											<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
											<!--end::Separator-->
										</span></span>for Free</div>
										<!--end::Title-->
										<!--begin::Action-->
										<div class="text-center">
											<a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
										</div>
										<!--begin::Action-->
									</div>
									<!--begin::Wrapper-->
									<!--begin::Illustration-->
									<img class="mx-auto h-150px h-lg-200px theme-light-show" src="assets/media/illustrations/misc/upgrade.svg" alt="" />
									<img class="mx-auto h-150px h-lg-200px theme-dark-show" src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
									<!--end::Illustration-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Engage widget 10-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row gx-5 gx-xl-10">
						<!--begin::Col-->
						<div class="col-xxl-6 mb-5 mb-xl-10">
							<!--begin::Chart widget 8-->
							<div class="card card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-dark">Performance Overview</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<ul class="nav" id="kt_chart_widget_8_tabs">
											<li class="nav-item">
												<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
											</li>
											<li class="nav-item">
												<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
											</li>
										</ul>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-6">
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
											<!--begin::Statistics-->
											<div class="mb-5">
												<!--begin::Statistics-->
												<div class="d-flex align-items-center mb-2">
													<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
													<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
													<span class="badge badge-light-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->4,8%</span>
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
												<!--end::Description-->
											</div>
											<!--end::Statistics-->
											<!--begin::Chart-->
											<div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="d-flex flex-wrap pt-5">
												<!--begin::Item-->
												<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Courses</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-column pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Radio</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
											</div>
											<!--ed::Items-->
										</div>
										<!--end::Tab pane-->
										<!--begin::Tab pane-->
										<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
											<!--begin::Statistics-->
											<div class="mb-5">
												<!--begin::Statistics-->
												<div class="d-flex align-items-center mb-2">
													<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
													<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
													<span class="badge badge-light-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->2.2%</span>
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
												<!--end::Description-->
											</div>
											<!--end::Statistics-->
											<!--begin::Chart-->
											<div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="d-flex flex-wrap pt-5">
												<!--begin::Item-->
												<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Google Ads</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Courses</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-column pt-sm-3 pt-6">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-3 mb-sm-6">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-bold text-gray-600 fs-6">Radio</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Item-->
											</div>
											<!--ed::Items-->
										</div>
										<!--end::Tab pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-6 mb-5 mb-xl-10">
							<!--begin::Tables widget 16-->
							<div class="card card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Authors Achievements</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 2-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mb-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Ticket</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Customer</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<!--begin::Menu item-->
												<a href="#" class="menu-link px-3">
													<span class="menu-title">New Group</span>
													<span class="menu-arrow"></span>
												</a>
												<!--end::Menu item-->
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Admin Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Staff Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Member Group</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Contact</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mt-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3 py-3">
													<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-6">
									<!--begin::Nav-->
									<ul class="nav nav-pills nav-pills-custom mb-3">
										<!--begin::Item-->
										<li class="nav-item mb-3 me-3 me-lg-6">
											<!--begin::Link-->
											<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
												<!--begin::Icon-->
												<div class="nav-icon mb-3">
													<i class="fonticon-drive fs-1 p-0"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
												<!--end::Title-->
												<!--begin::Bullet-->
												<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
												<!--end::Bullet-->
											</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3 me-3 me-lg-6">
											<!--begin::Link-->
											<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
												<!--begin::Icon-->
												<div class="nav-icon mb-3">
													<i class="fonticon-bank fs-1 p-0"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
												<!--end::Title-->
												<!--begin::Bullet-->
												<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
												<!--end::Bullet-->
											</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3 me-3 me-lg-6">
											<!--begin::Link-->
											<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
												<!--begin::Icon-->
												<div class="nav-icon mb-3">
													<i class="fonticon-like-1 fs-1 p-0"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
												<!--end::Title-->
												<!--begin::Bullet-->
												<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
												<!--end::Bullet-->
											</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3 me-3 me-lg-6">
											<!--begin::Link-->
											<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
												<!--begin::Icon-->
												<div class="nav-icon mb-3">
													<i class="fonticon-remote-control fs-1 p-0"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
												<!--end::Title-->
												<!--begin::Bullet-->
												<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
												<!--end::Bullet-->
											</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3 me-3 me-lg-6">
											<!--begin::Link-->
											<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
												<!--begin::Icon-->
												<div class="nav-icon mb-3">
													<i class="fonticon-telegram fs-1 p-0"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
												<!--end::Title-->
												<!--begin::Bullet-->
												<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
												<!--end::Bullet-->
											</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
															<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
															<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">78.34%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">63.83%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">92.56%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-7.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">63.08%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
															<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
															<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-25.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">85.23%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-24.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">74.83%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-20.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">90.06%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-17.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">54.08%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
															<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
															<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">New York</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">52.34%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-23.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">77.65%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-4.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">82.47%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">67.84%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
															<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
															<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">London</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">53.44%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-21.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">74.64%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-30.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">88.56%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-14.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">63.16%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
															<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
															<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">68.54%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-10.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">55.83%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">93.46%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
																		<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-13">
																<span class="text-gray-600 fw-bold fs-6">64.48%</span>
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--end::Table container-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Tables widget 16-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col-->
						<div class="col-xxl-6">
							<!--begin::Card widget 18-->
							<div class="card card-flush h-xl-100">
								<!--begin::Body-->
								<div class="card-body py-9">
									<!--begin::Row-->
									<div class="row gx-9 h-100">
										<!--begin::Col-->
										<div class="col-sm-6 mb-10 mb-sm-0">
											<!--begin::Image-->
											<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')"></div>
											<!--end::Image-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column h-100">
												<!--begin::Header-->
												<div class="mb-7">
													<!--begin::Headin-->
													<div class="d-flex flex-stack mb-6">
														<!--begin::Title-->
														<div class="flex-shrink-0 me-5">
															<span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
															<span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
														</div>
														<!--end::Title-->
														<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
													</div>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="d-flex align-items-center flex-wrap d-grid gap-2">
														<!--begin::Item-->
														<div class="d-flex align-items-center me-5 me-xl-13">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px symbol-circle me-3">
																<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Info-->
															<div class="m-0">
																<span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
																<a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px symbol-circle me-3">
																<span class="symbol-label bg-success">
																	<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																			<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Info-->
															<div class="m-0">
																<span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
																<span class="fw-bold text-gray-800 fs-7">$64.800</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="mb-6">
													<!--begin::Text-->
													<span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
													<!--end::Text-->
													<!--begin::Stats-->
													<div class="d-flex">
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
															<!--begin::Date-->
															<span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
															<!--end::Date-->
															<!--begin::Label-->
															<div class="fw-semibold text-gray-400">Due Date</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
															<!--begin::Number-->
															<span class="fs-6 text-gray-700 fw-bold">$
															<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold text-gray-400">Budget</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Body-->
												<!--begin::Footer-->
												<div class="d-flex flex-stack mt-auto bd-highlight">
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover flex-nowrap">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
															<img alt="Pic" src="assets/media/avatars/300-3.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
													</div>
													<!--end::Users group-->
													<!--begin::Actions-->
													<a href="../../demo1/dist/apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-semibold">View Project
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
													<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
															<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
															<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
													<!--end::Actions-->
												</div>
												<!--end::Footer-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Card widget 18-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-6">
							<!--begin::Chart widget 36-->
							<div class="card card-flush overflow-hidden h-lg-100">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-dark">Performance</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
										<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
											<!--begin::Display range-->
											<div class="text-gray-600 fw-bold">Loading date range...</div>
											<!--end::Display range-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-1 ms-2 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Daterangepicker-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex align-items-end p-0">
									<!--begin::Chart-->
									<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
									<!--end::Chart-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Chart widget 36-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col-->
						<div class="col-xl-4">
							<!--begin::Chart Widget 35-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-5 mb-6">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<!--begin::Statistics-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Currency-->
											<span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
											<!--end::Currency-->
											<!--begin::Value-->
											<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
											<!--end::Value-->
											<!--begin::Label-->
											<span class="badge badge-light-success fs-base">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->9.2%</span>
											<!--end::Label-->
										</div>
										<!--end::Statistics-->
										<!--begin::Description-->
										<span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
										<!--end::Description-->
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 2-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mb-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Ticket</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Customer</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<!--begin::Menu item-->
												<a href="#" class="menu-link px-3">
													<span class="menu-title">New Group</span>
													<span class="menu-arrow"></span>
												</a>
												<!--end::Menu item-->
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Admin Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Staff Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Member Group</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Contact</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mt-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3 py-3">
													<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body py-0 px-0">
									<!--begin::Nav-->
									<ul class="nav d-flex justify-content-between mb-3 mx-9">
										<!--begin::Item-->
										<li class="nav-item mb-3">
											<!--begin::Link-->
											<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3">
											<!--begin::Link-->
											<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3">
											<!--begin::Link-->
											<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3">
											<!--begin::Link-->
											<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mb-3">
											<!--begin::Link-->
											<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
											<!--end::Link-->
										</li>
										<!--end::Item-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content mt-n6">
										<!--begin::Tap pane-->
										<div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
											<!--begin::Chart-->
											<div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
											<!--end::Chart-->
											<!--begin::Table container-->
											<div class="table-responsive mx-9 mt-n6">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="min-w-100px"></th>
															<th class="min-w-100px text-end pe-0"></th>
															<th class="text-end min-w-50px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-danger">-139.34</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-success">+576.24</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-success">+124.03</span>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
											<!--begin::Chart-->
											<div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
											<!--end::Chart-->
											<!--begin::Table container-->
											<div class="table-responsive mx-9 mt-n6">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="min-w-100px"></th>
															<th class="min-w-100px text-end pe-0"></th>
															<th class="text-end min-w-50px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-success">+134.02</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-primary">-124.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-danger">+144.04</span>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
											<!--begin::Chart-->
											<div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
											<!--end::Chart-->
											<!--begin::Table container-->
											<div class="table-responsive mx-9 mt-n6">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="min-w-100px"></th>
															<th class="min-w-100px text-end pe-0"></th>
															<th class="text-end min-w-50px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-primary">+185.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-danger">+124.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-success">-154.03</span>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
											<!--begin::Chart-->
											<div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
											<!--end::Chart-->
											<!--begin::Table container-->
											<div class="table-responsive mx-9 mt-n6">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="min-w-100px"></th>
															<th class="min-w-100px text-end pe-0"></th>
															<th class="text-end min-w-50px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-warning">+124.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-info">+144.65</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-primary">+154.06</span>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
											<!--begin::Chart-->
											<div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
											<!--end::Chart-->
											<!--begin::Table container-->
											<div class="table-responsive mx-9 mt-n6">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="min-w-100px"></th>
															<th class="min-w-100px text-end pe-0"></th>
															<th class="text-end min-w-50px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-warning">+114.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-primary">-124.03</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
															</td>
															<td class="pe-0 text-end">
																<span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
															</td>
															<td class="pe-0 text-end">
																<span class="fw-bold fs-6 text-info">+165.86</span>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Tap pane-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart Widget 33-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-8">
							<!--begin::Tables widget 14-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Projects Stats</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-6">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
											<!--begin::Table head-->
											<thead>
												<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
													<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
													<th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
													<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
													<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
													<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
													<th class="p-0 pb-3 w-50px text-end">VIEW</th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-3">
																<img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="text-gray-600 fw-bold fs-6">$32,400</span>
													</td>
													<td class="text-end pe-0">
														<!--begin::Label-->
														<span class="badge badge-light-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->9.2%</span>
														<!--end::Label-->
													</td>
													<td class="text-end pe-12">
														<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
													</td>
													<td class="text-end pe-0">
														<div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																	<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-3">
																<img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="text-gray-600 fw-bold fs-6">$256,910</span>
													</td>
													<td class="text-end pe-0">
														<!--begin::Label-->
														<span class="badge badge-light-danger fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->0.4%</span>
														<!--end::Label-->
													</td>
													<td class="text-end pe-12">
														<span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
													</td>
													<td class="text-end pe-0">
														<div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																	<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-3">
																<img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="text-gray-600 fw-bold fs-6">$8,220</span>
													</td>
													<td class="text-end pe-0">
														<!--begin::Label-->
														<span class="badge badge-light-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->9.2%</span>
														<!--end::Label-->
													</td>
													<td class="text-end pe-12">
														<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
													</td>
													<td class="text-end pe-0">
														<div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																	<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-3">
																<img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="text-gray-600 fw-bold fs-6">$74,000</span>
													</td>
													<td class="text-end pe-0">
														<!--begin::Label-->
														<span class="badge badge-light-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->9.2%</span>
														<!--end::Label-->
													</td>
													<td class="text-end pe-12">
														<span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
													</td>
													<td class="text-end pe-0">
														<div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																	<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-3">
																<img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
															</div>
														</div>
													</td>
													<td class="text-end pe-0">
														<span class="text-gray-600 fw-bold fs-6">$183,300</span>
													</td>
													<td class="text-end pe-0">
														<!--begin::Label-->
														<span class="badge badge-light-danger fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->0.4%</span>
														<!--end::Label-->
													</td>
													<td class="text-end pe-12">
														<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
													</td>
													<td class="text-end pe-0">
														<div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																	<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
									</div>
									<!--end::Table-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Tables widget 14-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row gx-5 gx-xl-10">
						<!--begin::Col-->
						<div class="col-xl-4">
							<!--begin::Chart widget 31-->
							<div class="card card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header pt-7 mb-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Warephase stats</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body d-flex align-items-end pt-0">
									<!--begin::Chart-->
									<div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
									<!--end::Chart-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 31-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-8">
							<!--begin::Chart widget 24-->
							<div class="card card-flush overflow-hidden h-xl-100">
								<!--begin::Header-->
								<div class="card-header py-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-dark">Human Resources</span>
										<span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 2-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mb-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Ticket</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Customer</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<!--begin::Menu item-->
												<a href="#" class="menu-link px-3">
													<span class="menu-title">New Group</span>
													<span class="menu-arrow"></span>
												</a>
												<!--end::Menu item-->
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Admin Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Staff Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Member Group</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Contact</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mt-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3 py-3">
													<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Chart-->
									<div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
									<!--end::Chart-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Chart widget 24-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Content container-->
			</div>
</div>						
@include('comman.Footer')