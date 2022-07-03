<!-- Search Modal -->
<div class="modal fade search-modal-area" id="exampleModalsrc">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="closer-btn">
                <i class="ri-close-line"></i>
            </button>

            <div class="modal-body">
                {{ Form::open(['route' => 'search', 'method' => 'get', 'class' => 'search-box']) }}
                    <div class="search-input">
                        <input class="form-control" type="text" name="search"
                               placeholder="{{ __('frontend.what_you_search_for') }}" aria-label="Search">
                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- Search Modal -->
