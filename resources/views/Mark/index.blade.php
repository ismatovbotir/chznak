@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">AslBelgi</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>В системе имеются 95 asl belgi.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul>

                                                    <li class="nk-block-tools-opt"><a href="{{route('admin.mark.import')}}" class="btn btn-info"><em class="icon ni ni-upload"></em><span>Import</span></a></li>   
                                                </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <table class="nk-tb-list nk-tb-ulist">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            
                                                            <th class="nk-tb-col"><span class="sub-text">Номенклатура</span></th>
                                                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">AslBelgi</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Статус</span></th>
                                                            
                                                            
                                                        </tr><!-- .nk-tb-item -->
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $mark)
                                                        <tr class="nk-tb-item">
                                                            
                                                            <td class="nk-tb-col">
                                                                
                                                                
                                                                    <div class="project-info">
                                                                        <h6 class="title">{{$mark->item->name}}</h6>
                                                                    </div>
                                                               
                                                            </td>
                                                            <td class="nk-tb-col tb-col-xxl">
                                                                <span>{{$mark->value}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>{{$mark->state}}</span>
                                                            </td>
                                                            
                                                           
                                                        </tr><!-- .nk-tb-item -->
                                                        @endforeach
                                                    </tbody>
                                                </table><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                {{$data->links()}}
                                                {{-- <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>

                                                    </div>--}}<!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
@endsection
