@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                <div class="form-group">
                                    <label for="title">Phòng ban</label>
                                    <select class="form-control" name="Department" id="title">
                                             <option selected="" value=" 1">  Giam Doc</option>
                                             <option value=" 2">  Student</option>
                                            <option value=" 3">  phong quan li</option>
                                             </select>    
                                </div>
                <table class="table pb-4" bgcolor="f3fdfd">
                    <form action="/sentMailDepartment" method="POST">
                        @csrf
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
            .create( document.querySelector( '#editor' ), {
                
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
    
@endsection
