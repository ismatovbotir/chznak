@extends('layouts.app')

@section('contentBody')
<div class="form-group">
    <label class="form-label" for="customFileLabel">Asl Belgi (.csv)</label>
    <div class="form-control-wrap">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="markFile" name="markFile">
            <label class="custom-file-label" for="customFile">Выберите файл</label>
        </div>
        <div class="mt-3">
            <button class="btn btn-info" type="submit">Загрузить</button>
        </div>
    </div>
</div>
@endsection
