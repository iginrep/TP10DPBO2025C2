<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Field List</h2>
<a href="index.php?entity=field&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Field</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">ID</th>
        <th class="border p-2">Name</th>
        <th class="border p-2">Price per Hour</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($fields as $field): ?>
        <tr>
            <td class="border p-2"><?php echo $field['id']; ?></td>
            <td class="border p-2"><?php echo $field['name']; ?></td>
            <td class="border p-2"><?php echo $field['price_per_hour']; ?></td>
            <td class="border p-2">
                <a href="index.php?entity=field&action=edit&id=<?php echo $field['id']; ?>" class="text-blue-500">Edit</a>
                <a href="index.php?entity=field&action=delete&id=<?php echo $field['id']; ?>" class="text-red-500 ml-4" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>