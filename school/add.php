<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Add School <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Add School"/>
            </form>
        </div>
    </div>
</div>