// ---------- Referências ----------
const form = document.getElementById("formCadastro");
const modal = document.getElementById("modal");
const listaUsuarios = document.getElementById("listaUsuarios");
const vazio = document.getElementById("vazio");

const campos = ["nome", "telefone", "cpf", "cep", "email", "senha"];

// ---------- Máscaras ----------
function somenteDigitos(valor) {
  return valor.replace(/\D/g, "");
}

function mascaraTelefone(valor) {
  let d = somenteDigitos(valor).slice(0, 11);
  if (d.length > 10) {
    return d.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, "($1) $2-$3");   // (00) 90000-0000
  } else if (d.length > 6) {
    return d.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, "($1) $2-$3");   // (00) 0000-0000
  } else if (d.length > 2) {
    return d.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
  } else if (d.length > 0) {
    return d.replace(/^(\d{0,2})/, "($1");
  }
  return "";
}

function mascaraCPF(valor) {
  let d = somenteDigitos(valor).slice(0, 11);
  return d
    .replace(/^(\d{3})(\d)/, "$1.$2")
    .replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3")
    .replace(/\.(\d{3})(\d)/, ".$1-$2");
}

function mascaraCEP(valor) {
  let d = somenteDigitos(valor).slice(0, 8);
  return d.replace(/^(\d{5})(\d)/, "$1-$2");
}

document.getElementById("telefone").addEventListener("input", (e) => {
  e.target.value = mascaraTelefone(e.target.value);
});
document.getElementById("cpf").addEventListener("input", (e) => {
  e.target.value = mascaraCPF(e.target.value);
});
document.getElementById("cep").addEventListener("input", (e) => {
  e.target.value = mascaraCEP(e.target.value);
});

// ---------- Validação ----------
function validar(dados) {
  const erros = {};

  if (dados.nome.trim().length < 3) {
    erros.nome = "Informe o nome completo (mínimo 3 caracteres).";
  }

  const digTel = somenteDigitos(dados.telefone).length;
  if (digTel !== 10 && digTel !== 11) {
    erros.telefone = "Telefone incompleto. Use (00) 90000-0000.";
  }

  if (somenteDigitos(dados.cpf).length !== 11) {
    erros.cpf = "CPF incompleto. Use 000.000.000-00.";
  }

  if (somenteDigitos(dados.cep).length !== 8) {
    erros.cep = "CEP incompleto. Use 00000-000.";
  }

  // texto@dominio.ext
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(dados.email)) {
    erros.email = "Informe um e-mail válido, como nome@dominio.com.";
  }

  if (dados.senha.length < 6 || !/[^a-zA-Z0-9]/.test(dados.senha)) {
    erros.senha = "A senha precisa de 6 ou mais caracteres e 1 caractere especial.";
  }

  return erros;
}

function mostrarErros(erros) {
  campos.forEach((c) => {
    document.getElementById("erro-" + c).textContent = erros[c] || "";
    document.getElementById(c).classList.toggle("invalido", Boolean(erros[c]));
  });
}

// ---------- Modal ----------
function abrirModal(usuario) {
  document.getElementById("modalMsg").textContent =
    `Usuário ${usuario.nome} cadastrado com sucesso!`;

  const resumo = document.getElementById("modalResumo");
  resumo.innerHTML = "";
  [
    ["Telefone", usuario.telefone],
    ["CPF", usuario.cpf],
    ["CEP", usuario.cep],
    ["E-mail", usuario.email],
  ].forEach(([rotulo, valor]) => {
    const li = document.createElement("li");
    li.textContent = `${rotulo}: ${valor}`;
    resumo.appendChild(li);
  });

  modal.classList.add("aberto");
  document.getElementById("btnEntendido").focus();
}

function fecharModal() {
  modal.classList.remove("aberto");
}

document.getElementById("btnX").addEventListener("click", fecharModal);
document.getElementById("btnEntendido").addEventListener("click", fecharModal);

// clique no fundo escuro (e não dentro da caixa)
modal.addEventListener("click", (e) => {
  if (e.target === modal) fecharModal();
});

// tecla ESC
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && modal.classList.contains("aberto")) fecharModal();
});

// ---------- localStorage ----------
function carregarUsuarios() {
  try {
    return JSON.parse(localStorage.getItem("usuarios")) || [];
  } catch (erro) {
    return [];
  }
}

let usuarios = carregarUsuarios();

function renderizarUsuarios() {
  const lista = carregarUsuarios();
  listaUsuarios.innerHTML = "";
  vazio.style.display = lista.length ? "none" : "block";

  lista.forEach((u) => {
    const tr = document.createElement("tr");
    [u.nome, u.email, u.telefone, u.cpf, u.cep].forEach((texto) => {
      const td = document.createElement("td");
      td.textContent = texto;   // textContent evita injeção de HTML
      tr.appendChild(td);
    });
    listaUsuarios.appendChild(tr);
  });
}

// ---------- Submit ----------
form.addEventListener("submit", (e) => {
  e.preventDefault();

  const dados = {};
  campos.forEach((c) => (dados[c] = document.getElementById(c).value));

  const erros = validar(dados);
  mostrarErros(erros);
  if (Object.keys(erros).length > 0) return;

  // Objeto do novo usuário. A senha NÃO é salva: guardar senha em texto
  // puro no localStorage é inseguro (qualquer script da página consegue ler).
  const novoUsuario = {
    nome: dados.nome.trim(),
    telefone: dados.telefone,
    cpf: dados.cpf,
    cep: dados.cep,
    email: dados.email.trim(),
  };

  usuarios.push(novoUsuario);
  localStorage.setItem("usuarios", JSON.stringify(usuarios));

  renderizarUsuarios();
  abrirModal(novoUsuario);
  form.reset();
  mostrarErros({});
});

// ---------- Início ----------
renderizarUsuarios();
