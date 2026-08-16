<!-- ============================================================
     CALCULADORA DE HORAS EXTRAS COM DSR (Descanso Semanal Remunerado)
     Bloco único HTML + CSS + JS (Vanilla JS, sem dependências)
     Pronto para colar em um elemento "Incorporar Código" na Hostinger.
     ============================================================ -->
<div id="calc-he-app">

  <div class="he-card">
    <div class="he-header">
      <h2>Calculadora de Horas Extras com DSR</h2>
      <p>Descubra quanto suas horas extras valem, já com o reflexo no descanso semanal remunerado</p>
    </div>

    <form id="heForm" class="he-form" novalidate>

      <div class="he-grid">

        <div class="he-field">
          <label for="heSalario">Salário Bruto</label>
          <input type="text" id="heSalario" inputmode="numeric" placeholder="R$ 0,00" required>
        </div>

        <div class="he-field">
          <label for="heJornada">Jornada Mensal de Trabalho</label>
          <select id="heJornada">
            <option value="220">220 horas</option>
            <option value="200">200 horas</option>
            <option value="180">180 horas</option>
            <option value="custom">Outra (digitar)</option>
          </select>
        </div>

        <div class="he-field" id="heJornadaCustomWrap" hidden>
          <label for="heJornadaCustom">Jornada Mensal Personalizada (h)</label>
          <input type="number" id="heJornadaCustom" min="1" step="0.01" placeholder="Ex: 240">
        </div>

        <div class="he-field">
          <label>Horas Extras Feitas no Mês</label>
          <div class="he-duplo">
            <input type="number" id="heHoras" min="0" step="1" placeholder="Horas" aria-label="Horas extras - horas">
            <input type="number" id="heMinutos" min="0" max="59" step="1" placeholder="Minutos" aria-label="Horas extras - minutos">
          </div>
        </div>

        <div class="he-field">
          <label for="heTipo">Tipo de Hora Extra</label>
          <select id="heTipo">
            <option value="50">Dias úteis / Sábado (50%)</option>
            <option value="100">Domingos e Feriados (100%)</option>
            <option value="custom">Personalizado (convenção coletiva)</option>
          </select>
        </div>

        <div class="he-field" id="heTipoCustomWrap" hidden>
          <label for="heTipoCustom">Percentual do Adicional (%)</label>
          <input type="number" id="heTipoCustom" min="0" step="0.01" placeholder="Ex: 70">
        </div>

        <div class="he-field">
          <label for="heDiasUteis">Dias Úteis no Mês <span class="he-optional">(p/ cálculo do DSR)</span></label>
          <input type="number" id="heDiasUteis" min="1" step="1" placeholder="Ex: 26" value="26">
        </div>

        <div class="he-field">
          <label for="heDomFeriados">Domingos e Feriados no Mês <span class="he-optional">(p/ cálculo do DSR)</span></label>
          <input type="number" id="heDomFeriados" min="0" step="1" placeholder="Ex: 5" value="5">
        </div>

      </div>

      <div class="he-actions">
        <button type="submit" class="he-btn-primary">Calcular Horas Extras</button>
        <button type="reset" class="he-btn-secondary">Limpar</button>
      </div>

      <p id="heError" class="he-error" hidden></p>
    </form>

    <!-- PAINEL DE RESULTADOS -->
    <div id="heResultado" class="he-resultado" hidden>

      <h3 class="he-resultado-titulo">Resultado do Cálculo</h3>
      <p id="heResumo" class="he-resumo"></p>

      <div class="he-lista">
        <div class="he-linha">
          <span>Valor da sua hora normal</span>
          <strong id="heValorHoraNormal">R$ 0,00</strong>
        </div>
        <div class="he-linha">
          <span id="heLabelHoraExtra">Valor de cada hora extra (com adicional)</span>
          <strong id="heValorHoraExtra">R$ 0,00</strong>
        </div>
        <div class="he-linha">
          <span id="heLabelTotalHoras">Valor total das horas extras</span>
          <strong id="heValorTotalHoras">R$ 0,00</strong>
        </div>
        <div class="he-linha">
          <span>Reflexo no DSR estimado</span>
          <strong id="heValorDsr">R$ 0,00</strong>
        </div>
      </div>

      <div class="he-total-geral">
        <span>Ganho Total Bruto (Horas + DSR)</span>
        <strong id="heTotalGeral">R$ 0,00</strong>
      </div>

      <p class="he-disclaimer">
        * Simulação com finalidade informativa. O DSR é calculado de forma proporcional
        (valor total das horas extras dividido pelos dias úteis informados, multiplicado pelos
        domingos/feriados do mês). Percentuais e regras podem variar conforme convenção ou
        acordo coletivo da categoria — ajuste o percentual do adicional se necessário.
      </p>
    </div>

  </div>
