<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">User List</h2>
<a href="index.php?entity=user&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add User</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">ID</th>
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td class="border p-2"><?php echo $user['id']; ?></td>
            <td class="border p-2"><?php echo $user['name']; ?></td>
            <td class="border p-2"><?php echo $user['email']; ?></td>
            <td class="border p-2">
                <a href="index.php?entity=user&action=edit&id=<?php echo $user['id']; ?>" class="text-blue-500">Edit</a>
                <a href="index.php?entity=user&action=delete&id=<?php echo $user['id']; ?>" class="text-red-500 ml-4" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>