@php 
  if(isset($request->pageFlag)){
    $page = 1;
  } else {
    $page = 0;
  }
@endphp

@if($page === 0 )
  <x-form-first />
@else
  <x-form-second :request=$request />
@endif