<x-form action="{{route('blog')}}" method="get">
    <div class="row">

        <div class="col-12 col-md-8">
            <div class="mb-3">
                <x-input name="search" value="{{request('search')}}" placeholder="{{__('Введите запрос...')}}"/>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="mb-3">
                <x-select name="category_id" value="{{request('category_id')}}" :options="$categories" />
            </div>
        </div>

        <div class="col-12 col-md-1">
            <div class="mb-3">
                <x-button type="submit" class="w-100" title="Поиск">
                    <i class="fas fa-search"></i>
                </x-button>
            </div>
        </div>
    </div>
</x-form>
