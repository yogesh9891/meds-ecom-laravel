<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src" >

            </div>
            {{-- <h3>Logo</h3> --}}
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
            </button>
            </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
               {{--  <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon">
                            <span></span>
                        </button>
                    </div>
                    <button class="close"></button>
                </div> --}}
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="{{asset('images/logo.png')}}" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" id="dropdown" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" style="background-image: url('/admin_assets/images/dropdown-header/city3.jpg');">

                                                </div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="{{asset('images/logo.png')}}" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">{{Auth::user()->name}}</div>
                                                                <div class="widget-subheading opacity-8">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <form action="{{url('/logout')}}" method="post" accept-charset="utf-8">
                                                                    @csrf
                                                                    <button type="submit" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    {{Auth::user()->name}}
                                </div>
                                <div class="widget-subheading">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="header-btn-lg">
                    <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                        <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">

                </div>
            </div>
            <div class="app-header__mobile-menu">

            </div>
            <div class="app-header__menu">
                <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                </button>
                </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>
                        <li>
                            <a href="{{ url('/')}}" class="mm-active">
                                <i class="metismenu-icon pe-7s-rocket"></i> Dashboards

                            </a>
                        </li>
                         <li class="">
                            <a href="{{ route('category.index') }}">
                                <i class="metismenu-icon pe-7s-photo"></i> Category

                            </
                         <li class="">
                            <a href="{{ route('banner.index') }}">
                                <i class="metismenu-icon pe-7s-photo"></i> Banner

                            </a>
                        </li>
                       <li class="">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-filter"></i> Filters

                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                      {{-- <li class="">
                                        <a href="{{ route('color.index') }}">
                                            <i class="metismenu-icon pe-7s-albums"></i> Color

                                        </a>
                                    </li> --}}
                                 <li class="">
                                <a href="{{ route('size.index') }}">
                                    <i class="metismenu-icon    pe-7s-more"></i> Size

                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('product.index') }}">
                                <i class="metismenu-icon pe-7s-browser"></i> Product

                            </a>
                        </li> 
                      
                       
                        <li class="">
                            <a href="{{ route('seo_setting.index') }}">
                                <i class="metismenu-icon pe-7s-config"></i> Seo Setting

                            </a>
                        </li> 
                          <li class="">
                            <a href="{{ route('blog.index') }}">
                                <i class="metismenu-icon pe-7s-safe"></i> Blog

                            </a>
                        </li>
                        {{--   <li class="">
                            <a href="{{ route('client.index') }}">
                                <i class="metismenu-icon pe-7s-safe"></i> Client

                            </a>
                        </li> --}}
                        
                           <li class="">
                            <a href="{{ url('admin/product_enquiry') }}">
                                <i class="metismenu-icon pe-7s-portfolio"></i> Product Enquiry

                            </a>
                        </li>
                       {{--  <li class="">
                            <a href="{{  route('gallery.index') }}">
                                <i class="metismenu-icon pe-7s-user"></i> Gallery

                            </a>
                        </li> --}}
                        
                          <li class="">
                            <a href="{{ route('testimonial.index') }}">
                                <i class="metismenu-icon pe-7s-user"></i> Testimonial

                            </a>
                        </li>

                       
                      
                        <li class="">
                            <a href="{{ route('admin.contact') }}">
                                <i class="metismenu-icon pe-7s-user"></i> Contact

                            </a>
                        </li>
                     {{--    <li class="">
                            <a href="{{ url('messages')}}">
                                <i class="metismenu-icon pe-7s-chat"></i> Message @include('messenger.unread-count')

                            </a>
                        </li> --}}
                        <li class="">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-settings"></i> Settings

                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li class="">
                                    <a href="{{ url('admin/change-password') }}">
                                        <i class="metismenu-icon pe-7s-lock"></i> Change Password

                                    </a>
                                </li>
                                <li>
                                <a href="{{ url('admin/setting') }}">
                                    <i class="metismenu-icon pe-7s-user"></i>Site Setting

                                </a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
                <div class="app-main__inner">
                     @if (Session::has('flash_message'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('flash_message') }}
                            </div>
                        </div>
                    @endif
                         @if (Session::has('error'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error') }}
                                 </div>
                             </div>
                         @endif
        @yield('content')
                </div>
        </div>
    </div>
</div>
