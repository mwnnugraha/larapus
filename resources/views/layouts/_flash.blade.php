@if (session()->has('flash_notification.message'))
	<div class="container">
		<div class="alert alert-{{ session()->get('flash_notification.lavel') }}">
			<button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>

			{!! session()->get('flash_notification.message') !!}
		</div>
	</div>
@endif