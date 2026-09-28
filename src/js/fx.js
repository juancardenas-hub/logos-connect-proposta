/* Logos Connect — camada de efeitos (Three.js + GSAP)
   Sutil por definição: partículas e linhas finas nos heros e blocos escuros,
   linhas de progresso nos passos, tilt leve nos cards. Respeita prefers-reduced-motion,
   pausa fora da tela e reduz densidade no celular. Bundle: src/build.sh → assets/js/logos-fx.js */
import {
  Scene, OrthographicCamera, WebGLRenderer, BufferGeometry, BufferAttribute, Float32BufferAttribute,
  Points, LineSegments, PointsMaterial, LineBasicMaterial, Color, AdditiveBlending, NormalBlending
} from "three";

const reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
const isMobile = window.matchMedia("(max-width: 768px)").matches;
const THEMES = {
  light: { point: "#7F9412", line: "#98AE0F", pointOpacity: 0.38, lineOpacity: 0.13, blending: NormalBlending },
  dark:  { point: "#C6D65A", line: "#98AE0F", pointOpacity: 0.6,  lineOpacity: 0.2, blending: AdditiveBlending },
};

/* ---------- Campo de partículas com linhas de conexão ---------- */
function createField(canvas) {
  const theme = THEMES[canvas.dataset.fxTheme || "light"];
  const host = canvas.parentElement;
  const count = parseInt(canvas.dataset.fxCount || (isMobile ? 36 : 80), 10);
  const linkDist = parseFloat(canvas.dataset.fxLink || (isMobile ? 110 : 135));
  const speed = 0.12;

  let renderer;
  try {
    renderer = new WebGLRenderer({ canvas, alpha: true, antialias: true, powerPreference: "low-power" });
  } catch (e) { return null; }
  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.75));
  renderer.setClearColor(0x000000, 0);

  const scene = new Scene();
  let W = 1, H = 1;
  const camera = new OrthographicCamera(0, 1, 1, 0, -10, 10);

  const pos = new Float32Array(count * 3);
  const vel = new Float32Array(count * 2);
  const size = new Float32Array(count);
  for (let i = 0; i < count; i++) {
    pos[i * 3] = Math.random(); pos[i * 3 + 1] = Math.random(); pos[i * 3 + 2] = 0;
    vel[i * 2] = (Math.random() - 0.5) * speed; vel[i * 2 + 1] = (Math.random() - 0.5) * speed;
    size[i] = 1.2 + Math.random() * 1.8;
  }
  const pGeo = new BufferGeometry();
  pGeo.setAttribute("position", new BufferAttribute(pos, 3));
  const pMat = new PointsMaterial({ color: new Color(theme.point), size: isMobile ? 2.4 : 3, sizeAttenuation: false, transparent: true, opacity: theme.pointOpacity, depthWrite: false, blending: theme.blending });
  const points = new Points(pGeo, pMat);
  scene.add(points);

  const maxLinks = count * 6;
  const lPos = new Float32Array(maxLinks * 6);
  const lGeo = new BufferGeometry();
  lGeo.setAttribute("position", new Float32BufferAttribute(lPos, 3));
  lGeo.setDrawRange(0, 0);
  const lMat = new LineBasicMaterial({ color: new Color(theme.line), transparent: true, opacity: theme.lineOpacity, depthWrite: false, blending: theme.blending });
  const lines = new LineSegments(lGeo, lMat);
  scene.add(lines);

  // posições em px (mundo = px do host)
  const px = new Float32Array(count * 2);
  function resize() {
    W = host.clientWidth || 1; H = host.clientHeight || 1;
    renderer.setSize(W, H, false);
    camera.left = 0; camera.right = W; camera.top = H; camera.bottom = 0; camera.updateProjectionMatrix();
    for (let i = 0; i < count; i++) { px[i * 2] = pos[i * 3] * W; px[i * 2 + 1] = pos[i * 3 + 1] * H; }
  }
  resize();

  // paralaxe leve com o mouse (desktop)
  let mx = 0, my = 0, tx = 0, ty = 0;
  if (!isMobile) {
    host.addEventListener("pointermove", (e) => {
      const r = host.getBoundingClientRect();
      tx = ((e.clientX - r.left) / r.width - 0.5) * 12;
      ty = ((e.clientY - r.top) / r.height - 0.5) * 12;
    }, { passive: true });
  }

  let running = false, raf = 0, last = performance.now();
  function frame(now) {
    if (!running) return;
    const dt = Math.min(40, now - last) / 16.67; last = now;
    mx += (tx - mx) * 0.04; my += (ty - my) * 0.04;
    const pa = pGeo.attributes.position.array;
    for (let i = 0; i < count; i++) {
      let x = px[i * 2] + vel[i * 2] * dt * 4, y = px[i * 2 + 1] + vel[i * 2 + 1] * dt * 4;
      if (x < -10) x = W + 10; else if (x > W + 10) x = -10;
      if (y < -10) y = H + 10; else if (y > H + 10) y = -10;
      px[i * 2] = x; px[i * 2 + 1] = y;
      pa[i * 3] = x + mx; pa[i * 3 + 1] = y - my;
    }
    pGeo.attributes.position.needsUpdate = true;
    // linhas entre vizinhos
    let n = 0; const la = lGeo.attributes.position.array; const d2max = linkDist * linkDist;
    for (let i = 0; i < count && n < maxLinks; i++) {
      for (let j = i + 1; j < count && n < maxLinks; j++) {
        const dx = pa[i * 3] - pa[j * 3], dy = pa[i * 3 + 1] - pa[j * 3 + 1];
        if (dx * dx + dy * dy < d2max) {
          la[n * 6] = pa[i * 3]; la[n * 6 + 1] = pa[i * 3 + 1]; la[n * 6 + 2] = 0;
          la[n * 6 + 3] = pa[j * 3]; la[n * 6 + 4] = pa[j * 3 + 1]; la[n * 6 + 5] = 0;
          n++;
        }
      }
    }
    lGeo.setDrawRange(0, n * 2);
    lGeo.attributes.position.needsUpdate = true;
    renderer.render(scene, camera);
    raf = requestAnimationFrame(frame);
  }
  function start() { if (running) return; running = true; last = performance.now(); raf = requestAnimationFrame(frame); }
  function stop() { running = false; cancelAnimationFrame(raf); }

  if (reduced) { frame(performance.now()); stop(); renderer.render(scene, camera); }
  else {
    const io = new IntersectionObserver((entries) => { entries.forEach((en) => (en.isIntersecting ? start() : stop())); }, { threshold: 0.05 });
    io.observe(host);
    document.addEventListener("visibilitychange", () => (document.hidden ? stop() : start()));
  }
  let rt; window.addEventListener("resize", () => { clearTimeout(rt); rt = setTimeout(() => { resize(); if (reduced) renderer.render(scene, camera); }, 150); });
  return { start, stop };
}

