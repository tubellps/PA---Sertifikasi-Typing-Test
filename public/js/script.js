//Random Quotes API URL

const quoteApiUrl =
    "https://api.quotable.io/random?minLength=200&maxLength=300";

const quoteSection = document.getElementById("quote");
const userInput = document.getElementById("quote-input");

let quote = "";
let time = 60;
let timer = "";
let mistakes = 0;

//Menampilkan random quotes
const renderNewQuote = async () => {
    //mengambil konten dari url
    const response = await fetch(quoteApiUrl);

    //respon
    let data = await response.json();

    //mengakses quote
    quote = data.content;

    //susunan karakter dalam quote
    let arr = quote.split("").map((value) => {
        //membungkus karakter
        return "<span class='quote-chars'>" + value + "</span>";
    });

    //join array for displaying - menggabungkan dengan array
    quoteSection.innerHTML += arr.join("");
};

//logic for comparing input words with quote - logika membandingkan inputan kata dengan quote
userInput.addEventListener("input", () => {
    let quoteChars = document.querySelectorAll(".quote-chars");

    //create an array from recived span tags
    quoteChars = Array.from(quoteChars);

    //array of user input characters - array dari inputan tulisan peserta
    let userInputChars = userInput.value.split("");

    //loop through each character in quote
    //(pembeda inputan yang benar dan salah dengan warna pada karakter)
    quoteChars.forEach((char, index) => {
        //check if char(quote character) = userInputChars[index] (input character)
        if (char.innerText == userInputChars[index]) {
            char.classList.add("success");
        }

        //if user hasn't entered anything of backspaced
        else if (userInputChars[index] == null) {
            //remove class if any
            if (char.classList.contains("success")) {
                char.classList.remove("success");
            } else {
                char.classList.remove("fail");
            }
        }

        //if user entered wrong character - untuk karakter salah
        else {
            //checks if we already have added fail class
            if (!char.classList.contains("fail")) {
                //increment and display mistakes
                mistakes += 1;
                char.classList.add("fail");
            }
            document.getElementById("mistakes").innerText = mistakes;
        }
        //returns true if all the characters are entered correctly
        //untuk karakter benar
        let check = quoteChars.every((element) => {
            return element.classList.contains("success");
        });
        //end test if all characters are correct
        if (check) {
            displayResult();
        }
    });
});

//update timer on screen
function updateTimer() {
    if (time == 0) {
        //end test if timer reaches 0
        displayResult();
    } else {
        document.getElementById("timer").innerText = --time + "s";
    }
}

//sets timer
const timeReduce = () => {
    time = 60;
    timer = setInterval(updateTimer, 1000);
    //hitungan waktu dalam miliseconds
    //fungsi dapat berulang-ulang
};

//end test
const displayResult = () => {
    //display result div - menampilkan hasil test
    document.querySelector(".result").style.display = "block";
    clearInterval(timer);
    document.getElementById("stop-test").style.display = "none";
    userInput.disabled = true;
    let timeTaken = 1;
    if (time != 0) {
        timeTaken = (60 - time) / 100;
    }
    document.getElementById("wpm").innerText =
        (userInput.value.length / 5 / timeTaken).toFixed(2) + " wpm";

    document.getElementById("accuracy").innerText =
        Math.round(
            ((userInput.value.length - mistakes) / userInput.value.length) * 100
        ) + " %";
};

//start test
const startTest = () => {
    mistakes = 0;
    timer = "";
    userInput.disabled = false;
    timeReduce();
    document.getElementById("start-test").style.display = "none";
    document.getElementById("stop-test").style.display = "block";
};

window.onload = () => {
    userInput.value = "";
    document.getElementById("start-test").style.display = "block";
    document.getElementById("stop-test").style.display = "none";
    userInput.disabled = true;
    renderNewQuote();
};
