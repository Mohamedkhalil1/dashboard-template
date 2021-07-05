@push('script')
    <script>
        let $searchType = $('#searchSection');
        let $searchForm = $('#searchForm');
        $searchForm.submit(function (e) {
            let q = $searchForm.find('[name=q]').val().trim();
            if(!q){
                e.preventDefault();
                return false;
            }
        });
        $searchType.change(function () {
            let $selectedOption = $searchType.find(':selected');
            let selectedType = $selectedOption.data('type');
            let selectedSlug = $selectedOption.data('slug');
            const urls = {
                category: slug => '{{ route('frontend.category.show', '%slug%') }}'.replace('%slug%', slug),
                industry: slug => '{{ route('frontend.industry.show', '%slug%') }}'.replace('%slug%', slug),
                ALL     : '{{ route('frontend.products.index') }}',
            }
            let url = selectedSlug ? urls[selectedType](selectedSlug) : urls.ALL;
            $searchForm.attr('action', url)
        });
        $('.advanced2AutoComplete').autoComplete({
            resolver    : 'custom',
            formatResult: function (item) {
                return {
                    id  : item.id,
                    img : item.img,
                    text: item.text,
                    url : item.url,
                    html: `<img src="${item.img}" /> <span>${item.text}</span>`,
                };
            },
            events      : {
                search: function (query, callback) {
                    let $selectedOption = $searchType.find(':selected');
                    let selectedType = $selectedOption.data('type');
                    let selectedID = $selectedOption.val();
                    $.ajax('{{route('frontend.home.search')}}', {
                        data: {query, selectedType, selectedID}
                    }).done(function (res) {
                        callback(res.data)
                    });
                },
            }
        }).on('autocomplete.select', function (evt, item) {
            location.href = item.url;
        })
    </script>
@endpush

<div class="search-head">
    <form class="search" id="searchForm" action="{{ route('frontend.products.index') }}">
        <input type="text"
               class="form-control advanced2AutoComplete"
               name="q"
               placeholder="@lang('What are you looking for?')"
               autocomplete="off">
        <select class="select" id='searchSection'>
            <optgroup label="@lang('Categories')">
                <option value="ALL" data-type="category">
                    @lang('All Categories')
                </option>
                @foreach ($search_categories as $category)
                    <option value="{{ $category->id }}"
                            data-slug="{{ $category->slug }}"
                            data-type="category">
                        {{$category->title}}
                    </option>
                @endforeach
            </optgroup>
            <optgroup label="@lang('Industries')">
                <option value="ALL" data-type="industry">
                    @lang('All industries')
                </option>
                @foreach ($search_industries as $industry)
                    <option value="{{ $industry->id }}"
                            data-slug="{{ $industry->slug }}"
                            data-type="industry">
                        {{$industry->title}}
                    </option>
                @endforeach
            </optgroup>
        </select>

        <button type="submit" class="submit-btn">
            <i data-feather="search"></i>
        </button>
    </form>
</div>
