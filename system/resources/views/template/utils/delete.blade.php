<form action="{{$url}}" method="post" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </button>
</form>