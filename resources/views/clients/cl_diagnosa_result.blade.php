@extends('clients.cl_main')
@section('title', 'Hasil Diagnosis')

@section('cl_content')

    <div class="container">
       <div class="row mx-auto my-4">
        <div class="col-lg-10 mx-auto">

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Diagnosis ID</th>
                    <th scope="col">Tingkat Depresi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $diagnosa->diagnosa_id }}</td>
                    <td> {{ $diagnosa_dipilih["kode_depresi"]->kode_depresi }} | {{ $diagnosa_dipilih["kode_depresi"]->depresi }}</td>
                  </tr>
                </tbody>
            </table>
        </div>

        {{-- section 2 --}}
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-4">
                    <div class="card-header">
                      Hasil
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">
                        {{ $diagnosa_dipilih["kode_depresi"]->kode_depresi }} | {{ $diagnosa_dipilih["kode_depresi"]->depresi }}
                        </h5>
                      <p class="card-text">Jadi dapat disimpulkan bahwa pasien mengalami tingkat depresi yaitu <strong>{{ $diagnosa_dipilih["kode_depresi"]->depresi }}</strong></p>
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                  </div>
            </div>
        </div>
        @include('components.cl_article')
        <div >
            <a style="align-content: flex-end" href="/form" class="btn btn-secondary">Kembali</a>
            <a style="align-content: flex-end" href="/" class="btn btn-primary">Home</a>
            <a style="align-content: flex-end" id="print" class="btn btn-warning">Print</a>
        </div>
       </div>
    </div>
    <script>
      var myElement = document.getElementById('.print');
      window.print(myElement);
    </script>
@endsection