</div>

<style>
  /* ============================================================
     CSS - Paleta: azul institucional / cinza-claro / verde (destaques)
     ============================================================ */
  #calc-he-app {
    --he-azul-escuro: #0b2545;
    --he-azul-claro: #1d4e89;
    --he-cinza-fundo: #f2f4f7;
    --he-cinza-borda: #dbe1e8;
    --he-cinza-texto: #4a5568;
    --he-verde: #1e7e4c;
    --he-verde-fundo: #e6f6ee;
    --he-vermelho: #b3261e;
    --he-vermelho-fundo: #fdecea;
    --he-radius: 10px;
    font-family: 'Segoe UI', Roboto, Arial, sans-serif;
    box-sizing: border-box;
    max-width: 860px;
    margin: 0 auto;
  }

  #calc-he-app *, #calc-he-app *::before, #calc-he-app *::after {
    box-sizing: border-box;
  }

  #calc-he-app .he-card {
    background: #ffffff;
    border-radius: var(--he-radius);
    box-shadow: 0 4px 24px rgba(11, 37, 69, 0.10);
    overflow: hidden;
    border: 1px solid var(--he-cinza-borda);
  }

  #calc-he-app .he-header {
    background: linear-gradient(135deg, var(--he-azul-escuro), var(--he-azul-claro));
    color: #ffffff;
    padding: 26px 24px;
    text-align: center;
  }

  #calc-he-app .he-header h2 {
    margin: 0 0 6px;
    font-size: 1.5rem;
    font-weight: 700;
  }

  #calc-he-app .he-header p {
    margin: 0;
    font-size: 0.92rem;
    opacity: 0.85;
  }

  #calc-he-app .he-form {
    padding: 24px;
    background: var(--he-cinza-fundo);
  }

  #calc-he-app .he-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }

  #calc-he-app .he-field {
    display: flex;
    flex-direction: column;
  }

  #calc-he-app .he-field label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--he-azul-escuro);
    margin-bottom: 6px;
  }

  #calc-he-app .he-optional {
    font-weight: 400;
    color: var(--he-cinza-texto);
    font-size: 0.75rem;
  }

  #calc-he-app input,
  #calc-he-app select {
    padding: 11px 12px;
    border: 1px solid var(--he-cinza-borda);
    border-radius: 8px;
    font-size: 0.95rem;
    background: #ffffff;
    color: #1a202c;
    width: 100%;
    transition: border-color .15s, box-shadow .15s;
  }

  #calc-he-app input:focus,
  #calc-he-app select:focus {
    outline: none;
    border-color: var(--he-azul-claro);
    box-shadow: 0 0 0 3px rgba(29, 78, 137, 0.15);
  }

  #calc-he-app .he-duplo {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }

  #calc-he-app .he-actions {
    display: flex;
    gap: 12px;
    margin-top: 22px;
    flex-wrap: wrap;
  }

  #calc-he-app .he-btn-primary,
  #calc-he-app .he-btn-secondary {
    border: none;
    border-radius: 8px;
    padding: 13px 22px;
    font-size: 0.95rem;
    font-weight: 700;
    cursor: pointer;
    transition: transform .1s, opacity .15s;
  }

  #calc-he-app .he-btn-primary {
    background: var(--he-azul-escuro);
    color: #fff;
    flex: 1 1 220px;
  }

  #calc-he-app .he-btn-primary:hover { opacity: 0.92; }
  #calc-he-app .he-btn-primary:active { transform: scale(0.99); }

  #calc-he-app .he-btn-secondary {
    background: #ffffff;
    color: var(--he-azul-escuro);
    border: 1px solid var(--he-cinza-borda);
  }

  #calc-he-app .he-btn-secondary:hover { background: #eef1f5; }

  #calc-he-app .he-error {
    margin-top: 14px;
    background: var(--he-vermelho-fundo);
    color: var(--he-vermelho);
    border: 1px solid #f3c1bd;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 0.88rem;
  }

  /* ---------- Painel de Resultados ---------- */
  #calc-he-app .he-resultado {
    padding: 24px;
    border-top: 3px solid var(--he-azul-escuro);
    background: #ffffff;
  }

  #calc-he-app .he-resultado-titulo {
    margin: 0 0 4px;
    color: var(--he-azul-escuro);
    font-size: 1.2rem;
  }

  #calc-he-app .he-resumo {
    margin: 0 0 18px;
    font-size: 0.85rem;
    color: var(--he-cinza-texto);
  }

  #calc-he-app .he-lista {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  #calc-he-app .he-linha {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 4px;
    border-bottom: 1px dashed var(--he-cinza-borda);
  }

  #calc-he-app .he-linha span {
    font-size: 0.9rem;
    color: #2d3748;
  }

  #calc-he-app .he-linha strong {
    font-size: 1rem;
    color: var(--he-azul-escuro);
    white-space: nowrap;
  }

  #calc-he-app .he-total-geral {
    margin-top: 20px;
    background: var(--he-verde-fundo);
    border: 1px solid #bfe6cf;
    border-radius: var(--he-radius);
    padding: 18px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 8px;
  }

  #calc-he-app .he-total-geral span {
    font-size: 1rem;
    font-weight: 600;
    color: var(--he-azul-escuro);
  }

  #calc-he-app .he-total-geral strong {
    font-size: 1.7rem;
    color: var(--he-verde);
  }

  #calc-he-app .he-disclaimer {
    margin-top: 20px;
    font-size: 0.75rem;
    color: var(--he-cinza-texto);
    line-height: 1.5;
  }

  /* ---------- Responsividade ---------- */
  @media (max-width: 640px) {
    #calc-he-app .he-grid { grid-template-columns: 1fr; }
    #calc-he-app .he-header h2 { font-size: 1.25rem; }
    #calc-he-app .he-total-geral strong { font-size: 1.4rem; }
  }
