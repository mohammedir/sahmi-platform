<div id="kt_header" class="header">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1">
        <!--begin::Container-->
        <div class="d-flex container-xxl align-items-stretch">
            <!--begin::Brand-->
            <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                <!--begin::Heaeder navs toggle-->
                <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <!--end::Heaeder navs toggle-->
                <!--begin::Logo-->
                <a href="{{route('dashboard')}}" class="d-flex align-items-center">
                    <img alt="Logo" src="{{asset('assets/sahmi/media/logo.jpeg')}}" class="h-25px h-lg-30px" />
                </a>
                <!--end::Logo-->
                <!--begin::Tabs wrapper-->
                <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                    <!--begin::Header tabs wrapper-->
                    <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                        <!--begin::Header tabs-->
                        <ul class="nav flex-nowrap text-nowrap">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_1">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_2">Forms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_3">Applications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_4">Reports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_5">Help</a>
                            </li>
                        </ul>
                        <!--begin::Header tabs-->
                    </div>
                    <!--end::Header tabs wrapper-->
                </div>
                <!--end::Tabs wrapper-->
            </div>
            <!--end::Brand-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-row-auto">
                <!--begin::Search-->
                <div class="d-flex align-items-stretch ms-1">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        <!--begin::Search toggle-->
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px">
                                <i class="ki-duotone ki-magnifier fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Search toggle-->
                        <!--begin::Menu-->
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
															<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
														</span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
															<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    <!--end::Reset-->
                                    <!--begin::Toolbar-->
                                    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                        <!--begin::Preferences toggle-->
                                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
                                            <i class="ki-duotone ki-setting-2 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Preferences toggle-->
                                        <!--begin::Advanced search toggle-->
                                        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
                                            <i class="ki-duotone ki-down fs-2"></i>
                                        </div>
                                        <!--end::Advanced search toggle-->
                                    </div>
                                    <!--end::Toolbar-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{asset('assets/media/avatars/300-6.jpg')}}" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{asset('assets/media/avatars/300-2.jpg')}}" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{asset('assets/media/avatars/300-9.jpg')}}" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{asset('assets/media/avatars/300-14.jpg')}}" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{asset('assets/media/avatars/300-11.jpg')}}" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="" />
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tvit.svg')}}" alt="" />
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{asset('assets/media/svg/misc/infography.svg')}}" alt="" />
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                <span class="fs-7 fw-semibold text-muted">Administration</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/leaf.svg')}}" alt="" />
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tower.svg')}}" alt="" />
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-notepad fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-semibold text-muted">#45670</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-frame fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-semibold text-muted">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                <span class="fs-7 fw-semibold text-muted">#21090</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">#34560</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Recently viewed-->
                                <div class="mb-5" data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                        <!--begin::Label-->
                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-325px">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-laptop fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                <span class="fs-7 text-muted fw-semibold">#45789</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                <span class="fs-7 text-muted fw-semibold">#84050</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                <span class="fs-7 text-muted fw-semibold">#67945</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-sms fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-bank fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                <span class="fs-7 text-muted fw-semibold">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#24005</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <!--begin::Icon-->
                                    <div class="pt-10 pb-10">
                                        <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Message-->
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Empty-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Preferences-->
                            <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="users" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="orders" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="projects" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="any" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                        <option value="next">Within the next</option>
                                        <option value="last">Within the last</option>
                                        <option value="between">Between</option>
                                        <option value="on">On</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                            <option value="days">Days</option>
                                            <option value="weeks">Weeks</option>
                                            <option value="months">Months</option>
                                            <option value="years">Years</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                    <a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                            <!--begin::Preferences-->
                            <form data-kt-search-element="preferences" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="pb-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end pt-7">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                    <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Search-->
                <!--begin::Activities-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Drawer toggle-->
                    <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px" id="kt_activities_toggle">
                        <i class="ki-duotone ki-chart-simple fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <!--end::Drawer toggle-->
                </div>
                <!--end::Activities-->
                <!--begin::Chat-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px position-relative" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <!--begin::Notification animation-->
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                        <!--end::Notification animation-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
                <!--begin::Quick links-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                            <!--end::Title-->
                            <!--begin::Status-->
                            <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                            <!--end::Status-->
                        </div>
                        <!--end::Heading-->
                        <!--begin:Nav-->
                        <div class="row g-0">
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                    <span class="fs-7 text-gray-500">eCommerce</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                    <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                    <span class="fs-7 text-gray-500">Console</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                    <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                    <span class="fs-7 text-gray-500">Pending Tasks</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="col-6">
                                <a href="apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                    <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                    <span class="fs-7 text-gray-500">Latest cases</span>
                                </a>
                            </div>
                            <!--end:Item-->
                        </div>
                        <!--end:Nav-->
                        <!--begin::View more-->
                        <div class="py-2 text-center border-top">
                            <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                <i class="ki-duotone ki-arrow-right fs-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i></a>
                        </div>
                        <!--end::View more-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--begin::Quick links-->
                <!--begin::Theme mode-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Theme mode-->
                <!--begin::User-->
                <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                    <!--begin::User info-->
                    <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Name-->
                        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                            <span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">{{auth()->user()->name}}</span>
                            <span class="text-white fs-8 fw-bold lh-1">UX Designer</span>
                        </div>
                        <!--end::Name-->
                        <!--begin::Symbol-->
                        <div class="symbol symbol-30px symbol-md-40px">
                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="image" />
                        </div>
                        <!--end::Symbol-->
                    </div>
                    <!--end::User info-->
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{asset('assets/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="apps/projects/list.html" class="menu-link px-5">
                                <span class="menu-text">My Projects</span>
                                <span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">My Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
															<i class="ki-duotone ki-information-5 fs-5">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <span class="form-check-label text-muted fs-7">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <!-- رابط تسجيل الخروج -->
                            <a href="{{ route('logout') }}" class="menu-link px-5"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ki-outline ki-logout fs-2 me-2"></i>
                                Sign Out
                            </a>

                            <!-- الفورم المخفي لتنفيذ POST -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                </div>
                <!--end::User -->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header top-->
    <!--begin::Header navs-->
    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
        <!--begin::Container-->
        <div class="d-lg-flex container-xxl w-100">
            <!--begin::Wrapper-->
            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                <!--begin::Header tab content-->
                <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
															<span class="menu-title">@lang('admin.dashboard')</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                        <!--begin:Dashboards menu-->
                                        <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="index.html" class="menu-link active">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-element-11 text-primary fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																								<span class="path4"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Default</span>
																							<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/ecommerce.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-basket text-danger fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																								<span class="path4"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																							<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/projects.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-abstract-44 text-info fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Projects</span>
																							<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/online-courses.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-color-swatch text-success fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																								<span class="path4"></span>
																								<span class="path5"></span>
																								<span class="path6"></span>
																								<span class="path7"></span>
																								<span class="path8"></span>
																								<span class="path9"></span>
																								<span class="path10"></span>
																								<span class="path11"></span>
																								<span class="path12"></span>
																								<span class="path13"></span>
																								<span class="path14"></span>
																								<span class="path15"></span>
																								<span class="path16"></span>
																								<span class="path17"></span>
																								<span class="path18"></span>
																								<span class="path19"></span>
																								<span class="path20"></span>
																								<span class="path21"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																							<span class="fs-7 fw-semibold text-muted">Student progress</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/marketing.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-chart-simple text-gray-900 fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																								<span class="path4"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																							<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/bidding.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-switch text-warning fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																							<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/pos.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">POS System</span>
																							<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6 mb-3">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="dashboards/call-center.html" class="menu-link">
																						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																							<i class="ki-duotone ki-call text-primary fs-1">
																								<span class="path1"></span>
																								<span class="path2"></span>
																								<span class="path3"></span>
																								<span class="path4"></span>
																								<span class="path5"></span>
																								<span class="path6"></span>
																								<span class="path7"></span>
																								<span class="path8"></span>
																							</i>
																						</span>
                                                                    <span class="d-flex flex-column">
																							<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																							<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																						</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                    <div class="separator separator-dashed mx-5 my-5"></div>
                                                    <!--begin:Landing-->
                                                    <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                        <div class="d-flex flex-column me-5">
                                                            <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                                                            <div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing & others</div>
                                                        </div>
                                                        <a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                                                    </div>
                                                    <!--end:Landing-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                    <!--begin:Heading-->
                                                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
                                                    <!--end:Heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/logistics.html" class="menu-link py-2">
                                                            <span class="menu-title">Logistics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/website-analytics.html" class="menu-link py-2">
                                                            <span class="menu-title">Website Analytics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/finance-performance.html" class="menu-link py-2">
                                                            <span class="menu-title">Finance Performance</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/store-analytics.html" class="menu-link py-2">
                                                            <span class="menu-title">Store Analytics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/social.html" class="menu-link py-2">
                                                            <span class="menu-title">Social</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/delivery.html" class="menu-link py-2">
                                                            <span class="menu-title">Delivery</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/crypto.html" class="menu-link py-2">
                                                            <span class="menu-title">Crypto</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/school.html" class="menu-link py-2">
                                                            <span class="menu-title">School</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="dashboards/podcast.html" class="menu-link py-2">
                                                            <span class="menu-title">Podcast</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Dashboards menu-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
															<span class="menu-title">Pages</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                        <!--begin:Pages menu-->
                                        <div class="menu-active-bg px-4 px-lg-0">
                                            <!--begin:Tabs nav-->
                                            <div class="d-flex w-100 overflow-auto">
                                                <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                </ul>
                                            </div>
                                            <!--end:Tabs nav-->
                                            <!--begin:Tab content-->
                                            <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/overview.html" class="menu-link">
                                                                            <span class="menu-title">Overview</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/projects.html" class="menu-link">
                                                                            <span class="menu-title">Projects</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/campaigns.html" class="menu-link">
                                                                            <span class="menu-title">Campaigns</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/documents.html" class="menu-link">
                                                                            <span class="menu-title">Documents</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/followers.html" class="menu-link">
                                                                            <span class="menu-title">Followers</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="pages/user-profile/activity.html" class="menu-link">
                                                                            <span class="menu-title">Activity</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/about.html" class="menu-link">
                                                                                <span class="menu-title">About</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/team.html" class="menu-link">
                                                                                <span class="menu-title">Our Team</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/contact.html" class="menu-link">
                                                                                <span class="menu-title">Contact Us</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/licenses.html" class="menu-link">
                                                                                <span class="menu-title">Licenses</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/sitemap.html" class="menu-link">
                                                                                <span class="menu-title">Sitemap</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/careers/list.html" class="menu-link">
                                                                                <span class="menu-title">Careers List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/careers/apply.html" class="menu-link">
                                                                                <span class="menu-title">Careers Apply</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/faq/classic.html" class="menu-link">
                                                                                <span class="menu-title">FAQ Classic</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/faq/extended.html" class="menu-link">
                                                                                <span class="menu-title">FAQ Extended</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/blog/home.html" class="menu-link">
                                                                                <span class="menu-title">Blog Home</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/blog/post.html" class="menu-link">
                                                                                <span class="menu-title">Blog Post</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/pricing.html" class="menu-link">
                                                                                <span class="menu-title">Column Pricing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/pricing/table.html" class="menu-link">
                                                                                <span class="menu-title">Table Pricing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/feeds.html" class="menu-link">
                                                                                <span class="menu-title">Feeds</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/activity.html" class="menu-link">
                                                                                <span class="menu-title">Activty</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/followers.html" class="menu-link">
                                                                                <span class="menu-title">Followers</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/social/settings.html" class="menu-link">
                                                                                <span class="menu-title">Settings</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4">
                                                            <img src="{{asset('assets/media/stock/600x600/img-82.jpg')}}" class="rounded mw-100" alt="" />
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-5 mb-6 mb-lg-0">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-6">
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/overview.html" class="menu-link">
                                                                            <span class="menu-title">Overview</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/settings.html" class="menu-link">
                                                                            <span class="menu-title">Settings</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/security.html" class="menu-link">
                                                                            <span class="menu-title">Security</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/activity.html" class="menu-link">
                                                                            <span class="menu-title">Activity</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/billing.html" class="menu-link">
                                                                            <span class="menu-title">Billing</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-6">
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/statements.html" class="menu-link">
                                                                            <span class="menu-title">Statements</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/referrals.html" class="menu-link">
                                                                            <span class="menu-title">Referrals</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/api-keys.html" class="menu-link">
                                                                            <span class="menu-title">API Keys</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="account/logs.html" class="menu-link">
                                                                            <span class="menu-title">Logs</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-7">
                                                            <img src="{{asset('assets/media/stock/900x600/46.jpg')}}" class="rounded mw-100" alt="" />
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/sign-in.html" class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/sign-up.html" class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/two-factor.html" class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/reset-password.html" class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/corporate/new-password.html" class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/sign-in.html" class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/sign-up.html" class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/two-factor.html" class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/reset-password.html" class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/overlay/new-password.html" class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/sign-in.html" class="menu-link">
                                                                        <span class="menu-title">Sign-in</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/sign-up.html" class="menu-link">
                                                                        <span class="menu-title">Sign-up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/two-factor.html" class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/reset-password.html" class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/creative/new-password.html" class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/sign-in.html" class="menu-link">
                                                                        <span class="menu-title">Sign-In</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/sign-up.html" class="menu-link">
                                                                        <span class="menu-title">Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/two-factor.html" class="menu-link">
                                                                        <span class="menu-title">Two-Factor</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/reset-password.html" class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/layouts/fancy/new-password.html" class="menu-link">
                                                                        <span class="menu-title">New Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/extended/multi-steps-sign-up.html" class="menu-link">
                                                                        <span class="menu-title">Multi-Steps Sign-Up</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/welcome.html" class="menu-link">
                                                                        <span class="menu-title">Welcome Message</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/verify-email.html" class="menu-link">
                                                                        <span class="menu-title">Verify Email</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/coming-soon.html" class="menu-link">
                                                                        <span class="menu-title">Coming Soon</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/password-confirmation.html" class="menu-link">
                                                                        <span class="menu-title">Password Confirmation</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/account-deactivated.html" class="menu-link">
                                                                        <span class="menu-title">Account Deactivation</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/error-404.html" class="menu-link">
                                                                        <span class="menu-title">Error 404</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/general/error-500.html" class="menu-link">
                                                                        <span class="menu-title">Error 500</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/welcome-message.html" class="menu-link">
                                                                        <span class="menu-title">Welcome Message</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/reset-password.html" class="menu-link">
                                                                        <span class="menu-title">Reset Password</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/subscription-confirmed.html" class="menu-link">
                                                                        <span class="menu-title">Subscription Confirmed</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/card-declined.html" class="menu-link">
                                                                        <span class="menu-title">Credit Card Declined</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-1.html" class="menu-link">
                                                                        <span class="menu-title">Promo 1</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-2.html" class="menu-link">
                                                                        <span class="menu-title">Promo 2</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="authentication/email/promo-3.html" class="menu-link">
                                                                        <span class="menu-title">Promo 3</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-7">
                                                            <!--begin:Row-->
                                                            <div class="row">
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/invite-friends.html" class="menu-link">
                                                                                <span class="menu-title">Invite Friends</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/view-users.html" class="menu-link">
                                                                                <span class="menu-title">View Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/select-users.html" class="menu-link">
                                                                                <span class="menu-title">Select Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/upgrade-plan.html" class="menu-link">
                                                                                <span class="menu-title">Upgrade Plan</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/general/share-earn.html" class="menu-link">
                                                                                <span class="menu-title">Share & Earn</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-target.html" class="menu-link">
                                                                                <span class="menu-title">New Target</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-card.html" class="menu-link">
                                                                                <span class="menu-title">New Card</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/new-address.html" class="menu-link">
                                                                                <span class="menu-title">New Address</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/create-api-key.html" class="menu-link">
                                                                                <span class="menu-title">Create API Key</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/forms/bidding.html" class="menu-link">
                                                                                <span class="menu-title">Bidding</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-6">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-app.html" class="menu-link">
                                                                                <span class="menu-title">Create App</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-campaign.html" class="menu-link">
                                                                                <span class="menu-title">Create Campaign</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-account.html" class="menu-link">
                                                                                <span class="menu-title">Create Business Acc</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/create-project.html" class="menu-link">
                                                                                <span class="menu-title">Create Project</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                                                                <span class="menu-title">Top Up Wallet</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/offer-a-deal.html" class="menu-link">
                                                                                <span class="menu-title">Offer a Deal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/two-factor-authentication.html" class="menu-link">
                                                                                <span class="menu-title">Two Factor Auth</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/search/horizontal.html" class="menu-link">
                                                                                <span class="menu-title">Horizontal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/search/vertical.html" class="menu-link">
                                                                                <span class="menu-title">Vertical</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/search/users.html" class="menu-link">
                                                                                <span class="menu-title">Users</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/search/select-location.html" class="menu-link">
                                                                                <span class="menu-title">Select Location</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                                <!--begin:Col-->
                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                    <!--begin:Menu section-->
                                                                    <div class="mb-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                                                        <!--end:Menu heading-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/horizontal.html" class="menu-link">
                                                                                <span class="menu-title">Horizontal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/vertical.html" class="menu-link">
                                                                                <span class="menu-title">Vertical</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/two-factor-authentication.html" class="menu-link">
                                                                                <span class="menu-title">Two Factor Auth</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-app.html" class="menu-link">
                                                                                <span class="menu-title">Create App</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-campaign.html" class="menu-link">
                                                                                <span class="menu-title">Create Campaign</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-account.html" class="menu-link">
                                                                                <span class="menu-title">Create Account</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/create-project.html" class="menu-link">
                                                                                <span class="menu-title">Create Project</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                                                                <span class="menu-title">Top Up Wallet</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="utilities/wizards/offer-a-deal.html" class="menu-link">
                                                                                <span class="menu-title">Offer a Deal</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu section-->
                                                                </div>
                                                                <!--end:Col-->
                                                            </div>
                                                            <!--end:Row-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-5 pe-lg-5">
                                                            <img src="{{asset('assets/media/stock/600x600/img-84.jpg')}}" class="rounded mw-100" alt="" />
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-6 mb-lg-0">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/lists.html" class="menu-link">
                                                                    <span class="menu-title">Lists</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/statistics.html" class="menu-link">
                                                                    <span class="menu-title">Statistics</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/charts.html" class="menu-link">
                                                                    <span class="menu-title">Charts</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/mixed.html" class="menu-link">
                                                                    <span class="menu-title">Mixed</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/tables.html" class="menu-link">
                                                                    <span class="menu-title">Tables</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="widgets/feeds.html" class="menu-link">
                                                                    <span class="menu-title">Feeds</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-8">
                                                            <img src="{{asset('assets/media/stock/900x600/44.jpg')}}" class="rounded mw-100" alt="" />
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Tab pane-->
                                            </div>
                                            <!--end:Tab content-->
                                        </div>
                                        <!--end:Pages menu-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
															<span class="menu-title">Apps</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-shield-tick fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
																	<span class="menu-title">User Management</span>
																	<span class="menu-arrow"></span>
																</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">@lang('admin.Users')</span>
																			<span class="menu-arrow"></span>
																		</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3" href="{{route('users.index')}}">
																					<span class="menu-bullet">
																						<span class="bullet bullet-dot"></span>
																					</span>
                                                                <span class="menu-title">@lang('admin.Users List')</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3" href="apps/user-management/users/view.html">
																					<span class="menu-bullet">
																						<span class="bullet bullet-dot"></span>
																					</span>
                                                                <span class="menu-title">@lang('admin.View User')</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">@lang('admin.Role')</span>
																			<span class="menu-arrow"></span>
																		</span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3" href="{{route('roles.index')}}">
																					<span class="menu-bullet">
																						<span class="bullet bullet-dot"></span>
																					</span>
                                                                <span class="menu-title">@lang('admin.Roles List')</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link py-3" href="apps/user-management/roles/view.html">
																					<span class="menu-bullet">
																						<span class="bullet bullet-dot"></span>
																					</span>
                                                                <span class="menu-title">@lang('admin.View Roles')</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/user-management/permissions.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">@lang('admin.Permissions')</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-file-added fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
																	<span class="menu-title">File Manager</span>
																	<span class="menu-arrow"></span>
																</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/folders.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Folders</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/files.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Files</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/blank.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Blank Directory</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/file-manager/settings.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Settings</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-sms fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
																	<span class="menu-title">Inbox</span>
																	<span class="menu-arrow"></span>
																</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/listing.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Messages</span>
                                                        <span class="menu-badge">
																				<span class="badge badge-light-success">3</span>
																			</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/compose.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Compose</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/inbox/reply.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">View & Reply</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-message-text-2 fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																	<span class="menu-title">Chat</span>
																	<span class="menu-arrow"></span>
																</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/private.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Private Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/group.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Group Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link py-3" href="apps/chat/drawer.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
                                                        <span class="menu-title">Drawer Chat</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="apps/calendar.html">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-calendar-8 fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																			<span class="path6"></span>
																		</i>
																	</span>
                                                <span class="menu-title">Calendar</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link py-3">
															<span class="menu-title">Help</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-rocket fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                <span class="menu-title">Components</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-abstract-26 fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                <span class="menu-title">Documentation</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="https://preview.keenthemes.com/metronic8/demo20/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-switch fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                <span class="menu-title">Layout Builder</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link py-3" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-code fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
                                                <span class="menu-title">Changelog v8.2.9</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_2">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="documentation/base/forms/controls.html">Controls</a>
                                <a class="btn btn-sm btn-light-success fw-bold" href="documentation/base/forms/advanced.html">Advanced</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="documentation/base/forms/floating-labels.html">Floating Labels</a>
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-info fw-bold" href="documentation/forms/autosize.html">More Components</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_3">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="{{route('users.index')}}">User Management</a>
                                <a class="btn btn-sm btn-light-success fw-bold" href="apps/inbox/listing.html">Inbox</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="apps/file-manager/folders.html">File Manager</a>
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-info fw-bold" href="apps/subscriptions/view.html">More Apps</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_4">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="apps/ecommerce/catalog/products.html">eCommerce</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="apps/file-manager/folders.html">File Manager</a>
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-info fw-bold" href="apps/subscriptions/view.html">More Apps</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_5">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="https://preview.keenthemes.com/html/metronic/docs">Documentation</a>
                                <a class="btn btn-sm btn-light-success fw-bold" href="documentation/getting-started/video-tutorials.html">Video Tutorials</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="https://preview.keenthemes.com/metronic8/demo20/layout-builder.html">Layout Builder</a>
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-info fw-bold" href="documentation/getting-started/changelog.html">Changelog</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Header tab content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header navs-->
</div>
