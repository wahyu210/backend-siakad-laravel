@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dissmissible show fade">
        <div class="alert-body">
            <button class="close" data-dissmiss="alert"><span></span></button>
            <p>{{ $message }}</p>
        </div>
    </div>
@endif
