<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />
	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit-icons.min.js"></script>
</head>
<body>


	<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">Stuff</a>

        <ul class="uk-navbar-nav">
            <li>
                <a href="#" uk-toggle="target: #add-modal">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: plus"></span>
                    <b>New item</b>
                </a>
            </li>
        </ul>
        </nav>

        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div></div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
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
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="uk-button uk-button-primary">Edit</button>
                        <button class="uk-button uk-button-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="uk-button uk-button-primary">Edit</button>
                        <button class="uk-button uk-button-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="uk-button uk-button-primary">Edit</button>
                        <button class="uk-button uk-button-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="uk-button uk-button-primary">Edit</button>
                        <button class="uk-button uk-button-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="uk-button uk-button-primary">Edit</button>
                        <button class="uk-button uk-button-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div>
        <div></div>
    </div>
</div>
</div>

<!-- This is the modal -->
<div id="add-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Add Item to Inventory</h2>
        <form>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" placeholder="Item Name">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" placeholder="Quantity">
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-form-width-large" type="text" placeholder="Position">
            </div>
        </form>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Add</button>
        </p>
    </div>
</div>


</body>
</html>