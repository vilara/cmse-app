<select {{ $disabled ? 'disabled' : '' }} {!!
 $attributes->merge([
     //'class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm',
     'class' => 'w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-sm',
     
     ]) !!}>

<option value="">Selecione...</option>
@foreach ($arra as $arr)
<option value="{{ $arr->id }}">{{ $arr->$ref }}</option>
@endforeach
</select>