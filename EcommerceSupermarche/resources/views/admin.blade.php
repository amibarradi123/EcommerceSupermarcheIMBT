<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
  <title>
    Home page
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
  
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    
    <div class="collapse navbar-collapse  w-auto  max-height-vh-150" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        {{-- admin part --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">BigAdmin part <div style="display: inline">              
            <img src="{{asset('/icons/png/24x24/Boss.png')}}">
          </div></h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowClients">
            
            <span class="material-symbols-outlined">
              account_circle
              </span>
            <span class="nav-link-text ms-1">view ALL clients</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowCommandes">
            
            <span class="material-symbols-outlined">
            create_new_folder
            </span>
            <span class="nav-link-text ms-1">view ALL commandes</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowCommentaires">
            
            <span class="material-symbols-outlined">
              clear_all
              </span>
            <span class="nav-link-text ms-1">view ALL comments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowFournisseurs">
            
            <span class="material-symbols-outlined">
              event_available
              </span>
            <span class="nav-link-text ms-1">view ALL fournisseurs</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowLivraisons">
            
            <span class="material-symbols-outlined">
              info
              </span>
            <span class="nav-link-text ms-1">view ALL livraisons</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowLivreurs">
            
            <span class="material-symbols-outlined">
              info
              </span>
            <span class="nav-link-text ms-1">view ALL livreurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowProduits">
            
            <span class="material-symbols-outlined">
              info
              </span>
            <span class="nav-link-text ms-1">view ALL products</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="/admin-ShowUsers">
            
            <span class="material-symbols-outlined">
              account_circle
              </span>
            <span class="nav-link-text ms-1">view ALL users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowCategories">
            
            <span class="material-symbols-outlined">
              info
              </span>
            <span class="nav-link-text ms-1">view ALL Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/admin-ShowCodepromo">
            
            <span class="material-symbols-outlined">
              info
              </span>
            <span class="nav-link-text ms-1">view ALL promo codes</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              Welcome, {{Auth::user()->Nom_Utilisateur}}
            </div>
          </div>
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Log out</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            
              {{-- <a href="/" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Log out</span>

              </a> --}}
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- testing --}}
 
  {{-- testing --}}
  <div style="padding-left: 15%;padding-right: 1%;color:black">
    @isset($clients)
    Clients LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id_Client</center></th>
            <th><center>Nom_Client</center></th>
            <th><center>Prenom_Client </center></th>
            <th><center>DateNaissance_Client</center></th>
            <th><center>Tel_Client</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($clients as $clients)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$clients->Id_Client}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$clients->Nom_Client}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$clients->Prenom_Client}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$clients->DateNaissance_Client}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$clients->Tel_Client}}</center></td>
        
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>    
    </tr>
    @endforeach
</table>
    @endisset

    @isset($categories)
    Categories LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Nom_Catégorie</center></th>
            <th><center>Photo_Categorie</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($categories as $categories)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$categories->Id_Categorie}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$categories->Nom_Catégorie}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$categories->Photo_Categorie}}</center></td> 
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    @isset($codepromo)
    Code promo LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>CodePromo</center></th>
            <th><center>Pourcentage</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($codepromo as $codepromo)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$codepromo->Id_CodePromo}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$codepromo->CodePromo}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$codepromo->Pourcentage}}</center></td> 
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    @isset($commandes)
    Commandes LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Date du Commande</center></th>
            <th><center>Adresse Liv Commande</center></th>
            <th><center>Montant Commande</center></th>
            <th><center>Id Client</center></th>
            <th><center> Etat de Commande </center></th>
            {{-- <th><center>password (crypted)</center></th> --}}
            <th><center> Code Promo</center></th>
            <th><center>Mode de Paiement</center></th>
            
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($commandes as $commandes)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Id_Commande}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Date_Commande}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Adresse_Liv_Commande}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Montant_Commande}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Id_Client}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->Etat_Commande}}</center></td>
        {{-- <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->password}}</center></td> --}}
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->CodePromo}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commandes->ModePaiement}}</center></td>
        

         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset
    
    @isset($commentaires)
    Comments LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Text Commentaire</center></th>
            <th><center>Id Client</center></th>
            <th><center>Id Produit</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($commentaires as $commentaires)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commentaires->Id_Commentaire}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commentaires->Text_Commentaire}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commentaires->Id_Client}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$commentaires->Id_Produit}}</center></td>
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    @isset($fournisseurs)
    Fournisseurs LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Nom Fournisseur</center></th>
            <th><center>Prenom Fournisseur</center></th>
            <th><center>DateNaissance Fournisseur</center></th>
            <th><center>Tel Fournisseur</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($fournisseurs as $fournisseurs)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$fournisseurs->Id_Fournisseur}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$fournisseurs->Nom_Fournisseur}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$fournisseurs->Prenom_Fournisseur}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$fournisseurs->DateNaissance_Fournisseur}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$fournisseurs->Tel_Fournisseur}}</center></td>
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    @isset($livraisons)
    Livraisons LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Date Livraison</center></th>
            <th><center>Adesse Livraison</center></th>
            <th><center>Id Livreur</center></th>
            <th><center>Id Commande</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($livraisons as $livraisons)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livraisons->Id_Livraison}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livraisons->Date_Livraison}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livraisons->Adesse_Livraison}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livraisons->Id_Livreur}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livraisons->Id_Commande}}</center></td>

         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    @isset($livreurs)
    Livreurs LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Nom Livreur</center></th>
            <th><center>Tel Livreur</center></th>
            <th><center>Email Livreur</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($livreurs as $livreurs)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livreurs->Id_Livreur}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livreurs->Nom_Livreur}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livreurs->Tel_Livreur}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$livreurs->Email_Livreur}}</center></td>
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

    
    
    @isset($produits)
    Products LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Nom Produit</center></th>
            <th><center>Prix Produit</center></th>
            <th><center>Quantite Produit</center></th>
            <th><center>Date Pub Produit</center></th>
            <th><center>Id Categorie</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($produits as $produits)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Id_Produit}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Nom_Produit}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Prix_Produit}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Quantite_Produit}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Date_Pub_Produit}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$produits->Id_Categorie}}</center></td>
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset
    
    @isset($users)
    Users LIST:

    <table class="table table-striped table-hover" >
        
        <tr style="white-space:pre-wrap; word-wrap:break-word">
            <th><center>Id</center></th>
            <th><center>Nom Utilisateur</center></th>
            <th><center>Email</center></th>
            <th><center>Email verified at</center></th>
            <th><center>role</center></th>
            <th><center>remember_token</center></th>
            <th><center>created_at</center></th>
            <th><center>updated_at</center></th>
            <th><center>VIEW</center></th>
            <th><center>UPDATE</center></th>
            <th><center>DELETE</center></th>
        </tr>
    
    @foreach($users as $users)
    
    <tr style="vertical-align: middle">
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->id}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->name}}</td>         
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->email}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->email_verified_at}}</center></td> 
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->role}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->remember_token}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->created_at}}</center></td>
        <td style="white-space:pre-wrap; word-wrap:break-word"><center>{{$users->updated_at}}</center></td>
        
         <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/View.png')}}">
            </div></center></td>    
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Repair.png')}}">
            </div></center></td>  
        <td style=" vertical-align: middle"><center>
            <div style="display: inline">              
              <img src="{{asset('/icons/png/24x24/Delete.png')}}">
            </div></center></td>
    </tr>
    @endforeach
</table>
    @endisset

  <!--   Core JS Files   -->
  <script src="{{asset('/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>