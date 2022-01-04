$(document).ready(function () {
  $("input").change(function (event) {
    let value = event.target.value;
    
    $("td:nth-child(1)").text(Math.round(value / 1.618 / 1.618));
    $("td:nth-child(2)").text(Math.round(value / 1.618));
    $("td:nth-child(3)").text(value);
    $("td:nth-child(4)").text(Math.round(value * 1.618));
    $("td:nth-child(5)").text(Math.round(value * 1.618 * 1.618));
  });
});
