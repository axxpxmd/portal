let ENABLE_PAGE_PRELOADER = !0,
    DEFAULT_DARK_MODE = !1,
    USE_LOCAL_STORAGE = !0,
    USE_SYSTEM_PREFERENCES = !1,
    DEFAULT_BREAKPOINTS = {
        xs: 0,
        sm: 576,
        md: 768,
        lg: 992,
        xl: 1200,
        xxl: 1400
    };
document.addEventListener("DOMContentLoaded", (() => {
    html.classList.add("dom-ready")
}));
const updateScrollWidth = () => document.documentElement.style.setProperty("--body-scroll-width", window.innerWidth - document.documentElement.clientWidth + "px");
window.addEventListener("resize", updateScrollWidth), updateScrollWidth();
const html = document.documentElement,
    setupBp = (e, t, n = "min") => {
        const o = matchMedia(`(${n}-width: ${t}px)`),
            a = `bp-${e}${"max"===n?"-max":""}`,
            d = () => html.classList.toggle(a, o.matches);
        o.onchange = d, d()
    };
Object.entries(DEFAULT_BREAKPOINTS).forEach((([e, t]) => {
    setupBp(e, t, "min"), setupBp(e, t - 1, "max")
}));
const isDarkMode = () => html.classList.contains("uc-dark"),
    setDarkMode = e => {
        e = !!e, isDarkMode() !== e && (html.classList.toggle("uc-dark", e), window.dispatchEvent(new CustomEvent("darkmodechange")))
    },
    getInitialDarkMode = () => USE_LOCAL_STORAGE && null !== localStorage.getItem("darkMode") ? "1" === localStorage.getItem("darkMode") : USE_SYSTEM_PREFERENCES ? matchMedia("(prefers-color-scheme: dark)").matches : DEFAULT_DARK_MODE;
setDarkMode(getInitialDarkMode());
const dark = new URLSearchParams(location.search).get("dark");
if (dark && html.classList.toggle("uc-dark", "1" === dark), ENABLE_PAGE_PRELOADER) {
    const e = document.createElement("style");
    e.textContent = "\n        .uc-pageloader {\n            position: fixed; top: 0; left: 0; bottom: 0; right: 0;\n            display: flex; justify-content: center; align-items: center;\n            z-index: 99999; background-color: white;\n        }\n        .uc-dark .uc-pageloader, .uc-pageloader:where(.uc-dark) {\n            background-color: #131313;\n        }\n        .uc-pageloader>.loading {\n            display: inline-block; position: relative; width: 40px; height: 40px;\n        }\n        .uc-pageloader>.loading>div {\n            box-sizing: border-box; display: block; position: absolute;\n            width: 40px; height: 40px; margin: 0;\n            border: 4px solid transparent; border-radius: 50%;\n            animation: uc-loading 1s cubic-bezier(0.5, 0, 0.5, 1) infinite;\n            border-color: var(--color-primary) transparent transparent transparent;\n        }\n        .uc-pageloader>.loading>div:nth-child(1) { animation-delay: -0.1s; }\n        .uc-pageloader>.loading>div:nth-child(2) { animation-delay: -0.2s; }\n        .uc-pageloader>.loading>div:nth-child(3) { animation-delay: -0.3s; }\n        @keyframes uc-loading { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }\n        html.show-preloader body { display: none; }\n    ", document.head.append(e);
    const t = document.createElement("div");
    t.className = "uc-pageloader", t.innerHTML = '<div class="loading"><div></div><div></div><div></div><div></div></div>', html.classList.add("show-preloader"), html.append(t), (async () => {
        const e = Date.now();
        await new Promise((e => document.addEventListener("DOMContentLoaded", e))), html.classList.remove("show-preloader"), await new Promise((e => requestAnimationFrame(e))), await new Promise((t => setTimeout(t, Math.max(0, 500 - (Date.now() - e))))), t.style.transition = "opacity 1.1s cubic-bezier(0.8, 0, 0.2, 1)", t.style.opacity = 0, await new Promise((e => setTimeout(e, 1100))), t.remove()
    })()
}
document.addEventListener("DOMContentLoaded", (function () {
    const e = parseInt(localStorage.getItem("visitCount")) || 0,
        t = localStorage.getItem("newsletterModalShown");
    localStorage.setItem("visitCount", e + 1);
    (!t || e >= 4) && setTimeout((function () {
        if (typeof UniCore !== "undefined" && typeof UniCore.modal === "function") {
            const modalInstance = UniCore.modal("#uc-newsletter-modal");
            if (modalInstance && typeof modalInstance.show === "function") {
                modalInstance.show();
                localStorage.setItem("newsletterModalShown", "true");
                localStorage.setItem("visitCount", "0");
            }
        }
    }), 1e4)
})), document.addEventListener("DOMContentLoaded", (function () {
    const e = document.getElementById("uc-gdpr-notification");
    if (e) {
        localStorage.getItem("gdprAccepted") || setTimeout((function () {
            e.classList.add("show")
        }), 5e3);
    
        const acceptBtn = document.getElementById("uc-accept-gdpr");
        if (acceptBtn) {
            acceptBtn.addEventListener("click", function () {
                e.classList.remove("show");
                localStorage.setItem("gdprAccepted", "true");
            });
        }
    
        const closeBtn = document.getElementById("uc-close-gdpr-notification");
        if (closeBtn) {
            closeBtn.addEventListener("click", function () {
                e.classList.remove("show");
            });
        }
    }
}));
