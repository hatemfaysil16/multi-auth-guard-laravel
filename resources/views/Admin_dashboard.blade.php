{{--  <x-app-layout>  --}}

    <div class="shrink-0 flex items-center">
        <a href="{{ route('Admin_dashboard') }}">Admin_dashboard
            {{--  <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />  --}}
        </a>
    </div>    
    <div class="shrink-0 flex items-center">
        <form method="POST" action="{{ route('logout.admin') }}">
            @csrf
            <button type="submit">logout</button>
            {{--  <x-dropdown-link :href="route('logout.admin')"onclick="event.preventDefault();this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>  --}}
        </form>
    </div>    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You re logged in!
                </div>
            </div>
        </div>
    </div>
{{--  </x-app-layout>  --}}