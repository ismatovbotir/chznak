@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Номенклатуры</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total 937 orders.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="{{route('admin.item.create')}}" class="btn btn-danger">Добавить</a>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">

                <div class="card-inner p-0">
                    <table class="table table-tranx">
                        <thead>
                            <tr class="tb-tnx-head">
                                <th class="tb-tnx-id"><span class="">Изоброжение</span></th>
                                <th class="tb-tnx-info">
                                    ШК
                                </th>
                                <th class="tb-tnx-info">
                                    <span class="tb-tnx-total">Нименование</span>
                                   
                                </th>
                                <th class="tb-tnx-info">
                                    К-во в Агрегации
                                   
                                </th>
                                <th class="tb-tnx-action">
                                    Action
                                </th>
                            </tr><!-- tb-tnx-item -->
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-id">
                                    <a href="#"><span>4947</span></a>
                                </td>
                                <td class="tb-tnx-info">
                                    <div class="tb-tnx-desc">
                                        <span class="title">{{$item->gtin}}</span>
                                    </div>
                                  
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                    <div class="tb-tnx-total">
                                        <span class="amount">{{$item->name}}</span>
                                    </div>
                                    
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                    <div class="tb-tnx-total">
                                        <span class="amount">{{$item->qty}}</span>
                                    </div>
                                    
                                </td>
                                <td class="tb-tnx-action">
                                    <div class="dropdown">
                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                            <ul class="link-list-plain">
                                                <li><a href="{{route('admin.item.show',['item'=>$item->id])}}">View</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr><!-- tb-tnx-item -->
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- .card-inner -->

                <div class="card-inner">
                {{$items->links()}}    
                
                {{--<ul class="pagination justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>--}}
                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>



@endsection