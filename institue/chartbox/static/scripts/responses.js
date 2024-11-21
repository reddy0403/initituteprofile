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
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    }
    else if(input=="iloveyou"){
         return"love you too";
    } 

else if(input=="Which course should I choose ?"){
    return "do you know basics";

}
else if(input=="do we have to pay for the course"){
    return "no";
}

else if (input=="yes"){
return "I suggest you to choose python";}

else if(input=="no"){
    return"then start with c or java";
}
else {
    return "Try asking something else!";
}
}