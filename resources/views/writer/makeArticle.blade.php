<style>
    .form-container {
    background-color: lightgray;
    border-radius: 8px;
    }

    button:hover {
        color: rgba(13, 109, 253, 0.712);
    }

</style>


@extends('layouts.main')

@section('container')

    <h1>Write an Article</h1>

    <div class="form-container">
        <form>
            <div class="form-contents ms-3 me-3">
                <div class="mb-3 pt-2">
                    <label for="" class="form-label h4">Title</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label h4">Thumbnail</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label h4">Article</label>
                    <textarea name="text" class="form-control" id="" rows="6" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary mb-2 w-100">Post Article</button>
            </div>
        </form>
    </div>

@endsection