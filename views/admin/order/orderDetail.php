<h1>ORDER DETAILS</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
        <th>Book ID:</th>
            <th>Book name: </th>
            <th>Quantity:</th>
            <th>Price:</th>
            <th>Total price:</th>
            
        </tr>
    <tbody>
        <?php foreach ($orderDetail as $item) : ?>
            <tr>
                <td><?= $item['book_id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['quantity'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['quantity']*$item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </thead>
</table>
<section style="text-align: center;">
<a  onclick="return confirm('Are you sure?')" class="btn btn-success" href="?request=deleteOrder&ID=<?=$item['order_id']?>">Delete order</a>
</section>