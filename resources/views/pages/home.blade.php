@extends('app')

@section('content')
<div class="columns is-mobile is-multiline is-mobile">
  <div class="column is-6-mobile is-6-tablet is-4-desktop">
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <a href="{{ route('kuos.show') }}"><img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image"></a>
        </figure>
      </div>
      <div class="card-content">
        <div class="media">
          <div class="media-left">
            <figure class="image is-48x48">
              <a href="#"><img src="http://bulma.io/images/placeholders/96x96.png" alt="Image"></a>
            </figure>
          </div>
          <div class="media-content">
            <a href="#"><p class="title is-4">John Smith</p></a>
            <a href="#"><p class="subtitle is-6">@johnsmith</p></a>
          </div>
        </div>

        <div class="content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Phasellus nec iaculis mauris. <a>@bulmaio</a>.
          <a>#css</a> <a>#responsive</a>
          <br>
          <small>11:09 PM - 1 Jan 2016</small>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
