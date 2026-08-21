const englishBox = document.getElementById("englishBox");

englishBox.addEventListener("input", transliterate);

function transliterate() {

    const text = englishBox.value;

    const words = text.split(/\s+/);

    const currentWord = words[words.length - 1];

    if (currentWord === "") {
        showSuggestions([]);
        return;
    }

    const suggestions = generateSuggestions(currentWord.toLowerCase());

    showSuggestions(suggestions);
}

function generateSuggestions(word) {

    const keys = Object.keys(map).sort((a,b)=>b.length-a.length);

    let results=[""];

    let i=0;

    while(i<word.length){

        let matched=false;

        for(const key of keys){

            if(word.startsWith(key,i)){

                matched=true;

                let values=map[key];

                if(!Array.isArray(values))
                    values=[values];

                let temp=[];

                for(const r of results){

                    for(const v of values){

                        temp.push(r+v);

                    }

                }

                results=temp;

                i+=key.length;

                break;
            }
        }

        if(!matched){

            results=results.map(x=>x+word[i]);

            i++;

        }

    }

    return [...new Set(results)];
}