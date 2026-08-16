<!-- ============================================================
     CALCULADORA COMPLETA DE RESCISÃO TRABALHISTA (CLT)
     Bloco único HTML + CSS + JS (Vanilla JS, sem dependências)
     Pronto para colar em um widget de "HTML Personalizado" na Hostinger.
     ============================================================ -->
<div id="calc-rescisao-app">

  <div class="cr-card">
    <div class="cr-header">
      <h2>Calculadora de Rescisão Trabalhista</h2>
      <p>Simule os valores da sua rescisão de contrato de trabalho conforme a CLT</p>
    </div>

    <form id="crForm" class="cr-form" novalidate>

      <div class="cr-grid">

        <div class="cr-field">
          <label for="crSalario">Salário Bruto Atual</label>
          <input type="text" id="crSalario" inputmode="numeric" placeholder="R$ 0,00" required>
        </div>

        <div class="cr-field">
          <label for="crDependentes">Nº de Dependentes (IRRF)</label>
          <input type="number" id="crDependentes" min="0" step="1" value="0">
        </div>

        <div class="cr-field">
          <label for="crAdmissao">Data de Admissão</label>
          <input type="date" id="crAdmissao" required>
        </div>

        <div class="cr-field">
          <label for="crDemissao">Data de Demissão</label>
          <input type="date" id="crDemissao" required>
        </div>

        <div class="cr-field">
          <label for="crMotivo">Motivo da Demissão</label>
          <select id="crMotivo">
            <option value="sem_justa_causa">Demissão sem justa causa (empregador)</option>
            <option value="pedido_demissao">Pedido de demissão (empregado)</option>
            <option value="acordo">Demissão por comum acordo</option>
            <option value="justa_causa">Demissão por justa causa</option>
          </select>
        </div>

        <div class="cr-field">
          <label for="crAviso">Aviso Prévio</label>
          <select id="crAviso">
            <option value="trabalhado">Trabalhado</option>
            <option value="indenizado">Indenizado</option>
            <option value="dispensado">Dispensado / Não cumprido</option>
          </select>
        </div>

        <div class="cr-field">
          <label for="crFeriasVencidas">Possui Férias Vencidas?</label>
          <select id="crFeriasVencidas">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
          </select>
        </div>

        <div class="cr-field">
          <label for="crFgts">Saldo Atual do FGTS <span class="cr-optional">(opcional)</span></label>
          <input type="text" id="crFgts" inputmode="numeric" placeholder="R$ 0,00 (se vazio, será estimado)">
        </div>

      </div>

      <div class="cr-actions">
        <button type="submit" class="cr-btn-primary">Calcular Rescisão</button>
        <button type="reset" class="cr-btn-secondary">Limpar</button>
      </div>

      <p id="crError" class="cr-error" hidden></p>
    </form>

    <!-- PAINEL DE RESULTADOS ESTILO HOLERITE -->
    <div id="crResultado" class="cr-resultado" hidden>

      <h3 class="cr-resultado-titulo">Demonstrativo de Rescisão</h3>
      <p id="crResumoPeriodo" class="cr-resumo-periodo"></p>

      <div class="cr-holerite">

        <div class="cr-coluna">
          <h4 class="cr-coluna-titulo cr-proventos-titulo">(+) Verbas Rescisórias</h4>
          <table class="cr-tabela" id="crTabelaProventos"></table>
          <div class="cr-subtotal cr-subtotal-provento">
            <span>Total de Proventos</span>
            <span id="crTotalProventos">R$ 0,00</span>
          </div>
        </div>

        <div class="cr-coluna">
          <h4 class="cr-coluna-titulo cr-descontos-titulo">(-) Descontos</h4>
          <table class="cr-tabela" id="crTabelaDescontos"></table>
          <div class="cr-subtotal cr-subtotal-desconto">
            <span>Total de Descontos</span>
            <span id="crTotalDescontos">R$ 0,00</span>
          </div>
        </div>

      </div>

      <div class="cr-total-liquido">
        <span>Total Líquido a Receber</span>
        <strong id="crTotalLiquido">R$ 0,00</strong>
      </div>

      <div class="cr-fgts-box">
        <h4>FGTS e Multa Rescisória</h4>
        <div class="cr-fgts-grid">
          <div>
            <span class="cr-fgts-label">Saldo do FGTS (informado/estimado)</span>
            <span class="cr-fgts-valor" id="crFgtsSaldo">R$ 0,00</span>
          </div>
          <div>
            <span class="cr-fgts-label">Multa Rescisória</span>
            <span class="cr-fgts-valor" id="crFgtsMulta">R$ 0,00</span>
          </div>
          <div>
            <span class="cr-fgts-label">Total Disponível (FGTS + Multa)</span>
            <span class="cr-fgts-valor cr-fgts-destaque" id="crFgtsTotal">R$ 0,00</span>
          </div>
        </div>
        <p id="crFgtsSaque" class="cr-fgts-saque"></p>
      </div>

      <p class="cr-disclaimer">
        * Simulação com finalidade informativa, baseada em regras simplificadas da CLT e em tabelas
        de INSS/IRRF vigentes cadastradas neste código. Valores podem variar conforme convenção coletiva,
        histórico salarial e particularidades do contrato. Consulte o RH da empresa ou um contador/advogado
        trabalhista para o valor oficial.
      </p>
    </div>

  </div>
