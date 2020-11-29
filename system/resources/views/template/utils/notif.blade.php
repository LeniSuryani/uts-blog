@foreach(['success', 'warning', 'danger', 'dark', 'info'] as $status)
@if (session($status))
<div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
    <a href="#" style="color:cornsilk" class="close mr-4" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{ session($status) }}</strong>
</div>
@endif
@endforeach