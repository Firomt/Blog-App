<!DOCTYPE html>
<html lang="en">
<head>
   @include("layout.head")
</head>

<body class="bg-light">
    @include("layout.navbar")
    <div class="container ps-5 pe-5">
        <div class="row">
            <div class="col-12 p-2 text-center mt-4 mb-4 border-bottom-black">
                <h1 class="fw-bolder fs-1">Welcome to my Blog</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto quaerat itaque commodi rerum rem quae qua</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                @foreach($blogs as $blog)
                    <div class="row mt-4 mb-4 blog-card border rounded">
                       <div class="col-lg-4 col-12 p-0 m-0">
                            <img class="rounded w-100 h-100" src="{{ $blog['image_url_portrait'] }}">
                        </div>
                        <div class="col-lg-8 col-12 p-lg-5">
                            <div class="row h-100 pt-4 align-item-center" >
                                <div class="col-12 mx-auto">
                                    <small class="text-muted fs-8">{{ $blog['date'] }}</small>
                                    <br>
                                    @foreach (explode(",", $blog ['tags']) as $tag)
                                        <span class="text-primary fw-bolder fs-g pe-1">{{ $tag }}</span>

                                        @if ($loop->iteration < count(explode(",", $blog ['tags']))) {{-- logic to remove the unnecessary last dot separator i.e add dot separtor while current loop iteration is less than count of the tags--}}
                                            <span class="text-primary fw-bolder fs-g pe-1">&#x2022;</span>  {{-- dot separator --}}
                                        @endif
                                    @endforeach
                                    <h2 class="fw-lighter fs-2">{{ $blog['title'] }}</h2>
                                    <p class="text-muted">{{ $blog['description'] }}</p>
                                    <p>
                                        <img class="rounded-circle" alt="Author Image" height="35" width="35" src="{{ $blog['author_image_url'] }}">
                                        <span class="ps-1">{{ $blog['author'] }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            <div class="col-lg-1 col-0">

            </div>
            <div class="col-lg-3 col-12" >

            </div>

        </div>

    </div>




<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
