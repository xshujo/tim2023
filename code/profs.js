(function () {
  console.log("vive les profs du TIM");
  let elm__fig = document.querySelectorAll(".prof__figure");
  console.log(elm__fig.length);

  let elm__prof__section = document.querySelectorAll(".prof__section");
  for (let elm__prof of elm__prof__section) {
    elm__prof.style.display = "none";
  }

  for (const elm of elm__fig) {
    elm.addEventListener("mousedown", function () {
      let elm__prof__section = document.querySelectorAll(".prof__section");
      for (let elm__prof of elm__prof__section) {
        elm__prof.style.display = "none";
      }

      id__figure = elm.id.split("_")[1]; // "fig_234"  ["fig", "234"]
      // id__figure = elm.id
      console.log(id__figure);
      elm__prof__section = document.querySelector("#des_" + id__figure);
      console.log(elm__prof__section.id);
      elm__prof__section.style.display = "block";
    });
  }
})();
