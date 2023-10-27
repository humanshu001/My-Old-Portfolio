const texts = ["My Portfolio Website", "Humanshu Jaglan's Website"];
let index = 0;
let textIndex = 0;
let isTyping = true;
const typingSpeed = 100; // Adjust the typing speed in milliseconds
const backspaceSpeed = 100; // Adjust the backspace speed in milliseconds
const delayAfterText2 = 1000; // 5-second delay after typing text2
let delayTimeout = null;

function typeText() {
    const currentText = texts[textIndex];
    const element = document.getElementById('text');
    if (isTyping) {
        if (index < currentText.length) {
            element.innerHTML += currentText.charAt(index);
            index++;
            setTimeout(typeText, typingSpeed);
        } else {
            isTyping = false;
            delayTimeout = setTimeout(startBackspace, delayAfterText2);
        }
    } else {
        if (index > 0) {
            element.innerHTML = currentText.substring(0, index - 1);
            index--;
            setTimeout(typeText, backspaceSpeed);
        } else {
            isTyping = true;
            textIndex = (textIndex + 1) % texts.length; // Toggle between texts
            setTimeout(typeText, typingSpeed);
        }
    }
}

function startBackspace() {
    clearTimeout(delayTimeout); // Clear the delay timeout
    index = texts[textIndex].length; // Set index to the end of the text
    isTyping = false;
    setTimeout(typeText, backspaceSpeed);
}

window.onload = function() {
    typeText();
};