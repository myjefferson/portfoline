<button id="dropdownMenuIconHorizontalButton-{{$index}}" data-dropdown-toggle="dropdownDotsHorizontal-{{$index}}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
      <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownDotsHorizontal-{{$index}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton-{{$index}}">
        <li>
            <a href={{route('dashboard.courses.edit', ['id' => $course->id])}} class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full">Alterar</a>
        </li>
        <li>
            <button data-modal-target="popup-modal-{{$index}}" data-modal-toggle="popup-modal-{{$index}}" class="block px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full" type="button">
                Remover
            </button>
        </li>
    </ul>
</div>

{{-- Modal de confirmação --}}
@include('components.modal-confirm', [
    $index,
    'id' => $course->id,
    'description' => 'Tem certeza que deseja remover o curso?',
    'route' => route('dashboard.courses.delete', ['id' => $course->id])
])
