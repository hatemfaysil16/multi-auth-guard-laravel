@auth
    <div class="p-6 bg-white border-b border-gray-200">
    You re logged in!
    </div>
@endauth

    <form action="{{route('logout')}}" method="post">
        @csrf
        @method('POST')
        <button type="submit" href="{{route('logout')}}"  class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</button>
    </form>