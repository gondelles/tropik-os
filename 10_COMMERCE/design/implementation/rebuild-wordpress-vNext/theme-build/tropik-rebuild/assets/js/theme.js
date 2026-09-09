/*!
 * Tropik Re:Build theme — theme.js
 * Ported verbatim from the founder-approved Golden Master's drawer.js /
 * gallery.js / carousel.js / forms.js / app.js modules (see
 * 10_COMMERCE/design/reference/rebuild-page-system-golden-master/
 * INTERACTIONS.md for the plain-language contract each module implements).
 * Two changes from source, both isolated in the "ITERATION 1 ADDITIONS"
 * block at the end rather than edited in place, so a diff against a
 * re-frozen Golden Master stays a one-block comparison:
 *   1. the demo search-redirect ("search.html?q=...") is replaced with a
 *      real WordPress search URL;
 *   2. drawer links now close the drawer on click (documented gap — see
 *      03_GOLDEN_MASTER_PARITY_MATRIX.md row 5 — the frozen source doesn't
 *      do this yet either, this is a founder-directed improvement over it).
 */


// ---- drawer.js ----
/*!
 * Tropik static prototype — drawer.js
 * Generic slide-in panel controller, used for the left Sitemap Drawer
 * and the right Mini Cart. Vanilla JS, no dependencies.
 * Behavior contract: ESC closes, backdrop click closes, body scroll locks,
 * focus moves into the panel on open and returns to the trigger on close.
 */
