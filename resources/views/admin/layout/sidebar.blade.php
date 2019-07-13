<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="d-xl-none d-lg-none" href="#">Dashboard</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav flex-column">
<li class="nav-divider">
Menu
</li>

@foreach($sidebars as $sidebar)

	@if(count($sidebar['roles']) > 1)
		<li class="nav-item">
			<a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-{{ $sidebar['id'] }}" aria-controls="submenu-{{ $sidebar['id'] }}"><i class="{{ $idebar['icon'] }}"></i>{{$sidebar['name']}}</a>
			<div id="submenu-{{ $sidebar['id'] }}" class="collapse submenu" style="">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="pages/cards.html">{{ $sidebar['name'] }}</a>
		 			</li>
				</ul>
			</div>
		</li>
	@endif
@endforeach