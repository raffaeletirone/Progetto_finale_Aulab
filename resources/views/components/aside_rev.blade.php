<div class="col-md-3 mt-5">
    <aside class="aside bg-body-secondary " style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
        <div class="col-md-3 w-100">
            <div class="art-rev position-relative w-100" style="display: inline-block;">
                <a href="{{ route('revisor.index') }}" class="fs-4 d-block" style="text-decoration: none; color: black;">
                    {{ __('ui.Dashboard') }}
                </a>
                <span class="badge rounded-pill bg-danger position-absolute top-0 end-0">
                    {{ \App\Models\Article::toBeRevisedCount() }}
                </span>
            </div>


            <div class=" art-rev w-100">
                <a href="{{ route('table.index') }}" class="fs-4 d-block"
                    style="text-decoration: none; color: black;">{{__('ui.Articoli revisionati')}}</a>
            </div>
        </div>
    </aside>
</div>