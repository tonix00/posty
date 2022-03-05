@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl">{{$user->name}}</h1>
                <p>Posted {{$postsCount}} {{Str::plural('post',$postsCount)}} and received {{$receivedLikesCount}} {{Str::plural('like',$receivedLikesCount)}}</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                @if($posts->count())          
                    @foreach($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                    {{$posts->links()}}  
                @else
                    <p>{{ $user->name}} does not have any post.</p>
                @endif
    
            </div>
        </div>   
    </div>
@endsection