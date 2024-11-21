function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello welcome to ssct!";
    } else if (input == "what type of courses available") {
        return "we can provaid html,css,js,ds...";
    } else {
        return "Try asking something else!";
    }
}