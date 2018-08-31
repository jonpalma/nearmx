@extends('layouts.master')
@section('head')
@endsection
@section('scripts')
@endsection
@section('content')
    <div class="container" id="banner">
        <h1>
            We are creative
            <span class="clearfix"></span>
            Create Awesome Websites
        </h1>
        <h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
        </h2>
        <a href="#contact" rel="nofollow" class="btn btn-blue">Contact Us</a>
    </div>
    <div class="container" id="About">
        <h1 class="heading">
            <span class="text-light-gray">About our agency</span>
            <span class="clearfix"></span>
            Create Awesome Websites
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
    </div>
    <div class="container" id="services">
        <h1 class="heading text-white">
            Lorem ipsum
            <span class="clearfix"></span>
            Our Services
        </h1>
        <div class="row text-center">
            <div class="col-6 col-sm-4">
                <h3>Creative Design</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="col-6 col-sm-4">
                <h3>User Experience</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="col-6 col-sm-4">
                <h3>Custom</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="col-6 col-sm-4">
                <h3>Rating</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="col-6 col-sm-4">
                <h3>Responsive</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="col-6 col-sm-4">
                <h3>Support</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
        </div>
        <a href="#contact" rel="nofollow" class="btn btn-blue">Contact Us</a>
    </div>
    <div class="container" id="portfolio">
        <h1 class="heading">
            <span class="text-light-gray">This is our work</span>
            <span class="clearfix"></span>
            Portfolio
        </h1>
        <button class="btn btn-blue">See more</button>
    </div>
    <div class="container" id="team">
        <h1 class="heading">
            <span class="text-white">Be part of the team</span>
            <span class="clearfix"></span>
            Our Team
        </h1>
    </div>
    <div class="container" id="contact">
        <h1 class="heading">
            <span class="text-light-gray">Be part of the team</span>
            <span class="clearfix"></span>
            Our Team
        </h1>
        <div class="w-50">
            {!! Form::open(['url' => '/']) !!}
            <div class="w-50 float-left">
                {!! Form::label('name','Full Name') !!}
                {!! Form::text('name',null,['required' => 'required','placeholder' => 'Full Name']) !!}
            </div>
            <div class="w-50 float-left">
                {!! Form::label('phone','Phone') !!}
                {!! Form::tel('phone',null,['required' => 'required','placeholder' => '+52(614) 123 65 89']) !!}
            </div>
            <div>
                {!! Form::label('mail','Email') !!}
                {!! Form::email('mail',null,['required' => 'required','placeholder' => 'example@mail.com']) !!}
            </div>
            <div>
                {!! Form::label('message','Message') !!}
                {!! Form::textarea('message',null,['required' => 'required','placeholder' => 'Your message','rows' => '5']) !!}
            </div>
            <div>
                {!! Form::submit('Send') !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop