<x-dashboard::full :title="trans('Pages')">
    <x-dashboard::datatable-mini :data-table="$dataTable" />
    <x-slot name="toolbarButtons">
        <a href="{{ route('dashboard.pages.create') }}" class="btn btn-success btn-sm">
            {{ __('Add Page') }}
        </a>
    </x-slot>
</x-dashboard::full>