</style>

<script>
(function () {
  'use strict';

  // ==========================================================
  // 1) MÁSCARA DE MOEDA (R$) - aplicada ao campo de salário
  // ==========================================================

  function formatarMoeda(valor) {
    if (isNaN(valor)) valor = 0;
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
  }

  function paraNumero(textoMascarado) {
    if (!textoMascarado) return 0;
    const somenteDigitos = textoMascarado.replace(/\D/g, '');
    if (!somenteDigitos) return 0;
    return parseInt(somenteDigitos, 10) / 100;
  }

  const campoSalario = document.getElementById('heSalario');
  campoSalario.addEventListener('input', function () {
    const digitos = campoSalario.value.replace(/\D/g, '');
    const valor = digitos ? parseInt(digitos, 10) / 100 : 0;
    campoSalario.value = digitos ? formatarMoeda(valor) : '';
  });

  // ==========================================================
  // 2) CAMPOS CONDICIONAIS (jornada e percentual personalizados)
  // ==========================================================

  const selectJornada = document.getElementById('heJornada');
  const wrapJornadaCustom = document.getElementById('heJornadaCustomWrap');
  const campoJornadaCustom = document.getElementById('heJornadaCustom');

  selectJornada.addEventListener('change', function () {
    const ehCustom = selectJornada.value === 'custom';
    wrapJornadaCustom.hidden = !ehCustom;
    campoJornadaCustom.required = ehCustom;
  });

  const selectTipo = document.getElementById('heTipo');
  const wrapTipoCustom = document.getElementById('heTipoCustomWrap');
  const campoTipoCustom = document.getElementById('heTipoCustom');

  selectTipo.addEventListener('change', function () {
    const ehCustom = selectTipo.value === 'custom';
    wrapTipoCustom.hidden = !ehCustom;
    campoTipoCustom.required = ehCustom;
  });

  // ==========================================================
  // 3) LÓGICA PRINCIPAL DE CÁLCULO
  // ==========================================================

  const form = document.getElementById('heForm');
  const painelErro = document.getElementById('heError');
  const painelResultado = document.getElementById('heResultado');

  form.addEventListener('submit', function (evento) {
    evento.preventDefault();
    painelErro.hidden = true;

    try {
      calcularHorasExtras();
    } catch (erro) {
      painelErro.textContent = erro.message;
      painelErro.hidden = false;
      painelResultado.hidden = true;
    }
  });

  form.addEventListener('reset', function () {
    painelResultado.hidden = true;
    painelErro.hidden = true;
    wrapJornadaCustom.hidden = true;
    wrapTipoCustom.hidden = true;
  });

  function calcularHorasExtras() {
    // ---- Leitura das entradas ----
    const salario = paraNumero(campoSalario.value);

    const jornada = selectJornada.value === 'custom'
      ? parseFloat(campoJornadaCustom.value)
      : parseFloat(selectJornada.value);

    const horas = parseFloat(document.getElementById('heHoras').value || '0');
    const minutos = parseFloat(document.getElementById('heMinutos').value || '0');
    // Converte horas+minutos em número decimal (ex: 2h30min = 2.5)
    const qtdHorasExtras = horas + (minutos / 60);

    const percentualAdicional = selectTipo.value === 'custom'
      ? parseFloat(campoTipoCustom.value)
      : parseFloat(selectTipo.value);

    const diasUteis = parseFloat(document.getElementById('heDiasUteis').value || '0');
    const domFeriados = parseFloat(document.getElementById('heDomFeriados').value || '0');

    // ---- Validações básicas ----
    if (!salario || salario <= 0) throw new Error('Informe um salário bruto válido.');
    if (!jornada || jornada <= 0) throw new Error('Informe uma jornada mensal válida.');
    if (qtdHorasExtras <= 0) throw new Error('Informe a quantidade de horas extras feitas no mês.');
    if (isNaN(percentualAdicional) || percentualAdicional < 0) throw new Error('Informe um percentual de adicional válido.');

    // ---- Valor da hora comum ----
    const valorHoraComum = arredondar(salario / jornada);

    // ---- Valor da hora extra já com o adicional aplicado ----
    const valorHoraExtra = arredondar(valorHoraComum * (1 + percentualAdicional / 100));

    // ---- Valor total das horas extras do mês ----
    const valorTotalHoras = arredondar(valorHoraExtra * qtdHorasExtras);

    // ---- Reflexo do DSR sobre as horas extras ----
    // Regra: o valor total de horas extras é "diluído" pelos dias úteis do mês
    // e multiplicado pelos domingos/feriados, pois a lei garante que as horas
    // extras habituais também repercutem no dia de descanso remunerado.
    let valorDsr = 0;
    if (diasUteis > 0) {
      valorDsr = arredondar((valorTotalHoras / diasUteis) * domFeriados);
    }

    // ---- Ganho total bruto (horas extras + reflexo do DSR) ----
    const totalGeral = arredondar(valorTotalHoras + valorDsr);

    renderizarResultado({
      jornada, qtdHorasExtras, percentualAdicional,
      valorHoraComum, valorHoraExtra, valorTotalHoras, valorDsr, totalGeral
    });
  }

  function arredondar(valor) {
    return Math.round(valor * 100) / 100;
  }

  // ==========================================================
  // 4) RENDERIZAÇÃO DO PAINEL DE RESULTADOS
  // ==========================================================

  function formatarHoras(decimal) {
    const h = Math.floor(decimal);
    const m = Math.round((decimal - h) * 60);
    return h + 'h' + (m > 0 ? ' ' + m + 'min' : '');
  }

  function renderizarResultado(dados) {
    document.getElementById('heResumo').textContent =
      'Jornada mensal de ' + dados.jornada + 'h  •  ' +
      formatarHoras(dados.qtdHorasExtras) + ' extras  •  Adicional de ' + dados.percentualAdicional + '%';

    document.getElementById('heValorHoraNormal').textContent = formatarMoeda(dados.valorHoraComum);
    document.getElementById('heValorHoraExtra').textContent = formatarMoeda(dados.valorHoraExtra);
    document.getElementById('heValorTotalHoras').textContent = formatarMoeda(dados.valorTotalHoras);
    document.getElementById('heValorDsr').textContent = formatarMoeda(dados.valorDsr);
    document.getElementById('heTotalGeral').textContent = formatarMoeda(dados.totalGeral);

    document.getElementById('heLabelHoraExtra').textContent =
      'Valor de cada hora extra (com adicional de ' + dados.percentualAdicional + '%)';
    document.getElementById('heLabelTotalHoras').textContent =
      'Valor total das horas extras (' + formatarHoras(dados.qtdHorasExtras) + ')';

    painelResultado.hidden = false;
    painelResultado.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

})();
</script>




