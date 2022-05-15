<div>
@foreach($formData as $key=>$value)
            <div class="form-group">
                <label for="exampleInputEmail1">{{ $value['label']}} {{ (isset($value['unit']) && ($value['unit']) ) ?" (". $value['unit'] . ")":'' }} </label>
               @if($value['type'] == "number" || $value['type'] == "date" )
                <input type="{{ $value['type']}}" class="form-control" name="{{ $value['label']}}" required="{{ $value['isRequired'] }}"  readonly="{{ $value['isReadonly']}}">
                @elseif($value['type'] == "dropdown")
                 <select class="form-control" required="{{ $value['isRequired'] }}" readonly="{{ $value['isReadonly']}}">
                     @isset($value['items'])
                        @foreach($value['items'] as $data)
                        <option value="{{ $data['value'] }}">{{ $data['text'] }}</option>
                        @endforeach 
                      @endisset
                 </select>
                @endif
            </div>
           @endforeach
</div>