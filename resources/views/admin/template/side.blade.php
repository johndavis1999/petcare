<aside class="sidebar-wrapper" data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                    <div class="simplebar-content" style="padding: 0px;">
                        <div class="sidebar-header">
                            <div class="logo-icon">
                                <img src="{{ asset('./logo.png') }}" class="logo-img" alt="">
                            </div>
                            <div class="logo-name flex-grow-1">
                                <h5 class="mb-0">Oncofarm</h5>
                            </div>
                            <div class="sidebar-close">
                                <span class="material-icons-outlined">close</span>
                            </div>
                        </div>
                        <div class="sidebar-nav">
                            <ul class="metismenu" id="sidenav">
                                <li>
                                    <a href="{{url('/dashboard')}}">
                                        <div class="parent-icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="menu-title">Inicio</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/marcas')}}">
                                        <div class="parent-icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="menu-title">Marcas</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/categorias')}}">
                                        <div class="parent-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div class="menu-title">Categorias</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/productos')}}">
                                        <div class="parent-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                        <div class="menu-title">Productos</div>
                                    </a>
                                </li>
                                {{--
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                        <div class="menu-title">Dashboard</div>
                                    </a>
                                    <ul class="mm-collapse">
                                        <li>
                                            <a href="#"><i class="material-icons-outlined">arrow_right</i>Analysis</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="material-icons-outlined">arrow_right</i>eCommerce</a>
                                        </li>
                                    </ul>
                                </li>
                                --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>