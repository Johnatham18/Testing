let currentExpression = "";

function appendToDisplay(value) {
  currentExpression += value;
  document.getElementById("result").value = currentExpression;
}

function appendOperator(operator) {
  if (currentExpression !== "") {
    currentExpression += operator;
    document.getElementById("result").value = currentExpression;
  }
}

function clearDisplay() {
  currentExpression = "";
  document.getElementById("result").value = "";
}

function calculate() {
  try {
    const result = eval(currentExpression);
    document.getElementById("result").value = result;
    currentExpression = result.toString();
  } catch (error) {
    document.getElementById("result").value = "Error";
  }
}
