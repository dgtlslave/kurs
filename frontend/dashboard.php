<?php
session_start();
echo "work";

echo "<pre>";
print_r($_POST);
print_r($_SESSION);
echo "</pre>";

?>

<div style="background-color: grey; margin-top: auto; height: 5%">
    <p>
        <button style="margin: 0.5%">Sign out</button>
        <button>Update</button>
        <button>Delete</button>
        ||
        <button>Sign out</button>
    </p>
</div>
<hr>
<table>
    <tr id="table">
        <th width="100">Date |</th>
        <th width="100">Region |</th>
        <th width="100">Application type |</th>
        <th width="100">Description |</th>
        <th width="100">Author |</th>
        <th width="100">Previous approval |</th>
        <th width="100">Lead time |</th>
        <th width="100">Status</th>
        <th width="100">Actions</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
