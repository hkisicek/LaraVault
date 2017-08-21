@extends('layouts.app')

@section('content')
    <div class="col-lg-offset col-lg-4">
        <center><h1>Choose file to upload</h1></center>
        <form action="/store" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail">File Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Enter file title" required>
                <small id="titleHelp" class="form-text text-muted">This title will be displayed.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">File Description</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Enter file description" required>
                <small id="descriptionHelp" class="form-text text-muted">Describe your file.</small>
            </div>

            <fieldset class="form-group">
                <legend>Is this file public or private?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="1" checked>
                        My file is public.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="0">
                        My file is private.
                    </label>
                </div>
            </fieldset>
            <input type="file" name="file" required>
            <br>
            <input type="submit" value="Upload">
        </form>
    </div>
@endsection