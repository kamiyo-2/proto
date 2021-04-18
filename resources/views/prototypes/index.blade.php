@extends("layouts.app")
@section("content")
<main class="main">
  <div class="inner">
    @guest
    @else
      <div class="greeting">
         こんにちは、
         <!-- <%= link_to "#{current_user.name}さん", "/users/#{current_user.id}",  class: :greeting__link %> -->
      </div> 
    @endauth

    <div class="card__wrapper">
      @foreach($prototypes as $prototype)
        <div class="card">
          <div class="card__body">
          <img src="/images/test.png">
        
            <a class='card__title' href="{{ url('prototypes/' . $prototype->id) }}">{{ $prototype->title }}</a>
            <p class="card__summary">
              <div>{{ $prototype->concept }}</div>
            </p>
            <a href="{{ url('prototypes/' . $prototype->id . '/edit') }}" class="btn btn-primary">編集</a>

            <div class="card__user" href="{{ url("prototypes") }}">Prototype</div>
            <!-- <%= link_to prototype.user.name, user_path(prototype.user.id), class: :card__user %>             -->
          </div>
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection
