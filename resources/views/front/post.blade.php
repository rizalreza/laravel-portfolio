@extends('layout.main')

@section('title','Posts')

@section('content')

 <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row  full-width">

            <div class="col-md-10 col-md-offset-1 text-center title-post">
                    <p>{{$item->title}}</p>
            </div>

            <div class="col-md-10 col-md-offset-1 columns-post">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="{{asset("images/$item->image")}}"/>
                        </a>
                    </div>
                </div>
            </div> 

            <div class="col-md-10 col-md-offset-1 desc-post">
                <div class="item-wrapper">
                   <p>{{$item->description}}</p>
                </div>
            </div>
          

                </div>
            </div>
        </div>

@endsection