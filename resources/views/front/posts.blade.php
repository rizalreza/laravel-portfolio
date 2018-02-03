@extends('layout.main')

@section('title','Items')
@section('content')



 <!-- products listing -->
         <!-- Latest Posts -->
          


        <div class="container navigasi">
        <br>
         <center><h2>Our Portfolio</h2></center>
        <div class="row full-width">
        @forelse($items as $item)
            <div class="col-md-10 col-md-offset-1 itwrap">
                <div class="item-wrapper">
                    <h3>
                     <center>{{$item->title}}</center>
                    </h3>
                    <br/>
                    <div class="img-wrapper">
                        <a href="{{ URL('/post/' . $item->id) }}" class="button expanded add-to-cart">
                            View Detail
                        </a>
                        <a href="#">
                            <img src="{{asset("images/$item->image")}}"/>
                        </a>
                    </div>
                    
                       
                    </a>
                  
                </div>
            </div>
            @empty
            <h3> No Posts</h3>
            @endforelse
        </div>  
        </div>
        <br/>
        <br/>
        <br/>

@endsection