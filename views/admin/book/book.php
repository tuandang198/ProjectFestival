<h1>LIST OF BOOK</h1>
<section style="text-align: center;">
<a class="btn btn-success" href="?request=addBook">Add Book</a>
</section>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Book Id: </th>
        <th>Book Image: </th>
        <th>Book Name: </th>
        <th>Author: </th>
        <th>Book status: </th>
        <th>Action: </th>
    </tr>
    <tbody>
        <?php foreach($book as $item):?>
            <tr>
            <td><?=$item['book_id']?></td>
            <td><img src="../images/books/<?= $item['img'] ?>" alt="" style="width: 25%;"></td>
            <td><?=$item['name']?></td>
            <td><?=$item['author']?></td>
            <td><?=$item['status']==1?'Active':'Not active'?></td>
            <td>
            <a href="?request=editBook&ID=<?=$item['book_id']?>">Edit</a> 
            <a onclick="return confirm('Are you sure?')" href="?request=deleteBook&ID=<?=$item['book_id']?>">Delete</a></td> 
            </tr>
        <?php endforeach;?>
    </tbody>
    </thead>
</table>