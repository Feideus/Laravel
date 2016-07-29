@extends('Master')


@section('Head')
<link rel="stylesheet" href="{{ URL::asset('Css/view3.css') }}"/>
@stop

@section('Header')
<div id="div1"><p>/!\ Les informations entrees dans les champs si dessous seront sauvegardees definitivement /!\ </p></div>
@stop

@section('Content')


@if (count($errors) > 0)
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>/!\{{ $error }}/!\</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="addUser/createUser">
  
  <ul id="adduserul">
    <?php $index = 6;?>
  @for ($i = 0; $i < $index; $i++)
  
  <?php 

  if($i == 0)
    {
      echo '<div class="divContainer"><nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."name".'</nav>'; echo "<input type ='text' value='name' name='name'></input></li></div>";
    }	   
  elseif($i == 1)
    {
      echo '<div class="divContainer"><nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."surname".'</nav>'; echo "<input type ='text' value='surname' name='surname'></input></li></div>";
    }
elseif($i == 2)
  {
    echo '<div class="divContainer"><nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."email".'</nav>'; echo "<input type ='text' value='email' name='email'></input></li></div>";
  }
elseif($i == 3)
    {
      echo '<div class="divContainer"><nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."password".'</nav>'; echo "<input type ='text' value='password' name='password'></input></li></div>";
    }
elseif($i == 4)
    {
      echo '<div class="divContainer"><nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."type".'</nav> '; echo "<input type ='text' value='type' name='type'></input></li></div>";
    }
?>
  @endfor
  </ul>
  <div id="div2"><button type="submit" >Envoyer</button></div>
</form>
@stop
