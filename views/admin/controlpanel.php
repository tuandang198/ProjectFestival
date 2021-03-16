<table class="table table-bordered" width="100%" cell-spacing="0">
    <tbody>
        <tr>
            
        <td width="25%">Hello <?=$_SESSION['adminAccount']?> <a href="?request=signout">Sign out</a></td>
        
        <td>DB Mangement</td>
        </tr>
        <tr>
            <td>
            <br>
                <section><a href="?request=religion">>> Religions Management</a></section>
                <br>
                <section><a href="?request=festival">>> Festivals Management</a></section>
                <br>
                <section><a href="?request=book">>> Books Management</a></section>
                <br>
                <section><a href="?request=order">>> Orders Management</a></section>
                <br>
                <section><a href="?request=companyInfo">>> Company Information</a></section>
                <br>
            </td>
            <td><?php include "../controllers/admin_controller.php" ?></td>
        </tr>
    </tbody>
</table>