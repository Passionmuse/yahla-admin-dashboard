
@php
try{


    $eventPointColors = [
        'logged_in' => 'success',
        'logged_out' => 'secondary',
        'deleted' => 'danger',
        'created' => 'info',
        'updated' => 'warning'
    ];

    $name = $description = '';
    $modelEvents = ['created', 'updated', 'deleted'];

    $event = $action->event;

    $causer = $action->causer()->first();

    if(!$causer){
        $causer = json_decode(json_encode([
            'id' => '',
            'name' => '',
            'image' => '',
            'email' => ''
    ]));
    }
    if ($event === 'logged_in' || $event === 'logged_out') {
        $causerName = auth()->user()->id === $causer->id? 'You': $causer->name;
        $name = "<strong>$causerName</strong> " . str_replace('_', ' ', $event);
    } elseif (in_array($event, $modelEvents)) {
        $subjectTypeArr = explode("\\", $action->subject_type);
        $subjectName = $subjectTypeArr[count($subjectTypeArr) - 1];
        
        $causerName = auth()->user()->id === $causer->id? 'you': $causer->name;
        $name = "<strong><i>$subjectName</i></strong> $event by <strong>{$causerName}</strong>";
    }

    @endphp
    <li class="timeline-item timeline-item-transparent">
        <span class="timeline-point timeline-point-{{ $eventPointColors[$action->event] }}"></span>
        <div class="timeline-event">
            <div class="timeline-header mb-1">
                <h6 class="mb-0">{!! $name !!}</h6>
                <small class="text-muted">{{ $action->created_at->diffForHumans() }}</small>
            </div>
            @if ($description)
            <p class="mb-2">{!! $description !!}</p>
            @endif
            <!-- <div class="d-flex">
                <a href="javascript:void(0)" class="me-3">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2">
                <span class="fw-bold text-body">invoices.pdf</span>
                </a>
            </div> -->
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3"> <img src="{{ $causer->image ? asset('uploads/students/' . $causer->image) : 'https://www.w3schools.com/howto/img_avatar.png' }}" alt="Avatar" class="rounded-circle">
</div>
                    </div>
                <div class="d-flex flex-column">
                    <a href="javascript:void(0)" class="text-body text-truncate">
                    <span class="fw-semibold">{{ $causer->name }}</span>
                    </a>
                    <small class="text-muted">{{ $causer->email }}</small>
                </div>
            </div>
        </div>
    </li>
@php
}catch(\Exception $e){
    return ;
}
@endphp