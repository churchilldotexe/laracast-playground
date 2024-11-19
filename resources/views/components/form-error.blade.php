@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-500 italic']) }}>{{ $message }}</p>
@enderror
