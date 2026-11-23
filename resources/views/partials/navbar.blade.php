@php
    $elements = [
        ['label' => 'Chi sono', 'url' => '/chi-sono'],
        ['label' => 'Formazione', 'url' => '/formazione'],
        ['label' => 'Progettini ✨', 'url' => '/progettini'],
    ];
@endphp

<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo / Nome a sinistra -->
        <a href="/chi-sono" class="navbar-brand">
            <span class="brand-dot"></span>
            GiacomoVisin<span class="brand-ext">.com</span>
        </a>

        <!-- Voci di menu -->
        <ul class="navbar-menu">
            @foreach ($elements as $element)
                <li class="navbar-item">
                    <a href="{{ $element['url'] }}"
                        class="navbar-link {{ request()->is(ltrim($element['url'], '/')) ? 'active' : '' }}">
                        {{ $element['label'] }}
                    </a>
                </li>
            @endforeach

        </ul>
        <div class="imgBox">
           <!--  <img src="{{ asset('/img/spiderman.jpg') }}" alt="spider"> -->
        </div>
    </div>
</nav>