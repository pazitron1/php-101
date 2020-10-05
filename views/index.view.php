<?php require('partials/head.php'); ?>
<body>
    <ul>
        <?php foreach($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>
    </ul>
   <h1>Submit your name</h1>
   <form action="/names" method="POST">
       <input type="text" name="name">
       <button type="submit">Submit</button>
   </form>
<?php require('partials/footer.php') ?>
