<!-- <h1>welcome</h1>  -->

 <table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Score</th>
    </tr>
    <?php 
     foreach($data as $value) : ?>
     <?php if($value['role']==Role_JOUEUR): ?>
    <tr>
     
        <td> <?=$value['Nom']?> </td>
        <td><?= $value['Prenom'] ?></td>
        <td><?= $value['Score']?> </td>
    </tr>
    <?php endif ?>
    <?php endforeach ?>

</table> 