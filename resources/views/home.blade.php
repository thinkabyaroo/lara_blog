@extends('layouts.app')

@section('title') Home @stop

@section("content")
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            <x-card-frame title="Home">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque aut corporis cum deserunt dignissimos fugiat id, laborum, magni minus molestias nam, natus possimus quis saepe sapiente sit suscipit voluptates?
                </p>
                <x-venobox small="{{ asset('images/post-1.jpeg') }}" big="{{ asset('images/post-5.jpeg') }}"></x-venobox>
                <x-venobox small="{{ asset('images/post-2.jpeg') }}" gall="aa"></x-venobox>
                <x-venobox small="{{ asset('images/post-3.jpeg') }}" gall="aa"></x-venobox>
            </x-card-frame>
        </div>
    </div>
@stop



