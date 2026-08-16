<!-- ============================================================
     SIMULADORES FINANCEIROS — bloco único para "HTML Personalizado" (Hostinger)
     Cole este código inteiro dentro do widget de HTML Personalizado.
     ============================================================ -->
<div id="sf-root">

  <style>
    #sf-root, #sf-root * { box-sizing: border-box; }

    #sf-root {
      --sf-navy: #0f2438;
      --sf-navy-2: #16324a;
      --sf-blue: #1d5f8a;
      --sf-green: #1f9d6b;
      --sf-green-dark: #167a53;
      --sf-bg: #f4f7f9;
      --sf-card: #ffffff;
      --sf-border: #e2e8ee;
      --sf-text: #1c2b36;
      --sf-text-soft: #5b6b76;
      --sf-danger: #c0442b;
      --sf-radius: 16px;
      --sf-shadow: 0 4px 18px rgba(15, 36, 56, 0.08);
      --sf-shadow-hover: 0 10px 30px rgba(15, 36, 56, 0.14);
      font-family: 'Roboto', Arial, Helvetica, sans-serif;
      color: var(--sf-text);
      background: var(--sf-bg);
      padding: 40px 16px 60px;
      -webkit-font-smoothing: antialiased;
    }

    #sf-root a { color: inherit; }

    .sf-wrap {
      max-width: 1080px;
      margin: 0 auto;
    }

    .sf-header {
      text-align: center;
      margin-bottom: 34px;
    }

    .sf-eyebrow {
      display: inline-block;
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--sf-green-dark);
      background: rgba(31, 157, 107, 0.1);
      padding: 6px 14px;
      border-radius: 999px;
      margin-bottom: 14px;
    }

    .sf-header h2 {
      font-size: clamp(26px, 4vw, 38px);
      font-weight: 800;
      color: var(--sf-navy);
      margin: 0 0 10px;
      letter-spacing: -0.02em;
    }

    .sf-header p {
      color: var(--sf-text-soft);
      font-size: 16px;
      max-width: 620px;
      margin: 0 auto;
      line-height: 1.55;
    }

    /* ---------- TABS ---------- */
    .sf-tabs {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      background: var(--sf-card);
      padding: 8px;
      border-radius: 14px;
      box-shadow: var(--sf-shadow);
      margin-bottom: 28px;
      border: 1px solid var(--sf-border);
    }

    .sf-tab-btn {
      appearance: none;
      border: none;
      background: transparent;
      cursor: pointer;
      padding: 12px 10px;
      border-radius: 10px;
      font-family: inherit;
      font-size: 14px;
      font-weight: 700;
      color: var(--sf-text-soft);
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      line-height: 1.2;
      text-align: center;
    }

    .sf-tab-btn:hover { color: var(--sf-navy); background: rgba(29, 95, 138, 0.06); }

    .sf-tab-btn.active {
      background: linear-gradient(135deg, var(--sf-navy) 0%, var(--sf-blue) 100%);
      color: #fff;
      box-shadow: 0 6px 16px rgba(22, 50, 74, 0.28);
    }

    .sf-tab-btn .sf-ic { font-size: 17px; }

    /* ---------- PANELS / CARD ---------- */
    .sf-panel { display: none; animation: sfFade 0.35s ease; }
    .sf-panel.active { display: block; }

    @keyframes sfFade {
      from { opacity: 0; transform: translateY(6px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .sf-card {
      background: var(--sf-card);
      border-radius: var(--sf-radius);
      border: 1px solid var(--sf-border);
      box-shadow: var(--sf-shadow);
      padding: clamp(20px, 4vw, 36px);
    }

    .sf-card-title {
      font-size: 21px;
      font-weight: 800;
      color: var(--sf-navy);
      margin: 0 0 4px;
    }

    .sf-card-sub {
      color: var(--sf-text-soft);
      font-size: 14.5px;
      margin: 0 0 26px;
    }

    .sf-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 18px 20px;
      margin-bottom: 8px;
    }

    .sf-field { display: flex; flex-direction: column; gap: 7px; }
    .sf-field.full { grid-column: 1 / -1; }

    .sf-field label {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--sf-navy-2);
    }

    .sf-input-group {
      position: relative;
      display: flex;
      align-items: stretch;
    }

    .sf-input-group .sf-prefix {
      display: flex;
      align-items: center;
      padding: 0 12px;
      background: #eef3f6;
      border: 1.5px solid var(--sf-border);
      border-right: none;
      border-radius: 10px 0 0 10px;
      color: var(--sf-text-soft);
      font-weight: 700;
      font-size: 14px;
      white-space: nowrap;
    }

    #sf-root input[type="number"],
    #sf-root input[type="text"] {
      width: 100%;
      font-family: inherit;
      font-size: 15px;
      font-weight: 600;
      color: var(--sf-text);
      padding: 12px 14px;
      border: 1.5px solid var(--sf-border);
      border-radius: 10px;
      background: #fbfdfe;
      outline: none;
      transition: border-color 0.18s ease, box-shadow 0.18s ease, background 0.18s ease;
    }

    .sf-input-group .sf-prefix + input {
      border-radius: 0 10px 10px 0;
    }

    #sf-root input[type="number"]:focus,
    #sf-root input[type="text"]:focus {
      border-color: var(--sf-blue);
      box-shadow: 0 0 0 4px rgba(29, 95, 138, 0.12);
      background: #fff;
    }

    #sf-root select {
      width: 100%;
      font-family: inherit;
      font-size: 14.5px;
      font-weight: 600;
      color: var(--sf-text);
      padding: 12px 14px;
      border: 1.5px solid var(--sf-border);
      border-radius: 10px;
      background: #fbfdfe;
      outline: none;
      cursor: pointer;
      transition: border-color 0.18s ease, box-shadow 0.18s ease;
    }

    #sf-root select:focus {
      border-color: var(--sf-blue);
      box-shadow: 0 0 0 4px rgba(29, 95, 138, 0.12);
    }

    .sf-period-row {
      display: grid;
      grid-template-columns: 1fr 110px;
      gap: 10px;
    }

    .sf-btn {
      appearance: none;
      border: none;
      cursor: pointer;
      font-family: inherit;
      font-weight: 800;
      font-size: 15.5px;
      color: #fff;
      background: linear-gradient(135deg, var(--sf-green) 0%, var(--sf-green-dark) 100%);
      padding: 14px 26px;
      border-radius: 11px;
      width: 100%;
      margin-top: 18px;
      box-shadow: 0 8px 20px rgba(31, 157, 107, 0.28);
      transition: transform 0.15s ease, box-shadow 0.15s ease, filter 0.15s ease;
      letter-spacing: 0.01em;
    }

    .sf-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 26px rgba(31, 157, 107, 0.36); }
    .sf-btn:active { transform: translateY(0); filter: brightness(0.97); }

    .sf-results {
      margin-top: 26px;
      padding-top: 24px;
      border-top: 1.5px dashed var(--sf-border);
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
    }

    .sf-results.cols-1 { grid-template-columns: 1fr; }
    .sf-results.cols-2 { grid-template-columns: repeat(2, 1fr); }

    .sf-result-box {
      background: linear-gradient(160deg, #f7fafb 0%, #eef4f6 100%);
      border: 1px solid var(--sf-border);
      border-radius: 12px;
      padding: 16px 16px;
      text-align: left;
      transition: box-shadow 0.2s ease;
    }

    .sf-result-box.highlight {
      background: linear-gradient(150deg, var(--sf-navy) 0%, var(--sf-blue) 100%);
      border: none;
      color: #fff;
    }

    .sf-result-box .sf-r-label {
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--sf-text-soft);
      margin-bottom: 6px;
      display: block;
    }

    .sf-result-box.highlight .sf-r-label { color: rgba(255,255,255,0.75); }

    .sf-result-box .sf-r-value {
      font-size: clamp(19px, 2.4vw, 24px);
      font-weight: 800;
      color: var(--sf-navy);
      word-break: break-word;
    }

    .sf-result-box.highlight .sf-r-value { color: #fff; }

    .sf-note {
      margin-top: 16px;
      font-size: 12.5px;
      color: var(--sf-text-soft);
      line-height: 1.5;
      background: #fff8ee;
      border: 1px solid #f1e3c5;
      padding: 10px 14px;
      border-radius: 10px;
    }

    .sf-alert {
      margin-top: 16px;
      font-size: 13.5px;
      font-weight: 700;
      color: var(--sf-danger);
      background: rgba(192, 68, 43, 0.08);
      border: 1px solid rgba(192, 68, 43, 0.25);
      padding: 10px 14px;
      border-radius: 10px;
      display: none;
    }

    .sf-alert.show { display: block; }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 760px) {
      .sf-tabs { grid-template-columns: repeat(2, 1fr); }
      .sf-grid { grid-template-columns: 1fr; }
      .sf-results { grid-template-columns: 1fr !important; }
      .sf-period-row { grid-template-columns: 1fr 100px; }
    }

    @media (max-width: 420px) {
      #sf-root { padding: 26px 10px 40px; }
      .sf-tab-btn { font-size: 12.5px; padding: 10px 6px; }
    }
  </style>

  <div class="sf-wrap">

    <div class="sf-header">
      <span class="sf-eyebrow">Simuladores Financeiros</span>
      <h2>Calcule seu futuro financeiro</h2>
      <p>Ferramentas gratuitas para planejar investimentos, metas de economia e financiamentos com resultados instantâneos.</p>
    </div>

    <div class="sf-tabs" role="tablist">
      <button class="sf-tab-btn active" data-tab="juros-compostos" type="button"><span class="sf-ic">📈</span><span>Juros Compostos</span></button>
      <button class="sf-tab-btn" data-tab="poupanca" type="button"><span class="sf-ic">🎯</span><span>Meta de Poupança</span></button>
      <button class="sf-tab-btn" data-tab="investimentos" type="button"><span class="sf-ic">💰</span><span>Investimentos</span></button>
      <button class="sf-tab-btn" data-tab="financiamento" type="button"><span class="sf-ic">🏠</span><span>Financiamento</span></button>
    </div>

    <!-- ============ 1. JUROS COMPOSTOS ============ -->
    <div class="sf-panel active" id="panel-juros-compostos">
      <div class="sf-card">
        <h2 class="sf-card-title">Calculadora de Juros Compostos</h2>
        <p class="sf-card-sub">Veja quanto seu dinheiro pode render com aportes mensais ao longo do tempo.</p>

        <div class="sf-grid">
          <div class="sf-field">
            <label for="jc-capital">Capital Inicial</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="jc-capital" placeholder="1.000,00" min="0" step="0.01" value="1000">
            </div>
          </div>

          <div class="sf-field">
            <label for="jc-aporte">Aporte Mensal</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="jc-aporte" placeholder="200,00" min="0" step="0.01" value="200">
            </div>
          </div>

          <div class="sf-field">
            <label for="jc-taxa">Taxa de Juros</label>
            <div class="sf-input-group">
              <input type="number" id="jc-taxa" placeholder="1,00" min="0" step="0.01" value="1">
              <span class="sf-prefix" style="border-right:1.5px solid var(--sf-border); border-left:none; border-radius:0 10px 10px 0;">%</span>
            </div>
          </div>

          <div class="sf-field">
            <label>Periodicidade da Taxa</label>
            <select id="jc-taxa-periodo">
              <option value="mes">Ao mês</option>
              <option value="ano">Ao ano</option>
            </select>
          </div>

          <div class="sf-field full">
            <label>Período do Investimento</label>
            <div class="sf-period-row">
              <input type="number" id="jc-periodo" placeholder="12" min="1" step="1" value="12">
              <select id="jc-periodo-unidade">
                <option value="meses">Meses</option>
                <option value="anos">Anos</option>
              </select>
            </div>
          </div>
        </div>

        <button class="sf-btn" onclick="sfCalcJurosCompostos()">Calcular</button>
        <div class="sf-alert" id="jc-alert">Preencha os campos com valores válidos.</div>

        <div class="sf-results cols-3" id="jc-results" style="display:none;">
          <div class="sf-result-box">
            <span class="sf-r-label">Total Investido</span>
            <span class="sf-r-value" id="jc-total-investido">R$ 0,00</span>
          </div>
          <div class="sf-result-box">
            <span class="sf-r-label">Total em Juros</span>
            <span class="sf-r-value" id="jc-total-juros">R$ 0,00</span>
          </div>
          <div class="sf-result-box highlight">
            <span class="sf-r-label">Valor Bruto Total</span>
            <span class="sf-r-value" id="jc-valor-total">R$ 0,00</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ 2. META DE POUPANÇA ============ -->
    <div class="sf-panel" id="panel-poupanca">
      <div class="sf-card">
        <h2 class="sf-card-title">Calculadora de Meta de Poupança</h2>
        <p class="sf-card-sub">Descubra em quantos meses você alcança o valor que deseja juntar.</p>

        <div class="sf-grid">
          <div class="sf-field full">
            <label for="pp-meta">Quanto você quer juntar</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="pp-meta" placeholder="10.000,00" min="0" step="0.01" value="10000">
            </div>
          </div>

          <div class="sf-field">
            <label for="pp-atual">Quanto você já tem</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="pp-atual" placeholder="1.000,00" min="0" step="0.01" value="1000">
            </div>
          </div>

          <div class="sf-field">
            <label for="pp-mensal">Quanto pode guardar por mês</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="pp-mensal" placeholder="300,00" min="0" step="0.01" value="300">
            </div>
          </div>
        </div>

        <button class="sf-btn" onclick="sfCalcPoupanca()">Calcular</button>
        <div class="sf-alert" id="pp-alert">Verifique os valores informados.</div>

        <div class="sf-results cols-1" id="pp-results" style="display:none;">
          <div class="sf-result-box highlight">
            <span class="sf-r-label">Tempo para atingir a meta</span>
            <span class="sf-r-value" id="pp-tempo">0 meses</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ 3. INVESTIMENTOS GERAIS ============ -->
    <div class="sf-panel" id="panel-investimentos">
      <div class="sf-card">
        <h2 class="sf-card-title">Calculadora de Investimentos Gerais</h2>
        <p class="sf-card-sub">Estime o rendimento bruto e líquido de um investimento com base na rentabilidade anual.</p>

        <div class="sf-grid">
          <div class="sf-field">
            <label for="ig-valor">Valor do Investimento</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="ig-valor" placeholder="5.000,00" min="0" step="0.01" value="5000">
            </div>
          </div>

          <div class="sf-field">
            <label for="ig-rentabilidade">Rentabilidade Estimada (ao ano)</label>
            <div class="sf-input-group">
              <input type="number" id="ig-rentabilidade" placeholder="12,00" min="0" step="0.01" value="12">
              <span class="sf-prefix" style="border-right:1.5px solid var(--sf-border); border-left:none; border-radius:0 10px 10px 0;">%</span>
            </div>
          </div>

          <div class="sf-field full">
            <label for="ig-prazo">Prazo (meses)</label>
            <input type="number" id="ig-prazo" placeholder="24" min="1" step="1" value="24">
          </div>
        </div>

        <button class="sf-btn" onclick="sfCalcInvestimentos()">Calcular</button>
        <div class="sf-alert" id="ig-alert">Verifique os valores informados.</div>

        <div class="sf-results cols-2" id="ig-results" style="display:none;">
          <div class="sf-result-box">
            <span class="sf-r-label">Rendimento Bruto</span>
            <span class="sf-r-value" id="ig-rendimento-bruto">R$ 0,00</span>
          </div>
          <div class="sf-result-box highlight">
            <span class="sf-r-label">Rendimento Líquido (após IR)</span>
            <span class="sf-r-value" id="ig-rendimento-liquido">R$ 0,00</span>
          </div>
        </div>
        <div class="sf-note" id="ig-note" style="display:none;"></div>
      </div>
    </div>

    <!-- ============ 4. FINANCIAMENTO ============ -->
    <div class="sf-panel" id="panel-financiamento">
      <div class="sf-card">
        <h2 class="sf-card-title">Calculadora de Financiamento (Tabela Price)</h2>
        <p class="sf-card-sub">Simule o valor das parcelas fixas e o custo total de um financiamento.</p>

        <div class="sf-grid">
          <div class="sf-field">
            <label for="fn-valor">Valor do Bem</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="fn-valor" placeholder="50.000,00" min="0" step="0.01" value="50000">
            </div>
          </div>

          <div class="sf-field">
            <label for="fn-entrada">Valor da Entrada</label>
            <div class="sf-input-group">
              <span class="sf-prefix">R$</span>
              <input type="number" id="fn-entrada" placeholder="10.000,00" min="0" step="0.01" value="10000">
            </div>
          </div>

          <div class="sf-field">
            <label for="fn-taxa">Taxa de Juros Mensal</label>
            <div class="sf-input-group">
              <input type="number" id="fn-taxa" placeholder="1,50" min="0" step="0.01" value="1.5">
              <span class="sf-prefix" style="border-right:1.5px solid var(--sf-border); border-left:none; border-radius:0 10px 10px 0;">%</span>
            </div>
          </div>

          <div class="sf-field">
            <label for="fn-prazo">Prazo (meses)</label>
            <input type="number" id="fn-prazo" placeholder="48" min="1" step="1" value="48">
          </div>
        </div>

        <button class="sf-btn" onclick="sfCalcFinanciamento()">Calcular</button>
        <div class="sf-alert" id="fn-alert">Verifique os valores informados.</div>

        <div class="sf-results cols-3" id="fn-results" style="display:none;">
          <div class="sf-result-box highlight">
            <span class="sf-r-label">Valor da Parcela</span>
            <span class="sf-r-value" id="fn-parcela">R$ 0,00</span>
          </div>
          <div class="sf-result-box">
            <span class="sf-r-label">Total Pago ao Final</span>
            <span class="sf-r-value" id="fn-total-pago">R$ 0,00</span>
          </div>
          <div class="sf-result-box">
            <span class="sf-r-label">Total de Juros Pagos</span>
            <span class="sf-r-value" id="fn-total-juros">R$ 0,00</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
