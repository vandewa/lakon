<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('snacked/ltr/assets/images/favicon/android-chrome-512x512.png') }}" class="logo-icon"
                alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text" style="color:black;">LAKON</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ Request::segment(1) == 'dashboard' ? 'mm-active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li
            class="
    {{ Request::segment(1) == 'konsultasi' ? 'mm-active' : '' }}
    {{ Request::segment(1) == 'log-konsultasi' ? 'mm-active' : '' }}
    ">
            <a href="{{ route('konsultasi.index') }}">
                <div class="parent-icon"><i class="bx bx-message-square-dots"></i>
                </div>
                <div class="menu-title">Konsultasi</div>
            </a>
        </li>

        @if (auth()->user()->hasRole('admin'))
            <li
                class="
    {{ Request::segment(1) == 'user' ? 'mm-active' : '' }}
    {{ Request::segment(1) == 'irban' ? 'mm-active' : '' }}
    {{ Request::segment(1) == 'urusan' ? 'mm-active' : '' }}
    ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-archive"></i>
                    </div>
                    <div class="menu-title">Master</div>
                </a>
                <ul>
                    <li class="{{ Request::segment(1) == 'irban' ? 'mm-active' : '' }}">
                        <a href="{{ route('irban.index') }}"><i class="bi bi-circle"></i>Irban</a>
                    </li>
                    <li class="{{ Request::segment(1) == 'urusan' ? 'mm-active' : '' }}">
                        <a href="{{ route('urusan.index') }}"><i class="bi bi-circle"></i>Urusan</a>
                    </li>
                    <li class="{{ Request::segment(1) == 'user' ? 'mm-active' : '' }}">
                        <a href="{{ route('user.index') }}"><i class="bi bi-circle"></i>User</a>
                    </li>
                </ul>
            </li>
        @endif
        @if (auth()->user()->hasRole('admin'))
            <li
                class="
    {{ Request::segment(1) == 'laporan' ? 'mm-active' : '' }}
    ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-archive"></i>
                    </div>
                    <div class="menu-title">Laporan</div>
                </a>
                <ul>
                    <li class="{{ Request::segment(1) == 'irban' ? 'mm-active' : '' }}">
                        <a href="{{ route('laporan.konsultasi') }}"><i class="bi bi-circle"></i>Konsultasi</a>
                    </li>
                    
                </ul>
            </li>
        @endif

    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
