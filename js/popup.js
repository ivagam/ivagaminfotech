const suggestion = document.getElementById("suggestions");

let currentIndex = -1;
let suggestionItems = [];

function positionPopup() {

    const input = englishBox;

    const text = input.value.substring(0, input.selectionStart);

    const canvas = document.createElement("canvas");
    const ctx = canvas.getContext("2d");

    const style = getComputedStyle(input);

    ctx.font = style.font;

    const textWidth = ctx.measureText(text).width;

    suggestion.style.left = (30 + textWidth) + "px";
}

function showSuggestions(words){

    positionPopup();

    suggestion.innerHTML = "";
    suggestionItems = [];
    currentIndex = -1;

    if(!words || words.length <= 1){
        suggestion.style.display = "none";
        return;
    }

    suggestion.style.display = "block";

    words.forEach(word => {

        const item = document.createElement("div");

        item.className = "item";
        item.textContent = word;

       item.onclick = function () {

            let words = englishBox.value.split(/\s+/);

            words[words.length - 1] = word;

            englishBox.value = words.join(" ");

            suggestion.style.display = "none";

            currentIndex = -1;
            suggestionItems = [];

            englishBox.focus();

            englishBox.selectionStart =
            englishBox.selectionEnd =
            englishBox.value.length;
        };

        suggestion.appendChild(item);
        suggestionItems.push(item);

    });

}

englishBox.addEventListener("keydown", function(e){

    switch(e.key){

        case "ArrowDown":

            if(suggestion.style.display=="none") return;

            e.preventDefault();

            currentIndex++;

            if(currentIndex >= suggestionItems.length)
                currentIndex = 0;

            updateSelection();

            break;

        case "ArrowUp":

            if(suggestion.style.display=="none") return;

            e.preventDefault();

            currentIndex--;

            if(currentIndex < 0)
                currentIndex = suggestionItems.length - 1;

            updateSelection();

            break;

        case "Enter":

        case "Tab":

            if(suggestion.style.display=="none") return;

            if(currentIndex >= 0){

                e.preventDefault();

                suggestionItems[currentIndex].click();

            }

            break;

        case "Escape":

            suggestion.style.display = "none";

            currentIndex = -1;
            suggestionItems = [];

            break;

        case " ":

            suggestion.style.display = "none";

            currentIndex = -1;
            suggestionItems = [];

            wordCompleted = true;

            break;

    }

});

function updateSelection(){

    suggestionItems.forEach(item => item.classList.remove("active"));

    if(currentIndex >= 0){

        suggestionItems[currentIndex].classList.add("active");

        suggestionItems[currentIndex].scrollIntoView({
            block: "nearest"
        });

    }

}

document.addEventListener("click", function(e){

    if(!suggestion.contains(e.target) && e.target !== englishBox){

        suggestion.style.display = "none";

        currentIndex = -1;
        suggestionItems = [];

    }

});