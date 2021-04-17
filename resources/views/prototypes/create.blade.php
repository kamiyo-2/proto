@extends("layouts.app")
@section("content")
<div class="main">
  <div class="inner">
    <div class="form__wrapper">
      <h2 class="page-heading">新規プロトタイプ投稿</h2>
      <form method="POST" action="/prototypes">
                    @csrf
        <div class="field">
          <label for="title" class="form__text">タイトル</label>
          <input class="form-control" name="title" type="string">
        </div>

        <div class="field">
          <label for="catch_copy" class="form__text">キャッチコピー</label>
          <input class="form-control" name="catch_copy" type="text">
        </div>

        <div class="field">
          <label for="concept" class="form__text">コンセプト</label>
          <input class="form-control" name="concept" type="text">
        </div>

        <div class="field">
          <label for="image" class="form__text">プロトタイプの画像</label>
          <input class="form-control" name="iamge" type="string">
        </div>
        <button class="form__btn " type="submit">登録</button>
      </form>
    </div>
  </div>
</div>
@endsection