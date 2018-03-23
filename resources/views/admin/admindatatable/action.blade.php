{{-- ---------------------------------- not to play with the  first admin account ------------------------------------}}
@if($id>1)

<form action="{{ route('users.destroy',$id) }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <a href="{{url('/admin/users/' . $id . '/edit')}}" class="btn btn-info"><i class="fa fa-edit"></i></a>

    <button class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button>
</form>



@endif