(function () {

  /* ---------- Utilitários ---------- */
  function sfFormatBRL(valor) {
    if (!isFinite(valor)) valor = 0;
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
  }

  function sfGetNum(id) {
    var el = document.getElementById(id);
    if (!el) return NaN;
    var v = el.value.toString().replace(',', '.').trim();
    return v === '' ? NaN : parseFloat(v);
  }

  function sfShowAlert(id, show) {
    var el = document.getElementById(id);
    if (!el) return;
    el.classList.toggle('show', !!show);
  }

  /* ---------- Tabs ---------- */
  var tabButtons = document.querySelectorAll('#sf-root .sf-tab-btn');
  tabButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = btn.getAttribute('data-tab');

      tabButtons.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      document.querySelectorAll('#sf-root .sf-panel').forEach(function (p) {
        p.classList.remove('active');
      });
      document.getElementById('panel-' + target).classList.add('active');
    });
  });

  /* ================= 1. JUROS COMPOSTOS ================= */
  window.sfCalcJurosCompostos = function () {
    var capital = sfGetNum('jc-capital');
    var aporte = sfGetNum('jc-aporte');
    var taxa = sfGetNum('jc-taxa');
    var taxaPeriodo = document.getElementById('jc-taxa-periodo').value;
    var periodo = sfGetNum('jc-periodo');
    var periodoUnidade = document.getElementById('jc-periodo-unidade').value;

    if (isNaN(capital) || isNaN(aporte) || isNaN(taxa) || isNaN(periodo) || capital < 0 || aporte < 0 || taxa < 0 || periodo <= 0) {
      sfShowAlert('jc-alert', true);
      document.getElementById('jc-results').style.display = 'none';
      return;
    }
    sfShowAlert('jc-alert', false);

    // Normaliza para taxa mensal
    var taxaAnual = taxaPeriodo === 'ano' ? taxa / 100 : Math.pow(1 + taxa / 100, 12) - 1;
    var iMensal = taxaPeriodo === 'mes' ? taxa / 100 : Math.pow(1 + taxaAnual, 1 / 12) - 1;

    // Normaliza período para meses
    var n = periodoUnidade === 'anos' ? Math.round(periodo * 12) : Math.round(periodo);

    // Montante futuro: capital inicial capitalizado + aportes mensais capitalizados (série)
    var montanteCapital = capital * Math.pow(1 + iMensal, n);
    var montanteAportes;
    if (iMensal === 0) {
      montanteAportes = aporte * n;
    } else {
      montanteAportes = aporte * ((Math.pow(1 + iMensal, n) - 1) / iMensal);
    }

    var valorTotal = montanteCapital + montanteAportes;
    var totalInvestido = capital + (aporte * n);
    var totalJuros = valorTotal - totalInvestido;

    document.getElementById('jc-total-investido').textContent = sfFormatBRL(totalInvestido);
    document.getElementById('jc-total-juros').textContent = sfFormatBRL(totalJuros);
    document.getElementById('jc-valor-total').textContent = sfFormatBRL(valorTotal);
    document.getElementById('jc-results').style.display = 'grid';
  };

  /* ================= 2. META DE POUPANÇA ================= */
  window.sfCalcPoupanca = function () {
    var meta = sfGetNum('pp-meta');
    var atual = sfGetNum('pp-atual');
    var mensal = sfGetNum('pp-mensal');

    if (isNaN(meta) || isNaN(atual) || isNaN(mensal) || meta <= 0 || atual < 0 || mensal <= 0) {
      sfShowAlert('pp-alert', true);
      document.getElementById('pp-results').style.display = 'none';
      return;
    }

    var faltante = meta - atual;

    if (faltante <= 0) {
      sfShowAlert('pp-alert', false);
      document.getElementById('pp-tempo').textContent = 'Meta já atingida! 🎉';
      document.getElementById('pp-results').style.display = 'grid';
      return;
    }

    sfShowAlert('pp-alert', false);
    var meses = Math.ceil(faltante / mensal);

    var anos = Math.floor(meses / 12);
    var mesesRestantes = meses % 12;
    var textoDetalhado = meses + (meses === 1 ? ' mês' : ' meses');
    if (anos > 0) {
      textoDetalhado += ' (' + anos + (anos === 1 ? ' ano' : ' anos');
      if (mesesRestantes > 0) {
        textoDetalhado += ' e ' + mesesRestantes + (mesesRestantes === 1 ? ' mês' : ' meses');
      }
      textoDetalhado += ')';
    }

    document.getElementById('pp-tempo').textContent = textoDetalhado;
    document.getElementById('pp-results').style.display = 'grid';
  };

  /* ================= 3. INVESTIMENTOS GERAIS ================= */
  window.sfCalcInvestimentos = function () {
    var valor = sfGetNum('ig-valor');
    var rentAnual = sfGetNum('ig-rentabilidade');
    var prazoMeses = sfGetNum('ig-prazo');

    if (isNaN(valor) || isNaN(rentAnual) || isNaN(prazoMeses) || valor <= 0 || rentAnual < 0 || prazoMeses <= 0) {
      sfShowAlert('ig-alert', true);
      document.getElementById('ig-results').style.display = 'none';
      document.getElementById('ig-note').style.display = 'none';
      return;
    }
    sfShowAlert('ig-alert', false);

    var iMensal = Math.pow(1 + rentAnual / 100, 1 / 12) - 1;
    var montante = valor * Math.pow(1 + iMensal, prazoMeses);
    var rendimentoBruto = montante - valor;

    // IR regressivo (tabela padrão de renda fixa no Brasil)
    var dias = prazoMeses * 30;
    var aliquota;
    var faixaTexto;
    if (dias <= 180) { aliquota = 0.225; faixaTexto = '22,5% (até 180 dias)'; }
    else if (dias <= 360) { aliquota = 0.20; faixaTexto = '20% (de 181 a 360 dias)'; }
    else if (dias <= 720) { aliquota = 0.175; faixaTexto = '17,5% (de 361 a 720 dias)'; }
    else { aliquota = 0.15; faixaTexto = '15% (acima de 720 dias)'; }

    var ir = rendimentoBruto > 0 ? rendimentoBruto * aliquota : 0;
    var rendimentoLiquido = rendimentoBruto - ir;

    document.getElementById('ig-rendimento-bruto').textContent = sfFormatBRL(rendimentoBruto);
    document.getElementById('ig-rendimento-liquido').textContent = sfFormatBRL(rendimentoLiquido);
    document.getElementById('ig-results').style.display = 'grid';

    var noteEl = document.getElementById('ig-note');
    noteEl.textContent = 'Simulação com IR regressivo estimado sobre o rendimento: alíquota de ' + faixaTexto + '. Valor final estimado: ' + sfFormatBRL(valor + rendimentoLiquido) + '. Consulte seu banco/corretora para condições reais do produto.';
    noteEl.style.display = 'block';
  };

  /* ================= 4. FINANCIAMENTO (TABELA PRICE) ================= */
  window.sfCalcFinanciamento = function () {
    var valorBem = sfGetNum('fn-valor');
    var entrada = sfGetNum('fn-entrada');
    var taxaMensal = sfGetNum('fn-taxa');
    var prazo = sfGetNum('fn-prazo');

    if (isNaN(valorBem) || isNaN(entrada) || isNaN(taxaMensal) || isNaN(prazo) ||
        valorBem <= 0 || entrada < 0 || taxaMensal < 0 || prazo <= 0 || entrada > valorBem) {
      sfShowAlert('fn-alert', true);
      document.getElementById('fn-results').style.display = 'none';
      return;
    }
    sfShowAlert('fn-alert', false);

    var valorFinanciado = valorBem - entrada;
    var i = taxaMensal / 100;
    var n = Math.round(prazo);

    var parcela;
    if (i === 0) {
      parcela = valorFinanciado / n;
    } else {
      parcela = valorFinanciado * (i * Math.pow(1 + i, n)) / (Math.pow(1 + i, n) - 1);
    }

    var totalPago = parcela * n;
    var totalJuros = totalPago - valorFinanciado;

    document.getElementById('fn-parcela').textContent = sfFormatBRL(parcela);
    document.getElementById('fn-total-pago').textContent = sfFormatBRL(totalPago);
    document.getElementById('fn-total-juros').textContent = sfFormatBRL(totalJuros);
    document.getElementById('fn-results').style.display = 'grid';
  };

})();
</script>




