<h1>LIST OF ORDER</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Order Id: </th>
            <th>Customer name:</th>
            <th>Order address:</th>
            <th>Customer email:</th>
            <th>Customer phone number:</th>
            <th>Created at: </th>
            <th>Status:</th>
            <th>Action: </th>
        </tr>
    <tbody>
        <?php foreach ($order as $item) : ?>
            <tr>
                <td><?= $item['order_id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['address'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['phone'] ?></td>
                <td><?= $item['created_at'] ?></td>
                <td><?= $item['status'] == 1 ? 'Active' : 'Not active' ?></td>
                <td>
                    <a href="?request=orderDetail&ID=<?= $item['order_id'] ?>">Order details</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </thead>
</table>