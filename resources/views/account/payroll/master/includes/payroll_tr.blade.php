<tr class="option_value">
    <td width="5%">
        <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
        </div>
    </td>
    <td width="35%">
        {!! Form::text('tag_line[]', null, ['class' => 'form-control', 'required']) !!}
    </td>
    <td width="30%">
        {!! Form::select('payroll_head[]', $payroll_heads, null, ['class' => 'form-control chosen-select', 'required']) !!}
    </td>
    <td width="15%">
        {!! Form::text('due_date[]', null, ["placeholder" => "YYYY-MM-DD", "class" => "col-xs-10 col-sm-11 input-mask-date date-picker", "required"]) !!}
    </td>
    <td width="20%">
        {!! Form::text('amount[]', null, ["placeholder" => "", "class" => "col-xs-10 col-sm-11" , "required"]) !!}
    </td>
    <td width="10%">
        <div class="btn-group">
            <button type="button" class="btn btn-xs btn-danger" onclick="$(this).closest('tr').remove();">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
        </div>

    </td>
</tr>

@include('account.fees.master.includes.common-script')
@include('includes.scripts.inputMask_script')
@include('includes.scripts.table_tr_sort')
@include('includes.scripts.datepicker_script')