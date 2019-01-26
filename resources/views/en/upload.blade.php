@extends('en.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">[管理者]FILE UPLOAD</div>

                <div class="panel-body">
                   <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                    <div>
                        <form
                        method="POST"
                        action="/upload"
                        class="dropzone"
                        id="imageUpload"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="{{ secure_asset('js/dropzone.min.js') }}"></script>
<script>
    Dropzone.options.imageUpload = {
        dictDefaultMessage: 'Please drug upload file',
        acceptedFiles: '.jpg, .jpeg, .ex4',
maxFilesize: 5 // 5MBまで
}
</script>
@endsection
