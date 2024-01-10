<!DOCTYPE html>
<html lang="en">
<?php
class Kalkulator {
    private $result;

    public function __construct() {
        $this->result = "";
    }

    public function evaluateExpression($expression) {
        if (preg_match('/[\/\*\+\-]/', $expression)) {
            // Mengevaluasi ekspresi matematika menggunakan eval()
            eval('$this->result = ' . $expression . ';');
        } else {
            $this->result = "";
        }
    }

    public function getResult() {
        return $this->result;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kalkulator = new Kalkulator();
    $kalkulator->evaluateExpression($_POST["media"]);
} else {
    $kalkulator = new Kalkulator();
}

$result = $kalkulator->getResult();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Kalkulator</title>
</head>

<body>
    <div class="calculator">
        <label class="fw-semibold">Kalkulator OOp PHP</label>
        <form action="" method="post">
            <input type="text" class="form-control mb-2" id="Output" name="media" value="<?php echo $result ?>" readonly>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" onclick="btn(7)">7</button>
                <button type="button" class="btn btn-primary" onclick="btn(8)">8</button>
                <button type="button" class="btn btn-primary" onclick="btn(9)">9</button>
                <button type="button" class="btn btn-warning" onclick="operator('/')">/</button>
                <button type="button" class="btn btn-danger" onclick="remove(2)">C</button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" onclick="btn(4)">4</button>
                <button type="button" class="btn btn-primary" onclick="btn(5)">5</button>
                <button type="button" class="btn btn-primary" onclick="btn(6)">6</button>
                <button type="button" class="btn btn-warning" onclick="operator('*')">*</button>
                <button type="button" class="btn btn-info" onclick="remove(1)"><i class="bi bi-x-lg"></i></button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" onclick="btn(1)">1</button>
                <button type="button" class="btn btn-primary" onclick="btn(2)">2</button>
                <button type="button" class="btn btn-primary" onclick="btn(3)">3</button>
                <button type="button" class="btn btn-warning" onclick="operator('-')">-</button>
                <button type="button" class="btn btn-info" onclick="persen()">%</button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" onclick="btn(0)">0</button>
                <button type="button" class="btn btn-primary" onclick="operator('.')">,</button>
                <button type="submit" class="btn btn-success" id="btns">=</button>
                <button type="button" class="btn btn-warning" onclick="operator('+')">+</button>
                <button type="button" class="btn btn-info" onclick="closeTab()"><i class="bi bi-box-arrow-right"></i></button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>