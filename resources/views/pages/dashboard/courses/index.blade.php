@extends('layout.template')

@section('content_dashboard')
    <div>
        @include('components.header' ,[
            'title' => 'Acadêmico e cursos',
            'options' => [[
                'route' => route('dashboard.courses.create'),
                'title' => 'Adicionar'
            ]],
            'buttonJson' => [
                'active' => true,
                'route' => route('api.courses', ['userId' => Auth::user()->id])
            ]
        ])
    </div>

    <div class="w-full flex items-center justify-center mt-7 gap-4">
        @forelse ($courses as $course)
            @include('components.card-course', ['course' => $course])
        @empty
            <p>Adicione acadêmicos e cursos</p>
        @endforelse
    </div>
@endsection
