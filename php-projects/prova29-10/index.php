<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'header.php'
    ?>

    <div id="container-prova">
        <h1>Avaliação Acadêmica</h1>
        
        <!-- Formulário da Prova -->
        <form action="processar.php" method="post">
            
            <!-- Dados do Aluno -->
            <h2>Dados do Aluno</h2>
            <div class="campo-dados">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <br>
            <div class="campo-dados">
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>
            <br>
            <div class="campo-dados">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <hr style="margin: 30px 0;">
            <h2>Questões (Marque a alternativa correta)</h2>

            <!-- Questão 1 (Gabarito: A) -->
            <fieldset>
                <legend><strong>1.</strong> Qual tag HTML é usada para criar uma quebra de linha?</legend>
                <label><input type="radio" name="q1" value="A" required> A) &lt;br&gt;</label><br>
                <label><input type="radio" name="q1" value="B"> B) &lt;lb&gt;</label><br>
                <label><input type="radio" name="q1" value="C"> C) &lt;break&gt;</label><br>
                <label><input type="radio" name="q1" value="D"> D) &lt;p&gt;</label>
            </fieldset>

            <!-- Questão 2 (Gabarito: B) -->
            <fieldset>
                <legend><strong>2.</strong> Qual estrutura do CSS altera a cor do texto de um elemento?</legend>
                <label><input type="radio" name="q2" value="A" required> A) text-color</label><br>
                <label><input type="radio" name="q2" value="B"> B) color</label><br>
                <label><input type="radio" name="q2" value="C"> C) background-color</label><br>
                <label><input type="radio" name="q2" value="D"> D) font-style</label>
            </fieldset>

            <!-- Questão 3 (Gabarito: C) -->
            <fieldset>
                <legend><strong>3.</strong> Quanto é 5 + 5 * 2?</legend>
                <label><input type="radio" name="q3" value="A" required> A) 20</label><br>
                <label><input type="radio" name="q3" value="B"> B) 30</label><br>
                <label><input type="radio" name="q3" value="C"> C) 15</label><br>
                <label><input type="radio" name="q3" value="D"> D) 25</label>
            </fieldset>

            <!-- Questão 4 (Gabarito: D) -->
            <fieldset>
                <legend><strong>4.</strong> Qual palavra-chave no JavaScript declara uma variável que não pode ser reatribuída?</legend>
                <label><input type="radio" name="q4" value="A" required> A) var</label><br>
                <label><input type="radio" name="q4" value="B"> B) let</label><br>
                <label><input type="radio" name="q4" value="C"> C) static</label><br>
                <label><input type="radio" name="q4" value="D"> D) const</label>
            </fieldset>

            <!-- Questão 5 (Gabarito: A) -->
            <fieldset>
                <legend><strong>5.</strong> O que significa a sigla WWW?</legend>
                <label><input type="radio" name="q5" value="A" required> A) World Wide Web</label><br>
                <label><input type="radio" name="q5" value="B"> B) Web Wide World</label><br>
                <label><input type="radio" name="q5" value="C"> C) World Wide Windows</label><br>
                <label><input type="radio" name="q5" value="D"> D) World Web Wide</label>
            </fieldset>

            <!-- Questão 6 (Gabarito: B) -->
            <fieldset>
                <legend><strong>6.</strong> Qual o planeta mais próximo do Sol?</legend>
                <label><input type="radio" name="q6" value="A" required> A) Vênus</label><br>
                <label><input type="radio" name="q6" value="B"> B) Mercúrio</label><br>
                <label><input type="radio" name="q6" value="C"> C) Terra</label><br>
                <label><input type="radio" name="q6" value="D"> D) Marte</label>
            </fieldset>

            <!-- Questão 7 (Gabarito: C) -->
            <fieldset>
                <legend><strong>7.</strong> Qual é o maior oceano da Terra?</legend>
                <label><input type="radio" name="q7" value="A" required> A) Atlântico</label><br>
                <label><input type="radio" name="q7" value="B"> B) Índico</label><br>
                <label><input type="radio" name="q7" value="C"> C) Pacífico</label><br>
                <label><input type="radio" name="q7" value="D"> D) Ártico</label>
            </fieldset>

            <!-- Questão 8 (Gabarito: D) -->
            <fieldset>
                <legend><strong>8.</strong> Qual país é o maior produtor de café do mundo?</legend>
                <label><input type="radio" name="q8" value="A" required> A) Colômbia</label><br>
                <label><input type="radio" name="q8" value="B"> B) Vietnã</label><br>
                <label><input type="radio" name="q8" value="C"> C) Etiópia</label><br>
                <label><input type="radio" name="q8" value="D"> D) Brasil</label>
            </fieldset>

            <!-- Questão 9 (Gabarito: A) -->
            <fieldset>
                <legend><strong>9.</strong> Qual elemento químico tem o símbolo 'O'?</legend>
                <label><input type="radio" name="q9" value="A" required> A) Oxigênio</label><br>
                <label><input type="radio" name="q9" value="B"> B) Ouro</label><br>
                <label><input type="radio" name="q9" value="C"> C) Ósmio</label><br>
                <label><input type="radio" name="q9" value="D"> D) Ozônio</label>
            </fieldset>

            <!-- Questão 10 (Gabarito: B) -->
            <fieldset>
                <legend><strong>10.</strong> Qual destas linguagens é focada em estilização web?</legend>
                <label><input type="radio" name="q10" value="A" required> A) HTML</label><br>
                <label><input type="radio" name="q10" value="B"> B) CSS</label><br>
                <label><input type="radio" name="q10" value="C"> C) JavaScript</label><br>
                <label><input type="radio" name="q10" value="D"> D) Python</label>
            </fieldset>
            <br>
            <input type="submit">
        </form>
    </div>

    <?php
        include 'header.php'
    ?>
</body>
</html>