@section('login')
<div class="nav-item dropdown">
	<a onclick="show_login_form()" class="btn btn-dark text-white me-2">Login</a>
    <div id="login_form" class="dropdown-menu action-form">
		<form method="post" action="{{ route('login') }}">
            @csrf
			<div class="form-group" style="margin: 10px">
				<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required="required">
			</div>
			<div class="form-group" style="margin: 10px">
				<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
			</div>
			<div class="mb-4">
				<div class="flex items-center">
					<input type="checkbox" name="remember" id="remember" style="margin: 10px">
					<label for="remember">Remember me</label>
				</div>
			</div>
			<input type="submit" class="btn btn-primary btn-block" value="Login" style="margin: 10px">
		</form>
	</div>
</div>