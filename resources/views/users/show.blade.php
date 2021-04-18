@extends("layouts.app")
@section("content")


<div class="main">
  <div class="inner">
    <div class="user__wrapper">
      <h2 class="page-heading">
        {{$user->name}}さんの情報
      </h2>
      @auth
        <div class="prototype__manage">
          <a href="{{ url('users/' . $user->id . '/edit') }}" class="prototype__btn">編集</a>
          <form method="POST" action="/users/{{ $user->id }}">
            @csrf
            @method('DELETE')
            <button class="prototype__btn" type="submit">削除</button>
          </form>
        </div>
      @endauth
      <table class="table">
        <tbody>
          <tr>
            <th class="table__col1">名前</th>
            <td class="table__col2">{{$user->name}}</td>
          </tr>
          <tr>
            <th class="table__col1">プロフィール</th>
            <td class="table__col2"><%= @profile %></td>
          </tr>
          <tr>
            <th class="table__col1">所属</th>
            <td class="table__col2"><%= @occupation %></td>
          </tr>
          <tr>
            <th class="table__col1">役職</th>
            <td class="table__col2"><%= @position %></td>
          </tr>
        </tbody>
      </table>
      <h2 class="page-heading">
      {{$user->name}}さんのプロトタイプ
      </h2>
      <div class="user__card">
        <div class="card">
          <div class="card__body">
          @foreach($prototypes as $prototype)
          <img src="/images/test.png">
            <div class='card__title'>{{$prototype->title}}</div>
            <p class="card__summary">
               <div class='card__title'>{{$prototype->catch_copy}}</div>
            </p>
           <div>{{$user->name}}</div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection