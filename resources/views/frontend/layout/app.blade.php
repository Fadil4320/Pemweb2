@include('frontend.layout.top')
{{-- include untuk memanggil dan menggunakan code dari 
    file lain --}}
@include('frontend.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        {{-- ini buat isi content halaman --}}
        @yield('content')
        {{-- panggil nama section halaman --}}
        </div>
    </main>
</div>
</div>
@include('frontend.layout.bottom')