@extends('master')
@section('content')


    <h3>Qidiruv Natijasi</h3>

               <div class="container">
                    <div class="row">

                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <div class="news-head">
                                    <img style="width: 300px; height: 300px" src="{{ asset ('assets/img/'.$post->image)}}" alt="#">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">{{ $post->created_at->format('Y.m.d') }}</div>
                                        <h2><a href="blog-single.html">{{ $post['title_'.App::getLocale()] }}</a></h2>
                                        <p class="text">{{ $post['description_'.App::getLocale()] }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach

                    </div>
               </div>




@endsection