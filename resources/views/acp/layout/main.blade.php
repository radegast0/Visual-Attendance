<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="../../../" />
        <title>{{ config("app.name") }}</title>
        <meta charset="utf-8" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="{{ asset("assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
        @stack("head-scripts")
        @yield("css")
        @stack("css")
        <script>if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
        <script src="{{ asset("assets/js/custom/notiflix-block-aio-3.2.6.min.js") }}"></script>
        <script src="{{ asset("assets/plugins/global/plugins.bundle.js") }}"></script>
		<script src="{{ asset("assets/js/scripts.bundle.js") }}"></script>
		<script src="{{ asset("assets/js/widgets.bundle.js") }}"></script>
		<script src="{{ asset("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
	</head>
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				@stack("header")
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					@stack("sidebar")
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">
                                    @include("acp.layout.messages")
									@yield("content")
                                    @stack("content")
								</div>
							</div>
						</div>
						<div id="kt_app_footer" class="app-footer">
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<script>var hostUrl = "assets/";</script>
        <script>
            jQuery.ajaxSetup({
                beforeSend: function() {
                    // Notiflix.Loading.pulse()
                },
                complete: function(){
                    // Notiflix.Loading.remove()
                },
                fail: function(){
                    // Notiflix.Notify.failure('İşlem başarısız oldu. Lütfen tekrar deneyiniz.')
                }
            });
            let blocked = false;
            function toggleBlock(el = null){
                console.log(el)
                const block = el ? el : '#kt_app_main'
                if(blocked == false){
                    Notiflix.Block.circle(block);
                }
                else{
                    Notiflix.Block.remove(block);
                }
                blocked = !blocked
            }
		</script>
        @yield("scripts")
        @stack("scripts")
	</body>
</html>
