window.onload = function () {
  let box = document.querySelectorAll(".news_one_page .news_block .news_item");

  if (box) {
    if (box.length > 8) {
      var btn = document.querySelector(".btn.sign.more_news ");
      btn.classList.add("show-more-btn");
      for (let i = 8; i < box.length; i++) {
        box[i].style.display = "none";
      }

      var countD = 8;
      btn.addEventListener("click", function () {
        let box = document.querySelectorAll(
          ".news_one_page .news_block .news_item"
        );
        countD += 8;
        if (countD <= box.length) {
          for (let i = 0; i < countD; i++) {
            box[i].style.display = "block";
          }
        } else {
          for (let i = 0; i < countD; i++) {
            box[i].style.display = "block";
            btn.classList.remove("show-more-btn");
          }
        }
      });
    }
  }

  let doctors = document.querySelectorAll(
    ".all_doctors_block.gomel .content .item"
  );
  if (doctors) {
    if (doctors.length > 8) {
      var btnDoctors = document.querySelector(
        ".all_doctors_block .btn.more_info.gomel "
      );
      btnDoctors.classList.add("show-more-btn");
      for (let i = 8; i < doctors.length; i++) {
        doctors[i].style.display = "none";
      }

      var countDoctors = 8;
      btnDoctors.addEventListener("click", function () {
        let doctors = document.querySelectorAll(
          ".all_doctors_block.gomel .content .item"
        );
        countDoctors += 8;
        if (countDoctors <= doctors.length) {
          //если товаров в блоке больше 8 поочередно из открываем
          for (let i = 0; i < countDoctors; i++) {
            countDoctors[i].style.display = "flex";
          }
        } else {
          //если товаров в блоке осталось меньше 12 при клике их открываем и прячем кнопку
          for (let i = 0; i < countDoctors; i++) {
            doctors[i].style.display = "flex";
            btnDoctors.classList.remove("show-more-btn");
          }
        }
      });
    }
  }

  let doctorsMozyr = document.querySelectorAll(
    ".all_doctors_block.mozyr .content .item"
  );
  if (doctorsMozyr) {
    if (doctorsMozyr.length > 8) {
      var btnDoctorsMozyr = document.querySelector(
        ".all_doctors_block .btn.more_info.mozyr "
      );
      btnDoctorsMozyr.classList.add("show-more-btn");
      for (let i = 8; i < doctorsMozyr.length; i++) {
        doctorsMozyr[i].style.display = "none";
      }

      var countDoctors = 8;
      btnDoctorsMozyr.addEventListener("click", function () {
        let doctorsMozyr = document.querySelectorAll(
          ".all_doctors_block.mozyr .content .item"
        );
        countDoctors += 8;
        if (countDoctors <= doctorsMozyr.length) {
          //если товаров в блоке больше 8 поочередно из открываем
          for (let i = 0; i < countDoctors; i++) {
            countDoctors[i].style.display = "flex";
          }
        } else {
          //если товаров в блоке осталось меньше 12 при клике их открываем и прячем кнопку
          for (let i = 0; i < countDoctors; i++) {
            doctorsMozyr[i].style.display = "flex";
            btnDoctorsMozyr.classList.remove("show-more-btn");
          }
        }
      });
    }
  }

  let doctorssolygorsk = document.querySelectorAll(
    ".all_doctors_block.solygorsk .content .item"
  );
  if (doctorssolygorsk) {
    if (doctorssolygorsk.length > 8) {
      var btnDoctorssolygorsk = document.querySelector(
        ".all_doctors_block .btn.more_info.solygorsk "
      );
      btnDoctorssolygorsk.classList.add("show-more-btn");
      for (let i = 8; i < doctorssolygorsk.length; i++) {
        doctorssolygorsk[i].style.display = "none";
      }

      var countDoctors = 8;
      btnDoctorssolygorsk.addEventListener("click", function () {
        let doctorssolygorsk = document.querySelectorAll(
          ".all_doctors_block.solygorsk .content .item"
        );
        countDoctors += 8;
        if (countDoctors <= doctorssolygorsk.length) {
          for (let i = 0; i < countDoctors; i++) {
            countDoctors[i].style.display = "flex";
          }
        } else {
          for (let i = 0; i < countDoctors; i++) {
            doctorssolygorsk[i].style.display = "flex";
            btnDoctorssolygorsk.classList.remove("show-more-btn");
          }
        }
      });
    }
  }
};
