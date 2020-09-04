<div class="list-group-item">
    <span class="mr-3">{{ $user->id }}</span>
    <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width="32">
    <a href="{{ route('users.show',$user) }}" class="text-right">{{ $user->name }}</a>
    @can('destroy',$user)
        <form action="{{ route('users.destroy',$user) }}" method="POST" class="float-right">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>
