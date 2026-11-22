@csrf

<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $course->name ?? '') }}">
</div>
<br>
<div>
    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description', $course->description ?? '') }}</textarea>
</div>
<br>
<div>
    <label for="duration">Duration (weeks)</label>
    <input type="number" id="duration" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}">
</div>
<br>
<div>
    <label for="fee">Fee</label>
    <input type="number" id="fee" name="fee" step="0.01" min="0" value="{{ old('fee', $course->fee ?? '') }}">
</div>
<br>
<div>
    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty">
        <option value="">-- Select --</option>
        @foreach (['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') === $level)>{{ $level }}</option>
        @endforeach
    </select>
</div>
<br>
<div>
    <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $course->is_active ?? true))>
    <label for="is_active">Currently offered (active)</label>
</div>
<br>
