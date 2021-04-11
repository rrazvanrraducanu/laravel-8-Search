<!DOCTYPE html>
<html>
    <head><title>Flowers</title></head>
<h1>Flowers data</h1>
    @if (count($flowers)==0)
    Nu sunt inregistrari in db!
    @else
<table>
    <tr>
    <th>Nume</th>
    <th>Marime</th>
    <th>Culoare</th>
    <th>Pret</th>
    <th>Actions</th>
    </tr>
    @foreach($flowers as $flower)
 <tr>
     <td><?php echo $flower->nume;?></td>
     <td><?php echo $flower->culoare;?></td>
     <td><?php echo $flower->marime;?></td>
     <td><?php echo $flower->pret;?></td>
 </tr>
 @endforeach
</table>
    @endif
 <?php echo link_to("/", 'Back')."<br/><br/>";?> </html>
