<x-layout title="Nova Série">
{{--    <form action="{{ route('series.store') }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="mb-3">--}}
{{--            <label for="name" class="form-label">Nome:</label>--}}
{{--            <input type="text" id="name" name="name" class="form-control">--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">Adicionar</button>--}}
{{--    </form>--}}
    <x-series.form :action="route('series.store')" button="Adicionar"/>
</x-layout>
