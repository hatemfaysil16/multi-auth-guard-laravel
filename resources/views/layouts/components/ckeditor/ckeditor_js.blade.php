<script>
    CKEDITOR.replace('description[en]', {
        height: 300,
        filebrowserUploadUrl: "{{Route('upload.image',['_token'=>csrf_token()])}}"
    , });
    CKEDITOR.replace('description[ar]', {
        height: 300
        , filebrowserUploadUrl: "{{Route('upload.image',['_token'=>csrf_token()])}}"
    , });
</script>