<div class="container h-100 w-100">
    <div class="row h-50  w-100 align-content-center">
        <div class="col-8 offset-2  text-center">
            <table class="table table-dark table-striped border-light border-4 table_wrap">
                <thead>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Rate</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    if(count($result)>0) {
                        foreach ($result as $movie) {
                            echo '<tr>';
                            echo '<td>' . $movie->id . '</td>';
                            echo '<td>' . $movie->username . '</td>';
                            echo '<td>' . $movie->name . '</td>';
                            echo '<td>' . $movie->category . '</td>';
                            echo '<td>' . $movie->rate . '</td>';
                            echo '<td>' . '<a href="' . base_url() . 'movies/delete_movie/';
                            echo $movie->id . '">Delete</a>' . '</td>';
                            echo '<td>' . '<a href="' . base_url() . 'movies/update_view/';
                            echo $movie->id . '">Update</a>' . '</td>';
                        }
                    }else{
                        echo '<tr><td colspan="7">No element in the Database</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-1">
            <a class="btn btn-dark" href="<?php echo base_url();?>movies/add_view" role="button">Add+</a>
        </div>
    </div>
</div>