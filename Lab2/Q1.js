/**
 * 1. Write a program that takes input from the user through the input field
and when the button is clicked,check for the validations of the number
and display the multiplication table.
 */
function generateTable() {
    // Get input value
    let number = document.getElementById("num").value;

    // Validation
    if (number === "") {
        alert("Please enter a number.");
        return;
    }

    if (isNaN(number)) {
        alert("Please enter a valid numeric value.");
        return;
    }

    // Generate multiplication table
    let result = "<h3>Multiplication Table of " + number + "</h3>";

    for (let i = 1; i <= 10; i++) {
        result += number + " × " + i + " = " + (number * i) + "<br>";
    }

    // Display result
    document.getElementById("output").innerHTML = result;
}
