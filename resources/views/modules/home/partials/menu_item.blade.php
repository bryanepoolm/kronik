<div class="col-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">{{ $title }} </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="{{ $iconClass }}"></i>
                </div>
                <div class="ps-3">
                    <a href="{{ $route }}">
                        <span class="text-muted small pt-2 ps-1">{{ $title }}</span>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div><!-- End Sales Card -->
