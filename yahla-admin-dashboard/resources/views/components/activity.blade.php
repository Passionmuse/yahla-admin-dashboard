<div class="card mb-4">
    <h5 class="card-header">{{ $title }}</h5>
    <div class="card-body">
      <ul class="timeline">
        @foreach ($actions as $action)
            <x-activity-action :action="$action" />
        @endforeach

        @if ($actions->onLastPage())
        <li class="timeline-end-indicator">
          <i class="bx bx-check-circle"></i>
        </li>
        @endif
      </ul>
      @if (! $actions->onLastPage())
      <div class="text-center">
        <button  class="btn btn-primary" style="width: 150px" onclick="loadMoreActivity(this)">Load More</button>
      </div>
      @endif
    </div>
</div>

<script>
    const timeline = document.querySelector('.timeline');
    let nextPage = {{ $actions->currentPage() + 1 }};
    const lastPage = {{ $actions->lastPage() }};
    
    function loadMoreActivity(self) {
        $.ajax({
            url: '{!! route('ajax-activity') . ($all? '?all=1&': '?') !!}' + 'page=' + nextPage,
            method: 'GET',
            beforeSend: function () {
                self.disabled = true;
                self.innerHTML = '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...';
            },
            success: function (data) {
                data.forEach(li => {
                    $(timeline).append($(li));
                });

                if (nextPage < lastPage) {
                    nextPage++;
                    self.disabled = false;
                    self.innerHTML = "Load More"
                } else {
                    $(timeline).append($('<li class="timeline-end-indicator"><i class="bx bx-check-circle"></i></li>'));
                    self.remove();
                }
            }
        });
    }
</script>