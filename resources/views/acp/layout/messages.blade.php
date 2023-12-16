@if ($errors->any())
<div class="alert alert-danger d-flex align-items-center p-5 mb-10">
	<span class="svg-icon svg-icon-2hx svg-icon-danger me-3 ">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
			<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
			<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
		</svg>
	</span>
	<div class="d-flex flex-column">
		@foreach ($errors->all() as $error)
		<h4 class="mb-1 text-danger">{{ $error }}</h4>
		@endforeach
	</div>
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger d-flex align-items-center p-5 mb-10">
	<span class="svg-icon svg-icon-2hx svg-icon-danger me-3 ">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
			<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
			<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
		</svg>
	</span>
	<div class="d-flex flex-column">
		<h4 class="mb-1 text-danger">{{ Session::get('error') }}</h4>
	</div>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success d-flex align-items-center p-5 mb-10">
	<span class="svg-icon svg-icon-2hx svg-icon-success me-3 ">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
			<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
			<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
		</svg>
	</span>
	<div class="d-flex flex-column">
		<h4 class="mb-1 text-success">{{ Session::get('success') }}</h4>
	</div>
</div>
@endif
