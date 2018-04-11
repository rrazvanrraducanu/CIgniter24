<h1>
<?php echo $title; ?>
</h1>
<?php
echo form_open('LoginController/check');
#text control
$data = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '30',
    'placeholder'=>'username',
       ];
#label
echo form_label('Username ', 'text1');
echo form_input($data);
echo "<br><br>";
#password control
$pass = ['name'          => 'pass1',
        'id'            => 'pass1',
        'maxlength'     => '100',
        'size'          => '30',
    'placeholder'=>'password',
       ];
echo form_label('Password ', 'pass1');
echo form_password($pass);
echo "<br><br>";
#submit button
echo form_submit('submit', 'Submit!');
echo form_close();
