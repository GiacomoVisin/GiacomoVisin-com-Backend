<?php 

$socials = [
    ['name' => "instagram", 'url' => "https://www.instagram.com/giacomxv/"],
    ['name' => "github", 'url' => "https://github.com/GiacomoVisin"],
    ['name' => "linkedin", 'url' => "https://www.linkedin.com/in/giacomo-visin/"]
]
    
?>


@extends('layouts.meLayouts')


@section('content')


    <div class="container">

        <div class="socialBox">
            <table class="tableSocial">
                <thead>
                    <tr>
                        <th>Social</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($socials as $social)
                        <tr>
                            <td class="social-name">{{ $social['name'] }}</td>
                            <td class="social-url">
                                <a href="{{ url($social['url']) }}" target="_blank" rel="noopener noreferrer">
                                    {{ $social['url'] }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


       <div class="imageMe d-flex flex-row">
    <div class="meSpanDiv">
        <span class="meSpan"> Una fedele rappresentazione di me --- > </span>
    </div>

    <div class="imgDiv image-cascade-container">
        <!-- Immagine di base (quella visibile normalmente) -->
        <img class="me1Img base-image" src="{{ asset('img/me-stickman.png') }}" alt="Stickman">
        
        <!-- Seconda immagine che appare in hover (cambia il percorso con la tua seconda foto) -->
        <img class="me2Img hover-image" src="{{ asset('img/me-2-stickman.png') }}" alt="Rappresentazione reale">
    </div>
    
</div>

    </div>








@endsection