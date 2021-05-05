<div class="container h-100 w-100">
    <div class="row h-50  w-100 align-content-center">
        <div class="col-8 offset-2  text-center">
            <table class="table table-dark table-striped border-light border-4 table_wrap">
                <thead>
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th></th>
                <th></th>
                </thead>
                <tbody>
                <?php
                    if(count($result)>0) {
                        foreach ($result as $user) {
                            echo '<tr>';
                            echo '<td>' . $user->id . '</td>';
                            echo '<td>' . $user->email . '</td>';
                            echo '<td>' . $user->username . '</td>';
                            echo '<td>' . '<a href="' . base_url() . 'users/delete_user/';
                            echo $user->id . '">Delete</a>' . '</td>';
                            echo '<td>' . '<a href="' . base_url() . 'users/update_view/';
                            echo $user->id . '">Update</a>' . '</td>';
                        }
                    }else{
                        echo '<tr><td colspan="7">No element in the Database</td></tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-1">
            <a class="btn btn-dark" href="<?php echo base_url();?>users/add_view" role="button">Add+</a>
        </div>
    </div>
</div>