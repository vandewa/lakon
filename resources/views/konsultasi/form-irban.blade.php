<div class="mb-3 row">
    <div class="col-md-12">
        <div class="col-12">
            <label class="form-label">Subject(Judul)</label>
            {{Form::text('subject', null, ['class' => 'form-control ','id' => 'judul','placeholder' => 'Masukkan Judul Pertanyaan','required', 'disabled' => 'disabled' ])}}
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-6">
        <div class="col-12">
            <label class="form-label">Pertanyaan</label>
            {{Form::textarea('pertanyaan', null, ['id' => 'editor', 'disabled' => 'disabled'])}}
        </div>
    </div>
    <div class="col-md-6">
        @if ($data->path_file_pertanyaan == null)
            <label class="form-label">Lampiran</label>
            <img id="preview-image-before-upload" src="{{ asset('not-found.jpg') }}"
                alt="preview image" style="max-height: 250px;">
        @else
            <label class="form-label">Lampiran</label>
            <object data="{{ route('helper.show-picture', ['path' => $data->path_file_pertanyaan]) }}" type="application/pdf" width="100%" height="500"
                style="border: solid 1px #ccc;"></object>
        @endif
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-6">
        <div class="col-12">
            <label class="form-label">Irban</label>
            {{Form::select('irban_id' ,$irban, null, ['class' => 'form-control ','placeholder' => '- Pilih -','required', 'id' => 'irban', 'disabled' => 'disabled'])}}
            @error('irban_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-12">
            <label class="form-label">Urusan</label>
            <div class="form-group">
                @if($urusan)
                {{Form::select('urusan_id[]', $listUrusan, $urusan,['class' => 'multiple-select', 'id' => 'urusan', 'multiple' => 'multiple', 'disabled' => 'disabled'])}}
                @else
                {{Form::select('urusan_id[]', [], null,['class' => 'multiple-select', 'id' => 'urusan', 'multiple' => 'multiple', 'disabled' => 'disabled'])}}
                @endif
           </div>
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-6">
        <div class="col-12">
            <label class="form-label">Jawaban</label>
            {{Form::textarea('jawaban', null, ['id' => 'editor2'])}}
        </div>
    </div>
    <div class="col-6">
        @if ($data->path_file_jawaban == null)
            <label class="form-label">Lampiran</label>
            <img id="preview-image-before-upload" src="{{ asset('not-found.jpg') }}"
                alt="preview image" style="max-height: 250px;">
            <input name="path_file_jawaban" type="file" accept="application/pdf" class="form-control">
            @error('path_file_jawaban')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @else
            <label class="form-label">Lampiran</label>
            <object data="{{ route('helper.show-picture', ['path' => $data->path_file_jawaban]) }}" type="application/pdf" width="100%" height="500"
                style="border: solid 1px #ccc;"></object>
                <label class="form-label">Ganti Lampiran</label>
            <input name="path_file_jawaban" type="file" accept="application/pdf" class="form-control">
            @error('path_file_jawaban')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        @endif
        
    </div>
</div>

@include('action')

@push('css')
    <style>
        .ck-editor__editable {
            min-height: 100px;
        }
    </style>
@endpush

@push('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
            }
        } )
        .then(editor => {
            editor.enableReadOnlyMode("editor");
            console.log(editor);
        })
        .catch( error => {
            console.error( error );
        } );
  </script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ),{
            ckfinder: {
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
            }
        } )
        .then(editor => {
            console.log(editor);
        })
        .catch( error => {
            console.error( error );
        } );
  </script>
  <script>
    $('#irban').change(function() {
    var countryID = $(this).val();
       $.ajax({
           type: "GET",
           url: "{{ route('urusanIrban') }}?country_id=" + countryID,
           success: function(res) {
               $("#urusan").empty();
               $("#urusan").append('<option value="">Pilih Urusan</option>');
               $.each(res, function(key, value) {
                   $("#urusan").append('<option value="' + key + '">' + value +
                       '</option>');
               });
           }
       });
   });
</script>  
{!! JsValidator::formRequest('App\Http\Requests\UpdateRoleIrban') !!}
@endpush