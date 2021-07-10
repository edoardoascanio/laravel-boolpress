<form action="{{ route ('posts.destroy', $id) }}" method="post" class="delete_form">

    @csrf
    @method('DELETE')

    <div class="delete">
        <a href=""> <i class="fa fa-trash"></i></a>
    </div>

</form>
