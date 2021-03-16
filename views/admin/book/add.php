<h1>Adding Book</h1>
<section><?php if(isset($alert)) echo $alert;?></section>
<section>
    <form action="" method="post" enctype="multipart/form-data">
        <section>
            <label for="">Book Title: </label>
            <input type="text" name="name" required>
        </section>
        <section>
            <label for="">Religion: </label>
            <select name="religionID" id="">
                <option value="" hidden>Choose one Religion</option>
                <?php foreach($religion as $item):?>
                    <option value="<?=$item['id']?>"><?=$item['religion_name']?></option>
                <?php endforeach;?>
            </select>
        </section>
        <section>
            <label for="">Author: </label>
            <input type="text" name="author" required>
        </section>
        <section>
            <label for="">Book Price: </label>
            <input type="number" name="price" required>$
        </section>
        <section>
            <label for="">Book Image: </label>
            <input type="file" name="image" required>
        </section>
        <section>
               <label for="">Description</label>
               <textarea name="description" id="description"></textarea>     
               <script>CKEDITOR.replace("description");</script>
        </section>
        <section>
            <label for="">Book Status: </label>
            <input type="radio" name="status" value="1" checked id="">
            Active <input type="radio" name="status" id="" value="0"> Not active
        </section>
        <section>
            <input type="submit" name="add" value="Add">
        </section>
    </form>
</section>