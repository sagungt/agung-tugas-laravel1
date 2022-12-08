<div class="card mb-3 mx-auto" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $user['foto'] }}" class="img-fluid rounded-start" alt=".{{ $user['bio'] }}">
      {{-- <img src="{{ asset('img/'.$fotoId.'.jpg') }}" class="img-fluid rounded-start" alt="{{ $user['bio'] }}"> --}}
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $user['nama'] }}</h5>
        <p class="card-text">{{ $user['bio'] }}</p>
        <p class="card-text"><small class="text-muted">{{ $user['alamat'] }}</small></p>
      </div>
    </div>
  </div>
</div>