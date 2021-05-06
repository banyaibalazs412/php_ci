<div class="container h-100 w-100">
    <div class="row h-75 w-100 align-content-center">
        <div class="col-2 offset-5  text-center">
            <?php
            echo form_open('movies/add_movie');
            ?>

            <div class="form-group">
                <?php echo
                    form_label('User_Id');

                   echo ' <br><select name="user_id" class="form-control">';
                   foreach($users as $user){
                        echo '<option value="'. $user->user_id . '">' . $user->username . '</option>';
                   }
                   echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <?php echo
                form_label('Name');
                echo
                form_input(['class'=>'form-control','name'=>'name','placeholder'=>'Enter Name'
                            ,'maxlength'=>'25', 'minlength'=>'5', 'required'=>true]);
                ?>
            </div>
            <div class="form-group">
                <?php echo
                form_label('Category');
                echo
                form_input(['class'=>'form-control','name'=>'category','placeholder'=>'Enter Category'
                            ,'maxlength'=>'25', 'minlength'=>'3', 'required'=>true]);
                ?>
            </div>
            <div class="form-group">
                <?php echo
                form_label('Rate');
                echo
                form_input(['class'=>'form-control','name'=>'rate','placeholder'=>'Enter Rate','type'=>'number'
                    , 'min'=>1, 'max'=>5,'required'=>true,]);
                ?>
            </div>

            <?php
            echo form_submit(['name'=>'submit', 'value'=>'Add Movie', 'class'=>'btn btn-dark','style'=>'margin-top:20px']);
            ?>

            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>

