function groupNumber(bilangan) {
    var splitSpace = bilangan.split(' ');
    var clearSpace = splitSpace.join('');
    var splitDash = clearSpace.split('-');
    var bil = splitDash.join('');
    var hasil = [];
    
    var maks = (Math.floor(bil.length/3))*3;   
    if (bil.length%3 == 0) {
        maks--;
    } 
    
    for (let i = 0; i <= maks; i+=3) {
        var part = bil.substr(i,3);
        if (part.length == 1) {
            part = bil.substr(i-1,3);
            hasil[hasil.length-1] = bil.substr(i-3,2);
        }          
        hasil.push(part);
    }
    console.log(hasil);
    return(console.log(hasil.join('-')));
}

groupNumber('993141 -1 1323 14-232');