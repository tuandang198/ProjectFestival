<h1>LIST OF FEEDBACK</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Feedback Id: </th>
            <th>Customer name:</th>
            <th>Customer email:</th>
            <th>Customer Comment:</th>
            <th>Created at: </th>
            <th>Action: </th>
        </tr>
    <tbody>
        <?php foreach ($feedback as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['comment'] ?></td>
                <td><?= $item['created_at'] ?></td>
                <td><a  onclick="return confirm('Are you sure?')" href="?request=deleteFeedback&ID=<?=$item['id']?>">Delete</a>
</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </thead>
</table>