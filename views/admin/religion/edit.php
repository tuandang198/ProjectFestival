<h1>Edit Religion</h1>
<section><?php if(isset($alert)) echo $alert;?></section>
<section>
    <form action="" method="post">
        <section>
            <label for="">Religion Name: </label>
            <input type="text" name="name" value="<?=$religion['religion_name']?>">
        </section>
        <section>
            <label for="">Religion Status: </label>
            <input type="radio" name="status" value="1" <?=$religion['status']==1?'checked':''?> id="">
            Active <input type="radio" name="status" id="" value="0" <?=$religion['status']==0?'checked':''?>> Not active
        </section> 
        <section>
            <input type="submit" name="update" value="update">
        </section>
    </form>
</section>
