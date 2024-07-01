<x-layout>
<style>
    body {
<<<<<<< HEAD
        font-family: 'Helvetica Neue', sans-serif;
        margin: 20px;
        background-color: #e0f7fa; /* 柔和的浅绿色背景 */
=======
        font-family: 'Arial', sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
    }

    form {
        margin-bottom: 20px;
    }

    input[type="file"] {
        margin-bottom: 10px;
<<<<<<< HEAD
        padding: 8px;
        border: 1px solid #90a4ae; /* 灰色边框 */
        border-radius: 4px;
    }

    .back-btn {
        display: inline-block;
        padding: 12px 20px;
        background-color: #00796b; /* 深绿色 */
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    .back-btn:hover {
        background-color: #004d40; /* 更深的绿色 */
=======
    }
 
    .back-btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
    }

    .file-info {
        margin-top: 10px;
        background-color: #fff;
<<<<<<< HEAD
        padding: 15px;
        border: 1px solid #b0bec5; /* 灰色边框 */
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* 添加阴影 */
    }

    .file-info a {
        color: #00796b; /* 深绿色 */
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .file-info a:hover {
        color: #004d40; /* 更深的绿色 */
=======
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
    }

    .file-info img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
<<<<<<< HEAD
        border-radius: 4px; /* 圆角 */
        border: 1px solid #90a4ae; /* 灰色边框 */
=======
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
    }
</style>

@if(!empty($id))
    <div class="file-info">
<<<<<<< HEAD
        <a href="{{ url('/storage/' . $path) }}">
=======
        <a href="{{ url('/storage/' . $path) }}" style="color: #333; font-weight: bold;">
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
            {{ $id }} {{ $originalName }}
        </a>
        <br>
        @if(substr($mimeType, 0, 5) == 'image')
            <img src="{{ url('/storage/' . $path) }}">
        @endif
    </div>
@endif

<<<<<<< HEAD
<a href="{{ url('/') }}" class="back-btn">Back</a>

@isset($id)
    <div class="file-info">
=======
<a href="{{ url('/') }}" class="back-btn">Back to see posts</a>

@isset($id)
    <div class="file-info">
        <p><strong>view picture information here</strong></p>
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
        {{ $id }}<br>
        {{ $path }}<br>
        {{ $originalName }}<br>
        {{ $mimeType }}
    </div>
@endisset
</x-layout>