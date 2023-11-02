@extends('layouts.merchantapp')
    @section('content')
        <div class="content">
            <div class="sidebar_opener">
                <h2>Заявки</h2>
                <div class="for_sidebar">
                    <p>Sidebar</p>
                </div>
            </div>

            <ul class="application_top_filter scroller">
                <li><b>Создать пост</b></li> {{--
                <li><a href=""><div>Rad etildi</div></a></li>
                <li><a href="">Rasmiylashtirildi</a></li>
                <li><a href=""><div>Bekor qilindi</div></a></li>
                <li><a href="">O'chirildi</a></li>
                --}}
            </ul>
            <div class="line"></div>

            <div>
                <form action="{{ route('anasiyastore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Заголовок РУ</label>
                      <input type="text" name="title_ru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Текст РУ</label>
                        <textarea id="body_ru" name="body_ru">Your content here</textarea>
                    </div>

                    <div class="form-group">
                        <label>Заголовок УЗ</label>
                        <input type="text" name="title_uz" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Текст УЗ</label>
                        <textarea id="body_uz" name="body_uz">Your content here</textarea>
                    </div>

                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="cover_photo" id="customFileLangHTML">
                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Загрузить">Обложка</label>
                    </div>

                    <div class="form-group">
                        <label>SEO TITLE</label>
                        <input type="text" name="seo_title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>META DESCRIPTION</label>
                        <input type="text" name="meta_description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>META KEYWORDS</label>
                        <input type="text" name="meta_keywords" class="form-control">
                    </div>

                    <input type="hidden" name="is_active" value="1">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body_ru', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'body_uz', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
