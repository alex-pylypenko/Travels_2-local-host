<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    
    <?php
    $title = "Feedback";
    require_once "blocks/head.php";   
    ?>
    
    <script>
        $(document).ready (function () {
            $("#done").click (function () {
                $('#messageShow').hide ();
                var name = $("#name").val (); // в переменную передаем значение поля "name"
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = "";
                if (name.length < 3) {
                    fail = "Name is too short. Must be more than 3 characters";
                } 
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) { // проверка на наличие '@' или '.'
                    fail = "Enter correct e-mail";   
                }
                else if (subject.length < 5) {
                    fail = "Topic is too short. Must be more than 5 characters";   
                }
                else if (message.length < 10) {
                    fail = "Message is too short. Must be more than 10 characters";   
                }
                if (fail != "") {
                    $('#messageShow').html (fail + "<div class='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
                $.ajax ({
                    url: 'ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    success: function (data) {
                        $('#messageShow').html (data + "<div class='clear'><br></div>");
                        $('#messageShow').show ();
                    }
                });
            });
        });
    </script>
    
</head>

<body>
    
    <!-- HEADER -->
    
    <?php require_once "blocks/header.php"; ?>
    
    <!-- COLUMNS -->
    
    <div id="wrapper">
        <div id="leftCol">
            <input type="text" placeholder="Name" id="name" name="name"><br>
            <input type="text" placeholder="E-mail" id="email" name="email"><br>
            <input type="text" placeholder="Topic of message" id="subject" name="subject"><br>
            <textarea name="message" id="message" ></textarea><br>
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="send">
        </div>
        
        <!-- RIGHT COLUMN -->
        
        <?php require_once "blocks/rightCol.php"; ?>
    </div>
    
    <!-- FOOTER -->
    
    <?php require_once "blocks/footer.php"; ?>
</body>

</html>