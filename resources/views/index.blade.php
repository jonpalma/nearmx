@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('public/js/index.js') }}"></script>
@endsection
@section('content')
    <div id="banner">
        <div class="container vertical-align text-center text-white">
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
    </div>
    <section id="about">
        <div class="container">
            <h1 class="heading text-center">
                <span class="text-light-gray">About our agency</span>
                <span class="clearfix"></span>
                Create Awesome Websites
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur.
            </p>
        </div>
    </section>
    <section id="services">
        <div class="container text-center">
            <h1 class="heading text-white">
                Lorem ipsum
                <span class="clearfix"></span>
                Our Services
            </h1>
            <div class="row text-white">
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/1.png') }}" alt="Creative Design">
                    <h5>Creative Design</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/2.png') }}" alt="User Experience">
                    <h5>User Experience</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/3.png') }}" alt="Custom">
                    <h5>Custom</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/4.png') }}" alt="Rating">
                    <h5>Rating</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/5.png') }}" alt="Responsive">
                    <h5>Responsive</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
                <div class="col-6 col-sm-4">
                    <img src="{{ asset('public/img/services/6.png') }}" alt="Support">
                    <h5>Support</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div>
            </div>
            <a href="#contact" rel="nofollow" class="btn btn-blue mx-auto">Contact Us</a>
        </div>
    </section>
    <section id="portfolio">
        <div class="container text-center">
            <h1 class="heading">
                <span class="text-light-gray">This is our work</span>
                <span class="clearfix"></span>
                Portfolio
            </h1>
            <div class="portfolio-container">
                <div class="row">
                    <div class="col-sm-6 no-padding">
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/1.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/2.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/3.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-6 no-padding">
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/3.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/1.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                        <a href="#" class="img-container">
                            <img src="{{ asset('public/img/portfolio/2.png') }}" alt="Portfolio">
                            <span class="summary">
                                <p class="title">Project Name</p>
                                <p class="sub">Lorem Ipsum</p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-blue">See more</a>
        </div>
    </section>
    <section id="team">
        <div class="container text-center">
            <h1 class="heading">
                <span class="text-white">Be part of the team</span>
                <span class="clearfix"></span>
                Our Team
            </h1>
            <div class="row">
                <div class="col-12 col-md-4 mx-auto">
                    <div class="img-container">
                        <img src="{{ asset('public/img/team/1.png') }}" alt="Manager">
                        <a href="" class="absolut-align smooth-transition-300" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f absolut-align"></i>
                        </a>
                    </div>
                    <h5>Manager</h5>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-12 col-md-4 mx-auto">
                    <div class="img-container">
                        <img src="{{ asset('public/img/team/2.png') }}" alt="Manager">
                        <a href="" class="absolut-align smooth-transition-300" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f absolut-align"></i>
                        </a>
                    </div>
                    <h5>Manager</h5>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-12 col-md-4 mx-auto">
                    <div class="img-container">
                        <img src="{{ asset('public/img/team/3.png') }}" alt="Manager">
                        <a href="" class="absolut-align smooth-transition-300" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f absolut-align"></i>
                        </a>
                    </div>
                    <h5>Manager</h5>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h1 class="heading text-center">
                <span class="text-light-gray">Get in touch</span>
                <span class="clearfix"></span>
                Contact
            </h1>
            <div class="relative-container">
                <div class="w-50 contact-form">
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
                        {!! Form::textarea('message',null,['required' => 'required','placeholder' => 'Your message','rows' => '3']) !!}
                    </div>
                    <div class="text-right">
                        {!! Form::submit('Send',['class' => 'btn btn-blue']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.493826057543!2d-106.08218018491647!3d28.674870982401185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea4376f60fc76b%3A0xab78fb18d989c09!2sParque+de+Innovaci%C3%B3n+y+Transferencia+de+Tecnolog%C3%ADa%2C+Bodegas+del+Estado%2C+Chihuahua%2C+Chih.!5e0!3m2!1ses!2smx!4v1535937321992"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@stop