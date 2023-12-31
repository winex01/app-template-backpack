{{-- checklist --}}
@php
    $key_attribute = (new $field['model'])->getKeyName();
    $field['attribute'] = $field['attribute'] ?? (new $field['model'])->identifiableAttribute();
    $field['number_of_columns'] = $field['number_of_columns'] ?? 3;

    // calculate the checklist options
    if (!isset($field['options'])) {
        $field['options'] = $field['model']::all()->pluck($field['attribute'], $key_attribute)->toArray();
    } else {
        $field['options'] = call_user_func($field['options'], $field['model']::query());
    }

    // calculate the value of the hidden input
    $field['value'] = old_empty_or_null($field['name'], []) ??  $field['value'] ?? $field['default'] ?? [];
    if(!empty($field['value'])) {
        if (is_a($field['value'], \Illuminate\Support\Collection::class)) {
            $field['value'] = ($field['value'])->pluck($key_attribute)->toArray();
        } elseif (is_string($field['value'])){
            $field['value'] = json_decode($field['value']);
        }
    }

    // define the init-function on the wrapper
    $field['wrapper']['data-init-function'] =  $field['wrapper']['data-init-function'] ?? 'bpFieldInitChecklist';

    $roles = config('backpack.permissionmanager.models.role')::
                orderBy('name', 'asc')
                ->pluck('name')->toArray();

    $options = collect($field['options']);
    $unGroupPermissions = $options->reject(function ($option) use ($roles) {
        foreach ($roles as $prefix) {
            if (strcasecmp(substr($option, 0, strlen($prefix)), $prefix) === 0) {
                return true;
            }
        }
        return false;
    });

@endphp

@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    <input type="hidden" value='@json($field['value'])' name="{{ $field['name'] }}">

    @if(!$unGroupPermissions->isEmpty())

        <hr>
        <div class="row">
            <div class="col-sm-12">
                <label class="">{{ __('Misc.') }}</label>
            </div>
        </div>
        
        <div class="row">
            @foreach ($unGroupPermissions as $key => $option)
            <div class="col-sm-{{ intval(12/$field['number_of_columns']) }}">
                <div class="checkbox">
                    <label class="font-weight-normal">
                        <input type="checkbox" value="{{ $key }}"> {{ ucwords(str_replace('_', ' ', $option)) }}
                    </label>
                </div>
            </div>
            @endforeach
        </div>

    @endunless

    @foreach ($roles as $role)
        @php
            $permissions = collect($field['options'])->filter(function ($item) use ($role) {
                // return false !== stristr($item, $role);
                return str_starts_with(strtolower($item), strtolower($role));
            })->toArray();

            if (empty($permissions)) {
                continue;
            }
        @endphp

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <label class="">{{ ucwords(str_replace('_', ' ', $role)) }}</label>
            </div>
        </div>

        <div class="row">
            @foreach ($permissions as $key => $option)
            <div class="col-sm-{{ intval(12/$field['number_of_columns']) }}">
                <div class="checkbox">
                    <label class="font-weight-normal">
                        <input type="checkbox" value="{{ $key }}"> {{ ucwords(str_replace('_', ' ', $option)) }}
                    </label>
                </div>
            </div>
            @endforeach
        </div>

    @endforeach

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        @bassetBlock('backpack/crud/fields/checklist-field.js')
        <script>
            function bpFieldInitChecklist(element) {
                var hidden_input = element.find('input[type=hidden]');
                var selected_options = JSON.parse(hidden_input.val() || '[]');
                var checkboxes = element.find('input[type=checkbox]');
                var container = element.find('.row');

                // set the default checked/unchecked states on checklist options
                checkboxes.each(function(key, option) {
                  var id = $(this).val();

                  if (selected_options.map(String).includes(id)) {
                    $(this).prop('checked', 'checked');
                  } else {
                    $(this).prop('checked', false);
                  }
                });

                // when a checkbox is clicked
                // set the correct value on the hidden input
                checkboxes.click(function() {
                  var newValue = [];

                  checkboxes.each(function() {
                    if ($(this).is(':checked')) {
                      var id = $(this).val();
                      newValue.push(id);
                    }
                  });

                  hidden_input.val(JSON.stringify(newValue)).trigger('change');

                });

                hidden_input.on('CrudField:disable', function(e) {
                      checkboxes.attr('disabled', 'disabled');
                  });

                hidden_input.on('CrudField:enable', function(e) {
                    checkboxes.removeAttr('disabled');
                });

            }
        </script>
        @endBassetBlock
    @endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
