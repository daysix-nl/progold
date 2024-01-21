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
