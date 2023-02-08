<?php
namespace Php8user;

use Php8user\DataSource;
require_once __DIR__ . '/lib/Question.php';
$question = new Question();
$result = $question->getAllProducts();
?>
<html>

<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/js/product.js"></script>
</head>

<body>
    <div class="container">
        <div class="container pt-5">
            <h2 class="text-center heading py-3">Bootstrap 5 Pagination</h2>
            <table class="table table-bordered" id="table">
                <tr>
                    <th>SL.No</th>
                    <th>Product Name</th>
                    <th class="text-end">Price</th>
                    <th>Model</th>
                </tr>
                <?php
        $questions = $result;
        if (is_array($questions)) {
            for ($i = 0; $i < count($questions) - 1; $i ++) {
                ?>
                <tr>
                    <td><?php echo $questions[$i]["id"];?></td>
                    <td><?php echo $questions[$i]["product_name"];?></td>
                    <td class="text-end"><?php echo $questions[$i]["price"];?></td>
                    <td><?php echo $questions[$i]["model"];?></td>
                </tr>
                <?php }}?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3 text-left">
                    <select class="form-select d-inline-block" name="navyOp" id="select"
                        onchange="change_url(this.value);">
                        <option value="">Bootstrap Pagination Style</option>
                        <option value="prev-next-link" <?php
                            if (! empty($_GET['type']) && $_GET['type'] == "prev-next-link") {
                                echo "selected";
                            }
                            ?>>With previous next</option>
                        <option value="number-link" <?php
                            if (! empty($_GET['type']) && $_GET['type'] == "number-link") {
                                echo "selected";
                            }
                            ?>>With numbers</option>
                    </select>
                </div>
                <div class="col-md-9 text-right">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination float-end " id="previous-next">
                            <?php echo $result["perpage"];?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>

</html>