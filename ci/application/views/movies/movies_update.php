<div class="container h-100 w-100">
    <div class="row h-75 w-100 align-content-center">
        <div class="col-2 offset-5  text-center">

            <?php
                echo form_open('movies/update_movie');
                echo form_input(['name'=>'id', 'hidden'=>true,'value'=>$result->id]);
            ?>
            <div class="form-group">
                <?php
                    echo form_label('User_Id') .
                    form_input(['class'=>'form-control','name'=>'user_id',
                        'disabled'=>true,'value'=>$result->user_id]);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Name');
                    echo form_input(['class'=>'form-control','name'=>'name' ,'maxlength'=>'25',
                                        'minlength'=>'5', 'required'=>true ,'placeholder'=>'Enter Name',
                                        'value'=>$result->name]);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Category');
                    echo form_input(['class'=>'form-control','name'=>'category', 'maxlength'=>'25',
                                        'minlength'=>'3', 'required'=>true, 'placeholder'=>'Enter Category',
                                        'value'=>$result->category]);
                ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Rate');
                    echo form_input(['class'=>'form-control','name'=>'rate',
                        'placeholder'=>'Enter Rate', 'value'=>$result->rate
                        ,'type'=>'number', 'min'=>1, 'max'=>5, 'required'=>true]);
                ?>
            </div>
            <?php
                echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-dark','style'=>'margin-top:20px']);
                echo form_close();
            ?>
        </div>
    </div>
</div>