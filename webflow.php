<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-transform: uppercase;
            font-family: "monument";
        }
        html{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            
        }

        form{
            display: flex;
            flex-direction: column;
        }
        input{
            padding: 10px 5px;
            margin: 10px 0;
        }
        textarea{
            padding: 10px 5px;
        }
        button{
            padding: 10px 5px;
            margin-top: 20px;

        }
    </style>
</head>
<body>
    <h3>CONTACT FORM</h3>
    <form class="contact" action="contact.php" method="post">
        <input required type="text" name="name" placeholder="name">
        <input required type="text" name="email" placeholder="email">
        <textarea required name="message" placeholder="message" rows="10" id="" ></textarea>
        <button type="submit" name="submit" >SUBMIT</button>
    </form>
</body>
</html>