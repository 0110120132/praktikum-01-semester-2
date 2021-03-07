<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>

<body>
    <div class="bg-primary p-5">
        <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="" method="GET" class="mt-3">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="nama" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Nim</label>
                        <input type="text" name="nim" value="" class="form-control">
                    </div>

                    <label for="">Lesson</label>
                    <select class="form-select form-control" name="lesson" class="form-control">
                        <option selected>Choose Lesson :</option>
                        <option value="Web Programming">Web Programming</option>
                        <option value="Database">Database</option>
                        <option value="Statiska">Statiska</option>
                        <option value="PKN">PKN</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>

                    <div class="form-group">
                        <label for=""> UTS Value</label>
                        <input type="number" name="uts" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">UAS Value</label>
                        <input type="number" name="uas" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Assignment Value</label>
                        <input type="number" name="tugas" value="" class="form-control">
                    </div>
                    <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

                </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Result
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name : <?php echo $nama = $_GET['nama']; ?></li>
                        <li class="list-group-item">Nim : <?php echo $nim = $_GET['nim']; ?></li>
                        <li class="list-group-item">Lesson: <?php echo $lesson = $_GET['lesson']; ?></li>
                        <li class="list-group-item"> UTS Value : <?php echo $uts = $_GET['uts']; ?></li>
                        <li class="list-group-item">UAS Value: <?php echo $uas = $_GET['uas']; ?></li>
                        <li class="list-group-item">Assignment Value <?php echo $tugas = $_GET['tugas']; ?></li>
                        <li class="list-group-item">Value Total: <?php
                                                                    $value_total = ($uas + $uts + $tugas) / 3; ?>
                            <?php echo $value_total; ?></li>
                        <li class="list-group-item">Value in Alphabet: <?php
                                                                        $value_alphabet = ($value_total);
                                                                        if ($value_alphabet >= 85 && $value_alphabet <= 100) {
                                                                            echo $value_alphabet = "A";
                                                                        } elseif ($value_alphabet >= 70 && $value_alphabet <= 84) {
                                                                            echo $value_alphabet = "B";
                                                                        } elseif ($value_alphabet >= 55 && $value_alphabet <= 69) {
                                                                            echo $value_alphabet = "C";
                                                                        } elseif ($value_alphabet >= 40 && $value_alphabet <= 54) {
                                                                            echo $value_alphabet = "D";
                                                                        } elseif ($value_alphabet <= 40) {
                                                                            echo $value_alphabet = "E";
                                                                        }
                                                                        ?></li>


                    </ul>
                </div>

            </div>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Value
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">A : 85 - 100</li>
                        <li class="list-group-item">B : 70 - 84</li>
                        <li class="list-group-item">C : 55 - 69</li>
                        <li class="list-group-item">D : 40 - 54 </li>
                        <li class="list-group-item">E : Less than 40 </li>


                    </ul>
                </div>

            </div>

        </div>
</body>

</html>