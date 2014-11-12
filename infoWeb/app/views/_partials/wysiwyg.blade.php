@section('css')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}"/>
@stop

<textarea class="input-block-level" id="summernote" name="body" rows="18">
@if(isset($item))
{{$item->body}}
@endif
</textarea>

@section('javascript')
<script src="{{ asset('assets/js/summernote.min.js') }}"></script>
<script>
$(document).ready(function() {
	$('#summernote').summernote({
		height: "350px",
		onImageUpload: function(files, editor, welEditable) {
			sendFile(files[0],editor,welEditable);
		}
	});
	function sendFile(file,editor,welEditable) {
	    data = new FormData();
	    data.append("file", file);
	    $.ajax({
	        data: data,
	        type: "POST",
	        url: "/image",
	        cache: false,
	        contentType: false,
	        processData: false,
	        success: function(data) {
                editor.insertImage(welEditable, data.url);
	        }
	    });
	}
});
</script>
@stop