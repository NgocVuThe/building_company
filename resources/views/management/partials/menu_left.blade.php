<?php
$current_route = \Route::currentRouteName();
$active = function ($routes = []) use ($current_route){
    $routes = is_string($routes) ? [$routes] : $routes;
    foreach ($routes as $route) {
        if($route == $current_route){
            return true;
        }
    }
    return false;
};

$menus = [
    [
        'icon' => 'fa fa-gears',
        'title' => 'Quản Lý Bài Viết',
        'route' => 'manager.admin_page',
        'items'=>[
            [
                'icon' => 'fa fa-list',
                'title' => 'Danh Sách Bài Viết',
                'active' => $active(['']),
                'route' => 'manager.admin_page.list_post'
            ],
            [
                'icon' => 'fa fa-plus',
                'title' => 'Thêm Mới Bài Viết',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],
            [
                'icon' => 'fa fa-edit',
                'title' => 'Chỉnh Sửa Bài Viết',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],
        ],
    ],
    [
        'icon' => 'fa fa-server',
        'title' => 'Chuyên Mục',
        'active' => $active(['']),
        'route' => 'manager.admin_page',
        'items' => 
        [
            [
                'icon' => 'fa fa-home',
                'title' => 'Nhà Đẹp',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],
            [
                'icon' => 'fa fa-eyedropper',
                'title' => 'Thiết Kế',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],

            [
                'icon' => 'fa fa-handshake-o',
                'title' => 'Cảm Nhận',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],

            [
                'icon' => 'fa fa-plus',
                'title' => 'Thêm Chuyên Mục',
                'active' => $active(['']),
                'route' => 'manager.admin_page'
            ],
        ]
    ],
    [
        'icon' => 'fa fa-cog',
        'title' => 'Quản Lý Code',
        'active' => $active(['']),
        'route' => 'manager.admin_page'
    ],
    [
        'icon' => '	fa fa-drivers-license-o',
        'title' => 'Liên Hệ',
        'active' => $active(['']),
        'route' => 'manager.admin_page'
    ],
    [
        'icon' => '	fa fa-bug',
        'title' => 'SEO',
        'active' => $active(['']),
        'route' => 'manager.admin_page'
    ],
];
?>

<div class="side-bar">
    <div class="row">
        <div class="logo_company col-md-12">
            <p class="text-center">IMG</p>
            <img src="" alt="">
        </div>
    </div>
    <div class="row main_menu">
        <ul class="sidebar-menu col-md-12">
            @foreach($menus as $menu)
                @if (isset($menu['items']) && $menu['items'])
                    <li class="nav-item treeview {{ @$menu['active'] ? 'active show':'' }}">
                        <a href="{{ route($menu['route']) }}">
                            <i class="{{ $menu['icon'] }}"></i>
                            <span>{{ $menu['title'] }}</span>
                        </a>
                        <ul class="treeview-menu">
                            @foreach($menu['items'] as $sub_menu)
                            <li class="{{ @$sub_menu['active'] ? 'active':'' }}">
                                <a href="{{ route($sub_menu['route']) }}">
                                    <i class="{{ $sub_menu['icon'] }}"></i>
                                    <span>{{ $sub_menu['title'] }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item treeview {{ @$menu['active'] ? 'active show':'' }}">
                        <a href="{{ route($menu['route']) }}"><i class="{{ $menu['icon'] }}"></i> <span>{{ $menu['title'] }}</span></a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div> 
</div>