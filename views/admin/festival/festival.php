<h1>LIST OF FESTIVAL</h1>
<section style="text-align: center;">
<a class="btn btn-success" href="?request=addFestival">Add Festival</a>
</section>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Festival Id: </th>
        <th>Festival Title: </th>
        <th>Festival status: </th>
        <th>Action: </th>
    </tr>
    <tbody>
        <?php foreach($festival as $item):?>
            <tr>
            <td><?=$item['fes_id']?></td>
            <td><?=$item['title']?></td>
            <td><?=$item['status']==1?'Active':'Not active'?></td>
            <td>
            <a href="?request=editFestival&id=<?=$item['fes_id']?>">Edit</a>  
            <a onclick="return confirm('Are you sure?')" href="?request=deleteFestival&id=<?=$item['fes_id']?>">Delete</a></td> 
            </tr>
        <?php endforeach;?>
    </tbody>
    </thead>
</table>