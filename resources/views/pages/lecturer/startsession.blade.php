@extends('layouts.app', [
    'namePage' => 'Activate period',
    'class' => 'sidebar-mini',
    'activePage' => 'activatePeriod',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Activate period
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