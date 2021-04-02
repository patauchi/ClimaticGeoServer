	<nav>
		<ul>
			<li class="{{ setActive('home') }}"><a  href="{{ route('home') }}">{{__('Home')}}</a></li>
		<li class="{{ setActive('about') }}"><a  href=" {{ route('about') }} ">{{__('About')}}</a></li>
		<li class="{{ setActive('project.*') }}"><a  href="{{ route('project.index') }}">{{__('Projects')}}</a></li>
		@guest
			<li><a href="{{route('login')}}">Login</a></li>
			@else
				<li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()">Cerrar Sesion</a></li>
		@endguest
		</ul>

	</nav>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
		@csrf
	</form>