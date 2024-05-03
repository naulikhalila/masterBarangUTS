@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-light" style="background-color: hotpink">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}" style="color: white; font-family: Georgia, 'Times New Roman', Times, serif">
        {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
        <i class="bi bi-flower2"></i> Sera's Home
      </a>
      <hr class="d-lg-none text-white-50">

                <a href="{{ route('barangs.index') }}" class="btn btn-outline-light my-2 ms-md-auto" style="font-family: Georgia, 'Times New Roman', Times, serif"><i class="bi bi-list-check"></i> Daftar Barang</a>
  
    </div>
    
  </nav>
