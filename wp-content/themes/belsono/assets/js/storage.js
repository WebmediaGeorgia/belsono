window.addEventListener("DOMContentLoaded", (event) => {
  const choose_city = document.querySelectorAll(".chose_sity .sity");
  const doctor_slider = document.querySelectorAll(
    ".all_doctors_block.container"
  );
  const popup_phones = document.querySelectorAll(
    ".popup-form .form-for-credit"
  );

  choose_city.forEach((city) => {
    if (localStorage.getItem("city_name") == city.innerHTML) {
      city.classList.add("active_sity");
      if (doctor_slider) {
        for (let item of doctor_slider) {
          if (item.dataset.sity == city.innerHTML.trim()) {
            item.classList.add("active");
          } else {
            item.classList.remove("activer");
          }
        }
      }
      if (popup_phones) {
        for (let popup of popup_phones) {
          if (popup.dataset.sity == city.innerHTML.trim()) {
            popup.classList.add("active");
          } else {
            popup.classList.remove("activer");
          }
        }
      }
    }
  });

  choose_city.forEach((city) =>
    city.addEventListener("click", () => {
      for (let item of choose_city) {
        if (item.classList.contains("active_sity")) {
          item.classList.remove("active_sity");
        }
      }

      city.classList.add("active_sity");
      if (doctor_slider) {
        for (let item of doctor_slider) {
          if (item.dataset.sity == city.innerHTML.trim()) {
            item.classList.add("active");
          } else {
            item.classList.remove("active");
          }
        }
      }
      if (popup_phones) {
        for (let popup of popup_phones) {
          if (popup.dataset.sity == city.innerHTML.trim()) {
            popup.classList.add("active");
          } else {
            popup.classList.remove("active");
          }
        }
      }
    })
  );
});
