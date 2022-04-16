@if (session('successMessage'))
    <div class="max-w-6xl mx-auto mt-4 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div>
                <p class="font-bold">{{ session('successMessage') }}</p>
            </div>
        </div>
    </div>
@endif
