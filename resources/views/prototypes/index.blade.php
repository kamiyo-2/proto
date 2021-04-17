@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                一覧画面
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{ url('prototypes/create') }}" class="btn btn-success mb-3">登録</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>catch_copy</th>
                            <th>concept</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prototypes as $prototype)
                        <tr>
                            <td>{{ $prototype->id }}</td>
                            <td>{{ $prototype->title }}</td>
                            <td>{{ $prototype->catch_copy }}</td>
                            <td>{{ $prototype->concept }}</td>
                            <td><a href="{{ url('prototypes/' . $prototype->id) }}" class="btn btn-info">詳細</a></td>
                            <td><a href="{{ url('prototypes/' . $prototype->id . '/edit') }}" class="btn btn-primary">編集</a></td>
                            <td>
                                <form method="POST" action="/prototypes/{{ $prototype->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
