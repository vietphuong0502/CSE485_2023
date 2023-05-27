<?php
include_once '../Controllers/courseController.php';
session_start();

$courseController = new CourseController();
$data = $courseController->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include_once "Components/header.php"; ?>
<div class="container">
    <h1 class="text-center m-3">Các môn học có sẵn</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        foreach ($data as $course) {
            ?>
            <div class="col">
                <div class="card shadow-sm">
                    <form action="">
                        <a class="text-decoration-none" href="attendance.php?id=<?php echo $course['id']; ?>">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../Resource/img/course.jpg" />
                            <div class="card-body">
                                <h3><?php echo $course['name']; ?></h3>
                                <p class="text-dark"><?php echo $course['description']; ?></p>
                            </div>
                        </a>
                    </form>

                </div>

            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>