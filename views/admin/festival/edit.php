<h1>Update Festival</h1>
<section><?php if(isset($alert)) echo $alert;?></section>
<section>
    <form action="" method="post">
        <section>
            <label for="">Festival Title: </label>
            <input type="text" name="title" value="<?=$festival['title']?>">
        </section>
        <section>
            <label for="">Religion: </label>
            <select name="religionID" id="">
                <option value="" hidden>Choose one Religion</option>
                <?php foreach($religion as $item):?>
                    <option value="<?=$item['id']?>" <?=$item['id']==$festival['religion_id']?'selected':''?>><?=$item['religion_name']?></option>
                <?php endforeach;?>
            </select>
        </section>
        <section>
                    <label for="">Title image URL:</label>
                    <input type="text" name="imageTitle" value="<?=$festival['title_image']?>">
        </section>
        <section>
            <label for="">Author: </label>
            <input type="text" name="author" value="<?=$festival['author']?>">
        </section>
        <section>
               <label for="">Description</label>
               <textarea name="description" id="description" ><?=$festival['description']?></textarea>     
               <script>CKEDITOR.replace("description");</script>
        </section>
        <section>
               <label for="">Article</label>
               <textarea name="article" id="article"><?=$festival['article']?></textarea>     
               <script>CKEDITOR.replace("article");</script>
        </section>
        <section>
            <label for="">Festival Status: </label>
            <input type="radio" name="status" value="1" <?=$festival['status']==1?'checked':''?> id="">
            Active <input type="radio" name="status" id="" value="0" <?=$festival['status']==0?'checked':''?>> Not active
        </section>
        <section>
            <input type="submit" name="update" value="Update">
        </section>
    </form>
</section>