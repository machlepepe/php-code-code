<div><label for="SupplierID">Supplier: </label>

<select id="SupplierID" name="SupplierID"> 

    <?php foreach($supplier->getSuppliers() as $supplier): ?>

        <option value="<?=$supplier['SupplierID']?>"> <?=$supplier['SupplierName']?></option>

    <?php endforeach ?> 

</select>
<div>
<label for="CategoryID">Category: </label>

<select id="CategoryID" name="CategoryID">

    <?php foreach($category->getCategories() as $category): ?>

        <option value="<?=$category['CategoryID']?>"> <?=$category['CategoryName']?></option>

    <?php endforeach ?>

</select>
