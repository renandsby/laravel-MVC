<x-layout title="Editar Série '{{ $serie->name }}'">
    {{--    <form action="{{ route('series.store') }}" method="post">--}}
    {{--        @csrf--}}
    {{--        <div class="mb-3">--}}
    {{--            <label for="name" class="form-label">Nome:</label>--}}
    {{--            <input type="text" id="name" name="name" class="form-control">--}}
    {{--        </div>--}}

    {{--        <button type="submit" class="btn btn-primary">Adicionar</button>--}}
    {{--    </form>--}}
    <x-series.form :action="route('series.update', $serie->id)" :name="$serie->name" button="Editar"/>
</x-layout>
