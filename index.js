$(document).ready(function () {
  $("input").change(function (event) {
    let value = event.target.value;

    $("td:nth-child(1)").text((value / 1.618) / 1.618));
    $("td:nth-child(2)").text((value / 1.618).toFixed(2));
    $("td:nth-child(3)").text(value);
    $("td:nth-child(4)").text((value * 1.618).toFixed(2));
    $("td:nth-child(5)").text((value * 1.618 * 1.618).toFixed(2));
  });
});
