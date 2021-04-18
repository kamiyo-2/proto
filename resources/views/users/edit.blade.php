@extends("layouts.app")
@section("content")
<div class="main">
  <div class="inner">
    <div class="form__wrapper">
      <h2 class="page-heading">ユーザーネーム</h2>
      <form method="POST" action="/users/{{ $user->id }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="field">
          <label for="title" class="control-label">プロトタイプの名称</label>
          <input class="form__text" name="name" type="text" value="{{ $user->name }}">
          </div>
<!-- 
          <div class="field">
          <label for="catch_copy" class="control-label">キャッチコピー</label>
          <input class="form__text" name="catch_copy" type="text" value="{{ $user->catch_copy }}">
          </div>

          <div class="field">
          <label for="concept" class="control-label">コンセプト</label>
          <input class="form__text" name="concept" type="text" value="{{ $user->concept }}">
          </div>

          <div class="field">
          <label for="image" class="form__text">プロトタイプの画像</label>
          <input class="form__text" name="image" type="string" value="{{ $user->image }}">
          </div> -->
        <button class="form__btn" type="submit">更新</button>
      </form>
    </div>
  </div>
</div>
@endsection