/* ---------- GSAP: detalhes ---------- */
function initGsapDetails() {
  if (!window.gsap) return;
  const gsap = window.gsap;
  if (window.ScrollTrigger) gsap.registerPlugin(window.ScrollTrigger);

  // linha de progresso nos passos
  document.querySelectorAll("[data-fx-linha]").forEach((el) => {
    gsap.set(el, { scaleX: 0, transformOrigin: "left center" });
    gsap.to(el, { scaleX: 1, duration: 1.1, ease: "power2.out", scrollTrigger: { trigger: el, start: "top 88%", once: true } });
  });

  // tilt leve nos cards (desktop, sem reduced motion)
  if (!isMobile && !reduced && window.matchMedia("(hover: hover)").matches) {
    document.querySelectorAll("[data-tilt]").forEach((card) => {
      const strength = parseFloat(card.dataset.tilt || 4);
      card.style.transformStyle = "preserve-3d";
      card.addEventListener("pointermove", (e) => {
        const r = card.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - 0.5, y = (e.clientY - r.top) / r.height - 0.5;
        gsap.to(card, { rotateY: x * strength, rotateX: -y * strength, duration: 0.5, ease: "power2.out", overwrite: "auto" });
      });
      card.addEventListener("pointerleave", () => gsap.to(card, { rotateX: 0, rotateY: 0, duration: 0.7, ease: "power3.out" }));
    });
  }

  // varredura de luz sutil nos contêineres escuros
  if (!reduced) {
    document.querySelectorAll("[data-fx-sweep]").forEach((el) => {
      const s = document.createElement("span");
      s.className = "fx-sweep"; el.appendChild(s);
      gsap.fromTo(s, { xPercent: -120 }, { xPercent: 220, duration: 9, ease: "sine.inOut", repeat: -1, repeatDelay: 4, delay: Math.random() * 3 });
    });
  }

  // números: leve brilho ao terminar de contar
  document.querySelectorAll("[data-fx-glow]").forEach((el) => {
    gsap.fromTo(el, { textShadow: "0 0 0 rgba(152,174,15,0)" }, { textShadow: "0 0 18px rgba(152,174,15,.45)", duration: 1.2, yoyo: true, repeat: 1, ease: "sine.inOut", scrollTrigger: { trigger: el, start: "top 85%", once: true } });
  });
}

function init() {
  document.querySelectorAll("canvas[data-fx='field']").forEach((c) => { try { createField(c); } catch (e) { /* sem WebGL: fica só o layout */ } });
  initGsapDetails();
}
if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", init); else init();
