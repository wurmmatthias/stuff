<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Stuff Inventory Management</title>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />
	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit-icons.min.js"></script>
	<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
	<link href="src/css/print.css" rel="stylesheet">
</head>
<body>

	<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">Stuff</a>

        <ul class="uk-navbar-nav">
            <li>
                <a href="#" uk-toggle="target: #add-modal">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: plus"></span>
                    <b>New Item</b>
                </a>
            </li>
						<li>
							<a href="#" onclick="window.print();">
									<span class="uk-icon uk-margin-small-right" uk-icon="icon: print"></span>
									<b>Print List</b>
							</a>
						</li>
        </ul>
			</div>
        </nav>

		<div class="uk-container">

			<?php
			if (isset($_GET["s"])) {
				echo "<div class='uk-alert-success' uk-alert>
							    <a class='uk-alert-close' uk-close></a>
							    <p>Item succesfully added to your inventory.</p>
							</div>";
			}
			if (isset($_GET["e"])) {
				echo "<div class='uk-alert-primary' uk-alert>
									<a class='uk-alert-close' uk-close></a>
									<p>Item updated.</p>
							</div>";
			}
			?>

			<table class="uk-table uk-table-striped">
					<thead>
							<tr>
									<th>Item Name</th>
									<th>Quantity</th>
									<th>Position</th>
									<th>Action</th>
							</tr>
					</thead>
					<tbody>
						<?php

						$sql = "SELECT * FROM inventory";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
										echo "<tr>";
										echo "<td class='name_".$row["iid"]."'>" . $row["item_name"] . "</td>";
										echo "<td class='quant_".$row["iid"]."'>" . $row["item_quant"] . "</td>";
										echo "<td class='pos_".$row["iid"]."'>" . $row["item_position"] . "</td>";
										echo "<td class='action-bar'>";
										echo "<a id='".$row["iid"]."' href='#' class='uk-button uk-button-primary edit-btn'>Edit</a>";
										echo "<a href='delete.php?id=".$row["iid"]."' class='uk-button uk-button-danger'>Delete</a>";
										echo "</td>";
										echo "</tr>";
						    }
						} else {
						    echo "Bro, you got no stuff.<br> <a class='uk-button uk-button-primary uk-width-1-1' href='add.php?name=Macbook Air&quantity=12&position=Storage'>Generate example stuff.</a>";
						}
						$conn->close();
						?>
					</tbody>
			</table>

		</div>

<div id="add-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Add Item to Inventory</h2>
        <form method="get" action="add.php">
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="name" placeholder="Item Name">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="quantity" placeholder="Quantity">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="position" placeholder="Position">
            </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="submit">Add</button>
        </p>
				</form>
    </div>
</div>

<div id="edit-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Edit Item</h2>
        <form method="get" action="edit.php">
						<input type="text" value="" name="id" hidden>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="edit_name" placeholder="Item Name">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="edit_quantity" placeholder="Quantity">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" name="edit_position" placeholder="Position">
            </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-secondary" type="submit">Update Item</button>
        </p>
				</form>
    </div>
</div>

<script src="src/js/main.js"></script>

</body>
</html>
