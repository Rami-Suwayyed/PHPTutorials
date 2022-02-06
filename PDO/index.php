<?php require_once('config.php'); ?>
<?php $page_title = 'Add your idea'; ?>
<?php $page_heading = 'Share your idea with us'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <style>
    table,
    th,
    td {
        border: 1px solid;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <h1> <?php echo $page_heading; ?> </h1>

    <?php if(isset($_POST['submit'])): ?>

    <?php if(isset($_POST['title'])): ?>
    <?php $idea_title = $_POST['title']; ?>
    <?php endif; ?>

    <?php if(isset($_POST['text'])): ?>
    <?php $idea_text = $_POST['text']; ?>
    <?php endif; ?>

    <?php $new_idea = array('title' => $idea_title, 'text'=>$idea_text); ?>
    <?php $keys_string = implode(', ', array_keys($new_idea)); ?>
    <?php $keys_placeholder = ':'.implode(', :', array_keys($new_idea)); ?>

    <?php echo $keys_string; ?>
    <?php echo $keys_placeholder; ?>

    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>

    <?php $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
'ideastable',
$keys_string,
$keys_placeholder,

); ?>

    <?php $statement =  $connection->prepare($sql); ?>
    <?php $statement-> execute($new_idea);   ?>


    <div style="background:green;color:white; padding:10px;">
        <h3> Your idea was added succesfully:</h3>
        <p>Your idea title: <?php echo $idea_title; ?> </p>
        <p>Your idea text: <?php echo $idea_text; ?> </p>
    </div>
    <hr>
    <hr>
    <br>

    <?php endif; ?>
    <ul>
        <li><a href="http://localhost/PHPTutorials/">Back</a> </li>
    </ul>
    <form action="" method="POST">
        <label for="title">Idea Title</label>
        <input type="text" name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];} ?>">
        <br><br>
        <label for="text"> Idea Text</label>
        <textarea name="text" rows="8" cols="80"><?php if(isset($_POST['text'])){echo $_POST['text'];} ?></textarea>
        <br><br>
        <input type="submit" name="submit" value="Save your idea">
    </form>

    <hr>
    <hr><br>

    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>
    <?php  $sql = "SELECT * FROM ideastable"; ?>
    <?php $statement =  $connection->prepare($sql); ?>
    <?php $statement-> execute();   ?>
    <?php $results =  $statement-> fetchAll(); ?>


    <table style="width:100%;background:#eee;text-align:center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($results as $row):  ?>
        <tr>
            <th><a href="update.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></th>
            <th><?php echo $row['title']; ?></th>
            <th><?php echo $row['text']; ?></th>
            <th><a href="delete.php?id=<?php echo $row['id']; ?>" style="color:red;">X</a></th>
        </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>