<x-layout>
<style>
    body {
        font-family: 'Helvetica Neue', sans-serif;
        margin: 20px;
        background-color: #e0f7fa; /* 柔和的浅绿色背景 */
    }

    form {
        margin-bottom: 20px;
    }

    input[type="file"] {
        margin-bottom: 10px;
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
    }

    .file-info {
        margin-top: 10px;
        background-color: #fff;
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
    }

    .file-info img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
        border-radius: 4px; /* 圆角 */
        border: 1px solid #90a4ae; /* 灰色边框 */
    }
</style>

@if(!empty($id))
    <div class="file-info">
        <a href="{{ url('/storage/' . $path) }}">
            {{ $id }} {{ $originalName }}
        </a>
        <br>
        @if(substr($mimeType, 0, 5) == 'image')
            <img src="{{ url('/storage/' . $path) }}">
        @endif
    </div>
@endif

<a href="{{ url('/') }}" class="back-btn">Back</a>

@isset($id)
    <div class="file-info">
        {{ $id }}<br>
        {{ $path }}<br>
        {{ $originalName }}<br>
        {{ $mimeType }}
    </div>
@endisset
</x-layout>