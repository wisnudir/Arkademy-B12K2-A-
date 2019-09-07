function count_vowels(text) {
    var hasil = 0;
    for (let i = 0; i < text.length; i++) {        
        if (/[aeiouAEIOU]/.test(text[i])) {
            hasil++;
        }        
    }
    return(console.log(hasil));
}
count_vowels('programmer');
count_vowels('hmm..');