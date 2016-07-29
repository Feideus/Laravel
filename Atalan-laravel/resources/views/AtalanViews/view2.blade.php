@extends('Master')

@section('Head')
<link rel="stylesheet" href="{{ URL::asset('Css/view2.css') }}"/>
@stop

@section('Header')

<nav>
<button id="addUserButton" onclick="window.location.href='/addUser'" >Add a User</button><br/>
</nav>
@stop

@section('Content')
<table>
<tr id="firstTr">
  <td class="tdtitles"><p>Name</p></td>
  <td class="tdtitles"><p>Family name</p></td>
  <td class="tdtitles"><p>Email</p></td>
  <td class="tdtitles"><p>Password</p></td>
  <td class="tdtitles"><p>Type</p></td>
  <td class="tdtitles"><p>id</p></td>
</tr>
<?php $idvar = 1;?>
@foreach($data as $info)
  <tr class="trgrid">
@foreach($info as $info2)
  <td class="tdgrid"> {{ $info2 }} </td>
 
@endforeach
@if($info['id'])
   <td class="tdtitles" id="modiftd"><button id=<?php echo $idvar;?> class="boutonmodif" onclick=<?php echo "window.location.href='/editUser/".$info['id']."'"; $idvar= $idvar+1;?>>Modify</button></td>
							    <td class="tdtitles" id="deletetd"><button id=<?php echo $idvar;?> class="boutondelete" onclick=<?php echo "window.location.href='/deleteUser/".$info['id']."'"; $idvar= $idvar+1;?>>Delete</button></td>
    
@endif
  </tr>
@endforeach
</table>

@stop
							   @section('Footer')

 <div id="footer"><p>Created by Erwan Ulrich, better known as Feideus</p></div>

@stop
