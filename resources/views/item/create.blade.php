@extends('layouts.app')

@section('contentBody')
<form action="{{route('admin.item.store')}}" method="POST">
    @csrf
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Новая Номенклатура</span>
            <div class="row gy-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="default-01">Наименование</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="default-01" name="name" placeholder="Наименование номенклатуры">
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <div class="col-md-8">
                            <label class="form-label" for="default-04">GTIN</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-qr"></em>
                                </div>
                                <input type="text" class="form-control" id="default-04" placeholder="Штрихкод Номенклатуры" name="gtin">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="default-04">Агрегация</label>
                            <div class="form-control-wrap">

                                <input type="text" class="form-control" id="default-04" placeholder="Количество" name="qty">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="default-04">ИКПУ</label>
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right">
                                <em class="icon ni ni-list"></em>
                            </div>
                            <input type="text" class="form-control" id="default-04" placeholder="ИКПУ Номенклатуры" name="mxik">
                        </div>
                    </div>
                </div>
                


                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="default-textarea">Описание </label>
                        <div class="form-control-wrap">
                            <textarea class="form-control no-resize" id="default-textarea" placeholder="Описание номенклатуры" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="default-06">Изображение Номенклатуры</label>
                        <div class="form-control-wrap d-flex justify-between">
                            <div class="custom-file">
                                <input type="file" multiple="" class="custom-file-input" id="customFile" name="img">
                                <label class="custom-file-label" for="customFile">Выберите файл</label>
                            </div>
                            <div>
                                <button class="btn btn-info" type="submit">Сохранит</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="error">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>

    </div>
    </div>
</form>
@endsection