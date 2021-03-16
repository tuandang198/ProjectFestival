<h1>Adding Religion</h1>
<section><?php if(isset($alert)) echo $alert;?></section>
<section>
    <form action="" method="post">
        <section>
            <label for="">Religion Name: </label>
            <input type="text" name="name" required>
        </section>
        <section>
            <label for="">Religion Status: </label>
            <input type="radio" name="status" value="1" checked id="">
            Active <input type="radio" name="status" id="" value="0"> Not active
        </section>
        <section>
            <input type="submit" name="add" value="Add">
        </section>
    </form>
</section>