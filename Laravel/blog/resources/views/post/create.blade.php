<form action="/posts" method="POST">
    @csrf
    <input type="text" name="title" id="title">
    <input type="text" name="content" id="content">
    <button type="submit">submit</button>
</form>