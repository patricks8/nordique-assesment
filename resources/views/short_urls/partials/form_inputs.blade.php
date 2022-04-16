<div>
    <x-label for="destination" :value="__('Destination') . '*'" />

    <x-input id="destination" class="block mt-1 w-full" type="text" name="destination" :value="old('destination', isset($shortUrl) ? $shortUrl->destination : '')" />
</div>
