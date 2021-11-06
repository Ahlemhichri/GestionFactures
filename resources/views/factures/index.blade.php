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

        <!--content-->
        <div class="page-wrapper" >

                    <div class="content container-fluid">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="mt-5">
                                        <h4 class="card-title float-left mt-2">Liste de Factures</h4>
                                        <a href="{{ route('factures.create')}}" class="btn btn-primary float-right veiwbutton">Ajouter Facture</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <form>
                                    <div class="row formtype">
                                    <div class="col-md-3">


                                    </div>
                                    </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">

                    <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                            <thead>
                                            <tr>
                                            <th>N:</th>
                                            <th>Désignation</th>
                                            <th>Prix HT</th>
                                            <th>TVA</th>
                                            <th>Prix TTC</th>
                                            <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($factures as $facture)
                                            <tr>
                                            <td>{{$facture->id}}</td>
                                            <td>{{$facture->designation}}</td>
                                            <td>{{$facture->prix_ht}}</td>
                                            <td>{{$facture->TVA}}</td>
                                            <td>{{$facture->prix_ttc}}</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('factures.show', $facture->id)}}"><i class="fas fa-columns"></i> show</a>
                                            <a class="dropdown-item" href="{{ route('factures.edit', $facture->id)}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('factures.destroy', $facture->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                            <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-body text-center">
                                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                                            <h3 class="delete_class">
                                            Voulez-vous vraiment supprimer cette facture?</h3>
                                            <form method="POST" action="{{ route('factures.destroy',$facture->id) }}">
                                            @csrf
                                            @method('delete')
                                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                    </table>
                    </div>

                    <div class="text-right">
                    {{$factures->links(('pagination::bootstrap-4'))}}
                    </div>
                    </div>

                    </div>
                    </div>
                    </div>
                    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-body text-center">

                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Voulez-vous vraiment supprimer cette facture?</h3>

                        <div class="m-t-20"> 
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </div>

                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
        </div>
        <!--content-->
     
        
</div>
@include('layouts.scripts')
</body>
</html>