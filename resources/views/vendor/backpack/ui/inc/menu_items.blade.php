@php
use App\Models\MenuItem;
@endphp

@php
	$menus = MenuItem::whereNull('parent_id')->orderBy('lft')->get();
@endphp

@foreach ($menus as $menu)
    @php
        $subMenus = MenuItem::where('parent_id', $menu->id)->orderBy('lft')->get();
    @endphp


    @if ($subMenus->isEmpty())

        <x-backpack::menu-item title="{{ $menu->label }}" icon="{{ $menu->icon }}" :link="backpack_url($menu->url)" />
    
    @else
        {{-- if menu has submenu/nested --}}
        <x-backpack::menu-dropdown title="{{ $menu->label }}" icon="{{ $menu->icon }}">
    
            @foreach ($subMenus as $subMenu)
    
                @if ($subMenu->url == null && $subMenu->icon == null)
        
                    <x-backpack::menu-dropdown-header title="{{ $subMenu->label }}" />
            
                @else

                    @php
                        $subSubMenus = MenuItem::where('parent_id', $subMenu->id)->orderBy('lft')->get();
                    @endphp

                    @if ($subSubMenus->isEmpty())
                        
                        <x-backpack::menu-dropdown-item title="{{ $subMenu->label }}" icon="{{ $subMenu->icon }}" :link="url($subMenu->url)" />
                    
                    @else
                        {{-- if subMenu have subMenu too or child --}}
                        <x-backpack::menu-dropdown title="{{ $subMenu->label }}" icon="{{ $subMenu->icon }}" nested="true">

                            @foreach ($subSubMenus as $subSubMenu)
                                
                                <x-backpack::menu-dropdown-item title="{{ $subSubMenu->label }}" icon="{{ $subSubMenu->icon }}" :link="backpack_url($subSubMenu->url)" />

                            @endforeach

                        </x-backpack::menu-dropdown>
                    
                    @endif

                @endif
            
            @endforeach
        
        </x-backpack::menu-dropdown>
    
    @endif

@endforeach
{{-- TODO:: add permission --}}