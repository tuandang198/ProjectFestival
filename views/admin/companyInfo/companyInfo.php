<h1>Company Info</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tbody>
    <form action="" method="post">
            <section>
                <label for="">About us</label>
                <textarea name="aboutus" id="aboutus"><?= $result['aboutus'] ?></textarea>
                <script>
                    CKEDITOR.replace("aboutus");
                </script>
            </section>

            <section>
                <label for="">Address: </label>
                <input type="text" name="address" value="<?= $result['address'] ?>">
            </section>

            <section>
                <label for="">Phone: </label>
                <input type="text" name="phone" value="<?= $result['phonenumber'] ?>">
            </section>

            <section>
                <label for="">Email: </label>
                <input type="text" name="email" value="<?= $result['email'] ?>">
            </section>
            <section>
                <label for="">Work hour: </label>
                <input type="text" name="workhour" value="<?= $result['workinghour'] ?>">
            </section>
        <section style="text-align: center;">
            <input type="submit" value="Update" name="update">
        </section>
    </form>
    </tbody>
    
    </thead>
</table>