<?php



$nome = htmlspecialchars(trim($_POST['nome']));
$matricula = htmlspecialchars(trim($_POST['matricula']));
$email = htmlspecialchars(trim($_POST['email']));


$q1 = htmlspecialchars(trim($_POST['q1']));
$q2 = htmlspecialchars(trim($_POST['q2']));
$q3 = htmlspecialchars(trim($_POST['q3']));
$q4 = htmlspecialchars(trim($_POST['q4']));
$q5 = htmlspecialchars(trim($_POST['q5']));
$q6 = htmlspecialchars(trim($_POST['q6']));
$q7 = htmlspecialchars(trim($_POST['q7']));
$q8 = htmlspecialchars(trim($_POST['q8']));
$q9 = htmlspecialchars(trim($_POST['q9']));
$q10 = htmlspecialchars(trim($_POST['q10']));


$acertos = 0;
?>

    <?php
        include 'header.php'
    ?>
<?php
// Questão 1
if ($q1 == 'A') {
    echo "Questão 1: Correta";
    $acertos++;
} else {
    echo "Questão 1: Errada";
}

// Questão 2
if ($q2 == 'B') {
    echo "Questão 2: Correta";
    $acertos++;
} else {
    echo "Questão 2: Errada ";
}

// Questão 3
if ($q3 == 'C') {
    echo "Questão 3: Correta ✅ <br>";
    $acertos++;
} else {
    echo "Questão 3: Errada ❌ (o certo era C)<br>";
}

// Questão 4
if ($q4 == 'C') {
    echo "Questão 4: Correta ✅ <br>";
    $acertos++;
} else {
    echo "Questão 3: Errada ❌ (o certo era C)<br>";
}

// Questão 3
if ($q3 == 'C') {
    echo "Questão 3: Correta ✅<br>";
    $acertos++;
} else {
    echo "Questão 3: Errada ❌ (o certo era C)<br>";
}

// Questão 3
if ($q3 == 'C') {
    echo "Questão 3: Correta ✅<br>";
    $acertos++;
} else {
    echo "Questão 3: Errada ❌ (o certo era C)<br>";
}

// Questão 7
if ($q7 == 'C') {
    echo "Questão 7: Correta ✅<br> ";
    $acertos++;
} else {
    echo "Questão 7: Errada ❌<br>";
}

// Questão 8
if ($q8 == 'D') {
    echo "Questão 8: Correta ✅<br>";
    $acertos++;
} else {
    echo "Questão 8: Errada ❌<br>";
}

// Questão 9
if ($q9 == 'A') {
    echo "Questão 9: Correta ✅<br> ";
    $acertos++;
} else {
    echo "Questão 9: Errada ❌<br>";
}

// Questão 10
if ($q10 == 'B') {
    echo "Questão 9: Correta ✅<br>";
    $acertos++;
} else {
    echo "Questão 9: Errada ❌<br>";
}


echo "<h2> Nome: $nome <h2>";
echo "<h2> Matricula: $matricula <h2>";
echo "<h2> E-mail: $email <h2>";
echo "<h2>Você acertou $acertos de 10</h2>";

?>
    <?php
        include 'header.php'
    ?>