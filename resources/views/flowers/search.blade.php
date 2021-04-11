<!DOCTYPE html>
<html>
<head><title>Search flowers</title></head>
<body> 
<?php
echo Form::open(array('action' =>'SearchController@search', 'method' => 'POST')) ;
echo Form::label('search', 'Search ');
echo Form::text('search');
echo"<br/><br/>";
echo Form::submit('Search');
echo Form::close();
?>
</body>
</html>
