/* Logos Connect — comportamento próprio (hero sem preloader, faixa, triagem, formulários, eventos) */
(function () {
  "use strict";
  var WHATS = "557199622679";
  window.dataLayer = window.dataLayer || [];
  function track(evento, dados) { window.dataLayer.push(Object.assign({ event: evento }, dados || {})); }


  /* O template dispara a animação do hero ao fim do preloader; aqui não há preloader */
  window.addEventListener("load", function () {
    if (typeof window.initHeroAnimation === "function") { try { window.initHeroAnimation(); } catch (e) {} }
    if (window.ScrollTrigger) { setTimeout(function () { try { ScrollTrigger.refresh(); } catch (e) {} }, 300); }
  });

  /* Cliques em WhatsApp */
  document.querySelectorAll('a[href*="wa.me"], a[href*="whatsapp.com"]').forEach(function (a) {
    a.addEventListener("click", function () { track("clique_whatsapp", { origem: a.dataset.origem || "geral" }); });
  });

  /* ---------- Triagem em 6 passos ---------- */
  var triagem = document.querySelector("[data-triagem]");
  if (triagem) {
    var passos = Array.prototype.slice.call(triagem.querySelectorAll(".triagem__passo"));
    var total = passos.length, atual = 0, iniciou = false;
    var barra = triagem.querySelector(".triagem__barra span");
    var contador = triagem.querySelector("[data-contador]");
    var btnVoltar = triagem.querySelector("[data-voltar]");
    var btnAvancar = triagem.querySelector("[data-avancar]");
    var resultado = triagem.querySelector(".triagem__resultado");

    function mostrar(i) {
      passos.forEach(function (p, idx) { p.hidden = idx !== i; });
      atual = i;
      barra.style.width = Math.round(((i + 1) / total) * 100) + "%";
      contador.textContent = "Passo " + (i + 1) + " de " + total;
      btnVoltar.style.visibility = i === 0 ? "hidden" : "visible";
      btnAvancar.textContent = i === total - 1 ? "Ver resultado" : "Continuar";
      var erro = passos[i].querySelector(".erro"); if (erro) erro.style.display = "none";
    }
    function validar(i) {
      var passo = passos[i], ok = true, nomes = {};
      passo.querySelectorAll('input[type="radio"]').forEach(function (r) { nomes[r.name] = nomes[r.name] || r.checked; });
      Object.keys(nomes).forEach(function (n) { if (!nomes[n]) ok = false; });
      passo.querySelectorAll("input[required]:not([type=radio]), select[required]").forEach(function (c) {
        if (!c.value || (c.type === "checkbox" && !c.checked)) ok = false;
        if (c.type === "email" && c.value && !/^\S+@\S+\.\S+$/.test(c.value)) ok = false;
      });
      var erro = passo.querySelector(".erro"); if (erro) erro.style.display = ok ? "none" : "block";
      return ok;
    }
    function valor(nome) {
      var el = triagem.querySelector('[name="' + nome + '"]:checked') || triagem.querySelector('[name="' + nome + '"]');
      if (!el) return "";
      if (el.type === "radio") { var l = triagem.querySelector('label[for="' + el.id + '"]'); return l ? l.textContent.trim() : el.value; }
      if (el.tagName === "SELECT") return el.options[el.selectedIndex] ? el.options[el.selectedIndex].text : el.value;
      return el.value.trim();
    }
    function concluir() {
      var d = { finalidade: valor("finalidade"), valor: valor("valor"), tipo_imovel: valor("tipo_imovel"), cidade: valor("cidade"),
        valor_imovel: valor("valor_imovel"), situacao: valor("situacao"), titular: valor("titular"), porte: valor("porte"),
        nome: valor("nome"), empresa: valor("empresa"), whatsapp: valor("whatsapp"), email: valor("email") };
      var resumo = triagem.querySelector(".triagem__resumo dl"); resumo.innerHTML = "";
      [["Finalidade", d.finalidade], ["Valor desejado", d.valor], ["Imóvel", d.tipo_imovel + " · " + d.cidade],
       ["Valor do imóvel", d.valor_imovel + " · " + d.situacao], ["Em nome de", d.titular], ["Faturamento", d.porte]].forEach(function (par) {
        var dt = document.createElement("dt"); dt.textContent = par[0];
        var dd = document.createElement("dd"); dd.textContent = par[1];
        resumo.appendChild(dt); resumo.appendChild(dd);
      });
      var msg = "Olá, Logos Connect! Fiz a pré-análise no site e quero falar com um especialista.\n\n" +
        "Nome: " + d.nome + "\nEmpresa: " + d.empresa + "\nFinalidade: " + d.finalidade + "\nValor desejado: " + d.valor +
        "\nImóvel: " + d.tipo_imovel + " em " + d.cidade + ", " + d.situacao + ", " + d.valor_imovel +
        "\nImóvel em nome de: " + d.titular + "\nFaturamento anual: " + d.porte + "\nE-mail: " + d.email;
      triagem.querySelector("[data-link-whats]").setAttribute("href", "https://wa.me/" + WHATS + "?text=" + encodeURIComponent(msg));
      triagem.querySelector(".triagem__corpo").hidden = true;
      resultado.hidden = false;
      track("triagem_concluida", { finalidade: d.finalidade, valor: d.valor, situacao: d.situacao, titular: d.titular });
      resultado.scrollIntoView({ behavior: "smooth", block: "center" });
    }
    btnAvancar.addEventListener("click", function () {
      if (!iniciou) { iniciou = true; track("triagem_inicio"); }
      if (!validar(atual)) return;
      track("triagem_passo", { passo: atual + 1 });
      if (atual === total - 1) { concluir(); return; }
      mostrar(atual + 1);
    });
    btnVoltar.addEventListener("click", function () { if (atual > 0) mostrar(atual - 1); });
    triagem.addEventListener("keydown", function (e) { if (e.key === "Enter" && e.target.tagName !== "TEXTAREA") { e.preventDefault(); btnAvancar.click(); } });
    mostrar(0);
  }

  /* ---------- Formulários curtos → WhatsApp ---------- */
  document.querySelectorAll("form[data-form-whats]").forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      if (!form.checkValidity()) { form.reportValidity(); return; }
      var partes = ["Olá, Logos Connect! Vim pelo site (" + (form.dataset.assunto || "contato") + ")."];
      form.querySelectorAll("input, select, textarea").forEach(function (c) {
        if (c.type === "checkbox" || c.type === "submit" || !c.value) return;
        var label = form.querySelector('label[for="' + c.id + '"]');
        var texto = c.tagName === "SELECT" ? c.options[c.selectedIndex].text : c.value;
        partes.push((label ? label.textContent.trim() : c.name) + ": " + texto);
      });
      track("form_enviado", { assunto: form.dataset.assunto || "contato" });
      window.open("https://wa.me/" + WHATS + "?text=" + encodeURIComponent(partes.join("\n")), "_blank");
      var ok = form.querySelector(".form-ok"); if (ok) ok.hidden = false;
    });
  });

  document.querySelectorAll("[data-ano]").forEach(function (el) { el.textContent = new Date().getFullYear(); });
})();
