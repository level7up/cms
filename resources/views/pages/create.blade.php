<x-dashboard::full :title="trans('Pages')">
    <x-dashboard::card.form :action="route('dashboard.pages.store')" :title="trans('Create Pages')">
        @method('post')
        <x-dashboard::form.input name="slug" />
        <x-dashboard::form.input name="title_ar" />
        <x-dashboard::form.input name="title_en" required />
        <x-dashboard::form.ckeditor name="content_ar">{{ trans('Arabic Content') }}</x-dashboard::form.ckeditor>
        <x-dashboard::form.ckeditor name="content_en">{{ trans('English Content') }}</x-dashboard::form.ckeditor>
    </x-dashboard::card.form>
</x-dashboard::full>
