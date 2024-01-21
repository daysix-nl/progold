try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  const image = document.getElementsByClassName("par-bottom");
  new simpleParallax(image, {
    transition: "cubic-bezier(0,0,0,1)",
    scale: 1.1,
    orientation: "down",
    overflow: true,
  });

  const image2 = document.getElementsByClassName("par-top");
  new simpleParallax(image2, {
    transition: "cubic-bezier(0,0,0,1)",
    scale: 1.1,
    orientation: "up",
    overflow: true,
  });
} catch (error) {}

document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  const body = document.body;
  function goToNextInput(e) {
    var key = e.which,
      t = e.target,
      sib = t.nextElementSibling;

    if (key === 9 || key === 8) {
      return true;
    }

    if (!sib || sib.tagName.toLowerCase() !== "input") {
      sib = body.querySelector(".input-code");
    }
    sib.select();
    sib.focus();

    var inputs = document.querySelectorAll(".input-code");
    var values = Array.prototype.map.call(inputs, function (input) {
      return input.value;
    });

    var str = values.join("");

    var otherInput = document.getElementById("input_1_1");
    if (otherInput) {
      otherInput.value = str;
    }
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || key === 8 || key) {
      return true;
    }

    e.preventDefault();
    return false;
  }

  function onFocus(e) {
    e.target.select();
  }

  var inputs = document.querySelectorAll(".input-code");

  inputs.forEach(function (input) {
    input.addEventListener("keyup", goToNextInput);
    input.addEventListener("keydown", onKeyDown);
    input.addEventListener("click", onFocus);
  });
});
