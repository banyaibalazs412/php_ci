<div class="container h-100 w-100">
    <div class="row h-75 w-100 align-content-center">
        <div class="col-2 offset-5  text-center">

            <?php
                echo form_open('users/update_user');
            ?>

            <?php
                echo form_input(['name'=>'id', 'hidden'=>true,'value'=>$result->id]);
            ?>

            <div class="form-group">
                <?php
                    echo form_label('Email');
                    echo form_input(['class'=>'form-control','name'=>'email', 'type'=>'email', 'maxlength'=>'25',
                        'minlength'=>'5', 'required'=>true,
                        'placeholder'=>'Enter Email', 'value'=>$result->email]);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Username');
                    echo form_input(['class'=>'form-control','name'=>'username','maxlength'=>'25',
                        'minlength'=>'5', 'required'=>true,
                        'placeholder'=>'Enter Username', 'value'=>$result->username]);
                ?>
            </div>

            <?php
                echo form_submit(['name'=>'submit', 'value'=>'Update',
                    'class'=>'btn btn-dark','style'=>'margin-top:20px']);
            ?>

            <?php
                echo form_close();
            ?>

        </div>
    </div>
</div>