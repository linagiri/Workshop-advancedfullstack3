<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
<h1>Edit Course</h1>

@if($errors->any())
    <div>
        <h3>Please fix the following errors:</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/courses/{{ $course->id }}" method="POST">
    @method('PUT')
    @include('course._form')
    <button type="submit">Update Course</button>
</form>

<br>
<a href="/courses">Back to Courses</a>
</body>
</html>
