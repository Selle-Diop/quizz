<!-- <h1>welcome</h1>  -->

 <table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Score</th>
    </tr>
    <?php 
     foreach($data as $value) : ?>
    <tr>
     
        <td> <?=$value['Nom']?> </td>
        <td><?= $value['Prenom'] ?></td>
        <td><?= $value['Score']?> </td>
    </tr>
    <?php endforeach ?>

</table> 