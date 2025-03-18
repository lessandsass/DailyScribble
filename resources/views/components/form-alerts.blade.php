<div>
    <div class="mb-3">
        @if (Session::get('info'))
            <div class="text-red-600 text-sm">
                {{ Session::get('info') }}
                <button class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
        @endif

        @if (Session::get('fail'))
            <div class="text-red-600 text-sm">
                {{ Session::get('fail') }}
                <button class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
        @endif

        @if (Session::get('success'))
            <div class="text-green-600 text-sm">
                {{ Session::get('success') }}
                <button class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
        @endif
    </div>
</div>
