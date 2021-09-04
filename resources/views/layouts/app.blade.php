<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.common.header-link')
</head>
<body>
    
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
            @include('layouts.common.header')
                @yield('content')
            @include('layouts.common.footer')
        </div>
    </div>
    @include('layouts.common.footer-link')
</body>
</html>