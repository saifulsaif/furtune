
<!--**************  Responsive Menu Start ********************-->
<div class="menudiv_responsive">

    <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">
            @if (!empty(getMenuList()))
                @foreach (getMenuList() as $key => $menu)
                    <li>
                        <a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a>
                        @php $submenu_list = getAll_id('menu_id',$menu->id,'submenuses'); @endphp
                        @if (!empty($submenu_list[0]))
                        <ul class="dl-submenu">
                            @foreach ($submenu_list as $key => $submenus)
                                @php $submenu_lists = getAll_id('submenu_id',$submenus->id,'submenu_facilities'); @endphp

                                @if (!empty($submenu_lists[0]))

                                   {{-- <ul class="dl-submenu"> --}}
                                        <li>
                                        <a  >{{ $submenus->sub_menu_name }}</a>
                                            <ul class="dl-submenu">

                                                @foreach ($submenu_lists as $key => $sub_list)
                                                    <li>
                                                        <a href="{{url('service/'.$sub_list->id)}}">{{ $sub_list->item_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    {{-- </ul> --}}
                                @else
                                    <li>
                                        <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif">{{ $submenus->sub_menu_name }}</a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                        @endif
                    </li>
                @endforeach
            @endif

    </ul>

    </div>


</div>



<!--**************  Responsive Menu End ********************-->

</div>


</div>