(function () {
  "use strict";

  function TkPanel(panelId, backdropId, openSelector, closeSelector) {
    var panel = document.getElementById(panelId);
    var backdrop = document.getElementById(backdropId);
    if (!panel || !backdrop) return null;

    var lastTrigger = null;

    function focusablesIn(el) {
      return Array.prototype.slice.call(
        el.querySelectorAll('a[href], button:not([disabled]), input, select, textarea, [tabindex]:not([tabindex="-1"])')
      );
    }

    function open(trigger) {
      lastTrigger = trigger || document.activeElement;
      panel.classList.add("is-open");
      backdrop.classList.add("is-open");
      document.body.classList.add("tk-lock-scroll");
      document.querySelectorAll(openSelector).forEach(function (b) {
        b.setAttribute("aria-expanded", "true");
      });
      var f = focusablesIn(panel);
      if (f.length) f[0].focus();
      document.addEventListener("keydown", onKeydown, true);
    }

    function close() {
      panel.classList.remove("is-open");
      backdrop.classList.remove("is-open");
      document.body.classList.remove("tk-lock-scroll");
      document.querySelectorAll(openSelector).forEach(function (b) {
        b.setAttribute("aria-expanded", "false");
      });
      document.removeEventListener("keydown", onKeydown, true);
      if (lastTrigger && typeof lastTrigger.focus === "function") lastTrigger.focus();
    }

    function onKeydown(e) {
      if (e.key === "Escape") {
        close();
        return;
      }
      if (e.key === "Tab") {
        var f = focusablesIn(panel);
        if (!f.length) return;
        var first = f[0], last = f[f.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    }

    document.querySelectorAll(openSelector).forEach(function (btn) {
      btn.addEventListener("click", function () { open(btn); });
    });
    document.querySelectorAll(closeSelector).forEach(function (btn) {
      btn.addEventListener("click", close);
    });
    backdrop.addEventListener("click", close);

    return { open: open, close: close };
  }

  document.addEventListener("DOMContentLoaded", function () {
    window.tkDrawer = TkPanel("tk-drawer", "tk-drawer-backdrop", "[data-tk-drawer-open]", "[data-tk-drawer-close]");
    window.tkCart = TkPanel("tk-cart-panel", "tk-cart-backdrop", "[data-tk-cart-open]", "[data-tk-cart-close]");

    // Drawer accordion groups (Support / Your Tropik collapse on mobile)
    document.querySelectorAll("[data-tk-drawer-toggle]").forEach(function (trigger) {
      trigger.addEventListener("click", function () {
        var panelEl = document.getElementById(trigger.getAttribute("aria-controls"));
        var open = trigger.getAttribute("aria-expanded") === "true";
        trigger.setAttribute("aria-expanded", String(!open));
        if (!panelEl) return;
        panelEl.style.height = open ? "0px" : panelEl.scrollHeight + "px";
      });
    });
  });
})();

// ---- gallery.js ----
/*!
 * Tropik static prototype — gallery.js
 * Two carousels, one mechanism:
 *  - .tk-gallery          product media gallery (thumbnail rail + arrows + keyboard)
 *  - .tk-hero-carousel    home hero slider (arrows + dots + autoplay, pauses on hover/focus)
 * Vanilla JS, no dependencies, no external carousel library.
 */
(function () {
  "use strict";

  function initGallery(root) {
    var track = root.querySelector(".tk-gallery__track");
    if (!track) return;
    var slides = Array.prototype.slice.call(root.querySelectorAll(".tk-gallery__slide"));
    var thumbs = Array.prototype.slice.call(root.querySelectorAll(".tk-gallery__thumb"));
    var prev = root.querySelector(".tk-gallery__nav--prev");
    var next = root.querySelector(".tk-gallery__nav--next");
    var index = 0;

    function render() {
      track.style.transform = "translateX(-" + index * 100 + "%)";
      thumbs.forEach(function (t, i) {
        t.setAttribute("aria-current", i === index ? "true" : "false");
      });
    }
    function go(i) {
      index = (i + slides.length) % slides.length;
      render();
    }

    if (prev) prev.addEventListener("click", function () { go(index - 1); });
    if (next) next.addEventListener("click", function () { go(index + 1); });
    thumbs.forEach(function (t, i) {
      t.addEventListener("click", function () { go(i); });
    });
    root.setAttribute("tabindex", "0");
    root.addEventListener("keydown", function (e) {
      if (e.key === "ArrowLeft") go(index - 1);
      if (e.key === "ArrowRight") go(index + 1);
    });

    // basic touch swipe
    var startX = null;
    root.addEventListener("touchstart", function (e) { startX = e.touches[0].clientX; }, { passive: true });
    root.addEventListener("touchend", function (e) {
      if (startX === null) return;
      var dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 40) go(dx > 0 ? index - 1 : index + 1);
      startX = null;
    });

    render();
  }

  function initHeroCarousel(root) {
    var track = root.querySelector(".tk-hero-carousel__track");
    if (!track) return;
    var slides = Array.prototype.slice.call(root.querySelectorAll(".tk-hero-carousel__slide"));
    var dots = Array.prototype.slice.call(root.querySelectorAll(".tk-hero-carousel__dot"));
    var prev = root.querySelector('[data-tk-hero-prev]');
    var next = root.querySelector('[data-tk-hero-next]');
    var index = 0;
    var timer = null;
    var AUTOPLAY_MS = 6500;
    var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    function render() {
      track.style.transform = "translateX(-" + index * 100 + "%)";
      dots.forEach(function (d, i) { d.setAttribute("aria-current", i === index ? "true" : "false"); });
    }
    function go(i) { index = (i + slides.length) % slides.length; render(); }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function start() {
      if (reduceMotion || slides.length < 2) return;
      stop();
      timer = setInterval(function () { go(index + 1); }, AUTOPLAY_MS);
    }

    if (prev) prev.addEventListener("click", function () { go(index - 1); start(); });
    if (next) next.addEventListener("click", function () { go(index + 1); start(); });
    dots.forEach(function (d, i) { d.addEventListener("click", function () { go(i); start(); }); });

    root.addEventListener("mouseenter", stop);
    root.addEventListener("mouseleave", start);
    root.addEventListener("focusin", stop);
    root.addEventListener("focusout", start);

    render();
    start();
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("[data-tk-gallery]").forEach(initGallery);
    document.querySelectorAll("[data-tk-hero-carousel]").forEach(initHeroCarousel);
  });
})();

// ---- carousel.js ----
/*!
 * Tropik static prototype — carousel.js
 * One reusable pattern for every horizontal scrolling card row (featured
 * products, the homepage content/learn carousel, shop collection rows,
 * the learn hub grid): a .tk-carousel wraps a .tk-carousel__track plus
 * optional .tk-carousel__btn--prev/--next controls. Vanilla JS, no
 * dependencies — mirrors the mechanism in gallery.js.
 */
(function () {
  "use strict";

  function initCarousel(root) {
    var track = root.querySelector(".tk-carousel__track");
    if (!track) return;
    var prev = root.querySelector(".tk-carousel__btn--prev");
    var next = root.querySelector(".tk-carousel__btn--next");

    function updateButtons() {
      if (prev) prev.classList.toggle("is-disabled", track.scrollLeft <= 0);
      if (next) {
        var atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 1;
        next.classList.toggle("is-disabled", atEnd);
      }
    }

    function scrollByPage(dir) {
      track.scrollBy({ left: dir * track.clientWidth * 0.9, behavior: "smooth" });
    }

    if (prev) prev.addEventListener("click", function () { scrollByPage(-1); });
    if (next) next.addEventListener("click", function () { scrollByPage(1); });

    // Throttle the scroll listener with rAF — simple and good enough here.
    var ticking = false;
    track.addEventListener("scroll", function () {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        updateButtons();
        ticking = false;
      });
    });

    updateButtons();
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".tk-carousel").forEach(initCarousel);
  });
})();

// ---- forms.js ----
/*!
 * Tropik static prototype — forms.js
 * Accordion (FAQ / drawer groups), collapsible checkout sections,
 * quantity pill, variant swatches, billing toggle. Vanilla JS.
 * This file defines VISUAL behavior only — see docs/WORDPRESS_MAPPING.md
 * for what WooCommerce/theme code owns each interaction in COM-WEB-011B.
 */
(function () {
  "use strict";

  /* ---- Accordion (FAQ, generic) ---- */
  function initAccordion(root) {
    var items = root.querySelectorAll(".tk-accordion-item");
    items.forEach(function (item) {
      var trigger = item.querySelector(".tk-accordion-item__trigger");
      var panel = item.querySelector(".tk-accordion-item__panel");
      if (!trigger || !panel) return;
      trigger.addEventListener("click", function () {
        var isOpen = trigger.getAttribute("aria-expanded") === "true";
        if (root.hasAttribute("data-tk-accordion-single") && !isOpen) {
          root.querySelectorAll('.tk-accordion-item__trigger[aria-expanded="true"]').forEach(function (t) {
            if (t !== trigger) {
              t.setAttribute("aria-expanded", "false");
              var p = document.getElementById(t.getAttribute("aria-controls"));
              if (p) p.style.height = "0px";
            }
          });
        }
        trigger.setAttribute("aria-expanded", String(!isOpen));
        panel.style.height = isOpen ? "0px" : panel.scrollHeight + "px";
      });
    });
  }

  /* ---- Collapsible checkout sections ---- */
  function initCollapseGroup(root) {
    var sections = Array.prototype.slice.call(root.querySelectorAll(".tk-collapse"));
    function setOpen(section, open) {
      var head = section.querySelector(".tk-collapse__head");
      var body = section.querySelector(".tk-collapse__body");
      head.setAttribute("aria-expanded", String(open));
      body.style.height = open ? body.scrollHeight + "px" : "0px";
    }
    function openOnly(target) {
      sections.forEach(function (s) { setOpen(s, s === target); });
    }
    sections.forEach(function (section, i) {
      var head = section.querySelector(".tk-collapse__head");
      var editBtn = section.querySelector(".tk-collapse__edit");
      head.addEventListener("click", function () {
        var isOpen = head.getAttribute("aria-expanded") === "true";
        setOpen(section, !isOpen);
      });
      if (editBtn) {
        editBtn.addEventListener("click", function (e) {
          e.stopPropagation();
          openOnly(section);
        });
      }
      var continueBtn = section.querySelector("[data-tk-continue]");
      if (continueBtn) {
        continueBtn.addEventListener("click", function () {
          section.classList.add("is-complete");
          setOpen(section, false);
          var next = sections[i + 1];
          if (next) setOpen(next, true);
        });
      }
    });
    // Open the first section by default.
    if (sections[0]) setOpen(sections[0], true);
  }

  /* ---- Billing-different-from-shipping toggle ---- */
  function initBillingToggle() {
    var checkbox = document.querySelector("[data-tk-billing-toggle]");
    var panel = document.querySelector("[data-tk-billing-panel]");
    if (!checkbox || !panel) return;
    function sync() { panel.hidden = !checkbox.checked; }
    checkbox.addEventListener("change", sync);
    sync();
  }

  /* ---- Quantity pill ---- */
  function initQty(root) {
    var input = root.querySelector("input");
    var min = parseInt(root.getAttribute("data-min") || "1", 10);
    var max = parseInt(root.getAttribute("data-max") || "99", 10);
    root.querySelectorAll("button[data-step]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var step = parseInt(btn.getAttribute("data-step"), 10);
        var val = parseInt(input.value, 10) || min;
        val = Math.min(max, Math.max(min, val + step));
        input.value = val;
        input.dispatchEvent(new Event("change", { bubbles: true }));
      });
    });
  }

  /* ---- Variant swatches (visual only — see data-wp-dynamic) ---- */
  function initVariantGroup(root) {
    var buttons = root.querySelectorAll(".tk-variant-swatch:not([disabled])");
    buttons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        buttons.forEach(function (b) { b.setAttribute("aria-pressed", "false"); });
        btn.setAttribute("aria-pressed", "true");
      });
    });
  }

  /* ---- Simple tabs (search results Products/Guides, account, etc.) ---- */
  function initTabs(root) {
    var tabs = Array.prototype.slice.call(root.querySelectorAll("[role='tab']"));
    tabs.forEach(function (tab) {
      tab.addEventListener("click", function () {
        tabs.forEach(function (t) {
          t.setAttribute("aria-selected", "false");
          var p = document.getElementById(t.getAttribute("aria-controls"));
          if (p) p.hidden = true;
        });
        tab.setAttribute("aria-selected", "true");
        var panel = document.getElementById(tab.getAttribute("aria-controls"));
        if (panel) panel.hidden = false;
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("[data-tk-accordion]").forEach(initAccordion);
    document.querySelectorAll("[data-tk-collapse-group]").forEach(initCollapseGroup);
    document.querySelectorAll(".tk-qty").forEach(initQty);
    document.querySelectorAll(".tk-variant-options").forEach(initVariantGroup);
    document.querySelectorAll("[data-tk-tabs]").forEach(initTabs);
    initBillingToggle();
  });
})();

// ---- app.js ----
/*!
 * Tropik static prototype — app.js
 * Small site-wide utilities: dynamic year, TOC scrollspy, header active state.
 * Loaded on every page after drawer.js / gallery.js / forms.js.
 */
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    // Dynamic copyright year (footer contract: "Dynamic copyright").
    document.querySelectorAll("[data-tk-year]").forEach(function (el) {
      el.textContent = new Date().getFullYear();
    });

    // Back-to-top
    document.querySelectorAll("[data-tk-top]").forEach(function (el) {
      el.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    });

    // TOC scrollspy (Terms / Privacy / Industry Guide)
    var tocLinks = Array.prototype.slice.call(document.querySelectorAll("[data-tk-toc] a"));
    if (tocLinks.length) {
      var targets = tocLinks
        .map(function (a) { return document.querySelector(a.getAttribute("href")); })
        .filter(Boolean);
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var link = tocLinks.filter(function (a) {
              return a.getAttribute("href") === "#" + entry.target.id;
            })[0];
            if (!link) return;
            tocLinks.forEach(function (a) { a.classList.remove("is-active"); });
            link.classList.add("is-active");
          });
        },
        { rootMargin: "-40% 0px -50% 0px" }
      );
      targets.forEach(function (t) { observer.observe(t); });
    }

    // Header search icon → inline dynamic search bar (opens under the header
    // instead of navigating straight to a results page).
    var searchOpenBtn = document.querySelector("[data-tk-search-open]");
    var searchBar = document.getElementById("tk-search-bar");
    if (searchOpenBtn && searchBar) {
      var searchCloseBtn = searchBar.querySelector("[data-tk-search-close]");
      var onSearchKeydown = function (e) {
        if (e.key === "Escape") closeSearch();
      };
      var openSearch = function () {
        searchBar.hidden = false;
        searchOpenBtn.setAttribute("aria-expanded", "true");
        var input = searchBar.querySelector(".tk-search-bar__input");
        if (input) input.focus();
        document.addEventListener("keydown", onSearchKeydown);
      };
      var closeSearch = function () {
        searchBar.hidden = true;
        searchOpenBtn.setAttribute("aria-expanded", "false");
        document.removeEventListener("keydown", onSearchKeydown);
        searchOpenBtn.focus();
      };
      searchOpenBtn.addEventListener("click", function () {
        if (searchBar.hidden) openSearch(); else closeSearch();
      });
      if (searchCloseBtn) searchCloseBtn.addEventListener("click", closeSearch);
    }

    // Search "Products / Guides" quick filter demo (visual only).
    var searchInput = document.querySelector("[data-tk-drawer-search]");
    if (searchInput) {
      searchInput.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          window.location.href = (searchInput.getAttribute("data-tk-search-url") || "/?s=") + encodeURIComponent(searchInput.value);
        }
      });
    }
  });
})();


// ---- ITERATION 1 ADDITIONS ----
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    // Close the drawer when any real navigation link inside it is tapped.
    // Golden Master's TkPanel only wires the backdrop + explicit close
    // button (confirmed in 01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md §3.1) —
    // this is the founder-directed fix, not a reproduction of source.
    var drawer = document.getElementById("tk-drawer");
    if (drawer && window.tkDrawer) {
      drawer.querySelectorAll(".tk-drawer__list a:not(.tk-drawer__soon)").forEach(function (a) {
        a.addEventListener("click", function () {
          window.tkDrawer.close();
        });
      });
    }

    // Open the bag drawer automatically when WooCommerce confirms an
    // add-to-cart (native wc-add-to-cart.js triggers this event on
    // document.body after a successful AJAX add).
    if (window.tkCart) {
      var body = document.body;
      body.addEventListener("added_to_cart", function () {
        window.tkCart.open();
      });
    }

    // Quantity stepper + remove inside the bag drawer talk to the theme's
    // own AJAX endpoints (inc/woocommerce.php: tk_update_cart_qty /
    // tk_remove_cart_item), then swap in the fragment HTML WooCommerce's
    // own fragment refresh returns — no page reload, no second cart UI.
    var cartBody = document.querySelector('[data-wp-dynamic="cart-items"]');
    if (cartBody && window.tkAjax) {
      cartBody.addEventListener("click", function (e) {
        var removeBtn = e.target.closest(".tk-cart-line__remove");
        if (removeBtn) {
          e.preventDefault();
          var line = removeBtn.closest("[data-cart-item-key]");
          if (line) tkCartRequest("tk_remove_cart_item", { key: line.getAttribute("data-cart-item-key") });
        }
      });
      cartBody.addEventListener("change", function (e) {
        var input = e.target.closest('[data-wp-dynamic="cart-item-qty"]');
        if (!input) return;
        var line = input.closest("[data-cart-item-key]");
        if (line) tkCartRequest("tk_update_cart_qty", { key: line.getAttribute("data-cart-item-key"), qty: input.value });
      });
    }

    function tkCartRequest(action, data) {
      var body = new URLSearchParams(Object.assign({ action: action, nonce: window.tkAjax.nonce }, data));
      fetch(window.tkAjax.url, { method: "POST", credentials: "same-origin", body: body })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res && res.success) {
            document.body.dispatchEvent(new CustomEvent("wc_fragment_refresh"));
          }
        });
    }
  });
})();
