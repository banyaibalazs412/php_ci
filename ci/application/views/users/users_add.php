<div class="container h-100 w-100">
    <div class="row h-75 w-100 align-content-center">
        <div class="col-2 offset-5  text-center">

            <?php
            echo form_open('users/add_user');
            ?>

            <div class="form-group">
                <?php
                    echo form_label('Email');
                    echo form_input(['class'=>'form-control','name'=>'email', 'maxlength'=>'25',
                        'minlength'=>'5', 'required'=>true,
                        'placeholder'=>'Enter Email','type'=>'email']);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Username');
                    echo form_input(['class'=>'form-control','name'=>'username', 'maxlength'=>'25',
                        'minlength'=>'5', 'required'=>true,
                        'placeholder'=>'Enter Username']);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Password');
                    echo form_password(['class'=>'form-control','name'=>'password', 'maxlength'=>'25',
                        'minlength'=>'5', 'required'=>true,
                        'placeholder'=>'Enter Password']);
                ?>
            </div>

            <?php
                echo form_submit(['name'=>'submit', 'value'=>'Add User',
                    'class'=>'btn btn-dark','style'=>'margin-top:20px']);
            ?>

            <?php
                echo form_close();
            ?>
        </div>
    </div>
</div>