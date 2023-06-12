<div class="input-area-item">
    <label for="description">{{ $place }}</label>
    <textarea name="description" id="description" placeholder="Descreva sua tarefa">
        {{ $value ?? '' }}
    </textarea>
</div>
