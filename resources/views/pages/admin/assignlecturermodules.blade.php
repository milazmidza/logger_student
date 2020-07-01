@extends('layouts.app', [
    'namePage' => 'Assign Lecturer Modules',
    'class' => 'sidebar-mini',
    'activePage' => 'assignLecturerModules',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Assign lecturer module
          </div>
          <div class="card-body ">
            <div id="map" class="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          //demo.initGoogleMaps();
        });
    </script>
@endpush