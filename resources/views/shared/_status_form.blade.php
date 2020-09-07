<form action="{{ route('statuses.store') }}" method="POST">
    @csrf
    @include('shared._errors')
    <textarea name="content" class="form-control" rows="3" placeholder="说说新鲜事儿~"></textarea>
    <div class="text-right">
        <button class="btn btn-primary mt-3">发布</button>
    </div>
</form>
