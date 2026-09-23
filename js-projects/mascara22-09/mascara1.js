// Função para aplicar a máscara de CPF
// 1. Pegamos o elemento do input pelo ID
const inputCpf = document.getElementById('cpf');

// 2. Adicionamos um "ouvinte" que fica atento a cada letra/número digitado
inputCpf.addEventListener('input', (e) => {
    let valor = e.target.value;

    // Remove tudo o que não for dígito (números)
    valor = valor.replace(/\D/g, "");

    // Aplica a máscara do CPF usando expressões regulares (Regex)
    // 000.000.000-00
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    // Devolve o valor formatado de volta para o input
    e.target.value = valor;
});

//Função mascarar telefone
// 1. Pegamos o elemento correto do input pelo ID 'fone'
const inputTelefone = document.getElementById('fone');

// 2. Adicionamos o ouvinte no elemento CORRETO (inputTelefone)
inputTelefone.addEventListener('input', (e) => {
    let valor = e.target.value;

    // Remove tudo o que não for dígito (números)
    valor = valor.replace(/\D/g, "");

    // Limita o tamanho máximo para 11 dígitos (DDD + 9 dígitos do celular)
    valor = valor.substring(0, 11);

    // Aplica a máscara do telefone usando expressões regulares (Regex) passo a passo:
    
    // Passo A: Coloca os parênteses em volta dos 2 primeiros dígitos (o DDD) -> (00
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");

    // Passo B: Coloca o hífen antes dos últimos 4 dígitos -> 00000-0000
    valor = valor.replace(/(\d{5})(\d{4})$/, "$1-$2");

    // Devolve o valor formatado de volta para o input
    e.target.value = valor;
});

//Mascarar CEP
// 1. Pegamos o elemento correto do input pelo ID 'cep'
const inputCep = document.getElementById('cep');

// 2. Adicionamos o ouvinte no elemento CORRETO (inputCep)
inputCep.addEventListener('input', (e) => {
    let valor = e.target.value;

    // Remove tudo o que não for dígito (números)
    valor = valor.replace(/\D/g, "");

    // Limita o tamanho máximo para 8 dígitos
    valor = valor.substring(0, 8);

    // Aplica a máscara do CEP usando expressões regulares (Regex)
    // 00000-000
    valor = valor.replace(/(\d{5})(\d)/, "$1-$2");

    // Devolve o valor formatado de volta para o input
    e.target.value = valor;
});
