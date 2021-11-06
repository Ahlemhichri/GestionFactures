
<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>

<div class="main-wrapper">

	<div class="header">
			<div class="header-left">
				<a href="#" class="logo">
				<span class="logoclass">Dashboard</span>
				</a>
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fe fe-text-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn">
			<i class="fas fa-bars"></i>
			</a>
		<ul class="nav user-menu">
			<li class="nav-item dropdown has-arrow">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
			<span class="user-img"><i class="fas fa-user"></i></span></a>
	<div class="dropdown-menu">
		<div class="user-header">
				<div class="avatar avatar-sm">
				<img  alt="User Image" class="avatar-img rounded-circle" src="{{asset('assets/img/video-call.jpg')}}">
				</div>
				<div class="user-text">
				<h6> {{ Auth::user()->name }}</h6>
				<p class="text-muted mb-0">Administrateur</p>
				</div>
		</div>
	<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
	{{ __('Logout') }} </a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
	</form>
	</div>
	</li>
	</ul>
	</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
	<li>
	<a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
	</li>
	<li class="list-divider"></li>

	<li class="submenu">
	<a href="#"><i class="fas fa-user"></i> <span> Factures </span> <span class="menu-arrow"></span></a>
			<ul class="submenu_class" style="display: none;">
			<li><a class="active" href="{{ route('factures.index') }}">Liste de Factures </a></li>
			<li><a href="{{ route('factures.create') }}">creer une facture </a></li>
			</ul>
	</li>
   </li>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Ajouter Facture</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form method="POST" action="{{ route('factures.store') }}">
                        @csrf
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Désignation</label>
										<input class="form-control" type="text" value="" name="designation" required> </div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Prix HT</label>
										<input class="form-control" type="text" value="" name="prix_ht"> </div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Description</label>
										<textarea  class="form-control" It was a dark and stormy night...   name="description">
                                       </textarea>
                                          
								   </div>
								</div></div>
								<div class="row">
                                 <div class="col-md-6"> </div>
								<button type="submit" class="btn btn-primary buttonedit">Ajouter  
								</button>
                               </div>
						</form>
					</div>
				</div>
			</div>
</div>
@include('layouts.scripts')
</body>
</html>