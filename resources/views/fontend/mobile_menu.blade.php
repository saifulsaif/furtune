
<!--**************  Responsive Menu Start ********************-->
<div class="menudiv_responsive">

<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							@if (!empty(getMenuList()))
			                    @foreach (getMenuList() as $key => $menu)
										{{-- CONTACT US --}}
			                            @if ($menu->menu_name == 'Contact Us')
			                                <li>
												<a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a>
													@php $submenu_list = getAll_id('menu_id','7','submenuses'); @endphp
												    @if (!empty($submenu_list))
													<ul class="dl-submenu">
												        @foreach ($submenu_list as $key => $submenus)
															<li>
																<a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif">{{ $submenus->sub_menu_name }}</a>
															</li>
												         @endforeach
													 </ul>
												    @endif
											</li>
										{{-- OUR SERVICE  --}}
										@elseif ($menu->menu_name == 'Our Service')
			                                <li>
												<a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a>
													@php $submenu_list = getAll_id('menu_id','1','submenuses'); @endphp
										            @if (!empty($submenu_list))
										                @foreach ($submenu_list as $key => $submenus)
															<ul class="dl-submenu">
																<li>
																	<a href="#">{{ $submenus->sub_menu_name }}</a>
																	<ul class="dl-submenu">
																		@php $submenu_lists = getAll_id('submenu_id',$submenus->id,'submenu_facilities'); @endphp
																	   	@foreach ($submenu_lists as $key => $sub_list)
																		   <li>
																			   <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif">{{ $sub_list->item_name }}</a>
																		   </li>
																	   	@endforeach
																	</ul>
																</li>
															</ul>
														@endforeach
										            @endif
											</li>
										{{-- ABOUT US		 --}}
										@elseif ($menu->menu_name == 'About Us')
			                                <li>
												<a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a>
												<ul class="dl-submenu">
												@php $submenu_list_about = getAll_id('menu_id','2','submenuses'); @endphp
												@if (!empty($submenu_list_about))
												    @foreach ($submenu_list_about as $key => $about)
												        <a href="@if($about->route_name != null) {{ route($about->route_name) }} @else {{ route('#') }}  @endif">{{ $about->sub_menu_name }}</a>
												    @endforeach
												@endif
												</ul>
											</li>
										{{-- WITHOUT SUBMENU --}}
			                            @else
			                                <li><a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a> </li>
			                            @endif
			                    @endforeach
			                @endif

						</ul>







					</div>


</div>



<!--**************  Responsive Menu End ********************-->

</div>


</div>
