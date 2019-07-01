<?php

$menus = [
    [
        'icon' => 'fa fa-plus',
        'title' => 'Menu',
    ],
    [
        'icon' => 'fa fa-plus',
        'title' => 'Menu',
    ],
    [
        'icon' => 'fa fa-plus',
        'title' => 'Menu',
    ],
    [
        'icon' => 'fa fa-plus',
        'title' => 'Menu',
    ],
    [
        'icon' => 'fa fa-plus',
        'title' => 'Menu',
    ],
];
?>
<div class="side-bar">
    <ul class="main_menu">
        @foreach ($menus as $menu)
            <li class="menu_tree"><span>{{$menu['title']}}</span></li>
        @endforeach
    </ul>
</div>