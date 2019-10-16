@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                <form action="/admin/sentMailDepartment" method="POST">
                        @csrf
                <div class="form-group">
                                    <label for="title">Phòng ban</label>
                                    <div class="row">
                                    @foreach ($Departments as $Department)
                                    <div class="col-md-4">
                                    <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="Department[]" value="{{$Department->id_department}}" class="form-check-input" > {{$Department->name_depart}}<i class="input-helper"></i></label>
                                    </div>
                                    </div>
                                    @endforeach
                                    </div>
                                       
                                </div>          
                                 <label for="tieude">Subject</label>
                                    <input type="text"  name="subject" class="form-control" id="tieude" placeholder="Subject">
                <table class="table pb-4" bgcolor="f3fdfd">
                        <thead>
                            <tr>
                                <td class="boder border-dark"> <p></p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <textarea name="content" id="editor" cols="120" rows="10"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button mt-4">
                        <button type="submit" class="btn btn-primary">Gửi thông báo</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/ckeditor.js')}}"></script>
    <script src="{{asset('assets/plugin.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
    <style>
    .ck-editor__editable_inline {
    min-height: 300px !important;
}
    </style>
@endsection
