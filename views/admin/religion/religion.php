<h1>LIST OF RELIGION</h1>
<section style="text-align: center;">
<a class="btn btn-success" href="?request=addreligion">Add Religion</a>
</section>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Religion Id: </th>
        <th>Religion Name: </th>
        <th>Religion status: </th>
        <th>Action: </th>
    </tr>
    <tbody>
        <?php foreach($religions as $item):?>
            <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['religion_name']?></td>
            <td><?=$item['status']==1?'Active':'Not active'?></td>
            <td>
            <a href="?request=editReligion&id=<?=$item['id']?>">Edit</a> 
            <?php $id=$item['id']; if(!getFesbyRelID($id)):?> 
            <a onclick="return confirm('Are you sure?')" href="?request=deleteReligion&id=<?=$item['id']?>">Delete</a></td> 
            <?php endif;?>
            </tr>
        <?php endforeach;?>
    </tbody>
    </thead>
</table>