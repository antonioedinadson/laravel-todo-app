<div class="task">
    <div class="task-title">
        <form action="{{ route('task.mark', ['id' => $data['id']]) }}" method="post">
            @csrf
            <input onChange="this.form.submit()" type="checkbox" name="status"
                @if ($data && $data['status']) checked @endif>
        </form>
        <span>{{ $data['title'] }}</span>
    </div>
    <div class="task-desc">
        <span></span>
        <p>{{ $data['category']->name ?? 'N/A' }}</p>
    </div>
    <div class="task-actions">
        <a href="{{ route('task.edit', ['id' => $data['id']]) }}"><i class="fa-solid fa-pencil"></i></a>
        <a href="{{ route('task.destroy', ['id' => $data['id']]) }}"><i class="fa-regular fa-trash-can"></i></a>
    </div>
</div>
