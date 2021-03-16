<h1>Update Book</h1>
<section><?php if(isset($alert)) echo $alert;?></section>
<section>
    <form action="" method="post" enctype="multipart/form-data">
        <section>
            <label for="">Book Title: </label>
            <input type="text" name="name" required value="<?=$book['name']?>">
        </section>
        <section>
            <label for="">Religion: </label>
            <select name="religionID" id="">
                <option value="" hidden>Choose one brand</option>
                <?php foreach($religion as $item):?>
                    <option value="<?=$item['id']?>" <?=$item['id']==$book['religion']?'selected':''?>><?=$item['religion_name']?></option>
                <?php endforeach;?>
            </select>
        </section>
        <section>
            <label for="">Author: </label>
            <input type="text" name="author" value="<?=$book['author']?>" required>
        </section>
        <section>
            <label for="">Book Price: </label>
            <input type="number" name="price" value="<?=$book['price']?>" required>$
        </section>
        <section>
            <label for="">Book Image: <img src="../images/books/<?= $book['img'] ?>" alt="" style="width: 25%;"></label>
            
        </section>
        <section>
            <label for="">Update Image: </label>
            <input type="file" name="image">
        </section>
        <section>
                    <label for="">Delete image</label>
                    <input type="checkbox" name="delImage" value=1>
        </section>
        <section>
               <label for="">Description</label>
               <textarea name="description" id="description"><?=$book['description']?> </textarea>     
               <script>CKEDITOR.replace("description");</script>
        </section>
        <section>
            <label for="">Book Status: </label>
            <input type="radio" name="status" value="1" <?=$book['status']==1?'checked':''?> id="">
            Active <input type="radio" name="status" id="" value="0" <?=$book['status']==0?'checked':''?>> Not active
        </section> 
        <section>
            <input type="submit" name="edit" value="Update">
        </section>
    </form>
</section>