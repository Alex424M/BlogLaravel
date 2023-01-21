@extends('layouts.main');
@section('posts')
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container px-0">
                <div class="row d-flex no-gutters">
                    <div class="col-lg-8 px-md-5 py-5">
                        <div class="row">
                            <div>
                                <h1 class="mb-3">{{$post->title}}</h1>
                                <p>
                                    <img src="{{url('storage/'.$post->photo)}}" alt="" class="img-fluid">
                                </p>
                                <div class="d-block">
                                    {!! $post->content !!}
                                </div>
                                <div class="tag-widget post-tag-container mb-5 mt-5">
                                    <div class="tagcloud">
                                        @foreach($post->tags as $tag)
                                            <a href="#" class="tag-cloud-link">{{$tag->title}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <div class="pt-5 mt-5 w-100">
                                <h3 class="mb-5 font-weight-bold">{{count($comments)}} Comments</h3>
                                <ul class=" comment-list">
                                    @foreach($comments as $comment)
                                    <li class="comment">
                                        <div class="comment-body">
                                            <h3>{{$comment->user->name}}</h3>
                                            <div class="meta">{{$comment->created_at->format('d/m/y')}}</div>
                                            <p>{{$comment->text}}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @auth()
                                <div class="comment-form-wrap pt-5 w-100">
                                    <h3 class="mb-4">Оставить комментарий</h3>
                                    <form action="{{route('main.store', ['id'=>$post->id])}}" class="p-3 p-md-4 bg-light w-100" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="text">Комментарий</label>
                                            <textarea name="text" id="message" cols="30" rows="10" class="form-control w-100"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Оставить комментарий" class="btn py-3 px-4 btn-primary">
                                        </div>
                                    </form>
                                </div>
                                @endauth
                            </div>
                        </div><!-- END-->
                    </div>
                    <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Категории</h3>
                            <ul class="categories">
                                @foreach($categories as $category)
                                <li><a href="{{route('main.category', ['id'=>$category->id])}}">{{$category->title}} <span>{{count($category->posts)}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Популярные посты</h3>
                            @foreach($popularPosts as $popularPost)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="{{route('main.show', $popularPost->id)}}" style="background-image: url({{url('storage/'.$popularPost->photo)}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{route('main.show', $popularPost->id)}}">{{$popularPost->title}}</a></h3>
                                    <div class="meta">
                                        <div><a href="{{route('main.show', $popularPost->id)}}"><span class="icon-calendar"></span> {{Carbon\Carbon::parse($popularPost->created_at)->format('d/m/y')}}</a></div>
                                        <div><a href="{{route('main.show', $popularPost->id)}}"><span class="icon-chat"></span> {{count($popularPost->comments)}}</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Теги</h3>
                            <ul class="tagcloud">
                                @foreach($tags as $tag)
                                <a href="{{route('main.tag', $tag->id)}}" class="tag-cloud-link">{{$tag->title}}</a>
                                @endforeach
                            </ul>
                        </div>

                    </div><!-- END COL -->
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
    </div>
@endsection
