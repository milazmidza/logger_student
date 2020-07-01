<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('CT') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Students") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("Add Student") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Student Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#lecturer">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Lecturers") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="lecturer">
          <ul class="nav">
            <li class="@if ($activePage == 'lecturer') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("Add lecturer") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'lecturerView') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("lecturer Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#programs">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Programs") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="programs">
          <ul class="nav">
            <li class="@if ($activePage == 'programs') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("Add program") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'programsView') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Program Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#modules">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Modules") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="modules">
          <ul class="nav">
            <li class="@if ($activePage == 'modules') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("Add module") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'modulesView') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Module Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#periods">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Periods") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="periods">
          <ul class="nav">
            <li class="@if ($activePage == 'periods') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("Add period") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'periodsView') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Period Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'upgrade') active @endif active-pro">
        <a href="{{ route('page.index','upgrade') }}" class="color-ev">
          <i class="now-ui-icons arrows-1_cloud-download-93"></i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>