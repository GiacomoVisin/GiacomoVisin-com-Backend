<?php 

$elements = ["chi-sono, Formazione, Progettini"]

?>

<ul>
    @foreach ($elements as $element)
        <li>{{ $element }}</li>
    @endforeach
</ul>