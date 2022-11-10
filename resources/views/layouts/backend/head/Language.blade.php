           <div class="btn-group mb-1">
               <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @if (App::getLocale() == 'ar')
                       {{ LaravelLocalization::getCurrentLocaleName() }}
                   @else
                       {{ LaravelLocalization::getCurrentLocaleName() }}
                   @endif
               </button>
               <div class="dropdown-menu">
                   @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                       <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                           {{ $properties['native'] }}
                       </a>
                   @endforeach
               </div>
           </div>
