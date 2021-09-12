<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative inline-block text-left">
    <div>
        <button type="button"
            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
            id="menu-button">
            About Maseno
            <!-- Heroicon name: solid/chevron-down -->
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!--
      Dropdown menu, show/hide based on menu state.

      Entering: "transition ease-out duration-100"
        From: "transform opacity-0 scale-95"
        To: "transform opacity-100 scale-100"
      Leaving: "transition ease-in duration-75"
        From: "transform opacity-100 scale-100"
        To: "transform opacity-0 scale-95"
    -->
    <div class="  absolute right-0 mt-2 w-56 rounded-md shadow-xl bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none md:hidden "
        id="dropdown" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class=" grid grid-cols-2 py-1" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm md:hover:text-green-500" role="menuitem" tabindex="-1"
                id="menu-item-0">Dashboard</a>
            <a href="{{ route('service') }}" class="text-gray-700 block px-4 py-2 text-sm md:hover:text-green-500" role="menuitem" tabindex="-1"
                id="menu-item-1">Service charter</a>
        </div>
        <div class=" grid grid-cols-2 gap-6 py-1" role="none">
            <a href="{{ route('council') }}" class="text-gray-700 block px-4 py-2 text-sm md:hover:text-green-500" role="menuitem" tabindex="-1"
                id="menu-item-2">University council</a>
            <a href="{{ route('brief') }}" class="text-gray-700 block px-4 py-2 text-sm md:hover:text-green-500" role="menuitem" tabindex="-1"
                id="menu-item-3">Maseno in Brief</a>
        </div>

        <div class=" grig grid-cols-2 py-1" role="none">
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm md:hover:text-green-500" role="menuitem" tabindex="-1"
                id="menu-item-6">Strategic Plan</a>
        </div>
    </div>
</div>
<script>

</script>
