{{-- @if(Auth::user()->isAdmin())
<li>
  <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Admin Dashboard</a>
</li>
@endif

@if(Auth::user()->isBlogAdmin())
<li>
  <a href="{{route('blogAdmin.dashboard')}}"><i class="fa fa-dashboard"></i> Blog Admin Dashboard</a>
</li>
@endif --}}

@if(!empty($me->getRoleNames()))
        @foreach($me->getRoleNames() as $v)

        @php
          $v = preg_replace('/\s+/', '_', $v);
          $routeName = strtolower($v) . '.dashboard';
        @endphp
        <a href="{{ route($routeName) }}" class="dropdown-item"> <i class="fas fa-tachometer-alt mr-2"></i> {{ $v }} Dashboard
          </a>
          <div class="dropdown-divider"></div>
        @endforeach
      @endif

