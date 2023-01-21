@extends('layouts.main')
@section('posts')
<div id="colorlib-main">
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container px-0">
            <div class="row no-gutters">
                @foreach($posts as $post)
                <div class="col-md-4 d-flex">
                    <div class="blog-entry ftco-animate active">
                        <div class="carousel-blog owl-carousel">
                            <div class="item">
                                <a href="{{route('main.show', $post->id)}}" class="img" style="background-image: url({{url('storage/'.$post->photo)}});"></a>
                            </div>
                        </div>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="{{route('main.show', $post->id)}}">{{$post->title}}</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>{{Carbon\Carbon::parse($post->created_at)->format('d/m/y')}}</span>
                                    <span><a href="{{route('main.show', $post->id)}}"><i class="icon-folder-o mr-2"></i>{{$post->category->title}}</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>{{count($post->comments)}} Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">{{strip_tags(Str::words($post->content, 10))}}</p>
                            <p><a href="{{route('main.show', $post->id)}}" class="btn-custom">Открыть <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="container d-block text-lg-center mt-4">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </section>
</div><!-- END COLORLIB-MAIN -->
@endsection
