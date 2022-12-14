<form enctype="multipart/form-data" action="{{ route('insert') }}" method="POST">
    @csrf
    <div class="my-3">
        <div class="input-group">
            <input name="image" type="file" class="form-control">
        </div>
    </div>
    <div class="input-group mb-3 mt-3">
        <button type="submit" class="form-control btn-info">Insert</button>
    </div>
</form>
