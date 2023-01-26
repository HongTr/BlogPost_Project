@extends('layouts.app')

@section('content')
    {{-- Phần này là nội dung cái thanh carousel trượt để hiển thị tất cả các categories và hình ảnh của nó --}}
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel category-carousel owl-theme ">

                        @foreach ($allCategories as $category)
                            <div class="item">

                                <a href="{{ url('tutorial/' . $category->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img height="140px" width="100px"
                                            src="{{ asset('uploads/category/' . $category->image) }}" alt="Image">
                                        <div class="card-body text-center">
                                            <h5 class="text-dark">{{ $category->name }}</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- For the content --}}

    <div class="py-1 bg-gray">
        <div class="container">
            <div class="border p-3 text-center">
                <h3>Introduction to our blog post</h3>
            </div>
        </div>
    </div>


    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Blog post about Technology</h4>
                    <div class="underline"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi totam dolore ullam incidunt hic
                        perspiciatis tempora vel, vero eum rerum, et fugit minima molestiae quam quae ipsam explicabo illum
                        reprehenderit!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Categories</h4>
                    <div class="underline"></div>
                </div>

                @foreach ($allCategories as $category)
                    <div class="col-md-3 ">
                        <div class="card card-body mb-3">
                            <a href="{{ url('tutorial/' . $category->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0 text-center">{{ $category->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>
                </div>


                <div class="col-md-8">
                    @foreach ($latestPosts as $latestPost)
                        <div class="card card-body mb-3 bg-gray shadow">
                            <a href="{{ url('tutorial/' . $latestPost->category->slug . '/' . $latestPost->slug) }}"
                                class="text-decoration-none">
                                <h5 class="text-dark mb-0">{{ $latestPost->name }}</h5>
                            </a>
                            <h6>
                                Posted On: {{ $latestPost->created_at->format('d-m-Y') }}
                            </h6>
                        </div>
                    @endforeach

                </div>

                <div class="col-md-4">
                    <div class="border p-3 text-center">
                        <h3>Advertise</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