</div>

<style>
  /* ============================================================
     CSS - Paleta: azul-escuro institucional / cinza-claro / verde
     ============================================================ */
  #calc-rescisao-app {
    --cr-azul-escuro: #0b2545;
    --cr-azul-medio: #13315c;
    --cr-azul-claro: #1d4e89;
    --cr-cinza-fundo: #f2f4f7;
    --cr-cinza-borda: #dbe1e8;
    --cr-cinza-texto: #4a5568;
    --cr-verde: #1e7e4c;
    --cr-verde-fundo: #e6f6ee;
    --cr-vermelho: #b3261e;
    --cr-vermelho-fundo: #fdecea;
    --cr-radius: 10px;
    font-family: 'Segoe UI', Roboto, Arial, sans-serif;
    box-sizing: border-box;
    max-width: 900px;
    margin: 0 auto;
  }

  #calc-rescisao-app *, #calc-rescisao-app *::before, #calc-rescisao-app *::after {
    box-sizing: border-box;
  }

  #calc-rescisao-app .cr-card {
    background: #ffffff;
    border-radius: var(--cr-radius);
    box-shadow: 0 4px 24px rgba(11, 37, 69, 0.10);
    overflow: hidden;
    border: 1px solid var(--cr-cinza-borda);
  }

  #calc-rescisao-app .cr-header {
    background: linear-gradient(135deg, var(--cr-azul-escuro), var(--cr-azul-claro));
    color: #ffffff;
    padding: 28px 24px;
    text-align: center;
  }

  #calc-rescisao-app .cr-header h2 {
    margin: 0 0 6px;
    font-size: 1.6rem;
    font-weight: 700;
  }

  #calc-rescisao-app .cr-header p {
    margin: 0;
    font-size: 0.95rem;
    opacity: 0.85;
  }

  #calc-rescisao-app .cr-form {
    padding: 24px;
    background: var(--cr-cinza-fundo);
  }

  #calc-rescisao-app .cr-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }

  #calc-rescisao-app .cr-field {
    display: flex;
    flex-direction: column;
  }

  #calc-rescisao-app .cr-field label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--cr-azul-escuro);
    margin-bottom: 6px;
  }

  #calc-rescisao-app .cr-optional {
    font-weight: 400;
    color: var(--cr-cinza-texto);
    font-size: 0.78rem;
  }

  #calc-rescisao-app input,
  #calc-rescisao-app select {
    padding: 11px 12px;
    border: 1px solid var(--cr-cinza-borda);
    border-radius: 8px;
    font-size: 0.95rem;
    background: #ffffff;
    color: #1a202c;
    width: 100%;
    transition: border-color .15s, box-shadow .15s;
  }

  #calc-rescisao-app input:focus,
  #calc-rescisao-app select:focus {
    outline: none;
    border-color: var(--cr-azul-claro);
    box-shadow: 0 0 0 3px rgba(29, 78, 137, 0.15);
  }

  #calc-rescisao-app input:invalid.cr-touched {
    border-color: var(--cr-vermelho);
  }

  #calc-rescisao-app .cr-actions {
    display: flex;
    gap: 12px;
    margin-top: 22px;
    flex-wrap: wrap;
  }

  #calc-rescisao-app .cr-btn-primary,
  #calc-rescisao-app .cr-btn-secondary {
    border: none;
    border-radius: 8px;
    padding: 13px 22px;
    font-size: 0.95rem;
    font-weight: 700;
    cursor: pointer;
    transition: transform .1s, opacity .15s;
  }

  #calc-rescisao-app .cr-btn-primary {
    background: var(--cr-azul-escuro);
    color: #fff;
    flex: 1 1 220px;
  }

  #calc-rescisao-app .cr-btn-primary:hover { opacity: 0.92; }
  #calc-rescisao-app .cr-btn-primary:active { transform: scale(0.99); }

  #calc-rescisao-app .cr-btn-secondary {
    background: #ffffff;
    color: var(--cr-azul-escuro);
    border: 1px solid var(--cr-cinza-borda);
  }

  #calc-rescisao-app .cr-btn-secondary:hover { background: #eef1f5; }

  #calc-rescisao-app .cr-error {
    margin-top: 14px;
    background: var(--cr-vermelho-fundo);
    color: var(--cr-vermelho);
    border: 1px solid #f3c1bd;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 0.88rem;
  }

  /* ---------- Painel de Resultados (estilo holerite) ---------- */
  #calc-rescisao-app .cr-resultado {
    padding: 24px;
    border-top: 3px solid var(--cr-azul-escuro);
    background: #ffffff;
  }

  #calc-rescisao-app .cr-resultado-titulo {
    margin: 0 0 4px;
    color: var(--cr-azul-escuro);
    font-size: 1.25rem;
  }

  #calc-rescisao-app .cr-resumo-periodo {
    margin: 0 0 18px;
    font-size: 0.85rem;
    color: var(--cr-cinza-texto);
  }

  #calc-rescisao-app .cr-holerite {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  #calc-rescisao-app .cr-coluna-titulo {
    font-size: 0.95rem;
    margin: 0 0 10px;
    padding-bottom: 8px;
    border-bottom: 2px solid var(--cr-cinza-borda);
  }

  #calc-rescisao-app .cr-proventos-titulo { color: var(--cr-verde); }
  #calc-rescisao-app .cr-descontos-titulo { color: var(--cr-vermelho); }

  #calc-rescisao-app .cr-tabela {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.88rem;
  }

  #calc-rescisao-app .cr-tabela td {
    padding: 7px 4px;
    border-bottom: 1px dashed var(--cr-cinza-borda);
    color: #2d3748;
  }

  #calc-rescisao-app .cr-tabela td:last-child {
    text-align: right;
    font-weight: 600;
    white-space: nowrap;
  }

  #calc-rescisao-app .cr-subtotal {
    display: flex;
    justify-content: space-between;
    margin-top: 12px;
    padding-top: 10px;
    font-weight: 700;
    font-size: 0.92rem;
  }

  #calc-rescisao-app .cr-subtotal-provento { color: var(--cr-verde); }
  #calc-rescisao-app .cr-subtotal-desconto { color: var(--cr-vermelho); }

  #calc-rescisao-app .cr-total-liquido {
    margin-top: 24px;
    background: var(--cr-verde-fundo);
    border: 1px solid #bfe6cf;
    border-radius: var(--cr-radius);
    padding: 18px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 8px;
  }

  #calc-rescisao-app .cr-total-liquido span {
    font-size: 1rem;
    font-weight: 600;
    color: var(--cr-azul-escuro);
  }

  #calc-rescisao-app .cr-total-liquido strong {
    font-size: 1.7rem;
    color: var(--cr-verde);
  }

  #calc-rescisao-app .cr-fgts-box {
    margin-top: 22px;
    background: var(--cr-cinza-fundo);
    border: 1px solid var(--cr-cinza-borda);
    border-radius: var(--cr-radius);
    padding: 18px 20px;
  }

  #calc-rescisao-app .cr-fgts-box h4 {
    margin: 0 0 14px;
    color: var(--cr-azul-escuro);
    font-size: 1rem;
  }

  #calc-rescisao-app .cr-fgts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
  }

  #calc-rescisao-app .cr-fgts-grid > div {
    display: flex;
    flex-direction: column;
    background: #ffffff;
    border-radius: 8px;
    padding: 12px;
    border: 1px solid var(--cr-cinza-borda);
  }

  #calc-rescisao-app .cr-fgts-label {
    font-size: 0.78rem;
    color: var(--cr-cinza-texto);
    margin-bottom: 6px;
  }

  #calc-rescisao-app .cr-fgts-valor {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--cr-azul-escuro);
  }

  #calc-rescisao-app .cr-fgts-destaque { color: var(--cr-verde); }

  #calc-rescisao-app .cr-fgts-saque {
    margin: 14px 0 0;
    font-size: 0.85rem;
    color: var(--cr-azul-escuro);
    background: #eef4fb;
    border-left: 3px solid var(--cr-azul-claro);
    padding: 10px 12px;
    border-radius: 4px;
  }

  #calc-rescisao-app .cr-disclaimer {
    margin-top: 20px;
    font-size: 0.75rem;
    color: var(--cr-cinza-texto);
    line-height: 1.5;
  }

  /* ---------- Responsividade ---------- */
  @media (max-width: 640px) {
    #calc-rescisao-app .cr-grid { grid-template-columns: 1fr; }
    #calc-rescisao-app .cr-holerite { grid-template-columns: 1fr; }
    #calc-rescisao-app .cr-fgts-grid { grid-template-columns: 1fr; }
    #calc-rescisao-app .cr-header h2 { font-size: 1.3rem; }
    #calc-rescisao-app .cr-total-liquido strong { font-size: 1.4rem; }
  }
