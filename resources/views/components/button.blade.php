@props(['class', 'name'])
<div class="button-component">
    <button class="btn {{ $class ?? 'btn-primary' }}">{{ $name }}</button>
</div>
