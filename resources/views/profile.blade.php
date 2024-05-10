@extends('layouts.app')

@section('title', 'Profile Settings')

@section('contents')
<hr />
<form method="POST" enctype="multipart/form-data" action="">
    <fieldset>
        <div class="flex flex-row justify-between">
            <div class="d-flex mb-4">
                <img src="{{ asset('assets/Avatar.png') }}" alt="Avatar" class="rounded-circle mr-4" style="width: 4rem; height: 4rem;" />
                <div class="flex-grow-1">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="name" class="form-label">Nama Kandidat:</label>
                      <div class="form-control">Zacky Fatayan</div>
                    </div>
                    <div class="col-md-6">
                      <label for="position" class="form-label">Posisi Kandidat:</label>
                      <div class="form-control">Website Programmer</div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </fieldset>
</form>
@endsection
