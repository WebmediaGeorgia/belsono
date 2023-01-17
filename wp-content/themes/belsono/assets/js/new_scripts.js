window.addEventListener("DOMContentLoaded", (event) => {
  // скрипт переключателя карты
  let toggler_map = document.querySelectorAll(
    ".all_med_centre .toggle_slider span"
  );
  let toggler_map_btn = document.querySelector(
    ".all_med_centre .toggle_slider .toggler .toggl "
  );
  let all_centre_swiper = document.querySelector(".all_centre_swiper");
  let contacty_slider_page = document.querySelector(".contacty_slider_page");

  if (toggler_map) {
    toggler_map.forEach((element) =>
      element.addEventListener("click", () => {
        toggler_map.forEach((item) => {
          if (item.classList.contains("active")) {
            item.classList.remove("active");
          }
        });
        element.classList.add("active");

        if (element.classList.contains("spisok")) {
          if (toggler_map_btn.classList.contains("active")) {
            toggler_map_btn.classList.remove("active");
          }
          if (contacty_slider_page.classList.contains("active")) {
            contacty_slider_page.classList.remove("active");
          }
          if (all_centre_swiper.classList.contains("noactive")) {
            all_centre_swiper.classList.remove("noactive");
          }
        } else if (element.classList.contains("mapp")) {
          toggler_map_btn.classList.add("active");
          contacty_slider_page.classList.add("active");
          all_centre_swiper.classList.add("noactive");
        }
      })
    );
  }

    // popap
    const popap = document.querySelector(".popup-for-successful");
    let closePopap = document.querySelector(".popup-for-successful .popap-area");
    
  let openPopupLink= document.querySelector('.header .header_down_content .phone_link')
    function lookPopapSuccess() {
      popap.classList.add("open");
      closePopap.addEventListener("click", function (e) {
        popap.classList.remove("open");
      });
      
    }
    openPopupLink.addEventListener('click',lookPopapSuccess)

});
