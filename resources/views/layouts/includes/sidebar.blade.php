<div class="list-group">
  @foreach( $menus as $menu )
  <a href="{{ route( $menu['name'] ) }}" class="list-group-item list-group-item-action">
    {{ $menu['text'] }}
  </a>
  @endforeach
</div>