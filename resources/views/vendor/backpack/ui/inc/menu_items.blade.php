@php

use App\Models\MenuItem;

$menus = MenuItem::whereNull('parent_id')->orderBy('lft')->get();

@endphp


@foreach ($menus as $menu)
    @php
        $subMenus = MenuItem::where('parent_id', $menu->id)->orderBy('lft')->get();
        $subMenusPermissions = $subMenus->whereNotNull('icon')->whereNotNull('url');
        $subMenusPermissions = $subMenusPermissions->pluck('permission');
    @endphp

    @if ($subMenus->isEmpty())

        @can($menu->permission)
            
            <x-backpack::menu-item 
                title="{{ $menu->label }}" 
                icon="{{ $menu->icon }}" 
                :link="backpack_url($menu->url)" 
                target="{{ $menu->open_new_tab ? '_blank' : '' }}" 
            />
        
        @endcan
    
    @else
        {{-- if menu has submenu/nested --}}
        {{-- check if subMenu has child: if yes, then merge the array to the $subMenusPermissions in canany to show parent dropdown --}}
        @php
            $subSubMenusPermissions = [];
            foreach ($subMenus as $subMenu) {
                $subSubMenus = MenuItem::where('parent_id', $subMenu->id)->orderBy('lft')->get();
                $subSubMenusPermissions = $subSubMenus->whereNotNull('icon')->whereNotNull('url');
                $subSubMenusPermissions = $subSubMenusPermissions->pluck('permission');

                if ($subSubMenusPermissions->isNotEmpty()) {
                    break;
                }
            }

        @endphp

        @canany($subMenusPermissions->merge($subSubMenusPermissions))

            <x-backpack::menu-dropdown title="{{ $menu->label }}" icon="{{ $menu->icon }}">

                @foreach ($subMenus as $subMenu)
        
                    @if ($subMenu->url == null && $subMenu->icon == null)
                        {{-- check if there is a next menu-item, if yes then show this header, otherwise dont --}}
                        
                        @php
                            $headerSubMenus = MenuItem::where('parent_id', $menu->id)
                                                ->where('lft', '>', $subMenu->lft)
                                                ->orderBy('lft')
                                                ->get();

                            $displayHeader = false;

                            // loop to below header sub menus
                            foreach ($headerSubMenus as $headerSubMenu) {

                                // if found an item that has null url and null icon that means it's another header so we break the loop
                                if ($headerSubMenu->url == null && $headerSubMenu->icon == null) {
                                    // exit loop
                                    break;
                                }

                                if ($headerSubMenu->permission == null) {
                                    if ($headerSubMenu->url != null) {
                                        $displayHeader = true;
                                        // exit loop, no need to proceed
                                        break;
                                    }
                                }else {
                                    // if permission != null, we check it first
                                    if (auth()->user()->can($headerSubMenu->permission)) {
                                        $displayHeader = true;
                                        // exit loop, no need to proceed
                                        break;
                                    }
                                }

                            }

                        @endphp


                        @if ($displayHeader)

                            <x-backpack::menu-dropdown-header title="{{ $subMenu->label }}" />

                        @endif
                
                    @else

                        @php
                            $subSubMenus = MenuItem::where('parent_id', $subMenu->id)->orderBy('lft')->get();
                            $subSubMenusPermissions = $subSubMenus->whereNotNull('icon')->whereNotNull('url');
                            $subSubMenusPermissions = $subSubMenusPermissions->pluck('permission');
                        @endphp

                        @if ($subSubMenus->isEmpty())
                            
                            @can($subMenu->permission)
                    
                                <x-backpack::menu-dropdown-item 
                                    title="{{ $subMenu->label }}" 
                                    icon="{{ $subMenu->icon }}" 
                                    :link="url($subMenu->url)" 
                                    target="{{ $subMenu->open_new_tab ? '_blank' : '' }}" 
                                />
                            
                            @endcan
                        
                        @else
                            {{-- if subMenu have subMenu too or child --}}
                            @canany($subSubMenusPermissions)
                            
                                <x-backpack::menu-dropdown title="{{ $subMenu->label }}" icon="{{ $subMenu->icon }}" nested="true">

                                    @foreach ($subSubMenus as $subSubMenu)
                                        
                                        @can($subSubMenu->permission)
                                            
                                            <x-backpack::menu-dropdown-item 
                                                title="{{ $subSubMenu->label }}" 
                                                icon="{{ $subSubMenu->icon }}" 
                                                :link="backpack_url($subSubMenu->url)" 
                                                target="{{ $subSubMenu->open_new_tab ? '_blank' : '' }}" 
                                            />
                                        
                                        @endcan

                                    @endforeach

                                </x-backpack::menu-dropdown>

                            @endcanany
                        
                        @endif

                    @endif
                
                @endforeach
            
            </x-backpack::menu-dropdown>
        
        @endcanany

    @endif

@endforeach