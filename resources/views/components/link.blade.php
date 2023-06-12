@props(['href', 'class', 'name'])
<a href={{ $href ?? '' }} class="btn {{ $class ?? 'btn-primary' }}">{{ $name }}</a>
