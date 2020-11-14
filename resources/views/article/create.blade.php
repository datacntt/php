<form action="{{route('baiviet.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea cols="14" rows="5" name="content"></textarea>
    </div>
    <div>
        <input type="submit" value="Click">
    </div>
</form>