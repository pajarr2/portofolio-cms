@extends('admin.layout.layout')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Hallo, {{ Auth::user()->name }}</h1>
        </div>

        <div class="section-body">
            Selamat Datang Di Sistem Portofolio Pajar
        </div>
    </section>
@endsection
