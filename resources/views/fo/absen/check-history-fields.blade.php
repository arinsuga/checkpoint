
<input type="hidden" name="history_media" id="history_media">

@if (isset($users))
<!-- Users -->
<div class="form-group">
    <label>User</label>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <select id="userid" name="userid" class="form-control select2">
                @foreach ($users as $key => $item)

                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    
                @endforeach
            </select>
        </div>
    </div>
</div>
@endif

<!-- Date Period -->
<div class="form-group">
  <label>Date Period:</label>

    <div class="row">
        <div class="input-group col-sm-12 col-md-6">
            <input type="text" class="form-control date" name="startdt" id="startdt"/>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>

        <div class="input-group col-sm-12 col-md-6">
            <input type="text" class="form-control date" name="enddt" id="enddt"/>
            <div class="input-group-append" >
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>

</div>
