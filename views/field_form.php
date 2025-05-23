<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($field) ? 'Edit Field' : 'Add Field'; ?></h2>
<form action="index.php?entity=field&action=<?php echo isset($field) ? 'update&id=' . $field['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo isset($field) ? $field['name'] : ''; ?>" class="border rounded p-2 w-full" required>
    </div>
    <div>
        <label class="block">Price per Hour:</label>
        <input type="number" name="price_per_hour" class="border rounded p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>