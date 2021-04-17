@extends("layouts.app")
@section("content")
<main class="main">
  <div class="inner">
    <div class="prototype__wrapper">
      <p class="prototype__hedding">
        <div>{{$prototype->title}}</div>
      </p>
      <%= link_to "by プロトタイプの投稿者", root_path, class: :prototype__user %>
      @auth
        <div class="prototype__manage">
          <a href="{{ url('prototypes/' . $prototype->id . '/edit') }}" class="prototype__btn">編集</a>
          <form method="POST" action="/prototypes/{{ $prototype->id }}">
            @csrf
            @method('DELETE')
            <button class="prototype__btn" type="submit">削除</button>
          </form>
        </div>
      @endauth
      <div class="prototype__image">
        <img src="/images/test.png">
      </div>
      <div class="prototype__body">
        <div class="prototype__detail">
          <p class="detail__title">キャッチコピー</p>
          <p class="detail__message">
            <div>{{$prototype->catch_copy}}</div>
          </p>
        </div>
        <div class="prototype__detail">
          <p class="detail__title">コンセプト</p>
          <p class="detail__message">
            <div>{{$prototype->concept}}</div>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection