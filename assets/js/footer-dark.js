document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("subscribeForm");
  const emailInput = document.getElementById("subscribeEmail");
  const btn = document.getElementById("subscribeBtn");

  const toastEl = document.getElementById("subscribeToast");
  const toastMsg = document.getElementById("toastMsg");

  if (!form || !emailInput || !toastEl || !toastMsg) return;

  const toast = new bootstrap.Toast(toastEl, { delay: 3000 });

  function showToast(message, isError = false) {
    toastMsg.textContent = message;
    toastEl.classList.remove("text-bg-success", "text-bg-danger");
    toastEl.classList.add(isError ? "text-bg-danger" : "text-bg-success");
    toast.show();
  }

  // ✅ email format check (simple + strong enough)
  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);
  }

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const email = emailInput.value.trim();

    // ✅ required
    if (!email) return showToast("Email is required", true);

    // ✅ length limit
    if (email.length > 60) return showToast("Email must be max 60 characters", true);

    // ✅ format validation
    if (!isValidEmail(email)) return showToast("Please enter a valid email", true);

    if (btn) { btn.disabled = true; btn.textContent = "Please wait..."; }

    try {
      const formData = new FormData();
      formData.append("email", email);

      const res = await fetch("d1/subscribe.php", {
        method: "POST",
        body: formData
      });

      const text = await res.text();
      let data;
      try { data = JSON.parse(text); }
      catch { throw new Error("Invalid JSON: " + text); }

      if (data.status === "success") {
        showToast(data.message || "Subscribed successfully");
        emailInput.value = "";
      } else {
        showToast(data.message || "Subscription failed", true);
      }

    } catch (err) {
      showToast("Server error. Try again.", true);
      console.log(err);
    } finally {
      if (btn) { btn.disabled = false; btn.textContent = "Subscribe"; }
    }
  });
});