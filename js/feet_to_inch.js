let input1 = document.getElementById("input1");
let input2 = document.getElementById("input2");

input1.addEventListener("input", () => {
    input2.value = input1.value * 12;
});

input2.addEventListener("input", () => {
    input1.value = input2.value / 12;
});

let button = document.getElementById("button");

button.addEventListener("click", () => {
    input1.value = "";
    input2.value = "";
});