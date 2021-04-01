<h1>Company Info</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tbody>
    <form action="" method="post">
            <section>
                <h5 for="">About us</h5>
                <textarea name="aboutus" id="aboutus"><?= $result['aboutus'] ?></textarea>
                <script>
                    CKEDITOR.replace("aboutus");
                </script>
            </section>

            <section>
                <h5 for="">Address: </h5>
                <input type="text" name="address" value="<?= $result['address'] ?>">
            </section>

            <section>
                <h5 for="">Phone: </h5>
                <input type="text" name="phone" value="<?= $result['phonenumber'] ?>">
            </section>

            <section>
                <h5 for="">Email: </h5>
                <input type="text" name="email" value="<?= $result['email'] ?>">
            </section>
            <section>
                <h5 for="">Work hour: </h5>
                <input type="text" name="workhour" value="<?= $result['workinghour'] ?>">
            </section>
            <div>
                <h3>Google map</h3>
                <h5>Latitude</h5>
                <input type="text" name="latitude" value="<?= $result['latitude'] ?>">
                <h5>Longtitude</h5>
                <input type="text" name="longtitude" value="<?= $result['longtitude'] ?>">
                <h5>API</h5>
                <input type="text" name="api" value="<?= $result['googlemapsAPI'] ?>">
            </div>

        <section style="text-align: center;">
            <input type="submit" value="Update" name="update">
        </section>
    </form>
    </tbody>
    
    </thead>
</table>