<!-- <h1>welcome</h1>  -->

 <table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Score</th>
    </tr>
    <?php foreach($data as $value) : ?>
    <tr>
     
        <td> $value['nom'] </td>
        <td> $value['prenom'] </td>
        <td> $value['score'] </td>
    </tr>
    <?php endforeach ?>

</table> 