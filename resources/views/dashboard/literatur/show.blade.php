@extends('dashboard.layouts.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <section id="content">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <a href="/dashboard/literatur" class="btn btn-success"><span data-feather="arrow-left"></span></a>
                    <a href="/dashboard/literatur/{{ $literatur->slug }}/edit" class="btn btn-primary"><span data-feather="edit"></span></a>
                    <form action="/dashboard/literatur/{{ $literatur->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apa anda yakin?')"><span data-feather="x-circle"></button>
                      </form>
                </div>
            </div>
            <div class="row my-4 justify-content-center">
                <div class="col-md-10">
                    @if ($literatur->image)
                    <img src="{{ asset('storage/' . $literatur->image) }}" class="img-fluid" alt="..." />    
                    @else
                    <img src="https://source.unsplash.com/1280x1080/?{{ $literatur->category->name }}" class="img-fluid" alt="..." />    
                    @endif
                    <figure class="text-center bg-light p-2">
                        <h4 class="mt-1">{{ $literatur->title }}</h4>
                        <figcaption class="blockquote">{!! $literatur->body !!}</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection