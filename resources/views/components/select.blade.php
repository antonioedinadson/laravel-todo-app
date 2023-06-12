<div class="input-area-item">
    <label for="{{ $id }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $id }}">
        <option value="" disabled selected>{{ $place }}</option>
        @foreach ($categories as $cat)
            <option @if ($cat['id'] == $category) selected @endif value="{{ $cat['id'] }}">{{ $cat['name'] }}
            </option>
        @endforeach
    </select>
</div>
