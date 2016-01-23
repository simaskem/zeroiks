@extends('layout')
@section('content')


@if(!in_array($prc_package->pck_pst_id, [Cnst::PCK_STATE_APPROVED, Cnst::PCK_STATE_PMT_APPLIED]))
{!! Form::model($prc_package, [
    'method' => 'PATCH',
    'action' => [empty($prc_package->pck_pst_id) || $prc_package->pck_pst_id == Cnst::PCK_STATE_CREATED ? 'prc_packageController@update' : 'prc_packageController@updateAssignment', $prc_package]
    ])!!}
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary filterable" style="overflow:auto;">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>{{trans('msg.PnlFormDetailsHeader')}}</span>
                </h3>
            </div>
            <div class="panel-body">
                @include('prc_package.inc_prc_package', ['mode' => Cnst::MODE_EDIT])   
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="btn-toolbar" role="toolbar">
            
                @if(!in_array($prc_package->pck_pst_id, [Cnst::PCK_STATE_APPROVED, Cnst::PCK_STATE_PMT_APPLIED]))
                    @if (empty($prc_package->pck_pst_id) || $prc_package->pck_pst_id == Cnst::PCK_STATE_CREATED)
                        {!! Form::submit(''.trans('msg.BtnSave'), ['id' => 'btn_save', 'name' => 'btn_save', 'class' => 'btn btn-primary pull-right']) !!}
                    @else
                        @if (Hlp::user()->hasRight(Cnst::RIGHT_PCK_Assign))
                            {!! Form::submit(''.trans('msg.BtnAssign'), ['id' => 'btn_assign', 'name' => 'btn_save', 'class' => 'btn btn-primary pull-right']) !!}
                        @endif    
                    @endif
                    @if ($prc_package->pck_pst_id == Cnst::PCK_STATE_CREATED)
                        @if (Hlp::user()->hasRight(Cnst::RIGHT_PCK_Assign))
                            {!! Form::submit(''.trans('msg.BtnAssign'), ['id' => 'btn_assign', 'name' => 'btn_assign', 'class' => 'btn btn-primary pull-right', "data-toggle" => "modal",  "data-target" => "#confirmAction", "onclick" => "return false", "data-action" => "assign"]) !!}
                        @endif
                    @endif
                @endif
            
            {!! Html::decode( link_to_action('prc_packageController@index', '<span class="glyphicon glyphicon-arrow-left"></span> '.trans('msg.BtnBackToList'), null, array("id" => "btn_back", "class" => "btn btn-default btn-back") )) !!}    
        </div>
    </div>
</div> 


@endsection