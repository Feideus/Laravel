@extends('Master')

@section('Head')
<link rel="stylesheet" href="{{ URL::asset('Css/view3.css') }}"/>
@stop

@section('Header')
<div id="div1"><p>/!\ Les informations entrees dans les champs si dessous seront sauvegardees definitivement /!\ </p></div>
@stop

@section('Content')

<form method="POST" action="miseAJour" >
  
  <ul>
    <?php $index = 0;?>
  @foreach($user as $info)
  @foreach($info as $info2)
  <?php 

  if($index != 5)
    echo '<li style="border:1px solid grey; padding: 8px; margin: 3px;">'; 
  

  if($index == 0)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."name".'</nav>'; echo "<input type ='text' value=".$info2." name='name'></input></li>";
    }	   
  elseif($index == 1)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."surname".'</nav>'; echo "<input type ='text' value=".$info2." name='surname'></input></li>";
    }
elseif($index == 2)
  {
    echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."email".'</nav>'; echo "<input type ='text' value=".$info2." name='email'></input></li>";
  }
elseif($index == 3)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."password".'</nav>'; echo "<input type ='text' value=".$info2." name='password'></input></li>";
    }
elseif($index == 4)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."type".'</nav> '; echo "<input type ='text' value=".$info2." name='type'></input></li>";
    }
elseif($index == 5)
    {
      echo "<input type ='hidden' value=".$info2." name='id'></input></li>";
    }
?>

    <?php $index++;?>
  @endforeach
  @endforeach
  </ul>
  <div id="div2" ><button type="submit" >Envoyer</button></div>
</form>
@stop

