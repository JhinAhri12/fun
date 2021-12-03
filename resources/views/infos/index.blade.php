@extends('Layout.app')

@section('content')

<?php echo $nb ?>

@if($nb)
coucou
@else
coucou 2
@endif

<form method="POST" action="/infos-show">
    @csrf
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="">
    <input type="submit" value="Envoyer">
</form>


@endsection

<script type="text/javascript">
  let toto = 4;
  console.log(toto);
</script>
