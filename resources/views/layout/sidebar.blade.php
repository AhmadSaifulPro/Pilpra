<div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div " >

        <div class="d-flex justify-content-center">
            <div class="main-menu-header">
                <img class="img" src="{{ asset('/') }}assets/dist/assets/images/ki cibolang.jpg" width="40%">
                <img class="img" src="{{ asset('/') }}assets/dist/assets/images/ra kartini.png" width="40%">
            </div>
        </div>

        <ul class="nav pcoded-inner-navbar ">
            <li class="nav-item pcoded-menu-caption">
                <label style="color: #E48900">Navigation</label>
            <li class="nav-item">
                <a href="{{ route('pilpra.index') }} " class="nav-link" ><span class="pcoded-micon" ><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Calon Pradana</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pradani.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Data Calon Pradani</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dewanambalan.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dewan Ambalan</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('riwayat.index') }}" class="nav-link  "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Riwayat</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('riwayat_pradani.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Riwayat Pradani</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('hasil') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Hasil Pemilihan</span></a>
            </li>
        </ul>
    </div>
</div>
