<?php 

$socials = [
    ['name' => "instagram", 'url' => "https://www.instagram.com/giacomxv/"],
    ['name' => "github", 'url' => "https://github.com/GiacomoVisin"],
    ['name' => "linkedin", 'url' => "https://www.linkedin.com/in/giacomo-visin/"]
]
    


?>





@extends('layouts.meLayouts')


@section('content')



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






@endsection