</style>

<script>
(function () {
  'use strict';

  // ==========================================================
  // 1) UTILITÁRIOS DE FORMATAÇÃO (máscara de moeda em R$)
  // ==========================================================

  // Formata um número (ex: 1500.5) para "R$ 1.500,50"
  function formatarMoeda(valor) {
    if (isNaN(valor)) valor = 0;
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
  }

  // Converte o texto mascarado (ex: "R$ 1.500,50") em número (1500.5)
  function paraNumero(textoMascarado) {
    if (!textoMascarado) return 0;
    const somenteDigitos = textoMascarado.replace(/\D/g, '');
    if (!somenteDigitos) return 0;
    return parseInt(somenteDigitos, 10) / 100;
  }

  // Aplica máscara de moeda em tempo real a um campo <input>
  function aplicarMascaraMoeda(input) {
    input.addEventListener('input', function () {
      const digitos = input.value.replace(/\D/g, '');
      const valor = digitos ? parseInt(digitos, 10) / 100 : 0;
      input.value = digitos ? formatarMoeda(valor) : '';
    });
  }

  const campoSalario = document.getElementById('crSalario');
  const campoFgts = document.getElementById('crFgts');
  aplicarMascaraMoeda(campoSalario);
  aplicarMascaraMoeda(campoFgts);

  // ==========================================================
  // 2) UTILITÁRIOS DE DATA
  // ==========================================================

  function parseDataInput(valor) {
    // input[type=date] retorna "AAAA-MM-DD"; criamos a data em horário local (meio-dia)
    // para evitar problemas de fuso horário na contagem de dias.
    const [ano, mes, dia] = valor.split('-').map(Number);
    return new Date(ano, mes - 1, dia, 12, 0, 0);
  }

  // Conta quantos meses, dentro do intervalo [inicio, fim], tiveram
  // 15 dias ou mais trabalhados (regra do "avo" da CLT para 13º e férias).
  function contarAvos(inicio, fim) {
    let meses = 0;
    let cursor = new Date(inicio);
    while (cursor <= fim) {
      const ano = cursor.getFullYear();
      const mes = cursor.getMonth();
      const inicioMes = new Date(ano, mes, 1, 12);
      const fimMes = new Date(ano, mes + 1, 0, 12);
      const inicioContagem = cursor > inicioMes ? cursor : inicioMes;
      const fimContagem = fim < fimMes ? fim : fimMes;
      const dias = Math.round((fimContagem - inicioContagem) / 86400000) + 1;
      if (dias >= 15) meses++;
      cursor = new Date(ano, mes + 1, 1, 12);
    }
    return Math.min(meses, 12);
  }

  // Retorna a data do último "aniversário" de admissão (início do período
  // aquisitivo atual de férias) igual ou anterior à data de demissão.
  function ultimoAniversarioAdmissao(admissao, demissao) {
    let aniversario = new Date(demissao.getFullYear(), admissao.getMonth(), admissao.getDate(), 12);
    if (aniversario > demissao) aniversario.setFullYear(aniversario.getFullYear() - 1);
    if (aniversario < admissao) aniversario = new Date(admissao);
    return aniversario;
  }

  // Anos completos de contrato (usado para calcular dias de aviso prévio)
  function anosCompletos(admissao, demissao) {
    let anos = demissao.getFullYear() - admissao.getFullYear();
    const diffMes = demissao.getMonth() - admissao.getMonth();
    if (diffMes < 0 || (diffMes === 0 && demissao.getDate() < admissao.getDate())) anos--;
    return Math.max(anos, 0);
  }

  // Total aproximado de meses trabalhados (para estimativa de FGTS)
  function totalMesesTrabalhados(admissao, demissao) {
    let meses = (demissao.getFullYear() - admissao.getFullYear()) * 12 +
                (demissao.getMonth() - admissao.getMonth());
    if (demissao.getDate() >= admissao.getDate()) meses++;
    return Math.max(meses, 0);
  }

  // ==========================================================
  // 3) TABELAS DE DESCONTO (ATUALIZAR ANUALMENTE)
  //    Substitua os valores abaixo pelas tabelas oficiais vigentes
  //    divulgadas pelo Governo Federal / Receita Federal a cada ano.
  // ==========================================================

  // --- Tabela progressiva do INSS (referência 2025) ---
  const FAIXAS_INSS = [
    { limite: 1518.00, aliquota: 0.075 },
    { limite: 2793.88, aliquota: 0.09 },
    { limite: 4190.83, aliquota: 0.12 },
    { limite: 8157.41, aliquota: 0.14 }
  ];

  function calcularINSS(baseCalculo) {
    if (baseCalculo <= 0) return 0;
    let inss = 0;
    let limiteAnterior = 0;
    for (let i = 0; i < FAIXAS_INSS.length; i++) {
      const faixa = FAIXAS_INSS[i];
      if (baseCalculo > faixa.limite) {
        inss += (faixa.limite - limiteAnterior) * faixa.aliquota;
        limiteAnterior = faixa.limite;
      } else {
        inss += (baseCalculo - limiteAnterior) * faixa.aliquota;
        return arredondar(inss);
      }
    }
    // Base acima do teto: contribuição limitada ao valor máximo (teto do INSS)
    return arredondar(inss);
  }

  // --- Tabela progressiva do IRRF (referência 2024/2025) ---
  const DEDUCAO_POR_DEPENDENTE = 189.59;
  const FAIXAS_IRRF = [
    { limite: 2259.20, aliquota: 0,     deducao: 0 },
    { limite: 2826.65, aliquota: 0.075, deducao: 169.44 },
    { limite: 3751.05, aliquota: 0.15,  deducao: 381.44 },
    { limite: 4664.68, aliquota: 0.225, deducao: 662.77 },
    { limite: Infinity, aliquota: 0.275, deducao: 896.00 }
  ];

  function calcularIRRF(rendimentoBruto, inssDoRendimento, dependentes) {
    const baseCalculo = rendimentoBruto - inssDoRendimento - (DEDUCAO_POR_DEPENDENTE * dependentes);
    if (baseCalculo <= 0) return 0;
    for (let i = 0; i < FAIXAS_IRRF.length; i++) {
      const faixa = FAIXAS_IRRF[i];
      if (baseCalculo <= faixa.limite) {
        const imposto = (baseCalculo * faixa.aliquota) - faixa.deducao;
        return arredondar(Math.max(imposto, 0));
      }
    }
    return 0;
  }

  function arredondar(valor) {
    return Math.round(valor * 100) / 100;
  }

  // ==========================================================
  // 4) LÓGICA PRINCIPAL DE CÁLCULO DA RESCISÃO
  // ==========================================================

  const form = document.getElementById('crForm');
  const painelErro = document.getElementById('crError');
  const painelResultado = document.getElementById('crResultado');

  form.addEventListener('submit', function (evento) {
    evento.preventDefault();
    painelErro.hidden = true;

    try {
      calcularRescisao();
    } catch (erro) {
      painelErro.textContent = erro.message;
      painelErro.hidden = false;
      painelResultado.hidden = true;
    }
  });

  form.addEventListener('reset', function () {
    painelResultado.hidden = true;
    painelErro.hidden = true;
  });

  function calcularRescisao() {
    // ---- Leitura das entradas ----
    const salario = paraNumero(campoSalario.value);
    const dependentes = parseInt(document.getElementById('crDependentes').value || '0', 10);
    const valAdmissao = document.getElementById('crAdmissao').value;
    const valDemissao = document.getElementById('crDemissao').value;
    const motivo = document.getElementById('crMotivo').value;
    const aviso = document.getElementById('crAviso').value;
    const temFeriasVencidas = document.getElementById('crFeriasVencidas').value === 'sim';
    const fgtsInformado = paraNumero(campoFgts.value);

    if (!salario || salario <= 0) throw new Error('Informe um salário bruto válido.');
    if (!valAdmissao || !valDemissao) throw new Error('Informe as datas de admissão e demissão.');

    const admissao = parseDataInput(valAdmissao);
    const demissao = parseDataInput(valDemissao);
    if (demissao <= admissao) throw new Error('A data de demissão deve ser posterior à data de admissão.');

    // ---- Dias trabalhados no mês da rescisão (Saldo de Salário) ----
    let diasSaldo;
    if (admissao.getFullYear() === demissao.getFullYear() && admissao.getMonth() === demissao.getMonth()) {
      diasSaldo = demissao.getDate() - admissao.getDate() + 1;
    } else {
      diasSaldo = demissao.getDate();
    }
    const saldoSalario = arredondar((salario / 30) * diasSaldo);

    // ---- Projeção do aviso prévio indenizado (regra simplificada: +1 mês
    // no cômputo de 13º e férias quando o aviso não é trabalhado) ----
    const avisoNaoTrabalhado = (aviso === 'indenizado' || aviso === 'dispensado');
    const projetaAviso = avisoNaoTrabalhado && motivo !== 'justa_causa' && motivo !== 'pedido_demissao';
    const mesesProjecao = projetaAviso ? 1 : 0;

    // ---- Dias de aviso prévio (30 dias + 3 por ano completo, máx. 90) ----
    const anos = anosCompletos(admissao, demissao);
    const diasAvisoPrevio = Math.min(30 + (3 * anos), 90);

    // ---- Valor do aviso prévio indenizado (verba adicional) ----
    let valorAvisoIndenizado = 0;
    let descontoAvisoNaoCumprido = 0;

    if (motivo === 'sem_justa_causa' && avisoNaoTrabalhado) {
      valorAvisoIndenizado = arredondar((salario / 30) * diasAvisoPrevio);
    } else if (motivo === 'acordo' && avisoNaoTrabalhado) {
      // Comum acordo (Art. 484-A CLT): aviso prévio indenizado pago pela metade
      valorAvisoIndenizado = arredondar(((salario / 30) * diasAvisoPrevio) * 0.5);
    } else if (motivo === 'pedido_demissao' && aviso === 'indenizado') {
      // Empregado não cumpriu o aviso e a empresa não dispensou a exigência:
      // desconto de 30 dias sobre o saldo devido ao empregado.
      descontoAvisoNaoCumprido = arredondar((salario / 30) * 30);
    }

    // ---- 13º Salário Proporcional ----
    let valor13 = 0;
    let meses13 = 0;
    if (motivo !== 'justa_causa') {
      const inicioAno = new Date(demissao.getFullYear(), 0, 1, 12);
      const inicioPeriodo13 = admissao > inicioAno ? admissao : inicioAno;
      meses13 = Math.min(contarAvos(inicioPeriodo13, demissao) + mesesProjecao, 12);
      valor13 = arredondar((salario / 12) * meses13);
    }

    // ---- Férias Proporcionais + 1/3 ----
    let valorFeriasProp = 0;
    let umTercoFeriasProp = 0;
    let mesesFerias = 0;
    if (motivo !== 'justa_causa') {
      const inicioPeriodoFerias = ultimoAniversarioAdmissao(admissao, demissao);
      mesesFerias = Math.min(contarAvos(inicioPeriodoFerias, demissao) + mesesProjecao, 12);
      valorFeriasProp = arredondar((salario / 12) * mesesFerias);
      umTercoFeriasProp = arredondar(valorFeriasProp / 3);
    }

    // ---- Férias Vencidas + 1/3 (direito já adquirido; devido mesmo em justa causa) ----
    let valorFeriasVencidas = 0;
    let umTercoFeriasVencidas = 0;
    if (temFeriasVencidas) {
      valorFeriasVencidas = arredondar(salario);
      umTercoFeriasVencidas = arredondar(salario / 3);
    }

    // ---- Descontos: INSS e IRRF (incidem separadamente sobre saldo de
    // salário e sobre 13º; férias indenizadas e aviso indenizado não sofrem
    // desconto de INSS/IRRF por serem verbas indenizatórias) ----
    const inssSaldo = calcularINSS(saldoSalario);
    const inss13 = calcularINSS(valor13);
    const irrfSaldo = calcularIRRF(saldoSalario, inssSaldo, dependentes);
    const irrf13 = calcularIRRF(valor13, inss13, dependentes);

    // ---- Montagem dos Proventos ----
    const proventos = [];
    proventos.push(['Saldo de Salário (' + diasSaldo + ' dias)', saldoSalario]);
    if (valor13 > 0) proventos.push(['13º Salário Proporcional (' + meses13 + '/12 avos)', valor13]);
    if (valorFeriasProp > 0) proventos.push(['Férias Proporcionais (' + mesesFerias + '/12 avos)', valorFeriasProp]);
    if (umTercoFeriasProp > 0) proventos.push(['1/3 Constitucional sobre Férias Proporcionais', umTercoFeriasProp]);
    if (valorFeriasVencidas > 0) proventos.push(['Férias Vencidas (integral)', valorFeriasVencidas]);
    if (umTercoFeriasVencidas > 0) proventos.push(['1/3 Constitucional sobre Férias Vencidas', umTercoFeriasVencidas]);
    if (valorAvisoIndenizado > 0) proventos.push(['Aviso Prévio Indenizado (' + diasAvisoPrevio + ' dias)', valorAvisoIndenizado]);

    const totalProventos = arredondar(proventos.reduce((soma, item) => soma + item[1], 0));

    // ---- Montagem dos Descontos ----
    const descontos = [];
    if (inssSaldo > 0) descontos.push(['INSS sobre Saldo de Salário', inssSaldo]);
    if (inss13 > 0) descontos.push(['INSS sobre 13º Salário', inss13]);
    if (irrfSaldo > 0) descontos.push(['IRRF sobre Saldo de Salário', irrfSaldo]);
    if (irrf13 > 0) descontos.push(['IRRF sobre 13º Salário', irrf13]);
    if (descontoAvisoNaoCumprido > 0) descontos.push(['Aviso Prévio Não Cumprido (desconto)', descontoAvisoNaoCumprido]);

    const totalDescontos = arredondar(descontos.reduce((soma, item) => soma + item[1], 0));
    const totalLiquido = arredondar(totalProventos - totalDescontos);

    // ---- FGTS e Multa Rescisória ----
    const mesesTrabalhados = totalMesesTrabalhados(admissao, demissao);
    // Estimativa simplificada: 8% do salário por mês trabalhado, caso o
    // usuário não informe o saldo real extraído do extrato do FGTS.
    const fgtsBase = fgtsInformado > 0 ? fgtsInformado : arredondar(salario * 0.08 * mesesTrabalhados);

    let multaFgts = 0;
    let percentualSaque = 0;
    let textoSaque = '';

    if (motivo === 'sem_justa_causa') {
      multaFgts = arredondar(fgtsBase * 0.40);
      percentualSaque = 100;
      textoSaque = 'Demissão sem justa causa: o saldo total do FGTS e a multa de 40% podem ser sacados.';
    } else if (motivo === 'acordo') {
      multaFgts = arredondar(fgtsBase * 0.20);
      percentualSaque = 80;
      textoSaque = 'Comum acordo (Art. 484-A): é possível sacar até 80% do saldo do FGTS, além da multa de 20%.';
    } else if (motivo === 'pedido_demissao') {
      multaFgts = 0;
      percentualSaque = 0;
      textoSaque = 'Pedido de demissão: não há multa rescisória e o saldo do FGTS permanece na conta (sem direito a saque nem ao seguro-desemprego).';
    } else {
      multaFgts = 0;
      percentualSaque = 0;
      textoSaque = 'Justa causa: não há multa rescisória e o saldo do FGTS permanece na conta, sem direito a saque.';
    }

    const totalDisponivelFgts = arredondar((fgtsBase * (percentualSaque / 100)) + multaFgts);

    // ---- Renderização ----
    renderizarResultado({
      admissao, demissao, motivo, aviso,
      proventos, descontos, totalProventos, totalDescontos, totalLiquido,
      fgtsBase, multaFgts, totalDisponivelFgts, textoSaque, fgtsInformado
    });
  }

  // ==========================================================
  // 5) RENDERIZAÇÃO DO PAINEL DE RESULTADOS
  // ==========================================================

  const NOMES_MOTIVO = {
    sem_justa_causa: 'Demissão sem justa causa',
    pedido_demissao: 'Pedido de demissão',
    acordo: 'Comum acordo',
    justa_causa: 'Justa causa'
  };

  function renderizarResultado(dados) {
    const formatoData = (d) => d.toLocaleDateString('pt-BR');

    document.getElementById('crResumoPeriodo').textContent =
      'Período: ' + formatoData(dados.admissao) + ' a ' + formatoData(dados.demissao) +
      '  •  Motivo: ' + NOMES_MOTIVO[dados.motivo];

    preencherTabela('crTabelaProventos', dados.proventos);
    preencherTabela('crTabelaDescontos', dados.descontos);

    document.getElementById('crTotalProventos').textContent = formatarMoeda(dados.totalProventos);
    document.getElementById('crTotalDescontos').textContent = formatarMoeda(dados.totalDescontos);
    document.getElementById('crTotalLiquido').textContent = formatarMoeda(dados.totalLiquido);

    document.getElementById('crFgtsSaldo').textContent = formatarMoeda(dados.fgtsBase) +
      (dados.fgtsInformado > 0 ? '' : ' (estimado)');
    document.getElementById('crFgtsMulta').textContent = formatarMoeda(dados.multaFgts);
    document.getElementById('crFgtsTotal').textContent = formatarMoeda(dados.totalDisponivelFgts);
    document.getElementById('crFgtsSaque').textContent = dados.textoSaque;

    painelResultado.hidden = false;
    painelResultado.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function preencherTabela(idTabela, itens) {
    const tabela = document.getElementById(idTabela);
    tabela.innerHTML = '';
    if (itens.length === 0) {
      const linha = document.createElement('tr');
      linha.innerHTML = '<td colspan="2">Nenhum valor aplicável</td>';
      tabela.appendChild(linha);
      return;
    }
    itens.forEach(function (item) {
      const linha = document.createElement('tr');
      const tdDescricao = document.createElement('td');
      tdDescricao.textContent = item[0];
      const tdValor = document.createElement('td');
      tdValor.textContent = formatarMoeda(item[1]);
      linha.appendChild(tdDescricao);
      linha.appendChild(tdValor);
      tabela.appendChild(linha);
    });
  }

})();
</script>






