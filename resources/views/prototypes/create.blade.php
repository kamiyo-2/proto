@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                登録画面
            </div>
            <div class="card-body">
                <form method="POST" action="/prototypes">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="control-label">タイトル</label>
                        <input class="form-control" name="title" type="string">
                    </div>
                          
                    <div class="form-group">
                        <label for="catch_copy" class="control-label">キャッチコピー</label>
                        <input class="form-control" name="catch_copy" type="text">
                    </div>

                    <div class="form-group">
                        <label for="concept" class="control-label">コンセプト</label>
                        <input class="form-control" name="concept" type="text">
                    </div>

                    <div class="form-group">
                        <label for="image" class="control-label">画像</label>
                        <input class="form-control" name="iamge" type="string">
                    </div>
              
                    <button class="btn btn-primary" type="submit">登録</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
