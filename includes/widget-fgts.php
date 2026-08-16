<!-- ============================================================
     CALCULADORA DE RESCISÃO DO FGTS
     Bloco único (HTML + CSS + JS) pronto para embed via
     "HTML personalizado" na Hostinger ou qualquer outro site.
     Vanilla JS, sem dependências externas.
     ============================================================ -->
<div id="fgts-calc-root">

  <style>
    /* ================= TOKENS ================= */
    #fgts-calc-root{
      --azul-900:#0b2340;
      --azul-800:#0f2f52;
      --azul-700:#163e68;
      --azul-600:#1f5185;
      --cinza-900:#1c232e;
      --cinza-600:#5b6675;
      --cinza-300:#c9d1db;
      --cinza-100:#eef1f5;
      --branco:#ffffff;
      --verde-700:#0f7a45;
      --verde-600:#12905a;
      --verde-100:#e3f6ec;
      --alerta-700:#9a3b12;
      --alerta-100:#fbe9df;
      --retido-700:#6b7280;
      --retido-100:#eceef1;
      --radius:14px;
      --sombra: 0 8px 24px rgba(11,35,64,0.10);
      --fonte: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;

      font-family: var(--fonte);
      color: var(--cinza-900);
      max-width: 760px;
      margin: 0 auto;
      box-sizing: border-box;
    }
    #fgts-calc-root *, #fgts-calc-root *::before, #fgts-calc-root *::after{
      box-sizing: border-box;
    }

    .fgts-card{
      background: var(--branco);
      border-radius: var(--radius);
      box-shadow: var(--sombra);
      border: 1px solid var(--cinza-100);
      overflow: hidden;
    }

    .fgts-header{
      background: linear-gradient(135deg, var(--azul-900) 0%, var(--azul-700) 100%);
      color: var(--branco);
      padding: 28px 28px 24px;
    }
    .fgts-header .fgts-eyebrow{
      display:inline-flex;
      align-items:center;
      gap:8px;
      font-size: 12px;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: #a9c2de;
      font-weight: 600;
      margin-bottom: 10px;
    }
    .fgts-header .fgts-dot{
      width:7px;height:7px;border-radius:50%;
      background: var(--verde-600);
      box-shadow: 0 0 0 4px rgba(18,144,90,0.25);
    }
    .fgts-header h1{
      margin:0;
      font-size: clamp(20px, 4vw, 26px);
      font-weight: 700;
      line-height:1.25;
    }
    .fgts-header p{
      margin: 8px 0 0;
      font-size: 14px;
      color: #cdddf0;
      line-height:1.5;
      max-width: 52ch;
    }

    .fgts-body{ padding: 24px 28px 28px; }

    .fgts-field{ margin-bottom: 18px; }
    .fgts-field label{
      display:block;
      font-size: 13px;
      font-weight: 600;
      color: var(--azul-800);
      margin-bottom: 6px;
    }
    .fgts-field .fgts-hint{
      font-size: 12px;
      color: var(--cinza-600);
      margin-top: 5px;
      line-height:1.4;
    }

    .fgts-input-wrap{ position:relative; }
    .fgts-prefix{
      position:absolute;
      left:14px; top:50%; transform:translateY(-50%);
      color: var(--cinza-600);
      font-weight:600;
      font-size:14px;
      pointer-events:none;
    }

    input[type="text"].fgts-money,
    select.fgts-select{
      width:100%;
      font-family: var(--fonte);
      font-size:16px;
      padding: 12px 14px;
      border-radius: 10px;
      border: 1.5px solid var(--cinza-300);
      background: var(--cinza-100);
      color: var(--cinza-900);
      transition: border-color .15s ease, box-shadow .15s ease, background .15s ease;
      appearance:none;
      -webkit-appearance:none;
    }
    input[type="text"].fgts-money{ padding-left: 40px; }

    input.fgts-money:focus, select.fgts-select:focus{
      outline:none;
      border-color: var(--azul-600);
      background: var(--branco);
      box-shadow: 0 0 0 4px rgba(31,81,133,0.14);
    }

    select.fgts-select{
      background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'><path d='M1 1l6 6 6-6' stroke='%235b6675' stroke-width='2' fill='none' fill-rule='evenodd' stroke-linecap='round'/></svg>");
      background-repeat:no-repeat;
      background-position: right 14px center;
      padding-right: 38px;
      cursor:pointer;
    }

    .fgts-row{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    @media (max-width: 560px){
      .fgts-row{ grid-template-columns: 1fr; }
    }

    #fgts-aviso-field{
      max-height: 96px;
      opacity: 1;
      overflow:hidden;
      transition: max-height .25s ease, opacity .2s ease, margin .25s ease;
    }
    #fgts-aviso-field.fgts-hidden{
      max-height: 0;
      opacity: 0;
      margin: 0;
      pointer-events:none;
    }

    .fgts-btn{
      width:100%;
      border:none;
      cursor:pointer;
      background: var(--verde-700);
      color: var(--branco);
      font-family: var(--fonte);
      font-weight:700;
      font-size:15px;
      padding: 14px 18px;
      border-radius: 10px;
      transition: background .15s ease, transform .05s ease;
      margin-top: 4px;
    }
    .fgts-btn:hover{ background: var(--verde-600); }
    .fgts-btn:active{ transform: scale(0.99); }

    /* ================= RESULTADOS ================= */
    .fgts-results{
      margin-top: 26px;
      border-top: 1px dashed var(--cinza-300);
      padding-top: 22px;
      display:none;
    }
    .fgts-results.fgts-show{ display:block; }

    .fgts-results-title{
      font-size:12px;
      font-weight:700;
      letter-spacing:.06em;
      text-transform:uppercase;
      color: var(--cinza-600);
      margin-bottom: 14px;
    }

    .fgts-line{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:12px;
      padding: 11px 0;
      border-bottom: 1px solid var(--cinza-100);
      font-size: 14px;
    }
    .fgts-line:last-of-type{ border-bottom:none; }
    .fgts-line-label{ color: var(--cinza-900); font-weight:500; }
    .fgts-line-label small{
      display:block;
      color: var(--cinza-600);
      font-weight:400;
      font-size:12px;
      margin-top:2px;
    }
    .fgts-line-value{ font-weight:700; white-space:nowrap; color: var(--azul-800); }

    .fgts-status-tag{
      display:inline-block;
      font-size:12px;
      font-weight:700;
      padding: 4px 10px;
      border-radius: 999px;
      margin-top: 4px;
    }
    .fgts-status-tag.liberado{ background: var(--verde-100); color: var(--verde-700); }
    .fgts-status-tag.parcial{ background: var(--alerta-100); color: var(--alerta-700); }
    .fgts-status-tag.retido{ background: var(--retido-100); color: var(--retido-700); }

    .fgts-highlight{
      margin-top: 18px;
      background: linear-gradient(135deg, var(--verde-700), var(--verde-600));
      color: var(--branco);
      border-radius: 12px;
      padding: 20px 22px;
      display:flex;
      flex-direction:column;
      gap: 4px;
    }
    .fgts-highlight.fgts-retido-visual{
      background: linear-gradient(135deg, #454f5c, #5b6675);
    }
    .fgts-highlight span.fgts-hl-label{
      font-size:12px;
      font-weight:700;
      text-transform:uppercase;
      letter-spacing:.06em;
      opacity:.9;
    }
    .fgts-highlight span.fgts-hl-value{
      font-size: clamp(24px, 5vw, 32px);
      font-weight:800;
      line-height:1.2;
    }

    /* barra de proporção saque x retido */
    .fgts-bar-wrap{
      margin-top:16px;
    }
    .fgts-bar{
      width:100%;
      height:10px;
      border-radius:999px;
      background: var(--retido-100);
      overflow:hidden;
      display:flex;
    }
    .fgts-bar-saque{
      height:100%;
      background: var(--verde-600);
      transition: width .4s ease;
    }
    .fgts-bar-legend{
      display:flex;
      justify-content:space-between;
      font-size:11px;
      color: var(--cinza-600);
      margin-top:6px;
    }

    .fgts-disclaimer{
      margin-top: 20px;
      font-size: 11.5px;
      line-height:1.5;
      color: var(--cinza-600);
      background: var(--cinza-100);
      padding: 12px 14px;
      border-radius: 10px;
    }
  </style>

  <div class="fgts-card">
    <div class="fgts-header">
      <div class="fgts-eyebrow"><span class="fgts-dot"></span> Simulador trabalhista</div>
      <h1>Calculadora de Rescisão do FGTS</h1>
      <p>Descubra quanto do seu FGTS pode ser sacado na rescisão, com base no motivo do desligamento e nas regras vigentes da CLT.</p>
    </div>

    <div class="fgts-body">
      <div id="fgts-form">

        <div class="fgts-row">
          <div class="fgts-field">
            <label for="fgts-saldo">Saldo atual do FGTS na Caixa</label>
            <div class="fgts-input-wrap">
              <span class="fgts-prefix">R$</span>
              <input class="fgts-money" type="text" inputmode="numeric" id="fgts-saldo" placeholder="0,00" autocomplete="off">
            </div>
            <div class="fgts-hint">Valor já acumulado na sua conta vinculada.</div>
          </div>

          <div class="fgts-field">
            <label for="fgts-salario">Último salário bruto</label>
            <div class="fgts-input-wrap">
              <span class="fgts-prefix">R$</span>
              <input class="fgts-money" type="text" inputmode="numeric" id="fgts-salario" placeholder="0,00" autocomplete="off">
            </div>
            <div class="fgts-hint">Usado para calcular o depósito de FGTS do mês da rescisão.</div>
          </div>
        </div>

        <div class="fgts-field">
          <label for="fgts-motivo">Motivo da demissão</label>
          <select class="fgts-select" id="fgts-motivo">
            <option value="sem_justa_causa">Demissão sem justa causa (pelo empregador)</option>
            <option value="comum_acordo">Demissão por comum acordo (Reforma Trabalhista)</option>
            <option value="pedido_demissao">Pedido de demissão (pelo empregado)</option>
            <option value="justa_causa">Demissão por justa causa</option>
          </select>
        </div>

        <div class="fgts-field" id="fgts-aviso-field">
          <label for="fgts-aviso">Aviso prévio</label>
          <select class="fgts-select" id="fgts-aviso">
            <option value="trabalhado">Trabalhado</option>
            <option value="indenizado">Indenizado</option>
          </select>
          <div class="fgts-hint">No aviso indenizado, o empregador também recolhe 8% de FGTS sobre esse período.</div>
        </div>

        <button type="button" id="fgts-btn-calcular" class="fgts-btn">Calcular rescisão do FGTS</button>
      </div>

      <div class="fgts-results" id="fgts-results">
        <div class="fgts-results-title">Resultado da simulação</div>

        <div class="fgts-line">
          <div class="fgts-line-label">
            FGTS do mês da rescisão / aviso prévio
            <small>8% sobre o salário (e sobre o aviso, se indenizado)</small>
          </div>
          <div class="fgts-line-value" id="fgts-out-mes">R$ 0,00</div>
        </div>

        <div class="fgts-line">
          <div class="fgts-line-label" id="fgts-out-multa-label">
            Multa rescisória
            <small id="fgts-out-multa-sub">—</small>
          </div>
          <div class="fgts-line-value" id="fgts-out-multa">R$ 0,00</div>
        </div>

        <div class="fgts-line">
          <div class="fgts-line-label">
            Status do saldo antigo (já depositado)
            <br>
            <span class="fgts-status-tag" id="fgts-out-status">—</span>
          </div>
          <div class="fgts-line-value" id="fgts-out-saldo-antigo">R$ 0,00</div>
        </div>

        <div class="fgts-highlight" id="fgts-highlight-box">
          <span class="fgts-hl-label">Total disponível para saque imediato</span>
          <span class="fgts-hl-value" id="fgts-out-total">R$ 0,00</span>
        </div>

        <div class="fgts-bar-wrap">
          <div class="fgts-bar">
            <div class="fgts-bar-saque" id="fgts-bar-saque" style="width:0%"></div>
          </div>
          <div class="fgts-bar-legend">
            <span>Disponível agora</span>
            <span id="fgts-bar-retido-label">Retido na conta</span>
          </div>
        </div>

        <div class="fgts-disclaimer">
          Esta é uma simulação simplificada para fins informativos, sem caráter oficial. Não considera dias
          proporcionais no mês, saques emergenciais/aniversário já realizados ou eventuais especificidades do
          contrato. Consulte a Caixa Econômica Federal, o sindicato da categoria ou um contador antes de tomar
          decisões financeiras.
        </div>
      </div>
    </div>
  </div>
</div>

<script>
(function(){
  "use strict";

  // Executa somente depois que o DOM estiver pronto. Isso evita que o
  // script rode antes do HTML do widget existir na página (comum em
  // construtores de site que injetam o bloco de forma assíncrona).
  if (document.readyState === "loading"){
    document.addEventListener("DOMContentLoaded", iniciar);
  } else {
    iniciar();
  }

  function iniciar(){

  // ---------- Referências de DOM ----------
  var root = document.getElementById("fgts-calc-root");
  if (!root){
    console.error("[Calculadora FGTS] Elemento #fgts-calc-root não encontrado.");
    return;
  }
  var btnCalcular = root.querySelector("#fgts-btn-calcular");
  var inputSaldo = root.querySelector("#fgts-saldo");
  var inputSalario = root.querySelector("#fgts-salario");
  var selectMotivo = root.querySelector("#fgts-motivo");
  var avisoField = root.querySelector("#fgts-aviso-field");
  var selectAviso = root.querySelector("#fgts-aviso");

  var resultsBox = root.querySelector("#fgts-results");
  var outMes = root.querySelector("#fgts-out-mes");
  var outMultaLabel = root.querySelector("#fgts-out-multa-label");
  var outMultaSub = root.querySelector("#fgts-out-multa-sub");
  var outMulta = root.querySelector("#fgts-out-multa");
  var outStatusTag = root.querySelector("#fgts-out-status");
  var outSaldoAntigo = root.querySelector("#fgts-out-saldo-antigo");
  var outTotal = root.querySelector("#fgts-out-total");
  var highlightBox = root.querySelector("#fgts-highlight-box");
  var barSaque = root.querySelector("#fgts-bar-saque");
  var barRetidoLabel = root.querySelector("#fgts-bar-retido-label");

  // ---------- Máscara de moeda (R$) ----------
  // Converte a digitação em centavos e formata como moeda brasileira em tempo real.
  function aplicarMascaraMoeda(input){
    input.addEventListener("input", function(){
      var somenteDigitos = input.value.replace(/\D/g, "");
      if (somenteDigitos === ""){
        input.value = "";
        return;
      }
      var valorEmCentavos = parseInt(somenteDigitos, 10);
      var valorEmReais = valorEmCentavos / 100;
      input.value = valorEmReais.toLocaleString("pt-BR", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
      });
    });
  }
  aplicarMascaraMoeda(inputSaldo);
  aplicarMascaraMoeda(inputSalario);

  // Converte o texto mascarado ("1.234,56") de volta para número (1234.56)
  function paraNumero(valorMascarado){
    if (!valorMascarado) return 0;
    var limpo = valorMascarado.replace(/\./g, "").replace(",", ".");
    var numero = parseFloat(limpo);
    return isNaN(numero) ? 0 : numero;
  }

  // Formata um número para moeda brasileira (R$ 1.234,56)
  function paraMoeda(numero){
    return numero.toLocaleString("pt-BR", {
      style: "currency",
      currency: "BRL"
    });
  }

  // ---------- Exibir/ocultar campo de Aviso Prévio ----------
  // Regra: só existe escolha de aviso prévio (trabalhado/indenizado) quando o
  // empregado tem direito a ele: demissão sem justa causa e comum acordo.
  // No pedido de demissão e na justa causa não há impacto do aviso no FGTS aqui.
  function atualizarVisibilidadeAviso(){
    var motivo = selectMotivo.value;
    var temDireitoAviso = (motivo === "sem_justa_causa" || motivo === "comum_acordo");
    if (temDireitoAviso){
      avisoField.classList.remove("fgts-hidden");
    } else {
      avisoField.classList.add("fgts-hidden");
    }
  }
  selectMotivo.addEventListener("change", atualizarVisibilidadeAviso);
  atualizarVisibilidadeAviso();

  /**
   * ====================================================================
   * FUNÇÃO PRINCIPAL DE CÁLCULO
   * ====================================================================
   * Recebe os dados do formulário e devolve um objeto com todos os
   * valores necessários para montar o painel de resultados.
   *
   * MANUTENÇÃO FUTURA: caso a legislação mude os percentuais de multa
   * (hoje 40% para dispensa sem justa causa e 20% para comum acordo) ou
   * o percentual mensal de depósito do FGTS (hoje 8%), basta alterar as
   * constantes abaixo — o restante da lógica não precisa ser tocado.
   */
  function calcularRescisaoFGTS(dados){
    var ALIQUOTA_FGTS_MENSAL = 0.08;   // 8% sobre a remuneração
    var MULTA_SEM_JUSTA_CAUSA = 0.40;  // 40% sobre o saldo
    var MULTA_COMUM_ACORDO = 0.20;     // 20% sobre o saldo
    var PERCENTUAL_SAQUE_COMUM_ACORDO = 0.80; // saque de 80% do saldo total

    var saldoAtual = dados.saldoAtual;
    var salarioBruto = dados.salarioBruto;
    var motivo = dados.motivo;
    var aviso = dados.aviso; // "trabalhado" | "indenizado" | null

    // 1) FGTS do mês da rescisão: 8% sobre o último salário bruto.
    var fgtsMesRescisao = salarioBruto * ALIQUOTA_FGTS_MENSAL;

    // 2) Se houver aviso prévio indenizado, o empregador também recolhe
    //    8% de FGTS sobre o valor do aviso (equivalente a 1 salário).
    //    No aviso trabalhado, o depósito já ocorre normalmente dentro do
    //    mês trabalhado e não gera um recolhimento "extra" para este cálculo.
    var fgtsAvisoIndenizado = 0;
    if (aviso === "indenizado" && (motivo === "sem_justa_causa" || motivo === "comum_acordo")){
      fgtsAvisoIndenizado = salarioBruto * ALIQUOTA_FGTS_MENSAL;
    }

    var fgtsDoMes = fgtsMesRescisao + fgtsAvisoIndenizado;

    // 3) Base para cálculo da multa rescisória = saldo já acumulado + os
    //    depósitos referentes ao mês da rescisão (e ao aviso indenizado).
    var baseParaMulta = saldoAtual + fgtsDoMes;

    var percentualMulta = 0;
    var valorMulta = 0;
    var valorSaqueImediato = 0;
    var valorSaldoAntigoDisponivel = 0; // parte do saldo ANTIGO liberada agora
    var valorSaldoRetido = 0;           // parte que permanece na conta
    var statusSaldo = "";
    var statusClasse = "";

    switch(motivo){

      case "sem_justa_causa":
        // Direito integral: saldo total + FGTS do mês + multa de 40%.
        percentualMulta = MULTA_SEM_JUSTA_CAUSA;
        valorMulta = baseParaMulta * percentualMulta;
        valorSaldoAntigoDisponivel = saldoAtual; // 100% do saldo antigo liberado
        valorSaldoRetido = 0;
        valorSaqueImediato = saldoAtual + fgtsDoMes + valorMulta;
        statusSaldo = "Disponível para saque";
        statusClasse = "liberado";
        break;

      case "comum_acordo":
        // Multa de 20% sobre a base e saque limitado a 80% do saldo total.
        percentualMulta = MULTA_COMUM_ACORDO;
        valorMulta = baseParaMulta * percentualMulta;

        var saldoTotalDisponivelParaSaque = baseParaMulta * PERCENTUAL_SAQUE_COMUM_ACORDO;
        valorSaldoAntigoDisponivel = saldoAtual * PERCENTUAL_SAQUE_COMUM_ACORDO;
        valorSaldoRetido = saldoAtual - valorSaldoAntigoDisponivel;

        // Total disponível = 80% do saldo (incluindo o mês) + a multa de 20%,
        // que é sempre paga integralmente (não sofre o corte de 80%).
        valorSaqueImediato = saldoTotalDisponivelParaSaque + valorMulta;
        statusSaldo = "Parcialmente disponível (80%)";
        statusClasse = "parcial";
        break;

      case "pedido_demissao":
      case "justa_causa":
        // Sem multa e sem saque: o saldo (antigo e do mês) permanece
        // retido na conta vinculada até uma hipótese legal de saque.
        percentualMulta = 0;
        valorMulta = 0;
        valorSaldoAntigoDisponivel = 0;
        valorSaldoRetido = saldoAtual;
        valorSaqueImediato = 0;
        statusSaldo = "Retido na conta da Caixa";
        statusClasse = "retido";
        break;
    }

    return {
      fgtsDoMes: fgtsDoMes,
      percentualMulta: percentualMulta,
      valorMulta: valorMulta,
      valorSaqueImediato: valorSaqueImediato,
      saldoAtual: saldoAtual,
      valorSaldoAntigoDisponivel: valorSaldoAntigoDisponivel,
      valorSaldoRetido: valorSaldoRetido,
      statusSaldo: statusSaldo,
      statusClasse: statusClasse,
      motivo: motivo
    };
  }

  // ---------- Renderização do painel de resultados ----------
  function renderizarResultado(r){
    outMes.textContent = paraMoeda(r.fgtsDoMes);

    if (r.percentualMulta > 0){
      outMultaLabel.childNodes[0].nodeValue = "Multa rescisória (" + (r.percentualMulta * 100).toFixed(0) + "%) ";
      outMultaSub.textContent = "Calculada sobre o saldo + depósito do mês";
    } else {
      outMultaLabel.childNodes[0].nodeValue = "Multa rescisória ";
      outMultaSub.textContent = "Não há multa neste tipo de desligamento";
    }
    outMulta.textContent = paraMoeda(r.valorMulta);

    outStatusTag.textContent = r.statusSaldo;
    outStatusTag.className = "fgts-status-tag " + r.statusClasse;

    // "Status do saldo antigo" mostra o valor do saldo que já estava
    // acumulado antes da rescisão (não inclui o depósito do mês nem a multa).
    if (r.statusClasse === "liberado"){
      outSaldoAntigo.textContent = paraMoeda(r.saldoAtual);
    } else if (r.statusClasse === "parcial"){
      outSaldoAntigo.textContent = paraMoeda(r.valorSaldoAntigoDisponivel) + " de " + paraMoeda(r.saldoAtual);
    } else {
      outSaldoAntigo.textContent = paraMoeda(r.saldoAtual) + " (retido)";
    }

    outTotal.textContent = paraMoeda(r.valorSaqueImediato);

    if (r.statusClasse === "retido"){
      highlightBox.classList.add("fgts-retido-visual");
    } else {
      highlightBox.classList.remove("fgts-retido-visual");
    }

    // Barra de proporção: quanto do (saldo antigo + mês + multa) fica
    // disponível agora vs. quanto permanece retido.
    var totalGeral = r.saldoAtual + r.fgtsDoMes + r.valorMulta;
    var percentualDisponivel = totalGeral > 0 ? (r.valorSaqueImediato / totalGeral) * 100 : 0;
    percentualDisponivel = Math.max(0, Math.min(100, percentualDisponivel));
    barSaque.style.width = percentualDisponivel.toFixed(0) + "%";
    barRetidoLabel.textContent = "Retido na conta (" + (100 - percentualDisponivel).toFixed(0) + "%)";

    resultsBox.classList.add("fgts-show");
  }

  // ---------- Clique no botão "Calcular" ----------
  if (!btnCalcular){
    console.error("[Calculadora FGTS] Botão #fgts-btn-calcular não encontrado.");
    return;
  }

  btnCalcular.addEventListener("click", function(evento){
    evento.preventDefault();
    try {
      var dados = {
        saldoAtual: paraNumero(inputSaldo.value),
        salarioBruto: paraNumero(inputSalario.value),
        motivo: selectMotivo.value,
        aviso: avisoField.classList.contains("fgts-hidden") ? null : selectAviso.value
      };

      var resultado = calcularRescisaoFGTS(dados);
      renderizarResultado(resultado);

      resultsBox.scrollIntoView({ behavior: "smooth", block: "nearest" });
    } catch (erro){
      // Log detalhado para facilitar diagnóstico caso algo falhe na
      // integração com o site (ex: elemento não encontrado, script
      // duplicado, etc). Abra o console do navegador (F12) para ver.
      console.error("[Calculadora FGTS] Erro ao calcular:", erro);
    }
  });

  } // fim de iniciar()
})();
</script>



